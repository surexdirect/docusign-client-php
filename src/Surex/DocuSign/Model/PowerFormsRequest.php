<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
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
    public function getPowerForms()
    {
        return $this->powerForms;
    }

    /**
     * @param PowerForms[] $powerForms
     *
     * @return self
     */
    public function setPowerForms(array $powerForms = null)
    {
        $this->powerForms = $powerForms;

        return $this;
    }
}
