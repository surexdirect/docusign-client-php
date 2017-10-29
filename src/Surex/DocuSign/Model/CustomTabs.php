<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class CustomTabs
{
    /**
     * @var string
     */
    protected $anchor;
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
    protected $concealValueOnDocument;
    /**
     * @var string
     */
    protected $createdByDisplayName;
    /**
     * @var string
     */
    protected $createdByUserId;
    /**
     * @var string
     */
    protected $customTabId;
    /**
     * @var string
     */
    protected $disableAutoSize;
    /**
     * @var string
     */
    protected $editable;
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
    protected $height;
    /**
     * @var string
     */
    protected $includedInEmail;
    /**
     * @var string
     */
    protected $initialValue;
    /**
     * @var string
     */
    protected $italic;
    /**
     * @var string[]
     */
    protected $items;
    /**
     * @var string
     */
    protected $lastModified;
    /**
     * @var string
     */
    protected $lastModifiedByDisplayName;
    /**
     * @var string
     */
    protected $lastModifiedByUserId;
    /**
     * @var string
     */
    protected $locked;
    /**
     * @var string
     */
    protected $maximumLength;
    /**
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
    protected $required;
    /**
     * @var string
     */
    protected $scaleValue;
    /**
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
     * @var string
     */
    protected $tabLabel;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $underline;
    /**
     * @var string
     */
    protected $validationMessage;
    /**
     * @var string
     */
    protected $validationPattern;
    /**
     * @var string
     */
    protected $width;

    /**
     * @return string
     */
    public function getAnchor()
    {
        return $this->anchor;
    }

    /**
     * @param string $anchor
     *
     * @return self
     */
    public function setAnchor($anchor = null)
    {
        $this->anchor = $anchor;

        return $this;
    }

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
    public function getConcealValueOnDocument()
    {
        return $this->concealValueOnDocument;
    }

    /**
     * @param string $concealValueOnDocument
     *
     * @return self
     */
    public function setConcealValueOnDocument($concealValueOnDocument = null)
    {
        $this->concealValueOnDocument = $concealValueOnDocument;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedByDisplayName()
    {
        return $this->createdByDisplayName;
    }

    /**
     * @param string $createdByDisplayName
     *
     * @return self
     */
    public function setCreatedByDisplayName($createdByDisplayName = null)
    {
        $this->createdByDisplayName = $createdByDisplayName;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedByUserId()
    {
        return $this->createdByUserId;
    }

    /**
     * @param string $createdByUserId
     *
     * @return self
     */
    public function setCreatedByUserId($createdByUserId = null)
    {
        $this->createdByUserId = $createdByUserId;

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
    public function getDisableAutoSize()
    {
        return $this->disableAutoSize;
    }

    /**
     * @param string $disableAutoSize
     *
     * @return self
     */
    public function setDisableAutoSize($disableAutoSize = null)
    {
        $this->disableAutoSize = $disableAutoSize;

        return $this;
    }

    /**
     * @return string
     */
    public function getEditable()
    {
        return $this->editable;
    }

    /**
     * @param string $editable
     *
     * @return self
     */
    public function setEditable($editable = null)
    {
        $this->editable = $editable;

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
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param string $height
     *
     * @return self
     */
    public function setHeight($height = null)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * @return string
     */
    public function getIncludedInEmail()
    {
        return $this->includedInEmail;
    }

    /**
     * @param string $includedInEmail
     *
     * @return self
     */
    public function setIncludedInEmail($includedInEmail = null)
    {
        $this->includedInEmail = $includedInEmail;

        return $this;
    }

    /**
     * @return string
     */
    public function getInitialValue()
    {
        return $this->initialValue;
    }

    /**
     * @param string $initialValue
     *
     * @return self
     */
    public function setInitialValue($initialValue = null)
    {
        $this->initialValue = $initialValue;

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
     * @return string[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param string[] $items
     *
     * @return self
     */
    public function setItems(array $items = null)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * @param string $lastModified
     *
     * @return self
     */
    public function setLastModified($lastModified = null)
    {
        $this->lastModified = $lastModified;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastModifiedByDisplayName()
    {
        return $this->lastModifiedByDisplayName;
    }

    /**
     * @param string $lastModifiedByDisplayName
     *
     * @return self
     */
    public function setLastModifiedByDisplayName($lastModifiedByDisplayName = null)
    {
        $this->lastModifiedByDisplayName = $lastModifiedByDisplayName;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastModifiedByUserId()
    {
        return $this->lastModifiedByUserId;
    }

    /**
     * @param string $lastModifiedByUserId
     *
     * @return self
     */
    public function setLastModifiedByUserId($lastModifiedByUserId = null)
    {
        $this->lastModifiedByUserId = $lastModifiedByUserId;

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
     * @return string
     */
    public function getMaximumLength()
    {
        return $this->maximumLength;
    }

    /**
     * @param string $maximumLength
     *
     * @return self
     */
    public function setMaximumLength($maximumLength = null)
    {
        $this->maximumLength = $maximumLength;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        $this->name = $name;

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
    public function getScaleValue()
    {
        return $this->scaleValue;
    }

    /**
     * @param string $scaleValue
     *
     * @return self
     */
    public function setScaleValue($scaleValue = null)
    {
        $this->scaleValue = $scaleValue;

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
    public function getStampType()
    {
        return $this->stampType;
    }

    /**
     * @param string $stampType
     *
     * @return self
     */
    public function setStampType($stampType = null)
    {
        $this->stampType = $stampType;

        return $this;
    }

    /**
     * @return PropertyMetadata
     */
    public function getStampTypeMetadata()
    {
        return $this->stampTypeMetadata;
    }

    /**
     * @param PropertyMetadata $stampTypeMetadata
     *
     * @return self
     */
    public function setStampTypeMetadata(PropertyMetadata $stampTypeMetadata = null)
    {
        $this->stampTypeMetadata = $stampTypeMetadata;

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
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type = null)
    {
        $this->type = $type;

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
    public function getValidationMessage()
    {
        return $this->validationMessage;
    }

    /**
     * @param string $validationMessage
     *
     * @return self
     */
    public function setValidationMessage($validationMessage = null)
    {
        $this->validationMessage = $validationMessage;

        return $this;
    }

    /**
     * @return string
     */
    public function getValidationPattern()
    {
        return $this->validationPattern;
    }

    /**
     * @param string $validationPattern
     *
     * @return self
     */
    public function setValidationPattern($validationPattern = null)
    {
        $this->validationPattern = $validationPattern;

        return $this;
    }

    /**
     * @return string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param string $width
     *
     * @return self
     */
    public function setWidth($width = null)
    {
        $this->width = $width;

        return $this;
    }
}
