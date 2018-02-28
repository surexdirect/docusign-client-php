<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class InlineTemplate
{
    /**
     * Custom Fields.
     *
     * @var AccountCustomFields
     */
    protected $customFields;
    /**
     * Complex element contains the details on the documents in the envelope.
     *
     * @var Document[]
     */
    protected $documents;
    /**
     * Envelope creation, management.
     *
     * @var Envelopes
     */
    protected $envelope;
    /**
     * Envelope recipients.
     *
     * @var EnvelopeRecipients
     */
    protected $recipients;
    /**
     * Specifies the order in which templates are overlaid.
     *
     * @var string
     */
    protected $sequence;

    /**
     * Custom Fields.
     *
     * @return AccountCustomFields
     */
    public function getCustomFields(): ?AccountCustomFields
    {
        return $this->customFields;
    }

    /**
     * Custom Fields.
     *
     * @param AccountCustomFields $customFields
     *
     * @return self
     */
    public function setCustomFields(?AccountCustomFields $customFields): self
    {
        $this->customFields = $customFields;

        return $this;
    }

    /**
     * Complex element contains the details on the documents in the envelope.
     *
     * @return Document[]
     */
    public function getDocuments(): ?array
    {
        return $this->documents;
    }

    /**
     * Complex element contains the details on the documents in the envelope.
     *
     * @param Document[] $documents
     *
     * @return self
     */
    public function setDocuments(?array $documents): self
    {
        $this->documents = $documents;

        return $this;
    }

    /**
     * Envelope creation, management.
     *
     * @return Envelopes
     */
    public function getEnvelope(): ?Envelopes
    {
        return $this->envelope;
    }

    /**
     * Envelope creation, management.
     *
     * @param Envelopes $envelope
     *
     * @return self
     */
    public function setEnvelope(?Envelopes $envelope): self
    {
        $this->envelope = $envelope;

        return $this;
    }

    /**
     * Envelope recipients.
     *
     * @return EnvelopeRecipients
     */
    public function getRecipients(): ?EnvelopeRecipients
    {
        return $this->recipients;
    }

    /**
     * Envelope recipients.
     *
     * @param EnvelopeRecipients $recipients
     *
     * @return self
     */
    public function setRecipients(?EnvelopeRecipients $recipients): self
    {
        $this->recipients = $recipients;

        return $this;
    }

    /**
     * Specifies the order in which templates are overlaid.
     *
     * @return string
     */
    public function getSequence(): ?string
    {
        return $this->sequence;
    }

    /**
     * Specifies the order in which templates are overlaid.
     *
     * @param string $sequence
     *
     * @return self
     */
    public function setSequence(?string $sequence): self
    {
        $this->sequence = $sequence;

        return $this;
    }
}
