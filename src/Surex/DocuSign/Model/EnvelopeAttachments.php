<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class EnvelopeAttachments
{
    /**
     * @var string
     */
    protected $accessControl;
    /**
     * @var string
     */
    protected $attachmentId;
    /**
     * @var string
     */
    protected $attachmentType;
    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * @var string
     */
    protected $label;
    /**
     * @var string
     */
    protected $name;

    /**
     * @return string
     */
    public function getAccessControl(): ?string
    {
        return $this->accessControl;
    }

    /**
     * @param string $accessControl
     *
     * @return self
     */
    public function setAccessControl(?string $accessControl): self
    {
        $this->accessControl = $accessControl;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttachmentId(): ?string
    {
        return $this->attachmentId;
    }

    /**
     * @param string $attachmentId
     *
     * @return self
     */
    public function setAttachmentId(?string $attachmentId): self
    {
        $this->attachmentId = $attachmentId;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttachmentType(): ?string
    {
        return $this->attachmentType;
    }

    /**
     * @param string $attachmentType
     *
     * @return self
     */
    public function setAttachmentType(?string $attachmentType): self
    {
        $this->attachmentType = $attachmentType;

        return $this;
    }

    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @return ErrorDetails
     */
    public function getErrorDetails(): ?ErrorDetails
    {
        return $this->errorDetails;
    }

    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @param ErrorDetails $errorDetails
     *
     * @return self
     */
    public function setErrorDetails(?ErrorDetails $errorDetails): self
    {
        $this->errorDetails = $errorDetails;

        return $this;
    }

    /**
     * @return string
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * @param string $label
     *
     * @return self
     */
    public function setLabel(?string $label): self
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
