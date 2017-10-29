<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
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
    public function getSigner()
    {
        return $this->signer;
    }

    /**
     * @param Signer $signer
     *
     * @return self
     */
    public function setSigner(Signer $signer = null)
    {
        $this->signer = $signer;

        return $this;
    }
}
