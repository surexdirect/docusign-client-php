<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class RecipientEvent
{
    /**
     * @var string
     */
    protected $includeDocuments;
    /**
     * @var string
     */
    protected $recipientEventStatusCode;

    /**
     * @return string
     */
    public function getIncludeDocuments()
    {
        return $this->includeDocuments;
    }

    /**
     * @param string $includeDocuments
     *
     * @return self
     */
    public function setIncludeDocuments($includeDocuments = null)
    {
        $this->includeDocuments = $includeDocuments;

        return $this;
    }

    /**
     * @return string
     */
    public function getRecipientEventStatusCode()
    {
        return $this->recipientEventStatusCode;
    }

    /**
     * @param string $recipientEventStatusCode
     *
     * @return self
     */
    public function setRecipientEventStatusCode($recipientEventStatusCode = null)
    {
        $this->recipientEventStatusCode = $recipientEventStatusCode;

        return $this;
    }
}
