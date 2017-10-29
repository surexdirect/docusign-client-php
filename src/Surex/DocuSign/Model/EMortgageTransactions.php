<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

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
    public function getDptName()
    {
        return $this->dptName;
    }

    /**
     * @param string $dptName
     *
     * @return self
     */
    public function setDptName($dptName = null)
    {
        $this->dptName = $dptName;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionName()
    {
        return $this->transactionName;
    }

    /**
     * @param string $transactionName
     *
     * @return self
     */
    public function setTransactionName($transactionName = null)
    {
        $this->transactionName = $transactionName;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionTypeName()
    {
        return $this->transactionTypeName;
    }

    /**
     * @param string $transactionTypeName
     *
     * @return self
     */
    public function setTransactionTypeName($transactionTypeName = null)
    {
        $this->transactionTypeName = $transactionTypeName;

        return $this;
    }
}
