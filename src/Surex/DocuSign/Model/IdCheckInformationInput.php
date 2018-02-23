<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class IdCheckInformationInput
{
    /**
     * Contains address input information.
     *
     * @var AddressInformationInput
     */
    protected $addressInformationInput;
    /**
     * Complex type containing:.

     * dateOfBirth
     * displayLevelCode
     * receiveInResponse
     *
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
     * Contains address input information.
     *
     * @return AddressInformationInput
     */
    public function getAddressInformationInput(): ?AddressInformationInput
    {
        return $this->addressInformationInput;
    }

    /**
     * Contains address input information.
     *
     * @param AddressInformationInput $addressInformationInput
     *
     * @return self
     */
    public function setAddressInformationInput(?AddressInformationInput $addressInformationInput): self
    {
        $this->addressInformationInput = $addressInformationInput;

        return $this;
    }

    /**
     * Complex type containing:.

     * dateOfBirth
     * displayLevelCode
     * receiveInResponse
     *
     * @return DobInformationInput
     */
    public function getDobInformationInput(): ?DobInformationInput
    {
        return $this->dobInformationInput;
    }

    /**
     * Complex type containing:.

     * dateOfBirth
     * displayLevelCode
     * receiveInResponse
     *
     * @param DobInformationInput $dobInformationInput
     *
     * @return self
     */
    public function setDobInformationInput(?DobInformationInput $dobInformationInput): self
    {
        $this->dobInformationInput = $dobInformationInput;

        return $this;
    }

    /**
     * @return Ssn4InformationInput
     */
    public function getSsn4InformationInput(): ?Ssn4InformationInput
    {
        return $this->ssn4InformationInput;
    }

    /**
     * @param Ssn4InformationInput $ssn4InformationInput
     *
     * @return self
     */
    public function setSsn4InformationInput(?Ssn4InformationInput $ssn4InformationInput): self
    {
        $this->ssn4InformationInput = $ssn4InformationInput;

        return $this;
    }

    /**
     * @return Ssn9InformationInput
     */
    public function getSsn9InformationInput(): ?Ssn9InformationInput
    {
        return $this->ssn9InformationInput;
    }

    /**
     * @param Ssn9InformationInput $ssn9InformationInput
     *
     * @return self
     */
    public function setSsn9InformationInput(?Ssn9InformationInput $ssn9InformationInput): self
    {
        $this->ssn9InformationInput = $ssn9InformationInput;

        return $this;
    }
}
