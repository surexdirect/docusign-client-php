<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class UserSignatures
{
    /**
     * @var string
     */
    protected $adoptedDateTime;
    /**
     * @var string
     */
    protected $createdDateTime;
    /**
     * @var DateStampProperties
     */
    protected $dateStampProperties;
    /**
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * @var string
     */
    protected $externalID;
    /**
     * @var string
     */
    protected $imageType;
    /**
     * @var string
     */
    protected $initials150ImageId;
    /**
     * @var string
     */
    protected $initialsImageUri;
    /**
     * @var string
     */
    protected $isDefault;
    /**
     * @var string
     */
    protected $phoneticName;
    /**
     * @var string
     */
    protected $signature150ImageId;
    /**
     * @var string
     */
    protected $signatureFont;
    /**
     * @var string
     */
    protected $signatureId;
    /**
     * @var string
     */
    protected $signatureImageUri;
    /**
     * @var string
     */
    protected $signatureInitials;
    /**
     * @var string
     */
    protected $signatureName;
    /**
     * @var string
     */
    protected $signatureType;
    /**
     * @var string
     */
    protected $stampFormat;
    /**
     * @var string
     */
    protected $stampImageUri;
    /**
     * @var string
     */
    protected $stampSizeMM;
    /**
     * @var string
     */
    protected $stampType;

    /**
     * @return string
     */
    public function getAdoptedDateTime()
    {
        return $this->adoptedDateTime;
    }

    /**
     * @param string $adoptedDateTime
     *
     * @return self
     */
    public function setAdoptedDateTime($adoptedDateTime = null)
    {
        $this->adoptedDateTime = $adoptedDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedDateTime()
    {
        return $this->createdDateTime;
    }

    /**
     * @param string $createdDateTime
     *
     * @return self
     */
    public function setCreatedDateTime($createdDateTime = null)
    {
        $this->createdDateTime = $createdDateTime;

        return $this;
    }

    /**
     * @return DateStampProperties
     */
    public function getDateStampProperties()
    {
        return $this->dateStampProperties;
    }

    /**
     * @param DateStampProperties $dateStampProperties
     *
     * @return self
     */
    public function setDateStampProperties(DateStampProperties $dateStampProperties = null)
    {
        $this->dateStampProperties = $dateStampProperties;

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
    public function getExternalID()
    {
        return $this->externalID;
    }

    /**
     * @param string $externalID
     *
     * @return self
     */
    public function setExternalID($externalID = null)
    {
        $this->externalID = $externalID;

        return $this;
    }

    /**
     * @return string
     */
    public function getImageType()
    {
        return $this->imageType;
    }

    /**
     * @param string $imageType
     *
     * @return self
     */
    public function setImageType($imageType = null)
    {
        $this->imageType = $imageType;

        return $this;
    }

    /**
     * @return string
     */
    public function getInitials150ImageId()
    {
        return $this->initials150ImageId;
    }

    /**
     * @param string $initials150ImageId
     *
     * @return self
     */
    public function setInitials150ImageId($initials150ImageId = null)
    {
        $this->initials150ImageId = $initials150ImageId;

        return $this;
    }

    /**
     * @return string
     */
    public function getInitialsImageUri()
    {
        return $this->initialsImageUri;
    }

    /**
     * @param string $initialsImageUri
     *
     * @return self
     */
    public function setInitialsImageUri($initialsImageUri = null)
    {
        $this->initialsImageUri = $initialsImageUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * @param string $isDefault
     *
     * @return self
     */
    public function setIsDefault($isDefault = null)
    {
        $this->isDefault = $isDefault;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneticName()
    {
        return $this->phoneticName;
    }

    /**
     * @param string $phoneticName
     *
     * @return self
     */
    public function setPhoneticName($phoneticName = null)
    {
        $this->phoneticName = $phoneticName;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignature150ImageId()
    {
        return $this->signature150ImageId;
    }

    /**
     * @param string $signature150ImageId
     *
     * @return self
     */
    public function setSignature150ImageId($signature150ImageId = null)
    {
        $this->signature150ImageId = $signature150ImageId;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignatureFont()
    {
        return $this->signatureFont;
    }

    /**
     * @param string $signatureFont
     *
     * @return self
     */
    public function setSignatureFont($signatureFont = null)
    {
        $this->signatureFont = $signatureFont;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignatureId()
    {
        return $this->signatureId;
    }

    /**
     * @param string $signatureId
     *
     * @return self
     */
    public function setSignatureId($signatureId = null)
    {
        $this->signatureId = $signatureId;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignatureImageUri()
    {
        return $this->signatureImageUri;
    }

    /**
     * @param string $signatureImageUri
     *
     * @return self
     */
    public function setSignatureImageUri($signatureImageUri = null)
    {
        $this->signatureImageUri = $signatureImageUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignatureInitials()
    {
        return $this->signatureInitials;
    }

    /**
     * @param string $signatureInitials
     *
     * @return self
     */
    public function setSignatureInitials($signatureInitials = null)
    {
        $this->signatureInitials = $signatureInitials;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignatureName()
    {
        return $this->signatureName;
    }

    /**
     * @param string $signatureName
     *
     * @return self
     */
    public function setSignatureName($signatureName = null)
    {
        $this->signatureName = $signatureName;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignatureType()
    {
        return $this->signatureType;
    }

    /**
     * @param string $signatureType
     *
     * @return self
     */
    public function setSignatureType($signatureType = null)
    {
        $this->signatureType = $signatureType;

        return $this;
    }

    /**
     * @return string
     */
    public function getStampFormat()
    {
        return $this->stampFormat;
    }

    /**
     * @param string $stampFormat
     *
     * @return self
     */
    public function setStampFormat($stampFormat = null)
    {
        $this->stampFormat = $stampFormat;

        return $this;
    }

    /**
     * @return string
     */
    public function getStampImageUri()
    {
        return $this->stampImageUri;
    }

    /**
     * @param string $stampImageUri
     *
     * @return self
     */
    public function setStampImageUri($stampImageUri = null)
    {
        $this->stampImageUri = $stampImageUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getStampSizeMM()
    {
        return $this->stampSizeMM;
    }

    /**
     * @param string $stampSizeMM
     *
     * @return self
     */
    public function setStampSizeMM($stampSizeMM = null)
    {
        $this->stampSizeMM = $stampSizeMM;

        return $this;
    }

    /**
     * @return string
     */
    public function getStampType()
    {
        return $this->stampType;
    }

    /**
     * @param string $stampType
     *
     * @return self
     */
    public function setStampType($stampType = null)
    {
        $this->stampType = $stampType;

        return $this;
    }
}
