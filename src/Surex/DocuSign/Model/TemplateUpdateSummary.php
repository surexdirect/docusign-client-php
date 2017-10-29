<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class TemplateUpdateSummary
{
    /**
     * @var BulkEnvelopeStatus
     */
    protected $bulkEnvelopeStatus;
    /**
     * @var string
     */
    protected $envelopeId;
    /**
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * @var ListCustomField[]
     */
    protected $listCustomFieldUpdateResults;
    /**
     * @var EnvelopeLocks
     */
    protected $lockInformation;
    /**
     * @var RecipientUpdateResponse[]
     */
    protected $recipientUpdateResults;
    /**
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
    public function getBulkEnvelopeStatus()
    {
        return $this->bulkEnvelopeStatus;
    }

    /**
     * @param BulkEnvelopeStatus $bulkEnvelopeStatus
     *
     * @return self
     */
    public function setBulkEnvelopeStatus(BulkEnvelopeStatus $bulkEnvelopeStatus = null)
    {
        $this->bulkEnvelopeStatus = $bulkEnvelopeStatus;

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
     * @return ListCustomField[]
     */
    public function getListCustomFieldUpdateResults()
    {
        return $this->listCustomFieldUpdateResults;
    }

    /**
     * @param ListCustomField[] $listCustomFieldUpdateResults
     *
     * @return self
     */
    public function setListCustomFieldUpdateResults(array $listCustomFieldUpdateResults = null)
    {
        $this->listCustomFieldUpdateResults = $listCustomFieldUpdateResults;

        return $this;
    }

    /**
     * @return EnvelopeLocks
     */
    public function getLockInformation()
    {
        return $this->lockInformation;
    }

    /**
     * @param EnvelopeLocks $lockInformation
     *
     * @return self
     */
    public function setLockInformation(EnvelopeLocks $lockInformation = null)
    {
        $this->lockInformation = $lockInformation;

        return $this;
    }

    /**
     * @return RecipientUpdateResponse[]
     */
    public function getRecipientUpdateResults()
    {
        return $this->recipientUpdateResults;
    }

    /**
     * @param RecipientUpdateResponse[] $recipientUpdateResults
     *
     * @return self
     */
    public function setRecipientUpdateResults(array $recipientUpdateResults = null)
    {
        $this->recipientUpdateResults = $recipientUpdateResults;

        return $this;
    }

    /**
     * @return EnvelopeRecipientTabs
     */
    public function getTabUpdateResults()
    {
        return $this->tabUpdateResults;
    }

    /**
     * @param EnvelopeRecipientTabs $tabUpdateResults
     *
     * @return self
     */
    public function setTabUpdateResults(EnvelopeRecipientTabs $tabUpdateResults = null)
    {
        $this->tabUpdateResults = $tabUpdateResults;

        return $this;
    }

    /**
     * @return TextCustomField[]
     */
    public function getTextCustomFieldUpdateResults()
    {
        return $this->textCustomFieldUpdateResults;
    }

    /**
     * @param TextCustomField[] $textCustomFieldUpdateResults
     *
     * @return self
     */
    public function setTextCustomFieldUpdateResults(array $textCustomFieldUpdateResults = null)
    {
        $this->textCustomFieldUpdateResults = $textCustomFieldUpdateResults;

        return $this;
    }
}
