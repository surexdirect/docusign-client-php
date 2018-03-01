<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class UserCustomSettings
{
    /**
     * The name/value pair information for the user custom setting.
     *
     * @var NameValue[]
     */
    protected $customSettings;

    /**
     * The name/value pair information for the user custom setting.
     *
     * @return NameValue[]
     */
    public function getCustomSettings(): ?array
    {
        return $this->customSettings;
    }

    /**
     * The name/value pair information for the user custom setting.
     *
     * @param NameValue[] $customSettings
     *
     * @return self
     */
    public function setCustomSettings(?array $customSettings): self
    {
        $this->customSettings = $customSettings;

        return $this;
    }
}
