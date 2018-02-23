<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class MergeField
{
    /**
     * When set to **true**, the sender can modify the value of the custom tab during the sending process.
     *
     * @var string
     */
    protected $allowSenderToEdit;
    /**
     * If merge field's are being used, specifies the type of the merge field. The only  supported value is **salesforce**.
     *
     * @var string
     */
    protected $configurationType;
    /**
     * Sets the object associated with the custom tab. Currently this is the Salesforce Object.
     *
     * @var string
     */
    protected $path;
    /**
     * Specifies the row number in a Salesforce table that the merge field value corresponds to.
     *
     * @var string
     */
    protected $row;
    /**
     * When wet to true, the information entered in the tab automatically updates the related Salesforce data when an envelope is completed.
     *
     * @var string
     */
    protected $writeBack;

    /**
     * When set to **true**, the sender can modify the value of the custom tab during the sending process.
     *
     * @return string
     */
    public function getAllowSenderToEdit(): ?string
    {
        return $this->allowSenderToEdit;
    }

    /**
     * When set to **true**, the sender can modify the value of the custom tab during the sending process.
     *
     * @param string $allowSenderToEdit
     *
     * @return self
     */
    public function setAllowSenderToEdit(?string $allowSenderToEdit): self
    {
        $this->allowSenderToEdit = $allowSenderToEdit;

        return $this;
    }

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
     * Sets the object associated with the custom tab. Currently this is the Salesforce Object.
     *
     * @return string
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * Sets the object associated with the custom tab. Currently this is the Salesforce Object.
     *
     * @param string $path
     *
     * @return self
     */
    public function setPath(?string $path): self
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Specifies the row number in a Salesforce table that the merge field value corresponds to.
     *
     * @return string
     */
    public function getRow(): ?string
    {
        return $this->row;
    }

    /**
     * Specifies the row number in a Salesforce table that the merge field value corresponds to.
     *
     * @param string $row
     *
     * @return self
     */
    public function setRow(?string $row): self
    {
        $this->row = $row;

        return $this;
    }

    /**
     * When wet to true, the information entered in the tab automatically updates the related Salesforce data when an envelope is completed.
     *
     * @return string
     */
    public function getWriteBack(): ?string
    {
        return $this->writeBack;
    }

    /**
     * When wet to true, the information entered in the tab automatically updates the related Salesforce data when an envelope is completed.
     *
     * @param string $writeBack
     *
     * @return self
     */
    public function setWriteBack(?string $writeBack): self
    {
        $this->writeBack = $writeBack;

        return $this;
    }
}
