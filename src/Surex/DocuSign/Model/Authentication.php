<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Authentication
{
    /**
     * Contains a token that can be used for authentication in API calls instead of using the user name and password. Only returned if the `api_password=true` query string is added to the URL.
     *
     * @var string
     */
    protected $apiPassword;
    /**
     * The list of accounts that authenticating user is a member of.
     *
     * @var LoginAccount[]
     */
    protected $loginAccounts;

    /**
     * Contains a token that can be used for authentication in API calls instead of using the user name and password. Only returned if the `api_password=true` query string is added to the URL.
     *
     * @return string
     */
    public function getApiPassword(): ?string
    {
        return $this->apiPassword;
    }

    /**
     * Contains a token that can be used for authentication in API calls instead of using the user name and password. Only returned if the `api_password=true` query string is added to the URL.
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
     * The list of accounts that authenticating user is a member of.
     *
     * @return LoginAccount[]
     */
    public function getLoginAccounts(): ?array
    {
        return $this->loginAccounts;
    }

    /**
     * The list of accounts that authenticating user is a member of.
     *
     * @param LoginAccount[] $loginAccounts
     *
     * @return self
     */
    public function setLoginAccounts(?array $loginAccounts): self
    {
        $this->loginAccounts = $loginAccounts;

        return $this;
    }
}
