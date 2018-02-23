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
     * The font to be used for the tab value. Supported Fonts: Arial, Arial, ArialNarrow, Calibri, CourierNew, Garamond, Georgia, Helvetica,   LucidaConsole, Tahoma, TimesNewRoman, Trebuchet, Verdana, MSGothic, MSMincho, Default.
     *
     * @var string
     */
    protected $font;
    /**
     * The font color used for the information in the tab.

     Possible values are: Black, BrightBlue, BrightRed, DarkGreen, DarkRed, Gold, Green, NavyBlue, Purple, or White.
     *
     * @var string
     */
    protected $fontColor;
    /**
     * The font size used for the information in the tab.

     Possible values are: Size7, Size8, Size9, Size10, Size11, Size12, Size14, Size16, Size18, Size20, Size22, Size24, Size26, Size28, Size36, Size48, or Size72.
     *
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
    public function getDisplayAngle(): ?string
    {
        return $this->displayAngle;
    }

    /**
     * @param string $displayAngle
     *
     * @return self
     */
    public function setDisplayAngle(?string $displayAngle): self
    {
        $this->displayAngle = $displayAngle;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnabled(): ?string
    {
        return $this->enabled;
    }

    /**
     * @param string $enabled
     *
     * @return self
     */
    public function setEnabled(?string $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * The font to be used for the tab value. Supported Fonts: Arial, Arial, ArialNarrow, Calibri, CourierNew, Garamond, Georgia, Helvetica,   LucidaConsole, Tahoma, TimesNewRoman, Trebuchet, Verdana, MSGothic, MSMincho, Default.
     *
     * @return string
     */
    public function getFont(): ?string
    {
        return $this->font;
    }

    /**
     * The font to be used for the tab value. Supported Fonts: Arial, Arial, ArialNarrow, Calibri, CourierNew, Garamond, Georgia, Helvetica,   LucidaConsole, Tahoma, TimesNewRoman, Trebuchet, Verdana, MSGothic, MSMincho, Default.
     *
     * @param string $font
     *
     * @return self
     */
    public function setFont(?string $font): self
    {
        $this->font = $font;

        return $this;
    }

    /**
     * The font color used for the information in the tab.

     Possible values are: Black, BrightBlue, BrightRed, DarkGreen, DarkRed, Gold, Green, NavyBlue, Purple, or White.
     *
     * @return string
     */
    public function getFontColor(): ?string
    {
        return $this->fontColor;
    }

    /**
     * The font color used for the information in the tab.

     Possible values are: Black, BrightBlue, BrightRed, DarkGreen, DarkRed, Gold, Green, NavyBlue, Purple, or White.
     *
     * @param string $fontColor
     *
     * @return self
     */
    public function setFontColor(?string $fontColor): self
    {
        $this->fontColor = $fontColor;

        return $this;
    }

    /**
     * The font size used for the information in the tab.

     Possible values are: Size7, Size8, Size9, Size10, Size11, Size12, Size14, Size16, Size18, Size20, Size22, Size24, Size26, Size28, Size36, Size48, or Size72.
     *
     * @return string
     */
    public function getFontSize(): ?string
    {
        return $this->fontSize;
    }

    /**
     * The font size used for the information in the tab.

     Possible values are: Size7, Size8, Size9, Size10, Size11, Size12, Size14, Size16, Size18, Size20, Size22, Size24, Size26, Size28, Size36, Size48, or Size72.
     *
     * @param string $fontSize
     *
     * @return self
     */
    public function setFontSize(?string $fontSize): self
    {
        $this->fontSize = $fontSize;

        return $this;
    }

    /**
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getImageBase64(): ?string
    {
        return $this->imageBase64;
    }

    /**
     * @param string $imageBase64
     *
     * @return self
     */
    public function setImageBase64(?string $imageBase64): self
    {
        $this->imageBase64 = $imageBase64;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransparency(): ?string
    {
        return $this->transparency;
    }

    /**
     * @param string $transparency
     *
     * @return self
     */
    public function setTransparency(?string $transparency): self
    {
        $this->transparency = $transparency;

        return $this;
    }

    /**
     * @return string
     */
    public function getWatermarkText(): ?string
    {
        return $this->watermarkText;
    }

    /**
     * @param string $watermarkText
     *
     * @return self
     */
    public function setWatermarkText(?string $watermarkText): self
    {
        $this->watermarkText = $watermarkText;

        return $this;
    }
}
