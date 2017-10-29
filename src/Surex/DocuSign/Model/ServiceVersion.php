<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class ServiceVersion
{
    /**
     * @var string
     */
    protected $version;
    /**
     * @var string
     */
    protected $versionUrl;

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     *
     * @return self
     */
    public function setVersion($version = null)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return string
     */
    public function getVersionUrl()
    {
        return $this->versionUrl;
    }

    /**
     * @param string $versionUrl
     *
     * @return self
     */
    public function setVersionUrl($versionUrl = null)
    {
        $this->versionUrl = $versionUrl;

        return $this;
    }
}
