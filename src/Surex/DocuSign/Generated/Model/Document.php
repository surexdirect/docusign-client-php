<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class Document
{
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $applyAnchorTabs;
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
     * The document's bytes. This field can be used to include a base64 version of the document bytes within an envelope definition instead of sending the document using a multi-part HTTP request. The maximum document size is smaller if this field is used due to the overhead of the base64 encoding.
     *
     * @var string
     */
    protected $documentBase64;
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
     * When set to **true**, the document is been already encrypted by the sender for use with the DocuSign Key Manager Security Appliance.
     *
     * @var string
     */
    protected $encryptedWithKeyManager;
    /**
     * The file extension type of the document. If the document is not a PDF it is converted to a PDF.
     *
     * @var string
     */
    protected $fileExtension;
    /**
     * @var string
     */
    protected $fileFormatHint;
    /**
     * When set to **true**,.
     the document is included in the combined document download.
     The default value is **true**.

     *
     * @var string
     */
    protected $includeInDownload;
    /**
     * Matchboxes define areas in a document for document matching when you are creating envelopes. They are only used when you upload and edit a template.

     A matchbox consists of 5 elements:

     * pageNumber - The document page number  on which the matchbox will appear.
     * xPosition - The x position of the matchbox on a page.
     * yPosition - The y position of the matchbox on a page.
     * width - The width of the matchbox.
     * height - The height of the matchbox.

     *
     * @var MatchBox[]
     */
    protected $matchBoxes;
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
     * @var string
     */
    protected $password;
    /**
     * The file id from the cloud storage service where the document is located. This information is returned using [ML:GET /folders] or [ML:/folders/{folderid}].
     *
     * @var string
     */
    protected $remoteUrl;
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
     * When set to **true**, the sender cannot change any attributes of the recipient. Used only when working with template recipients.
     *
     * @var string
     */
    protected $templateLocked;
    /**
     * When set to **true**, the sender may not remove the recipient. Used only when working with template recipients.
     *
     * @var string
     */
    protected $templateRequired;
    /**
     * When set to **true**, PDF form field data is transformed into document tab values when the PDF form field name matches the DocuSign custom tab tabLabel. The resulting PDF form data is also returned in the PDF meta data when requesting the document PDF. See the [ML:Transform PDF Fields] section for more information about how fields are transformed into DocuSign tabs.
     *
     * @var string
     */
    protected $transformPdfFields;
    /**
     * @var string
     */
    protected $uri;

    /**
     * Reserved: TBD.
     *
     * @return string
     */
    public function getApplyAnchorTabs(): ?string
    {
        return $this->applyAnchorTabs;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $applyAnchorTabs
     *
     * @return self
     */
    public function setApplyAnchorTabs(?string $applyAnchorTabs): self
    {
        $this->applyAnchorTabs = $applyAnchorTabs;

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
     * The document's bytes. This field can be used to include a base64 version of the document bytes within an envelope definition instead of sending the document using a multi-part HTTP request. The maximum document size is smaller if this field is used due to the overhead of the base64 encoding.
     *
     * @return string
     */
    public function getDocumentBase64(): ?string
    {
        return $this->documentBase64;
    }

    /**
     * The document's bytes. This field can be used to include a base64 version of the document bytes within an envelope definition instead of sending the document using a multi-part HTTP request. The maximum document size is smaller if this field is used due to the overhead of the base64 encoding.
     *
     * @param string $documentBase64
     *
     * @return self
     */
    public function setDocumentBase64(?string $documentBase64): self
    {
        $this->documentBase64 = $documentBase64;

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
     * When set to **true**, the document is been already encrypted by the sender for use with the DocuSign Key Manager Security Appliance.
     *
     * @return string
     */
    public function getEncryptedWithKeyManager(): ?string
    {
        return $this->encryptedWithKeyManager;
    }

    /**
     * When set to **true**, the document is been already encrypted by the sender for use with the DocuSign Key Manager Security Appliance.
     *
     * @param string $encryptedWithKeyManager
     *
     * @return self
     */
    public function setEncryptedWithKeyManager(?string $encryptedWithKeyManager): self
    {
        $this->encryptedWithKeyManager = $encryptedWithKeyManager;

        return $this;
    }

    /**
     * The file extension type of the document. If the document is not a PDF it is converted to a PDF.
     *
     * @return string
     */
    public function getFileExtension(): ?string
    {
        return $this->fileExtension;
    }

    /**
     * The file extension type of the document. If the document is not a PDF it is converted to a PDF.
     *
     * @param string $fileExtension
     *
     * @return self
     */
    public function setFileExtension(?string $fileExtension): self
    {
        $this->fileExtension = $fileExtension;

        return $this;
    }

    /**
     * @return string
     */
    public function getFileFormatHint(): ?string
    {
        return $this->fileFormatHint;
    }

    /**
     * @param string $fileFormatHint
     *
     * @return self
     */
    public function setFileFormatHint(?string $fileFormatHint): self
    {
        $this->fileFormatHint = $fileFormatHint;

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
     * Matchboxes define areas in a document for document matching when you are creating envelopes. They are only used when you upload and edit a template.

     A matchbox consists of 5 elements:

     * pageNumber - The document page number  on which the matchbox will appear.
     * xPosition - The x position of the matchbox on a page.
     * yPosition - The y position of the matchbox on a page.
     * width - The width of the matchbox.
     * height - The height of the matchbox.

     *
     * @return MatchBox[]
     */
    public function getMatchBoxes(): ?array
    {
        return $this->matchBoxes;
    }

    /**
     * Matchboxes define areas in a document for document matching when you are creating envelopes. They are only used when you upload and edit a template.

     A matchbox consists of 5 elements:

     * pageNumber - The document page number  on which the matchbox will appear.
     * xPosition - The x position of the matchbox on a page.
     * yPosition - The y position of the matchbox on a page.
     * width - The width of the matchbox.
     * height - The height of the matchbox.

     *
     * @param MatchBox[] $matchBoxes
     *
     * @return self
     */
    public function setMatchBoxes(?array $matchBoxes): self
    {
        $this->matchBoxes = $matchBoxes;

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
     * @return string
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string $password
     *
     * @return self
     */
    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * The file id from the cloud storage service where the document is located. This information is returned using [ML:GET /folders] or [ML:/folders/{folderid}].
     *
     * @return string
     */
    public function getRemoteUrl(): ?string
    {
        return $this->remoteUrl;
    }

    /**
     * The file id from the cloud storage service where the document is located. This information is returned using [ML:GET /folders] or [ML:/folders/{folderid}].
     *
     * @param string $remoteUrl
     *
     * @return self
     */
    public function setRemoteUrl(?string $remoteUrl): self
    {
        $this->remoteUrl = $remoteUrl;

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
     * When set to **true**, the sender cannot change any attributes of the recipient. Used only when working with template recipients.
     *
     * @return string
     */
    public function getTemplateLocked(): ?string
    {
        return $this->templateLocked;
    }

    /**
     * When set to **true**, the sender cannot change any attributes of the recipient. Used only when working with template recipients.
     *
     * @param string $templateLocked
     *
     * @return self
     */
    public function setTemplateLocked(?string $templateLocked): self
    {
        $this->templateLocked = $templateLocked;

        return $this;
    }

    /**
     * When set to **true**, the sender may not remove the recipient. Used only when working with template recipients.
     *
     * @return string
     */
    public function getTemplateRequired(): ?string
    {
        return $this->templateRequired;
    }

    /**
     * When set to **true**, the sender may not remove the recipient. Used only when working with template recipients.
     *
     * @param string $templateRequired
     *
     * @return self
     */
    public function setTemplateRequired(?string $templateRequired): self
    {
        $this->templateRequired = $templateRequired;

        return $this;
    }

    /**
     * When set to **true**, PDF form field data is transformed into document tab values when the PDF form field name matches the DocuSign custom tab tabLabel. The resulting PDF form data is also returned in the PDF meta data when requesting the document PDF. See the [ML:Transform PDF Fields] section for more information about how fields are transformed into DocuSign tabs.
     *
     * @return string
     */
    public function getTransformPdfFields(): ?string
    {
        return $this->transformPdfFields;
    }

    /**
     * When set to **true**, PDF form field data is transformed into document tab values when the PDF form field name matches the DocuSign custom tab tabLabel. The resulting PDF form data is also returned in the PDF meta data when requesting the document PDF. See the [ML:Transform PDF Fields] section for more information about how fields are transformed into DocuSign tabs.
     *
     * @param string $transformPdfFields
     *
     * @return self
     */
    public function setTransformPdfFields(?string $transformPdfFields): self
    {
        $this->transformPdfFields = $transformPdfFields;

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
