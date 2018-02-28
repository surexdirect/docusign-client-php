<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
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
    public function getNewUsers(): ?array
    {
        return $this->newUsers;
    }

    /**
     * @param NewUser[] $newUsers
     *
     * @return self
     */
    public function setNewUsers(?array $newUsers): self
    {
        $this->newUsers = $newUsers;

        return $this;
    }
}
