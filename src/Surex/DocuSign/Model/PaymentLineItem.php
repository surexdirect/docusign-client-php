<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class PaymentLineItem
{
    /**
     * @var string
     */
    protected $amountReference;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $itemCode;
    /**
     * @var string
     */
    protected $name;

    /**
     * @return string
     */
    public function getAmountReference()
    {
        return $this->amountReference;
    }

    /**
     * @param string $amountReference
     *
     * @return self
     */
    public function setAmountReference($amountReference = null)
    {
        $this->amountReference = $amountReference;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription($description = null)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getItemCode()
    {
        return $this->itemCode;
    }

    /**
     * @param string $itemCode
     *
     * @return self
     */
    public function setItemCode($itemCode = null)
    {
        $this->itemCode = $itemCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }
}
