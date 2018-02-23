<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class FileTypeList
{
    /**
     * A collection of file types.
     *
     * @var FileType[]
     */
    protected $fileTypes;

    /**
     * A collection of file types.
     *
     * @return FileType[]
     */
    public function getFileTypes(): ?array
    {
        return $this->fileTypes;
    }

    /**
     * A collection of file types.
     *
     * @param FileType[] $fileTypes
     *
     * @return self
     */
    public function setFileTypes(?array $fileTypes): self
    {
        $this->fileTypes = $fileTypes;

        return $this;
    }
}
