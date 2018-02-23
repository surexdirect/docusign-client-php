<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class TemplateSharedItem
{
    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * @var UserInfo
     */
    protected $owner;
    /**
     * When set to **true**, this custom tab is shared.
     *
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
     * The unique identifier of the template. If this is not provided, DocuSign will generate a value.
     *
     * @var string
     */
    protected $templateId;
    /**
     * @var string
     */
    protected $templateName;

    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @return ErrorDetails
     */
    public function getErrorDetails(): ?ErrorDetails
    {
        return $this->errorDetails;
    }

    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @param ErrorDetails $errorDetails
     *
     * @return self
     */
    public function setErrorDetails(?ErrorDetails $errorDetails): self
    {
        $this->errorDetails = $errorDetails;

        return $this;
    }

    /**
     * @return UserInfo
     */
    public function getOwner(): ?UserInfo
    {
        return $this->owner;
    }

    /**
     * @param UserInfo $owner
     *
     * @return self
     */
    public function setOwner(?UserInfo $owner): self
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * When set to **true**, this custom tab is shared.
     *
     * @return string
     */
    public function getShared(): ?string
    {
        return $this->shared;
    }

    /**
     * When set to **true**, this custom tab is shared.
     *
     * @param string $shared
     *
     * @return self
     */
    public function setShared(?string $shared): self
    {
        $this->shared = $shared;

        return $this;
    }

    /**
     * @return MemberGroupSharedItem[]
     */
    public function getSharedGroups(): ?array
    {
        return $this->sharedGroups;
    }

    /**
     * @param MemberGroupSharedItem[] $sharedGroups
     *
     * @return self
     */
    public function setSharedGroups(?array $sharedGroups): self
    {
        $this->sharedGroups = $sharedGroups;

        return $this;
    }

    /**
     * @return UserSharedItem[]
     */
    public function getSharedUsers(): ?array
    {
        return $this->sharedUsers;
    }

    /**
     * @param UserSharedItem[] $sharedUsers
     *
     * @return self
     */
    public function setSharedUsers(?array $sharedUsers): self
    {
        $this->sharedUsers = $sharedUsers;

        return $this;
    }

    /**
     * The unique identifier of the template. If this is not provided, DocuSign will generate a value.
     *
     * @return string
     */
    public function getTemplateId(): ?string
    {
        return $this->templateId;
    }

    /**
     * The unique identifier of the template. If this is not provided, DocuSign will generate a value.
     *
     * @param string $templateId
     *
     * @return self
     */
    public function setTemplateId(?string $templateId): self
    {
        $this->templateId = $templateId;

        return $this;
    }

    /**
     * @return string
     */
    public function getTemplateName(): ?string
    {
        return $this->templateName;
    }

    /**
     * @param string $templateName
     *
     * @return self
     */
    public function setTemplateName(?string $templateName): self
    {
        $this->templateName = $templateName;

        return $this;
    }
}
