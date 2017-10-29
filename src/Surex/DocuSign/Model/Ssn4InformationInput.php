<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Ssn4InformationInput
{
    /**
     * @var string
     */
    protected $displayLevelCode;
    /**
     * @var string
     */
    protected $receiveInResponse;
    /**
     * @var string
     */
    protected $ssn4;

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
    public function getReceiveInResponse()
    {
        return $this->receiveInResponse;
    }

    /**
     * @param string $receiveInResponse
     *
     * @return self
     */
    public function setReceiveInResponse($receiveInResponse = null)
    {
        $this->receiveInResponse = $receiveInResponse;

        return $this;
    }

    /**
     * @return string
     */
    public function getSsn4()
    {
        return $this->ssn4;
    }

    /**
     * @param string $ssn4
     *
     * @return self
     */
    public function setSsn4($ssn4 = null)
    {
        $this->ssn4 = $ssn4;

        return $this;
    }
}
