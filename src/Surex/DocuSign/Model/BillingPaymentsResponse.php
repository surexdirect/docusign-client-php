<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BillingPaymentsResponse
{
    /**
     * @var Payments[]
     */
    protected $billingPayments;
    /**
     * @var string
     */
    protected $nextUri;
    /**
     * @var string
     */
    protected $previousUri;

    /**
     * @return Payments[]
     */
    public function getBillingPayments()
    {
        return $this->billingPayments;
    }

    /**
     * @param Payments[] $billingPayments
     *
     * @return self
     */
    public function setBillingPayments(array $billingPayments = null)
    {
        $this->billingPayments = $billingPayments;

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
