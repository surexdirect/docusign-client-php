<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class ConsoleViewRequest
{
    /**
     * @var string
     */
    protected $envelopeId;
    /**
     * @var string
     */
    protected $returnUrl;

    /**
     * @return string
     */
    public function getEnvelopeId()
    {
        return $this->envelopeId;
    }

    /**
     * @param string $envelopeId
     *
     * @return self
     */
    public function setEnvelopeId($envelopeId = null)
    {
        $this->envelopeId = $envelopeId;

        return $this;
    }

    /**
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    /**
     * @param string $returnUrl
     *
     * @return self
     */
    public function setReturnUrl($returnUrl = null)
    {
        $this->returnUrl = $returnUrl;

        return $this;
    }
}
