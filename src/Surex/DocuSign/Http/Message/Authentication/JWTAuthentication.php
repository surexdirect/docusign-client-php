<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Http\Message\Authentication;

use Http\Message\Authentication;
use Psr\Http\Message\RequestInterface;
use Surex\DocuSign\Authentication\TokenFetcher;
use Surex\DocuSign\Exception\AuthenticationException;

/**
 * Class JWTGenerator.
 *
 * @author Wesley O. Nichols <spanishwes@gmail.com>
 */
class JWTAuthentication implements Authentication
{
    /**
     * @var TokenFetcher
     */
    private $tokenFetcher;

    /**
     * JWTAuthentication constructor.
     * @param TokenFetcher $tokenFetcher
     */
    public function __construct(TokenFetcher $tokenFetcher)
    {
        $this->tokenFetcher = $tokenFetcher;
    }

    /**
     * {@inheritdoc}
     */
    public function authenticate(RequestInterface $request)
    {
        if (!$token = $this->tokenFetcher->fetchAccessToken()) {
            throw new AuthenticationException('Cannot fetch access token');
        }

        return $request->withHeader('Authorization', sprintf('Bearer %s', $token->getToken()));
    }
}
