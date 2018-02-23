<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class ConnectFailureResult
{
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $configId;
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $configUrl;
    /**
     * The envelope ID of the envelope status that failed to post.
     *
     * @var string
     */
    protected $envelopeId;
    /**
     * Indicates the envelope status. Valid values are:.

     * sent - The envelope is sent to the recipients.
     * created - The envelope is saved as a draft and can be modified and sent later.
     *
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $statusMessage;

    /**
     * Reserved: TBD.
     *
     * @return string
     */
    public function getConfigId(): ?string
    {
        return $this->configId;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $configId
     *
     * @return self
     */
    public function setConfigId(?string $configId): self
    {
        $this->configId = $configId;

        return $this;
    }

    /**
     * Reserved: TBD.
     *
     * @return string
     */
    public function getConfigUrl(): ?string
    {
        return $this->configUrl;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $configUrl
     *
     * @return self
     */
    public function setConfigUrl(?string $configUrl): self
    {
        $this->configUrl = $configUrl;

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

    /**
     * Indicates the envelope status. Valid values are:.

     * sent - The envelope is sent to the recipients.
     * created - The envelope is saved as a draft and can be modified and sent later.
     *
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Indicates the envelope status. Valid values are:.

     * sent - The envelope is sent to the recipients.
     * created - The envelope is saved as a draft and can be modified and sent later.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatusMessage(): ?string
    {
        return $this->statusMessage;
    }

    /**
     * @param string $statusMessage
     *
     * @return self
     */
    public function setStatusMessage(?string $statusMessage): self
    {
        $this->statusMessage = $statusMessage;

        return $this;
    }
}
