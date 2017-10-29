<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class DobInformationInput
{
    /**
     * @var string
     */
    protected $dateOfBirth;
    /**
     * @var string
     */
    protected $displayLevelCode;
    /**
     * @var string
     */
    protected $receiveInResponse;

    /**
     * @return string
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @param string $dateOfBirth
     *
     * @return self
     */
    public function setDateOfBirth($dateOfBirth = null)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

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
}
