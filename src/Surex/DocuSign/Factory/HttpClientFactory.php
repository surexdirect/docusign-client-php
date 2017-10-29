<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Factory;

use Http\Client\Common\Plugin;
use Http\Client\Common\PluginClient;
use Http\Client\HttpClient;
use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\MessageFactoryDiscovery;
use Http\Discovery\UriFactoryDiscovery;
use Http\Message\MessageFactory;
use Http\Message\StreamFactory;
use Http\Message\UriFactory;
use Psr\Cache\CacheItemPoolInterface;
use Surex\DocuSign\Authentication\JWTGenerator;
use Surex\DocuSign\Authentication\JWTTokenFetcher;
use Surex\DocuSign\Cache\MemoryCacheItemPool;
use Surex\DocuSign\Http\Client\CodeAuthorizationClient;
use Surex\DocuSign\Http\Message\Authentication\JWTAuthentication;
use Surex\DocuSign\Authentication\CachedTokenFetcher;
use Surex\DocuSign\User\DocuSignUser;

class HttpClientFactory
{
    const AUTH_ENDPOINT = [
        'debug'   => 'https://account-d.docusign.com',
        'default' => 'https://account.docusign.com',
    ];

    const API_ENDPOINT = [
        'debug'   => 'https://demo.docusign.net',
        'default' => 'https://www.docusign.net',
    ];

    /**
     * @var bool
     */
    private $debug = true;

    /**
     * @var string
     */
    private $integratorKey;

    /**
     * @var string
     */
    private $secret;

    /**
     * @var string
     */
    private $privateKey;

    /**
     * @var UriFactory
     */
    private $uriFactory;

    /**
     * @var HttpClient
     */
    private $httpClient;

    /**
     * @var CacheItemPoolInterface
     */
    private $pool;

    /**
     * @var StreamFactory
     */
    private $streamFactory;

    /**
     * @var MessageFactory
     */
    private $messageFactory;

    /**
     * HttpClientFactory constructor.
     *
     * @param bool        $debug
     * @param string      $integratorKey
     * @param string      $secret
     * @param string|null $privateKey
     */
    public function __construct($debug, $integratorKey, $secret, $privateKey = null)
    {
        $this->debug         = $debug;
        $this->integratorKey = $integratorKey;
        $this->secret        = $secret;
        $this->privateKey    = $privateKey;
    }

    public function createAuthorizationCodeRedirectUrl($redirect, $scope = 'signature impersonation')
    {
        $query   = [
            'response_type' => 'code',
            'scope'         => $scope,
            'client_id'     => $this->integratorKey,
            'redirect_uri'  => $redirect,
        ];
        $request = $this->getUriFactory()->createUri('/oauth/auth?'.http_build_query($query));

        $host = $this->getAuthEndpoint();

        return $request
            ->withHost($host->getHost())
            ->withScheme($host->getScheme())
            ->withPort($host->getPort())
        ;
    }

    public function createCodeAuthorizationClient()
    {
        return new CodeAuthorizationClient(
            $this->integratorKey,
            $this->secret,
            new PluginClient(
                $this->getHttpClient(),
                $this->getDefaultAuthPlugins()
            ),
            $this->getMessageFactory()
        );
    }

    public function getDefaultAuthPlugins()
    {
        return [
            new Plugin\HeaderDefaultsPlugin([
                'User-Agent' => 'surexdirect-docusign-php/v1 (https://github.com/surexdirect/docusign-client-php)',
            ]),
            new Plugin\BaseUriPlugin($this->getAuthEndpoint()),
        ];
    }

    public function getDefaultApiPlugins()
    {
        return [
            new Plugin\HeaderDefaultsPlugin([
                'User-Agent' => 'surexdirect-docusign-php/v1 (https://github.com/surexdirect/docusign-client-php)',
            ]),
            new Plugin\BaseUriPlugin($this->getApiEndpoint()),
        ];
    }

    /**
     * @param DocuSignUser $user
     *
     * @return PluginClient
     */
    public function createServiceIntegrationClient(DocuSignUser $user)
    {
        $plugins = $this->getDefaultApiPlugins();
        $plugins[] = new Plugin\AuthenticationPlugin(
            new JWTAuthentication($this->getTokenStorage($user, true))
        );
//            new Plugin\CachePlugin(
//                $this->pool,
//                $this->streamFactory,
//                ['cache_key_generator' => new Plugin\Cache\Generator\HeaderCacheKeyGenerator([
//                    'Host',
//                    'RequestUri',
//                ])]
//            ),


        return new PluginClient($this->getHttpClient(), $plugins);
    }

    /**
     * @param UriFactory $uriFactory
     *
     * @return HttpClientFactory
     */
    public function setUriFactory(UriFactory $uriFactory)
    {
        $this->uriFactory = $uriFactory;

        return $this;
    }

    /**
     * @param HttpClient $httpClient
     *
     * @return HttpClientFactory
     */
    public function setHttpClient(HttpClient $httpClient)
    {
        $this->httpClient = $httpClient;

        return $this;
    }

    /**
     * @param CacheItemPoolInterface $pool
     *
     * @return HttpClientFactory
     */
    public function setPool($pool)
    {
        $this->pool = $pool;

        return $this;
    }

    /**
     * @param StreamFactory $streamFactory
     *
     * @return HttpClientFactory
     */
    public function setStreamFactory($streamFactory)
    {
        $this->streamFactory = $streamFactory;

        return $this;
    }

    /**
     * @return MessageFactory
     */
    public function getMessageFactory()
    {
        if (null === $this->messageFactory) {
            $this->messageFactory = MessageFactoryDiscovery::find();
        }

        return $this->messageFactory;
    }

    /**
     * @return UriFactory
     */
    private function getUriFactory()
    {
        if (null === $this->uriFactory) {
            $this->uriFactory = UriFactoryDiscovery::find();
        }

        return $this->uriFactory;
    }

    /**
     * @return HttpClient
     */
    private function getHttpClient()
    {
        if (null === $this->httpClient) {
            $this->httpClient = HttpClientDiscovery::find();
        }

        return $this->httpClient;
    }

    /**
     * @return \Psr\Http\Message\UriInterface
     */
    private function getAuthEndpoint()
    {
        $service = $this->debug ? 'debug' : 'default';

        return $this->getUriFactory()->createUri(self::AUTH_ENDPOINT[$service]);
    }

    private function getApiEndpoint()
    {
        $service = $this->debug ? 'debug' : 'default';

        return $this->getUriFactory()->createUri(self::API_ENDPOINT[$service]);
    }

    private function getTokenStorage(DocuSignUser $user, $cached = false)
    {
        $fetcher = new JWTTokenFetcher(
            new JWTGenerator(
                $this->privateKey,
                $this->integratorKey,
                $this->getAuthEndpoint()->getHost()
            ),
            new PluginClient(
                $this->getHttpClient(),
                $this->getDefaultAuthPlugins()
            ),
            $this->getMessageFactory(),
            $user
        );

        if (!$cached) {
            return $fetcher;
        }

        return new CachedTokenFetcher(new MemoryCacheItemPool(), $fetcher, $user);
    }
}
