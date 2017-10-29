<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Folders
{
    /**
     * @var Folder[]
     */
    protected $folders;

    /**
     * @return Folder[]
     */
    public function getFolders()
    {
        return $this->folders;
    }

    /**
     * @param Folder[] $folders
     *
     * @return self
     */
    public function setFolders(array $folders = null)
    {
        $this->folders = $folders;

        return $this;
    }
}
