<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class AuthenticationMethod
{
    /**
     * Indicates the type of authentication. Valid values are: PhoneAuth, STAN, ISCheck, OFAC, AccessCode, AgeVerify, or SSOAuth.
     *
     * @var string
     */
    protected $authenticationType;
    /**
     * The last provider that authenticated the user.
     *
     * @var string
     */
    protected $lastProvider;
    /**
     *  The data and time the user last used the authentication method.
     *
     * @var string
     */
    protected $lastTimestamp;
    /**
     * The number of times the authentication method was used.
     *
     * @var int
     */
    protected $totalCount;

    /**
     * Indicates the type of authentication. Valid values are: PhoneAuth, STAN, ISCheck, OFAC, AccessCode, AgeVerify, or SSOAuth.
     *
     * @return string
     */
    public function getAuthenticationType(): ?string
    {
        return $this->authenticationType;
    }

    /**
     * Indicates the type of authentication. Valid values are: PhoneAuth, STAN, ISCheck, OFAC, AccessCode, AgeVerify, or SSOAuth.
     *
     * @param string $authenticationType
     *
     * @return self
     */
    public function setAuthenticationType(?string $authenticationType): self
    {
        $this->authenticationType = $authenticationType;

        return $this;
    }

    /**
     * The last provider that authenticated the user.
     *
     * @return string
     */
    public function getLastProvider(): ?string
    {
        return $this->lastProvider;
    }

    /**
     * The last provider that authenticated the user.
     *
     * @param string $lastProvider
     *
     * @return self
     */
    public function setLastProvider(?string $lastProvider): self
    {
        $this->lastProvider = $lastProvider;

        return $this;
    }

    /**
     *  The data and time the user last used the authentication method.
     *
     * @return string
     */
    public function getLastTimestamp(): ?string
    {
        return $this->lastTimestamp;
    }

    /**
     *  The data and time the user last used the authentication method.
     *
     * @param string $lastTimestamp
     *
     * @return self
     */
    public function setLastTimestamp(?string $lastTimestamp): self
    {
        $this->lastTimestamp = $lastTimestamp;

        return $this;
    }

    /**
     * The number of times the authentication method was used.
     *
     * @return int
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    /**
     * The number of times the authentication method was used.
     *
     * @param int $totalCount
     *
     * @return self
     */
    public function setTotalCount(?int $totalCount): self
    {
        $this->totalCount = $totalCount;

        return $this;
    }
}
