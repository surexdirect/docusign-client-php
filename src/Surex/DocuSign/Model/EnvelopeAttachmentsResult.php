<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
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
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @param EnvelopeAttachments[] $attachments
     *
     * @return self
     */
    public function setAttachments(array $attachments = null)
    {
        $this->attachments = $attachments;

        return $this;
    }
}
