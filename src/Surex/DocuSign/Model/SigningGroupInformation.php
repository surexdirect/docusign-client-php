<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class SigningGroupInformation
{
    /**
     * @var SigningGroups[]
     */
    protected $groups;

    /**
     * @return SigningGroups[]
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * @param SigningGroups[] $groups
     *
     * @return self
     */
    public function setGroups(array $groups = null)
    {
        $this->groups = $groups;

        return $this;
    }
}
