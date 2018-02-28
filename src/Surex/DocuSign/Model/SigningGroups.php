<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class SigningGroups
{
    /**
     * The UTC DateTime when the workspace user authorization was created.
     *
     * @var string
     */
    protected $created;
    /**
     * @var string
     */
    protected $createdBy;
    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * @var string
     */
    protected $groupEmail;
    /**
     * The name of the group.
     *
     * @var string
     */
    protected $groupName;
    /**
     * The group type.
     *
     * @var string
     */
    protected $groupType;
    /**
     * @var string
     */
    protected $modified;
    /**
     * @var string
     */
    protected $modifiedBy;
    /**
     * When set to **true** and the feature is enabled in the sender's account, the signing recipient is required to draw signatures and initials at each signature/initial tab ( instead of adopting a signature/initial style or only drawing a signature/initial once).
     *
     * @var string
     */
    protected $signingGroupId;
    /**
     * @var SigningGroupUser[]
     */
    protected $users;

    /**
     * The UTC DateTime when the workspace user authorization was created.
     *
     * @return string
     */
    public function getCreated(): ?string
    {
        return $this->created;
    }

    /**
     * The UTC DateTime when the workspace user authorization was created.
     *
     * @param string $created
     *
     * @return self
     */
    public function setCreated(?string $created): self
    {
        $this->created = $created;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    /**
     * @param string $createdBy
     *
     * @return self
     */
    public function setCreatedBy(?string $createdBy): self
    {
        $this->createdBy = $createdBy;

        return $this;
    }

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
     * @return string
     */
    public function getGroupEmail(): ?string
    {
        return $this->groupEmail;
    }

    /**
     * @param string $groupEmail
     *
     * @return self
     */
    public function setGroupEmail(?string $groupEmail): self
    {
        $this->groupEmail = $groupEmail;

        return $this;
    }

    /**
     * The name of the group.
     *
     * @return string
     */
    public function getGroupName(): ?string
    {
        return $this->groupName;
    }

    /**
     * The name of the group.
     *
     * @param string $groupName
     *
     * @return self
     */
    public function setGroupName(?string $groupName): self
    {
        $this->groupName = $groupName;

        return $this;
    }

    /**
     * The group type.
     *
     * @return string
     */
    public function getGroupType(): ?string
    {
        return $this->groupType;
    }

    /**
     * The group type.
     *
     * @param string $groupType
     *
     * @return self
     */
    public function setGroupType(?string $groupType): self
    {
        $this->groupType = $groupType;

        return $this;
    }

    /**
     * @return string
     */
    public function getModified(): ?string
    {
        return $this->modified;
    }

    /**
     * @param string $modified
     *
     * @return self
     */
    public function setModified(?string $modified): self
    {
        $this->modified = $modified;

        return $this;
    }

    /**
     * @return string
     */
    public function getModifiedBy(): ?string
    {
        return $this->modifiedBy;
    }

    /**
     * @param string $modifiedBy
     *
     * @return self
     */
    public function setModifiedBy(?string $modifiedBy): self
    {
        $this->modifiedBy = $modifiedBy;

        return $this;
    }

    /**
     * When set to **true** and the feature is enabled in the sender's account, the signing recipient is required to draw signatures and initials at each signature/initial tab ( instead of adopting a signature/initial style or only drawing a signature/initial once).
     *
     * @return string
     */
    public function getSigningGroupId(): ?string
    {
        return $this->signingGroupId;
    }

    /**
     * When set to **true** and the feature is enabled in the sender's account, the signing recipient is required to draw signatures and initials at each signature/initial tab ( instead of adopting a signature/initial style or only drawing a signature/initial once).
     *
     * @param string $signingGroupId
     *
     * @return self
     */
    public function setSigningGroupId(?string $signingGroupId): self
    {
        $this->signingGroupId = $signingGroupId;

        return $this;
    }

    /**
     * @return SigningGroupUser[]
     */
    public function getUsers(): ?array
    {
        return $this->users;
    }

    /**
     * @param SigningGroupUser[] $users
     *
     * @return self
     */
    public function setUsers(?array $users): self
    {
        $this->users = $users;

        return $this;
    }
}
