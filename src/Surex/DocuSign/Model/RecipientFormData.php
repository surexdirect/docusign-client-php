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
    public function getDeclinedTime()
    {
        return $this->declinedTime;
    }

    /**
     * @param string $declinedTime
     *
     * @return self
     */
    public function setDeclinedTime($declinedTime = null)
    {
        $this->declinedTime = $declinedTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveredTime()
    {
        return $this->deliveredTime;
    }

    /**
     * @param string $deliveredTime
     *
     * @return self
     */
    public function setDeliveredTime($deliveredTime = null)
    {
        $this->deliveredTime = $deliveredTime;

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
    public function getRecipientId()
    {
        return $this->recipientId;
    }

    /**
     * @param string $recipientId
     *
     * @return self
     */
    public function setRecipientId($recipientId = null)
    {
        $this->recipientId = $recipientId;

        return $this;
    }

    /**
     * @return string
     */
    public function getSentTime()
    {
        return $this->sentTime;
    }

    /**
     * @param string $sentTime
     *
     * @return self
     */
    public function setSentTime($sentTime = null)
    {
        $this->sentTime = $sentTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignedTime()
    {
        return $this->signedTime;
    }

    /**
     * @param string $signedTime
     *
     * @return self
     */
    public function setSignedTime($signedTime = null)
    {
        $this->signedTime = $signedTime;

        return $this;
    }
}
