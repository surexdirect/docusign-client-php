<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class EnvelopeFormData
{
    /**
     * @var string
     */
    protected $emailSubject;
    /**
     * @var string
     */
    protected $envelopeId;
    /**
     * @var NameValue[]
     */
    protected $formData;
    /**
     * @var RecipientFormData[]
     */
    protected $recipientFormData;
    /**
     * @var string
     */
    protected $sentDateTime;
    /**
     * @var string
     */
    protected $status;

    /**
     * @return string
     */
    public function getEmailSubject()
    {
        return $this->emailSubject;
    }

    /**
     * @param string $emailSubject
     *
     * @return self
     */
    public function setEmailSubject($emailSubject = null)
    {
        $this->emailSubject = $emailSubject;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnvelopeId()
    {
        return $this->envelopeId;
    }

    /**
     * @param string $envelopeId
     *
     * @return self
     */
    public function setEnvelopeId($envelopeId = null)
    {
        $this->envelopeId = $envelopeId;

        return $this;
    }

    /**
     * @return NameValue[]
     */
    public function getFormData()
    {
        return $this->formData;
    }

    /**
     * @param NameValue[] $formData
     *
     * @return self
     */
    public function setFormData(array $formData = null)
    {
        $this->formData = $formData;

        return $this;
    }

    /**
     * @return RecipientFormData[]
     */
    public function getRecipientFormData()
    {
        return $this->recipientFormData;
    }

    /**
     * @param RecipientFormData[] $recipientFormData
     *
     * @return self
     */
    public function setRecipientFormData(array $recipientFormData = null)
    {
        $this->recipientFormData = $recipientFormData;

        return $this;
    }

    /**
     * @return string
     */
    public function getSentDateTime()
    {
        return $this->sentDateTime;
    }

    /**
     * @param string $sentDateTime
     *
     * @return self
     */
    public function setSentDateTime($sentDateTime = null)
    {
        $this->sentDateTime = $sentDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus($status = null)
    {
        $this->status = $status;

        return $this;
    }
}
