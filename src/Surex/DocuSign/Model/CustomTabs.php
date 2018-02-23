<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class CustomTabs
{
    /**
     * An optional string that is used to auto-match tabs to strings located in the documents of an envelope.
     *
     * @var string
     */
    protected $anchor;
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
     * When set to **true**, the information in the tab is bold.
     *
     * @var string
     */
    protected $bold;
    /**
     * When set to **true**, the field appears normally while the recipient is adding or modifying the information in the field, but the data is not visible (the characters are hidden by asterisks) to any other signer or the sender.

     When an envelope is completed the information is available to the sender through the Form Data link in the DocuSign Console.

     This setting applies only to text boxes and does not affect list boxes, radio buttons, or check boxes.
     *
     * @var string
     */
    protected $concealValueOnDocument;
    /**
     * The user name of the DocuSign user who created this object.
     *
     * @var string
     */
    protected $createdByDisplayName;
    /**
     * The userId of the DocuSign user who created this object.
     *
     * @var string
     */
    protected $createdByUserId;
    /**
     * The DocuSign generated custom tab ID for the custom tab to be applied. This can only be used when adding new tabs for a recipient. When used, the new tab inherits all the custom tab properties.
     *
     * @var string
     */
    protected $customTabId;
    /**
     * When set to **true**, disables the auto sizing of single line text boxes in the signing screen when the signer enters data. If disabled users will only be able enter as much data as the text box can hold. By default this is false. This property only affects single line text boxes.
     *
     * @var string
     */
    protected $disableAutoSize;
    /**
     * When set to **true**, the custom tab is editable. Otherwise the custom tab cannot be modified.
     *
     * @var string
     */
    protected $editable;
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
     * Height of the tab in pixels.
     *
     * @var string
     */
    protected $height;
    /**
     * When set to **true**, the tab is included in e-mails related to the envelope on which it exists. This applies to only specific tabs.
     *
     * @var string
     */
    protected $includedInEmail;
    /**
     * The original value of the tab.
     *
     * @var string
     */
    protected $initialValue;
    /**
     * When set to **true**, the information in the tab is italic.
     *
     * @var string
     */
    protected $italic;
    /**
     * If the tab is a list, this represents the values that are possible for the tab.
     *
     * @var string[]
     */
    protected $items;
    /**
     * The UTC DateTime this object was last modified. This is in ISO8601 format.
     *
     * @var string
     */
    protected $lastModified;
    /**
     * The User Name of the DocuSign user who last modified this object.
     *
     * @var string
     */
    protected $lastModifiedByDisplayName;
    /**
     * The userId of the DocuSign user who last modified this object.
     *
     * @var string
     */
    protected $lastModifiedByUserId;
    /**
     * When set to **true**, the signer cannot change the data of the custom tab.
     *
     * @var string
     */
    protected $locked;
    /**
     * The maximum number of entry characters supported by the custom tab.
     *
     * @var string
     */
    protected $maximumLength;
    /**
     * Contains information for transfering values between Salesforce data fields and DocuSign Tabs.
     *
     * @var MergeField
     */
    protected $mergeField;
    /**
     * @var string
     */
    protected $name;
    /**
     * When set to **true**, the signer is required to fill out this tab.
     *
     * @var string
     */
    protected $required;
    /**
     * @var string
     */
    protected $scaleValue;
    /**
     * When set to **true**, this custom tab is shared.
     *
     * @var string
     */
    protected $shared;
    /**
     * @var string
     */
    protected $stampType;
    /**
     * @var PropertyMetadata
     */
    protected $stampTypeMetadata;
    /**
     * The label string associated with the tab.
     The string may be the empty string.
     If no value is provided, the tab type is used as the value.

     Maximum of 500 characters.

     *
     * @var string
     */
    protected $tabLabel;
    /**
     * The type of this tab. Values are: Approve, CheckBox, Company, Date, DateSigned,	Decline, Email,	EmailAddress, EnvelopeId, FirstName, Formula, FullName,	InitialHere, InitialHereOptional, LastName, List, Note, Number,	Radio, SignerAttachment, SignHere, SignHereOptional, Ssn, Text, Title, Zip5, or Zip5Dash4.
     *
     * @var string
     */
    protected $type;
    /**
     * When set to **true**, the information in the tab is underlined.
     *
     * @var string
     */
    protected $underline;
    /**
     * The message displayed if the custom tab fails input validation (either custom of embedded).
     *
     * @var string
     */
    protected $validationMessage;
    /**
     * A regular expressionn used to validate input for the tab.
     *
     * @var string
     */
    protected $validationPattern;
    /**
     * Width of the tab in pixels.
     *
     * @var string
     */
    protected $width;

    /**
     * An optional string that is used to auto-match tabs to strings located in the documents of an envelope.
     *
     * @return string
     */
    public function getAnchor(): ?string
    {
        return $this->anchor;
    }

    /**
     * An optional string that is used to auto-match tabs to strings located in the documents of an envelope.
     *
     * @param string $anchor
     *
     * @return self
     */
    public function setAnchor(?string $anchor): self
    {
        $this->anchor = $anchor;

        return $this;
    }

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
     * When set to **true**, the information in the tab is bold.
     *
     * @return string
     */
    public function getBold(): ?string
    {
        return $this->bold;
    }

    /**
     * When set to **true**, the information in the tab is bold.
     *
     * @param string $bold
     *
     * @return self
     */
    public function setBold(?string $bold): self
    {
        $this->bold = $bold;

        return $this;
    }

    /**
     * When set to **true**, the field appears normally while the recipient is adding or modifying the information in the field, but the data is not visible (the characters are hidden by asterisks) to any other signer or the sender.

     When an envelope is completed the information is available to the sender through the Form Data link in the DocuSign Console.

     This setting applies only to text boxes and does not affect list boxes, radio buttons, or check boxes.
     *
     * @return string
     */
    public function getConcealValueOnDocument(): ?string
    {
        return $this->concealValueOnDocument;
    }

    /**
     * When set to **true**, the field appears normally while the recipient is adding or modifying the information in the field, but the data is not visible (the characters are hidden by asterisks) to any other signer or the sender.

     When an envelope is completed the information is available to the sender through the Form Data link in the DocuSign Console.

     This setting applies only to text boxes and does not affect list boxes, radio buttons, or check boxes.
     *
     * @param string $concealValueOnDocument
     *
     * @return self
     */
    public function setConcealValueOnDocument(?string $concealValueOnDocument): self
    {
        $this->concealValueOnDocument = $concealValueOnDocument;

        return $this;
    }

    /**
     * The user name of the DocuSign user who created this object.
     *
     * @return string
     */
    public function getCreatedByDisplayName(): ?string
    {
        return $this->createdByDisplayName;
    }

    /**
     * The user name of the DocuSign user who created this object.
     *
     * @param string $createdByDisplayName
     *
     * @return self
     */
    public function setCreatedByDisplayName(?string $createdByDisplayName): self
    {
        $this->createdByDisplayName = $createdByDisplayName;

        return $this;
    }

    /**
     * The userId of the DocuSign user who created this object.
     *
     * @return string
     */
    public function getCreatedByUserId(): ?string
    {
        return $this->createdByUserId;
    }

    /**
     * The userId of the DocuSign user who created this object.
     *
     * @param string $createdByUserId
     *
     * @return self
     */
    public function setCreatedByUserId(?string $createdByUserId): self
    {
        $this->createdByUserId = $createdByUserId;

        return $this;
    }

    /**
     * The DocuSign generated custom tab ID for the custom tab to be applied. This can only be used when adding new tabs for a recipient. When used, the new tab inherits all the custom tab properties.
     *
     * @return string
     */
    public function getCustomTabId(): ?string
    {
        return $this->customTabId;
    }

    /**
     * The DocuSign generated custom tab ID for the custom tab to be applied. This can only be used when adding new tabs for a recipient. When used, the new tab inherits all the custom tab properties.
     *
     * @param string $customTabId
     *
     * @return self
     */
    public function setCustomTabId(?string $customTabId): self
    {
        $this->customTabId = $customTabId;

        return $this;
    }

    /**
     * When set to **true**, disables the auto sizing of single line text boxes in the signing screen when the signer enters data. If disabled users will only be able enter as much data as the text box can hold. By default this is false. This property only affects single line text boxes.
     *
     * @return string
     */
    public function getDisableAutoSize(): ?string
    {
        return $this->disableAutoSize;
    }

    /**
     * When set to **true**, disables the auto sizing of single line text boxes in the signing screen when the signer enters data. If disabled users will only be able enter as much data as the text box can hold. By default this is false. This property only affects single line text boxes.
     *
     * @param string $disableAutoSize
     *
     * @return self
     */
    public function setDisableAutoSize(?string $disableAutoSize): self
    {
        $this->disableAutoSize = $disableAutoSize;

        return $this;
    }

    /**
     * When set to **true**, the custom tab is editable. Otherwise the custom tab cannot be modified.
     *
     * @return string
     */
    public function getEditable(): ?string
    {
        return $this->editable;
    }

    /**
     * When set to **true**, the custom tab is editable. Otherwise the custom tab cannot be modified.
     *
     * @param string $editable
     *
     * @return self
     */
    public function setEditable(?string $editable): self
    {
        $this->editable = $editable;

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
     * Height of the tab in pixels.
     *
     * @return string
     */
    public function getHeight(): ?string
    {
        return $this->height;
    }

    /**
     * Height of the tab in pixels.
     *
     * @param string $height
     *
     * @return self
     */
    public function setHeight(?string $height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * When set to **true**, the tab is included in e-mails related to the envelope on which it exists. This applies to only specific tabs.
     *
     * @return string
     */
    public function getIncludedInEmail(): ?string
    {
        return $this->includedInEmail;
    }

    /**
     * When set to **true**, the tab is included in e-mails related to the envelope on which it exists. This applies to only specific tabs.
     *
     * @param string $includedInEmail
     *
     * @return self
     */
    public function setIncludedInEmail(?string $includedInEmail): self
    {
        $this->includedInEmail = $includedInEmail;

        return $this;
    }

    /**
     * The original value of the tab.
     *
     * @return string
     */
    public function getInitialValue(): ?string
    {
        return $this->initialValue;
    }

    /**
     * The original value of the tab.
     *
     * @param string $initialValue
     *
     * @return self
     */
    public function setInitialValue(?string $initialValue): self
    {
        $this->initialValue = $initialValue;

        return $this;
    }

    /**
     * When set to **true**, the information in the tab is italic.
     *
     * @return string
     */
    public function getItalic(): ?string
    {
        return $this->italic;
    }

    /**
     * When set to **true**, the information in the tab is italic.
     *
     * @param string $italic
     *
     * @return self
     */
    public function setItalic(?string $italic): self
    {
        $this->italic = $italic;

        return $this;
    }

    /**
     * If the tab is a list, this represents the values that are possible for the tab.
     *
     * @return string[]
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * If the tab is a list, this represents the values that are possible for the tab.
     *
     * @param string[] $items
     *
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;

        return $this;
    }

    /**
     * The UTC DateTime this object was last modified. This is in ISO8601 format.
     *
     * @return string
     */
    public function getLastModified(): ?string
    {
        return $this->lastModified;
    }

    /**
     * The UTC DateTime this object was last modified. This is in ISO8601 format.
     *
     * @param string $lastModified
     *
     * @return self
     */
    public function setLastModified(?string $lastModified): self
    {
        $this->lastModified = $lastModified;

        return $this;
    }

    /**
     * The User Name of the DocuSign user who last modified this object.
     *
     * @return string
     */
    public function getLastModifiedByDisplayName(): ?string
    {
        return $this->lastModifiedByDisplayName;
    }

    /**
     * The User Name of the DocuSign user who last modified this object.
     *
     * @param string $lastModifiedByDisplayName
     *
     * @return self
     */
    public function setLastModifiedByDisplayName(?string $lastModifiedByDisplayName): self
    {
        $this->lastModifiedByDisplayName = $lastModifiedByDisplayName;

        return $this;
    }

    /**
     * The userId of the DocuSign user who last modified this object.
     *
     * @return string
     */
    public function getLastModifiedByUserId(): ?string
    {
        return $this->lastModifiedByUserId;
    }

    /**
     * The userId of the DocuSign user who last modified this object.
     *
     * @param string $lastModifiedByUserId
     *
     * @return self
     */
    public function setLastModifiedByUserId(?string $lastModifiedByUserId): self
    {
        $this->lastModifiedByUserId = $lastModifiedByUserId;

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
     * The maximum number of entry characters supported by the custom tab.
     *
     * @return string
     */
    public function getMaximumLength(): ?string
    {
        return $this->maximumLength;
    }

    /**
     * The maximum number of entry characters supported by the custom tab.
     *
     * @param string $maximumLength
     *
     * @return self
     */
    public function setMaximumLength(?string $maximumLength): self
    {
        $this->maximumLength = $maximumLength;

        return $this;
    }

    /**
     * Contains information for transfering values between Salesforce data fields and DocuSign Tabs.
     *
     * @return MergeField
     */
    public function getMergeField(): ?MergeField
    {
        return $this->mergeField;
    }

    /**
     * Contains information for transfering values between Salesforce data fields and DocuSign Tabs.
     *
     * @param MergeField $mergeField
     *
     * @return self
     */
    public function setMergeField(?MergeField $mergeField): self
    {
        $this->mergeField = $mergeField;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

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
     * @return string
     */
    public function getScaleValue(): ?string
    {
        return $this->scaleValue;
    }

    /**
     * @param string $scaleValue
     *
     * @return self
     */
    public function setScaleValue(?string $scaleValue): self
    {
        $this->scaleValue = $scaleValue;

        return $this;
    }

    /**
     * When set to **true**, this custom tab is shared.
     *
     * @return string
     */
    public function getShared(): ?string
    {
        return $this->shared;
    }

    /**
     * When set to **true**, this custom tab is shared.
     *
     * @param string $shared
     *
     * @return self
     */
    public function setShared(?string $shared): self
    {
        $this->shared = $shared;

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

    /**
     * @return PropertyMetadata
     */
    public function getStampTypeMetadata(): ?PropertyMetadata
    {
        return $this->stampTypeMetadata;
    }

    /**
     * @param PropertyMetadata $stampTypeMetadata
     *
     * @return self
     */
    public function setStampTypeMetadata(?PropertyMetadata $stampTypeMetadata): self
    {
        $this->stampTypeMetadata = $stampTypeMetadata;

        return $this;
    }

    /**
     * The label string associated with the tab.
     The string may be the empty string.
     If no value is provided, the tab type is used as the value.

     Maximum of 500 characters.

     *
     * @return string
     */
    public function getTabLabel(): ?string
    {
        return $this->tabLabel;
    }

    /**
     * The label string associated with the tab.
     The string may be the empty string.
     If no value is provided, the tab type is used as the value.

     Maximum of 500 characters.

     *
     * @param string $tabLabel
     *
     * @return self
     */
    public function setTabLabel(?string $tabLabel): self
    {
        $this->tabLabel = $tabLabel;

        return $this;
    }

    /**
     * The type of this tab. Values are: Approve, CheckBox, Company, Date, DateSigned,	Decline, Email,	EmailAddress, EnvelopeId, FirstName, Formula, FullName,	InitialHere, InitialHereOptional, LastName, List, Note, Number,	Radio, SignerAttachment, SignHere, SignHereOptional, Ssn, Text, Title, Zip5, or Zip5Dash4.
     *
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * The type of this tab. Values are: Approve, CheckBox, Company, Date, DateSigned,	Decline, Email,	EmailAddress, EnvelopeId, FirstName, Formula, FullName,	InitialHere, InitialHereOptional, LastName, List, Note, Number,	Radio, SignerAttachment, SignHere, SignHereOptional, Ssn, Text, Title, Zip5, or Zip5Dash4.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * When set to **true**, the information in the tab is underlined.
     *
     * @return string
     */
    public function getUnderline(): ?string
    {
        return $this->underline;
    }

    /**
     * When set to **true**, the information in the tab is underlined.
     *
     * @param string $underline
     *
     * @return self
     */
    public function setUnderline(?string $underline): self
    {
        $this->underline = $underline;

        return $this;
    }

    /**
     * The message displayed if the custom tab fails input validation (either custom of embedded).
     *
     * @return string
     */
    public function getValidationMessage(): ?string
    {
        return $this->validationMessage;
    }

    /**
     * The message displayed if the custom tab fails input validation (either custom of embedded).
     *
     * @param string $validationMessage
     *
     * @return self
     */
    public function setValidationMessage(?string $validationMessage): self
    {
        $this->validationMessage = $validationMessage;

        return $this;
    }

    /**
     * A regular expressionn used to validate input for the tab.
     *
     * @return string
     */
    public function getValidationPattern(): ?string
    {
        return $this->validationPattern;
    }

    /**
     * A regular expressionn used to validate input for the tab.
     *
     * @param string $validationPattern
     *
     * @return self
     */
    public function setValidationPattern(?string $validationPattern): self
    {
        $this->validationPattern = $validationPattern;

        return $this;
    }

    /**
     * Width of the tab in pixels.
     *
     * @return string
     */
    public function getWidth(): ?string
    {
        return $this->width;
    }

    /**
     * Width of the tab in pixels.
     *
     * @param string $width
     *
     * @return self
     */
    public function setWidth(?string $width): self
    {
        $this->width = $width;

        return $this;
    }
}
