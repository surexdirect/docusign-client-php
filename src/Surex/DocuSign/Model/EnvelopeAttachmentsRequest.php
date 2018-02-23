<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class EnvelopeAttachmentsRequest
{
    /**
     * @var Attachment[]
     */
    protected $attachments;

    /**
     * @return Attachment[]
     */
    public function getAttachments(): ?array
    {
        return $this->attachments;
    }

    /**
     * @param Attachment[] $attachments
     *
     * @return self
     */
    public function setAttachments(?array $attachments): self
    {
        $this->attachments = $attachments;

        return $this;
    }
}
