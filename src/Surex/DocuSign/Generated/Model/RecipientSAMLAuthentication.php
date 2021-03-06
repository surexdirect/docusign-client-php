<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class RecipientSAMLAuthentication
{
    /**
     * @var SamlAssertionAttribute[]
     */
    protected $samlAssertionAttributes;

    /**
     * @return SamlAssertionAttribute[]
     */
    public function getSamlAssertionAttributes(): ?array
    {
        return $this->samlAssertionAttributes;
    }

    /**
     * @param SamlAssertionAttribute[] $samlAssertionAttributes
     *
     * @return self
     */
    public function setSamlAssertionAttributes(?array $samlAssertionAttributes): self
    {
        $this->samlAssertionAttributes = $samlAssertionAttributes;

        return $this;
    }
}
