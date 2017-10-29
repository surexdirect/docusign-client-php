<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class TemplateNotificationRequest
{
    /**
     * @var Expirations
     */
    protected $expirations;
    /**
     * @var string
     */
    protected $password;
    /**
     * @var Reminders
     */
    protected $reminders;
    /**
     * @var string
     */
    protected $useAccountDefaults;

    /**
     * @return Expirations
     */
    public function getExpirations()
    {
        return $this->expirations;
    }

    /**
     * @param Expirations $expirations
     *
     * @return self
     */
    public function setExpirations(Expirations $expirations = null)
    {
        $this->expirations = $expirations;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     *
     * @return self
     */
    public function setPassword($password = null)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return Reminders
     */
    public function getReminders()
    {
        return $this->reminders;
    }

    /**
     * @param Reminders $reminders
     *
     * @return self
     */
    public function setReminders(Reminders $reminders = null)
    {
        $this->reminders = $reminders;

        return $this;
    }

    /**
     * @return string
     */
    public function getUseAccountDefaults()
    {
        return $this->useAccountDefaults;
    }

    /**
     * @param string $useAccountDefaults
     *
     * @return self
     */
    public function setUseAccountDefaults($useAccountDefaults = null)
    {
        $this->useAccountDefaults = $useAccountDefaults;

        return $this;
    }
}
