<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class RadioGroup
{
    /**
     * For conditional fields this is the TabLabel of the parent tab that controls this tab's visibility.
     *
     * @var string
     */
    protected $conditionalParentLabel;
    /**
     * For conditional fields, this is the value of the parent tab that controls the tab's visibility.

     If the parent tab is a Checkbox, Radio button, Optional Signature, or Optional Initial use "on" as the value to show that the parent tab is active.

     *
     * @var string
     */
    protected $conditionalParentValue;
    /**
     * Specifies the document ID number that the tab is placed on. This must refer to an existing Document's ID attribute.
     *
     * @var string
     */
    protected $documentId;
    /**
     * The name of the group.
     *
     * @var string
     */
    protected $groupName;
    /**
     * Specifies the locations and status for radio buttons that are grouped together.
     *
     * @var Radio[]
     */
    protected $radios;
    /**
     * Unique for the recipient. It is used by the tab element to indicate which recipient is to sign the Document.
     *
     * @var string
     */
    protected $recipientId;
    /**
     * When set to **true** and shared is true, information must be entered in this field to complete the envelope.
     *
     * @var string
     */
    protected $requireAll;
    /**
     * Optional element for field markup. When set to **true**, the signer is required to initial when they modify a shared field.
     *
     * @var string
     */
    protected $requireInitialOnSharedChange;
    /**
     * When set to **true**, this custom tab is shared.
     *
     * @var string
     */
    protected $shared;

    /**
     * For conditional fields this is the TabLabel of the parent tab that controls this tab's visibility.
     *
     * @return string
     */
    public function getConditionalParentLabel(): ?string
    {
        return $this->conditionalParentLabel;
    }

    /**
     * For conditional fields this is the TabLabel of the parent tab that controls this tab's visibility.
     *
     * @param string $conditionalParentLabel
     *
     * @return self
     */
    public function setConditionalParentLabel(?string $conditionalParentLabel): self
    {
        $this->conditionalParentLabel = $conditionalParentLabel;

        return $this;
    }

    /**
     * For conditional fields, this is the value of the parent tab that controls the tab's visibility.

     If the parent tab is a Checkbox, Radio button, Optional Signature, or Optional Initial use "on" as the value to show that the parent tab is active.

     *
     * @return string
     */
    public function getConditionalParentValue(): ?string
    {
        return $this->conditionalParentValue;
    }

    /**
     * For conditional fields, this is the value of the parent tab that controls the tab's visibility.

     If the parent tab is a Checkbox, Radio button, Optional Signature, or Optional Initial use "on" as the value to show that the parent tab is active.

     *
     * @param string $conditionalParentValue
     *
     * @return self
     */
    public function setConditionalParentValue(?string $conditionalParentValue): self
    {
        $this->conditionalParentValue = $conditionalParentValue;

        return $this;
    }

    /**
     * Specifies the document ID number that the tab is placed on. This must refer to an existing Document's ID attribute.
     *
     * @return string
     */
    public function getDocumentId(): ?string
    {
        return $this->documentId;
    }

    /**
     * Specifies the document ID number that the tab is placed on. This must refer to an existing Document's ID attribute.
     *
     * @param string $documentId
     *
     * @return self
     */
    public function setDocumentId(?string $documentId): self
    {
        $this->documentId = $documentId;

        return $this;
    }

    /**
     * The name of the group.
     *
     * @return string
     */
    public function getGroupName(): ?string
    {
        return $this->groupName;
    }

    /**
     * The name of the group.
     *
     * @param string $groupName
     *
     * @return self
     */
    public function setGroupName(?string $groupName): self
    {
        $this->groupName = $groupName;

        return $this;
    }

    /**
     * Specifies the locations and status for radio buttons that are grouped together.
     *
     * @return Radio[]
     */
    public function getRadios(): ?array
    {
        return $this->radios;
    }

    /**
     * Specifies the locations and status for radio buttons that are grouped together.
     *
     * @param Radio[] $radios
     *
     * @return self
     */
    public function setRadios(?array $radios): self
    {
        $this->radios = $radios;

        return $this;
    }

    /**
     * Unique for the recipient. It is used by the tab element to indicate which recipient is to sign the Document.
     *
     * @return string
     */
    public function getRecipientId(): ?string
    {
        return $this->recipientId;
    }

    /**
     * Unique for the recipient. It is used by the tab element to indicate which recipient is to sign the Document.
     *
     * @param string $recipientId
     *
     * @return self
     */
    public function setRecipientId(?string $recipientId): self
    {
        $this->recipientId = $recipientId;

        return $this;
    }

    /**
     * When set to **true** and shared is true, information must be entered in this field to complete the envelope.
     *
     * @return string
     */
    public function getRequireAll(): ?string
    {
        return $this->requireAll;
    }

    /**
     * When set to **true** and shared is true, information must be entered in this field to complete the envelope.
     *
     * @param string $requireAll
     *
     * @return self
     */
    public function setRequireAll(?string $requireAll): self
    {
        $this->requireAll = $requireAll;

        return $this;
    }

    /**
     * Optional element for field markup. When set to **true**, the signer is required to initial when they modify a shared field.
     *
     * @return string
     */
    public function getRequireInitialOnSharedChange(): ?string
    {
        return $this->requireInitialOnSharedChange;
    }

    /**
     * Optional element for field markup. When set to **true**, the signer is required to initial when they modify a shared field.
     *
     * @param string $requireInitialOnSharedChange
     *
     * @return self
     */
    public function setRequireInitialOnSharedChange(?string $requireInitialOnSharedChange): self
    {
        $this->requireInitialOnSharedChange = $requireInitialOnSharedChange;

        return $this;
    }

    /**
     * When set to **true**, this custom tab is shared.
     *
     * @return string
     */
    public function getShared(): ?string
    {
        return $this->shared;
    }

    /**
     * When set to **true**, this custom tab is shared.
     *
     * @param string $shared
     *
     * @return self
     */
    public function setShared(?string $shared): self
    {
        $this->shared = $shared;

        return $this;
    }
}
