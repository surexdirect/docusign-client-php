<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BulkRecipientsRequest
{
    /**
     * @var BulkRecipient[]
     */
    protected $bulkRecipients;

    /**
     * @return BulkRecipient[]
     */
    public function getBulkRecipients()
    {
        return $this->bulkRecipients;
    }

    /**
     * @param BulkRecipient[] $bulkRecipients
     *
     * @return self
     */
    public function setBulkRecipients(array $bulkRecipients = null)
    {
        $this->bulkRecipients = $bulkRecipients;

        return $this;
    }
}
