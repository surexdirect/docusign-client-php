<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Services
{
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $buildBranch;
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $buildBranchDeployedDateTime;
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $buildSHA;
    /**
     * Reserved: TBD.
     *
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
     * Reserved: TBD.
     *
     * @return string
     */
    public function getBuildBranch(): ?string
    {
        return $this->buildBranch;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $buildBranch
     *
     * @return self
     */
    public function setBuildBranch(?string $buildBranch): self
    {
        $this->buildBranch = $buildBranch;

        return $this;
    }

    /**
     * Reserved: TBD.
     *
     * @return string
     */
    public function getBuildBranchDeployedDateTime(): ?string
    {
        return $this->buildBranchDeployedDateTime;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $buildBranchDeployedDateTime
     *
     * @return self
     */
    public function setBuildBranchDeployedDateTime(?string $buildBranchDeployedDateTime): self
    {
        $this->buildBranchDeployedDateTime = $buildBranchDeployedDateTime;

        return $this;
    }

    /**
     * Reserved: TBD.
     *
     * @return string
     */
    public function getBuildSHA(): ?string
    {
        return $this->buildSHA;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $buildSHA
     *
     * @return self
     */
    public function setBuildSHA(?string $buildSHA): self
    {
        $this->buildSHA = $buildSHA;

        return $this;
    }

    /**
     * Reserved: TBD.
     *
     * @return string
     */
    public function getBuildVersion(): ?string
    {
        return $this->buildVersion;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $buildVersion
     *
     * @return self
     */
    public function setBuildVersion(?string $buildVersion): self
    {
        $this->buildVersion = $buildVersion;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getLinkedSites(): ?array
    {
        return $this->linkedSites;
    }

    /**
     * @param string[] $linkedSites
     *
     * @return self
     */
    public function setLinkedSites(?array $linkedSites): self
    {
        $this->linkedSites = $linkedSites;

        return $this;
    }

    /**
     * @return ServiceVersion[]
     */
    public function getServiceVersions(): ?array
    {
        return $this->serviceVersions;
    }

    /**
     * @param ServiceVersion[] $serviceVersions
     *
     * @return self
     */
    public function setServiceVersions(?array $serviceVersions): self
    {
        $this->serviceVersions = $serviceVersions;

        return $this;
    }
}
