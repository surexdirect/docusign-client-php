<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class PowerFormData
{
    /**
     * The envelope ID of the envelope status that failed to post.
     *
     * @var string
     */
    protected $envelopeId;
    /**
     * An array of powerform recipients.
     *
     * @var PowerFormFormDataRecipient[]
     */
    protected $recipients;

    /**
     * The envelope ID of the envelope status that failed to post.
     *
     * @return string
     */
    public function getEnvelopeId(): ?string
    {
        return $this->envelopeId;
    }

    /**
     * The envelope ID of the envelope status that failed to post.
     *
     * @param string $envelopeId
     *
     * @return self
     */
    public function setEnvelopeId(?string $envelopeId): self
    {
        $this->envelopeId = $envelopeId;

        return $this;
    }

    /**
     * An array of powerform recipients.
     *
     * @return PowerFormFormDataRecipient[]
     */
    public function getRecipients(): ?array
    {
        return $this->recipients;
    }

    /**
     * An array of powerform recipients.
     *
     * @param PowerFormFormDataRecipient[] $recipients
     *
     * @return self
     */
    public function setRecipients(?array $recipients): self
    {
        $this->recipients = $recipients;

        return $this;
    }
}
