<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class DateStampProperties
{
    /**
     * @var string
     */
    protected $dateAreaHeight;
    /**
     * @var string
     */
    protected $dateAreaWidth;
    /**
     * @var string
     */
    protected $dateAreaX;
    /**
     * @var string
     */
    protected $dateAreaY;

    /**
     * @return string
     */
    public function getDateAreaHeight()
    {
        return $this->dateAreaHeight;
    }

    /**
     * @param string $dateAreaHeight
     *
     * @return self
     */
    public function setDateAreaHeight($dateAreaHeight = null)
    {
        $this->dateAreaHeight = $dateAreaHeight;

        return $this;
    }

    /**
     * @return string
     */
    public function getDateAreaWidth()
    {
        return $this->dateAreaWidth;
    }

    /**
     * @param string $dateAreaWidth
     *
     * @return self
     */
    public function setDateAreaWidth($dateAreaWidth = null)
    {
        $this->dateAreaWidth = $dateAreaWidth;

        return $this;
    }

    /**
     * @return string
     */
    public function getDateAreaX()
    {
        return $this->dateAreaX;
    }

    /**
     * @param string $dateAreaX
     *
     * @return self
     */
    public function setDateAreaX($dateAreaX = null)
    {
        $this->dateAreaX = $dateAreaX;

        return $this;
    }

    /**
     * @return string
     */
    public function getDateAreaY()
    {
        return $this->dateAreaY;
    }

    /**
     * @param string $dateAreaY
     *
     * @return self
     */
    public function setDateAreaY($dateAreaY = null)
    {
        $this->dateAreaY = $dateAreaY;

        return $this;
    }
}
