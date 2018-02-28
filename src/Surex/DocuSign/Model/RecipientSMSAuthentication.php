<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class RecipientSMSAuthentication
{
    /**
     * An Array containing a list of phone numbers the recipient may use for SMS text authentication.
     *
     * @var string[]
     */
    protected $senderProvidedNumbers;

    /**
     * An Array containing a list of phone numbers the recipient may use for SMS text authentication.
     *
     * @return string[]
     */
    public function getSenderProvidedNumbers(): ?array
    {
        return $this->senderProvidedNumbers;
    }

    /**
     * An Array containing a list of phone numbers the recipient may use for SMS text authentication.
     *
     * @param string[] $senderProvidedNumbers
     *
     * @return self
     */
    public function setSenderProvidedNumbers(?array $senderProvidedNumbers): self
    {
        $this->senderProvidedNumbers = $senderProvidedNumbers;

        return $this;
    }
}
