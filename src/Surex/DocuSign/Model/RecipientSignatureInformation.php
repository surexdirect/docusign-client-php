<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class RecipientSignatureInformation
{
    /**
     * @var string
     */
    protected $fontStyle;
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
    public function getFontStyle(): ?string
    {
        return $this->fontStyle;
    }

    /**
     * @param string $fontStyle
     *
     * @return self
     */
    public function setFontStyle(?string $fontStyle): self
    {
        $this->fontStyle = $fontStyle;

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
