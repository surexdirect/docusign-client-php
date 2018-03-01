<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class CompositeTemplate
{
    /**
     * The identify of this composite template. It is used as a reference when adding document object information. If used, the document's `content-disposition` must include the composite template ID to which the document should be added. If a composite template ID is not specified in the content-disposition, the document is applied based on the value of the `documentId` property only. If no document object is specified, the composite template inherits the first document.
     *
     * @var string
     */
    protected $compositeTemplateId;
    /**
     * @var Document
     */
    protected $document;
    /**
     *  Zero or more inline templates and their position in the overlay. If supplied, they are overlaid into the envelope in the order of their Sequence value.
     *
     * @var InlineTemplate[]
     */
    protected $inlineTemplates;
    /**
     * @var string
     */
    protected $pdfMetaDataTemplateSequence;
    /**
     * 0 or more server-side templates and their position in the overlay. If supplied, they are overlaid into the envelope in the order of their Sequence value.
     *
     * @var ServerTemplate[]
     */
    protected $serverTemplates;

    /**
     * The identify of this composite template. It is used as a reference when adding document object information. If used, the document's `content-disposition` must include the composite template ID to which the document should be added. If a composite template ID is not specified in the content-disposition, the document is applied based on the value of the `documentId` property only. If no document object is specified, the composite template inherits the first document.
     *
     * @return string
     */
    public function getCompositeTemplateId(): ?string
    {
        return $this->compositeTemplateId;
    }

    /**
     * The identify of this composite template. It is used as a reference when adding document object information. If used, the document's `content-disposition` must include the composite template ID to which the document should be added. If a composite template ID is not specified in the content-disposition, the document is applied based on the value of the `documentId` property only. If no document object is specified, the composite template inherits the first document.
     *
     * @param string $compositeTemplateId
     *
     * @return self
     */
    public function setCompositeTemplateId(?string $compositeTemplateId): self
    {
        $this->compositeTemplateId = $compositeTemplateId;

        return $this;
    }

    /**
     * @return Document
     */
    public function getDocument(): ?Document
    {
        return $this->document;
    }

    /**
     * @param Document $document
     *
     * @return self
     */
    public function setDocument(?Document $document): self
    {
        $this->document = $document;

        return $this;
    }

    /**
     *  Zero or more inline templates and their position in the overlay. If supplied, they are overlaid into the envelope in the order of their Sequence value.
     *
     * @return InlineTemplate[]
     */
    public function getInlineTemplates(): ?array
    {
        return $this->inlineTemplates;
    }

    /**
     *  Zero or more inline templates and their position in the overlay. If supplied, they are overlaid into the envelope in the order of their Sequence value.
     *
     * @param InlineTemplate[] $inlineTemplates
     *
     * @return self
     */
    public function setInlineTemplates(?array $inlineTemplates): self
    {
        $this->inlineTemplates = $inlineTemplates;

        return $this;
    }

    /**
     * @return string
     */
    public function getPdfMetaDataTemplateSequence(): ?string
    {
        return $this->pdfMetaDataTemplateSequence;
    }

    /**
     * @param string $pdfMetaDataTemplateSequence
     *
     * @return self
     */
    public function setPdfMetaDataTemplateSequence(?string $pdfMetaDataTemplateSequence): self
    {
        $this->pdfMetaDataTemplateSequence = $pdfMetaDataTemplateSequence;

        return $this;
    }

    /**
     * 0 or more server-side templates and their position in the overlay. If supplied, they are overlaid into the envelope in the order of their Sequence value.
     *
     * @return ServerTemplate[]
     */
    public function getServerTemplates(): ?array
    {
        return $this->serverTemplates;
    }

    /**
     * 0 or more server-side templates and their position in the overlay. If supplied, they are overlaid into the envelope in the order of their Sequence value.
     *
     * @param ServerTemplate[] $serverTemplates
     *
     * @return self
     */
    public function setServerTemplates(?array $serverTemplates): self
    {
        $this->serverTemplates = $serverTemplates;

        return $this;
    }
}
