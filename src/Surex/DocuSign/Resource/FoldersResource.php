<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Surex\DocuSign\AccountResource as Resource;

class FoldersResource extends Resource
{
    /**
     * Retrieves a list of the folders for the account, including the folder hierarchy. You can specify whether to return just the template folder or template folder and normal folders by setting the `template` query string parameter.
     *
     * @param array $parameters {
     *
     *     @var string $include reserved for DocuSign

     *     @var string $include_items
     *     @var string $start_position reserved for DocuSign

     *     @var string $template Specifies the items that are returned. Valid values are:

     * include - The folder list will return normal folders plus template folders.
     * only - Only the list of template folders are returned.
     *     @var string $user_filter Reserved for DocuSign.

     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\Folders|\Surex\DocuSign\Model\ErrorDetails
     */
    public function foldersGetFolders($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('include', null);
        $queryParam->setDefault('include_items', null);
        $queryParam->setDefault('start_position', null);
        $queryParam->setDefault('template', null);
        $queryParam->setDefault('user_filter', null);
        $url     = '/restapi/v2/accounts/{accountId}/folders';
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\Folders', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieves a list of the envelopes in the specified folder. You can narrow the query by specifying search criteria in the query string parameters.
     *
     * @param string $folderId   the ID of the folder being accessed
     * @param array  $parameters {
     *
     *     @var string $from_date  Only return items on or after this date. If no value is provided, the default search is the previous 30 days.
     *     @var string $include_items
     *     @var string $owner_email  the email of the folder owner
     *     @var string $owner_name  the name of the folder owner
     *     @var string $search_text  The search text used to search the items of the envelope. The search looks at recipient names and emails, envelope custom fields, sender name, and subject.
     *     @var string $start_position The position of the folder items to return. This is used for repeated calls, when the number of envelopes returned is too much for one return (calls return 100 envelopes at a time). The default value is 0.
     *     @var string $status The current status of the envelope. If no value is provided, the default search is all/any status.
     *     @var string $to_date Only return items up to this date. If no value is provided, the default search is to the current date.
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\FolderItemsResponse|\Surex\DocuSign\Model\ErrorDetails
     */
    public function foldersGetFolderItems($folderId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('from_date', null);
        $queryParam->setDefault('include_items', null);
        $queryParam->setDefault('owner_email', null);
        $queryParam->setDefault('owner_name', null);
        $queryParam->setDefault('search_text', null);
        $queryParam->setDefault('start_position', null);
        $queryParam->setDefault('status', null);
        $queryParam->setDefault('to_date', null);
        $url     = '/restapi/v2/accounts/{accountId}/folders/{folderId}';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = str_replace('{folderId}', urlencode($folderId), $url);
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\FolderItemsResponse', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Moves an envelope from its current folder to the specified folder.

     ###### Note: You can use this endpoint to delete envelopes by specifying `recyclebin` in the `folderId` parameter of the endpoint. Placing an in process envelope (envelope status of `sent` or `delivered`) in the recycle bin voids the envelope. You can also use this endpoint to delete templates by specifying a template ID instead of an envelope ID in the 'envelopeIds' property and specifying `recyclebin` in the `folderId` parameter.
     *
     * @param string                               $folderId       the ID of the folder being accessed
     * @param \Surex\DocuSign\Model\FoldersRequest $foldersRequest
     * @param array                                $parameters     List of parameters
     * @param string                               $fetch          Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\Folders|\Surex\DocuSign\Model\ErrorDetails
     */
    public function foldersPutFolderById($folderId, \Surex\DocuSign\Model\FoldersRequest $foldersRequest, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/folders/{folderId}';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{folderId}', urlencode($folderId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($foldersRequest, 'json');
        $request    = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\Folders', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieves a list of envelopes that match the criteria specified in the query.

     If the user ID of the user making the call is the same as the user ID for any returned recipient, then the userId property is added to the returned information for those recipients.
     *
     * @param string $searchFolderId Specifies the envelope group that is searched by the request. These are logical groupings, not actual folder names. Valid values are: drafts, awaiting_my_signature, completed, out_for_signature.
     * @param array  $parameters     {
     *
     *     @var string $all specifies that all envelopes that match the criteria are returned
     *     @var string $count Specifies the number of records returned in the cache. The number must be greater than 0 and less than or equal to 100.
     *     @var string $from_date Specifies the start of the date range to return. If no value is provided, the default search is the previous 30 days.
     *     @var string $include_recipients when set to **true**, the recipient information is returned in the response
     *     @var string $order Specifies the order in which the list is returned. Valid values are: `asc` for ascending order, and `desc` for descending order.
     *     @var string $order_by Specifies the property used to sort the list. Valid values are: `action_required`, `created`, `completed`, `sent`, `signer_list`, `status`, or `subject`.
     *     @var string $start_position specifies the the starting location in the result set of the items that are returned
     *     @var string $to_date Specifies the end of the date range to return.
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\FolderItemResponse|\Surex\DocuSign\Model\ErrorDetails
     */
    public function searchFoldersGetSearchFolderContents($searchFolderId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('all', null);
        $queryParam->setDefault('count', null);
        $queryParam->setDefault('from_date', null);
        $queryParam->setDefault('include_recipients', null);
        $queryParam->setDefault('order', null);
        $queryParam->setDefault('order_by', null);
        $queryParam->setDefault('start_position', null);
        $queryParam->setDefault('to_date', null);
        $url     = '/restapi/v2/accounts/{accountId}/search_folders/{searchFolderId}';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = str_replace('{searchFolderId}', urlencode($searchFolderId), $url);
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\FolderItemResponse', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }
}
