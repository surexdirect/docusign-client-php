<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class RecipientUpdateResponse
{
    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * Unique for the recipient. It is used by the tab element to indicate which recipient is to sign the Document.
     *
     * @var string
     */
    protected $recipientId;
    /**
     * Envelope tabs.
     *
     * @var EnvelopeRecipientTabs
     */
    protected $tabs;

    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @return ErrorDetails
     */
    public function getErrorDetails(): ?ErrorDetails
    {
        return $this->errorDetails;
    }

    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @param ErrorDetails $errorDetails
     *
     * @return self
     */
    public function setErrorDetails(?ErrorDetails $errorDetails): self
    {
        $this->errorDetails = $errorDetails;

        return $this;
    }

    /**
     * Unique for the recipient. It is used by the tab element to indicate which recipient is to sign the Document.
     *
     * @return string
     */
    public function getRecipientId(): ?string
    {
        return $this->recipientId;
    }

    /**
     * Unique for the recipient. It is used by the tab element to indicate which recipient is to sign the Document.
     *
     * @param string $recipientId
     *
     * @return self
     */
    public function setRecipientId(?string $recipientId): self
    {
        $this->recipientId = $recipientId;

        return $this;
    }

    /**
     * Envelope tabs.
     *
     * @return EnvelopeRecipientTabs
     */
    public function getTabs(): ?EnvelopeRecipientTabs
    {
        return $this->tabs;
    }

    /**
     * Envelope tabs.
     *
     * @param EnvelopeRecipientTabs $tabs
     *
     * @return self
     */
    public function setTabs(?EnvelopeRecipientTabs $tabs): self
    {
        $this->tabs = $tabs;

        return $this;
    }
}
