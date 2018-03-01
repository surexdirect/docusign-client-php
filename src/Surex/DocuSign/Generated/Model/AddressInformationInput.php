<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class AddressInformationInput
{
    /**
     * Contains address information.
     *
     * @var AddressInformation
     */
    protected $addressInformation;
    /**
     * Specifies the display level for the recipient.
     Valid values are:

     * ReadOnly
     * Editable
     * DoNotDisplay
     *
     * @var string
     */
    protected $displayLevelCode;
    /**
     * When set to **true**, the information needs to be returned in the response.
     *
     * @var string
     */
    protected $receiveInResponse;

    /**
     * Contains address information.
     *
     * @return AddressInformation
     */
    public function getAddressInformation(): ?AddressInformation
    {
        return $this->addressInformation;
    }

    /**
     * Contains address information.
     *
     * @param AddressInformation $addressInformation
     *
     * @return self
     */
    public function setAddressInformation(?AddressInformation $addressInformation): self
    {
        $this->addressInformation = $addressInformation;

        return $this;
    }

    /**
     * Specifies the display level for the recipient.
     Valid values are:

     * ReadOnly
     * Editable
     * DoNotDisplay
     *
     * @return string
     */
    public function getDisplayLevelCode(): ?string
    {
        return $this->displayLevelCode;
    }

    /**
     * Specifies the display level for the recipient.
     Valid values are:

     * ReadOnly
     * Editable
     * DoNotDisplay
     *
     * @param string $displayLevelCode
     *
     * @return self
     */
    public function setDisplayLevelCode(?string $displayLevelCode): self
    {
        $this->displayLevelCode = $displayLevelCode;

        return $this;
    }

    /**
     * When set to **true**, the information needs to be returned in the response.
     *
     * @return string
     */
    public function getReceiveInResponse(): ?string
    {
        return $this->receiveInResponse;
    }

    /**
     * When set to **true**, the information needs to be returned in the response.
     *
     * @param string $receiveInResponse
     *
     * @return self
     */
    public function setReceiveInResponse(?string $receiveInResponse): self
    {
        $this->receiveInResponse = $receiveInResponse;

        return $this;
    }
}
