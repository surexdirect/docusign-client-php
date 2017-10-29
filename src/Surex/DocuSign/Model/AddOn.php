<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class AddOn
{
    /**
     * @var string
     */
    protected $active;
    /**
     * @var string
     */
    protected $addOnId;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;

    /**
     * @return string
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param string $active
     *
     * @return self
     */
    public function setActive($active = null)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddOnId()
    {
        return $this->addOnId;
    }

    /**
     * @param string $addOnId
     *
     * @return self
     */
    public function setAddOnId($addOnId = null)
    {
        $this->addOnId = $addOnId;

        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return self
     */
    public function setId($id = null)
    {
        $this->id = $id;

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
}
