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
     * @var string
     */
    protected $templateId;

    /**
     * @return EnvelopeDocument[]
     */
    public function getTemplateDocuments()
    {
        return $this->templateDocuments;
    }

    /**
     * @param EnvelopeDocument[] $templateDocuments
     *
     * @return self
     */
    public function setTemplateDocuments(array $templateDocuments = null)
    {
        $this->templateDocuments = $templateDocuments;

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
}
