<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

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
    public function getChecksum(): ?string
    {
        return $this->checksum;
    }

    /**
     * @param string $checksum
     *
     * @return self
     */
    public function setChecksum(?string $checksum): self
    {
        $this->checksum = $checksum;

        return $this;
    }

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
     * @return ChunkedUploadPart[]
     */
    public function getChunkedUploadParts(): ?array
    {
        return $this->chunkedUploadParts;
    }

    /**
     * @param ChunkedUploadPart[] $chunkedUploadParts
     *
     * @return self
     */
    public function setChunkedUploadParts(?array $chunkedUploadParts): self
    {
        $this->chunkedUploadParts = $chunkedUploadParts;

        return $this;
    }

    /**
     * @return string
     */
    public function getChunkedUploadUri(): ?string
    {
        return $this->chunkedUploadUri;
    }

    /**
     * @param string $chunkedUploadUri
     *
     * @return self
     */
    public function setChunkedUploadUri(?string $chunkedUploadUri): self
    {
        $this->chunkedUploadUri = $chunkedUploadUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getCommitted(): ?string
    {
        return $this->committed;
    }

    /**
     * @param string $committed
     *
     * @return self
     */
    public function setCommitted(?string $committed): self
    {
        $this->committed = $committed;

        return $this;
    }

    /**
     * @return string
     */
    public function getExpirationDateTime(): ?string
    {
        return $this->expirationDateTime;
    }

    /**
     * @param string $expirationDateTime
     *
     * @return self
     */
    public function setExpirationDateTime(?string $expirationDateTime): self
    {
        $this->expirationDateTime = $expirationDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getMaxChunkedUploadParts(): ?string
    {
        return $this->maxChunkedUploadParts;
    }

    /**
     * @param string $maxChunkedUploadParts
     *
     * @return self
     */
    public function setMaxChunkedUploadParts(?string $maxChunkedUploadParts): self
    {
        $this->maxChunkedUploadParts = $maxChunkedUploadParts;

        return $this;
    }

    /**
     * @return string
     */
    public function getMaxTotalSize(): ?string
    {
        return $this->maxTotalSize;
    }

    /**
     * @param string $maxTotalSize
     *
     * @return self
     */
    public function setMaxTotalSize(?string $maxTotalSize): self
    {
        $this->maxTotalSize = $maxTotalSize;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotalSize(): ?string
    {
        return $this->totalSize;
    }

    /**
     * @param string $totalSize
     *
     * @return self
     */
    public function setTotalSize(?string $totalSize): self
    {
        $this->totalSize = $totalSize;

        return $this;
    }
}
