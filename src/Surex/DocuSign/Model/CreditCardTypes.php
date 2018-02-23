<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class CreditCardTypes
{
    /**
     * An array containing supported credit card types.
     *
     * @var string[]
     */
    protected $cardTypes;

    /**
     * An array containing supported credit card types.
     *
     * @return string[]
     */
    public function getCardTypes(): ?array
    {
        return $this->cardTypes;
    }

    /**
     * An array containing supported credit card types.
     *
     * @param string[] $cardTypes
     *
     * @return self
     */
    public function setCardTypes(?array $cardTypes): self
    {
        $this->cardTypes = $cardTypes;

        return $this;
    }
}
