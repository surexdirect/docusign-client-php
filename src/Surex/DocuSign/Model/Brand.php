<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Brand
{
    /**
     * @var string
     */
    protected $brandCompany;
    /**
     * @var string
     */
    protected $brandId;
    /**
     * @var string
     */
    protected $brandName;
    /**
     * @var NameValue[]
     */
    protected $colors;
    /**
     * @var BrandEmailContent[]
     */
    protected $emailContent;
    /**
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * @var string
     */
    protected $isOverridingCompanyName;
    /**
     * @var string
     */
    protected $isSendingDefault;
    /**
     * @var string
     */
    protected $isSigningDefault;
    /**
     * @var NameValue[]
     */
    protected $landingPages;
    /**
     * @var BrandLink[]
     */
    protected $links;
    /**
     * @var BrandLogos
     */
    protected $logos;
    /**
     * @var BrandResourceUrls
     */
    protected $resources;

    /**
     * @return string
     */
    public function getBrandCompany()
    {
        return $this->brandCompany;
    }

    /**
     * @param string $brandCompany
     *
     * @return self
     */
    public function setBrandCompany($brandCompany = null)
    {
        $this->brandCompany = $brandCompany;

        return $this;
    }

    /**
     * @return string
     */
    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * @param string $brandId
     *
     * @return self
     */
    public function setBrandId($brandId = null)
    {
        $this->brandId = $brandId;

        return $this;
    }

    /**
     * @return string
     */
    public function getBrandName()
    {
        return $this->brandName;
    }

    /**
     * @param string $brandName
     *
     * @return self
     */
    public function setBrandName($brandName = null)
    {
        $this->brandName = $brandName;

        return $this;
    }

    /**
     * @return NameValue[]
     */
    public function getColors()
    {
        return $this->colors;
    }

    /**
     * @param NameValue[] $colors
     *
     * @return self
     */
    public function setColors(array $colors = null)
    {
        $this->colors = $colors;

        return $this;
    }

    /**
     * @return BrandEmailContent[]
     */
    public function getEmailContent()
    {
        return $this->emailContent;
    }

    /**
     * @param BrandEmailContent[] $emailContent
     *
     * @return self
     */
    public function setEmailContent(array $emailContent = null)
    {
        $this->emailContent = $emailContent;

        return $this;
    }

    /**
     * @return ErrorDetails
     */
    public function getErrorDetails()
    {
        return $this->errorDetails;
    }

    /**
     * @param ErrorDetails $errorDetails
     *
     * @return self
     */
    public function setErrorDetails(ErrorDetails $errorDetails = null)
    {
        $this->errorDetails = $errorDetails;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsOverridingCompanyName()
    {
        return $this->isOverridingCompanyName;
    }

    /**
     * @param string $isOverridingCompanyName
     *
     * @return self
     */
    public function setIsOverridingCompanyName($isOverridingCompanyName = null)
    {
        $this->isOverridingCompanyName = $isOverridingCompanyName;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsSendingDefault()
    {
        return $this->isSendingDefault;
    }

    /**
     * @param string $isSendingDefault
     *
     * @return self
     */
    public function setIsSendingDefault($isSendingDefault = null)
    {
        $this->isSendingDefault = $isSendingDefault;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsSigningDefault()
    {
        return $this->isSigningDefault;
    }

    /**
     * @param string $isSigningDefault
     *
     * @return self
     */
    public function setIsSigningDefault($isSigningDefault = null)
    {
        $this->isSigningDefault = $isSigningDefault;

        return $this;
    }

    /**
     * @return NameValue[]
     */
    public function getLandingPages()
    {
        return $this->landingPages;
    }

    /**
     * @param NameValue[] $landingPages
     *
     * @return self
     */
    public function setLandingPages(array $landingPages = null)
    {
        $this->landingPages = $landingPages;

        return $this;
    }

    /**
     * @return BrandLink[]
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param BrandLink[] $links
     *
     * @return self
     */
    public function setLinks(array $links = null)
    {
        $this->links = $links;

        return $this;
    }

    /**
     * @return BrandLogos
     */
    public function getLogos()
    {
        return $this->logos;
    }

    /**
     * @param BrandLogos $logos
     *
     * @return self
     */
    public function setLogos(BrandLogos $logos = null)
    {
        $this->logos = $logos;

        return $this;
    }

    /**
     * @return BrandResourceUrls
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * @param BrandResourceUrls $resources
     *
     * @return self
     */
    public function setResources(BrandResourceUrls $resources = null)
    {
        $this->resources = $resources;

        return $this;
    }
}
