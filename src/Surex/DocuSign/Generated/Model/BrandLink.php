<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class BrandLink
{
    /**
     * @var string
     */
    protected $linkText;
    /**
     * @var string
     */
    protected $linkType;
    /**
     * @var string
     */
    protected $showLink;
    /**
     * @var string
     */
    protected $urlOrMailTo;

    /**
     * @return string
     */
    public function getLinkText(): ?string
    {
        return $this->linkText;
    }

    /**
     * @param string $linkText
     *
     * @return self
     */
    public function setLinkText(?string $linkText): self
    {
        $this->linkText = $linkText;

        return $this;
    }

    /**
     * @return string
     */
    public function getLinkType(): ?string
    {
        return $this->linkType;
    }

    /**
     * @param string $linkType
     *
     * @return self
     */
    public function setLinkType(?string $linkType): self
    {
        $this->linkType = $linkType;

        return $this;
    }

    /**
     * @return string
     */
    public function getShowLink(): ?string
    {
        return $this->showLink;
    }

    /**
     * @param string $showLink
     *
     * @return self
     */
    public function setShowLink(?string $showLink): self
    {
        $this->showLink = $showLink;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrlOrMailTo(): ?string
    {
        return $this->urlOrMailTo;
    }

    /**
     * @param string $urlOrMailTo
     *
     * @return self
     */
    public function setUrlOrMailTo(?string $urlOrMailTo): self
    {
        $this->urlOrMailTo = $urlOrMailTo;

        return $this;
    }
}
