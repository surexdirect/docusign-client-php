<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

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
