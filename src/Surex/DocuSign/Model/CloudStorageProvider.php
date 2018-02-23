<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class CloudStorageProvider
{
    /**
     * The authentication URL used for the cloud storage provider. This information is only included in the response if the user has not passed authentication for the cloud storage provider. If the redirectUrl query string is provided, the returnUrl is appended to the authenticationUrl.
     *
     * @var string
     */
    protected $authenticationUrl;
    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * The URL the user is redirected to after the cloud storage provider authenticates the user. Using this will append the redirectUrl to the authenticationUrl.

     The redirectUrl is restricted to URLs in the docusign.com or docusign.net domains.
     *
     * @var string
     */
    protected $redirectUrl;
    /**
     * The service name for the cloud storage provider.
     *
     * @var string
     */
    protected $service;
    /**
     * The DocuSign generated ID for the cloud storage provider.
     *
     * @var string
     */
    protected $serviceId;

    /**
     * The authentication URL used for the cloud storage provider. This information is only included in the response if the user has not passed authentication for the cloud storage provider. If the redirectUrl query string is provided, the returnUrl is appended to the authenticationUrl.
     *
     * @return string
     */
    public function getAuthenticationUrl(): ?string
    {
        return $this->authenticationUrl;
    }

    /**
     * The authentication URL used for the cloud storage provider. This information is only included in the response if the user has not passed authentication for the cloud storage provider. If the redirectUrl query string is provided, the returnUrl is appended to the authenticationUrl.
     *
     * @param string $authenticationUrl
     *
     * @return self
     */
    public function setAuthenticationUrl(?string $authenticationUrl): self
    {
        $this->authenticationUrl = $authenticationUrl;

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
     * The URL the user is redirected to after the cloud storage provider authenticates the user. Using this will append the redirectUrl to the authenticationUrl.

     The redirectUrl is restricted to URLs in the docusign.com or docusign.net domains.
     *
     * @return string
     */
    public function getRedirectUrl(): ?string
    {
        return $this->redirectUrl;
    }

    /**
     * The URL the user is redirected to after the cloud storage provider authenticates the user. Using this will append the redirectUrl to the authenticationUrl.

     The redirectUrl is restricted to URLs in the docusign.com or docusign.net domains.
     *
     * @param string $redirectUrl
     *
     * @return self
     */
    public function setRedirectUrl(?string $redirectUrl): self
    {
        $this->redirectUrl = $redirectUrl;

        return $this;
    }

    /**
     * The service name for the cloud storage provider.
     *
     * @return string
     */
    public function getService(): ?string
    {
        return $this->service;
    }

    /**
     * The service name for the cloud storage provider.
     *
     * @param string $service
     *
     * @return self
     */
    public function setService(?string $service): self
    {
        $this->service = $service;

        return $this;
    }

    /**
     * The DocuSign generated ID for the cloud storage provider.
     *
     * @return string
     */
    public function getServiceId(): ?string
    {
        return $this->serviceId;
    }

    /**
     * The DocuSign generated ID for the cloud storage provider.
     *
     * @param string $serviceId
     *
     * @return self
     */
    public function setServiceId(?string $serviceId): self
    {
        $this->serviceId = $serviceId;

        return $this;
    }
}
