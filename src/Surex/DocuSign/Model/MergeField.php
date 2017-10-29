<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class MergeField
{
    /**
     * @var string
     */
    protected $allowSenderToEdit;
    /**
     * @var string
     */
    protected $configurationType;
    /**
     * @var string
     */
    protected $path;
    /**
     * @var string
     */
    protected $row;
    /**
     * @var string
     */
    protected $writeBack;

    /**
     * @return string
     */
    public function getAllowSenderToEdit()
    {
        return $this->allowSenderToEdit;
    }

    /**
     * @param string $allowSenderToEdit
     *
     * @return self
     */
    public function setAllowSenderToEdit($allowSenderToEdit = null)
    {
        $this->allowSenderToEdit = $allowSenderToEdit;

        return $this;
    }

    /**
     * @return string
     */
    public function getConfigurationType()
    {
        return $this->configurationType;
    }

    /**
     * @param string $configurationType
     *
     * @return self
     */
    public function setConfigurationType($configurationType = null)
    {
        $this->configurationType = $configurationType;

        return $this;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param string $path
     *
     * @return self
     */
    public function setPath($path = null)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * @return string
     */
    public function getRow()
    {
        return $this->row;
    }

    /**
     * @param string $row
     *
     * @return self
     */
    public function setRow($row = null)
    {
        $this->row = $row;

        return $this;
    }

    /**
     * @return string
     */
    public function getWriteBack()
    {
        return $this->writeBack;
    }

    /**
     * @param string $writeBack
     *
     * @return self
     */
    public function setWriteBack($writeBack = null)
    {
        $this->writeBack = $writeBack;

        return $this;
    }
}
