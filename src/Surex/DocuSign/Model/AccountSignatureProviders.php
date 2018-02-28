<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class AccountSignatureProviders
{
    /**
     * @var AccountSignatureProvider[]
     */
    protected $signatureProviders;

    /**
     * @return AccountSignatureProvider[]
     */
    public function getSignatureProviders(): ?array
    {
        return $this->signatureProviders;
    }

    /**
     * @param AccountSignatureProvider[] $signatureProviders
     *
     * @return self
     */
    public function setSignatureProviders(?array $signatureProviders): self
    {
        $this->signatureProviders = $signatureProviders;

        return $this;
    }
}
