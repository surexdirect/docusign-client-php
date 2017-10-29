<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Surex\DocuSign\AccountResource as Resource;

class GroupUsersResource extends Resource
{
    /**
     * Deletes one or more users from a group.
     *
     * @param string                             $groupId      the ID of the group being accessed
     * @param \Surex\DocuSign\Model\UserInfoList $userInfoList
     * @param array                              $parameters   List of parameters
     * @param string                             $fetch        Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\GroupUsers|\Surex\DocuSign\Model\ErrorDetails
     */
    public function groupsDeleteGroupUsers($groupId, \Surex\DocuSign\Model\UserInfoList $userInfoList, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/groups/{groupId}/users';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{groupId}', urlencode($groupId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($userInfoList, 'json');
        $request    = $this->messageFactory->createRequest('DELETE', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT === $fetch) {
            if ('200' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\GroupUsers', 'json');
            }
            if ('400' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieves a list of users in a group.
     *
     * @param string $groupId    the ID of the group being accessed
     * @param array  $parameters {
     *
     *     @var string $count Number of records to return. The number must be greater than 1 and less than or equal to 100.
     *     @var string $start_position Starting value for the list.
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\GroupUsers|\Surex\DocuSign\Model\ErrorDetails
     */
    public function groupsGetGroupUsers($groupId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('count', null);
        $queryParam->setDefault('start_position', null);
        $url     = '/restapi/v2/accounts/{accountId}/groups/{groupId}/users';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = str_replace('{groupId}', urlencode($groupId), $url);
        $url     = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body    = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT === $fetch) {
            if ('200' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\GroupUsers', 'json');
            }
            if ('400' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Adds one or more users to an existing group.
     *
     * @param string                             $groupId      the ID of the group being accessed
     * @param \Surex\DocuSign\Model\UserInfoList $userInfoList
     * @param array                              $parameters   List of parameters
     * @param string                             $fetch        Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\GroupUsers|\Surex\DocuSign\Model\ErrorDetails
     */
    public function groupsPutGroupUsers($groupId, \Surex\DocuSign\Model\UserInfoList $userInfoList, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/groups/{groupId}/users';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{groupId}', urlencode($groupId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($userInfoList, 'json');
        $request    = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT === $fetch) {
            if ('200' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\GroupUsers', 'json');
            }
            if ('400' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }
}
