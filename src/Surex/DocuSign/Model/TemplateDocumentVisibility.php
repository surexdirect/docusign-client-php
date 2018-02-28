<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class TemplateDocumentVisibility
{
    /**
     * @var DocumentVisibility[]
     */
    protected $documentVisibility;

    /**
     * @return DocumentVisibility[]
     */
    public function getDocumentVisibility(): ?array
    {
        return $this->documentVisibility;
    }

    /**
     * @param DocumentVisibility[] $documentVisibility
     *
     * @return self
     */
    public function setDocumentVisibility(?array $documentVisibility): self
    {
        $this->documentVisibility = $documentVisibility;

        return $this;
    }
}
