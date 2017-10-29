<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class UserSignatureDefinition
{
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
    protected $signatureInitials;
    /**
     * @var string
     */
    protected $signatureName;

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
