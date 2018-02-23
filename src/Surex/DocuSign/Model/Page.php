<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Page
{
    /**
     * The number of dots per inch used for the page image.
     *
     * @var string
     */
    protected $dpi;
    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * Height of the tab in pixels.
     *
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
     * Width of the tab in pixels.
     *
     * @var string
     */
    protected $width;

    /**
     * The number of dots per inch used for the page image.
     *
     * @return string
     */
    public function getDpi(): ?string
    {
        return $this->dpi;
    }

    /**
     * The number of dots per inch used for the page image.
     *
     * @param string $dpi
     *
     * @return self
     */
    public function setDpi(?string $dpi): self
    {
        $this->dpi = $dpi;

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
     * Height of the tab in pixels.
     *
     * @return string
     */
    public function getHeight(): ?string
    {
        return $this->height;
    }

    /**
     * Height of the tab in pixels.
     *
     * @param string $height
     *
     * @return self
     */
    public function setHeight(?string $height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * @return string
     */
    public function getImageBytes(): ?string
    {
        return $this->imageBytes;
    }

    /**
     * @param string $imageBytes
     *
     * @return self
     */
    public function setImageBytes(?string $imageBytes): self
    {
        $this->imageBytes = $imageBytes;

        return $this;
    }

    /**
     * @return string
     */
    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }

    /**
     * @param string $mimeType
     *
     * @return self
     */
    public function setMimeType(?string $mimeType): self
    {
        $this->mimeType = $mimeType;

        return $this;
    }

    /**
     * @return string
     */
    public function getPageId(): ?string
    {
        return $this->pageId;
    }

    /**
     * @param string $pageId
     *
     * @return self
     */
    public function setPageId(?string $pageId): self
    {
        $this->pageId = $pageId;

        return $this;
    }

    /**
     * @return string
     */
    public function getSequence(): ?string
    {
        return $this->sequence;
    }

    /**
     * @param string $sequence
     *
     * @return self
     */
    public function setSequence(?string $sequence): self
    {
        $this->sequence = $sequence;

        return $this;
    }

    /**
     * Width of the tab in pixels.
     *
     * @return string
     */
    public function getWidth(): ?string
    {
        return $this->width;
    }

    /**
     * Width of the tab in pixels.
     *
     * @param string $width
     *
     * @return self
     */
    public function setWidth(?string $width): self
    {
        $this->width = $width;

        return $this;
    }
}
