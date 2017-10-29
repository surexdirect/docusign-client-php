<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
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
    public function getDocumentTemplates()
    {
        return $this->documentTemplates;
    }

    /**
     * @param DocumentTemplate[] $documentTemplates
     *
     * @return self
     */
    public function setDocumentTemplates(array $documentTemplates = null)
    {
        $this->documentTemplates = $documentTemplates;

        return $this;
    }
}
