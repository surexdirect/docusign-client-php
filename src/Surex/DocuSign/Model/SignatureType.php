<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class SignatureType
{
    /**
     * @var string
     */
    protected $isDefault;
    /**
     * @var string
     */
    protected $type;

    /**
     * @return string
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * @param string $isDefault
     *
     * @return self
     */
    public function setIsDefault($isDefault = null)
    {
        $this->isDefault = $isDefault;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type = null)
    {
        $this->type = $type;

        return $this;
    }
}
