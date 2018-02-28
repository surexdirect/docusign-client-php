<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class EnvelopeIdsRequest
{
    /**
     * @var string[]
     */
    protected $envelopeIds;
    /**
     *  A list of transaction Id's used to determining the status of envelopes sent asynchronously. See **transactionId** property on envelopes.
     *
     * @var string[]
     */
    protected $transactionIds;

    /**
     * @return string[]
     */
    public function getEnvelopeIds(): ?array
    {
        return $this->envelopeIds;
    }

    /**
     * @param string[] $envelopeIds
     *
     * @return self
     */
    public function setEnvelopeIds(?array $envelopeIds): self
    {
        $this->envelopeIds = $envelopeIds;

        return $this;
    }

    /**
     *  A list of transaction Id's used to determining the status of envelopes sent asynchronously. See **transactionId** property on envelopes.
     *
     * @return string[]
     */
    public function getTransactionIds(): ?array
    {
        return $this->transactionIds;
    }

    /**
     *  A list of transaction Id's used to determining the status of envelopes sent asynchronously. See **transactionId** property on envelopes.
     *
     * @param string[] $transactionIds
     *
     * @return self
     */
    public function setTransactionIds(?array $transactionIds): self
    {
        $this->transactionIds = $transactionIds;

        return $this;
    }
}
