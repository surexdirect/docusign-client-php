<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class Brand
{
    /**
     * The name of the company associated with this brand.
     *
     * @var string
     */
    protected $brandCompany;
    /**
     * The ID used to identify a specific brand in API calls.
     *
     * @var string
     */
    protected $brandId;
    /**
     * The name of the brand.
     *
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
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
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
     * The name of the company associated with this brand.
     *
     * @return string
     */
    public function getBrandCompany(): ?string
    {
        return $this->brandCompany;
    }

    /**
     * The name of the company associated with this brand.
     *
     * @param string $brandCompany
     *
     * @return self
     */
    public function setBrandCompany(?string $brandCompany): self
    {
        $this->brandCompany = $brandCompany;

        return $this;
    }

    /**
     * The ID used to identify a specific brand in API calls.
     *
     * @return string
     */
    public function getBrandId(): ?string
    {
        return $this->brandId;
    }

    /**
     * The ID used to identify a specific brand in API calls.
     *
     * @param string $brandId
     *
     * @return self
     */
    public function setBrandId(?string $brandId): self
    {
        $this->brandId = $brandId;

        return $this;
    }

    /**
     * The name of the brand.
     *
     * @return string
     */
    public function getBrandName(): ?string
    {
        return $this->brandName;
    }

    /**
     * The name of the brand.
     *
     * @param string $brandName
     *
     * @return self
     */
    public function setBrandName(?string $brandName): self
    {
        $this->brandName = $brandName;

        return $this;
    }

    /**
     * @return NameValue[]
     */
    public function getColors(): ?array
    {
        return $this->colors;
    }

    /**
     * @param NameValue[] $colors
     *
     * @return self
     */
    public function setColors(?array $colors): self
    {
        $this->colors = $colors;

        return $this;
    }

    /**
     * @return BrandEmailContent[]
     */
    public function getEmailContent(): ?array
    {
        return $this->emailContent;
    }

    /**
     * @param BrandEmailContent[] $emailContent
     *
     * @return self
     */
    public function setEmailContent(?array $emailContent): self
    {
        $this->emailContent = $emailContent;

        return $this;
    }

    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @return ErrorDetails
     */
    public function getErrorDetails(): ?ErrorDetails
    {
        return $this->errorDetails;
    }

    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @param ErrorDetails $errorDetails
     *
     * @return self
     */
    public function setErrorDetails(?ErrorDetails $errorDetails): self
    {
        $this->errorDetails = $errorDetails;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsOverridingCompanyName(): ?string
    {
        return $this->isOverridingCompanyName;
    }

    /**
     * @param string $isOverridingCompanyName
     *
     * @return self
     */
    public function setIsOverridingCompanyName(?string $isOverridingCompanyName): self
    {
        $this->isOverridingCompanyName = $isOverridingCompanyName;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsSendingDefault(): ?string
    {
        return $this->isSendingDefault;
    }

    /**
     * @param string $isSendingDefault
     *
     * @return self
     */
    public function setIsSendingDefault(?string $isSendingDefault): self
    {
        $this->isSendingDefault = $isSendingDefault;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsSigningDefault(): ?string
    {
        return $this->isSigningDefault;
    }

    /**
     * @param string $isSigningDefault
     *
     * @return self
     */
    public function setIsSigningDefault(?string $isSigningDefault): self
    {
        $this->isSigningDefault = $isSigningDefault;

        return $this;
    }

    /**
     * @return NameValue[]
     */
    public function getLandingPages(): ?array
    {
        return $this->landingPages;
    }

    /**
     * @param NameValue[] $landingPages
     *
     * @return self
     */
    public function setLandingPages(?array $landingPages): self
    {
        $this->landingPages = $landingPages;

        return $this;
    }

    /**
     * @return BrandLink[]
     */
    public function getLinks(): ?array
    {
        return $this->links;
    }

    /**
     * @param BrandLink[] $links
     *
     * @return self
     */
    public function setLinks(?array $links): self
    {
        $this->links = $links;

        return $this;
    }

    /**
     * @return BrandLogos
     */
    public function getLogos(): ?BrandLogos
    {
        return $this->logos;
    }

    /**
     * @param BrandLogos $logos
     *
     * @return self
     */
    public function setLogos(?BrandLogos $logos): self
    {
        $this->logos = $logos;

        return $this;
    }

    /**
     * @return BrandResourceUrls
     */
    public function getResources(): ?BrandResourceUrls
    {
        return $this->resources;
    }

    /**
     * @param BrandResourceUrls $resources
     *
     * @return self
     */
    public function setResources(?BrandResourceUrls $resources): self
    {
        $this->resources = $resources;

        return $this;
    }
}
