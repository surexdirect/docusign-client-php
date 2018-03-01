<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class UserInfoList
{
    /**
     * @var UserInfo[]
     */
    protected $users;

    /**
     * @return UserInfo[]
     */
    public function getUsers(): ?array
    {
        return $this->users;
    }

    /**
     * @param UserInfo[] $users
     *
     * @return self
     */
    public function setUsers(?array $users): self
    {
        $this->users = $users;

        return $this;
    }
}
