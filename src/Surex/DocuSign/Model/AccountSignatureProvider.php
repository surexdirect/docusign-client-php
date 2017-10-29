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
    public function getIsRequired()
    {
        return $this->isRequired;
    }

    /**
     * @param string $isRequired
     *
     * @return self
     */
    public function setIsRequired($isRequired = null)
    {
        $this->isRequired = $isRequired;

        return $this;
    }

    /**
     * @return string
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param string $priority
     *
     * @return self
     */
    public function setPriority($priority = null)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignatureProviderDisplayName()
    {
        return $this->signatureProviderDisplayName;
    }

    /**
     * @param string $signatureProviderDisplayName
     *
     * @return self
     */
    public function setSignatureProviderDisplayName($signatureProviderDisplayName = null)
    {
        $this->signatureProviderDisplayName = $signatureProviderDisplayName;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignatureProviderId()
    {
        return $this->signatureProviderId;
    }

    /**
     * @param string $signatureProviderId
     *
     * @return self
     */
    public function setSignatureProviderId($signatureProviderId = null)
    {
        $this->signatureProviderId = $signatureProviderId;

        return $this;
    }

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
     * @return AccountSignatureProviderOption[]
     */
    public function getSignatureProviderOptionsMetadata()
    {
        return $this->signatureProviderOptionsMetadata;
    }

    /**
     * @param AccountSignatureProviderOption[] $signatureProviderOptionsMetadata
     *
     * @return self
     */
    public function setSignatureProviderOptionsMetadata(array $signatureProviderOptionsMetadata = null)
    {
        $this->signatureProviderOptionsMetadata = $signatureProviderOptionsMetadata;

        return $this;
    }

    /**
     * @return SignatureProviderRequiredOption[]
     */
    public function getSignatureProviderRequiredOptions()
    {
        return $this->signatureProviderRequiredOptions;
    }

    /**
     * @param SignatureProviderRequiredOption[] $signatureProviderRequiredOptions
     *
     * @return self
     */
    public function setSignatureProviderRequiredOptions(array $signatureProviderRequiredOptions = null)
    {
        $this->signatureProviderRequiredOptions = $signatureProviderRequiredOptions;

        return $this;
    }
}
