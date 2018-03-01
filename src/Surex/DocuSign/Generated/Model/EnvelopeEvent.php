<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class EnvelopeEvent
{
    /**
     * An envelope status for which your webhook should be called. Values: Draft, Sent, Delivered, Completed, Declined, or Voided.
     *
     * @var string
     */
    protected $envelopeEventStatusCode;
    /**
     * reserved.
     *
     * @var string
     */
    protected $includeDocuments;

    /**
     * An envelope status for which your webhook should be called. Values: Draft, Sent, Delivered, Completed, Declined, or Voided.
     *
     * @return string
     */
    public function getEnvelopeEventStatusCode(): ?string
    {
        return $this->envelopeEventStatusCode;
    }

    /**
     * An envelope status for which your webhook should be called. Values: Draft, Sent, Delivered, Completed, Declined, or Voided.
     *
     * @param string $envelopeEventStatusCode
     *
     * @return self
     */
    public function setEnvelopeEventStatusCode(?string $envelopeEventStatusCode): self
    {
        $this->envelopeEventStatusCode = $envelopeEventStatusCode;

        return $this;
    }

    /**
     * reserved.
     *
     * @return string
     */
    public function getIncludeDocuments(): ?string
    {
        return $this->includeDocuments;
    }

    /**
     * reserved.
     *
     * @param string $includeDocuments
     *
     * @return self
     */
    public function setIncludeDocuments(?string $includeDocuments): self
    {
        $this->includeDocuments = $includeDocuments;

        return $this;
    }
}
