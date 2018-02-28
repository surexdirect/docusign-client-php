<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Ssn9InformationInput
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
     *  The recipient's Social Security Number(SSN).
     *
     * @var string
     */
    protected $ssn9;

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
     *  The recipient's Social Security Number(SSN).
     *
     * @return string
     */
    public function getSsn9(): ?string
    {
        return $this->ssn9;
    }

    /**
     *  The recipient's Social Security Number(SSN).
     *
     * @param string $ssn9
     *
     * @return self
     */
    public function setSsn9(?string $ssn9): self
    {
        $this->ssn9 = $ssn9;

        return $this;
    }
}
