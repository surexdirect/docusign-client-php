<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
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
    public function getSignatureProviders()
    {
        return $this->signatureProviders;
    }

    /**
     * @param AccountSignatureProvider[] $signatureProviders
     *
     * @return self
     */
    public function setSignatureProviders(array $signatureProviders = null)
    {
        $this->signatureProviders = $signatureProviders;

        return $this;
    }
}
