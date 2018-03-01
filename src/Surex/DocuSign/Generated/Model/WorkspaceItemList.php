<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class WorkspaceItemList
{
    /**
     * @var WorkspaceItems[]
     */
    protected $items;

    /**
     * @return WorkspaceItems[]
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * @param WorkspaceItems[] $items
     *
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;

        return $this;
    }
}
