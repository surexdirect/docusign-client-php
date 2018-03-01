<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class NewAccountSummary
{
    /**
     * The account ID associated with the envelope.
     *
     * @var string
     */
    protected $accountId;
    /**
     * The GUID associated with the account ID.
     *
     * @var string
     */
    protected $accountIdGuid;
    /**
     * The account name for the new account.
     *
     * @var string
     */
    protected $accountName;
    /**
     * Contains a token that can be used for authentication in API calls instead of using the user name and password.
     *
     * @var string
     */
    protected $apiPassword;
    /**
     * The URL that should be used for successive calls to this account. It includes the protocal (https), the DocuSign server where the account is located, and the account number. Use this Url to make API calls against this account. Many of the API calls provide Uri's that are relative to this baseUrl.
     *
     * @var string
     */
    protected $baseUrl;
    /**
     * Contains information about a preview billing plan.
     *
     * @var BillingPlanPreview
     */
    protected $billingPlanPreview;
    /**
     * Specifies the user ID of the new user.
     *
     * @var string
     */
    protected $userId;

    /**
     * The account ID associated with the envelope.
     *
     * @return string
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    /**
     * The account ID associated with the envelope.
     *
     * @param string $accountId
     *
     * @return self
     */
    public function setAccountId(?string $accountId): self
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * The GUID associated with the account ID.
     *
     * @return string
     */
    public function getAccountIdGuid(): ?string
    {
        return $this->accountIdGuid;
    }

    /**
     * The GUID associated with the account ID.
     *
     * @param string $accountIdGuid
     *
     * @return self
     */
    public function setAccountIdGuid(?string $accountIdGuid): self
    {
        $this->accountIdGuid = $accountIdGuid;

        return $this;
    }

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
     * Contains a token that can be used for authentication in API calls instead of using the user name and password.
     *
     * @return string
     */
    public function getApiPassword(): ?string
    {
        return $this->apiPassword;
    }

    /**
     * Contains a token that can be used for authentication in API calls instead of using the user name and password.
     *
     * @param string $apiPassword
     *
     * @return self
     */
    public function setApiPassword(?string $apiPassword): self
    {
        $this->apiPassword = $apiPassword;

        return $this;
    }

    /**
     * The URL that should be used for successive calls to this account. It includes the protocal (https), the DocuSign server where the account is located, and the account number. Use this Url to make API calls against this account. Many of the API calls provide Uri's that are relative to this baseUrl.
     *
     * @return string
     */
    public function getBaseUrl(): ?string
    {
        return $this->baseUrl;
    }

    /**
     * The URL that should be used for successive calls to this account. It includes the protocal (https), the DocuSign server where the account is located, and the account number. Use this Url to make API calls against this account. Many of the API calls provide Uri's that are relative to this baseUrl.
     *
     * @param string $baseUrl
     *
     * @return self
     */
    public function setBaseUrl(?string $baseUrl): self
    {
        $this->baseUrl = $baseUrl;

        return $this;
    }

    /**
     * Contains information about a preview billing plan.
     *
     * @return BillingPlanPreview
     */
    public function getBillingPlanPreview(): ?BillingPlanPreview
    {
        return $this->billingPlanPreview;
    }

    /**
     * Contains information about a preview billing plan.
     *
     * @param BillingPlanPreview $billingPlanPreview
     *
     * @return self
     */
    public function setBillingPlanPreview(?BillingPlanPreview $billingPlanPreview): self
    {
        $this->billingPlanPreview = $billingPlanPreview;

        return $this;
    }

    /**
     * Specifies the user ID of the new user.
     *
     * @return string
     */
    public function getUserId(): ?string
    {
        return $this->userId;
    }

    /**
     * Specifies the user ID of the new user.
     *
     * @param string $userId
     *
     * @return self
     */
    public function setUserId(?string $userId): self
    {
        $this->userId = $userId;

        return $this;
    }
}
