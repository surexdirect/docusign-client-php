<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Http\Message\Authentication;

use Http\Message\Authentication;
use Psr\Http\Message\RequestInterface;
use Surex\DocuSign\Authentication\Token;

/**
 * Class OAuth2Authentication.
 *
 * @author Wesley O. Nichols <spanishwes@gmail.com>
 */
class OAuth2Authentication implements Authentication
{
    /**
     * @var string
     */
    private $token;

    /**
     * In the case where your token scope support On Behalf requests, set the email to the user on whose behalf the
     * current request should be authenticated.
     *
     * @var string
     */
    private $email;

    /**
     * OAuth2Authentication constructor.
     *
     * @param string $token
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    public function resetOnBehalf()
    {
        $this->email = null;
    }

    /**
     * @param string $email
     */
    public function setOnBehalfEmail($email)
    {
        $this->email = $email;
    }

    /**
     * {@inheritdoc}
     */
    public function authenticate(RequestInterface $request)
    {
        $request = $request->withHeader('Authorization', sprintf('Bearer %s', $this->token));

        if (null !== $this->email) {
            $request = $request->withHeader('X-DocuSign-Act-As-User', $this->email);
        }

        return $request;
    }
}
