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
    private $docuSignUser;

    /**
     * DocuUserProvider constructor.
     *
     * @param string $userId
     */
    public function __construct($userId)
    {
        $this->docuSignUser = new DefaultDocuSignUser($userId);
    }

    public function getDocuSignUser()
    {
        return $this->docuSignUser;
    }

    public function connectDocuSignUser(array $info)
    {
        $this->docuSignUser = new DefaultDocuSignUser($info['sub']);
    }
}
