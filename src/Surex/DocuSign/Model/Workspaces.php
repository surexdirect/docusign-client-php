<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Workspaces
{
    /**
     * @var string
     */
    protected $billableAccountId;
    /**
     * @var string
     */
    protected $created;
    /**
     * @var WorkspaceUser
     */
    protected $createdByInformation;
    /**
     * @var string
     */
    protected $lastModified;
    /**
     * @var WorkspaceUser
     */
    protected $lastModifiedByInformation;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $workspaceBaseUrl;
    /**
     * @var string
     */
    protected $workspaceDescription;
    /**
     * @var string
     */
    protected $workspaceId;
    /**
     * @var string
     */
    protected $workspaceName;
    /**
     * @var string
     */
    protected $workspaceUri;

    /**
     * @return string
     */
    public function getBillableAccountId()
    {
        return $this->billableAccountId;
    }

    /**
     * @param string $billableAccountId
     *
     * @return self
     */
    public function setBillableAccountId($billableAccountId = null)
    {
        $this->billableAccountId = $billableAccountId;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param string $created
     *
     * @return self
     */
    public function setCreated($created = null)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * @return WorkspaceUser
     */
    public function getCreatedByInformation()
    {
        return $this->createdByInformation;
    }

    /**
     * @param WorkspaceUser $createdByInformation
     *
     * @return self
     */
    public function setCreatedByInformation(WorkspaceUser $createdByInformation = null)
    {
        $this->createdByInformation = $createdByInformation;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * @param string $lastModified
     *
     * @return self
     */
    public function setLastModified($lastModified = null)
    {
        $this->lastModified = $lastModified;

        return $this;
    }

    /**
     * @return WorkspaceUser
     */
    public function getLastModifiedByInformation()
    {
        return $this->lastModifiedByInformation;
    }

    /**
     * @param WorkspaceUser $lastModifiedByInformation
     *
     * @return self
     */
    public function setLastModifiedByInformation(WorkspaceUser $lastModifiedByInformation = null)
    {
        $this->lastModifiedByInformation = $lastModifiedByInformation;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus($status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getWorkspaceBaseUrl()
    {
        return $this->workspaceBaseUrl;
    }

    /**
     * @param string $workspaceBaseUrl
     *
     * @return self
     */
    public function setWorkspaceBaseUrl($workspaceBaseUrl = null)
    {
        $this->workspaceBaseUrl = $workspaceBaseUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getWorkspaceDescription()
    {
        return $this->workspaceDescription;
    }

    /**
     * @param string $workspaceDescription
     *
     * @return self
     */
    public function setWorkspaceDescription($workspaceDescription = null)
    {
        $this->workspaceDescription = $workspaceDescription;

        return $this;
    }

    /**
     * @return string
     */
    public function getWorkspaceId()
    {
        return $this->workspaceId;
    }

    /**
     * @param string $workspaceId
     *
     * @return self
     */
    public function setWorkspaceId($workspaceId = null)
    {
        $this->workspaceId = $workspaceId;

        return $this;
    }

    /**
     * @return string
     */
    public function getWorkspaceName()
    {
        return $this->workspaceName;
    }

    /**
     * @param string $workspaceName
     *
     * @return self
     */
    public function setWorkspaceName($workspaceName = null)
    {
        $this->workspaceName = $workspaceName;

        return $this;
    }

    /**
     * @return string
     */
    public function getWorkspaceUri()
    {
        return $this->workspaceUri;
    }

    /**
     * @param string $workspaceUri
     *
     * @return self
     */
    public function setWorkspaceUri($workspaceUri = null)
    {
        $this->workspaceUri = $workspaceUri;

        return $this;
    }
}
