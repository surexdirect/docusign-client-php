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
    public function __construct($userId)
    {
        $this->userId = $userId;
    }

    /**
     * {@inheritdoc}
     */
    public function getDocuSignUserId()
    {
        return $this->userId;
    }

    /**
     * {@inheritdoc}
     */
    public function setDocuSignUserId($id)
    {
        $this->userId = $id;
    }
}
