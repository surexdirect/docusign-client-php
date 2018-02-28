<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class EnvelopeTemplates
{
    /**
     * @var TemplateSummary[]
     */
    protected $templates;

    /**
     * @return TemplateSummary[]
     */
    public function getTemplates(): ?array
    {
        return $this->templates;
    }

    /**
     * @param TemplateSummary[] $templates
     *
     * @return self
     */
    public function setTemplates(?array $templates): self
    {
        $this->templates = $templates;

        return $this;
    }
}
