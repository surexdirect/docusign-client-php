<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Http\Client;

use Http\Client\HttpClient;
use Http\Message\Authentication;
use Http\Message\RequestFactory;
use Surex\DocuSign\Exception\AuthenticationException;

/**
 * Class CodeAuthorizationClient.
 *
 * @author Wesley O. Nichols <spanishwes@gmail.com>
 */
class CodeAuthorizationClient
{
    /**
     * @var string
     */
    private $integratorKey;
    /**
     * @var string
     */
    private $secret;

    /**
     * @var HttpClient
     */
    private $httpClient;

    /**
     * @var RequestFactory
     */
    private $requestFactory;

    /**
     * CodeAuthorizationClient constructor.
     *
     * @param string         $integratorKey
     * @param string         $secret
     * @param HttpClient     $httpClient
     * @param RequestFactory $requestFactory
     */
    public function __construct($integratorKey, $secret, HttpClient $httpClient, RequestFactory $requestFactory)
    {
        $this->integratorKey  = $integratorKey;
        $this->secret         = $secret;
        $this->httpClient     = $httpClient;
        $this->requestFactory = $requestFactory;
    }

    public function fetchUserSubFromAuthCode($code)
    {
        // Token request from Authorization Code
        $request = $this->requestFactory->createRequest(
            'POST',
            '/oauth/token',
            ['Content-Type' => 'application/x-www-form-urlencoded'],
            http_build_query([
                'grant_type' => 'authorization_code',
                'code'       => $code,
            ])
        );
        $request      = (new Authentication\BasicAuth($this->integratorKey, $this->secret))->authenticate($request);
        $response     = $this->httpClient->sendRequest($request);
        $responseData = json_decode($response->getBody()->getContents(), true);

        if (200 !== $response->getStatusCode()) {
            throw new AuthenticationException($responseData['error']);
        }

        // User Info Request using Access Token
        $request = $this->requestFactory->createRequest(
            'GET',
            '/oauth/userinfo'
        );
        $request      = (new Authentication\Bearer($responseData['access_token']))->authenticate($request);
        $response     = $this->httpClient->sendRequest($request);
        $responseData = json_decode($response->getBody()->getContents(), true);

        if (200 !== $response->getStatusCode()) {
            throw new AuthenticationException($responseData['error']);
        }

        return $responseData;
    }
}
