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
     * @var string
     */
    protected $envelopeId;

    /**
     * @return EnvelopeDocument[]
     */
    public function getEnvelopeDocuments()
    {
        return $this->envelopeDocuments;
    }

    /**
     * @param EnvelopeDocument[] $envelopeDocuments
     *
     * @return self
     */
    public function setEnvelopeDocuments(array $envelopeDocuments = null)
    {
        $this->envelopeDocuments = $envelopeDocuments;

        return $this;
    }

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
}
