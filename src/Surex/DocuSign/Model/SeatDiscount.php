<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class SeatDiscount
{
    /**
     * @var string
     */
    protected $beginSeatCount;
    /**
     * @var string
     */
    protected $discountPercent;
    /**
     * @var string
     */
    protected $endSeatCount;

    /**
     * @return string
     */
    public function getBeginSeatCount()
    {
        return $this->beginSeatCount;
    }

    /**
     * @param string $beginSeatCount
     *
     * @return self
     */
    public function setBeginSeatCount($beginSeatCount = null)
    {
        $this->beginSeatCount = $beginSeatCount;

        return $this;
    }

    /**
     * @return string
     */
    public function getDiscountPercent()
    {
        return $this->discountPercent;
    }

    /**
     * @param string $discountPercent
     *
     * @return self
     */
    public function setDiscountPercent($discountPercent = null)
    {
        $this->discountPercent = $discountPercent;

        return $this;
    }

    /**
     * @return string
     */
    public function getEndSeatCount()
    {
        return $this->endSeatCount;
    }

    /**
     * @param string $endSeatCount
     *
     * @return self
     */
    public function setEndSeatCount($endSeatCount = null)
    {
        $this->endSeatCount = $endSeatCount;

        return $this;
    }
}
