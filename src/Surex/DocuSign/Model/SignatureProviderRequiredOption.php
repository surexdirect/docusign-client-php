<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
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
    public function getRequiredSignatureProviderOptionIds()
    {
        return $this->requiredSignatureProviderOptionIds;
    }

    /**
     * @param string[] $requiredSignatureProviderOptionIds
     *
     * @return self
     */
    public function setRequiredSignatureProviderOptionIds(array $requiredSignatureProviderOptionIds = null)
    {
        $this->requiredSignatureProviderOptionIds = $requiredSignatureProviderOptionIds;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignerType()
    {
        return $this->signerType;
    }

    /**
     * @param string $signerType
     *
     * @return self
     */
    public function setSignerType($signerType = null)
    {
        $this->signerType = $signerType;

        return $this;
    }
}
