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
    public function getCreatedByUserInfo(): ?UserInfo
    {
        return $this->createdByUserInfo;
    }

    /**
     * @param UserInfo $createdByUserInfo
     *
     * @return self
     */
    public function setCreatedByUserInfo(?UserInfo $createdByUserInfo): self
    {
        $this->createdByUserInfo = $createdByUserInfo;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedDate(): ?string
    {
        return $this->createdDate;
    }

    /**
     * @param string $createdDate
     *
     * @return self
     */
    public function setCreatedDate(?string $createdDate): self
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * @return UserInfo
     */
    public function getModifiedByUserInfo(): ?UserInfo
    {
        return $this->modifiedByUserInfo;
    }

    /**
     * @param UserInfo $modifiedByUserInfo
     *
     * @return self
     */
    public function setModifiedByUserInfo(?UserInfo $modifiedByUserInfo): self
    {
        $this->modifiedByUserInfo = $modifiedByUserInfo;

        return $this;
    }

    /**
     * @return string
     */
    public function getModifiedDate(): ?string
    {
        return $this->modifiedDate;
    }

    /**
     * @param string $modifiedDate
     *
     * @return self
     */
    public function setModifiedDate(?string $modifiedDate): self
    {
        $this->modifiedDate = $modifiedDate;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getModifiedTemplates(): ?array
    {
        return $this->modifiedTemplates;
    }

    /**
     * @param string[] $modifiedTemplates
     *
     * @return self
     */
    public function setModifiedTemplates(?array $modifiedTemplates): self
    {
        $this->modifiedTemplates = $modifiedTemplates;

        return $this;
    }

    /**
     * @return string
     */
    public function getResourcesContentType(): ?string
    {
        return $this->resourcesContentType;
    }

    /**
     * @param string $resourcesContentType
     *
     * @return self
     */
    public function setResourcesContentType(?string $resourcesContentType): self
    {
        $this->resourcesContentType = $resourcesContentType;

        return $this;
    }

    /**
     * @return string
     */
    public function getResourcesContentUri(): ?string
    {
        return $this->resourcesContentUri;
    }

    /**
     * @param string $resourcesContentUri
     *
     * @return self
     */
    public function setResourcesContentUri(?string $resourcesContentUri): self
    {
        $this->resourcesContentUri = $resourcesContentUri;

        return $this;
    }
}
