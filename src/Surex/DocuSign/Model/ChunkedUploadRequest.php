<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
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
    public function getChunkedUploadId(): ?string
    {
        return $this->chunkedUploadId;
    }

    /**
     * @param string $chunkedUploadId
     *
     * @return self
     */
    public function setChunkedUploadId(?string $chunkedUploadId): self
    {
        $this->chunkedUploadId = $chunkedUploadId;

        return $this;
    }

    /**
     * @return string
     */
    public function getData(): ?string
    {
        return $this->data;
    }

    /**
     * @param string $data
     *
     * @return self
     */
    public function setData(?string $data): self
    {
        $this->data = $data;

        return $this;
    }
}
