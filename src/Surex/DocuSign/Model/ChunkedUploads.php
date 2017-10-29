<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class ChunkedUploads
{
    /**
     * @var string
     */
    protected $checksum;
    /**
     * @var string
     */
    protected $chunkedUploadId;
    /**
     * @var ChunkedUploadPart[]
     */
    protected $chunkedUploadParts;
    /**
     * @var string
     */
    protected $chunkedUploadUri;
    /**
     * @var string
     */
    protected $committed;
    /**
     * @var string
     */
    protected $expirationDateTime;
    /**
     * @var string
     */
    protected $maxChunkedUploadParts;
    /**
     * @var string
     */
    protected $maxTotalSize;
    /**
     * @var string
     */
    protected $totalSize;

    /**
     * @return string
     */
    public function getChecksum()
    {
        return $this->checksum;
    }

    /**
     * @param string $checksum
     *
     * @return self
     */
    public function setChecksum($checksum = null)
    {
        $this->checksum = $checksum;

        return $this;
    }

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
     * @return ChunkedUploadPart[]
     */
    public function getChunkedUploadParts()
    {
        return $this->chunkedUploadParts;
    }

    /**
     * @param ChunkedUploadPart[] $chunkedUploadParts
     *
     * @return self
     */
    public function setChunkedUploadParts(array $chunkedUploadParts = null)
    {
        $this->chunkedUploadParts = $chunkedUploadParts;

        return $this;
    }

    /**
     * @return string
     */
    public function getChunkedUploadUri()
    {
        return $this->chunkedUploadUri;
    }

    /**
     * @param string $chunkedUploadUri
     *
     * @return self
     */
    public function setChunkedUploadUri($chunkedUploadUri = null)
    {
        $this->chunkedUploadUri = $chunkedUploadUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getCommitted()
    {
        return $this->committed;
    }

    /**
     * @param string $committed
     *
     * @return self
     */
    public function setCommitted($committed = null)
    {
        $this->committed = $committed;

        return $this;
    }

    /**
     * @return string
     */
    public function getExpirationDateTime()
    {
        return $this->expirationDateTime;
    }

    /**
     * @param string $expirationDateTime
     *
     * @return self
     */
    public function setExpirationDateTime($expirationDateTime = null)
    {
        $this->expirationDateTime = $expirationDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getMaxChunkedUploadParts()
    {
        return $this->maxChunkedUploadParts;
    }

    /**
     * @param string $maxChunkedUploadParts
     *
     * @return self
     */
    public function setMaxChunkedUploadParts($maxChunkedUploadParts = null)
    {
        $this->maxChunkedUploadParts = $maxChunkedUploadParts;

        return $this;
    }

    /**
     * @return string
     */
    public function getMaxTotalSize()
    {
        return $this->maxTotalSize;
    }

    /**
     * @param string $maxTotalSize
     *
     * @return self
     */
    public function setMaxTotalSize($maxTotalSize = null)
    {
        $this->maxTotalSize = $maxTotalSize;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotalSize()
    {
        return $this->totalSize;
    }

    /**
     * @param string $totalSize
     *
     * @return self
     */
    public function setTotalSize($totalSize = null)
    {
        $this->totalSize = $totalSize;

        return $this;
    }
}
