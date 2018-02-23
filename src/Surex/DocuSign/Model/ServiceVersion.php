<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class ServiceVersion
{
    /**
     * The version of the rest API.
     *
     * @var string
     */
    protected $version;
    /**
     * @var string
     */
    protected $versionUrl;

    /**
     * The version of the rest API.
     *
     * @return string
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * The version of the rest API.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(?string $version): self
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return string
     */
    public function getVersionUrl(): ?string
    {
        return $this->versionUrl;
    }

    /**
     * @param string $versionUrl
     *
     * @return self
     */
    public function setVersionUrl(?string $versionUrl): self
    {
        $this->versionUrl = $versionUrl;

        return $this;
    }
}
