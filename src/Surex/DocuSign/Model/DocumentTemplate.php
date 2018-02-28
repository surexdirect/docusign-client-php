<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class DocumentTemplate
{
    /**
     * @var string
     */
    protected $documentEndPage;
    /**
     * Specifies the document ID number that the tab is placed on. This must refer to an existing Document's ID attribute.
     *
     * @var string
     */
    protected $documentId;
    /**
     * @var string
     */
    protected $documentStartPage;
    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * The unique identifier of the template. If this is not provided, DocuSign will generate a value.
     *
     * @var string
     */
    protected $templateId;

    /**
     * @return string
     */
    public function getDocumentEndPage(): ?string
    {
        return $this->documentEndPage;
    }

    /**
     * @param string $documentEndPage
     *
     * @return self
     */
    public function setDocumentEndPage(?string $documentEndPage): self
    {
        $this->documentEndPage = $documentEndPage;

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
     * @return string
     */
    public function getDocumentStartPage(): ?string
    {
        return $this->documentStartPage;
    }

    /**
     * @param string $documentStartPage
     *
     * @return self
     */
    public function setDocumentStartPage(?string $documentStartPage): self
    {
        $this->documentStartPage = $documentStartPage;

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
     * The unique identifier of the template. If this is not provided, DocuSign will generate a value.
     *
     * @return string
     */
    public function getTemplateId(): ?string
    {
        return $this->templateId;
    }

    /**
     * The unique identifier of the template. If this is not provided, DocuSign will generate a value.
     *
     * @param string $templateId
     *
     * @return self
     */
    public function setTemplateId(?string $templateId): self
    {
        $this->templateId = $templateId;

        return $this;
    }
}
