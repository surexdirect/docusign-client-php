<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Radio
{
    /**
     * Reserved for DocuSign.
     <!--
     When set to **true**, the anchor string does not consider case when matching strings in the document. The default value is **true**.
     -->
     *
     * @var string
     */
    protected $anchorCaseSensitive;
    /**
     * Reserved for DocuSign.
     <!--
     Specifies the alignment of anchor tabs with anchor strings. Possible values are **left** or **right**. The default value is **left**.
     -->

     *
     * @var string
     */
    protected $anchorHorizontalAlignment;
    /**
     * When set to **true**, this tab is ignored if anchorString is not found in the document.
     *
     * @var string
     */
    protected $anchorIgnoreIfNotPresent;
    /**
     * Reserved for DocuSign.
     <!--
     When set to **true**, the anchor string in this tab matches whole words only (strings embedded in other strings are ignored.) The default value is **true**.
     -->

     *
     * @var string
     */
    protected $anchorMatchWholeWord;
    /**
     * Anchor text information for a radio button.
     *
     * @var string
     */
    protected $anchorString;
    /**
     * Specifies units of the X and Y offset. Units could be pixels, millimeters, centimeters, or inches.
     *
     * @var string
     */
    protected $anchorUnits;
    /**
     * Specifies the X axis location of the tab, in achorUnits, relative to the anchorString.
     *
     * @var string
     */
    protected $anchorXOffset;
    /**
     * Specifies the Y axis location of the tab, in achorUnits, relative to the anchorString.
     *
     * @var string
     */
    protected $anchorYOffset;
    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * When set to **true**, the signer cannot change the data of the custom tab.
     *
     * @var string
     */
    protected $locked;
    /**
     * Specifies the page number on which the tab is located.
     Must be 1 for [supplemental documents][supdocs].

     [supdocs]: /esign/guide/appendix/glossary.html#supplemental-documents

     *
     * @var string
     */
    protected $pageNumber;
    /**
     * When set to **true**, the signer is required to fill out this tab.
     *
     * @var string
     */
    protected $required;
    /**
     * When set to **true**, the radio button is selected.
     *
     * @var string
     */
    protected $selected;
    /**
     * The unique identifier for the tab. The tabid can be retrieved with the [ML:GET call].
     *
     * @var string
     */
    protected $tabId;
    /**
     * @var string
     */
    protected $tabOrder;
    /**
     * Specifies the value of the tab.
     *
     * @var string
     */
    protected $value;
    /**
     * This indicates the horizontal offset of the object on the page.
     DocuSign uses 72 DPI when determining position.
     Required. May be zero.

     *
     * @var string
     */
    protected $xPosition;
    /**
     * This indicates the vertical offset of the object on the page. DocuSign uses 72 DPI when determining position.
     *
     * @var string
     */
    protected $yPosition;

    /**
     * Reserved for DocuSign.
     <!--
     When set to **true**, the anchor string does not consider case when matching strings in the document. The default value is **true**.
     -->
     *
     * @return string
     */
    public function getAnchorCaseSensitive(): ?string
    {
        return $this->anchorCaseSensitive;
    }

    /**
     * Reserved for DocuSign.
     <!--
     When set to **true**, the anchor string does not consider case when matching strings in the document. The default value is **true**.
     -->
     *
     * @param string $anchorCaseSensitive
     *
     * @return self
     */
    public function setAnchorCaseSensitive(?string $anchorCaseSensitive): self
    {
        $this->anchorCaseSensitive = $anchorCaseSensitive;

        return $this;
    }

    /**
     * Reserved for DocuSign.
     <!--
     Specifies the alignment of anchor tabs with anchor strings. Possible values are **left** or **right**. The default value is **left**.
     -->

     *
     * @return string
     */
    public function getAnchorHorizontalAlignment(): ?string
    {
        return $this->anchorHorizontalAlignment;
    }

    /**
     * Reserved for DocuSign.
     <!--
     Specifies the alignment of anchor tabs with anchor strings. Possible values are **left** or **right**. The default value is **left**.
     -->

     *
     * @param string $anchorHorizontalAlignment
     *
     * @return self
     */
    public function setAnchorHorizontalAlignment(?string $anchorHorizontalAlignment): self
    {
        $this->anchorHorizontalAlignment = $anchorHorizontalAlignment;

        return $this;
    }

    /**
     * When set to **true**, this tab is ignored if anchorString is not found in the document.
     *
     * @return string
     */
    public function getAnchorIgnoreIfNotPresent(): ?string
    {
        return $this->anchorIgnoreIfNotPresent;
    }

    /**
     * When set to **true**, this tab is ignored if anchorString is not found in the document.
     *
     * @param string $anchorIgnoreIfNotPresent
     *
     * @return self
     */
    public function setAnchorIgnoreIfNotPresent(?string $anchorIgnoreIfNotPresent): self
    {
        $this->anchorIgnoreIfNotPresent = $anchorIgnoreIfNotPresent;

        return $this;
    }

    /**
     * Reserved for DocuSign.
     <!--
     When set to **true**, the anchor string in this tab matches whole words only (strings embedded in other strings are ignored.) The default value is **true**.
     -->

     *
     * @return string
     */
    public function getAnchorMatchWholeWord(): ?string
    {
        return $this->anchorMatchWholeWord;
    }

    /**
     * Reserved for DocuSign.
     <!--
     When set to **true**, the anchor string in this tab matches whole words only (strings embedded in other strings are ignored.) The default value is **true**.
     -->

     *
     * @param string $anchorMatchWholeWord
     *
     * @return self
     */
    public function setAnchorMatchWholeWord(?string $anchorMatchWholeWord): self
    {
        $this->anchorMatchWholeWord = $anchorMatchWholeWord;

        return $this;
    }

    /**
     * Anchor text information for a radio button.
     *
     * @return string
     */
    public function getAnchorString(): ?string
    {
        return $this->anchorString;
    }

    /**
     * Anchor text information for a radio button.
     *
     * @param string $anchorString
     *
     * @return self
     */
    public function setAnchorString(?string $anchorString): self
    {
        $this->anchorString = $anchorString;

        return $this;
    }

    /**
     * Specifies units of the X and Y offset. Units could be pixels, millimeters, centimeters, or inches.
     *
     * @return string
     */
    public function getAnchorUnits(): ?string
    {
        return $this->anchorUnits;
    }

    /**
     * Specifies units of the X and Y offset. Units could be pixels, millimeters, centimeters, or inches.
     *
     * @param string $anchorUnits
     *
     * @return self
     */
    public function setAnchorUnits(?string $anchorUnits): self
    {
        $this->anchorUnits = $anchorUnits;

        return $this;
    }

    /**
     * Specifies the X axis location of the tab, in achorUnits, relative to the anchorString.
     *
     * @return string
     */
    public function getAnchorXOffset(): ?string
    {
        return $this->anchorXOffset;
    }

    /**
     * Specifies the X axis location of the tab, in achorUnits, relative to the anchorString.
     *
     * @param string $anchorXOffset
     *
     * @return self
     */
    public function setAnchorXOffset(?string $anchorXOffset): self
    {
        $this->anchorXOffset = $anchorXOffset;

        return $this;
    }

    /**
     * Specifies the Y axis location of the tab, in achorUnits, relative to the anchorString.
     *
     * @return string
     */
    public function getAnchorYOffset(): ?string
    {
        return $this->anchorYOffset;
    }

    /**
     * Specifies the Y axis location of the tab, in achorUnits, relative to the anchorString.
     *
     * @param string $anchorYOffset
     *
     * @return self
     */
    public function setAnchorYOffset(?string $anchorYOffset): self
    {
        $this->anchorYOffset = $anchorYOffset;

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
     * When set to **true**, the signer cannot change the data of the custom tab.
     *
     * @return string
     */
    public function getLocked(): ?string
    {
        return $this->locked;
    }

    /**
     * When set to **true**, the signer cannot change the data of the custom tab.
     *
     * @param string $locked
     *
     * @return self
     */
    public function setLocked(?string $locked): self
    {
        $this->locked = $locked;

        return $this;
    }

    /**
     * Specifies the page number on which the tab is located.
     Must be 1 for [supplemental documents][supdocs].

     [supdocs]: /esign/guide/appendix/glossary.html#supplemental-documents

     *
     * @return string
     */
    public function getPageNumber(): ?string
    {
        return $this->pageNumber;
    }

    /**
     * Specifies the page number on which the tab is located.
     Must be 1 for [supplemental documents][supdocs].

     [supdocs]: /esign/guide/appendix/glossary.html#supplemental-documents

     *
     * @param string $pageNumber
     *
     * @return self
     */
    public function setPageNumber(?string $pageNumber): self
    {
        $this->pageNumber = $pageNumber;

        return $this;
    }

    /**
     * When set to **true**, the signer is required to fill out this tab.
     *
     * @return string
     */
    public function getRequired(): ?string
    {
        return $this->required;
    }

    /**
     * When set to **true**, the signer is required to fill out this tab.
     *
     * @param string $required
     *
     * @return self
     */
    public function setRequired(?string $required): self
    {
        $this->required = $required;

        return $this;
    }

    /**
     * When set to **true**, the radio button is selected.
     *
     * @return string
     */
    public function getSelected(): ?string
    {
        return $this->selected;
    }

    /**
     * When set to **true**, the radio button is selected.
     *
     * @param string $selected
     *
     * @return self
     */
    public function setSelected(?string $selected): self
    {
        $this->selected = $selected;

        return $this;
    }

    /**
     * The unique identifier for the tab. The tabid can be retrieved with the [ML:GET call].
     *
     * @return string
     */
    public function getTabId(): ?string
    {
        return $this->tabId;
    }

    /**
     * The unique identifier for the tab. The tabid can be retrieved with the [ML:GET call].
     *
     * @param string $tabId
     *
     * @return self
     */
    public function setTabId(?string $tabId): self
    {
        $this->tabId = $tabId;

        return $this;
    }

    /**
     * @return string
     */
    public function getTabOrder(): ?string
    {
        return $this->tabOrder;
    }

    /**
     * @param string $tabOrder
     *
     * @return self
     */
    public function setTabOrder(?string $tabOrder): self
    {
        $this->tabOrder = $tabOrder;

        return $this;
    }

    /**
     * Specifies the value of the tab.
     *
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Specifies the value of the tab.
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * This indicates the horizontal offset of the object on the page.
     DocuSign uses 72 DPI when determining position.
     Required. May be zero.

     *
     * @return string
     */
    public function getXPosition(): ?string
    {
        return $this->xPosition;
    }

    /**
     * This indicates the horizontal offset of the object on the page.
     DocuSign uses 72 DPI when determining position.
     Required. May be zero.

     *
     * @param string $xPosition
     *
     * @return self
     */
    public function setXPosition(?string $xPosition): self
    {
        $this->xPosition = $xPosition;

        return $this;
    }

    /**
     * This indicates the vertical offset of the object on the page. DocuSign uses 72 DPI when determining position.
     *
     * @return string
     */
    public function getYPosition(): ?string
    {
        return $this->yPosition;
    }

    /**
     * This indicates the vertical offset of the object on the page. DocuSign uses 72 DPI when determining position.
     *
     * @param string $yPosition
     *
     * @return self
     */
    public function setYPosition(?string $yPosition): self
    {
        $this->yPosition = $yPosition;

        return $this;
    }
}
