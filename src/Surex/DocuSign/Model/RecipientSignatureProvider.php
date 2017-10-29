<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class RecipientSignatureProvider
{
    /**
     * @var string
     */
    protected $signatureProviderName;
    /**
     * @var RecipientSignatureProviderOptions
     */
    protected $signatureProviderOptions;

    /**
     * @return string
     */
    public function getSignatureProviderName()
    {
        return $this->signatureProviderName;
    }

    /**
     * @param string $signatureProviderName
     *
     * @return self
     */
    public function setSignatureProviderName($signatureProviderName = null)
    {
        $this->signatureProviderName = $signatureProviderName;

        return $this;
    }

    /**
     * @return RecipientSignatureProviderOptions
     */
    public function getSignatureProviderOptions()
    {
        return $this->signatureProviderOptions;
    }

    /**
     * @param RecipientSignatureProviderOptions $signatureProviderOptions
     *
     * @return self
     */
    public function setSignatureProviderOptions(RecipientSignatureProviderOptions $signatureProviderOptions = null)
    {
        $this->signatureProviderOptions = $signatureProviderOptions;

        return $this;
    }
}
