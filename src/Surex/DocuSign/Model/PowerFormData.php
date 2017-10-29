<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class PowerFormData
{
    /**
     * @var string
     */
    protected $envelopeId;
    /**
     * @var PowerFormFormDataRecipient[]
     */
    protected $recipients;

    /**
     * @return string
     */
    public function getEnvelopeId()
    {
        return $this->envelopeId;
    }

    /**
     * @param string $envelopeId
     *
     * @return self
     */
    public function setEnvelopeId($envelopeId = null)
    {
        $this->envelopeId = $envelopeId;

        return $this;
    }

    /**
     * @return PowerFormFormDataRecipient[]
     */
    public function getRecipients()
    {
        return $this->recipients;
    }

    /**
     * @param PowerFormFormDataRecipient[] $recipients
     *
     * @return self
     */
    public function setRecipients(array $recipients = null)
    {
        $this->recipients = $recipients;

        return $this;
    }
}
