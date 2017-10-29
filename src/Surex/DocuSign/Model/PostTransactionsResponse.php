<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class PostTransactionsResponse
{
    /**
     * @var string
     */
    protected $documentData;
    /**
     * @var string
     */
    protected $transactionSid;

    /**
     * @return string
     */
    public function getDocumentData()
    {
        return $this->documentData;
    }

    /**
     * @param string $documentData
     *
     * @return self
     */
    public function setDocumentData($documentData = null)
    {
        $this->documentData = $documentData;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionSid()
    {
        return $this->transactionSid;
    }

    /**
     * @param string $transactionSid
     *
     * @return self
     */
    public function setTransactionSid($transactionSid = null)
    {
        $this->transactionSid = $transactionSid;

        return $this;
    }
}
