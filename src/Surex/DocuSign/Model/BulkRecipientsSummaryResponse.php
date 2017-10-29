<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BulkRecipientsSummaryResponse
{
    /**
     * @var BulkRecipient[]
     */
    protected $bulkRecipients;
    /**
     * @var string
     */
    protected $bulkRecipientsCount;
    /**
     * @var string
     */
    protected $bulkRecipientsUri;
    /**
     * @var ErrorDetails[]
     */
    protected $errorDetails;

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

    /**
     * @return string
     */
    public function getBulkRecipientsCount()
    {
        return $this->bulkRecipientsCount;
    }

    /**
     * @param string $bulkRecipientsCount
     *
     * @return self
     */
    public function setBulkRecipientsCount($bulkRecipientsCount = null)
    {
        $this->bulkRecipientsCount = $bulkRecipientsCount;

        return $this;
    }

    /**
     * @return string
     */
    public function getBulkRecipientsUri()
    {
        return $this->bulkRecipientsUri;
    }

    /**
     * @param string $bulkRecipientsUri
     *
     * @return self
     */
    public function setBulkRecipientsUri($bulkRecipientsUri = null)
    {
        $this->bulkRecipientsUri = $bulkRecipientsUri;

        return $this;
    }

    /**
     * @return ErrorDetails[]
     */
    public function getErrorDetails()
    {
        return $this->errorDetails;
    }

    /**
     * @param ErrorDetails[] $errorDetails
     *
     * @return self
     */
    public function setErrorDetails(array $errorDetails = null)
    {
        $this->errorDetails = $errorDetails;

        return $this;
    }
}
