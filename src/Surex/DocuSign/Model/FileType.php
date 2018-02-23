<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class FileType
{
    /**
     * @var string
     */
    protected $fileExtension;
    /**
     * The mime-type of a file type listed in a fileTypes collection.
     *
     * @var string
     */
    protected $mimeType;

    /**
     * @return string
     */
    public function getFileExtension(): ?string
    {
        return $this->fileExtension;
    }

    /**
     * @param string $fileExtension
     *
     * @return self
     */
    public function setFileExtension(?string $fileExtension): self
    {
        $this->fileExtension = $fileExtension;

        return $this;
    }

    /**
     * The mime-type of a file type listed in a fileTypes collection.
     *
     * @return string
     */
    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }

    /**
     * The mime-type of a file type listed in a fileTypes collection.
     *
     * @param string $mimeType
     *
     * @return self
     */
    public function setMimeType(?string $mimeType): self
    {
        $this->mimeType = $mimeType;

        return $this;
    }
}
