<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class SignerAttachment
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
     * @var string
     */
    protected $optional;
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
     * @var float
     */
    protected $scaleValue;
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
     * @return string
     */
    public function getOptional(): ?string
    {
        return $this->optional;
    }

    /**
     * @param string $optional
     *
     * @return self
     */
    public function setOptional(?string $optional): self
    {
        $this->optional = $optional;

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
     * @return float
     */
    public function getScaleValue(): ?float
    {
        return $this->scaleValue;
    }

    /**
     * @param float $scaleValue
     *
     * @return self
     */
    public function setScaleValue(?float $scaleValue): self
    {
        $this->scaleValue = $scaleValue;

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
