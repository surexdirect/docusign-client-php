<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class EnvelopeFormData
{
    /**
     * Specifies the subject of the email that is sent to all recipients.

     See [ML:Template Email Subject Merge Fields] for information about adding merge field information to the email subject.
     *
     * @var string
     */
    protected $emailSubject;
    /**
     * The envelope ID of the envelope status that failed to post.
     *
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
     * The date and time the envelope was sent.
     *
     * @var string
     */
    protected $sentDateTime;
    /**
     * Indicates the envelope status. Valid values are:.

     * sent - The envelope is sent to the recipients.
     * created - The envelope is saved as a draft and can be modified and sent later.
     *
     * @var string
     */
    protected $status;

    /**
     * Specifies the subject of the email that is sent to all recipients.

     See [ML:Template Email Subject Merge Fields] for information about adding merge field information to the email subject.
     *
     * @return string
     */
    public function getEmailSubject(): ?string
    {
        return $this->emailSubject;
    }

    /**
     * Specifies the subject of the email that is sent to all recipients.

     See [ML:Template Email Subject Merge Fields] for information about adding merge field information to the email subject.
     *
     * @param string $emailSubject
     *
     * @return self
     */
    public function setEmailSubject(?string $emailSubject): self
    {
        $this->emailSubject = $emailSubject;

        return $this;
    }

    /**
     * The envelope ID of the envelope status that failed to post.
     *
     * @return string
     */
    public function getEnvelopeId(): ?string
    {
        return $this->envelopeId;
    }

    /**
     * The envelope ID of the envelope status that failed to post.
     *
     * @param string $envelopeId
     *
     * @return self
     */
    public function setEnvelopeId(?string $envelopeId): self
    {
        $this->envelopeId = $envelopeId;

        return $this;
    }

    /**
     * @return NameValue[]
     */
    public function getFormData(): ?array
    {
        return $this->formData;
    }

    /**
     * @param NameValue[] $formData
     *
     * @return self
     */
    public function setFormData(?array $formData): self
    {
        $this->formData = $formData;

        return $this;
    }

    /**
     * @return RecipientFormData[]
     */
    public function getRecipientFormData(): ?array
    {
        return $this->recipientFormData;
    }

    /**
     * @param RecipientFormData[] $recipientFormData
     *
     * @return self
     */
    public function setRecipientFormData(?array $recipientFormData): self
    {
        $this->recipientFormData = $recipientFormData;

        return $this;
    }

    /**
     * The date and time the envelope was sent.
     *
     * @return string
     */
    public function getSentDateTime(): ?string
    {
        return $this->sentDateTime;
    }

    /**
     * The date and time the envelope was sent.
     *
     * @param string $sentDateTime
     *
     * @return self
     */
    public function setSentDateTime(?string $sentDateTime): self
    {
        $this->sentDateTime = $sentDateTime;

        return $this;
    }

    /**
     * Indicates the envelope status. Valid values are:.

     * sent - The envelope is sent to the recipients.
     * created - The envelope is saved as a draft and can be modified and sent later.
     *
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Indicates the envelope status. Valid values are:.

     * sent - The envelope is sent to the recipients.
     * created - The envelope is saved as a draft and can be modified and sent later.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
