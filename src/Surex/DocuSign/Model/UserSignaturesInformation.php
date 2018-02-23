<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class UserSignaturesInformation
{
    /**
     * @var UserSignatures[]
     */
    protected $userSignatures;

    /**
     * @return UserSignatures[]
     */
    public function getUserSignatures(): ?array
    {
        return $this->userSignatures;
    }

    /**
     * @param UserSignatures[] $userSignatures
     *
     * @return self
     */
    public function setUserSignatures(?array $userSignatures): self
    {
        $this->userSignatures = $userSignatures;

        return $this;
    }
}
