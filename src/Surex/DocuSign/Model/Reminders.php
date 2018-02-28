<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Reminders
{
    /**
     * An interger that sets the number of days after the recipient receives the envelope that reminder emails are sent to the recipient.
     *
     * @var string
     */
    protected $reminderDelay;
    /**
     * When set to **true**, the envelope expires (is no longer available for signing) in the set number of days. If false, the account default setting is used. If the account does not have an expiration setting, the DocuSign default value of 120 days is used.
     *
     * @var string
     */
    protected $reminderEnabled;
    /**
     * An interger that sets the interval, in days, between reminder emails.
     *
     * @var string
     */
    protected $reminderFrequency;

    /**
     * An interger that sets the number of days after the recipient receives the envelope that reminder emails are sent to the recipient.
     *
     * @return string
     */
    public function getReminderDelay(): ?string
    {
        return $this->reminderDelay;
    }

    /**
     * An interger that sets the number of days after the recipient receives the envelope that reminder emails are sent to the recipient.
     *
     * @param string $reminderDelay
     *
     * @return self
     */
    public function setReminderDelay(?string $reminderDelay): self
    {
        $this->reminderDelay = $reminderDelay;

        return $this;
    }

    /**
     * When set to **true**, the envelope expires (is no longer available for signing) in the set number of days. If false, the account default setting is used. If the account does not have an expiration setting, the DocuSign default value of 120 days is used.
     *
     * @return string
     */
    public function getReminderEnabled(): ?string
    {
        return $this->reminderEnabled;
    }

    /**
     * When set to **true**, the envelope expires (is no longer available for signing) in the set number of days. If false, the account default setting is used. If the account does not have an expiration setting, the DocuSign default value of 120 days is used.
     *
     * @param string $reminderEnabled
     *
     * @return self
     */
    public function setReminderEnabled(?string $reminderEnabled): self
    {
        $this->reminderEnabled = $reminderEnabled;

        return $this;
    }

    /**
     * An interger that sets the interval, in days, between reminder emails.
     *
     * @return string
     */
    public function getReminderFrequency(): ?string
    {
        return $this->reminderFrequency;
    }

    /**
     * An interger that sets the interval, in days, between reminder emails.
     *
     * @param string $reminderFrequency
     *
     * @return self
     */
    public function setReminderFrequency(?string $reminderFrequency): self
    {
        $this->reminderFrequency = $reminderFrequency;

        return $this;
    }
}
