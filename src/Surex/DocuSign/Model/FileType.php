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
     * @var string
     */
    protected $mimeType;

    /**
     * @return string
     */
    public function getFileExtension()
    {
        return $this->fileExtension;
    }

    /**
     * @param string $fileExtension
     *
     * @return self
     */
    public function setFileExtension($fileExtension = null)
    {
        $this->fileExtension = $fileExtension;

        return $this;
    }

    /**
     * @return string
     */
    public function getMimeType()
    {
        return $this->mimeType;
    }

    /**
     * @param string $mimeType
     *
     * @return self
     */
    public function setMimeType($mimeType = null)
    {
        $this->mimeType = $mimeType;

        return $this;
    }
}
