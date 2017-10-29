<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class InlineTemplate
{
    /**
     * @var AccountCustomFields
     */
    protected $customFields;
    /**
     * @var Document[]
     */
    protected $documents;
    /**
     * @var Envelopes
     */
    protected $envelope;
    /**
     * @var EnvelopeRecipients
     */
    protected $recipients;
    /**
     * @var string
     */
    protected $sequence;

    /**
     * @return AccountCustomFields
     */
    public function getCustomFields()
    {
        return $this->customFields;
    }

    /**
     * @param AccountCustomFields $customFields
     *
     * @return self
     */
    public function setCustomFields(AccountCustomFields $customFields = null)
    {
        $this->customFields = $customFields;

        return $this;
    }

    /**
     * @return Document[]
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * @param Document[] $documents
     *
     * @return self
     */
    public function setDocuments(array $documents = null)
    {
        $this->documents = $documents;

        return $this;
    }

    /**
     * @return Envelopes
     */
    public function getEnvelope()
    {
        return $this->envelope;
    }

    /**
     * @param Envelopes $envelope
     *
     * @return self
     */
    public function setEnvelope(Envelopes $envelope = null)
    {
        $this->envelope = $envelope;

        return $this;
    }

    /**
     * @return EnvelopeRecipients
     */
    public function getRecipients()
    {
        return $this->recipients;
    }

    /**
     * @param EnvelopeRecipients $recipients
     *
     * @return self
     */
    public function setRecipients(EnvelopeRecipients $recipients = null)
    {
        $this->recipients = $recipients;

        return $this;
    }

    /**
     * @return string
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * @param string $sequence
     *
     * @return self
     */
    public function setSequence($sequence = null)
    {
        $this->sequence = $sequence;

        return $this;
    }
}
