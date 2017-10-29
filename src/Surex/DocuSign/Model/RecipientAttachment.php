<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class RecipientAttachment
{
    /**
     * @var string
     */
    protected $attachmentId;
    /**
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
    public function getAttachmentId()
    {
        return $this->attachmentId;
    }

    /**
     * @param string $attachmentId
     *
     * @return self
     */
    public function setAttachmentId($attachmentId = null)
    {
        $this->attachmentId = $attachmentId;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttachmentType()
    {
        return $this->attachmentType;
    }

    /**
     * @param string $attachmentType
     *
     * @return self
     */
    public function setAttachmentType($attachmentType = null)
    {
        $this->attachmentType = $attachmentType;

        return $this;
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param string $data
     *
     * @return self
     */
    public function setData($data = null)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     *
     * @return self
     */
    public function setLabel($label = null)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getRemoteUrl()
    {
        return $this->remoteUrl;
    }

    /**
     * @param string $remoteUrl
     *
     * @return self
     */
    public function setRemoteUrl($remoteUrl = null)
    {
        $this->remoteUrl = $remoteUrl;

        return $this;
    }
}
