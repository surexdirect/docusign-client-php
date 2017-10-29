<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class MatchBox
{
    /**
     * @var int
     */
    protected $height;
    /**
     * @var int
     */
    protected $pageNumber;
    /**
     * @var int
     */
    protected $width;
    /**
     * @var int
     */
    protected $xPosition;
    /**
     * @var int
     */
    protected $yPosition;

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param int $height
     *
     * @return self
     */
    public function setHeight($height = null)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * @return int
     */
    public function getPageNumber()
    {
        return $this->pageNumber;
    }

    /**
     * @param int $pageNumber
     *
     * @return self
     */
    public function setPageNumber($pageNumber = null)
    {
        $this->pageNumber = $pageNumber;

        return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param int $width
     *
     * @return self
     */
    public function setWidth($width = null)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * @return int
     */
    public function getXPosition()
    {
        return $this->xPosition;
    }

    /**
     * @param int $xPosition
     *
     * @return self
     */
    public function setXPosition($xPosition = null)
    {
        $this->xPosition = $xPosition;

        return $this;
    }

    /**
     * @return int
     */
    public function getYPosition()
    {
        return $this->yPosition;
    }

    /**
     * @param int $yPosition
     *
     * @return self
     */
    public function setYPosition($yPosition = null)
    {
        $this->yPosition = $yPosition;

        return $this;
    }
}
