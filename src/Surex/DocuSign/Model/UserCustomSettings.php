<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class UserCustomSettings
{
    /**
     * @var NameValue[]
     */
    protected $customSettings;

    /**
     * @return NameValue[]
     */
    public function getCustomSettings()
    {
        return $this->customSettings;
    }

    /**
     * @param NameValue[] $customSettings
     *
     * @return self
     */
    public function setCustomSettings(array $customSettings = null)
    {
        $this->customSettings = $customSettings;

        return $this;
    }
}
