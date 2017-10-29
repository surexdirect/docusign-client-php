<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class RecipientPhoneAuthentication
{
    /**
     * @var string
     */
    protected $recipMayProvideNumber;
    /**
     * @var string
     */
    protected $recordVoicePrint;
    /**
     * @var string[]
     */
    protected $senderProvidedNumbers;
    /**
     * @var string
     */
    protected $validateRecipProvidedNumber;

    /**
     * @return string
     */
    public function getRecipMayProvideNumber()
    {
        return $this->recipMayProvideNumber;
    }

    /**
     * @param string $recipMayProvideNumber
     *
     * @return self
     */
    public function setRecipMayProvideNumber($recipMayProvideNumber = null)
    {
        $this->recipMayProvideNumber = $recipMayProvideNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getRecordVoicePrint()
    {
        return $this->recordVoicePrint;
    }

    /**
     * @param string $recordVoicePrint
     *
     * @return self
     */
    public function setRecordVoicePrint($recordVoicePrint = null)
    {
        $this->recordVoicePrint = $recordVoicePrint;

        return $this;
    }

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

    /**
     * @return string
     */
    public function getValidateRecipProvidedNumber()
    {
        return $this->validateRecipProvidedNumber;
    }

    /**
     * @param string $validateRecipProvidedNumber
     *
     * @return self
     */
    public function setValidateRecipProvidedNumber($validateRecipProvidedNumber = null)
    {
        $this->validateRecipProvidedNumber = $validateRecipProvidedNumber;

        return $this;
    }
}
