<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class SigningGroupUsers
{
    /**
     * @var SigningGroupUser[]
     */
    protected $users;

    /**
     * @return SigningGroupUser[]
     */
    public function getUsers(): ?array
    {
        return $this->users;
    }

    /**
     * @param SigningGroupUser[] $users
     *
     * @return self
     */
    public function setUsers(?array $users): self
    {
        $this->users = $users;

        return $this;
    }
}
