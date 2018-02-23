<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class AccountSignatureProvider
{
    /**
     * @var string
     */
    protected $isRequired;
    /**
     * @var string
     */
    protected $priority;
    /**
     * @var string
     */
    protected $signatureProviderDisplayName;
    /**
     * @var string
     */
    protected $signatureProviderId;
    /**
     * The name of an Electronic or Standards Based Signature (digital signature) provider for the signer to use. [The current provider list.](../../../../guide/appendix/standards_based_signatures.html#signature-provider-options).
     *
     * @var string
     */
    protected $signatureProviderName;
    /**
     * @var AccountSignatureProviderOption[]
     */
    protected $signatureProviderOptionsMetadata;
    /**
     * @var SignatureProviderRequiredOption[]
     */
    protected $signatureProviderRequiredOptions;

    /**
     * @return string
     */
    public function getIsRequired(): ?string
    {
        return $this->isRequired;
    }

    /**
     * @param string $isRequired
     *
     * @return self
     */
    public function setIsRequired(?string $isRequired): self
    {
        $this->isRequired = $isRequired;

        return $this;
    }

    /**
     * @return string
     */
    public function getPriority(): ?string
    {
        return $this->priority;
    }

    /**
     * @param string $priority
     *
     * @return self
     */
    public function setPriority(?string $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignatureProviderDisplayName(): ?string
    {
        return $this->signatureProviderDisplayName;
    }

    /**
     * @param string $signatureProviderDisplayName
     *
     * @return self
     */
    public function setSignatureProviderDisplayName(?string $signatureProviderDisplayName): self
    {
        $this->signatureProviderDisplayName = $signatureProviderDisplayName;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignatureProviderId(): ?string
    {
        return $this->signatureProviderId;
    }

    /**
     * @param string $signatureProviderId
     *
     * @return self
     */
    public function setSignatureProviderId(?string $signatureProviderId): self
    {
        $this->signatureProviderId = $signatureProviderId;

        return $this;
    }

    /**
     * The name of an Electronic or Standards Based Signature (digital signature) provider for the signer to use. [The current provider list.](../../../../guide/appendix/standards_based_signatures.html#signature-provider-options).
     *
     * @return string
     */
    public function getSignatureProviderName(): ?string
    {
        return $this->signatureProviderName;
    }

    /**
     * The name of an Electronic or Standards Based Signature (digital signature) provider for the signer to use. [The current provider list.](../../../../guide/appendix/standards_based_signatures.html#signature-provider-options).
     *
     * @param string $signatureProviderName
     *
     * @return self
     */
    public function setSignatureProviderName(?string $signatureProviderName): self
    {
        $this->signatureProviderName = $signatureProviderName;

        return $this;
    }

    /**
     * @return AccountSignatureProviderOption[]
     */
    public function getSignatureProviderOptionsMetadata(): ?array
    {
        return $this->signatureProviderOptionsMetadata;
    }

    /**
     * @param AccountSignatureProviderOption[] $signatureProviderOptionsMetadata
     *
     * @return self
     */
    public function setSignatureProviderOptionsMetadata(?array $signatureProviderOptionsMetadata): self
    {
        $this->signatureProviderOptionsMetadata = $signatureProviderOptionsMetadata;

        return $this;
    }

    /**
     * @return SignatureProviderRequiredOption[]
     */
    public function getSignatureProviderRequiredOptions(): ?array
    {
        return $this->signatureProviderRequiredOptions;
    }

    /**
     * @param SignatureProviderRequiredOption[] $signatureProviderRequiredOptions
     *
     * @return self
     */
    public function setSignatureProviderRequiredOptions(?array $signatureProviderRequiredOptions): self
    {
        $this->signatureProviderRequiredOptions = $signatureProviderRequiredOptions;

        return $this;
    }
}
