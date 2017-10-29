<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Surex\DocuSign\AccountResource as Resource;

class CloudStorageResource extends Resource
{
    /**
     * Retrieves a list of all the items in a specified folder from the specified cloud storage provider.
     *
     * @param string $serviceId  The ID of the service to access.
     * @param string $userId     The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param array  $parameters {
     *
     *     @var string $cloud_storage_folder_path A comma separated list of folder IDs included in the request.
     *     @var string $count An optional value that sets how many items are included in the response.

     *     @var string $order An optional value that sets the direction order used to sort the item list.

     Valid values are:

     * asc = ascending sort order
     * desc = descending sort order
     *     @var string $order_by An optional value that sets the file attribute used to sort the item list.

     Valid values are:

     * modified
     * name
     *     @var string $search_text
     *     @var string $start_position Indicates the starting point of the first item included in the response set. It uses a 0-based index. The default setting for this is 0.
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\CloudStorage|\Surex\DocuSign\Model\ErrorDetails
     */
    public function cloudStorageFolderGetCloudStorageFolderAll($serviceId, $userId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('cloud_storage_folder_path', null);
        $queryParam->setDefault('count', null);
        $queryParam->setDefault('order', null);
        $queryParam->setDefault('order_by', null);
        $queryParam->setDefault('search_text', null);
        $queryParam->setDefault('start_position', null);
        $url     = '/restapi/v2/accounts/{accountId}/users/{userId}/cloud_storage/{serviceId}/folders';
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\CloudStorage', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieves a list of all the items in all  the folders associated with the user from the specified cloud storage provider. You can limit the scope of the returned items by providing a comma separated list of folder IDs in the request.
     *
     * @param string $folderId   the ID of the folder being accessed
     * @param string $serviceId  The ID of the service to access.
     * @param string $userId     The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param array  $parameters {
     *
     *     @var string $cloud_storage_folder_path
     *     @var string $count An optional value that sets how many items are included in the response.

     *     @var string $order An optional value that sets the direction order used to sort the item list.

     Valid values are:

     * asc = ascending sort order
     * desc = descending sort order
     *     @var string $order_by An optional value that sets the file attribute used to sort the item list.

     Valid values are:

     * modified
     * name
     *     @var string $search_text
     *     @var string $start_position Indicates the starting point of the first item included in the response set. It uses a 0-based index. The default setting for this is 0.
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\CloudStorage|\Surex\DocuSign\Model\ErrorDetails
     */
    public function cloudStorageFolderGetCloudStorageFolder($folderId, $serviceId, $userId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('cloud_storage_folder_path', null);
        $queryParam->setDefault('count', null);
        $queryParam->setDefault('order', null);
        $queryParam->setDefault('order_by', null);
        $queryParam->setDefault('search_text', null);
        $queryParam->setDefault('start_position', null);
        $url     = '/restapi/v2/accounts/{accountId}/users/{userId}/cloud_storage/{serviceId}/folders/{folderId}';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = str_replace('{folderId}', urlencode($folderId), $url);
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\CloudStorage', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }
}
