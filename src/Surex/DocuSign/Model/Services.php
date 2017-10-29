<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Services
{
    /**
     * @var string
     */
    protected $buildBranch;
    /**
     * @var string
     */
    protected $buildBranchDeployedDateTime;
    /**
     * @var string
     */
    protected $buildSHA;
    /**
     * @var string
     */
    protected $buildVersion;
    /**
     * @var string[]
     */
    protected $linkedSites;
    /**
     * @var ServiceVersion[]
     */
    protected $serviceVersions;

    /**
     * @return string
     */
    public function getBuildBranch()
    {
        return $this->buildBranch;
    }

    /**
     * @param string $buildBranch
     *
     * @return self
     */
    public function setBuildBranch($buildBranch = null)
    {
        $this->buildBranch = $buildBranch;

        return $this;
    }

    /**
     * @return string
     */
    public function getBuildBranchDeployedDateTime()
    {
        return $this->buildBranchDeployedDateTime;
    }

    /**
     * @param string $buildBranchDeployedDateTime
     *
     * @return self
     */
    public function setBuildBranchDeployedDateTime($buildBranchDeployedDateTime = null)
    {
        $this->buildBranchDeployedDateTime = $buildBranchDeployedDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getBuildSHA()
    {
        return $this->buildSHA;
    }

    /**
     * @param string $buildSHA
     *
     * @return self
     */
    public function setBuildSHA($buildSHA = null)
    {
        $this->buildSHA = $buildSHA;

        return $this;
    }

    /**
     * @return string
     */
    public function getBuildVersion()
    {
        return $this->buildVersion;
    }

    /**
     * @param string $buildVersion
     *
     * @return self
     */
    public function setBuildVersion($buildVersion = null)
    {
        $this->buildVersion = $buildVersion;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getLinkedSites()
    {
        return $this->linkedSites;
    }

    /**
     * @param string[] $linkedSites
     *
     * @return self
     */
    public function setLinkedSites(array $linkedSites = null)
    {
        $this->linkedSites = $linkedSites;

        return $this;
    }

    /**
     * @return ServiceVersion[]
     */
    public function getServiceVersions()
    {
        return $this->serviceVersions;
    }

    /**
     * @param ServiceVersion[] $serviceVersions
     *
     * @return self
     */
    public function setServiceVersions(array $serviceVersions = null)
    {
        $this->serviceVersions = $serviceVersions;

        return $this;
    }
}
