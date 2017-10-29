<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class ChunkedUploadRequest
{
    /**
     * @var string
     */
    protected $chunkedUploadId;
    /**
     * @var string
     */
    protected $data;

    /**
     * @return string
     */
    public function getChunkedUploadId()
    {
        return $this->chunkedUploadId;
    }

    /**
     * @param string $chunkedUploadId
     *
     * @return self
     */
    public function setChunkedUploadId($chunkedUploadId = null)
    {
        $this->chunkedUploadId = $chunkedUploadId;

        return $this;
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param string $data
     *
     * @return self
     */
    public function setData($data = null)
    {
        $this->data = $data;

        return $this;
    }
}
