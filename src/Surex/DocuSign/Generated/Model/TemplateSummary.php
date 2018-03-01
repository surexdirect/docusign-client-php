<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class TemplateSummary
{
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $applied;
    /**
     * Specifies the document ID number that the tab is placed on. This must refer to an existing Document's ID attribute.
     *
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
     * The unique identifier of the template. If this is not provided, DocuSign will generate a value.
     *
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
     * Reserved: TBD.
     *
     * @return string
     */
    public function getApplied(): ?string
    {
        return $this->applied;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $applied
     *
     * @return self
     */
    public function setApplied(?string $applied): self
    {
        $this->applied = $applied;

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
    public function getDocumentName(): ?string
    {
        return $this->documentName;
    }

    /**
     * @param string $documentName
     *
     * @return self
     */
    public function setDocumentName(?string $documentName): self
    {
        $this->documentName = $documentName;

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

    /**
     * @return TemplateMatch
     */
    public function getTemplateMatch(): ?TemplateMatch
    {
        return $this->templateMatch;
    }

    /**
     * @param TemplateMatch $templateMatch
     *
     * @return self
     */
    public function setTemplateMatch(?TemplateMatch $templateMatch): self
    {
        $this->templateMatch = $templateMatch;

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
