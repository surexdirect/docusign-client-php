<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class RecipientEmailNotification
{
    /**
     * @var string
     */
    protected $emailBody;
    /**
     * @var string
     */
    protected $emailSubject;
    /**
     * @var string
     */
    protected $supportedLanguage;

    /**
     * @return string
     */
    public function getEmailBody()
    {
        return $this->emailBody;
    }

    /**
     * @param string $emailBody
     *
     * @return self
     */
    public function setEmailBody($emailBody = null)
    {
        $this->emailBody = $emailBody;

        return $this;
    }

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
    public function getSupportedLanguage()
    {
        return $this->supportedLanguage;
    }

    /**
     * @param string $supportedLanguage
     *
     * @return self
     */
    public function setSupportedLanguage($supportedLanguage = null)
    {
        $this->supportedLanguage = $supportedLanguage;

        return $this;
    }
}
