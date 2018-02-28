<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BulkRecipientsRequest
{
    /**
     * A complex type containing information about the bulk recipients in the request.
     *
     * @var BulkRecipient[]
     */
    protected $bulkRecipients;

    /**
     * A complex type containing information about the bulk recipients in the request.
     *
     * @return BulkRecipient[]
     */
    public function getBulkRecipients(): ?array
    {
        return $this->bulkRecipients;
    }

    /**
     * A complex type containing information about the bulk recipients in the request.
     *
     * @param BulkRecipient[] $bulkRecipients
     *
     * @return self
     */
    public function setBulkRecipients(?array $bulkRecipients): self
    {
        $this->bulkRecipients = $bulkRecipients;

        return $this;
    }
}
