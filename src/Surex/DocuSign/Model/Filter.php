<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Filter
{
    /**
     * Access token information.
     *
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
     * An optional value that sets the direction order used to sort the item list.

     Valid values are:

     * asc = ascending sort order
     * desc = descending sort order
     *
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
     * Indicates the envelope status. Valid values are:.

     * sent - The envelope is sent to the recipients.
     * created - The envelope is saved as a draft and can be modified and sent later.
     *
     * @var string
     */
    protected $status;
    /**
     * Must be set to "bearer".
     *
     * @var string
     */
    protected $toDateTime;

    /**
     * Access token information.
     *
     * @return string
     */
    public function getActionRequired(): ?string
    {
        return $this->actionRequired;
    }

    /**
     * Access token information.
     *
     * @param string $actionRequired
     *
     * @return self
     */
    public function setActionRequired(?string $actionRequired): self
    {
        $this->actionRequired = $actionRequired;

        return $this;
    }

    /**
     * @return string
     */
    public function getExpires(): ?string
    {
        return $this->expires;
    }

    /**
     * @param string $expires
     *
     * @return self
     */
    public function setExpires(?string $expires): self
    {
        $this->expires = $expires;

        return $this;
    }

    /**
     * @return string
     */
    public function getFolderIds(): ?string
    {
        return $this->folderIds;
    }

    /**
     * @param string $folderIds
     *
     * @return self
     */
    public function setFolderIds(?string $folderIds): self
    {
        $this->folderIds = $folderIds;

        return $this;
    }

    /**
     * @return string
     */
    public function getFromDateTime(): ?string
    {
        return $this->fromDateTime;
    }

    /**
     * @param string $fromDateTime
     *
     * @return self
     */
    public function setFromDateTime(?string $fromDateTime): self
    {
        $this->fromDateTime = $fromDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsTemplate(): ?string
    {
        return $this->isTemplate;
    }

    /**
     * @param string $isTemplate
     *
     * @return self
     */
    public function setIsTemplate(?string $isTemplate): self
    {
        $this->isTemplate = $isTemplate;

        return $this;
    }

    /**
     * An optional value that sets the direction order used to sort the item list.

     Valid values are:

     * asc = ascending sort order
     * desc = descending sort order
     *
     * @return string
     */
    public function getOrder(): ?string
    {
        return $this->order;
    }

    /**
     * An optional value that sets the direction order used to sort the item list.

     Valid values are:

     * asc = ascending sort order
     * desc = descending sort order
     *
     * @param string $order
     *
     * @return self
     */
    public function setOrder(?string $order): self
    {
        $this->order = $order;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderBy(): ?string
    {
        return $this->orderBy;
    }

    /**
     * @param string $orderBy
     *
     * @return self
     */
    public function setOrderBy(?string $orderBy): self
    {
        $this->orderBy = $orderBy;

        return $this;
    }

    /**
     * @return string
     */
    public function getSearchTarget(): ?string
    {
        return $this->searchTarget;
    }

    /**
     * @param string $searchTarget
     *
     * @return self
     */
    public function setSearchTarget(?string $searchTarget): self
    {
        $this->searchTarget = $searchTarget;

        return $this;
    }

    /**
     * @return string
     */
    public function getSearchText(): ?string
    {
        return $this->searchText;
    }

    /**
     * @param string $searchText
     *
     * @return self
     */
    public function setSearchText(?string $searchText): self
    {
        $this->searchText = $searchText;

        return $this;
    }

    /**
     * Indicates the envelope status. Valid values are:.

     * sent - The envelope is sent to the recipients.
     * created - The envelope is saved as a draft and can be modified and sent later.
     *
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Indicates the envelope status. Valid values are:.

     * sent - The envelope is sent to the recipients.
     * created - The envelope is saved as a draft and can be modified and sent later.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Must be set to "bearer".
     *
     * @return string
     */
    public function getToDateTime(): ?string
    {
        return $this->toDateTime;
    }

    /**
     * Must be set to "bearer".
     *
     * @param string $toDateTime
     *
     * @return self
     */
    public function setToDateTime(?string $toDateTime): self
    {
        $this->toDateTime = $toDateTime;

        return $this;
    }
}
