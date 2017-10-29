<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BrandEmailContent
{
    /**
     * @var string
     */
    protected $content;
    /**
     * @var string
     */
    protected $emailContentType;
    /**
     * @var string
     */
    protected $emailToLink;
    /**
     * @var string
     */
    protected $linkText;

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     *
     * @return self
     */
    public function setContent($content = null)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmailContentType()
    {
        return $this->emailContentType;
    }

    /**
     * @param string $emailContentType
     *
     * @return self
     */
    public function setEmailContentType($emailContentType = null)
    {
        $this->emailContentType = $emailContentType;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmailToLink()
    {
        return $this->emailToLink;
    }

    /**
     * @param string $emailToLink
     *
     * @return self
     */
    public function setEmailToLink($emailToLink = null)
    {
        $this->emailToLink = $emailToLink;

        return $this;
    }

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
}
