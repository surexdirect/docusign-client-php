<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class CustomField
{
    /**
     * @var string
     */
    protected $customFieldType;
    /**
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * @var string
     */
    protected $fieldId;
    /**
     * @var string[]
     */
    protected $listItems;
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
    protected $show;
    /**
     * @var string
     */
    protected $value;

    /**
     * @return string
     */
    public function getCustomFieldType()
    {
        return $this->customFieldType;
    }

    /**
     * @param string $customFieldType
     *
     * @return self
     */
    public function setCustomFieldType($customFieldType = null)
    {
        $this->customFieldType = $customFieldType;

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
    public function getFieldId()
    {
        return $this->fieldId;
    }

    /**
     * @param string $fieldId
     *
     * @return self
     */
    public function setFieldId($fieldId = null)
    {
        $this->fieldId = $fieldId;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getListItems()
    {
        return $this->listItems;
    }

    /**
     * @param string[] $listItems
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
    public function getShow()
    {
        return $this->show;
    }

    /**
     * @param string $show
     *
     * @return self
     */
    public function setShow($show = null)
    {
        $this->show = $show;

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
}
