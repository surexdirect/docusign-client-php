<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Surex\DocuSign\AccountResource as Resource;

class CloudStorageProvidersResource extends Resource
{
    /**
     * Deletes the user authentication information for one or more cloud storage providers. The next time the user tries to access the cloud storage provider, they must pass normal authentication.
     *
     * @param string                                      $userId                The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param \Surex\DocuSign\Model\CloudStorageProviders $cloudStorageProviders
     * @param array                                       $parameters            List of parameters
     * @param string                                      $fetch                 Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\CloudStorageProviders|\Surex\DocuSign\Model\ErrorDetails
     */
    public function cloudStorageDeleteCloudStorageProviders($userId, \Surex\DocuSign\Model\CloudStorageProviders $cloudStorageProviders, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/users/{userId}/cloud_storage';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{userId}', urlencode($userId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($cloudStorageProviders, 'json');
        $request    = $this->messageFactory->createRequest('DELETE', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\CloudStorageProviders', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieves the list of cloud storage providers enabled for the account and the configuration information for the user.

     *
     * @param string $userId     The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param array  $parameters {
     *
     *     @var string $redirectUrl  The URL the user is redirected to after the cloud storage provider authenticates the user. Using this will append the redirectUrl to the authenticationUrl.

     The redirectUrl is restricted to URLs in the docusign.com or docusign.net domains.

     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\CloudStorageProviders|\Surex\DocuSign\Model\ErrorDetails
     */
    public function cloudStorageGetCloudStorageProviders($userId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('redirectUrl', null);
        $url     = '/restapi/v2/accounts/{accountId}/users/{userId}/cloud_storage';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = str_replace('{userId}', urlencode($userId), $url);
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\CloudStorageProviders', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Configures the redirect URL information  for one or more cloud storage providers for the specified user. The redirect URL is added to the authentication URL to complete the return route.
     *
     * @param string                                      $userId                The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param \Surex\DocuSign\Model\CloudStorageProviders $cloudStorageProviders
     * @param array                                       $parameters            List of parameters
     * @param string                                      $fetch                 Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\CloudStorageProviders|\Surex\DocuSign\Model\ErrorDetails
     */
    public function cloudStoragePostCloudStorage($userId, \Surex\DocuSign\Model\CloudStorageProviders $cloudStorageProviders, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/users/{userId}/cloud_storage';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{userId}', urlencode($userId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($cloudStorageProviders, 'json');
        $request    = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (201 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\CloudStorageProviders', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Deletes the user authentication information for the specified cloud storage provider. The next time the user tries to access the cloud storage provider, they must pass normal authentication for this cloud storage provider.
     *
     * @param string $serviceId  The ID of the service to access.
     * @param string $userId     The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\CloudStorageProviders|\Surex\DocuSign\Model\ErrorDetails
     */
    public function cloudStorageDeleteCloudStorage($serviceId, $userId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/users/{userId}/cloud_storage/{serviceId}';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{serviceId}', urlencode($serviceId), $url);
        $url        = str_replace('{userId}', urlencode($userId), $url);
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
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\CloudStorageProviders', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieves the list of cloud storage providers enabled for the account and the configuration information for the user.
     *
     * @param string $serviceId  The ID of the service to access.
     * @param string $userId     The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param array  $parameters {
     *
     *     @var string $redirectUrl  The URL the user is redirected to after the cloud storage provider authenticates the user. Using this will append the redirectUrl to the authenticationUrl.

     The redirectUrl is restricted to URLs in the docusign.com or docusign.net domains.

     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\CloudStorageProviders|\Surex\DocuSign\Model\ErrorDetails
     */
    public function cloudStorageGetCloudStorage($serviceId, $userId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('redirectUrl', null);
        $url     = '/restapi/v2/accounts/{accountId}/users/{userId}/cloud_storage/{serviceId}';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = str_replace('{serviceId}', urlencode($serviceId), $url);
        $url     = str_replace('{userId}', urlencode($userId), $url);
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\CloudStorageProviders', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }
}
