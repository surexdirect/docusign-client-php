<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\User;

/**
 * Class DocuUserProvider.
 *
 * @author Wesley O. Nichols <spanishwes@gmail.com>
 */
class DocuUserProvider implements DocuSignUserProvider
{
    private $userId;

    /**
     * DocuUserProvider constructor.
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
