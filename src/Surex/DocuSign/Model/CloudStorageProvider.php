<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class CloudStorageProvider
{
    /**
     * @var string
     */
    protected $authenticationUrl;
    /**
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * @var string
     */
    protected $redirectUrl;
    /**
     * @var string
     */
    protected $service;
    /**
     * @var string
     */
    protected $serviceId;

    /**
     * @return string
     */
    public function getAuthenticationUrl()
    {
        return $this->authenticationUrl;
    }

    /**
     * @param string $authenticationUrl
     *
     * @return self
     */
    public function setAuthenticationUrl($authenticationUrl = null)
    {
        $this->authenticationUrl = $authenticationUrl;

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
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * @param string $redirectUrl
     *
     * @return self
     */
    public function setRedirectUrl($redirectUrl = null)
    {
        $this->redirectUrl = $redirectUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param string $service
     *
     * @return self
     */
    public function setService($service = null)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * @return string
     */
    public function getServiceId()
    {
        return $this->serviceId;
    }

    /**
     * @param string $serviceId
     *
     * @return self
     */
    public function setServiceId($serviceId = null)
    {
        $this->serviceId = $serviceId;

        return $this;
    }
}
