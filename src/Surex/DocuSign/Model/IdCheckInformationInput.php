<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class IdCheckInformationInput
{
    /**
     * @var AddressInformationInput
     */
    protected $addressInformationInput;
    /**
     * @var DobInformationInput
     */
    protected $dobInformationInput;
    /**
     * @var Ssn4InformationInput
     */
    protected $ssn4InformationInput;
    /**
     * @var Ssn9InformationInput
     */
    protected $ssn9InformationInput;

    /**
     * @return AddressInformationInput
     */
    public function getAddressInformationInput()
    {
        return $this->addressInformationInput;
    }

    /**
     * @param AddressInformationInput $addressInformationInput
     *
     * @return self
     */
    public function setAddressInformationInput(AddressInformationInput $addressInformationInput = null)
    {
        $this->addressInformationInput = $addressInformationInput;

        return $this;
    }

    /**
     * @return DobInformationInput
     */
    public function getDobInformationInput()
    {
        return $this->dobInformationInput;
    }

    /**
     * @param DobInformationInput $dobInformationInput
     *
     * @return self
     */
    public function setDobInformationInput(DobInformationInput $dobInformationInput = null)
    {
        $this->dobInformationInput = $dobInformationInput;

        return $this;
    }

    /**
     * @return Ssn4InformationInput
     */
    public function getSsn4InformationInput()
    {
        return $this->ssn4InformationInput;
    }

    /**
     * @param Ssn4InformationInput $ssn4InformationInput
     *
     * @return self
     */
    public function setSsn4InformationInput(Ssn4InformationInput $ssn4InformationInput = null)
    {
        $this->ssn4InformationInput = $ssn4InformationInput;

        return $this;
    }

    /**
     * @return Ssn9InformationInput
     */
    public function getSsn9InformationInput()
    {
        return $this->ssn9InformationInput;
    }

    /**
     * @param Ssn9InformationInput $ssn9InformationInput
     *
     * @return self
     */
    public function setSsn9InformationInput(Ssn9InformationInput $ssn9InformationInput = null)
    {
        $this->ssn9InformationInput = $ssn9InformationInput;

        return $this;
    }
}
