<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class EMortgageTransactions
{
    /**
     * @var string
     */
    protected $documentData;
    /**
     * @var string
     */
    protected $dptName;
    /**
     * @var string
     */
    protected $transactionName;
    /**
     * @var string
     */
    protected $transactionTypeName;

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
    public function getDptName(): ?string
    {
        return $this->dptName;
    }

    /**
     * @param string $dptName
     *
     * @return self
     */
    public function setDptName(?string $dptName): self
    {
        $this->dptName = $dptName;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionName(): ?string
    {
        return $this->transactionName;
    }

    /**
     * @param string $transactionName
     *
     * @return self
     */
    public function setTransactionName(?string $transactionName): self
    {
        $this->transactionName = $transactionName;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionTypeName(): ?string
    {
        return $this->transactionTypeName;
    }

    /**
     * @param string $transactionTypeName
     *
     * @return self
     */
    public function setTransactionTypeName(?string $transactionTypeName): self
    {
        $this->transactionTypeName = $transactionTypeName;

        return $this;
    }
}
