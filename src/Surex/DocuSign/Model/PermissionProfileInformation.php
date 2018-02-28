<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class PermissionProfileInformation
{
    /**
     * A complex type containing a collection of permission profiles.
     *
     * @var AccountPermissionProfiles[]
     */
    protected $permissionProfiles;

    /**
     * A complex type containing a collection of permission profiles.
     *
     * @return AccountPermissionProfiles[]
     */
    public function getPermissionProfiles(): ?array
    {
        return $this->permissionProfiles;
    }

    /**
     * A complex type containing a collection of permission profiles.
     *
     * @param AccountPermissionProfiles[] $permissionProfiles
     *
     * @return self
     */
    public function setPermissionProfiles(?array $permissionProfiles): self
    {
        $this->permissionProfiles = $permissionProfiles;

        return $this;
    }
}
