<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class EnvelopeDocuments
{
    /**
     * @var EnvelopeDocument[]
     */
    protected $envelopeDocuments;
    /**
     * The envelope ID of the envelope status that failed to post.
     *
     * @var string
     */
    protected $envelopeId;

    /**
     * @return EnvelopeDocument[]
     */
    public function getEnvelopeDocuments(): ?array
    {
        return $this->envelopeDocuments;
    }

    /**
     * @param EnvelopeDocument[] $envelopeDocuments
     *
     * @return self
     */
    public function setEnvelopeDocuments(?array $envelopeDocuments): self
    {
        $this->envelopeDocuments = $envelopeDocuments;

        return $this;
    }

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
}
