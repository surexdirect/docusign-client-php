<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class UserSharedItem
{
    /**
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * @var string
     */
    protected $shared;
    /**
     * @var UserInfo
     */
    protected $user;

    /**
     * @return ErrorDetails
     */
    public function getErrorDetails()
    {
        return $this->errorDetails;
    }

    /**
     * @param ErrorDetails $errorDetails
     *
     * @return self
     */
    public function setErrorDetails(ErrorDetails $errorDetails = null)
    {
        $this->errorDetails = $errorDetails;

        return $this;
    }

    /**
     * @return string
     */
    public function getShared()
    {
        return $this->shared;
    }

    /**
     * @param string $shared
     *
     * @return self
     */
    public function setShared($shared = null)
    {
        $this->shared = $shared;

        return $this;
    }

    /**
     * @return UserInfo
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param UserInfo $user
     *
     * @return self
     */
    public function setUser(UserInfo $user = null)
    {
        $this->user = $user;

        return $this;
    }
}
