<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class RecipientSignatureProviderOptions
{
    /**
     * @var string
     */
    protected $cpfNumber;
    /**
     * @var string
     */
    protected $oneTimePassword;
    /**
     * @var string
     */
    protected $signerRole;
    /**
     * @var string
     */
    protected $sms;

    /**
     * @return string
     */
    public function getCpfNumber()
    {
        return $this->cpfNumber;
    }

    /**
     * @param string $cpfNumber
     *
     * @return self
     */
    public function setCpfNumber($cpfNumber = null)
    {
        $this->cpfNumber = $cpfNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getOneTimePassword()
    {
        return $this->oneTimePassword;
    }

    /**
     * @param string $oneTimePassword
     *
     * @return self
     */
    public function setOneTimePassword($oneTimePassword = null)
    {
        $this->oneTimePassword = $oneTimePassword;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignerRole()
    {
        return $this->signerRole;
    }

    /**
     * @param string $signerRole
     *
     * @return self
     */
    public function setSignerRole($signerRole = null)
    {
        $this->signerRole = $signerRole;

        return $this;
    }

    /**
     * @return string
     */
    public function getSms()
    {
        return $this->sms;
    }

    /**
     * @param string $sms
     *
     * @return self
     */
    public function setSms($sms = null)
    {
        $this->sms = $sms;

        return $this;
    }
}
