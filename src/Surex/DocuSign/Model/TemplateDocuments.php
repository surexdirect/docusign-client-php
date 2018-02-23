<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class TemplateDocuments
{
    /**
     * @var EnvelopeDocument[]
     */
    protected $templateDocuments;
    /**
     * The unique identifier of the template. If this is not provided, DocuSign will generate a value.
     *
     * @var string
     */
    protected $templateId;

    /**
     * @return EnvelopeDocument[]
     */
    public function getTemplateDocuments(): ?array
    {
        return $this->templateDocuments;
    }

    /**
     * @param EnvelopeDocument[] $templateDocuments
     *
     * @return self
     */
    public function setTemplateDocuments(?array $templateDocuments): self
    {
        $this->templateDocuments = $templateDocuments;

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
