<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class ConnectFailureResult
{
    /**
     * @var string
     */
    protected $configId;
    /**
     * @var string
     */
    protected $configUrl;
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
    protected $statusMessage;

    /**
     * @return string
     */
    public function getConfigId()
    {
        return $this->configId;
    }

    /**
     * @param string $configId
     *
     * @return self
     */
    public function setConfigId($configId = null)
    {
        $this->configId = $configId;

        return $this;
    }

    /**
     * @return string
     */
    public function getConfigUrl()
    {
        return $this->configUrl;
    }

    /**
     * @param string $configUrl
     *
     * @return self
     */
    public function setConfigUrl($configUrl = null)
    {
        $this->configUrl = $configUrl;

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
    public function getStatusMessage()
    {
        return $this->statusMessage;
    }

    /**
     * @param string $statusMessage
     *
     * @return self
     */
    public function setStatusMessage($statusMessage = null)
    {
        $this->statusMessage = $statusMessage;

        return $this;
    }
}
