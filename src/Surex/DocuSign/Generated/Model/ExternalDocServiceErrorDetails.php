<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class ExternalDocServiceErrorDetails
{
    /**
     * Reserved: TBD.
     *
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
     * Reserved: TBD.
     *
     * @return string
     */
    public function getAuthenticationUrl(): ?string
    {
        return $this->authenticationUrl;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $authenticationUrl
     *
     * @return self
     */
    public function setAuthenticationUrl(?string $authenticationUrl): self
    {
        $this->authenticationUrl = $authenticationUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }

    /**
     * @param string $errorCode
     *
     * @return self
     */
    public function setErrorCode(?string $errorCode): self
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string $message
     *
     * @return self
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }
}
