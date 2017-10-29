<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class DocumentTemplate
{
    /**
     * @var string
     */
    protected $documentEndPage;
    /**
     * @var string
     */
    protected $documentId;
    /**
     * @var string
     */
    protected $documentStartPage;
    /**
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * @var string
     */
    protected $templateId;

    /**
     * @return string
     */
    public function getDocumentEndPage()
    {
        return $this->documentEndPage;
    }

    /**
     * @param string $documentEndPage
     *
     * @return self
     */
    public function setDocumentEndPage($documentEndPage = null)
    {
        $this->documentEndPage = $documentEndPage;

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
    public function getDocumentStartPage()
    {
        return $this->documentStartPage;
    }

    /**
     * @param string $documentStartPage
     *
     * @return self
     */
    public function setDocumentStartPage($documentStartPage = null)
    {
        $this->documentStartPage = $documentStartPage;

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
    public function getTemplateId()
    {
        return $this->templateId;
    }

    /**
     * @param string $templateId
     *
     * @return self
     */
    public function setTemplateId($templateId = null)
    {
        $this->templateId = $templateId;

        return $this;
    }
}
