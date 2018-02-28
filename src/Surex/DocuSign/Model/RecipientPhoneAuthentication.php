<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class RecipientPhoneAuthentication
{
    /**
     * Boolean. When set to **true**, the recipient can supply a phone number their choice.
     *
     * @var string
     */
    protected $recipMayProvideNumber;
    /**
     * Reserved.
     *
     * @var string
     */
    protected $recordVoicePrint;
    /**
     * An Array containing a list of phone numbers the recipient may use for SMS text authentication.
     *
     * @var string[]
     */
    protected $senderProvidedNumbers;
    /**
     *  Reserved.
     *
     * @var string
     */
    protected $validateRecipProvidedNumber;

    /**
     * Boolean. When set to **true**, the recipient can supply a phone number their choice.
     *
     * @return string
     */
    public function getRecipMayProvideNumber(): ?string
    {
        return $this->recipMayProvideNumber;
    }

    /**
     * Boolean. When set to **true**, the recipient can supply a phone number their choice.
     *
     * @param string $recipMayProvideNumber
     *
     * @return self
     */
    public function setRecipMayProvideNumber(?string $recipMayProvideNumber): self
    {
        $this->recipMayProvideNumber = $recipMayProvideNumber;

        return $this;
    }

    /**
     * Reserved.
     *
     * @return string
     */
    public function getRecordVoicePrint(): ?string
    {
        return $this->recordVoicePrint;
    }

    /**
     * Reserved.
     *
     * @param string $recordVoicePrint
     *
     * @return self
     */
    public function setRecordVoicePrint(?string $recordVoicePrint): self
    {
        $this->recordVoicePrint = $recordVoicePrint;

        return $this;
    }

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

    /**
     *  Reserved.
     *
     * @return string
     */
    public function getValidateRecipProvidedNumber(): ?string
    {
        return $this->validateRecipProvidedNumber;
    }

    /**
     *  Reserved.
     *
     * @param string $validateRecipProvidedNumber
     *
     * @return self
     */
    public function setValidateRecipProvidedNumber(?string $validateRecipProvidedNumber): self
    {
        $this->validateRecipProvidedNumber = $validateRecipProvidedNumber;

        return $this;
    }
}
