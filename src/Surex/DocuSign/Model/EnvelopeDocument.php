<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
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
     * @var string
     */
    protected $documentId;
    /**
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * @var string
     */
    protected $includeInDownload;
    /**
     * @var string
     */
    protected $name;
    /**
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
    protected $signerMustAcknowledge;
    /**
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
    public function getAttachmentTabId()
    {
        return $this->attachmentTabId;
    }

    /**
     * @param string $attachmentTabId
     *
     * @return self
     */
    public function setAttachmentTabId($attachmentTabId = null)
    {
        $this->attachmentTabId = $attachmentTabId;

        return $this;
    }

    /**
     * @return SignatureType[]
     */
    public function getAvailableDocumentTypes()
    {
        return $this->availableDocumentTypes;
    }

    /**
     * @param SignatureType[] $availableDocumentTypes
     *
     * @return self
     */
    public function setAvailableDocumentTypes(array $availableDocumentTypes = null)
    {
        $this->availableDocumentTypes = $availableDocumentTypes;

        return $this;
    }

    /**
     * @return string
     */
    public function getContainsPdfFormFields()
    {
        return $this->containsPdfFormFields;
    }

    /**
     * @param string $containsPdfFormFields
     *
     * @return self
     */
    public function setContainsPdfFormFields($containsPdfFormFields = null)
    {
        $this->containsPdfFormFields = $containsPdfFormFields;

        return $this;
    }

    /**
     * @return string
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * @param string $display
     *
     * @return self
     */
    public function setDisplay($display = null)
    {
        $this->display = $display;

        return $this;
    }

    /**
     * @return NameValue[]
     */
    public function getDocumentFields()
    {
        return $this->documentFields;
    }

    /**
     * @param NameValue[] $documentFields
     *
     * @return self
     */
    public function setDocumentFields(array $documentFields = null)
    {
        $this->documentFields = $documentFields;

        return $this;
    }

    /**
     * @return string
     */
    public function getDocumentGroup()
    {
        return $this->documentGroup;
    }

    /**
     * @param string $documentGroup
     *
     * @return self
     */
    public function setDocumentGroup($documentGroup = null)
    {
        $this->documentGroup = $documentGroup;

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
    public function getIncludeInDownload()
    {
        return $this->includeInDownload;
    }

    /**
     * @param string $includeInDownload
     *
     * @return self
     */
    public function setIncludeInDownload($includeInDownload = null)
    {
        $this->includeInDownload = $includeInDownload;

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
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param string $order
     *
     * @return self
     */
    public function setOrder($order = null)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * @return string
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * @param string $pages
     *
     * @return self
     */
    public function setPages($pages = null)
    {
        $this->pages = $pages;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignerMustAcknowledge()
    {
        return $this->signerMustAcknowledge;
    }

    /**
     * @param string $signerMustAcknowledge
     *
     * @return self
     */
    public function setSignerMustAcknowledge($signerMustAcknowledge = null)
    {
        $this->signerMustAcknowledge = $signerMustAcknowledge;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @param string $uri
     *
     * @return self
     */
    public function setUri($uri = null)
    {
        $this->uri = $uri;

        return $this;
    }
}
