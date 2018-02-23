<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Folders
{
    /**
     * A collection of folder objects returned in a response.
     *
     * @var Folder[]
     */
    protected $folders;

    /**
     * A collection of folder objects returned in a response.
     *
     * @return Folder[]
     */
    public function getFolders(): ?array
    {
        return $this->folders;
    }

    /**
     * A collection of folder objects returned in a response.
     *
     * @param Folder[] $folders
     *
     * @return self
     */
    public function setFolders(?array $folders): self
    {
        $this->folders = $folders;

        return $this;
    }
}
