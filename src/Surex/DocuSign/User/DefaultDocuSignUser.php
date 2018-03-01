<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\User;

/**
 * Class DefaultDocuSignUser.
 *
 * @author Wesley O. Nichols <spanishwes@gmail.com>
 */
class DefaultDocuSignUser implements DocuSignUser
{
    private $userId;

    /**
     * DocuUserProvider constructor.
     *
     * @param string $userId
     */
    public function __construct(string $userId)
    {
        $this->userId = $userId;
    }

    /**
     * {@inheritdoc}
     */
    public function getDocuSignUserId(): string
    {
        return $this->userId;
    }

    /**
     * {@inheritdoc}
     */
    public function setDocuSignUserId(string $id)
    {
        $this->userId = $id;
    }
}
