<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class UserSignatures
{
    /**
     * The date and time the user adopted their signature.
     *
     * @var string
     */
    protected $adoptedDateTime;
    /**
     * Indicates the date and time the item was created.
     *
     * @var string
     */
    protected $createdDateTime;
    /**
     * @var DateStampProperties
     */
    protected $dateStampProperties;
    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * @var string
     */
    protected $externalID;
    /**
     * One of **signature_image** or **initials_image**.
     *
     * @var string
     */
    protected $imageType;
    /**
     * @var string
     */
    protected $initials150ImageId;
    /**
     * Contains the URI for an endpoint that you can use to retrieve the initials image.
     *
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
     * The font type for the signature, if the signature is not drawn. The supported font types are:.

     "7_DocuSign", "1_DocuSign", "6_DocuSign", "8_DocuSign", "3_DocuSign", "Mistral", "4_DocuSign", "2_DocuSign", "5_DocuSign", "Rage Italic"

     *
     * @var string
     */
    protected $signatureFont;
    /**
     * Specifies the signature ID associated with the signature name. You can use the signature ID in the URI in place of the signature name, and the value stored in the `signatureName` property in the body is used. This allows the use of special characters (such as "&", "<", ">") in a the signature name. Note that with each update to signatures, the returned signature ID might change, so the caller will need to trigger off the signature name to get the new signature ID.
     *
     * @var string
     */
    protected $signatureId;
    /**
     * Contains the URI for an endpoint that you can use to retrieve the signature image.
     *
     * @var string
     */
    protected $signatureImageUri;
    /**
     *  The initials associated with the signature.
     *
     * @var string
     */
    protected $signatureInitials;
    /**
     * Specifies the user signature name.
     *
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
     * The date and time the user adopted their signature.
     *
     * @return string
     */
    public function getAdoptedDateTime(): ?string
    {
        return $this->adoptedDateTime;
    }

    /**
     * The date and time the user adopted their signature.
     *
     * @param string $adoptedDateTime
     *
     * @return self
     */
    public function setAdoptedDateTime(?string $adoptedDateTime): self
    {
        $this->adoptedDateTime = $adoptedDateTime;

        return $this;
    }

    /**
     * Indicates the date and time the item was created.
     *
     * @return string
     */
    public function getCreatedDateTime(): ?string
    {
        return $this->createdDateTime;
    }

    /**
     * Indicates the date and time the item was created.
     *
     * @param string $createdDateTime
     *
     * @return self
     */
    public function setCreatedDateTime(?string $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;

        return $this;
    }

    /**
     * @return DateStampProperties
     */
    public function getDateStampProperties(): ?DateStampProperties
    {
        return $this->dateStampProperties;
    }

    /**
     * @param DateStampProperties $dateStampProperties
     *
     * @return self
     */
    public function setDateStampProperties(?DateStampProperties $dateStampProperties): self
    {
        $this->dateStampProperties = $dateStampProperties;

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
    public function getExternalID(): ?string
    {
        return $this->externalID;
    }

    /**
     * @param string $externalID
     *
     * @return self
     */
    public function setExternalID(?string $externalID): self
    {
        $this->externalID = $externalID;

        return $this;
    }

    /**
     * One of **signature_image** or **initials_image**.
     *
     * @return string
     */
    public function getImageType(): ?string
    {
        return $this->imageType;
    }

    /**
     * One of **signature_image** or **initials_image**.
     *
     * @param string $imageType
     *
     * @return self
     */
    public function setImageType(?string $imageType): self
    {
        $this->imageType = $imageType;

        return $this;
    }

    /**
     * @return string
     */
    public function getInitials150ImageId(): ?string
    {
        return $this->initials150ImageId;
    }

    /**
     * @param string $initials150ImageId
     *
     * @return self
     */
    public function setInitials150ImageId(?string $initials150ImageId): self
    {
        $this->initials150ImageId = $initials150ImageId;

        return $this;
    }

    /**
     * Contains the URI for an endpoint that you can use to retrieve the initials image.
     *
     * @return string
     */
    public function getInitialsImageUri(): ?string
    {
        return $this->initialsImageUri;
    }

    /**
     * Contains the URI for an endpoint that you can use to retrieve the initials image.
     *
     * @param string $initialsImageUri
     *
     * @return self
     */
    public function setInitialsImageUri(?string $initialsImageUri): self
    {
        $this->initialsImageUri = $initialsImageUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsDefault(): ?string
    {
        return $this->isDefault;
    }

    /**
     * @param string $isDefault
     *
     * @return self
     */
    public function setIsDefault(?string $isDefault): self
    {
        $this->isDefault = $isDefault;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneticName(): ?string
    {
        return $this->phoneticName;
    }

    /**
     * @param string $phoneticName
     *
     * @return self
     */
    public function setPhoneticName(?string $phoneticName): self
    {
        $this->phoneticName = $phoneticName;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignature150ImageId(): ?string
    {
        return $this->signature150ImageId;
    }

    /**
     * @param string $signature150ImageId
     *
     * @return self
     */
    public function setSignature150ImageId(?string $signature150ImageId): self
    {
        $this->signature150ImageId = $signature150ImageId;

        return $this;
    }

    /**
     * The font type for the signature, if the signature is not drawn. The supported font types are:.

     "7_DocuSign", "1_DocuSign", "6_DocuSign", "8_DocuSign", "3_DocuSign", "Mistral", "4_DocuSign", "2_DocuSign", "5_DocuSign", "Rage Italic"

     *
     * @return string
     */
    public function getSignatureFont(): ?string
    {
        return $this->signatureFont;
    }

    /**
     * The font type for the signature, if the signature is not drawn. The supported font types are:.

     "7_DocuSign", "1_DocuSign", "6_DocuSign", "8_DocuSign", "3_DocuSign", "Mistral", "4_DocuSign", "2_DocuSign", "5_DocuSign", "Rage Italic"

     *
     * @param string $signatureFont
     *
     * @return self
     */
    public function setSignatureFont(?string $signatureFont): self
    {
        $this->signatureFont = $signatureFont;

        return $this;
    }

    /**
     * Specifies the signature ID associated with the signature name. You can use the signature ID in the URI in place of the signature name, and the value stored in the `signatureName` property in the body is used. This allows the use of special characters (such as "&", "<", ">") in a the signature name. Note that with each update to signatures, the returned signature ID might change, so the caller will need to trigger off the signature name to get the new signature ID.
     *
     * @return string
     */
    public function getSignatureId(): ?string
    {
        return $this->signatureId;
    }

    /**
     * Specifies the signature ID associated with the signature name. You can use the signature ID in the URI in place of the signature name, and the value stored in the `signatureName` property in the body is used. This allows the use of special characters (such as "&", "<", ">") in a the signature name. Note that with each update to signatures, the returned signature ID might change, so the caller will need to trigger off the signature name to get the new signature ID.
     *
     * @param string $signatureId
     *
     * @return self
     */
    public function setSignatureId(?string $signatureId): self
    {
        $this->signatureId = $signatureId;

        return $this;
    }

    /**
     * Contains the URI for an endpoint that you can use to retrieve the signature image.
     *
     * @return string
     */
    public function getSignatureImageUri(): ?string
    {
        return $this->signatureImageUri;
    }

    /**
     * Contains the URI for an endpoint that you can use to retrieve the signature image.
     *
     * @param string $signatureImageUri
     *
     * @return self
     */
    public function setSignatureImageUri(?string $signatureImageUri): self
    {
        $this->signatureImageUri = $signatureImageUri;

        return $this;
    }

    /**
     *  The initials associated with the signature.
     *
     * @return string
     */
    public function getSignatureInitials(): ?string
    {
        return $this->signatureInitials;
    }

    /**
     *  The initials associated with the signature.
     *
     * @param string $signatureInitials
     *
     * @return self
     */
    public function setSignatureInitials(?string $signatureInitials): self
    {
        $this->signatureInitials = $signatureInitials;

        return $this;
    }

    /**
     * Specifies the user signature name.
     *
     * @return string
     */
    public function getSignatureName(): ?string
    {
        return $this->signatureName;
    }

    /**
     * Specifies the user signature name.
     *
     * @param string $signatureName
     *
     * @return self
     */
    public function setSignatureName(?string $signatureName): self
    {
        $this->signatureName = $signatureName;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignatureType(): ?string
    {
        return $this->signatureType;
    }

    /**
     * @param string $signatureType
     *
     * @return self
     */
    public function setSignatureType(?string $signatureType): self
    {
        $this->signatureType = $signatureType;

        return $this;
    }

    /**
     * @return string
     */
    public function getStampFormat(): ?string
    {
        return $this->stampFormat;
    }

    /**
     * @param string $stampFormat
     *
     * @return self
     */
    public function setStampFormat(?string $stampFormat): self
    {
        $this->stampFormat = $stampFormat;

        return $this;
    }

    /**
     * @return string
     */
    public function getStampImageUri(): ?string
    {
        return $this->stampImageUri;
    }

    /**
     * @param string $stampImageUri
     *
     * @return self
     */
    public function setStampImageUri(?string $stampImageUri): self
    {
        $this->stampImageUri = $stampImageUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getStampSizeMM(): ?string
    {
        return $this->stampSizeMM;
    }

    /**
     * @param string $stampSizeMM
     *
     * @return self
     */
    public function setStampSizeMM(?string $stampSizeMM): self
    {
        $this->stampSizeMM = $stampSizeMM;

        return $this;
    }

    /**
     * @return string
     */
    public function getStampType(): ?string
    {
        return $this->stampType;
    }

    /**
     * @param string $stampType
     *
     * @return self
     */
    public function setStampType(?string $stampType): self
    {
        $this->stampType = $stampType;

        return $this;
    }
}
