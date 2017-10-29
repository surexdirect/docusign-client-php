<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class PageRequest
{
    /**
     * @var string
     */
    protected $password;
    /**
     * @var string
     */
    protected $rotate;

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
    public function getRotate()
    {
        return $this->rotate;
    }

    /**
     * @param string $rotate
     *
     * @return self
     */
    public function setRotate($rotate = null)
    {
        $this->rotate = $rotate;

        return $this;
    }
}
