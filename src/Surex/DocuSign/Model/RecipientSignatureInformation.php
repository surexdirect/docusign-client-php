<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
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
     * @var string
     */
    protected $signatureName;

    /**
     * @return string
     */
    public function getFontStyle()
    {
        return $this->fontStyle;
    }

    /**
     * @param string $fontStyle
     *
     * @return self
     */
    public function setFontStyle($fontStyle = null)
    {
        $this->fontStyle = $fontStyle;

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
}
