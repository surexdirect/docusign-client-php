<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class ServerTemplate
{
    /**
     * @var string
     */
    protected $sequence;
    /**
     * @var string
     */
    protected $templateId;

    /**
     * @return string
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * @param string $sequence
     *
     * @return self
     */
    public function setSequence($sequence = null)
    {
        $this->sequence = $sequence;

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
