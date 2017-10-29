<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Document
{
    /**
     * @var string
     */
    protected $applyAnchorTabs;
    /**
     * @var string
     */
    protected $display;
    /**
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
     * @var string
     */
    protected $documentId;
    /**
     * @var string
     */
    protected $encryptedWithKeyManager;
    /**
     * @var string
     */
    protected $fileExtension;
    /**
     * @var string
     */
    protected $fileFormatHint;
    /**
     * @var string
     */
    protected $includeInDownload;
    /**
     * @var MatchBox[]
     */
    protected $matchBoxes;
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
    protected $password;
    /**
     * @var string
     */
    protected $remoteUrl;
    /**
     * @var string
     */
    protected $signerMustAcknowledge;
    /**
     * @var string
     */
    protected $templateLocked;
    /**
     * @var string
     */
    protected $templateRequired;
    /**
     * @var string
     */
    protected $transformPdfFields;
    /**
     * @var string
     */
    protected $uri;

    /**
     * @return string
     */
    public function getApplyAnchorTabs()
    {
        return $this->applyAnchorTabs;
    }

    /**
     * @param string $applyAnchorTabs
     *
     * @return self
     */
    public function setApplyAnchorTabs($applyAnchorTabs = null)
    {
        $this->applyAnchorTabs = $applyAnchorTabs;

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
     * @return string
     */
    public function getDocumentBase64()
    {
        return $this->documentBase64;
    }

    /**
     * @param string $documentBase64
     *
     * @return self
     */
    public function setDocumentBase64($documentBase64 = null)
    {
        $this->documentBase64 = $documentBase64;

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
     * @return string
     */
    public function getEncryptedWithKeyManager()
    {
        return $this->encryptedWithKeyManager;
    }

    /**
     * @param string $encryptedWithKeyManager
     *
     * @return self
     */
    public function setEncryptedWithKeyManager($encryptedWithKeyManager = null)
    {
        $this->encryptedWithKeyManager = $encryptedWithKeyManager;

        return $this;
    }

    /**
     * @return string
     */
    public function getFileExtension()
    {
        return $this->fileExtension;
    }

    /**
     * @param string $fileExtension
     *
     * @return self
     */
    public function setFileExtension($fileExtension = null)
    {
        $this->fileExtension = $fileExtension;

        return $this;
    }

    /**
     * @return string
     */
    public function getFileFormatHint()
    {
        return $this->fileFormatHint;
    }

    /**
     * @param string $fileFormatHint
     *
     * @return self
     */
    public function setFileFormatHint($fileFormatHint = null)
    {
        $this->fileFormatHint = $fileFormatHint;

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
     * @return MatchBox[]
     */
    public function getMatchBoxes()
    {
        return $this->matchBoxes;
    }

    /**
     * @param MatchBox[] $matchBoxes
     *
     * @return self
     */
    public function setMatchBoxes(array $matchBoxes = null)
    {
        $this->matchBoxes = $matchBoxes;

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
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     *
     * @return self
     */
    public function setPassword($password = null)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return string
     */
    public function getRemoteUrl()
    {
        return $this->remoteUrl;
    }

    /**
     * @param string $remoteUrl
     *
     * @return self
     */
    public function setRemoteUrl($remoteUrl = null)
    {
        $this->remoteUrl = $remoteUrl;

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
    public function getTemplateLocked()
    {
        return $this->templateLocked;
    }

    /**
     * @param string $templateLocked
     *
     * @return self
     */
    public function setTemplateLocked($templateLocked = null)
    {
        $this->templateLocked = $templateLocked;

        return $this;
    }

    /**
     * @return string
     */
    public function getTemplateRequired()
    {
        return $this->templateRequired;
    }

    /**
     * @param string $templateRequired
     *
     * @return self
     */
    public function setTemplateRequired($templateRequired = null)
    {
        $this->templateRequired = $templateRequired;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransformPdfFields()
    {
        return $this->transformPdfFields;
    }

    /**
     * @param string $transformPdfFields
     *
     * @return self
     */
    public function setTransformPdfFields($transformPdfFields = null)
    {
        $this->transformPdfFields = $transformPdfFields;

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
