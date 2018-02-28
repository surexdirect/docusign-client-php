<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
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
    public function getLanguages(): ?array
    {
        return $this->languages;
    }

    /**
     * @param NameValue[] $languages
     *
     * @return self
     */
    public function setLanguages(?array $languages): self
    {
        $this->languages = $languages;

        return $this;
    }
}
