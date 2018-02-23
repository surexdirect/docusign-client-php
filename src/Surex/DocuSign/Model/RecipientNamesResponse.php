<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class RecipientNamesResponse
{
    /**
     * Indicates whether email address is used by more than one user.
     *
     * @var string
     */
    protected $multipleUsers;
    /**
     * @var string[]
     */
    protected $recipientNames;
    /**
     * @var string
     */
    protected $reservedRecipientEmail;

    /**
     * Indicates whether email address is used by more than one user.
     *
     * @return string
     */
    public function getMultipleUsers(): ?string
    {
        return $this->multipleUsers;
    }

    /**
     * Indicates whether email address is used by more than one user.
     *
     * @param string $multipleUsers
     *
     * @return self
     */
    public function setMultipleUsers(?string $multipleUsers): self
    {
        $this->multipleUsers = $multipleUsers;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getRecipientNames(): ?array
    {
        return $this->recipientNames;
    }

    /**
     * @param string[] $recipientNames
     *
     * @return self
     */
    public function setRecipientNames(?array $recipientNames): self
    {
        $this->recipientNames = $recipientNames;

        return $this;
    }

    /**
     * @return string
     */
    public function getReservedRecipientEmail(): ?string
    {
        return $this->reservedRecipientEmail;
    }

    /**
     * @param string $reservedRecipientEmail
     *
     * @return self
     */
    public function setReservedRecipientEmail(?string $reservedRecipientEmail): self
    {
        $this->reservedRecipientEmail = $reservedRecipientEmail;

        return $this;
    }
}
