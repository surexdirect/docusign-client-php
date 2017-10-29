<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class RadioGroup
{
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
    protected $documentId;
    /**
     * @var string
     */
    protected $groupName;
    /**
     * @var Radio[]
     */
    protected $radios;
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
    protected $requireInitialOnSharedChange;
    /**
     * @var string
     */
    protected $shared;

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
     * @return string
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * @param string $groupName
     *
     * @return self
     */
    public function setGroupName($groupName = null)
    {
        $this->groupName = $groupName;

        return $this;
    }

    /**
     * @return Radio[]
     */
    public function getRadios()
    {
        return $this->radios;
    }

    /**
     * @param Radio[] $radios
     *
     * @return self
     */
    public function setRadios(array $radios = null)
    {
        $this->radios = $radios;

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
}
