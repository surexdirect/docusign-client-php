<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class TextCustomField
{
    /**
     * If merge field's are being used, specifies the type of the merge field. The only  supported value is **salesforce**.
     *
     * @var string
     */
    protected $configurationType;
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
     * The name of the custom field.
     *
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
     * The value of the custom field.
     *
     * @var string
     */
    protected $value;

    /**
     * If merge field's are being used, specifies the type of the merge field. The only  supported value is **salesforce**.
     *
     * @return string
     */
    public function getConfigurationType(): ?string
    {
        return $this->configurationType;
    }

    /**
     * If merge field's are being used, specifies the type of the merge field. The only  supported value is **salesforce**.
     *
     * @param string $configurationType
     *
     * @return self
     */
    public function setConfigurationType(?string $configurationType): self
    {
        $this->configurationType = $configurationType;

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
     * The name of the custom field.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The name of the custom field.
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
     * The value of the custom field.
     *
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * The value of the custom field.
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
