<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class PermissionProfileInformation
{
    /**
     * @var AccountPermissionProfiles[]
     */
    protected $permissionProfiles;

    /**
     * @return AccountPermissionProfiles[]
     */
    public function getPermissionProfiles()
    {
        return $this->permissionProfiles;
    }

    /**
     * @param AccountPermissionProfiles[] $permissionProfiles
     *
     * @return self
     */
    public function setPermissionProfiles(array $permissionProfiles = null)
    {
        $this->permissionProfiles = $permissionProfiles;

        return $this;
    }
}
