<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class PowerFormFormDataRecipient
{
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
}
