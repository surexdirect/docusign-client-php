<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class TemplateSummary
{
    /**
     * @var string
     */
    protected $applied;
    /**
     * @var string
     */
    protected $documentId;
    /**
     * @var string
     */
    protected $documentName;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $templateId;
    /**
     * @var TemplateMatch
     */
    protected $templateMatch;
    /**
     * @var string
     */
    protected $uri;

    /**
     * @return string
     */
    public function getApplied()
    {
        return $this->applied;
    }

    /**
     * @param string $applied
     *
     * @return self
     */
    public function setApplied($applied = null)
    {
        $this->applied = $applied;

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
    public function getDocumentName()
    {
        return $this->documentName;
    }

    /**
     * @param string $documentName
     *
     * @return self
     */
    public function setDocumentName($documentName = null)
    {
        $this->documentName = $documentName;

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

    /**
     * @return TemplateMatch
     */
    public function getTemplateMatch()
    {
        return $this->templateMatch;
    }

    /**
     * @param TemplateMatch $templateMatch
     *
     * @return self
     */
    public function setTemplateMatch(TemplateMatch $templateMatch = null)
    {
        $this->templateMatch = $templateMatch;

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
