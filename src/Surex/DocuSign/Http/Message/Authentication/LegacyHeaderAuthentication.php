<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Http\Message\Authentication;

use Http\Message\Authentication;
use Psr\Http\Message\RequestInterface;

/**
 * Class LegacyHeaderAuthentication.
 *
 * @author Wesley O. Nichols <spanishwes@gmail.com>
 */
class LegacyHeaderAuthentication implements Authentication
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $integratorKey;

    /**
     * @param string $username
     * @param string $password
     * @param string $integratorKey
     */
    public function __construct($username, $password, $integratorKey)
    {
        $this->username      = $username;
        $this->password      = $password;
        $this->integratorKey = $integratorKey;
    }

    /**
     * {@inheritdoc}
     */
    public function authenticate(RequestInterface $request)
    {
        $header = json_encode([
            'Username'      => $this->username,
            'Password'      => $this->password,
            'IntegratorKey' => $this->integratorKey,
        ]);

        return $request->withHeader('X-DocuSign-Authentication', $header);
    }
}
