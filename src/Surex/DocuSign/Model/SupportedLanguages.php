<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class SupportedLanguages
{
    /**
     * @var NameValue[]
     */
    protected $languages;

    /**
     * @return NameValue[]
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * @param NameValue[] $languages
     *
     * @return self
     */
    public function setLanguages(array $languages = null)
    {
        $this->languages = $languages;

        return $this;
    }
}
