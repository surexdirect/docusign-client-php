<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class WorkspaceItemList
{
    /**
     * @var WorkspaceItems[]
     */
    protected $items;

    /**
     * @return WorkspaceItems[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param WorkspaceItems[] $items
     *
     * @return self
     */
    public function setItems(array $items = null)
    {
        $this->items = $items;

        return $this;
    }
}
