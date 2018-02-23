<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BillingCharge
{
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $allowedQuantity;
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $blocked;
    /**
     * Provides information on what services the charge item is for.

     The following table provides a description of the different chargeName values available at this time.

     | chargeName | Description |
     | --- | --- |
     | id_check | ID Check Charge |
     | in_person_signing | In Person Signing charge |
     | envelopes Included | Sent Envelopes for the account |
     | age_verify | Age verification check |
     | ofac | OFAC Check |
     | id_confirm | ID confirmation check |
     | student_authentication | STAN PIN authentication check |
     | wet_sign_fax | Pages for returning signed documents by fax |
     | attachment_fax | Pages for returning attachments by fax |
     | phone_authentication | Phone authentication charge |
     | powerforms | PowerForm envelopes sent |
     | signer_payments | Payment processing charge |
     | outbound_fax | Send by fax charge |
     | bulk_recipient_envelopes | Bulk Recipient Envelopes sent |
     | sms_authentications | SMS authentication charge |
     | saml_authentications | SAML authentication charge |
     | express_signer_certificate | DocuSign Express Certificate charge |
     | personal_signer_certificate | Personal Signer Certificate charge |
     | safe_certificate | SAFE BioPharma Signer Certificate charge |
     | seats | Included active seats charge |
     | open_trust_certificate | OpenTrust Signer Certificate charge |
     *
     * @var string
     */
    protected $chargeName;
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $chargeType;
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $chargeUnitOfMeasure;
    /**
     * @var BillingDiscount[]
     */
    protected $discounts;
    /**
     * @var string
     */
    protected $firstEffectiveDate;
    /**
     * @var string
     */
    protected $includedQuantity;
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $incrementalQuantity;
    /**
     * @var string
     */
    protected $lastEffectiveDate;
    /**
     * @var BillingPrice[]
     */
    protected $prices;
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $unitPrice;
    /**
     * @var string
     */
    protected $usedQuantity;

    /**
     * Reserved: TBD.
     *
     * @return string
     */
    public function getAllowedQuantity(): ?string
    {
        return $this->allowedQuantity;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $allowedQuantity
     *
     * @return self
     */
    public function setAllowedQuantity(?string $allowedQuantity): self
    {
        $this->allowedQuantity = $allowedQuantity;

        return $this;
    }

    /**
     * Reserved: TBD.
     *
     * @return string
     */
    public function getBlocked(): ?string
    {
        return $this->blocked;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $blocked
     *
     * @return self
     */
    public function setBlocked(?string $blocked): self
    {
        $this->blocked = $blocked;

        return $this;
    }

    /**
     * Provides information on what services the charge item is for.

     The following table provides a description of the different chargeName values available at this time.

     | chargeName | Description |
     | --- | --- |
     | id_check | ID Check Charge |
     | in_person_signing | In Person Signing charge |
     | envelopes Included | Sent Envelopes for the account |
     | age_verify | Age verification check |
     | ofac | OFAC Check |
     | id_confirm | ID confirmation check |
     | student_authentication | STAN PIN authentication check |
     | wet_sign_fax | Pages for returning signed documents by fax |
     | attachment_fax | Pages for returning attachments by fax |
     | phone_authentication | Phone authentication charge |
     | powerforms | PowerForm envelopes sent |
     | signer_payments | Payment processing charge |
     | outbound_fax | Send by fax charge |
     | bulk_recipient_envelopes | Bulk Recipient Envelopes sent |
     | sms_authentications | SMS authentication charge |
     | saml_authentications | SAML authentication charge |
     | express_signer_certificate | DocuSign Express Certificate charge |
     | personal_signer_certificate | Personal Signer Certificate charge |
     | safe_certificate | SAFE BioPharma Signer Certificate charge |
     | seats | Included active seats charge |
     | open_trust_certificate | OpenTrust Signer Certificate charge |
     *
     * @return string
     */
    public function getChargeName(): ?string
    {
        return $this->chargeName;
    }

    /**
     * Provides information on what services the charge item is for.

     The following table provides a description of the different chargeName values available at this time.

     | chargeName | Description |
     | --- | --- |
     | id_check | ID Check Charge |
     | in_person_signing | In Person Signing charge |
     | envelopes Included | Sent Envelopes for the account |
     | age_verify | Age verification check |
     | ofac | OFAC Check |
     | id_confirm | ID confirmation check |
     | student_authentication | STAN PIN authentication check |
     | wet_sign_fax | Pages for returning signed documents by fax |
     | attachment_fax | Pages for returning attachments by fax |
     | phone_authentication | Phone authentication charge |
     | powerforms | PowerForm envelopes sent |
     | signer_payments | Payment processing charge |
     | outbound_fax | Send by fax charge |
     | bulk_recipient_envelopes | Bulk Recipient Envelopes sent |
     | sms_authentications | SMS authentication charge |
     | saml_authentications | SAML authentication charge |
     | express_signer_certificate | DocuSign Express Certificate charge |
     | personal_signer_certificate | Personal Signer Certificate charge |
     | safe_certificate | SAFE BioPharma Signer Certificate charge |
     | seats | Included active seats charge |
     | open_trust_certificate | OpenTrust Signer Certificate charge |
     *
     * @param string $chargeName
     *
     * @return self
     */
    public function setChargeName(?string $chargeName): self
    {
        $this->chargeName = $chargeName;

        return $this;
    }

    /**
     * Reserved: TBD.
     *
     * @return string
     */
    public function getChargeType(): ?string
    {
        return $this->chargeType;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $chargeType
     *
     * @return self
     */
    public function setChargeType(?string $chargeType): self
    {
        $this->chargeType = $chargeType;

        return $this;
    }

    /**
     * Reserved: TBD.
     *
     * @return string
     */
    public function getChargeUnitOfMeasure(): ?string
    {
        return $this->chargeUnitOfMeasure;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $chargeUnitOfMeasure
     *
     * @return self
     */
    public function setChargeUnitOfMeasure(?string $chargeUnitOfMeasure): self
    {
        $this->chargeUnitOfMeasure = $chargeUnitOfMeasure;

        return $this;
    }

    /**
     * @return BillingDiscount[]
     */
    public function getDiscounts(): ?array
    {
        return $this->discounts;
    }

    /**
     * @param BillingDiscount[] $discounts
     *
     * @return self
     */
    public function setDiscounts(?array $discounts): self
    {
        $this->discounts = $discounts;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstEffectiveDate(): ?string
    {
        return $this->firstEffectiveDate;
    }

    /**
     * @param string $firstEffectiveDate
     *
     * @return self
     */
    public function setFirstEffectiveDate(?string $firstEffectiveDate): self
    {
        $this->firstEffectiveDate = $firstEffectiveDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getIncludedQuantity(): ?string
    {
        return $this->includedQuantity;
    }

    /**
     * @param string $includedQuantity
     *
     * @return self
     */
    public function setIncludedQuantity(?string $includedQuantity): self
    {
        $this->includedQuantity = $includedQuantity;

        return $this;
    }

    /**
     * Reserved: TBD.
     *
     * @return string
     */
    public function getIncrementalQuantity(): ?string
    {
        return $this->incrementalQuantity;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $incrementalQuantity
     *
     * @return self
     */
    public function setIncrementalQuantity(?string $incrementalQuantity): self
    {
        $this->incrementalQuantity = $incrementalQuantity;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastEffectiveDate(): ?string
    {
        return $this->lastEffectiveDate;
    }

    /**
     * @param string $lastEffectiveDate
     *
     * @return self
     */
    public function setLastEffectiveDate(?string $lastEffectiveDate): self
    {
        $this->lastEffectiveDate = $lastEffectiveDate;

        return $this;
    }

    /**
     * @return BillingPrice[]
     */
    public function getPrices(): ?array
    {
        return $this->prices;
    }

    /**
     * @param BillingPrice[] $prices
     *
     * @return self
     */
    public function setPrices(?array $prices): self
    {
        $this->prices = $prices;

        return $this;
    }

    /**
     * Reserved: TBD.
     *
     * @return string
     */
    public function getUnitPrice(): ?string
    {
        return $this->unitPrice;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $unitPrice
     *
     * @return self
     */
    public function setUnitPrice(?string $unitPrice): self
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }

    /**
     * @return string
     */
    public function getUsedQuantity(): ?string
    {
        return $this->usedQuantity;
    }

    /**
     * @param string $usedQuantity
     *
     * @return self
     */
    public function setUsedQuantity(?string $usedQuantity): self
    {
        $this->usedQuantity = $usedQuantity;

        return $this;
    }
}
