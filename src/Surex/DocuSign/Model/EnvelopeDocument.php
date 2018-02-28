<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class EnvelopeDocument
{
    /**
     * @var string
     */
    protected $attachmentTabId;
    /**
     * @var SignatureType[]
     */
    protected $availableDocumentTypes;
    /**
     * @var string
     */
    protected $containsPdfFormFields;
    /**
     * This string sets the display and behavior properties of.
     the document during signing. The possible values are:

     * `modal`<br>
     The document is shown as a supplement action strip
     and can be viewed, downloaded, or printed in a modal window.
     This is the recommended value for supplemental documents.

     * `download`<br>
     The document is shown as a supplement action strip
     and can be viewed, downloaded, or printed in a new browser window.

     * `inline`<br>
     The document is shown in the normal signing window.
     This value is not used with supplemental documents,
     but is the default value for all other documents.

     *
     * @var string
     */
    protected $display;
    /**
     * @var NameValue[]
     */
    protected $documentFields;
    /**
     * @var string
     */
    protected $documentGroup;
    /**
     * Specifies the document ID number that the tab is placed on. This must refer to an existing Document's ID attribute.
     *
     * @var string
     */
    protected $documentId;
    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * When set to **true**,.
     the document is included in the combined document download.
     The default value is **true**.

     *
     * @var string
     */
    protected $includeInDownload;
    /**
     * @var string
     */
    protected $name;
    /**
     * An optional value that sets the direction order used to sort the item list.

     Valid values are:

     * asc = ascending sort order
     * desc = descending sort order
     *
     * @var string
     */
    protected $order;
    /**
     * @var string
     */
    protected $pages;
    /**
     * Sets how the signer interacts with the supplemental document.
     The possible values are:

     *	`no_interaction`<br>
     No recipient action is required.

     *	`view`<br>
     The recipient is required to view the document.

     *	`accept`<br>
     The recipient is required to accept the document by selecting accept during signing, but is not required to view the document.

     *	`view_accept`<br>
     The recipient is required to view and accept the document.


     *
     * @var string
     */
    protected $signerMustAcknowledge;
    /**
     * Type of the user. Valid values: type_owner, type_participant.
     *
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $uri;

    /**
     * @return string
     */
    public function getAttachmentTabId(): ?string
    {
        return $this->attachmentTabId;
    }

    /**
     * @param string $attachmentTabId
     *
     * @return self
     */
    public function setAttachmentTabId(?string $attachmentTabId): self
    {
        $this->attachmentTabId = $attachmentTabId;

        return $this;
    }

    /**
     * @return SignatureType[]
     */
    public function getAvailableDocumentTypes(): ?array
    {
        return $this->availableDocumentTypes;
    }

    /**
     * @param SignatureType[] $availableDocumentTypes
     *
     * @return self
     */
    public function setAvailableDocumentTypes(?array $availableDocumentTypes): self
    {
        $this->availableDocumentTypes = $availableDocumentTypes;

        return $this;
    }

    /**
     * @return string
     */
    public function getContainsPdfFormFields(): ?string
    {
        return $this->containsPdfFormFields;
    }

    /**
     * @param string $containsPdfFormFields
     *
     * @return self
     */
    public function setContainsPdfFormFields(?string $containsPdfFormFields): self
    {
        $this->containsPdfFormFields = $containsPdfFormFields;

        return $this;
    }

    /**
     * This string sets the display and behavior properties of.
     the document during signing. The possible values are:

     * `modal`<br>
     The document is shown as a supplement action strip
     and can be viewed, downloaded, or printed in a modal window.
     This is the recommended value for supplemental documents.

     * `download`<br>
     The document is shown as a supplement action strip
     and can be viewed, downloaded, or printed in a new browser window.

     * `inline`<br>
     The document is shown in the normal signing window.
     This value is not used with supplemental documents,
     but is the default value for all other documents.

     *
     * @return string
     */
    public function getDisplay(): ?string
    {
        return $this->display;
    }

    /**
     * This string sets the display and behavior properties of.
     the document during signing. The possible values are:

     * `modal`<br>
     The document is shown as a supplement action strip
     and can be viewed, downloaded, or printed in a modal window.
     This is the recommended value for supplemental documents.

     * `download`<br>
     The document is shown as a supplement action strip
     and can be viewed, downloaded, or printed in a new browser window.

     * `inline`<br>
     The document is shown in the normal signing window.
     This value is not used with supplemental documents,
     but is the default value for all other documents.

     *
     * @param string $display
     *
     * @return self
     */
    public function setDisplay(?string $display): self
    {
        $this->display = $display;

        return $this;
    }

    /**
     * @return NameValue[]
     */
    public function getDocumentFields(): ?array
    {
        return $this->documentFields;
    }

    /**
     * @param NameValue[] $documentFields
     *
     * @return self
     */
    public function setDocumentFields(?array $documentFields): self
    {
        $this->documentFields = $documentFields;

        return $this;
    }

    /**
     * @return string
     */
    public function getDocumentGroup(): ?string
    {
        return $this->documentGroup;
    }

    /**
     * @param string $documentGroup
     *
     * @return self
     */
    public function setDocumentGroup(?string $documentGroup): self
    {
        $this->documentGroup = $documentGroup;

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
     * When set to **true**,.
     the document is included in the combined document download.
     The default value is **true**.

     *
     * @return string
     */
    public function getIncludeInDownload(): ?string
    {
        return $this->includeInDownload;
    }

    /**
     * When set to **true**,.
     the document is included in the combined document download.
     The default value is **true**.

     *
     * @param string $includeInDownload
     *
     * @return self
     */
    public function setIncludeInDownload(?string $includeInDownload): self
    {
        $this->includeInDownload = $includeInDownload;

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
     * An optional value that sets the direction order used to sort the item list.

     Valid values are:

     * asc = ascending sort order
     * desc = descending sort order
     *
     * @return string
     */
    public function getOrder(): ?string
    {
        return $this->order;
    }

    /**
     * An optional value that sets the direction order used to sort the item list.

     Valid values are:

     * asc = ascending sort order
     * desc = descending sort order
     *
     * @param string $order
     *
     * @return self
     */
    public function setOrder(?string $order): self
    {
        $this->order = $order;

        return $this;
    }

    /**
     * @return string
     */
    public function getPages(): ?string
    {
        return $this->pages;
    }

    /**
     * @param string $pages
     *
     * @return self
     */
    public function setPages(?string $pages): self
    {
        $this->pages = $pages;

        return $this;
    }

    /**
     * Sets how the signer interacts with the supplemental document.
     The possible values are:

     *	`no_interaction`<br>
     No recipient action is required.

     *	`view`<br>
     The recipient is required to view the document.

     *	`accept`<br>
     The recipient is required to accept the document by selecting accept during signing, but is not required to view the document.

     *	`view_accept`<br>
     The recipient is required to view and accept the document.


     *
     * @return string
     */
    public function getSignerMustAcknowledge(): ?string
    {
        return $this->signerMustAcknowledge;
    }

    /**
     * Sets how the signer interacts with the supplemental document.
     The possible values are:

     *	`no_interaction`<br>
     No recipient action is required.

     *	`view`<br>
     The recipient is required to view the document.

     *	`accept`<br>
     The recipient is required to accept the document by selecting accept during signing, but is not required to view the document.

     *	`view_accept`<br>
     The recipient is required to view and accept the document.


     *
     * @param string $signerMustAcknowledge
     *
     * @return self
     */
    public function setSignerMustAcknowledge(?string $signerMustAcknowledge): self
    {
        $this->signerMustAcknowledge = $signerMustAcknowledge;

        return $this;
    }

    /**
     * Type of the user. Valid values: type_owner, type_participant.
     *
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Type of the user. Valid values: type_owner, type_participant.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getUri(): ?string
    {
        return $this->uri;
    }

    /**
     * @param string $uri
     *
     * @return self
     */
    public function setUri(?string $uri): self
    {
        $this->uri = $uri;

        return $this;
    }
}
