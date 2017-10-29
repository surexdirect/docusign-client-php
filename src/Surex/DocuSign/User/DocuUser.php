<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\User;

/**
 * Class DocuUser.
 *
 * @author Wesley O. Nichols <spanishwes@gmail.com>
 */
class DocuUser implements DocuSignUser
{
    private $userId;

    /**
     * DocuUser constructor.
     *
     * @param string $userId
     */
    public function __construct($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }
}
