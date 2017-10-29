<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
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
    public function getTabs()
    {
        return $this->tabs;
    }

    /**
     * @param CustomTabs[] $tabs
     *
     * @return self
     */
    public function setTabs(array $tabs = null)
    {
        $this->tabs = $tabs;

        return $this;
    }
}
