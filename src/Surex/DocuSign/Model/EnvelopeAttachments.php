<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
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
    public function getAccessControl()
    {
        return $this->accessControl;
    }

    /**
     * @param string $accessControl
     *
     * @return self
     */
    public function setAccessControl($accessControl = null)
    {
        $this->accessControl = $accessControl;

        return $this;
    }

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
     * @return ErrorDetails
     */
    public function getErrorDetails()
    {
        return $this->errorDetails;
    }

    /**
     * @param ErrorDetails $errorDetails
     *
     * @return self
     */
    public function setErrorDetails(ErrorDetails $errorDetails = null)
    {
        $this->errorDetails = $errorDetails;

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
}
