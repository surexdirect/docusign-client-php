<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class EnvelopeUpdateSummary
{
    /**
     * @var BulkEnvelopeStatus
     */
    protected $bulkEnvelopeStatus;
    /**
     * The envelope ID of the envelope status that failed to post.
     *
     * @var string
     */
    protected $envelopeId;
    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * @var ListCustomField[]
     */
    protected $listCustomFieldUpdateResults;
    /**
     * Envelope locks.
     *
     * @var EnvelopeLocks
     */
    protected $lockInformation;
    /**
     * @var RecipientUpdateResponse[]
     */
    protected $recipientUpdateResults;
    /**
     * Envelope tabs.
     *
     * @var EnvelopeRecipientTabs
     */
    protected $tabUpdateResults;
    /**
     * @var TextCustomField[]
     */
    protected $textCustomFieldUpdateResults;

    /**
     * @return BulkEnvelopeStatus
     */
    public function getBulkEnvelopeStatus(): ?BulkEnvelopeStatus
    {
        return $this->bulkEnvelopeStatus;
    }

    /**
     * @param BulkEnvelopeStatus $bulkEnvelopeStatus
     *
     * @return self
     */
    public function setBulkEnvelopeStatus(?BulkEnvelopeStatus $bulkEnvelopeStatus): self
    {
        $this->bulkEnvelopeStatus = $bulkEnvelopeStatus;

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
     * @return ListCustomField[]
     */
    public function getListCustomFieldUpdateResults(): ?array
    {
        return $this->listCustomFieldUpdateResults;
    }

    /**
     * @param ListCustomField[] $listCustomFieldUpdateResults
     *
     * @return self
     */
    public function setListCustomFieldUpdateResults(?array $listCustomFieldUpdateResults): self
    {
        $this->listCustomFieldUpdateResults = $listCustomFieldUpdateResults;

        return $this;
    }

    /**
     * Envelope locks.
     *
     * @return EnvelopeLocks
     */
    public function getLockInformation(): ?EnvelopeLocks
    {
        return $this->lockInformation;
    }

    /**
     * Envelope locks.
     *
     * @param EnvelopeLocks $lockInformation
     *
     * @return self
     */
    public function setLockInformation(?EnvelopeLocks $lockInformation): self
    {
        $this->lockInformation = $lockInformation;

        return $this;
    }

    /**
     * @return RecipientUpdateResponse[]
     */
    public function getRecipientUpdateResults(): ?array
    {
        return $this->recipientUpdateResults;
    }

    /**
     * @param RecipientUpdateResponse[] $recipientUpdateResults
     *
     * @return self
     */
    public function setRecipientUpdateResults(?array $recipientUpdateResults): self
    {
        $this->recipientUpdateResults = $recipientUpdateResults;

        return $this;
    }

    /**
     * Envelope tabs.
     *
     * @return EnvelopeRecipientTabs
     */
    public function getTabUpdateResults(): ?EnvelopeRecipientTabs
    {
        return $this->tabUpdateResults;
    }

    /**
     * Envelope tabs.
     *
     * @param EnvelopeRecipientTabs $tabUpdateResults
     *
     * @return self
     */
    public function setTabUpdateResults(?EnvelopeRecipientTabs $tabUpdateResults): self
    {
        $this->tabUpdateResults = $tabUpdateResults;

        return $this;
    }

    /**
     * @return TextCustomField[]
     */
    public function getTextCustomFieldUpdateResults(): ?array
    {
        return $this->textCustomFieldUpdateResults;
    }

    /**
     * @param TextCustomField[] $textCustomFieldUpdateResults
     *
     * @return self
     */
    public function setTextCustomFieldUpdateResults(?array $textCustomFieldUpdateResults): self
    {
        $this->textCustomFieldUpdateResults = $textCustomFieldUpdateResults;

        return $this;
    }
}
