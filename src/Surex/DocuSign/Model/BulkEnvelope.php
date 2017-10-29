<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BulkEnvelope
{
    /**
     * @var string
     */
    protected $bulkRecipientRow;
    /**
     * @var string
     */
    protected $bulkStatus;
    /**
     * @var string
     */
    protected $email;
    /**
     * @var string
     */
    protected $envelopeId;
    /**
     * @var string
     */
    protected $envelopeUri;
    /**
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $submittedDateTime;
    /**
     * @var string
     */
    protected $transactionId;

    /**
     * @return string
     */
    public function getBulkRecipientRow()
    {
        return $this->bulkRecipientRow;
    }

    /**
     * @param string $bulkRecipientRow
     *
     * @return self
     */
    public function setBulkRecipientRow($bulkRecipientRow = null)
    {
        $this->bulkRecipientRow = $bulkRecipientRow;

        return $this;
    }

    /**
     * @return string
     */
    public function getBulkStatus()
    {
        return $this->bulkStatus;
    }

    /**
     * @param string $bulkStatus
     *
     * @return self
     */
    public function setBulkStatus($bulkStatus = null)
    {
        $this->bulkStatus = $bulkStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return self
     */
    public function setEmail($email = null)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnvelopeId()
    {
        return $this->envelopeId;
    }

    /**
     * @param string $envelopeId
     *
     * @return self
     */
    public function setEnvelopeId($envelopeId = null)
    {
        $this->envelopeId = $envelopeId;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnvelopeUri()
    {
        return $this->envelopeUri;
    }

    /**
     * @param string $envelopeUri
     *
     * @return self
     */
    public function setEnvelopeUri($envelopeUri = null)
    {
        $this->envelopeUri = $envelopeUri;

        return $this;
    }

    /**
     * @return ErrorDetails
     */
    public function getErrorDetails()
    {
        return $this->errorDetails;
    }

    /**
     * @param ErrorDetails $errorDetails
     *
     * @return self
     */
    public function setErrorDetails(ErrorDetails $errorDetails = null)
    {
        $this->errorDetails = $errorDetails;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubmittedDateTime()
    {
        return $this->submittedDateTime;
    }

    /**
     * @param string $submittedDateTime
     *
     * @return self
     */
    public function setSubmittedDateTime($submittedDateTime = null)
    {
        $this->submittedDateTime = $submittedDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @param string $transactionId
     *
     * @return self
     */
    public function setTransactionId($transactionId = null)
    {
        $this->transactionId = $transactionId;

        return $this;
    }
}
