<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class PageRequest
{
    /**
     * @var string
     */
    protected $password;
    /**
     * Sets the direction the page image is rotated. The possible settings are: left or right.
     *
     * @var string
     */
    protected $rotate;

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
     * Sets the direction the page image is rotated. The possible settings are: left or right.
     *
     * @return string
     */
    public function getRotate(): ?string
    {
        return $this->rotate;
    }

    /**
     * Sets the direction the page image is rotated. The possible settings are: left or right.
     *
     * @param string $rotate
     *
     * @return self
     */
    public function setRotate(?string $rotate): self
    {
        $this->rotate = $rotate;

        return $this;
    }
}
