<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Ssn
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
     * For conditional fields this is the TabLabel of the parent tab that controls this tab's visibility.
     *
     * @var string
     */
    protected $conditionalParentLabel;
    /**
     * For conditional fields, this is the value of the parent tab that controls the tab's visibility.

     If the parent tab is a Checkbox, Radio button, Optional Signature, or Optional Initial use "on" as the value to show that the parent tab is active.

     *
     * @var string
     */
    protected $conditionalParentValue;
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
     * Specifies the document ID number that the tab is placed on. This must refer to an existing Document's ID attribute.
     *
     * @var string
     */
    protected $documentId;
    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @var ErrorDetails
     */
    protected $errorDetails;
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
     * When set to **true**, the information in the tab is italic.
     *
     * @var string
     */
    protected $italic;
    /**
     * When set to **true**, the signer cannot change the data of the custom tab.
     *
     * @var string
     */
    protected $locked;
    /**
     * An optional value that describes the maximum length of the property when the property is a string.
     *
     * @var int
     */
    protected $maxLength;
    /**
     * Contains information for transfering values between Salesforce data fields and DocuSign Tabs.
     *
     * @var MergeField
     */
    protected $mergeField;
    /**
     * Specifies the tool tip text for the tab.
     *
     * @var string
     */
    protected $name;
    /**
     * The initial value of the tab when it was sent to the recipient.
     *
     * @var string
     */
    protected $originalValue;
    /**
     * Specifies the page number on which the tab is located.
     Must be 1 for [supplemental documents][supdocs].

     [supdocs]: /esign/guide/appendix/glossary.html#supplemental-documents

     *
     * @var string
     */
    protected $pageNumber;
    /**
     * Unique for the recipient. It is used by the tab element to indicate which recipient is to sign the Document.
     *
     * @var string
     */
    protected $recipientId;
    /**
     * When set to **true** and shared is true, information must be entered in this field to complete the envelope.
     *
     * @var string
     */
    protected $requireAll;
    /**
     * When set to **true**, the signer is required to fill out this tab.
     *
     * @var string
     */
    protected $required;
    /**
     * Optional element for field markup. When set to **true**, the signer is required to initial when they modify a shared field.
     *
     * @var string
     */
    protected $requireInitialOnSharedChange;
    /**
     * When set to **true**, the sender must populate the tab before an envelope can be sent using the template.

     This value tab can only be changed by modifying (PUT) the template.

     Tabs with a `senderRequired` value of true cannot be deleted from an envelope.
     *
     * @var string
     */
    protected $senderRequired;
    /**
     * When set to **true**, this custom tab is shared.
     *
     * @var string
     */
    protected $shared;
    /**
     * Indicates the envelope status. Valid values are:.

     * sent - The envelope is sent to the recipients.
     * created - The envelope is saved as a draft and can be modified and sent later.
     *
     * @var string
     */
    protected $status;
    /**
     * The unique identifier for the tab. The tabid can be retrieved with the [ML:GET call].
     *
     * @var string
     */
    protected $tabId;
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
     * @var string
     */
    protected $tabOrder;
    /**
     * When set to **true**, the sender cannot change any attributes of the recipient. Used only when working with template recipients.
     *
     * @var string
     */
    protected $templateLocked;
    /**
     * When set to **true**, the sender may not remove the recipient. Used only when working with template recipients.
     *
     * @var string
     */
    protected $templateRequired;
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
     * Specifies the value of the tab.
     *
     * @var string
     */
    protected $value;
    /**
     * Width of the tab in pixels.
     *
     * @var int
     */
    protected $width;
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
     * For conditional fields this is the TabLabel of the parent tab that controls this tab's visibility.
     *
     * @return string
     */
    public function getConditionalParentLabel(): ?string
    {
        return $this->conditionalParentLabel;
    }

    /**
     * For conditional fields this is the TabLabel of the parent tab that controls this tab's visibility.
     *
     * @param string $conditionalParentLabel
     *
     * @return self
     */
    public function setConditionalParentLabel(?string $conditionalParentLabel): self
    {
        $this->conditionalParentLabel = $conditionalParentLabel;

        return $this;
    }

    /**
     * For conditional fields, this is the value of the parent tab that controls the tab's visibility.

     If the parent tab is a Checkbox, Radio button, Optional Signature, or Optional Initial use "on" as the value to show that the parent tab is active.

     *
     * @return string
     */
    public function getConditionalParentValue(): ?string
    {
        return $this->conditionalParentValue;
    }

    /**
     * For conditional fields, this is the value of the parent tab that controls the tab's visibility.

     If the parent tab is a Checkbox, Radio button, Optional Signature, or Optional Initial use "on" as the value to show that the parent tab is active.

     *
     * @param string $conditionalParentValue
     *
     * @return self
     */
    public function setConditionalParentValue(?string $conditionalParentValue): self
    {
        $this->conditionalParentValue = $conditionalParentValue;

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
     * Specifies the document ID number that the tab is placed on. This must refer to an existing Document's ID attribute.
     *
     * @return string
     */
    public function getDocumentId(): ?string
    {
        return $this->documentId;
    }

    /**
     * Specifies the document ID number that the tab is placed on. This must refer to an existing Document's ID attribute.
     *
     * @param string $documentId
     *
     * @return self
     */
    public function setDocumentId(?string $documentId): self
    {
        $this->documentId = $documentId;

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
     * An optional value that describes the maximum length of the property when the property is a string.
     *
     * @return int
     */
    public function getMaxLength(): ?int
    {
        return $this->maxLength;
    }

    /**
     * An optional value that describes the maximum length of the property when the property is a string.
     *
     * @param int $maxLength
     *
     * @return self
     */
    public function setMaxLength(?int $maxLength): self
    {
        $this->maxLength = $maxLength;

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
     * Specifies the tool tip text for the tab.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Specifies the tool tip text for the tab.
     *
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
     * The initial value of the tab when it was sent to the recipient.
     *
     * @return string
     */
    public function getOriginalValue(): ?string
    {
        return $this->originalValue;
    }

    /**
     * The initial value of the tab when it was sent to the recipient.
     *
     * @param string $originalValue
     *
     * @return self
     */
    public function setOriginalValue(?string $originalValue): self
    {
        $this->originalValue = $originalValue;

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
     * Unique for the recipient. It is used by the tab element to indicate which recipient is to sign the Document.
     *
     * @return string
     */
    public function getRecipientId(): ?string
    {
        return $this->recipientId;
    }

    /**
     * Unique for the recipient. It is used by the tab element to indicate which recipient is to sign the Document.
     *
     * @param string $recipientId
     *
     * @return self
     */
    public function setRecipientId(?string $recipientId): self
    {
        $this->recipientId = $recipientId;

        return $this;
    }

    /**
     * When set to **true** and shared is true, information must be entered in this field to complete the envelope.
     *
     * @return string
     */
    public function getRequireAll(): ?string
    {
        return $this->requireAll;
    }

    /**
     * When set to **true** and shared is true, information must be entered in this field to complete the envelope.
     *
     * @param string $requireAll
     *
     * @return self
     */
    public function setRequireAll(?string $requireAll): self
    {
        $this->requireAll = $requireAll;

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
     * Optional element for field markup. When set to **true**, the signer is required to initial when they modify a shared field.
     *
     * @return string
     */
    public function getRequireInitialOnSharedChange(): ?string
    {
        return $this->requireInitialOnSharedChange;
    }

    /**
     * Optional element for field markup. When set to **true**, the signer is required to initial when they modify a shared field.
     *
     * @param string $requireInitialOnSharedChange
     *
     * @return self
     */
    public function setRequireInitialOnSharedChange(?string $requireInitialOnSharedChange): self
    {
        $this->requireInitialOnSharedChange = $requireInitialOnSharedChange;

        return $this;
    }

    /**
     * When set to **true**, the sender must populate the tab before an envelope can be sent using the template.

     This value tab can only be changed by modifying (PUT) the template.

     Tabs with a `senderRequired` value of true cannot be deleted from an envelope.
     *
     * @return string
     */
    public function getSenderRequired(): ?string
    {
        return $this->senderRequired;
    }

    /**
     * When set to **true**, the sender must populate the tab before an envelope can be sent using the template.

     This value tab can only be changed by modifying (PUT) the template.

     Tabs with a `senderRequired` value of true cannot be deleted from an envelope.
     *
     * @param string $senderRequired
     *
     * @return self
     */
    public function setSenderRequired(?string $senderRequired): self
    {
        $this->senderRequired = $senderRequired;

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
     * Indicates the envelope status. Valid values are:.

     * sent - The envelope is sent to the recipients.
     * created - The envelope is saved as a draft and can be modified and sent later.
     *
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Indicates the envelope status. Valid values are:.

     * sent - The envelope is sent to the recipients.
     * created - The envelope is saved as a draft and can be modified and sent later.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

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
     * When set to **true**, the sender cannot change any attributes of the recipient. Used only when working with template recipients.
     *
     * @return string
     */
    public function getTemplateLocked(): ?string
    {
        return $this->templateLocked;
    }

    /**
     * When set to **true**, the sender cannot change any attributes of the recipient. Used only when working with template recipients.
     *
     * @param string $templateLocked
     *
     * @return self
     */
    public function setTemplateLocked(?string $templateLocked): self
    {
        $this->templateLocked = $templateLocked;

        return $this;
    }

    /**
     * When set to **true**, the sender may not remove the recipient. Used only when working with template recipients.
     *
     * @return string
     */
    public function getTemplateRequired(): ?string
    {
        return $this->templateRequired;
    }

    /**
     * When set to **true**, the sender may not remove the recipient. Used only when working with template recipients.
     *
     * @param string $templateRequired
     *
     * @return self
     */
    public function setTemplateRequired(?string $templateRequired): self
    {
        $this->templateRequired = $templateRequired;

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
     * Width of the tab in pixels.
     *
     * @return int
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * Width of the tab in pixels.
     *
     * @param int $width
     *
     * @return self
     */
    public function setWidth(?int $width): self
    {
        $this->width = $width;

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
