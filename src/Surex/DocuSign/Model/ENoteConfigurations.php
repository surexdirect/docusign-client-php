<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
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
    public function getConnectConfigured(): ?string
    {
        return $this->connectConfigured;
    }

    /**
     * @param string $connectConfigured
     *
     * @return self
     */
    public function setConnectConfigured(?string $connectConfigured): self
    {
        $this->connectConfigured = $connectConfigured;

        return $this;
    }

    /**
     * @return string
     */
    public function getENoteConfigured(): ?string
    {
        return $this->eNoteConfigured;
    }

    /**
     * @param string $eNoteConfigured
     *
     * @return self
     */
    public function setENoteConfigured(?string $eNoteConfigured): self
    {
        $this->eNoteConfigured = $eNoteConfigured;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrganization(): ?string
    {
        return $this->organization;
    }

    /**
     * @param string $organization
     *
     * @return self
     */
    public function setOrganization(?string $organization): self
    {
        $this->organization = $organization;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string $password
     *
     * @return self
     */
    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     *
     * @return self
     */
    public function setUserName(?string $userName): self
    {
        $this->userName = $userName;

        return $this;
    }
}
