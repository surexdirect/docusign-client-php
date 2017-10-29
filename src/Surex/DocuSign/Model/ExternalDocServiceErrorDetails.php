<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class ExternalDocServiceErrorDetails
{
    /**
     * @var string
     */
    protected $authenticationUrl;
    /**
     * @var string
     */
    protected $errorCode;
    /**
     * @var string
     */
    protected $message;

    /**
     * @return string
     */
    public function getAuthenticationUrl()
    {
        return $this->authenticationUrl;
    }

    /**
     * @param string $authenticationUrl
     *
     * @return self
     */
    public function setAuthenticationUrl($authenticationUrl = null)
    {
        $this->authenticationUrl = $authenticationUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @param string $errorCode
     *
     * @return self
     */
    public function setErrorCode($errorCode = null)
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     *
     * @return self
     */
    public function setMessage($message = null)
    {
        $this->message = $message;

        return $this;
    }
}
