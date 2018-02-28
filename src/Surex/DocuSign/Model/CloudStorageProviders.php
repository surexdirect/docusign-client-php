<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class CloudStorageProviders
{
    /**
     * An Array containing the storage providers associated with the user.
     *
     * @var CloudStorageProvider[]
     */
    protected $storageProviders;

    /**
     * An Array containing the storage providers associated with the user.
     *
     * @return CloudStorageProvider[]
     */
    public function getStorageProviders(): ?array
    {
        return $this->storageProviders;
    }

    /**
     * An Array containing the storage providers associated with the user.
     *
     * @param CloudStorageProvider[] $storageProviders
     *
     * @return self
     */
    public function setStorageProviders(?array $storageProviders): self
    {
        $this->storageProviders = $storageProviders;

        return $this;
    }
}
