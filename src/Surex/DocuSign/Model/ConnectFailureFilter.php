<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class ConnectFailureFilter
{
    /**
     * @var string[]
     */
    protected $envelopeIds;
    /**
     * @var string
     */
    protected $synchronous;

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
     * @return string
     */
    public function getSynchronous()
    {
        return $this->synchronous;
    }

    /**
     * @param string $synchronous
     *
     * @return self
     */
    public function setSynchronous($synchronous = null)
    {
        $this->synchronous = $synchronous;

        return $this;
    }
}
