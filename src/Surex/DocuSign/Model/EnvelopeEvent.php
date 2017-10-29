<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class EnvelopeEvent
{
    /**
     * @var string
     */
    protected $envelopeEventStatusCode;
    /**
     * @var string
     */
    protected $includeDocuments;

    /**
     * @return string
     */
    public function getEnvelopeEventStatusCode()
    {
        return $this->envelopeEventStatusCode;
    }

    /**
     * @param string $envelopeEventStatusCode
     *
     * @return self
     */
    public function setEnvelopeEventStatusCode($envelopeEventStatusCode = null)
    {
        $this->envelopeEventStatusCode = $envelopeEventStatusCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getIncludeDocuments()
    {
        return $this->includeDocuments;
    }

    /**
     * @param string $includeDocuments
     *
     * @return self
     */
    public function setIncludeDocuments($includeDocuments = null)
    {
        $this->includeDocuments = $includeDocuments;

        return $this;
    }
}
