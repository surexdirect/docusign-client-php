<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class ChunkedUploadPart
{
    /**
     * @var string
     */
    protected $sequence;
    /**
     * Reserved: TBD.
     *
     * @var string
     */
    protected $size;

    /**
     * @return string
     */
    public function getSequence(): ?string
    {
        return $this->sequence;
    }

    /**
     * @param string $sequence
     *
     * @return self
     */
    public function setSequence(?string $sequence): self
    {
        $this->sequence = $sequence;

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
}
