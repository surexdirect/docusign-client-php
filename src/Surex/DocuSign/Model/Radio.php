<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Radio
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
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * @var string
     */
    protected $locked;
    /**
     * @var string
     */
    protected $pageNumber;
    /**
     * @var string
     */
    protected $required;
    /**
     * @var string
     */
    protected $selected;
    /**
     * @var string
     */
    protected $tabId;
    /**
     * @var string
     */
    protected $tabOrder;
    /**
     * @var string
     */
    protected $value;
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
    public function getSelected()
    {
        return $this->selected;
    }

    /**
     * @param string $selected
     *
     * @return self
     */
    public function setSelected($selected = null)
    {
        $this->selected = $selected;

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
