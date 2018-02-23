<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class RecipientFormData
{
    /**
     * @var string
     */
    protected $declinedTime;
    /**
     * @var string
     */
    protected $deliveredTime;
    /**
     * @var string
     */
    protected $email;
    /**
     * @var NameValue[]
     */
    protected $formData;
    /**
     * @var string
     */
    protected $name;
    /**
     * Unique for the recipient. It is used by the tab element to indicate which recipient is to sign the Document.
     *
     * @var string
     */
    protected $recipientId;
    /**
     * @var string
     */
    protected $sentTime;
    /**
     * @var string
     */
    protected $signedTime;

    /**
     * @return string
     */
    public function getDeclinedTime(): ?string
    {
        return $this->declinedTime;
    }

    /**
     * @param string $declinedTime
     *
     * @return self
     */
    public function setDeclinedTime(?string $declinedTime): self
    {
        $this->declinedTime = $declinedTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveredTime(): ?string
    {
        return $this->deliveredTime;
    }

    /**
     * @param string $deliveredTime
     *
     * @return self
     */
    public function setDeliveredTime(?string $deliveredTime): self
    {
        $this->deliveredTime = $deliveredTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

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
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Unique for the recipient. It is used by the tab element to indicate which recipient is to sign the Document.
     *
     * @return string
     */
    public function getRecipientId(): ?string
    {
        return $this->recipientId;
    }

    /**
     * Unique for the recipient. It is used by the tab element to indicate which recipient is to sign the Document.
     *
     * @param string $recipientId
     *
     * @return self
     */
    public function setRecipientId(?string $recipientId): self
    {
        $this->recipientId = $recipientId;

        return $this;
    }

    /**
     * @return string
     */
    public function getSentTime(): ?string
    {
        return $this->sentTime;
    }

    /**
     * @param string $sentTime
     *
     * @return self
     */
    public function setSentTime(?string $sentTime): self
    {
        $this->sentTime = $sentTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignedTime(): ?string
    {
        return $this->signedTime;
    }

    /**
     * @param string $signedTime
     *
     * @return self
     */
    public function setSignedTime(?string $signedTime): self
    {
        $this->signedTime = $signedTime;

        return $this;
    }
}
