<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BulkEnvelopeStatus
{
    /**
     * @var string
     */
    protected $batchId;
    /**
     * @var string
     */
    protected $batchSize;
    /**
     * @var BulkEnvelope[]
     */
    protected $bulkEnvelopes;
    /**
     * @var string
     */
    protected $bulkEnvelopesBatchUri;
    /**
     * @var string
     */
    protected $endPosition;
    /**
     * @var string
     */
    protected $failed;
    /**
     * @var string
     */
    protected $nextUri;
    /**
     * @var string
     */
    protected $previousUri;
    /**
     * @var string
     */
    protected $queued;
    /**
     * @var string
     */
    protected $resultSetSize;
    /**
     * @var string
     */
    protected $sent;
    /**
     * @var string
     */
    protected $startPosition;
    /**
     * @var string
     */
    protected $submittedDate;
    /**
     * @var string
     */
    protected $totalSetSize;

    /**
     * @return string
     */
    public function getBatchId()
    {
        return $this->batchId;
    }

    /**
     * @param string $batchId
     *
     * @return self
     */
    public function setBatchId($batchId = null)
    {
        $this->batchId = $batchId;

        return $this;
    }

    /**
     * @return string
     */
    public function getBatchSize()
    {
        return $this->batchSize;
    }

    /**
     * @param string $batchSize
     *
     * @return self
     */
    public function setBatchSize($batchSize = null)
    {
        $this->batchSize = $batchSize;

        return $this;
    }

    /**
     * @return BulkEnvelope[]
     */
    public function getBulkEnvelopes()
    {
        return $this->bulkEnvelopes;
    }

    /**
     * @param BulkEnvelope[] $bulkEnvelopes
     *
     * @return self
     */
    public function setBulkEnvelopes(array $bulkEnvelopes = null)
    {
        $this->bulkEnvelopes = $bulkEnvelopes;

        return $this;
    }

    /**
     * @return string
     */
    public function getBulkEnvelopesBatchUri()
    {
        return $this->bulkEnvelopesBatchUri;
    }

    /**
     * @param string $bulkEnvelopesBatchUri
     *
     * @return self
     */
    public function setBulkEnvelopesBatchUri($bulkEnvelopesBatchUri = null)
    {
        $this->bulkEnvelopesBatchUri = $bulkEnvelopesBatchUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getEndPosition()
    {
        return $this->endPosition;
    }

    /**
     * @param string $endPosition
     *
     * @return self
     */
    public function setEndPosition($endPosition = null)
    {
        $this->endPosition = $endPosition;

        return $this;
    }

    /**
     * @return string
     */
    public function getFailed()
    {
        return $this->failed;
    }

    /**
     * @param string $failed
     *
     * @return self
     */
    public function setFailed($failed = null)
    {
        $this->failed = $failed;

        return $this;
    }

    /**
     * @return string
     */
    public function getNextUri()
    {
        return $this->nextUri;
    }

    /**
     * @param string $nextUri
     *
     * @return self
     */
    public function setNextUri($nextUri = null)
    {
        $this->nextUri = $nextUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getPreviousUri()
    {
        return $this->previousUri;
    }

    /**
     * @param string $previousUri
     *
     * @return self
     */
    public function setPreviousUri($previousUri = null)
    {
        $this->previousUri = $previousUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getQueued()
    {
        return $this->queued;
    }

    /**
     * @param string $queued
     *
     * @return self
     */
    public function setQueued($queued = null)
    {
        $this->queued = $queued;

        return $this;
    }

    /**
     * @return string
     */
    public function getResultSetSize()
    {
        return $this->resultSetSize;
    }

    /**
     * @param string $resultSetSize
     *
     * @return self
     */
    public function setResultSetSize($resultSetSize = null)
    {
        $this->resultSetSize = $resultSetSize;

        return $this;
    }

    /**
     * @return string
     */
    public function getSent()
    {
        return $this->sent;
    }

    /**
     * @param string $sent
     *
     * @return self
     */
    public function setSent($sent = null)
    {
        $this->sent = $sent;

        return $this;
    }

    /**
     * @return string
     */
    public function getStartPosition()
    {
        return $this->startPosition;
    }

    /**
     * @param string $startPosition
     *
     * @return self
     */
    public function setStartPosition($startPosition = null)
    {
        $this->startPosition = $startPosition;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubmittedDate()
    {
        return $this->submittedDate;
    }

    /**
     * @param string $submittedDate
     *
     * @return self
     */
    public function setSubmittedDate($submittedDate = null)
    {
        $this->submittedDate = $submittedDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotalSetSize()
    {
        return $this->totalSetSize;
    }

    /**
     * @param string $totalSetSize
     *
     * @return self
     */
    public function setTotalSetSize($totalSetSize = null)
    {
        $this->totalSetSize = $totalSetSize;

        return $this;
    }
}
