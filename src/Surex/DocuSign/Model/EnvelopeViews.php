<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class EnvelopeViews
{
    /**
     * The view URL to be navigated to.
     *
     * @var string
     */
    protected $url;

    /**
     * The view URL to be navigated to.
     *
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * The view URL to be navigated to.
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }
}
