<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class RecipientUpdateResponse
{
    /**
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * @var string
     */
    protected $recipientId;
    /**
     * @var EnvelopeRecipientTabs
     */
    protected $tabs;

    /**
     * @return ErrorDetails
     */
    public function getErrorDetails()
    {
        return $this->errorDetails;
    }

    /**
     * @param ErrorDetails $errorDetails
     *
     * @return self
     */
    public function setErrorDetails(ErrorDetails $errorDetails = null)
    {
        $this->errorDetails = $errorDetails;

        return $this;
    }

    /**
     * @return string
     */
    public function getRecipientId()
    {
        return $this->recipientId;
    }

    /**
     * @param string $recipientId
     *
     * @return self
     */
    public function setRecipientId($recipientId = null)
    {
        $this->recipientId = $recipientId;

        return $this;
    }

    /**
     * @return EnvelopeRecipientTabs
     */
    public function getTabs()
    {
        return $this->tabs;
    }

    /**
     * @param EnvelopeRecipientTabs $tabs
     *
     * @return self
     */
    public function setTabs(EnvelopeRecipientTabs $tabs = null)
    {
        $this->tabs = $tabs;

        return $this;
    }
}
