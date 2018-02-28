<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class CaptiveRecipientInformation
{
    /**
     * A complex type containing information about one or more captive recipients.
     *
     * @var CaptiveRecipient[]
     */
    protected $captiveRecipients;

    /**
     * A complex type containing information about one or more captive recipients.
     *
     * @return CaptiveRecipient[]
     */
    public function getCaptiveRecipients(): ?array
    {
        return $this->captiveRecipients;
    }

    /**
     * A complex type containing information about one or more captive recipients.
     *
     * @param CaptiveRecipient[] $captiveRecipients
     *
     * @return self
     */
    public function setCaptiveRecipients(?array $captiveRecipients): self
    {
        $this->captiveRecipients = $captiveRecipients;

        return $this;
    }
}
