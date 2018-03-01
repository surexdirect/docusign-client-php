<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Http\Message\Authentication;

use Http\Message\Authentication;
use Psr\Http\Message\RequestInterface;
use Surex\DocuSign\Authentication\TokenFetcher;

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
     *
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
        return $request->withHeader(
            'Authorization',
            sprintf('Bearer %s', $this->tokenFetcher->fetchAccessToken()->getToken())
        );
    }
}
