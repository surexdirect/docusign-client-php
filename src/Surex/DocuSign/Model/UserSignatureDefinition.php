<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class UserSignatureDefinition
{
    /**
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
     * @return string
     */
    public function getSignatureFont(): ?string
    {
        return $this->signatureFont;
    }

    /**
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
     * @return string
     */
    public function getSignatureInitials(): ?string
    {
        return $this->signatureInitials;
    }

    /**
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
}
