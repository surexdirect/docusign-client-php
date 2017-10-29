<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class AccountWatermarks
{
    /**
     * @var string
     */
    protected $displayAngle;
    /**
     * @var string
     */
    protected $enabled;
    /**
     * @var string
     */
    protected $font;
    /**
     * @var string
     */
    protected $fontColor;
    /**
     * @var string
     */
    protected $fontSize;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $imageBase64;
    /**
     * @var string
     */
    protected $transparency;
    /**
     * @var string
     */
    protected $watermarkText;

    /**
     * @return string
     */
    public function getDisplayAngle()
    {
        return $this->displayAngle;
    }

    /**
     * @param string $displayAngle
     *
     * @return self
     */
    public function setDisplayAngle($displayAngle = null)
    {
        $this->displayAngle = $displayAngle;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * @param string $enabled
     *
     * @return self
     */
    public function setEnabled($enabled = null)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * @return string
     */
    public function getFont()
    {
        return $this->font;
    }

    /**
     * @param string $font
     *
     * @return self
     */
    public function setFont($font = null)
    {
        $this->font = $font;

        return $this;
    }

    /**
     * @return string
     */
    public function getFontColor()
    {
        return $this->fontColor;
    }

    /**
     * @param string $fontColor
     *
     * @return self
     */
    public function setFontColor($fontColor = null)
    {
        $this->fontColor = $fontColor;

        return $this;
    }

    /**
     * @return string
     */
    public function getFontSize()
    {
        return $this->fontSize;
    }

    /**
     * @param string $fontSize
     *
     * @return self
     */
    public function setFontSize($fontSize = null)
    {
        $this->fontSize = $fontSize;

        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return self
     */
    public function setId($id = null)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getImageBase64()
    {
        return $this->imageBase64;
    }

    /**
     * @param string $imageBase64
     *
     * @return self
     */
    public function setImageBase64($imageBase64 = null)
    {
        $this->imageBase64 = $imageBase64;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransparency()
    {
        return $this->transparency;
    }

    /**
     * @param string $transparency
     *
     * @return self
     */
    public function setTransparency($transparency = null)
    {
        $this->transparency = $transparency;

        return $this;
    }

    /**
     * @return string
     */
    public function getWatermarkText()
    {
        return $this->watermarkText;
    }

    /**
     * @param string $watermarkText
     *
     * @return self
     */
    public function setWatermarkText($watermarkText = null)
    {
        $this->watermarkText = $watermarkText;

        return $this;
    }
}
