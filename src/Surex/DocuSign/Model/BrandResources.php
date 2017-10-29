<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BrandResources
{
    /**
     * @var UserInfo
     */
    protected $createdByUserInfo;
    /**
     * @var string
     */
    protected $createdDate;
    /**
     * @var UserInfo
     */
    protected $modifiedByUserInfo;
    /**
     * @var string
     */
    protected $modifiedDate;
    /**
     * @var string[]
     */
    protected $modifiedTemplates;
    /**
     * @var string
     */
    protected $resourcesContentType;
    /**
     * @var string
     */
    protected $resourcesContentUri;

    /**
     * @return UserInfo
     */
    public function getCreatedByUserInfo()
    {
        return $this->createdByUserInfo;
    }

    /**
     * @param UserInfo $createdByUserInfo
     *
     * @return self
     */
    public function setCreatedByUserInfo(UserInfo $createdByUserInfo = null)
    {
        $this->createdByUserInfo = $createdByUserInfo;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * @param string $createdDate
     *
     * @return self
     */
    public function setCreatedDate($createdDate = null)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * @return UserInfo
     */
    public function getModifiedByUserInfo()
    {
        return $this->modifiedByUserInfo;
    }

    /**
     * @param UserInfo $modifiedByUserInfo
     *
     * @return self
     */
    public function setModifiedByUserInfo(UserInfo $modifiedByUserInfo = null)
    {
        $this->modifiedByUserInfo = $modifiedByUserInfo;

        return $this;
    }

    /**
     * @return string
     */
    public function getModifiedDate()
    {
        return $this->modifiedDate;
    }

    /**
     * @param string $modifiedDate
     *
     * @return self
     */
    public function setModifiedDate($modifiedDate = null)
    {
        $this->modifiedDate = $modifiedDate;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getModifiedTemplates()
    {
        return $this->modifiedTemplates;
    }

    /**
     * @param string[] $modifiedTemplates
     *
     * @return self
     */
    public function setModifiedTemplates(array $modifiedTemplates = null)
    {
        $this->modifiedTemplates = $modifiedTemplates;

        return $this;
    }

    /**
     * @return string
     */
    public function getResourcesContentType()
    {
        return $this->resourcesContentType;
    }

    /**
     * @param string $resourcesContentType
     *
     * @return self
     */
    public function setResourcesContentType($resourcesContentType = null)
    {
        $this->resourcesContentType = $resourcesContentType;

        return $this;
    }

    /**
     * @return string
     */
    public function getResourcesContentUri()
    {
        return $this->resourcesContentUri;
    }

    /**
     * @param string $resourcesContentUri
     *
     * @return self
     */
    public function setResourcesContentUri($resourcesContentUri = null)
    {
        $this->resourcesContentUri = $resourcesContentUri;

        return $this;
    }
}
