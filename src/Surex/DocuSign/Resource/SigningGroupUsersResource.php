<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Surex\DocuSign\AccountResource as Resource;

class SigningGroupUsersResource extends Resource
{
    /**
     * Deletes  one or more members from the specified signing group.
     *
     * @param string                                  $signingGroupId
     * @param \Surex\DocuSign\Model\SigningGroupUsers $signingGroupUsers
     * @param array                                   $parameters        List of parameters
     * @param string                                  $fetch             Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\SigningGroupUsers|\Surex\DocuSign\Model\ErrorDetails
     */
    public function signingGroupsDeleteSigningGroupUsers($signingGroupId, \Surex\DocuSign\Model\SigningGroupUsers $signingGroupUsers, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/signing_groups/{signingGroupId}/users';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{signingGroupId}', urlencode($signingGroupId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($signingGroupUsers, 'json');
        $request    = $this->messageFactory->createRequest('DELETE', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\SigningGroupUsers', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieves the list of members in the specified Signing Group.
     *
     * @param string $signingGroupId
     * @param array  $parameters     List of parameters
     * @param string $fetch          Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\SigningGroupUsers|\Surex\DocuSign\Model\ErrorDetails
     */
    public function signingGroupsGetSigningGroupUsers($signingGroupId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/signing_groups/{signingGroupId}/users';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{signingGroupId}', urlencode($signingGroupId), $url);
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\SigningGroupUsers', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Adds one or more new members to a signing group. A signing group can have a maximum of 50 members.
     *
     * @param string                                  $signingGroupId
     * @param \Surex\DocuSign\Model\SigningGroupUsers $signingGroupUsers
     * @param array                                   $parameters        List of parameters
     * @param string                                  $fetch             Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\SigningGroupUsers|\Surex\DocuSign\Model\ErrorDetails
     */
    public function signingGroupsPutSigningGroupUsers($signingGroupId, \Surex\DocuSign\Model\SigningGroupUsers $signingGroupUsers, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/signing_groups/{signingGroupId}/users';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{signingGroupId}', urlencode($signingGroupId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($signingGroupUsers, 'json');
        $request    = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\SigningGroupUsers', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }
}
