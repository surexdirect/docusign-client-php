<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class AddressInformationInput
{
    /**
     * @var AddressInformation
     */
    protected $addressInformation;
    /**
     * @var string
     */
    protected $displayLevelCode;
    /**
     * @var string
     */
    protected $receiveInResponse;

    /**
     * @return AddressInformation
     */
    public function getAddressInformation()
    {
        return $this->addressInformation;
    }

    /**
     * @param AddressInformation $addressInformation
     *
     * @return self
     */
    public function setAddressInformation(AddressInformation $addressInformation = null)
    {
        $this->addressInformation = $addressInformation;

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
