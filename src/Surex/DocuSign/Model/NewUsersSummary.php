<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class NewUsersSummary
{
    /**
     * @var NewUser[]
     */
    protected $newUsers;

    /**
     * @return NewUser[]
     */
    public function getNewUsers()
    {
        return $this->newUsers;
    }

    /**
     * @param NewUser[] $newUsers
     *
     * @return self
     */
    public function setNewUsers(array $newUsers = null)
    {
        $this->newUsers = $newUsers;

        return $this;
    }
}
