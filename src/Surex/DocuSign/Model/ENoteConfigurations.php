<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class ENoteConfigurations
{
    /**
     * @var string
     */
    protected $connectConfigured;
    /**
     * @var string
     */
    protected $eNoteConfigured;
    /**
     * @var string
     */
    protected $organization;
    /**
     * @var string
     */
    protected $password;
    /**
     * @var string
     */
    protected $userName;

    /**
     * @return string
     */
    public function getConnectConfigured()
    {
        return $this->connectConfigured;
    }

    /**
     * @param string $connectConfigured
     *
     * @return self
     */
    public function setConnectConfigured($connectConfigured = null)
    {
        $this->connectConfigured = $connectConfigured;

        return $this;
    }

    /**
     * @return string
     */
    public function getENoteConfigured()
    {
        return $this->eNoteConfigured;
    }

    /**
     * @param string $eNoteConfigured
     *
     * @return self
     */
    public function setENoteConfigured($eNoteConfigured = null)
    {
        $this->eNoteConfigured = $eNoteConfigured;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * @param string $organization
     *
     * @return self
     */
    public function setOrganization($organization = null)
    {
        $this->organization = $organization;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     *
     * @return self
     */
    public function setPassword($password = null)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     *
     * @return self
     */
    public function setUserName($userName = null)
    {
        $this->userName = $userName;

        return $this;
    }
}
