<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class EnvelopeAttachmentsResult
{
    /**
     * @var EnvelopeAttachments[]
     */
    protected $attachments;

    /**
     * @return EnvelopeAttachments[]
     */
    public function getAttachments(): ?array
    {
        return $this->attachments;
    }

    /**
     * @param EnvelopeAttachments[] $attachments
     *
     * @return self
     */
    public function setAttachments(?array $attachments): self
    {
        $this->attachments = $attachments;

        return $this;
    }
}
