<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

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
    public function getLinkText()
    {
        return $this->linkText;
    }

    /**
     * @param string $linkText
     *
     * @return self
     */
    public function setLinkText($linkText = null)
    {
        $this->linkText = $linkText;

        return $this;
    }

    /**
     * @return string
     */
    public function getLinkType()
    {
        return $this->linkType;
    }

    /**
     * @param string $linkType
     *
     * @return self
     */
    public function setLinkType($linkType = null)
    {
        $this->linkType = $linkType;

        return $this;
    }

    /**
     * @return string
     */
    public function getShowLink()
    {
        return $this->showLink;
    }

    /**
     * @param string $showLink
     *
     * @return self
     */
    public function setShowLink($showLink = null)
    {
        $this->showLink = $showLink;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrlOrMailTo()
    {
        return $this->urlOrMailTo;
    }

    /**
     * @param string $urlOrMailTo
     *
     * @return self
     */
    public function setUrlOrMailTo($urlOrMailTo = null)
    {
        $this->urlOrMailTo = $urlOrMailTo;

        return $this;
    }
}
