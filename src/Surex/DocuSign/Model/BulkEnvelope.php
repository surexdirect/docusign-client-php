<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BulkEnvelope
{
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $bulkRecipientRow;
    /**
     * Indicates the status of the bulk send operation. Returned values can be:
     * queued
     * processing
     * sent
     * failed.
     *
     * @var string
     */
    protected $bulkStatus;
    /**
     * @var string
     */
    protected $email;
    /**
     * The envelope ID of the envelope status that failed to post.
     *
     * @var string
     */
    protected $envelopeId;
    /**
     * Contains a URI for an endpoint that you can use to retrieve the envelope or envelopes.
     *
     * @var string
     */
    protected $envelopeUri;
    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
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
     *  Used to identify an envelope. The id is a sender-generated value and is valid in the DocuSign system for 7 days. It is recommended that a transaction ID is used for offline signing to ensure that an envelope is not sent multiple times. The `transactionId` property can be used determine an envelope's status (i.e. was it created or not) in cases where the internet connection was lost before the envelope status was returned.
     *
     * @var string
     */
    protected $transactionId;

    /**
     * Reserved: TBD.
     *
     * @return string
     */
    public function getBulkRecipientRow(): ?string
    {
        return $this->bulkRecipientRow;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $bulkRecipientRow
     *
     * @return self
     */
    public function setBulkRecipientRow(?string $bulkRecipientRow): self
    {
        $this->bulkRecipientRow = $bulkRecipientRow;

        return $this;
    }

    /**
     * Indicates the status of the bulk send operation. Returned values can be:
     * queued
     * processing
     * sent
     * failed.
     *
     * @return string
     */
    public function getBulkStatus(): ?string
    {
        return $this->bulkStatus;
    }

    /**
     * Indicates the status of the bulk send operation. Returned values can be:
     * queued
     * processing
     * sent
     * failed.
     *
     * @param string $bulkStatus
     *
     * @return self
     */
    public function setBulkStatus(?string $bulkStatus): self
    {
        $this->bulkStatus = $bulkStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * The envelope ID of the envelope status that failed to post.
     *
     * @return string
     */
    public function getEnvelopeId(): ?string
    {
        return $this->envelopeId;
    }

    /**
     * The envelope ID of the envelope status that failed to post.
     *
     * @param string $envelopeId
     *
     * @return self
     */
    public function setEnvelopeId(?string $envelopeId): self
    {
        $this->envelopeId = $envelopeId;

        return $this;
    }

    /**
     * Contains a URI for an endpoint that you can use to retrieve the envelope or envelopes.
     *
     * @return string
     */
    public function getEnvelopeUri(): ?string
    {
        return $this->envelopeUri;
    }

    /**
     * Contains a URI for an endpoint that you can use to retrieve the envelope or envelopes.
     *
     * @param string $envelopeUri
     *
     * @return self
     */
    public function setEnvelopeUri(?string $envelopeUri): self
    {
        $this->envelopeUri = $envelopeUri;

        return $this;
    }

    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @return ErrorDetails
     */
    public function getErrorDetails(): ?ErrorDetails
    {
        return $this->errorDetails;
    }

    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @param ErrorDetails $errorDetails
     *
     * @return self
     */
    public function setErrorDetails(?ErrorDetails $errorDetails): self
    {
        $this->errorDetails = $errorDetails;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubmittedDateTime(): ?string
    {
        return $this->submittedDateTime;
    }

    /**
     * @param string $submittedDateTime
     *
     * @return self
     */
    public function setSubmittedDateTime(?string $submittedDateTime): self
    {
        $this->submittedDateTime = $submittedDateTime;

        return $this;
    }

    /**
     *  Used to identify an envelope. The id is a sender-generated value and is valid in the DocuSign system for 7 days. It is recommended that a transaction ID is used for offline signing to ensure that an envelope is not sent multiple times. The `transactionId` property can be used determine an envelope's status (i.e. was it created or not) in cases where the internet connection was lost before the envelope status was returned.
     *
     * @return string
     */
    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }

    /**
     *  Used to identify an envelope. The id is a sender-generated value and is valid in the DocuSign system for 7 days. It is recommended that a transaction ID is used for offline signing to ensure that an envelope is not sent multiple times. The `transactionId` property can be used determine an envelope's status (i.e. was it created or not) in cases where the internet connection was lost before the envelope status was returned.
     *
     * @param string $transactionId
     *
     * @return self
     */
    public function setTransactionId(?string $transactionId): self
    {
        $this->transactionId = $transactionId;

        return $this;
    }
}
