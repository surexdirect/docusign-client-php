<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class NewUsersDefinition
{
    /**
     * @var Users[]
     */
    protected $newUsers;

    /**
     * @return Users[]
     */
    public function getNewUsers(): ?array
    {
        return $this->newUsers;
    }

    /**
     * @param Users[] $newUsers
     *
     * @return self
     */
    public function setNewUsers(?array $newUsers): self
    {
        $this->newUsers = $newUsers;

        return $this;
    }
}
