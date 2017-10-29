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
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @param Attachment[] $attachments
     *
     * @return self
     */
    public function setAttachments(array $attachments = null)
    {
        $this->attachments = $attachments;

        return $this;
    }
}
