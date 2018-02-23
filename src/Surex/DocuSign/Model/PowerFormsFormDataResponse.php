<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class PowerFormsFormDataResponse
{
    /**
     * @var PowerFormData[]
     */
    protected $envelopes;

    /**
     * @return PowerFormData[]
     */
    public function getEnvelopes(): ?array
    {
        return $this->envelopes;
    }

    /**
     * @param PowerFormData[] $envelopes
     *
     * @return self
     */
    public function setEnvelopes(?array $envelopes): self
    {
        $this->envelopes = $envelopes;

        return $this;
    }
}
