<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Authentication;

use Http\Client\HttpClient;
use Http\Message\RequestFactory;
use Surex\DocuSign\Exception\AuthenticationException;
use Surex\DocuSign\User\DocuSignUser;

/**
 * Class JWTTokenFetcher.
 *
 * @author Wesley O. Nichols <spanishwes@gmail.com>
 */
class JWTTokenFetcher implements TokenFetcher
{
    const JWT_URN = 'urn:ietf:params:oauth:grant-type:jwt-bearer';

    /**
     * @var JWTGenerator
     */
    private $generator;

    /**
     * @var HttpClient
     */
    private $httpClient;

    /**
     * @var RequestFactory
     */
    private $requestFactory;

    /**
     * @var DocuSignUser
     */
    private $user;

    /**
     * JWTTokenFetcher constructor.
     *
     * @param JWTGenerator   $generator
     * @param HttpClient     $httpClient
     * @param RequestFactory $requestFactory
     * @param DocuSignUser   $user
     */
    public function __construct(
        JWTGenerator $generator,
        HttpClient $httpClient,
        RequestFactory $requestFactory,
        DocuSignUser $user
    ) {
        $this->generator      = $generator;
        $this->httpClient     = $httpClient;
        $this->requestFactory = $requestFactory;
        $this->user           = $user;
    }

    public function setDocusignUser(DocuSignUser $user)
    {
        $this->user = $user;
    }

    public function fetchAccessToken()
    {
        $request = $this->requestFactory->createRequest(
            'POST',
            '/oauth/token',
            ['Content-Type' => 'application/x-www-form-urlencoded'],
            http_build_query([
                'grant_type' => self::JWT_URN,
                'assertion'  => $this->generator->generate($this->user->getUserId()),
            ])
        );

        $response     = $this->httpClient->sendRequest($request);
        $responseData = json_decode($response->getBody()->getContents(), true);

        if (200 !== $response->getStatusCode()) {
            throw new AuthenticationException($responseData['error']);
        }

        return new Token($responseData);
    }
}
