<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
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
    public function getIsoCode()
    {
        return $this->isoCode;
    }

    /**
     * @param string $isoCode
     *
     * @return self
     */
    public function setIsoCode($isoCode = null)
    {
        $this->isoCode = $isoCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Province[]
     */
    public function getProvinces()
    {
        return $this->provinces;
    }

    /**
     * @param Province[] $provinces
     *
     * @return self
     */
    public function setProvinces(array $provinces = null)
    {
        $this->provinces = $provinces;

        return $this;
    }

    /**
     * @return string
     */
    public function getProvinceValidated()
    {
        return $this->provinceValidated;
    }

    /**
     * @param string $provinceValidated
     *
     * @return self
     */
    public function setProvinceValidated($provinceValidated = null)
    {
        $this->provinceValidated = $provinceValidated;

        return $this;
    }
}
