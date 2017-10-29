<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BillingInvoicesResponse
{
    /**
     * @var Invoices[]
     */
    protected $billingInvoices;
    /**
     * @var string
     */
    protected $nextUri;
    /**
     * @var string
     */
    protected $previousUri;

    /**
     * @return Invoices[]
     */
    public function getBillingInvoices()
    {
        return $this->billingInvoices;
    }

    /**
     * @param Invoices[] $billingInvoices
     *
     * @return self
     */
    public function setBillingInvoices(array $billingInvoices = null)
    {
        $this->billingInvoices = $billingInvoices;

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
}
