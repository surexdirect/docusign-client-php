<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class MatchBox
{
    /**
     * Height of the tab in pixels.
     *
     * @var int
     */
    protected $height;
    /**
     * Specifies the page number on which the tab is located.
     Must be 1 for [supplemental documents][supdocs].

     [supdocs]: /esign/guide/appendix/glossary.html#supplemental-documents

     *
     * @var int
     */
    protected $pageNumber;
    /**
     * Width of the tab in pixels.
     *
     * @var int
     */
    protected $width;
    /**
     * This indicates the horizontal offset of the object on the page.
     DocuSign uses 72 DPI when determining position.
     Required. May be zero.

     *
     * @var int
     */
    protected $xPosition;
    /**
     * This indicates the vertical offset of the object on the page. DocuSign uses 72 DPI when determining position.
     *
     * @var int
     */
    protected $yPosition;

    /**
     * Height of the tab in pixels.
     *
     * @return int
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * Height of the tab in pixels.
     *
     * @param int $height
     *
     * @return self
     */
    public function setHeight(?int $height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Specifies the page number on which the tab is located.
     Must be 1 for [supplemental documents][supdocs].

     [supdocs]: /esign/guide/appendix/glossary.html#supplemental-documents

     *
     * @return int
     */
    public function getPageNumber(): ?int
    {
        return $this->pageNumber;
    }

    /**
     * Specifies the page number on which the tab is located.
     Must be 1 for [supplemental documents][supdocs].

     [supdocs]: /esign/guide/appendix/glossary.html#supplemental-documents

     *
     * @param int $pageNumber
     *
     * @return self
     */
    public function setPageNumber(?int $pageNumber): self
    {
        $this->pageNumber = $pageNumber;

        return $this;
    }

    /**
     * Width of the tab in pixels.
     *
     * @return int
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * Width of the tab in pixels.
     *
     * @param int $width
     *
     * @return self
     */
    public function setWidth(?int $width): self
    {
        $this->width = $width;

        return $this;
    }

    /**
     * This indicates the horizontal offset of the object on the page.
     DocuSign uses 72 DPI when determining position.
     Required. May be zero.

     *
     * @return int
     */
    public function getXPosition(): ?int
    {
        return $this->xPosition;
    }

    /**
     * This indicates the horizontal offset of the object on the page.
     DocuSign uses 72 DPI when determining position.
     Required. May be zero.

     *
     * @param int $xPosition
     *
     * @return self
     */
    public function setXPosition(?int $xPosition): self
    {
        $this->xPosition = $xPosition;

        return $this;
    }

    /**
     * This indicates the vertical offset of the object on the page. DocuSign uses 72 DPI when determining position.
     *
     * @return int
     */
    public function getYPosition(): ?int
    {
        return $this->yPosition;
    }

    /**
     * This indicates the vertical offset of the object on the page. DocuSign uses 72 DPI when determining position.
     *
     * @param int $yPosition
     *
     * @return self
     */
    public function setYPosition(?int $yPosition): self
    {
        $this->yPosition = $yPosition;

        return $this;
    }
}
