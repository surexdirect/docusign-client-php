<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class RecipientSAMLAuthentication
{
    /**
     * @var SamlAssertionAttribute[]
     */
    protected $samlAssertionAttributes;

    /**
     * @return SamlAssertionAttribute[]
     */
    public function getSamlAssertionAttributes()
    {
        return $this->samlAssertionAttributes;
    }

    /**
     * @param SamlAssertionAttribute[] $samlAssertionAttributes
     *
     * @return self
     */
    public function setSamlAssertionAttributes(array $samlAssertionAttributes = null)
    {
        $this->samlAssertionAttributes = $samlAssertionAttributes;

        return $this;
    }
}
