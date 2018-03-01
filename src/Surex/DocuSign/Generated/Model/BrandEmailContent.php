<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

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
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string $content
     *
     * @return self
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmailContentType(): ?string
    {
        return $this->emailContentType;
    }

    /**
     * @param string $emailContentType
     *
     * @return self
     */
    public function setEmailContentType(?string $emailContentType): self
    {
        $this->emailContentType = $emailContentType;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmailToLink(): ?string
    {
        return $this->emailToLink;
    }

    /**
     * @param string $emailToLink
     *
     * @return self
     */
    public function setEmailToLink(?string $emailToLink): self
    {
        $this->emailToLink = $emailToLink;

        return $this;
    }

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
}
