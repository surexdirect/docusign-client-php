<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BillingInvoicesResponse
{
    /**
     * Reserved: TBD.
     *
     * @var Invoices[]
     */
    protected $billingInvoices;
    /**
     * The URI for the next chunk of records based on the search request. It is `null` if this is the last set of results for the search.
     *
     * @var string
     */
    protected $nextUri;
    /**
     * The URI for the prior chunk of records based on the search request. It is `null` if this is the first set of results for the search.
     *
     * @var string
     */
    protected $previousUri;

    /**
     * Reserved: TBD.
     *
     * @return Invoices[]
     */
    public function getBillingInvoices(): ?array
    {
        return $this->billingInvoices;
    }

    /**
     * Reserved: TBD.
     *
     * @param Invoices[] $billingInvoices
     *
     * @return self
     */
    public function setBillingInvoices(?array $billingInvoices): self
    {
        $this->billingInvoices = $billingInvoices;

        return $this;
    }

    /**
     * The URI for the next chunk of records based on the search request. It is `null` if this is the last set of results for the search.
     *
     * @return string
     */
    public function getNextUri(): ?string
    {
        return $this->nextUri;
    }

    /**
     * The URI for the next chunk of records based on the search request. It is `null` if this is the last set of results for the search.
     *
     * @param string $nextUri
     *
     * @return self
     */
    public function setNextUri(?string $nextUri): self
    {
        $this->nextUri = $nextUri;

        return $this;
    }

    /**
     * The URI for the prior chunk of records based on the search request. It is `null` if this is the first set of results for the search.
     *
     * @return string
     */
    public function getPreviousUri(): ?string
    {
        return $this->previousUri;
    }

    /**
     * The URI for the prior chunk of records based on the search request. It is `null` if this is the first set of results for the search.
     *
     * @param string $previousUri
     *
     * @return self
     */
    public function setPreviousUri(?string $previousUri): self
    {
        $this->previousUri = $previousUri;

        return $this;
    }
}
