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
    public function getSignatureProviderOptionDisplayName(): ?string
    {
        return $this->signatureProviderOptionDisplayName;
    }

    /**
     * @param string $signatureProviderOptionDisplayName
     *
     * @return self
     */
    public function setSignatureProviderOptionDisplayName(?string $signatureProviderOptionDisplayName): self
    {
        $this->signatureProviderOptionDisplayName = $signatureProviderOptionDisplayName;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignatureProviderOptionId(): ?string
    {
        return $this->signatureProviderOptionId;
    }

    /**
     * @param string $signatureProviderOptionId
     *
     * @return self
     */
    public function setSignatureProviderOptionId(?string $signatureProviderOptionId): self
    {
        $this->signatureProviderOptionId = $signatureProviderOptionId;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignatureProviderOptionName(): ?string
    {
        return $this->signatureProviderOptionName;
    }

    /**
     * @param string $signatureProviderOptionName
     *
     * @return self
     */
    public function setSignatureProviderOptionName(?string $signatureProviderOptionName): self
    {
        $this->signatureProviderOptionName = $signatureProviderOptionName;

        return $this;
    }
}
