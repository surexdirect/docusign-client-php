<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class CompositeTemplate
{
    /**
     * @var string
     */
    protected $compositeTemplateId;
    /**
     * @var Document
     */
    protected $document;
    /**
     * @var InlineTemplate[]
     */
    protected $inlineTemplates;
    /**
     * @var string
     */
    protected $pdfMetaDataTemplateSequence;
    /**
     * @var ServerTemplate[]
     */
    protected $serverTemplates;

    /**
     * @return string
     */
    public function getCompositeTemplateId()
    {
        return $this->compositeTemplateId;
    }

    /**
     * @param string $compositeTemplateId
     *
     * @return self
     */
    public function setCompositeTemplateId($compositeTemplateId = null)
    {
        $this->compositeTemplateId = $compositeTemplateId;

        return $this;
    }

    /**
     * @return Document
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @param Document $document
     *
     * @return self
     */
    public function setDocument(Document $document = null)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * @return InlineTemplate[]
     */
    public function getInlineTemplates()
    {
        return $this->inlineTemplates;
    }

    /**
     * @param InlineTemplate[] $inlineTemplates
     *
     * @return self
     */
    public function setInlineTemplates(array $inlineTemplates = null)
    {
        $this->inlineTemplates = $inlineTemplates;

        return $this;
    }

    /**
     * @return string
     */
    public function getPdfMetaDataTemplateSequence()
    {
        return $this->pdfMetaDataTemplateSequence;
    }

    /**
     * @param string $pdfMetaDataTemplateSequence
     *
     * @return self
     */
    public function setPdfMetaDataTemplateSequence($pdfMetaDataTemplateSequence = null)
    {
        $this->pdfMetaDataTemplateSequence = $pdfMetaDataTemplateSequence;

        return $this;
    }

    /**
     * @return ServerTemplate[]
     */
    public function getServerTemplates()
    {
        return $this->serverTemplates;
    }

    /**
     * @param ServerTemplate[] $serverTemplates
     *
     * @return self
     */
    public function setServerTemplates(array $serverTemplates = null)
    {
        $this->serverTemplates = $serverTemplates;

        return $this;
    }
}
