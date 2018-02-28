<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class ConnectConfigResults
{
    /**
     * Array of Connect Configurations.
     *
     * @var ConnectConfigurations[]
     */
    protected $configurations;
    /**
     * Record count.
     *
     * @var string
     */
    protected $totalRecords;

    /**
     * Array of Connect Configurations.
     *
     * @return ConnectConfigurations[]
     */
    public function getConfigurations(): ?array
    {
        return $this->configurations;
    }

    /**
     * Array of Connect Configurations.
     *
     * @param ConnectConfigurations[] $configurations
     *
     * @return self
     */
    public function setConfigurations(?array $configurations): self
    {
        $this->configurations = $configurations;

        return $this;
    }

    /**
     * Record count.
     *
     * @return string
     */
    public function getTotalRecords(): ?string
    {
        return $this->totalRecords;
    }

    /**
     * Record count.
     *
     * @param string $totalRecords
     *
     * @return self
     */
    public function setTotalRecords(?string $totalRecords): self
    {
        $this->totalRecords = $totalRecords;

        return $this;
    }
}
