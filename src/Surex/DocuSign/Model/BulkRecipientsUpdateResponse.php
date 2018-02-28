<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BulkRecipientsUpdateResponse
{
    /**
     * @var Signer
     */
    protected $signer;

    /**
     * @return Signer
     */
    public function getSigner(): ?Signer
    {
        return $this->signer;
    }

    /**
     * @param Signer $signer
     *
     * @return self
     */
    public function setSigner(?Signer $signer): self
    {
        $this->signer = $signer;

        return $this;
    }
}
