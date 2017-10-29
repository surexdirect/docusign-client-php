<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class SettingsMetadata
{
    /**
     * @var string
     */
    protected $is21CFRPart11;
    /**
     * @var string[]
     */
    protected $options;
    /**
     * @var string
     */
    protected $rights;
    /**
     * @var string
     */
    protected $uiHint;
    /**
     * @var string
     */
    protected $uiOrder;
    /**
     * @var string
     */
    protected $uiType;

    /**
     * @return string
     */
    public function getIs21CFRPart11()
    {
        return $this->is21CFRPart11;
    }

    /**
     * @param string $is21CFRPart11
     *
     * @return self
     */
    public function setIs21CFRPart11($is21CFRPart11 = null)
    {
        $this->is21CFRPart11 = $is21CFRPart11;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param string[] $options
     *
     * @return self
     */
    public function setOptions(array $options = null)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * @return string
     */
    public function getRights()
    {
        return $this->rights;
    }

    /**
     * @param string $rights
     *
     * @return self
     */
    public function setRights($rights = null)
    {
        $this->rights = $rights;

        return $this;
    }

    /**
     * @return string
     */
    public function getUiHint()
    {
        return $this->uiHint;
    }

    /**
     * @param string $uiHint
     *
     * @return self
     */
    public function setUiHint($uiHint = null)
    {
        $this->uiHint = $uiHint;

        return $this;
    }

    /**
     * @return string
     */
    public function getUiOrder()
    {
        return $this->uiOrder;
    }

    /**
     * @param string $uiOrder
     *
     * @return self
     */
    public function setUiOrder($uiOrder = null)
    {
        $this->uiOrder = $uiOrder;

        return $this;
    }

    /**
     * @return string
     */
    public function getUiType()
    {
        return $this->uiType;
    }

    /**
     * @param string $uiType
     *
     * @return self
     */
    public function setUiType($uiType = null)
    {
        $this->uiType = $uiType;

        return $this;
    }
}
