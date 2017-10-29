<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Reminders
{
    /**
     * @var string
     */
    protected $reminderDelay;
    /**
     * @var string
     */
    protected $reminderEnabled;
    /**
     * @var string
     */
    protected $reminderFrequency;

    /**
     * @return string
     */
    public function getReminderDelay()
    {
        return $this->reminderDelay;
    }

    /**
     * @param string $reminderDelay
     *
     * @return self
     */
    public function setReminderDelay($reminderDelay = null)
    {
        $this->reminderDelay = $reminderDelay;

        return $this;
    }

    /**
     * @return string
     */
    public function getReminderEnabled()
    {
        return $this->reminderEnabled;
    }

    /**
     * @param string $reminderEnabled
     *
     * @return self
     */
    public function setReminderEnabled($reminderEnabled = null)
    {
        $this->reminderEnabled = $reminderEnabled;

        return $this;
    }

    /**
     * @return string
     */
    public function getReminderFrequency()
    {
        return $this->reminderFrequency;
    }

    /**
     * @param string $reminderFrequency
     *
     * @return self
     */
    public function setReminderFrequency($reminderFrequency = null)
    {
        $this->reminderFrequency = $reminderFrequency;

        return $this;
    }
}
