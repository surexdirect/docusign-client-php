<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class Notification
{
    /**
     * A complex element that specifies the expiration settings for the envelope.
     *
     * @var Expirations
     */
    protected $expirations;
    /**
     * A complex element that specifies reminder settings for the envelope.
     *
     * @var Reminders
     */
    protected $reminders;
    /**
     * When set to **true**, the account default notification settings are used for the envelope.
     *
     * @var string
     */
    protected $useAccountDefaults;

    /**
     * A complex element that specifies the expiration settings for the envelope.
     *
     * @return Expirations
     */
    public function getExpirations(): ?Expirations
    {
        return $this->expirations;
    }

    /**
     * A complex element that specifies the expiration settings for the envelope.
     *
     * @param Expirations $expirations
     *
     * @return self
     */
    public function setExpirations(?Expirations $expirations): self
    {
        $this->expirations = $expirations;

        return $this;
    }

    /**
     * A complex element that specifies reminder settings for the envelope.
     *
     * @return Reminders
     */
    public function getReminders(): ?Reminders
    {
        return $this->reminders;
    }

    /**
     * A complex element that specifies reminder settings for the envelope.
     *
     * @param Reminders $reminders
     *
     * @return self
     */
    public function setReminders(?Reminders $reminders): self
    {
        $this->reminders = $reminders;

        return $this;
    }

    /**
     * When set to **true**, the account default notification settings are used for the envelope.
     *
     * @return string
     */
    public function getUseAccountDefaults(): ?string
    {
        return $this->useAccountDefaults;
    }

    /**
     * When set to **true**, the account default notification settings are used for the envelope.
     *
     * @param string $useAccountDefaults
     *
     * @return self
     */
    public function setUseAccountDefaults(?string $useAccountDefaults): self
    {
        $this->useAccountDefaults = $useAccountDefaults;

        return $this;
    }
}
