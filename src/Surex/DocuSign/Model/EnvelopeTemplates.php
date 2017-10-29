<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
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
    public function getTemplates()
    {
        return $this->templates;
    }

    /**
     * @param TemplateSummary[] $templates
     *
     * @return self
     */
    public function setTemplates(array $templates = null)
    {
        $this->templates = $templates;

        return $this;
    }
}
