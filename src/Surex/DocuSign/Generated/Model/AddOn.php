<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class AddOn
{
    /**
     * Reserved:.
     *
     * @var string
     */
    protected $active;
    /**
     * Reserved:.
     *
     * @var string
     */
    protected $addOnId;
    /**
     * @var string
     */
    protected $id;
    /**
     * Reserved:.
     *
     * @var string
     */
    protected $name;

    /**
     * Reserved:.
     *
     * @return string
     */
    public function getActive(): ?string
    {
        return $this->active;
    }

    /**
     * Reserved:.
     *
     * @param string $active
     *
     * @return self
     */
    public function setActive(?string $active): self
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Reserved:.
     *
     * @return string
     */
    public function getAddOnId(): ?string
    {
        return $this->addOnId;
    }

    /**
     * Reserved:.
     *
     * @param string $addOnId
     *
     * @return self
     */
    public function setAddOnId(?string $addOnId): self
    {
        $this->addOnId = $addOnId;

        return $this;
    }

    /**
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Reserved:.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Reserved:.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
