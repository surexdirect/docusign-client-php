<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class Ssn4InformationInput
{
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
     * The last four digits of the recipient's Social Security Number (SSN).
     *
     * @var string
     */
    protected $ssn4;

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

    /**
     * The last four digits of the recipient's Social Security Number (SSN).
     *
     * @return string
     */
    public function getSsn4(): ?string
    {
        return $this->ssn4;
    }

    /**
     * The last four digits of the recipient's Social Security Number (SSN).
     *
     * @param string $ssn4
     *
     * @return self
     */
    public function setSsn4(?string $ssn4): self
    {
        $this->ssn4 = $ssn4;

        return $this;
    }
}
