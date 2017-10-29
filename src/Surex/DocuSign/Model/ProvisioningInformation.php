<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

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
     * @var string
     */
    protected $distributorCode;
    /**
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
    public function getDefaultConnectionId()
    {
        return $this->defaultConnectionId;
    }

    /**
     * @param string $defaultConnectionId
     *
     * @return self
     */
    public function setDefaultConnectionId($defaultConnectionId = null)
    {
        $this->defaultConnectionId = $defaultConnectionId;

        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultPlanId()
    {
        return $this->defaultPlanId;
    }

    /**
     * @param string $defaultPlanId
     *
     * @return self
     */
    public function setDefaultPlanId($defaultPlanId = null)
    {
        $this->defaultPlanId = $defaultPlanId;

        return $this;
    }

    /**
     * @return string
     */
    public function getDistributorCode()
    {
        return $this->distributorCode;
    }

    /**
     * @param string $distributorCode
     *
     * @return self
     */
    public function setDistributorCode($distributorCode = null)
    {
        $this->distributorCode = $distributorCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getDistributorPassword()
    {
        return $this->distributorPassword;
    }

    /**
     * @param string $distributorPassword
     *
     * @return self
     */
    public function setDistributorPassword($distributorPassword = null)
    {
        $this->distributorPassword = $distributorPassword;

        return $this;
    }

    /**
     * @return string
     */
    public function getPasswordRuleText()
    {
        return $this->passwordRuleText;
    }

    /**
     * @param string $passwordRuleText
     *
     * @return self
     */
    public function setPasswordRuleText($passwordRuleText = null)
    {
        $this->passwordRuleText = $passwordRuleText;

        return $this;
    }

    /**
     * @return string
     */
    public function getPlanPromotionText()
    {
        return $this->planPromotionText;
    }

    /**
     * @param string $planPromotionText
     *
     * @return self
     */
    public function setPlanPromotionText($planPromotionText = null)
    {
        $this->planPromotionText = $planPromotionText;

        return $this;
    }

    /**
     * @return string
     */
    public function getPurchaseOrderOrPromAllowed()
    {
        return $this->purchaseOrderOrPromAllowed;
    }

    /**
     * @param string $purchaseOrderOrPromAllowed
     *
     * @return self
     */
    public function setPurchaseOrderOrPromAllowed($purchaseOrderOrPromAllowed = null)
    {
        $this->purchaseOrderOrPromAllowed = $purchaseOrderOrPromAllowed;

        return $this;
    }
}
