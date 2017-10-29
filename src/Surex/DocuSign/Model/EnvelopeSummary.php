<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class EnvelopeSummary
{
    /**
     * @var string
     */
    protected $envelopeId;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $statusDateTime;
    /**
     * @var string
     */
    protected $uri;

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
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus($status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatusDateTime()
    {
        return $this->statusDateTime;
    }

    /**
     * @param string $statusDateTime
     *
     * @return self
     */
    public function setStatusDateTime($statusDateTime = null)
    {
        $this->statusDateTime = $statusDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @param string $uri
     *
     * @return self
     */
    public function setUri($uri = null)
    {
        $this->uri = $uri;

        return $this;
    }
}
