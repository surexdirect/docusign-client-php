<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class SigningGroupInformation
{
    /**
     * A collection group objects containing information about the groups returned.
     *
     * @var SigningGroups[]
     */
    protected $groups;

    /**
     * A collection group objects containing information about the groups returned.
     *
     * @return SigningGroups[]
     */
    public function getGroups(): ?array
    {
        return $this->groups;
    }

    /**
     * A collection group objects containing information about the groups returned.
     *
     * @param SigningGroups[] $groups
     *
     * @return self
     */
    public function setGroups(?array $groups): self
    {
        $this->groups = $groups;

        return $this;
    }
}
