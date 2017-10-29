<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Filter
{
    /**
     * @var string
     */
    protected $actionRequired;
    /**
     * @var string
     */
    protected $expires;
    /**
     * @var string
     */
    protected $folderIds;
    /**
     * @var string
     */
    protected $fromDateTime;
    /**
     * @var string
     */
    protected $isTemplate;
    /**
     * @var string
     */
    protected $order;
    /**
     * @var string
     */
    protected $orderBy;
    /**
     * @var string
     */
    protected $searchTarget;
    /**
     * @var string
     */
    protected $searchText;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $toDateTime;

    /**
     * @return string
     */
    public function getActionRequired()
    {
        return $this->actionRequired;
    }

    /**
     * @param string $actionRequired
     *
     * @return self
     */
    public function setActionRequired($actionRequired = null)
    {
        $this->actionRequired = $actionRequired;

        return $this;
    }

    /**
     * @return string
     */
    public function getExpires()
    {
        return $this->expires;
    }

    /**
     * @param string $expires
     *
     * @return self
     */
    public function setExpires($expires = null)
    {
        $this->expires = $expires;

        return $this;
    }

    /**
     * @return string
     */
    public function getFolderIds()
    {
        return $this->folderIds;
    }

    /**
     * @param string $folderIds
     *
     * @return self
     */
    public function setFolderIds($folderIds = null)
    {
        $this->folderIds = $folderIds;

        return $this;
    }

    /**
     * @return string
     */
    public function getFromDateTime()
    {
        return $this->fromDateTime;
    }

    /**
     * @param string $fromDateTime
     *
     * @return self
     */
    public function setFromDateTime($fromDateTime = null)
    {
        $this->fromDateTime = $fromDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsTemplate()
    {
        return $this->isTemplate;
    }

    /**
     * @param string $isTemplate
     *
     * @return self
     */
    public function setIsTemplate($isTemplate = null)
    {
        $this->isTemplate = $isTemplate;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param string $order
     *
     * @return self
     */
    public function setOrder($order = null)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderBy()
    {
        return $this->orderBy;
    }

    /**
     * @param string $orderBy
     *
     * @return self
     */
    public function setOrderBy($orderBy = null)
    {
        $this->orderBy = $orderBy;

        return $this;
    }

    /**
     * @return string
     */
    public function getSearchTarget()
    {
        return $this->searchTarget;
    }

    /**
     * @param string $searchTarget
     *
     * @return self
     */
    public function setSearchTarget($searchTarget = null)
    {
        $this->searchTarget = $searchTarget;

        return $this;
    }

    /**
     * @return string
     */
    public function getSearchText()
    {
        return $this->searchText;
    }

    /**
     * @param string $searchText
     *
     * @return self
     */
    public function setSearchText($searchText = null)
    {
        $this->searchText = $searchText;

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
    public function getToDateTime()
    {
        return $this->toDateTime;
    }

    /**
     * @param string $toDateTime
     *
     * @return self
     */
    public function setToDateTime($toDateTime = null)
    {
        $this->toDateTime = $toDateTime;

        return $this;
    }
}
