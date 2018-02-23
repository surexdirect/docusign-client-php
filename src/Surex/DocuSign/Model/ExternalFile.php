<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class ExternalFile
{
    /**
     * @var string
     */
    protected $date;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $img;
    /**
     * @var string
     */
    protected $name;
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $size;
    /**
     * @var string
     */
    protected $supported;
    /**
     * Type of the user. Valid values: type_owner, type_participant.
     *
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $uri;

    /**
     * @return string
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * @param string $date
     *
     * @return self
     */
    public function setDate(?string $date): self
    {
        $this->date = $date;

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
     * @return string
     */
    public function getImg(): ?string
    {
        return $this->img;
    }

    /**
     * @param string $img
     *
     * @return self
     */
    public function setImg(?string $img): self
    {
        $this->img = $img;

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
     * Reserved: TBD.
     *
     * @return string
     */
    public function getSize(): ?string
    {
        return $this->size;
    }

    /**
     * Reserved: TBD.
     *
     * @param string $size
     *
     * @return self
     */
    public function setSize(?string $size): self
    {
        $this->size = $size;

        return $this;
    }

    /**
     * @return string
     */
    public function getSupported(): ?string
    {
        return $this->supported;
    }

    /**
     * @param string $supported
     *
     * @return self
     */
    public function setSupported(?string $supported): self
    {
        $this->supported = $supported;

        return $this;
    }

    /**
     * Type of the user. Valid values: type_owner, type_participant.
     *
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Type of the user. Valid values: type_owner, type_participant.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getUri(): ?string
    {
        return $this->uri;
    }

    /**
     * @param string $uri
     *
     * @return self
     */
    public function setUri(?string $uri): self
    {
        $this->uri = $uri;

        return $this;
    }
}
