<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class NewUsersDefinition
{
    /**
     * @var Users[]
     */
    protected $newUsers;

    /**
     * @return Users[]
     */
    public function getNewUsers()
    {
        return $this->newUsers;
    }

    /**
     * @param Users[] $newUsers
     *
     * @return self
     */
    public function setNewUsers(array $newUsers = null)
    {
        $this->newUsers = $newUsers;

        return $this;
    }
}
