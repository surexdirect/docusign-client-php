<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Attachment
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
     * Specifies the type of the attachment for the recipient.
     *
     * @var string
     */
    protected $attachmentType;
    /**
     * @var string
     */
    protected $data;
    /**
     * @var string
     */
    protected $label;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $remoteUrl;

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
     * Specifies the type of the attachment for the recipient.
     *
     * @return string
     */
    public function getAttachmentType(): ?string
    {
        return $this->attachmentType;
    }

    /**
     * Specifies the type of the attachment for the recipient.
     *
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
     * @return string
     */
    public function getData(): ?string
    {
        return $this->data;
    }

    /**
     * @param string $data
     *
     * @return self
     */
    public function setData(?string $data): self
    {
        $this->data = $data;

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

    /**
     * @return string
     */
    public function getRemoteUrl(): ?string
    {
        return $this->remoteUrl;
    }

    /**
     * @param string $remoteUrl
     *
     * @return self
     */
    public function setRemoteUrl(?string $remoteUrl): self
    {
        $this->remoteUrl = $remoteUrl;

        return $this;
    }
}
