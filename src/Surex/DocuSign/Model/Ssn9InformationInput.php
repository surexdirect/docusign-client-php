<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Ssn9InformationInput
{
    /**
     * @var string
     */
    protected $displayLevelCode;
    /**
     * @var string
     */
    protected $ssn9;

    /**
     * @return string
     */
    public function getDisplayLevelCode()
    {
        return $this->displayLevelCode;
    }

    /**
     * @param string $displayLevelCode
     *
     * @return self
     */
    public function setDisplayLevelCode($displayLevelCode = null)
    {
        $this->displayLevelCode = $displayLevelCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getSsn9()
    {
        return $this->ssn9;
    }

    /**
     * @param string $ssn9
     *
     * @return self
     */
    public function setSsn9($ssn9 = null)
    {
        $this->ssn9 = $ssn9;

        return $this;
    }
}
