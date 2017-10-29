<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class AccountSignatureProviderOption
{
    /**
     * @var string
     */
    protected $signatureProviderOptionDisplayName;
    /**
     * @var string
     */
    protected $signatureProviderOptionId;
    /**
     * @var string
     */
    protected $signatureProviderOptionName;

    /**
     * @return string
     */
    public function getSignatureProviderOptionDisplayName()
    {
        return $this->signatureProviderOptionDisplayName;
    }

    /**
     * @param string $signatureProviderOptionDisplayName
     *
     * @return self
     */
    public function setSignatureProviderOptionDisplayName($signatureProviderOptionDisplayName = null)
    {
        $this->signatureProviderOptionDisplayName = $signatureProviderOptionDisplayName;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignatureProviderOptionId()
    {
        return $this->signatureProviderOptionId;
    }

    /**
     * @param string $signatureProviderOptionId
     *
     * @return self
     */
    public function setSignatureProviderOptionId($signatureProviderOptionId = null)
    {
        $this->signatureProviderOptionId = $signatureProviderOptionId;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignatureProviderOptionName()
    {
        return $this->signatureProviderOptionName;
    }

    /**
     * @param string $signatureProviderOptionName
     *
     * @return self
     */
    public function setSignatureProviderOptionName($signatureProviderOptionName = null)
    {
        $this->signatureProviderOptionName = $signatureProviderOptionName;

        return $this;
    }
}
