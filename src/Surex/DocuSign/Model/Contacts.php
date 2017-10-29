<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Contacts
{
    /**
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
     * @var string
     */
    protected $shared;
    /**
     * @var string
     */
    protected $signingGroup;
    /**
     * @var string
     */
    protected $signingGroupName;

    /**
     * @return string
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * @param string $contactId
     *
     * @return self
     */
    public function setContactId($contactId = null)
    {
        $this->contactId = $contactId;

        return $this;
    }

    /**
     * @return ContactPhoneNumber[]
     */
    public function getContactPhoneNumbers()
    {
        return $this->contactPhoneNumbers;
    }

    /**
     * @param ContactPhoneNumber[] $contactPhoneNumbers
     *
     * @return self
     */
    public function setContactPhoneNumbers(array $contactPhoneNumbers = null)
    {
        $this->contactPhoneNumbers = $contactPhoneNumbers;

        return $this;
    }

    /**
     * @return string
     */
    public function getContactUri()
    {
        return $this->contactUri;
    }

    /**
     * @param string $contactUri
     *
     * @return self
     */
    public function setContactUri($contactUri = null)
    {
        $this->contactUri = $contactUri;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getEmails()
    {
        return $this->emails;
    }

    /**
     * @param string[] $emails
     *
     * @return self
     */
    public function setEmails(array $emails = null)
    {
        $this->emails = $emails;

        return $this;
    }

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * @param string $organization
     *
     * @return self
     */
    public function setOrganization($organization = null)
    {
        $this->organization = $organization;

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
     * @return string
     */
    public function getSigningGroup()
    {
        return $this->signingGroup;
    }

    /**
     * @param string $signingGroup
     *
     * @return self
     */
    public function setSigningGroup($signingGroup = null)
    {
        $this->signingGroup = $signingGroup;

        return $this;
    }

    /**
     * @return string
     */
    public function getSigningGroupName()
    {
        return $this->signingGroupName;
    }

    /**
     * @param string $signingGroupName
     *
     * @return self
     */
    public function setSigningGroupName($signingGroupName = null)
    {
        $this->signingGroupName = $signingGroupName;

        return $this;
    }
}
