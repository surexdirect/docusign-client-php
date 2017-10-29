<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class TemplateDocumentFields
{
    /**
     * @var NameValue[]
     */
    protected $documentFields;

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
}
