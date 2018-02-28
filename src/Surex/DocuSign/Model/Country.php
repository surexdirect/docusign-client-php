<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Country
{
    /**
     * @var string
     */
    protected $isoCode;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var Province[]
     */
    protected $provinces;
    /**
     * @var string
     */
    protected $provinceValidated;

    /**
     * @return string
     */
    public function getIsoCode(): ?string
    {
        return $this->isoCode;
    }

    /**
     * @param string $isoCode
     *
     * @return self
     */
    public function setIsoCode(?string $isoCode): self
    {
        $this->isoCode = $isoCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Province[]
     */
    public function getProvinces(): ?array
    {
        return $this->provinces;
    }

    /**
     * @param Province[] $provinces
     *
     * @return self
     */
    public function setProvinces(?array $provinces): self
    {
        $this->provinces = $provinces;

        return $this;
    }

    /**
     * @return string
     */
    public function getProvinceValidated(): ?string
    {
        return $this->provinceValidated;
    }

    /**
     * @param string $provinceValidated
     *
     * @return self
     */
    public function setProvinceValidated(?string $provinceValidated): self
    {
        $this->provinceValidated = $provinceValidated;

        return $this;
    }
}
