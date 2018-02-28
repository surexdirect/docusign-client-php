<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class SeatDiscount
{
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $beginSeatCount;
    /**
     * @var string
     */
    protected $discountPercent;
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $endSeatCount;

    /**
     * Reserved: TBD.
     *
     * @return string
     */
    public function getBeginSeatCount(): ?string
    {
        return $this->beginSeatCount;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $beginSeatCount
     *
     * @return self
     */
    public function setBeginSeatCount(?string $beginSeatCount): self
    {
        $this->beginSeatCount = $beginSeatCount;

        return $this;
    }

    /**
     * @return string
     */
    public function getDiscountPercent(): ?string
    {
        return $this->discountPercent;
    }

    /**
     * @param string $discountPercent
     *
     * @return self
     */
    public function setDiscountPercent(?string $discountPercent): self
    {
        $this->discountPercent = $discountPercent;

        return $this;
    }

    /**
     * Reserved: TBD.
     *
     * @return string
     */
    public function getEndSeatCount(): ?string
    {
        return $this->endSeatCount;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $endSeatCount
     *
     * @return self
     */
    public function setEndSeatCount(?string $endSeatCount): self
    {
        $this->endSeatCount = $endSeatCount;

        return $this;
    }
}
