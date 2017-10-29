<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class ChunkedUploadPart
{
    /**
     * @var string
     */
    protected $sequence;
    /**
     * @var string
     */
    protected $size;

    /**
     * @return string
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * @param string $sequence
     *
     * @return self
     */
    public function setSequence($sequence = null)
    {
        $this->sequence = $sequence;

        return $this;
    }

    /**
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param string $size
     *
     * @return self
     */
    public function setSize($size = null)
    {
        $this->size = $size;

        return $this;
    }
}
