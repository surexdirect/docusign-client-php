<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class PowerFormsRequest
{
    /**
     * @var PowerForms[]
     */
    protected $powerForms;

    /**
     * @return PowerForms[]
     */
    public function getPowerForms(): ?array
    {
        return $this->powerForms;
    }

    /**
     * @param PowerForms[] $powerForms
     *
     * @return self
     */
    public function setPowerForms(?array $powerForms): self
    {
        $this->powerForms = $powerForms;

        return $this;
    }
}
