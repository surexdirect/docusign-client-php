<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class TemplateSharedItem
{
    /**
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * @var UserInfo
     */
    protected $owner;
    /**
     * @var string
     */
    protected $shared;
    /**
     * @var MemberGroupSharedItem[]
     */
    protected $sharedGroups;
    /**
     * @var UserSharedItem[]
     */
    protected $sharedUsers;
    /**
     * @var string
     */
    protected $templateId;
    /**
     * @var string
     */
    protected $templateName;

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
     * @return UserInfo
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param UserInfo $owner
     *
     * @return self
     */
    public function setOwner(UserInfo $owner = null)
    {
        $this->owner = $owner;

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
     * @return MemberGroupSharedItem[]
     */
    public function getSharedGroups()
    {
        return $this->sharedGroups;
    }

    /**
     * @param MemberGroupSharedItem[] $sharedGroups
     *
     * @return self
     */
    public function setSharedGroups(array $sharedGroups = null)
    {
        $this->sharedGroups = $sharedGroups;

        return $this;
    }

    /**
     * @return UserSharedItem[]
     */
    public function getSharedUsers()
    {
        return $this->sharedUsers;
    }

    /**
     * @param UserSharedItem[] $sharedUsers
     *
     * @return self
     */
    public function setSharedUsers(array $sharedUsers = null)
    {
        $this->sharedUsers = $sharedUsers;

        return $this;
    }

    /**
     * @return string
     */
    public function getTemplateId()
    {
        return $this->templateId;
    }

    /**
     * @param string $templateId
     *
     * @return self
     */
    public function setTemplateId($templateId = null)
    {
        $this->templateId = $templateId;

        return $this;
    }

    /**
     * @return string
     */
    public function getTemplateName()
    {
        return $this->templateName;
    }

    /**
     * @param string $templateName
     *
     * @return self
     */
    public function setTemplateName($templateName = null)
    {
        $this->templateName = $templateName;

        return $this;
    }
}
