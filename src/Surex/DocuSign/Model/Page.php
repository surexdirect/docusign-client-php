<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Page
{
    /**
     * @var string
     */
    protected $dpi;
    /**
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * @var string
     */
    protected $height;
    /**
     * @var string
     */
    protected $imageBytes;
    /**
     * @var string
     */
    protected $mimeType;
    /**
     * @var string
     */
    protected $pageId;
    /**
     * @var string
     */
    protected $sequence;
    /**
     * @var string
     */
    protected $width;

    /**
     * @return string
     */
    public function getDpi()
    {
        return $this->dpi;
    }

    /**
     * @param string $dpi
     *
     * @return self
     */
    public function setDpi($dpi = null)
    {
        $this->dpi = $dpi;

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
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param string $height
     *
     * @return self
     */
    public function setHeight($height = null)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * @return string
     */
    public function getImageBytes()
    {
        return $this->imageBytes;
    }

    /**
     * @param string $imageBytes
     *
     * @return self
     */
    public function setImageBytes($imageBytes = null)
    {
        $this->imageBytes = $imageBytes;

        return $this;
    }

    /**
     * @return string
     */
    public function getMimeType()
    {
        return $this->mimeType;
    }

    /**
     * @param string $mimeType
     *
     * @return self
     */
    public function setMimeType($mimeType = null)
    {
        $this->mimeType = $mimeType;

        return $this;
    }

    /**
     * @return string
     */
    public function getPageId()
    {
        return $this->pageId;
    }

    /**
     * @param string $pageId
     *
     * @return self
     */
    public function setPageId($pageId = null)
    {
        $this->pageId = $pageId;

        return $this;
    }

    /**
     * @return string
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * @param string $sequence
     *
     * @return self
     */
    public function setSequence($sequence = null)
    {
        $this->sequence = $sequence;

        return $this;
    }

    /**
     * @return string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param string $width
     *
     * @return self
     */
    public function setWidth($width = null)
    {
        $this->width = $width;

        return $this;
    }
}
