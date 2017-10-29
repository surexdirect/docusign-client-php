<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class FoldersRequest
{
    /**
     * @var string[]
     */
    protected $envelopeIds;
    /**
     * @var string
     */
    protected $fromFolderId;

    /**
     * @return string[]
     */
    public function getEnvelopeIds()
    {
        return $this->envelopeIds;
    }

    /**
     * @param string[] $envelopeIds
     *
     * @return self
     */
    public function setEnvelopeIds(array $envelopeIds = null)
    {
        $this->envelopeIds = $envelopeIds;

        return $this;
    }

    /**
     * @return string
     */
    public function getFromFolderId()
    {
        return $this->fromFolderId;
    }

    /**
     * @param string $fromFolderId
     *
     * @return self
     */
    public function setFromFolderId($fromFolderId = null)
    {
        $this->fromFolderId = $fromFolderId;

        return $this;
    }
}
