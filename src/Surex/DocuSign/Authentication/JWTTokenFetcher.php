<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Authentication;

use Http\Client\HttpClient;
use Http\Message\RequestFactory;
use Surex\DocuSign\Exception\AuthenticationException;
use Surex\DocuSign\User\DocuSignUserProvider;

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
     * @var DocuSignUserProvider
     */
    private $userProvider;

    /**
     * JWTTokenFetcher constructor.
     *
     * @param JWTGenerator         $generator
     * @param HttpClient           $httpClient
     * @param RequestFactory       $requestFactory
     * @param DocuSignUserProvider $user
     */
    public function __construct(
        JWTGenerator $generator,
        HttpClient $httpClient,
        RequestFactory $requestFactory,
        DocuSignUserProvider $user
    ) {
        $this->generator      = $generator;
        $this->httpClient     = $httpClient;
        $this->requestFactory = $requestFactory;
        $this->userProvider   = $user;
    }

    /**
     * @return Token
     */
    public function fetchAccessToken(): Token
    {
        $request = $this->requestFactory->createRequest(
            'POST',
            '/oauth/token',
            ['Content-Type' => 'application/x-www-form-urlencoded'],
            http_build_query([
                'grant_type' => self::JWT_URN,
                'assertion'  => $this->generator->generate($this->userProvider->getDocuSignUser()->getDocuSignUserId()),
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
