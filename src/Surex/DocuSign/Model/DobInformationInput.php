<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class DobInformationInput
{
    /**
     * Specifies the recipient's date, month, and year of birth.
     *
     * @var string
     */
    protected $dateOfBirth;
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
     * Specifies the recipient's date, month, and year of birth.
     *
     * @return string
     */
    public function getDateOfBirth(): ?string
    {
        return $this->dateOfBirth;
    }

    /**
     * Specifies the recipient's date, month, and year of birth.
     *
     * @param string $dateOfBirth
     *
     * @return self
     */
    public function setDateOfBirth(?string $dateOfBirth): self
    {
        $this->dateOfBirth = $dateOfBirth;

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
