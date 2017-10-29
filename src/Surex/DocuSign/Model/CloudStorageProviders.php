<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class CloudStorageProviders
{
    /**
     * @var CloudStorageProvider[]
     */
    protected $storageProviders;

    /**
     * @return CloudStorageProvider[]
     */
    public function getStorageProviders()
    {
        return $this->storageProviders;
    }

    /**
     * @param CloudStorageProvider[] $storageProviders
     *
     * @return self
     */
    public function setStorageProviders(array $storageProviders = null)
    {
        $this->storageProviders = $storageProviders;

        return $this;
    }
}
