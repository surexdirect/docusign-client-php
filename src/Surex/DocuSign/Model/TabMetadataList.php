<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class TabMetadataList
{
    /**
     * @var CustomTabs[]
     */
    protected $tabs;

    /**
     * @return CustomTabs[]
     */
    public function getTabs(): ?array
    {
        return $this->tabs;
    }

    /**
     * @param CustomTabs[] $tabs
     *
     * @return self
     */
    public function setTabs(?array $tabs): self
    {
        $this->tabs = $tabs;

        return $this;
    }
}
