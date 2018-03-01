<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class RecipientEvent
{
    /**
     * reserved.
     *
     * @var string
     */
    protected $includeDocuments;
    /**
     * Send a webhook notification for the following recipient statuses: Sent, Delivered, Completed, Declined, AuthenticationFailed, and AutoResponded.
     *
     * @var string
     */
    protected $recipientEventStatusCode;

    /**
     * reserved.
     *
     * @return string
     */
    public function getIncludeDocuments(): ?string
    {
        return $this->includeDocuments;
    }

    /**
     * reserved.
     *
     * @param string $includeDocuments
     *
     * @return self
     */
    public function setIncludeDocuments(?string $includeDocuments): self
    {
        $this->includeDocuments = $includeDocuments;

        return $this;
    }

    /**
     * Send a webhook notification for the following recipient statuses: Sent, Delivered, Completed, Declined, AuthenticationFailed, and AutoResponded.
     *
     * @return string
     */
    public function getRecipientEventStatusCode(): ?string
    {
        return $this->recipientEventStatusCode;
    }

    /**
     * Send a webhook notification for the following recipient statuses: Sent, Delivered, Completed, Declined, AuthenticationFailed, and AutoResponded.
     *
     * @param string $recipientEventStatusCode
     *
     * @return self
     */
    public function setRecipientEventStatusCode(?string $recipientEventStatusCode): self
    {
        $this->recipientEventStatusCode = $recipientEventStatusCode;

        return $this;
    }
}
