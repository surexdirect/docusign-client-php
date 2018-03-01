<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class RecipientSignatureProviderOptions
{
    /**
     * Reserved for DocuSign.
     *
     * @var string
     */
    protected $cpfNumber;
    /**
     * A pre-shared secret that the signer must enter to complete the signing process. Eg last six digits of the signer's government ID or Social Security number. Or a newly created pre-shared secret for the transaction. Note: some signature providers may require an exact (case-sensitive) match if alphabetic characters are included in the field.
     *
     * @var string
     */
    protected $oneTimePassword;
    /**
     * The role or capacity of the signing recipient. Examples: Manager, Approver, etc.
     *
     * @var string
     */
    protected $signerRole;
    /**
     * The mobile phone number used to send the recipient an access code for the signing ceremony. Format: a string starting with +, then the country code followed by the full mobile phone number without any spaces or special characters. Omit leading zeroes before a city code. Examples: +14155551234, +97235551234, +33505551234.
     *
     * @var string
     */
    protected $sms;

    /**
     * Reserved for DocuSign.
     *
     * @return string
     */
    public function getCpfNumber(): ?string
    {
        return $this->cpfNumber;
    }

    /**
     * Reserved for DocuSign.
     *
     * @param string $cpfNumber
     *
     * @return self
     */
    public function setCpfNumber(?string $cpfNumber): self
    {
        $this->cpfNumber = $cpfNumber;

        return $this;
    }

    /**
     * A pre-shared secret that the signer must enter to complete the signing process. Eg last six digits of the signer's government ID or Social Security number. Or a newly created pre-shared secret for the transaction. Note: some signature providers may require an exact (case-sensitive) match if alphabetic characters are included in the field.
     *
     * @return string
     */
    public function getOneTimePassword(): ?string
    {
        return $this->oneTimePassword;
    }

    /**
     * A pre-shared secret that the signer must enter to complete the signing process. Eg last six digits of the signer's government ID or Social Security number. Or a newly created pre-shared secret for the transaction. Note: some signature providers may require an exact (case-sensitive) match if alphabetic characters are included in the field.
     *
     * @param string $oneTimePassword
     *
     * @return self
     */
    public function setOneTimePassword(?string $oneTimePassword): self
    {
        $this->oneTimePassword = $oneTimePassword;

        return $this;
    }

    /**
     * The role or capacity of the signing recipient. Examples: Manager, Approver, etc.
     *
     * @return string
     */
    public function getSignerRole(): ?string
    {
        return $this->signerRole;
    }

    /**
     * The role or capacity of the signing recipient. Examples: Manager, Approver, etc.
     *
     * @param string $signerRole
     *
     * @return self
     */
    public function setSignerRole(?string $signerRole): self
    {
        $this->signerRole = $signerRole;

        return $this;
    }

    /**
     * The mobile phone number used to send the recipient an access code for the signing ceremony. Format: a string starting with +, then the country code followed by the full mobile phone number without any spaces or special characters. Omit leading zeroes before a city code. Examples: +14155551234, +97235551234, +33505551234.
     *
     * @return string
     */
    public function getSms(): ?string
    {
        return $this->sms;
    }

    /**
     * The mobile phone number used to send the recipient an access code for the signing ceremony. Format: a string starting with +, then the country code followed by the full mobile phone number without any spaces or special characters. Omit leading zeroes before a city code. Examples: +14155551234, +97235551234, +33505551234.
     *
     * @param string $sms
     *
     * @return self
     */
    public function setSms(?string $sms): self
    {
        $this->sms = $sms;

        return $this;
    }
}
