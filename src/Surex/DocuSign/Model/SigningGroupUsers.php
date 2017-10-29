<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class SigningGroupUsers
{
    /**
     * @var SigningGroupUser[]
     */
    protected $users;

    /**
     * @return SigningGroupUser[]
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param SigningGroupUser[] $users
     *
     * @return self
     */
    public function setUsers(array $users = null)
    {
        $this->users = $users;

        return $this;
    }
}
