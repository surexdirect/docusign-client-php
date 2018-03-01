<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class NewAccountDefinition
{
    /**
     * The account name for the new account.
     *
     * @var string
     */
    protected $accountName;
    /**
     * The list of.
     [account settings][accountsettings]
     that determine
     the features available for the account.
     Note that some features are determined
     by the plan used to create the account and cannot be overridden.

     [accountsettings]: /esign/restapi/Accounts/Accounts/create/#account-settings

     *
     * @var NameValue[]
     */
    protected $accountSettings;
    /**
     * Contains information about an account address.
     *
     * @var AccountAddress
     */
    protected $addressInformation;
    /**
     * @var CreditCardInformation
     */
    protected $creditCardInformation;
    /**
     * The code that identifies the billing plan groups and plans for the new account.
     *
     * @var string
     */
    protected $distributorCode;
    /**
     * The password for the distributorCode.
     *
     * @var string
     */
    protected $distributorPassword;
    /**
     * User management.
     *
     * @var Users
     */
    protected $initialUser;
    /**
     * @var PaymentProcessorInformation
     */
    protected $paymentProcessorInformation;
    /**
     * An object used to identify the features and attributes of the account being created.
     *
     * @var PlanInformation
     */
    protected $planInformation;
    /**
     * A complex type that contains the following information for entering referral and discount information. The following items are included in the referral information (all string content): enableSupport, includedSeats, saleDiscountPercent, saleDiscountAmount, saleDiscountFixedAmount, saleDiscountPeriods, saleDiscountSeatPriceOverride, planStartMonth, referralCode, referrerName, advertisementId, publisherId, shopperId, promoCode, groupMemberId, idType, and industry.

     ###### Note: saleDiscountPercent, saleDiscountAmount, saleDiscountFixedAmount, saleDiscountPeriods, and saleDiscountSeatPriceOverride are reserved for DoucSign use only.
     *
     * @var ReferralInformation
     */
    protected $referralInformation;
    /**
     * Users' social account logins.
     *
     * @var UserSocialAccountLogins
     */
    protected $socialAccountInformation;

    /**
     * The account name for the new account.
     *
     * @return string
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    /**
     * The account name for the new account.
     *
     * @param string $accountName
     *
     * @return self
     */
    public function setAccountName(?string $accountName): self
    {
        $this->accountName = $accountName;

        return $this;
    }

    /**
     * The list of.
     [account settings][accountsettings]
     that determine
     the features available for the account.
     Note that some features are determined
     by the plan used to create the account and cannot be overridden.

     [accountsettings]: /esign/restapi/Accounts/Accounts/create/#account-settings

     *
     * @return NameValue[]
     */
    public function getAccountSettings(): ?array
    {
        return $this->accountSettings;
    }

    /**
     * The list of.
     [account settings][accountsettings]
     that determine
     the features available for the account.
     Note that some features are determined
     by the plan used to create the account and cannot be overridden.

     [accountsettings]: /esign/restapi/Accounts/Accounts/create/#account-settings

     *
     * @param NameValue[] $accountSettings
     *
     * @return self
     */
    public function setAccountSettings(?array $accountSettings): self
    {
        $this->accountSettings = $accountSettings;

        return $this;
    }

    /**
     * Contains information about an account address.
     *
     * @return AccountAddress
     */
    public function getAddressInformation(): ?AccountAddress
    {
        return $this->addressInformation;
    }

    /**
     * Contains information about an account address.
     *
     * @param AccountAddress $addressInformation
     *
     * @return self
     */
    public function setAddressInformation(?AccountAddress $addressInformation): self
    {
        $this->addressInformation = $addressInformation;

        return $this;
    }

    /**
     * @return CreditCardInformation
     */
    public function getCreditCardInformation(): ?CreditCardInformation
    {
        return $this->creditCardInformation;
    }

    /**
     * @param CreditCardInformation $creditCardInformation
     *
     * @return self
     */
    public function setCreditCardInformation(?CreditCardInformation $creditCardInformation): self
    {
        $this->creditCardInformation = $creditCardInformation;

        return $this;
    }

    /**
     * The code that identifies the billing plan groups and plans for the new account.
     *
     * @return string
     */
    public function getDistributorCode(): ?string
    {
        return $this->distributorCode;
    }

    /**
     * The code that identifies the billing plan groups and plans for the new account.
     *
     * @param string $distributorCode
     *
     * @return self
     */
    public function setDistributorCode(?string $distributorCode): self
    {
        $this->distributorCode = $distributorCode;

        return $this;
    }

    /**
     * The password for the distributorCode.
     *
     * @return string
     */
    public function getDistributorPassword(): ?string
    {
        return $this->distributorPassword;
    }

    /**
     * The password for the distributorCode.
     *
     * @param string $distributorPassword
     *
     * @return self
     */
    public function setDistributorPassword(?string $distributorPassword): self
    {
        $this->distributorPassword = $distributorPassword;

        return $this;
    }

    /**
     * User management.
     *
     * @return Users
     */
    public function getInitialUser(): ?Users
    {
        return $this->initialUser;
    }

    /**
     * User management.
     *
     * @param Users $initialUser
     *
     * @return self
     */
    public function setInitialUser(?Users $initialUser): self
    {
        $this->initialUser = $initialUser;

        return $this;
    }

    /**
     * @return PaymentProcessorInformation
     */
    public function getPaymentProcessorInformation(): ?PaymentProcessorInformation
    {
        return $this->paymentProcessorInformation;
    }

    /**
     * @param PaymentProcessorInformation $paymentProcessorInformation
     *
     * @return self
     */
    public function setPaymentProcessorInformation(?PaymentProcessorInformation $paymentProcessorInformation): self
    {
        $this->paymentProcessorInformation = $paymentProcessorInformation;

        return $this;
    }

    /**
     * An object used to identify the features and attributes of the account being created.
     *
     * @return PlanInformation
     */
    public function getPlanInformation(): ?PlanInformation
    {
        return $this->planInformation;
    }

    /**
     * An object used to identify the features and attributes of the account being created.
     *
     * @param PlanInformation $planInformation
     *
     * @return self
     */
    public function setPlanInformation(?PlanInformation $planInformation): self
    {
        $this->planInformation = $planInformation;

        return $this;
    }

    /**
     * A complex type that contains the following information for entering referral and discount information. The following items are included in the referral information (all string content): enableSupport, includedSeats, saleDiscountPercent, saleDiscountAmount, saleDiscountFixedAmount, saleDiscountPeriods, saleDiscountSeatPriceOverride, planStartMonth, referralCode, referrerName, advertisementId, publisherId, shopperId, promoCode, groupMemberId, idType, and industry.

     ###### Note: saleDiscountPercent, saleDiscountAmount, saleDiscountFixedAmount, saleDiscountPeriods, and saleDiscountSeatPriceOverride are reserved for DoucSign use only.
     *
     * @return ReferralInformation
     */
    public function getReferralInformation(): ?ReferralInformation
    {
        return $this->referralInformation;
    }

    /**
     * A complex type that contains the following information for entering referral and discount information. The following items are included in the referral information (all string content): enableSupport, includedSeats, saleDiscountPercent, saleDiscountAmount, saleDiscountFixedAmount, saleDiscountPeriods, saleDiscountSeatPriceOverride, planStartMonth, referralCode, referrerName, advertisementId, publisherId, shopperId, promoCode, groupMemberId, idType, and industry.

     ###### Note: saleDiscountPercent, saleDiscountAmount, saleDiscountFixedAmount, saleDiscountPeriods, and saleDiscountSeatPriceOverride are reserved for DoucSign use only.
     *
     * @param ReferralInformation $referralInformation
     *
     * @return self
     */
    public function setReferralInformation(?ReferralInformation $referralInformation): self
    {
        $this->referralInformation = $referralInformation;

        return $this;
    }

    /**
     * Users' social account logins.
     *
     * @return UserSocialAccountLogins
     */
    public function getSocialAccountInformation(): ?UserSocialAccountLogins
    {
        return $this->socialAccountInformation;
    }

    /**
     * Users' social account logins.
     *
     * @param UserSocialAccountLogins $socialAccountInformation
     *
     * @return self
     */
    public function setSocialAccountInformation(?UserSocialAccountLogins $socialAccountInformation): self
    {
        $this->socialAccountInformation = $socialAccountInformation;

        return $this;
    }
}
