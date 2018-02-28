<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BulkEnvelopeStatus
{
    /**
     * Specifies an identifier which can be used to retrieve a more detailed status of individual bulk recipient batches.
     *
     * @var string
     */
    protected $batchId;
    /**
     * The number of items returned in this response.
     *
     * @var string
     */
    protected $batchSize;
    /**
     * Reserved: TBD.
     *
     * @var BulkEnvelope[]
     */
    protected $bulkEnvelopes;
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $bulkEnvelopesBatchUri;
    /**
     * The last position in the result set.
     *
     * @var string
     */
    protected $endPosition;
    /**
     * The number of entries with a status of failed.
     *
     * @var string
     */
    protected $failed;
    /**
     * The URI for the next chunk of records based on the search request. It is `null` if this is the last set of results for the search.
     *
     * @var string
     */
    protected $nextUri;
    /**
     * The URI for the prior chunk of records based on the search request. It is `null` if this is the first set of results for the search.
     *
     * @var string
     */
    protected $previousUri;
    /**
     * The number of entries with a status of queued.
     *
     * @var string
     */
    protected $queued;
    /**
     * The number of results returned in this response.
     *
     * @var string
     */
    protected $resultSetSize;
    /**
     * The number of entries with a status of sent.
     *
     * @var string
     */
    protected $sent;
    /**
     * Starting position of the current result set.
     *
     * @var string
     */
    protected $startPosition;
    /**
     * @var string
     */
    protected $submittedDate;
    /**
     * The total number of items in the search's result set. It will always be greater than or equal to the value of the `resultSetSize` field.
     *
     * @var string
     */
    protected $totalSetSize;

    /**
     * Specifies an identifier which can be used to retrieve a more detailed status of individual bulk recipient batches.
     *
     * @return string
     */
    public function getBatchId(): ?string
    {
        return $this->batchId;
    }

    /**
     * Specifies an identifier which can be used to retrieve a more detailed status of individual bulk recipient batches.
     *
     * @param string $batchId
     *
     * @return self
     */
    public function setBatchId(?string $batchId): self
    {
        $this->batchId = $batchId;

        return $this;
    }

    /**
     * The number of items returned in this response.
     *
     * @return string
     */
    public function getBatchSize(): ?string
    {
        return $this->batchSize;
    }

    /**
     * The number of items returned in this response.
     *
     * @param string $batchSize
     *
     * @return self
     */
    public function setBatchSize(?string $batchSize): self
    {
        $this->batchSize = $batchSize;

        return $this;
    }

    /**
     * Reserved: TBD.
     *
     * @return BulkEnvelope[]
     */
    public function getBulkEnvelopes(): ?array
    {
        return $this->bulkEnvelopes;
    }

    /**
     * Reserved: TBD.
     *
     * @param BulkEnvelope[] $bulkEnvelopes
     *
     * @return self
     */
    public function setBulkEnvelopes(?array $bulkEnvelopes): self
    {
        $this->bulkEnvelopes = $bulkEnvelopes;

        return $this;
    }

    /**
     * Reserved: TBD.
     *
     * @return string
     */
    public function getBulkEnvelopesBatchUri(): ?string
    {
        return $this->bulkEnvelopesBatchUri;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $bulkEnvelopesBatchUri
     *
     * @return self
     */
    public function setBulkEnvelopesBatchUri(?string $bulkEnvelopesBatchUri): self
    {
        $this->bulkEnvelopesBatchUri = $bulkEnvelopesBatchUri;

        return $this;
    }

    /**
     * The last position in the result set.
     *
     * @return string
     */
    public function getEndPosition(): ?string
    {
        return $this->endPosition;
    }

    /**
     * The last position in the result set.
     *
     * @param string $endPosition
     *
     * @return self
     */
    public function setEndPosition(?string $endPosition): self
    {
        $this->endPosition = $endPosition;

        return $this;
    }

    /**
     * The number of entries with a status of failed.
     *
     * @return string
     */
    public function getFailed(): ?string
    {
        return $this->failed;
    }

    /**
     * The number of entries with a status of failed.
     *
     * @param string $failed
     *
     * @return self
     */
    public function setFailed(?string $failed): self
    {
        $this->failed = $failed;

        return $this;
    }

    /**
     * The URI for the next chunk of records based on the search request. It is `null` if this is the last set of results for the search.
     *
     * @return string
     */
    public function getNextUri(): ?string
    {
        return $this->nextUri;
    }

    /**
     * The URI for the next chunk of records based on the search request. It is `null` if this is the last set of results for the search.
     *
     * @param string $nextUri
     *
     * @return self
     */
    public function setNextUri(?string $nextUri): self
    {
        $this->nextUri = $nextUri;

        return $this;
    }

    /**
     * The URI for the prior chunk of records based on the search request. It is `null` if this is the first set of results for the search.
     *
     * @return string
     */
    public function getPreviousUri(): ?string
    {
        return $this->previousUri;
    }

    /**
     * The URI for the prior chunk of records based on the search request. It is `null` if this is the first set of results for the search.
     *
     * @param string $previousUri
     *
     * @return self
     */
    public function setPreviousUri(?string $previousUri): self
    {
        $this->previousUri = $previousUri;

        return $this;
    }

    /**
     * The number of entries with a status of queued.
     *
     * @return string
     */
    public function getQueued(): ?string
    {
        return $this->queued;
    }

    /**
     * The number of entries with a status of queued.
     *
     * @param string $queued
     *
     * @return self
     */
    public function setQueued(?string $queued): self
    {
        $this->queued = $queued;

        return $this;
    }

    /**
     * The number of results returned in this response.
     *
     * @return string
     */
    public function getResultSetSize(): ?string
    {
        return $this->resultSetSize;
    }

    /**
     * The number of results returned in this response.
     *
     * @param string $resultSetSize
     *
     * @return self
     */
    public function setResultSetSize(?string $resultSetSize): self
    {
        $this->resultSetSize = $resultSetSize;

        return $this;
    }

    /**
     * The number of entries with a status of sent.
     *
     * @return string
     */
    public function getSent(): ?string
    {
        return $this->sent;
    }

    /**
     * The number of entries with a status of sent.
     *
     * @param string $sent
     *
     * @return self
     */
    public function setSent(?string $sent): self
    {
        $this->sent = $sent;

        return $this;
    }

    /**
     * Starting position of the current result set.
     *
     * @return string
     */
    public function getStartPosition(): ?string
    {
        return $this->startPosition;
    }

    /**
     * Starting position of the current result set.
     *
     * @param string $startPosition
     *
     * @return self
     */
    public function setStartPosition(?string $startPosition): self
    {
        $this->startPosition = $startPosition;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubmittedDate(): ?string
    {
        return $this->submittedDate;
    }

    /**
     * @param string $submittedDate
     *
     * @return self
     */
    public function setSubmittedDate(?string $submittedDate): self
    {
        $this->submittedDate = $submittedDate;

        return $this;
    }

    /**
     * The total number of items in the search's result set. It will always be greater than or equal to the value of the `resultSetSize` field.
     *
     * @return string
     */
    public function getTotalSetSize(): ?string
    {
        return $this->totalSetSize;
    }

    /**
     * The total number of items in the search's result set. It will always be greater than or equal to the value of the `resultSetSize` field.
     *
     * @param string $totalSetSize
     *
     * @return self
     */
    public function setTotalSetSize(?string $totalSetSize): self
    {
        $this->totalSetSize = $totalSetSize;

        return $this;
    }
}
