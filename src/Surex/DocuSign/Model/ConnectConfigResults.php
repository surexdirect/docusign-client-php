<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class ConnectConfigResults
{
    /**
     * @var ConnectConfigurations[]
     */
    protected $configurations;
    /**
     * @var string
     */
    protected $totalRecords;

    /**
     * @return ConnectConfigurations[]
     */
    public function getConfigurations()
    {
        return $this->configurations;
    }

    /**
     * @param ConnectConfigurations[] $configurations
     *
     * @return self
     */
    public function setConfigurations(array $configurations = null)
    {
        $this->configurations = $configurations;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotalRecords()
    {
        return $this->totalRecords;
    }

    /**
     * @param string $totalRecords
     *
     * @return self
     */
    public function setTotalRecords($totalRecords = null)
    {
        $this->totalRecords = $totalRecords;

        return $this;
    }
}
