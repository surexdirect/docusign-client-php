<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class ErrorDetails
{
    /**
     * An error code associated with the error.
     *
     * @var string
     */
    protected $errorCode;
    /**
     * A short error message.
     *
     * @var string
     */
    protected $message;

    /**
     * An error code associated with the error.
     *
     * @return string
     */
    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }

    /**
     * An error code associated with the error.
     *
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
     * A short error message.
     *
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * A short error message.
     *
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
