<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class EnvelopeIdsRequest
{
    /**
     * @var string[]
     */
    protected $envelopeIds;
    /**
     * @var string[]
     */
    protected $transactionIds;

    /**
     * @return string[]
     */
    public function getEnvelopeIds()
    {
        return $this->envelopeIds;
    }

    /**
     * @param string[] $envelopeIds
     *
     * @return self
     */
    public function setEnvelopeIds(array $envelopeIds = null)
    {
        $this->envelopeIds = $envelopeIds;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getTransactionIds()
    {
        return $this->transactionIds;
    }

    /**
     * @param string[] $transactionIds
     *
     * @return self
     */
    public function setTransactionIds(array $transactionIds = null)
    {
        $this->transactionIds = $transactionIds;

        return $this;
    }
}
