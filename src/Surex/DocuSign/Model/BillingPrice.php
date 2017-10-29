<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BillingPrice
{
    /**
     * @var string
     */
    protected $beginQuantity;
    /**
     * @var string
     */
    protected $endQuantity;
    /**
     * @var string
     */
    protected $unitPrice;

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

    /**
     * @return string
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * @param string $unitPrice
     *
     * @return self
     */
    public function setUnitPrice($unitPrice = null)
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }
}
