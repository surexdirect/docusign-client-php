<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class RecipientNamesResponse
{
    /**
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
     * @return string
     */
    public function getMultipleUsers()
    {
        return $this->multipleUsers;
    }

    /**
     * @param string $multipleUsers
     *
     * @return self
     */
    public function setMultipleUsers($multipleUsers = null)
    {
        $this->multipleUsers = $multipleUsers;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getRecipientNames()
    {
        return $this->recipientNames;
    }

    /**
     * @param string[] $recipientNames
     *
     * @return self
     */
    public function setRecipientNames(array $recipientNames = null)
    {
        $this->recipientNames = $recipientNames;

        return $this;
    }

    /**
     * @return string
     */
    public function getReservedRecipientEmail()
    {
        return $this->reservedRecipientEmail;
    }

    /**
     * @param string $reservedRecipientEmail
     *
     * @return self
     */
    public function setReservedRecipientEmail($reservedRecipientEmail = null)
    {
        $this->reservedRecipientEmail = $reservedRecipientEmail;

        return $this;
    }
}
