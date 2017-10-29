<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class CreditCardTypes
{
    /**
     * @var string[]
     */
    protected $cardTypes;

    /**
     * @return string[]
     */
    public function getCardTypes()
    {
        return $this->cardTypes;
    }

    /**
     * @param string[] $cardTypes
     *
     * @return self
     */
    public function setCardTypes(array $cardTypes = null)
    {
        $this->cardTypes = $cardTypes;

        return $this;
    }
}
