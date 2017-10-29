<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class List_
{
    /**
     * @var string
     */
    protected $anchorCaseSensitive;
    /**
     * @var string
     */
    protected $anchorHorizontalAlignment;
    /**
     * @var string
     */
    protected $anchorIgnoreIfNotPresent;
    /**
     * @var string
     */
    protected $anchorMatchWholeWord;
    /**
     * @var string
     */
    protected $anchorString;
    /**
     * @var string
     */
    protected $anchorUnits;
    /**
     * @var string
     */
    protected $anchorXOffset;
    /**
     * @var string
     */
    protected $anchorYOffset;
    /**
     * @var string
     */
    protected $bold;
    /**
     * @var string
     */
    protected $conditionalParentLabel;
    /**
     * @var string
     */
    protected $conditionalParentValue;
    /**
     * @var string
     */
    protected $customTabId;
    /**
     * @var string
     */
    protected $documentId;
    /**
     * @var ErrorDetails
     */
    protected $errorDetails;
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
    protected $italic;
    /**
     * @var ListItem[]
     */
    protected $listItems;
    /**
     * @var string
     */
    protected $locked;
    /**
     * @var MergeField
     */
    protected $mergeField;
    /**
     * @var string
     */
    protected $pageNumber;
    /**
     * @var string
     */
    protected $recipientId;
    /**
     * @var string
     */
    protected $requireAll;
    /**
     * @var string
     */
    protected $required;
    /**
     * @var string
     */
    protected $requireInitialOnSharedChange;
    /**
     * @var string
     */
    protected $senderRequired;
    /**
     * @var string
     */
    protected $shared;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $tabId;
    /**
     * @var string
     */
    protected $tabLabel;
    /**
     * @var string
     */
    protected $tabOrder;
    /**
     * @var string
     */
    protected $templateLocked;
    /**
     * @var string
     */
    protected $templateRequired;
    /**
     * @var string
     */
    protected $underline;
    /**
     * @var string
     */
    protected $value;
    /**
     * @var int
     */
    protected $width;
    /**
     * @var string
     */
    protected $xPosition;
    /**
     * @var string
     */
    protected $yPosition;

    /**
     * @return string
     */
    public function getAnchorCaseSensitive()
    {
        return $this->anchorCaseSensitive;
    }

    /**
     * @param string $anchorCaseSensitive
     *
     * @return self
     */
    public function setAnchorCaseSensitive($anchorCaseSensitive = null)
    {
        $this->anchorCaseSensitive = $anchorCaseSensitive;

        return $this;
    }

    /**
     * @return string
     */
    public function getAnchorHorizontalAlignment()
    {
        return $this->anchorHorizontalAlignment;
    }

    /**
     * @param string $anchorHorizontalAlignment
     *
     * @return self
     */
    public function setAnchorHorizontalAlignment($anchorHorizontalAlignment = null)
    {
        $this->anchorHorizontalAlignment = $anchorHorizontalAlignment;

        return $this;
    }

    /**
     * @return string
     */
    public function getAnchorIgnoreIfNotPresent()
    {
        return $this->anchorIgnoreIfNotPresent;
    }

    /**
     * @param string $anchorIgnoreIfNotPresent
     *
     * @return self
     */
    public function setAnchorIgnoreIfNotPresent($anchorIgnoreIfNotPresent = null)
    {
        $this->anchorIgnoreIfNotPresent = $anchorIgnoreIfNotPresent;

        return $this;
    }

    /**
     * @return string
     */
    public function getAnchorMatchWholeWord()
    {
        return $this->anchorMatchWholeWord;
    }

    /**
     * @param string $anchorMatchWholeWord
     *
     * @return self
     */
    public function setAnchorMatchWholeWord($anchorMatchWholeWord = null)
    {
        $this->anchorMatchWholeWord = $anchorMatchWholeWord;

        return $this;
    }

    /**
     * @return string
     */
    public function getAnchorString()
    {
        return $this->anchorString;
    }

    /**
     * @param string $anchorString
     *
     * @return self
     */
    public function setAnchorString($anchorString = null)
    {
        $this->anchorString = $anchorString;

        return $this;
    }

    /**
     * @return string
     */
    public function getAnchorUnits()
    {
        return $this->anchorUnits;
    }

    /**
     * @param string $anchorUnits
     *
     * @return self
     */
    public function setAnchorUnits($anchorUnits = null)
    {
        $this->anchorUnits = $anchorUnits;

        return $this;
    }

    /**
     * @return string
     */
    public function getAnchorXOffset()
    {
        return $this->anchorXOffset;
    }

    /**
     * @param string $anchorXOffset
     *
     * @return self
     */
    public function setAnchorXOffset($anchorXOffset = null)
    {
        $this->anchorXOffset = $anchorXOffset;

        return $this;
    }

    /**
     * @return string
     */
    public function getAnchorYOffset()
    {
        return $this->anchorYOffset;
    }

    /**
     * @param string $anchorYOffset
     *
     * @return self
     */
    public function setAnchorYOffset($anchorYOffset = null)
    {
        $this->anchorYOffset = $anchorYOffset;

        return $this;
    }

    /**
     * @return string
     */
    public function getBold()
    {
        return $this->bold;
    }

    /**
     * @param string $bold
     *
     * @return self
     */
    public function setBold($bold = null)
    {
        $this->bold = $bold;

        return $this;
    }

    /**
     * @return string
     */
    public function getConditionalParentLabel()
    {
        return $this->conditionalParentLabel;
    }

    /**
     * @param string $conditionalParentLabel
     *
     * @return self
     */
    public function setConditionalParentLabel($conditionalParentLabel = null)
    {
        $this->conditionalParentLabel = $conditionalParentLabel;

        return $this;
    }

    /**
     * @return string
     */
    public function getConditionalParentValue()
    {
        return $this->conditionalParentValue;
    }

    /**
     * @param string $conditionalParentValue
     *
     * @return self
     */
    public function setConditionalParentValue($conditionalParentValue = null)
    {
        $this->conditionalParentValue = $conditionalParentValue;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomTabId()
    {
        return $this->customTabId;
    }

    /**
     * @param string $customTabId
     *
     * @return self
     */
    public function setCustomTabId($customTabId = null)
    {
        $this->customTabId = $customTabId;

        return $this;
    }

    /**
     * @return string
     */
    public function getDocumentId()
    {
        return $this->documentId;
    }

    /**
     * @param string $documentId
     *
     * @return self
     */
    public function setDocumentId($documentId = null)
    {
        $this->documentId = $documentId;

        return $this;
    }

    /**
     * @return ErrorDetails
     */
    public function getErrorDetails()
    {
        return $this->errorDetails;
    }

    /**
     * @param ErrorDetails $errorDetails
     *
     * @return self
     */
    public function setErrorDetails(ErrorDetails $errorDetails = null)
    {
        $this->errorDetails = $errorDetails;

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
    public function getItalic()
    {
        return $this->italic;
    }

    /**
     * @param string $italic
     *
     * @return self
     */
    public function setItalic($italic = null)
    {
        $this->italic = $italic;

        return $this;
    }

    /**
     * @return ListItem[]
     */
    public function getListItems()
    {
        return $this->listItems;
    }

    /**
     * @param ListItem[] $listItems
     *
     * @return self
     */
    public function setListItems(array $listItems = null)
    {
        $this->listItems = $listItems;

        return $this;
    }

    /**
     * @return string
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * @param string $locked
     *
     * @return self
     */
    public function setLocked($locked = null)
    {
        $this->locked = $locked;

        return $this;
    }

    /**
     * @return MergeField
     */
    public function getMergeField()
    {
        return $this->mergeField;
    }

    /**
     * @param MergeField $mergeField
     *
     * @return self
     */
    public function setMergeField(MergeField $mergeField = null)
    {
        $this->mergeField = $mergeField;

        return $this;
    }

    /**
     * @return string
     */
    public function getPageNumber()
    {
        return $this->pageNumber;
    }

    /**
     * @param string $pageNumber
     *
     * @return self
     */
    public function setPageNumber($pageNumber = null)
    {
        $this->pageNumber = $pageNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getRecipientId()
    {
        return $this->recipientId;
    }

    /**
     * @param string $recipientId
     *
     * @return self
     */
    public function setRecipientId($recipientId = null)
    {
        $this->recipientId = $recipientId;

        return $this;
    }

    /**
     * @return string
     */
    public function getRequireAll()
    {
        return $this->requireAll;
    }

    /**
     * @param string $requireAll
     *
     * @return self
     */
    public function setRequireAll($requireAll = null)
    {
        $this->requireAll = $requireAll;

        return $this;
    }

    /**
     * @return string
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * @param string $required
     *
     * @return self
     */
    public function setRequired($required = null)
    {
        $this->required = $required;

        return $this;
    }

    /**
     * @return string
     */
    public function getRequireInitialOnSharedChange()
    {
        return $this->requireInitialOnSharedChange;
    }

    /**
     * @param string $requireInitialOnSharedChange
     *
     * @return self
     */
    public function setRequireInitialOnSharedChange($requireInitialOnSharedChange = null)
    {
        $this->requireInitialOnSharedChange = $requireInitialOnSharedChange;

        return $this;
    }

    /**
     * @return string
     */
    public function getSenderRequired()
    {
        return $this->senderRequired;
    }

    /**
     * @param string $senderRequired
     *
     * @return self
     */
    public function setSenderRequired($senderRequired = null)
    {
        $this->senderRequired = $senderRequired;

        return $this;
    }

    /**
     * @return string
     */
    public function getShared()
    {
        return $this->shared;
    }

    /**
     * @param string $shared
     *
     * @return self
     */
    public function setShared($shared = null)
    {
        $this->shared = $shared;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus($status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getTabId()
    {
        return $this->tabId;
    }

    /**
     * @param string $tabId
     *
     * @return self
     */
    public function setTabId($tabId = null)
    {
        $this->tabId = $tabId;

        return $this;
    }

    /**
     * @return string
     */
    public function getTabLabel()
    {
        return $this->tabLabel;
    }

    /**
     * @param string $tabLabel
     *
     * @return self
     */
    public function setTabLabel($tabLabel = null)
    {
        $this->tabLabel = $tabLabel;

        return $this;
    }

    /**
     * @return string
     */
    public function getTabOrder()
    {
        return $this->tabOrder;
    }

    /**
     * @param string $tabOrder
     *
     * @return self
     */
    public function setTabOrder($tabOrder = null)
    {
        $this->tabOrder = $tabOrder;

        return $this;
    }

    /**
     * @return string
     */
    public function getTemplateLocked()
    {
        return $this->templateLocked;
    }

    /**
     * @param string $templateLocked
     *
     * @return self
     */
    public function setTemplateLocked($templateLocked = null)
    {
        $this->templateLocked = $templateLocked;

        return $this;
    }

    /**
     * @return string
     */
    public function getTemplateRequired()
    {
        return $this->templateRequired;
    }

    /**
     * @param string $templateRequired
     *
     * @return self
     */
    public function setTemplateRequired($templateRequired = null)
    {
        $this->templateRequired = $templateRequired;

        return $this;
    }

    /**
     * @return string
     */
    public function getUnderline()
    {
        return $this->underline;
    }

    /**
     * @param string $underline
     *
     * @return self
     */
    public function setUnderline($underline = null)
    {
        $this->underline = $underline;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     *
     * @return self
     */
    public function setValue($value = null)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param int $width
     *
     * @return self
     */
    public function setWidth($width = null)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * @return string
     */
    public function getXPosition()
    {
        return $this->xPosition;
    }

    /**
     * @param string $xPosition
     *
     * @return self
     */
    public function setXPosition($xPosition = null)
    {
        $this->xPosition = $xPosition;

        return $this;
    }

    /**
     * @return string
     */
    public function getYPosition()
    {
        return $this->yPosition;
    }

    /**
     * @param string $yPosition
     *
     * @return self
     */
    public function setYPosition($yPosition = null)
    {
        $this->yPosition = $yPosition;

        return $this;
    }
}
