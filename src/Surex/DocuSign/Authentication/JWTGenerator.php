<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Authentication;

use Firebase\JWT\JWT;

/**
 * Class JWTGenerator.
 *
 * @author Wesley O. Nichols <spanishwes@gmail.com>
 */
class JWTGenerator
{
    /**
     * @var string
     */
    private $privateKey;

    /**
     * @var string
     */
    private $integratorKey;

    /**
     * @var string
     */
    private $host;

    /**
     * @var string
     */
    private $scope = 'signature impersonation';

    /**
     * JWTGenerator constructor.
     *
     * @param string      $privateKey
     * @param string      $integratorKey
     * @param string      $host
     * @param string|null $scope
     */
    public function __construct($privateKey, $integratorKey, $host, $scope = null)
    {
        $this->privateKey    = $privateKey;
        $this->integratorKey = $integratorKey;
        $this->host          = $host;
        if (null !== $scope) {
            $this->scope = $scope;
        }
    }

    public function generate($userId)
    {
        $now = time();

        $assertion = [
            'iss'   => $this->integratorKey,
            'sub'   => $userId,
            'iat'   => $now,
            'exp'   => $now + 3600,
            'aud'   => $this->host,
            'scope' => $this->scope,
        ];

        return JWT::encode($assertion, $this->privateKey, 'RS256');
    }
}
