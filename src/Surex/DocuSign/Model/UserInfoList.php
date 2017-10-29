<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class UserInfoList
{
    /**
     * @var UserInfo[]
     */
    protected $users;

    /**
     * @return UserInfo[]
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param UserInfo[] $users
     *
     * @return self
     */
    public function setUsers(array $users = null)
    {
        $this->users = $users;

        return $this;
    }
}
