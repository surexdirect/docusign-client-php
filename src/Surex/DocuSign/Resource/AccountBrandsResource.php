<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Surex\DocuSign\AccountResource as Resource;

class AccountBrandsResource extends Resource
{
    /**
     * Deletes one or more brand profiles from an account. The Account Branding feature (accountSettings properties `canSelfBrandSend` and `canSelfBrandSend`) must be set to **true** to use this call.
     *
     * @param \Surex\DocuSign\Model\BrandsRequest $brandsRequest
     * @param array                               $parameters    List of parameters
     * @param string                              $fetch         Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\AccountBrands|\Surex\DocuSign\Model\ErrorDetails
     */
    public function brandsDeleteBrands(\Surex\DocuSign\Model\BrandsRequest $brandsRequest, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/brands';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($brandsRequest, 'json');
        $request    = $this->messageFactory->createRequest('DELETE', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\AccountBrands', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieves the list of brand profiles associated with the account and the default brand profiles. The Account Branding feature (accountSettings properties `canSelfBrandSend` and `canSelfBrandSend`)  must be set to **true** for the account to use this call.
     *
     * @param array $parameters {
     *
     *     @var string $exclude_distributor_brand when set to **true**, excludes distributor brand information from the response set
     *     @var string $include_logos When set to **true**, returns the logos associated with the brand.
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\AccountBrands|\Surex\DocuSign\Model\ErrorDetails
     */
    public function brandsGetBrands($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('exclude_distributor_brand', null);
        $queryParam->setDefault('include_logos', null);
        $url     = '/restapi/v2/accounts/{accountId}/brands';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body    = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\AccountBrands', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Creates one or more brand profile files for the account. The Account Branding feature (accountSettings properties `canSelfBrandSend` and `canSelfBrandSig`) must be set to **true** for the account to use this call.

     An error is returned if `brandId` property for a brand profile is already set for the account. To upload a new version of an existing brand profile, you must delete the profile and then upload the newer version.

     When brand profile files are being uploaded, they must be combined into one zip file and the `Content-Type` must be `application/zip`.
     *
     * @param \Surex\DocuSign\Model\Brand $brand
     * @param array                       $parameters List of parameters
     * @param string                      $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\AccountBrands|\Surex\DocuSign\Model\ErrorDetails
     */
    public function brandsPostBrands(\Surex\DocuSign\Model\Brand $brand, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/brands';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($brand, 'json');
        $request    = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (201 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\AccountBrands', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * @param string $brandId    the unique identifier of a brand
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\ErrorDetails
     */
    public function brandDeleteBrand($brandId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/brands/{brandId}';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{brandId}', urlencode($brandId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('DELETE', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * @param string $brandId    the unique identifier of a brand
     * @param array  $parameters {
     *
     *     @var string $include_external_references
     *     @var string $include_logos
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\Brand|\Surex\DocuSign\Model\ErrorDetails
     */
    public function brandGetBrand($brandId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('include_external_references', null);
        $queryParam->setDefault('include_logos', null);
        $url     = '/restapi/v2/accounts/{accountId}/brands/{brandId}';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = str_replace('{brandId}', urlencode($brandId), $url);
        $url     = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body    = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\Brand', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * @param string                      $brandId    the unique identifier of a brand
     * @param \Surex\DocuSign\Model\Brand $brand
     * @param array                       $parameters List of parameters
     * @param string                      $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\Brand|\Surex\DocuSign\Model\ErrorDetails
     */
    public function brandPutBrand($brandId, \Surex\DocuSign\Model\Brand $brand, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/brands/{brandId}';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{brandId}', urlencode($brandId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($brand, 'json');
        $request    = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\Brand', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * @param string $brandId    the unique identifier of a brand
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\ErrorDetails
     */
    public function brandExportGetBrandExportFile($brandId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/brands/{brandId}/file';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{brandId}', urlencode($brandId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * @param string $brandId    the unique identifier of a brand
     * @param string $logoType   one of **Primary**, **Secondary** or **Email**
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\ErrorDetails
     */
    public function brandLogoDeleteBrandLogo($brandId, $logoType, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/brands/{brandId}/logos/{logoType}';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{brandId}', urlencode($brandId), $url);
        $url        = str_replace('{logoType}', urlencode($logoType), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('DELETE', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * @param string $brandId    the unique identifier of a brand
     * @param string $logoType   one of **Primary**, **Secondary** or **Email**
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\ErrorDetails
     */
    public function brandLogoGetBrandLogo($brandId, $logoType, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/brands/{brandId}/logos/{logoType}';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{brandId}', urlencode($brandId), $url);
        $url        = str_replace('{logoType}', urlencode($logoType), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * @param string $brandId    the unique identifier of a brand
     * @param string $logoType   one of **Primary**, **Secondary** or **Email**
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\ErrorDetails
     */
    public function brandLogoPutBrandLogo($brandId, $logoType, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/brands/{brandId}/logos/{logoType}';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{brandId}', urlencode($brandId), $url);
        $url        = str_replace('{logoType}', urlencode($logoType), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * @param string $brandId    the unique identifier of a brand
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\BrandResourcesList|\Surex\DocuSign\Model\ErrorDetails
     */
    public function brandResourcesGetBrandResourcesList($brandId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/brands/{brandId}/resources';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{brandId}', urlencode($brandId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\BrandResourcesList', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * @param string $brandId             the unique identifier of a brand
     * @param string $resourceContentType
     * @param array  $parameters          {
     *
     *     @var string $langcode
     *     @var string $return_master
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\ErrorDetails
     */
    public function brandResourcesGetBrandResources($brandId, $resourceContentType, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('langcode', null);
        $queryParam->setDefault('return_master', null);
        $url     = '/restapi/v2/accounts/{accountId}/brands/{brandId}/resources/{resourceContentType}';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = str_replace('{brandId}', urlencode($brandId), $url);
        $url     = str_replace('{resourceContentType}', urlencode($resourceContentType), $url);
        $url     = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body    = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * @param string $brandId             the unique identifier of a brand
     * @param string $resourceContentType
     * @param array  $parameters          List of parameters
     * @param string $fetch               Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\BrandResources|\Surex\DocuSign\Model\ErrorDetails
     */
    public function brandResourcesPutBrandResources($brandId, $resourceContentType, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/brands/{brandId}/resources/{resourceContentType}';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{brandId}', urlencode($brandId), $url);
        $url        = str_replace('{resourceContentType}', urlencode($resourceContentType), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\BrandResources', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }
}
