<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class NewAccountSummary
{
    /**
     * @var string
     */
    protected $accountId;
    /**
     * @var string
     */
    protected $accountIdGuid;
    /**
     * @var string
     */
    protected $accountName;
    /**
     * @var string
     */
    protected $apiPassword;
    /**
     * @var string
     */
    protected $baseUrl;
    /**
     * @var BillingPlanPreview
     */
    protected $billingPlanPreview;
    /**
     * @var string
     */
    protected $userId;

    /**
     * @return string
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param string $accountId
     *
     * @return self
     */
    public function setAccountId($accountId = null)
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccountIdGuid()
    {
        return $this->accountIdGuid;
    }

    /**
     * @param string $accountIdGuid
     *
     * @return self
     */
    public function setAccountIdGuid($accountIdGuid = null)
    {
        $this->accountIdGuid = $accountIdGuid;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * @param string $accountName
     *
     * @return self
     */
    public function setAccountName($accountName = null)
    {
        $this->accountName = $accountName;

        return $this;
    }

    /**
     * @return string
     */
    public function getApiPassword()
    {
        return $this->apiPassword;
    }

    /**
     * @param string $apiPassword
     *
     * @return self
     */
    public function setApiPassword($apiPassword = null)
    {
        $this->apiPassword = $apiPassword;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->baseUrl;
    }

    /**
     * @param string $baseUrl
     *
     * @return self
     */
    public function setBaseUrl($baseUrl = null)
    {
        $this->baseUrl = $baseUrl;

        return $this;
    }

    /**
     * @return BillingPlanPreview
     */
    public function getBillingPlanPreview()
    {
        return $this->billingPlanPreview;
    }

    /**
     * @param BillingPlanPreview $billingPlanPreview
     *
     * @return self
     */
    public function setBillingPlanPreview(BillingPlanPreview $billingPlanPreview = null)
    {
        $this->billingPlanPreview = $billingPlanPreview;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     *
     * @return self
     */
    public function setUserId($userId = null)
    {
        $this->userId = $userId;

        return $this;
    }
}
