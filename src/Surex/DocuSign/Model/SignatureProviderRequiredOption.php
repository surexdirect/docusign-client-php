<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class SignatureProviderRequiredOption
{
    /**
     * @var string[]
     */
    protected $requiredSignatureProviderOptionIds;
    /**
     * @var string
     */
    protected $signerType;

    /**
     * @return string[]
     */
    public function getRequiredSignatureProviderOptionIds(): ?array
    {
        return $this->requiredSignatureProviderOptionIds;
    }

    /**
     * @param string[] $requiredSignatureProviderOptionIds
     *
     * @return self
     */
    public function setRequiredSignatureProviderOptionIds(?array $requiredSignatureProviderOptionIds): self
    {
        $this->requiredSignatureProviderOptionIds = $requiredSignatureProviderOptionIds;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignerType(): ?string
    {
        return $this->signerType;
    }

    /**
     * @param string $signerType
     *
     * @return self
     */
    public function setSignerType(?string $signerType): self
    {
        $this->signerType = $signerType;

        return $this;
    }
}
