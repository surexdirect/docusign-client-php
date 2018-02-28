<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class DocumentTemplateList
{
    /**
     * @var DocumentTemplate[]
     */
    protected $documentTemplates;

    /**
     * @return DocumentTemplate[]
     */
    public function getDocumentTemplates(): ?array
    {
        return $this->documentTemplates;
    }

    /**
     * @param DocumentTemplate[] $documentTemplates
     *
     * @return self
     */
    public function setDocumentTemplates(?array $documentTemplates): self
    {
        $this->documentTemplates = $documentTemplates;

        return $this;
    }
}
