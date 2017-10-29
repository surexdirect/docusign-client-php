<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class FileTypeList
{
    /**
     * @var FileType[]
     */
    protected $fileTypes;

    /**
     * @return FileType[]
     */
    public function getFileTypes()
    {
        return $this->fileTypes;
    }

    /**
     * @param FileType[] $fileTypes
     *
     * @return self
     */
    public function setFileTypes(array $fileTypes = null)
    {
        $this->fileTypes = $fileTypes;

        return $this;
    }
}
