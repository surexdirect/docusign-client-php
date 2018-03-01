<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Authentication;

/**
 * Class Token.
 *
 * @author Wesley O. Nichols <spanishwes@gmail.com>
 */
class Token implements \JsonSerializable
{
    /**
     * @var string
     */
    protected $accessToken;

    /**
     * @var int
     */
    protected $expires;

    /**
     * @var string
     */
    protected $refreshToken;

    /**
     * @var array
     */
    protected $values = [];

    public function __construct(array $options = [])
    {
        if (empty($options['access_token'])) {
            throw new \InvalidArgumentException('Required option not passed: "access_token"');
        }

        $this->accessToken = $options['access_token'];

        if (!empty($options['refresh_token'])) {
            $this->refreshToken = $options['refresh_token'];
        }

        if (isset($options['expires_in'])) {
            $this->expires = 0 !== $options['expires_in'] ? time() + $options['expires_in'] : 0;
        }

        if (isset($options['expires'])) {
            $this->expires = $options['expires'];
        }

        $this->values = array_diff_key($options, array_flip([
            'access_token',
            'refresh_token',
            'expires_in',
        ]));
    }

    /**
     * Returns the token key.
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->getToken();
    }

    /**
     * Returns the access token string of this instance.
     *
     * @return string
     */
    public function getToken()
    {
        return $this->accessToken;
    }

    /**
     * Returns the refresh token, if defined.
     *
     * @return string|null
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    /**
     * Returns the expiration timestamp, if defined.
     *
     * @return int|null
     */
    public function getExpires()
    {
        return $this->expires;
    }

    /**
     * Checks if this token has expired.
     *
     * @return bool true if the token has expired, false otherwise
     */
    public function hasExpired()
    {
        $expires = $this->getExpires();

        return $expires < time();
    }

    /**
     * Returns additional vendor values stored in the token.
     *
     * @return array
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Returns an array of parameters to serialize when this is serialized with
     * json_encode().
     *
     * @return array
     */
    public function jsonSerialize()
    {
        $parameters = $this->values;

        if ($this->accessToken) {
            $parameters['access_token'] = $this->accessToken;
        }

        if ($this->refreshToken) {
            $parameters['refresh_token'] = $this->refreshToken;
        }

        if ($this->expires) {
            $parameters['expires'] = $this->expires;
        }

        return $parameters;
    }
}
