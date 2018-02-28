<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class RecipientSignatureProvider
{
    /**
     * The name of an Electronic or Standards Based Signature (digital signature) provider for the signer to use. [The current provider list.](../../../../guide/appendix/standards_based_signatures.html#signature-provider-options).
     *
     * @var string
     */
    protected $signatureProviderName;
    /**
     * Option settings for the signature provider. Different providers require or use different options. [The current provider list and the options they require.](../../../../guide/appendix/standards_based_signatures.html#signature-provider-options).
     *
     * @var RecipientSignatureProviderOptions
     */
    protected $signatureProviderOptions;

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
     * Option settings for the signature provider. Different providers require or use different options. [The current provider list and the options they require.](../../../../guide/appendix/standards_based_signatures.html#signature-provider-options).
     *
     * @return RecipientSignatureProviderOptions
     */
    public function getSignatureProviderOptions(): ?RecipientSignatureProviderOptions
    {
        return $this->signatureProviderOptions;
    }

    /**
     * Option settings for the signature provider. Different providers require or use different options. [The current provider list and the options they require.](../../../../guide/appendix/standards_based_signatures.html#signature-provider-options).
     *
     * @param RecipientSignatureProviderOptions $signatureProviderOptions
     *
     * @return self
     */
    public function setSignatureProviderOptions(?RecipientSignatureProviderOptions $signatureProviderOptions): self
    {
        $this->signatureProviderOptions = $signatureProviderOptions;

        return $this;
    }
}
