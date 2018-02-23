<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\User;

/**
 * Interface DocuSignUserProvider.
 *
 * @author Wesley O. Nichols <spanishwes@gmail.com>
 */
interface DocuSignUserProvider
{
    /**
     * @return DocuSignUser
     */
    public function getDocuSignUser();

    /**
     * @param array $info {
     *
     *      @var string $sub                    DocuSign UserId (uuid)
     *      @var string $name                   Concatenated Name
     *      @var string $given_name             First Name
     *      @var string $family_name            Last Name
     *      @var string $created                Date (ISO8601)  ex: 2017-09-14T12:34:40.78
     *      @var string $email                  Email Address
     *      @var array $accounts [{             Array of objects
     *          @var string $account_id         Account ID (uuid)
     *          @var int $is_default            Default account indicator (tinyint)
     *          @var string $account_name       Name on the Account
     *          @var string $base_uri           Base URI for API requests
     *      }]
     * }
     *
     * @return bool
     */
    public function connectDocuSignUser(array $info);
}
