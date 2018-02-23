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
    public function getDateAreaHeight(): ?string
    {
        return $this->dateAreaHeight;
    }

    /**
     * @param string $dateAreaHeight
     *
     * @return self
     */
    public function setDateAreaHeight(?string $dateAreaHeight): self
    {
        $this->dateAreaHeight = $dateAreaHeight;

        return $this;
    }

    /**
     * @return string
     */
    public function getDateAreaWidth(): ?string
    {
        return $this->dateAreaWidth;
    }

    /**
     * @param string $dateAreaWidth
     *
     * @return self
     */
    public function setDateAreaWidth(?string $dateAreaWidth): self
    {
        $this->dateAreaWidth = $dateAreaWidth;

        return $this;
    }

    /**
     * @return string
     */
    public function getDateAreaX(): ?string
    {
        return $this->dateAreaX;
    }

    /**
     * @param string $dateAreaX
     *
     * @return self
     */
    public function setDateAreaX(?string $dateAreaX): self
    {
        $this->dateAreaX = $dateAreaX;

        return $this;
    }

    /**
     * @return string
     */
    public function getDateAreaY(): ?string
    {
        return $this->dateAreaY;
    }

    /**
     * @param string $dateAreaY
     *
     * @return self
     */
    public function setDateAreaY(?string $dateAreaY): self
    {
        $this->dateAreaY = $dateAreaY;

        return $this;
    }
}
