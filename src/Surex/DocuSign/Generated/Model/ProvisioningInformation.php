<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class ProvisioningInformation
{
    /**
     * @var string
     */
    protected $defaultConnectionId;
    /**
     * @var string
     */
    protected $defaultPlanId;
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
     * @var string
     */
    protected $passwordRuleText;
    /**
     * @var string
     */
    protected $planPromotionText;
    /**
     * @var string
     */
    protected $purchaseOrderOrPromAllowed;

    /**
     * @return string
     */
    public function getDefaultConnectionId(): ?string
    {
        return $this->defaultConnectionId;
    }

    /**
     * @param string $defaultConnectionId
     *
     * @return self
     */
    public function setDefaultConnectionId(?string $defaultConnectionId): self
    {
        $this->defaultConnectionId = $defaultConnectionId;

        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultPlanId(): ?string
    {
        return $this->defaultPlanId;
    }

    /**
     * @param string $defaultPlanId
     *
     * @return self
     */
    public function setDefaultPlanId(?string $defaultPlanId): self
    {
        $this->defaultPlanId = $defaultPlanId;

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
     * @return string
     */
    public function getPasswordRuleText(): ?string
    {
        return $this->passwordRuleText;
    }

    /**
     * @param string $passwordRuleText
     *
     * @return self
     */
    public function setPasswordRuleText(?string $passwordRuleText): self
    {
        $this->passwordRuleText = $passwordRuleText;

        return $this;
    }

    /**
     * @return string
     */
    public function getPlanPromotionText(): ?string
    {
        return $this->planPromotionText;
    }

    /**
     * @param string $planPromotionText
     *
     * @return self
     */
    public function setPlanPromotionText(?string $planPromotionText): self
    {
        $this->planPromotionText = $planPromotionText;

        return $this;
    }

    /**
     * @return string
     */
    public function getPurchaseOrderOrPromAllowed(): ?string
    {
        return $this->purchaseOrderOrPromAllowed;
    }

    /**
     * @param string $purchaseOrderOrPromAllowed
     *
     * @return self
     */
    public function setPurchaseOrderOrPromAllowed(?string $purchaseOrderOrPromAllowed): self
    {
        $this->purchaseOrderOrPromAllowed = $purchaseOrderOrPromAllowed;

        return $this;
    }
}
