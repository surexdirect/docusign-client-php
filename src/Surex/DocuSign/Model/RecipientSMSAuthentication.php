<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class RecipientSMSAuthentication
{
    /**
     * @var string[]
     */
    protected $senderProvidedNumbers;

    /**
     * @return string[]
     */
    public function getSenderProvidedNumbers()
    {
        return $this->senderProvidedNumbers;
    }

    /**
     * @param string[] $senderProvidedNumbers
     *
     * @return self
     */
    public function setSenderProvidedNumbers(array $senderProvidedNumbers = null)
    {
        $this->senderProvidedNumbers = $senderProvidedNumbers;

        return $this;
    }
}
