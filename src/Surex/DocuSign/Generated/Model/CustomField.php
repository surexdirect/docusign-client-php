<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class CustomField
{
    /**
     * @var string
     */
    protected $customFieldType;
    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * An ID used to specify a custom field.
     *
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
     * When set to **true**, the signer is required to fill out this tab.
     *
     * @var string
     */
    protected $required;
    /**
     * A boolean indicating if the value should be displayed.
     *
     * @var string
     */
    protected $show;
    /**
     * Specifies the value of the tab.
     *
     * @var string
     */
    protected $value;

    /**
     * @return string
     */
    public function getCustomFieldType(): ?string
    {
        return $this->customFieldType;
    }

    /**
     * @param string $customFieldType
     *
     * @return self
     */
    public function setCustomFieldType(?string $customFieldType): self
    {
        $this->customFieldType = $customFieldType;

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
     * An ID used to specify a custom field.
     *
     * @return string
     */
    public function getFieldId(): ?string
    {
        return $this->fieldId;
    }

    /**
     * An ID used to specify a custom field.
     *
     * @param string $fieldId
     *
     * @return self
     */
    public function setFieldId(?string $fieldId): self
    {
        $this->fieldId = $fieldId;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getListItems(): ?array
    {
        return $this->listItems;
    }

    /**
     * @param string[] $listItems
     *
     * @return self
     */
    public function setListItems(?array $listItems): self
    {
        $this->listItems = $listItems;

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
     * A boolean indicating if the value should be displayed.
     *
     * @return string
     */
    public function getShow(): ?string
    {
        return $this->show;
    }

    /**
     * A boolean indicating if the value should be displayed.
     *
     * @param string $show
     *
     * @return self
     */
    public function setShow(?string $show): self
    {
        $this->show = $show;

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
}
