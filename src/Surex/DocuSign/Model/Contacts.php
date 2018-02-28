<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Contacts
{
    /**
     * The unique identifier of a person in the contacts address book.
     *
     * @var string
     */
    protected $contactId;
    /**
     * @var ContactPhoneNumber[]
     */
    protected $contactPhoneNumbers;
    /**
     * @var string
     */
    protected $contactUri;
    /**
     * @var string[]
     */
    protected $emails;
    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $organization;
    /**
     * When set to **true**, this custom tab is shared.
     *
     * @var string
     */
    protected $shared;
    /**
     * @var string
     */
    protected $signingGroup;
    /**
     * The display name for the signing group.

     Maximum Length: 100 characters.
     *
     * @var string
     */
    protected $signingGroupName;

    /**
     * The unique identifier of a person in the contacts address book.
     *
     * @return string
     */
    public function getContactId(): ?string
    {
        return $this->contactId;
    }

    /**
     * The unique identifier of a person in the contacts address book.
     *
     * @param string $contactId
     *
     * @return self
     */
    public function setContactId(?string $contactId): self
    {
        $this->contactId = $contactId;

        return $this;
    }

    /**
     * @return ContactPhoneNumber[]
     */
    public function getContactPhoneNumbers(): ?array
    {
        return $this->contactPhoneNumbers;
    }

    /**
     * @param ContactPhoneNumber[] $contactPhoneNumbers
     *
     * @return self
     */
    public function setContactPhoneNumbers(?array $contactPhoneNumbers): self
    {
        $this->contactPhoneNumbers = $contactPhoneNumbers;

        return $this;
    }

    /**
     * @return string
     */
    public function getContactUri(): ?string
    {
        return $this->contactUri;
    }

    /**
     * @param string $contactUri
     *
     * @return self
     */
    public function setContactUri(?string $contactUri): self
    {
        $this->contactUri = $contactUri;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getEmails(): ?array
    {
        return $this->emails;
    }

    /**
     * @param string[] $emails
     *
     * @return self
     */
    public function setEmails(?array $emails): self
    {
        $this->emails = $emails;

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
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrganization(): ?string
    {
        return $this->organization;
    }

    /**
     * @param string $organization
     *
     * @return self
     */
    public function setOrganization(?string $organization): self
    {
        $this->organization = $organization;

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
     * @return string
     */
    public function getSigningGroup(): ?string
    {
        return $this->signingGroup;
    }

    /**
     * @param string $signingGroup
     *
     * @return self
     */
    public function setSigningGroup(?string $signingGroup): self
    {
        $this->signingGroup = $signingGroup;

        return $this;
    }

    /**
     * The display name for the signing group.

     Maximum Length: 100 characters.
     *
     * @return string
     */
    public function getSigningGroupName(): ?string
    {
        return $this->signingGroupName;
    }

    /**
     * The display name for the signing group.

     Maximum Length: 100 characters.
     *
     * @param string $signingGroupName
     *
     * @return self
     */
    public function setSigningGroupName(?string $signingGroupName): self
    {
        $this->signingGroupName = $signingGroupName;

        return $this;
    }
}
