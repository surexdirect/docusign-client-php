<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class BulkRecipientsSummaryResponse
{
    /**
     * A complex type containing information about the bulk recipients in the response.
     *
     * @var BulkRecipient[]
     */
    protected $bulkRecipients;
    /**
     * The number of items returned in this response.
     *
     * @var string
     */
    protected $bulkRecipientsCount;
    /**
     * Contains a URI for an endpoint that allows you to easily retrieve bulk recipient information.
     *
     * @var string
     */
    protected $bulkRecipientsUri;
    /**
     * Array or errors.
     *
     * @var ErrorDetails[]
     */
    protected $errorDetails;

    /**
     * A complex type containing information about the bulk recipients in the response.
     *
     * @return BulkRecipient[]
     */
    public function getBulkRecipients(): ?array
    {
        return $this->bulkRecipients;
    }

    /**
     * A complex type containing information about the bulk recipients in the response.
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

    /**
     * The number of items returned in this response.
     *
     * @return string
     */
    public function getBulkRecipientsCount(): ?string
    {
        return $this->bulkRecipientsCount;
    }

    /**
     * The number of items returned in this response.
     *
     * @param string $bulkRecipientsCount
     *
     * @return self
     */
    public function setBulkRecipientsCount(?string $bulkRecipientsCount): self
    {
        $this->bulkRecipientsCount = $bulkRecipientsCount;

        return $this;
    }

    /**
     * Contains a URI for an endpoint that allows you to easily retrieve bulk recipient information.
     *
     * @return string
     */
    public function getBulkRecipientsUri(): ?string
    {
        return $this->bulkRecipientsUri;
    }

    /**
     * Contains a URI for an endpoint that allows you to easily retrieve bulk recipient information.
     *
     * @param string $bulkRecipientsUri
     *
     * @return self
     */
    public function setBulkRecipientsUri(?string $bulkRecipientsUri): self
    {
        $this->bulkRecipientsUri = $bulkRecipientsUri;

        return $this;
    }

    /**
     * Array or errors.
     *
     * @return ErrorDetails[]
     */
    public function getErrorDetails(): ?array
    {
        return $this->errorDetails;
    }

    /**
     * Array or errors.
     *
     * @param ErrorDetails[] $errorDetails
     *
     * @return self
     */
    public function setErrorDetails(?array $errorDetails): self
    {
        $this->errorDetails = $errorDetails;

        return $this;
    }
}
