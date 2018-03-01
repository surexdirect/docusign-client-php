<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class FoldersRequest
{
    /**
     * @var string[]
     */
    protected $envelopeIds;
    /**
     *  The folder ID the envelope is being moved from.
     *
     * @var string
     */
    protected $fromFolderId;

    /**
     * @return string[]
     */
    public function getEnvelopeIds(): ?array
    {
        return $this->envelopeIds;
    }

    /**
     * @param string[] $envelopeIds
     *
     * @return self
     */
    public function setEnvelopeIds(?array $envelopeIds): self
    {
        $this->envelopeIds = $envelopeIds;

        return $this;
    }

    /**
     *  The folder ID the envelope is being moved from.
     *
     * @return string
     */
    public function getFromFolderId(): ?string
    {
        return $this->fromFolderId;
    }

    /**
     *  The folder ID the envelope is being moved from.
     *
     * @param string $fromFolderId
     *
     * @return self
     */
    public function setFromFolderId(?string $fromFolderId): self
    {
        $this->fromFolderId = $fromFolderId;

        return $this;
    }
}
