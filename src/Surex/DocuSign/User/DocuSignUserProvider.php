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
     * @return string
     */
    public function getUserId();
}
