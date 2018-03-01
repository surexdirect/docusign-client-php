<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

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
    public function getDocumentData(): ?string
    {
        return $this->documentData;
    }

    /**
     * @param string $documentData
     *
     * @return self
     */
    public function setDocumentData(?string $documentData): self
    {
        $this->documentData = $documentData;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionSid(): ?string
    {
        return $this->transactionSid;
    }

    /**
     * @param string $transactionSid
     *
     * @return self
     */
    public function setTransactionSid(?string $transactionSid): self
    {
        $this->transactionSid = $transactionSid;

        return $this;
    }
}
