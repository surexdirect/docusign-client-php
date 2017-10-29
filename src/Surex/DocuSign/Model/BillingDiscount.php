<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BillingDiscount
{
    /**
     * @var string
     */
    protected $beginQuantity;
    /**
     * @var string
     */
    protected $discount;
    /**
     * @var string
     */
    protected $endQuantity;

    /**
     * @return string
     */
    public function getBeginQuantity()
    {
        return $this->beginQuantity;
    }

    /**
     * @param string $beginQuantity
     *
     * @return self
     */
    public function setBeginQuantity($beginQuantity = null)
    {
        $this->beginQuantity = $beginQuantity;

        return $this;
    }

    /**
     * @return string
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param string $discount
     *
     * @return self
     */
    public function setDiscount($discount = null)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * @return string
     */
    public function getEndQuantity()
    {
        return $this->endQuantity;
    }

    /**
     * @param string $endQuantity
     *
     * @return self
     */
    public function setEndQuantity($endQuantity = null)
    {
        $this->endQuantity = $endQuantity;

        return $this;
    }
}
