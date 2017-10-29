<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class CaptiveRecipientInformation
{
    /**
     * @var CaptiveRecipient[]
     */
    protected $captiveRecipients;

    /**
     * @return CaptiveRecipient[]
     */
    public function getCaptiveRecipients()
    {
        return $this->captiveRecipients;
    }

    /**
     * @param CaptiveRecipient[] $captiveRecipients
     *
     * @return self
     */
    public function setCaptiveRecipients(array $captiveRecipients = null)
    {
        $this->captiveRecipients = $captiveRecipients;

        return $this;
    }
}
