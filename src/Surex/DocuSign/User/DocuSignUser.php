<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\User;

/**
 * Interface DocuSignUser.
 *
 * @author Wesley O. Nichols <spanishwes@gmail.com>
 */
interface DocuSignUser
{
    /**
     * @return string
     */
    public function getDocuSignUserId(): string;

    /**
     * @param string $id
     */
    public function setDocuSignUserId(string $id);
}
