<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BulkRecipient
{
    /**
     * @var string
     */
    protected $accessCode;
    /**
     * @var string
     */
    protected $email;
    /**
     * @var ErrorDetails[]
     */
    protected $errorDetails;
    /**
     * @var string
     */
    protected $identification;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $note;
    /**
     * @var string
     */
    protected $phoneNumber;
    /**
     * @var BulkRecipientSignatureProvider[]
     */
    protected $recipientSignatureProviderInfo;
    /**
     * @var string
     */
    protected $rowNumber;
    /**
     * @var BulkRecipientTabLabel[]
     */
    protected $tabLabels;

    /**
     * @return string
     */
    public function getAccessCode()
    {
        return $this->accessCode;
    }

    /**
     * @param string $accessCode
     *
     * @return self
     */
    public function setAccessCode($accessCode = null)
    {
        $this->accessCode = $accessCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return self
     */
    public function setEmail($email = null)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return ErrorDetails[]
     */
    public function getErrorDetails()
    {
        return $this->errorDetails;
    }

    /**
     * @param ErrorDetails[] $errorDetails
     *
     * @return self
     */
    public function setErrorDetails(array $errorDetails = null)
    {
        $this->errorDetails = $errorDetails;

        return $this;
    }

    /**
     * @return string
     */
    public function getIdentification()
    {
        return $this->identification;
    }

    /**
     * @param string $identification
     *
     * @return self
     */
    public function setIdentification($identification = null)
    {
        $this->identification = $identification;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param string $note
     *
     * @return self
     */
    public function setNote($note = null)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * @return BulkRecipientSignatureProvider[]
     */
    public function getRecipientSignatureProviderInfo()
    {
        return $this->recipientSignatureProviderInfo;
    }

    /**
     * @param BulkRecipientSignatureProvider[] $recipientSignatureProviderInfo
     *
     * @return self
     */
    public function setRecipientSignatureProviderInfo(array $recipientSignatureProviderInfo = null)
    {
        $this->recipientSignatureProviderInfo = $recipientSignatureProviderInfo;

        return $this;
    }

    /**
     * @return string
     */
    public function getRowNumber()
    {
        return $this->rowNumber;
    }

    /**
     * @param string $rowNumber
     *
     * @return self
     */
    public function setRowNumber($rowNumber = null)
    {
        $this->rowNumber = $rowNumber;

        return $this;
    }

    /**
     * @return BulkRecipientTabLabel[]
     */
    public function getTabLabels()
    {
        return $this->tabLabels;
    }

    /**
     * @param BulkRecipientTabLabel[] $tabLabels
     *
     * @return self
     */
    public function setTabLabels(array $tabLabels = null)
    {
        $this->tabLabels = $tabLabels;

        return $this;
    }
}
