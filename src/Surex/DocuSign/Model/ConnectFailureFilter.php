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
     * @return string
     */
    public function getSynchronous(): ?string
    {
        return $this->synchronous;
    }

    /**
     * @param string $synchronous
     *
     * @return self
     */
    public function setSynchronous(?string $synchronous): self
    {
        $this->synchronous = $synchronous;

        return $this;
    }
}
