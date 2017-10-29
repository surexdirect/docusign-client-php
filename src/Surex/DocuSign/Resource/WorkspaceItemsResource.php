<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Surex\DocuSign\AccountResource as Resource;

class WorkspaceItemsResource extends Resource
{
    /**
     * @param string                                  $folderId          the ID of the folder being accessed
     * @param string                                  $workspaceId       specifies the workspace ID GUID
     * @param \Surex\DocuSign\Model\WorkspaceItemList $workspaceItemList
     * @param array                                   $parameters        List of parameters
     * @param string                                  $fetch             Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\ErrorDetails
     */
    public function workspaceFolderDeleteWorkspaceItems($folderId, $workspaceId, \Surex\DocuSign\Model\WorkspaceItemList $workspaceItemList, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/workspaces/{workspaceId}/folders/{folderId}';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{folderId}', urlencode($folderId), $url);
        $url        = str_replace('{workspaceId}', urlencode($workspaceId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($workspaceItemList, 'json');
        $request    = $this->messageFactory->createRequest('DELETE', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT === $fetch) {
            if ('400' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieves workspace folder contents, which can include sub folders and files.
     *
     * @param string $folderId    the ID of the folder being accessed
     * @param string $workspaceId specifies the workspace ID GUID
     * @param array  $parameters  {
     *
     *     @var string $count the maximum number of results to be returned by this request
     *     @var string $include_files When set to **true**, file information is returned in the response along with folder information. The default is **false**.
     *     @var string $include_sub_folders When set to **true**, information about the sub-folders of the current folder is returned. The default is **false**.
     *     @var string $include_thumbnails When set to **true**, thumbnails are returned as part of the response.  The default is **false**.
     *     @var string $include_user_detail Set to **true** to return extended details about the user. The default is **false**.
     *     @var string $start_position the position within the total result set from which to start returning values
     *     @var string $workspace_user_id If set, then the results are filtered to those associated with the specified userId.
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\WorkspaceFolderContents|\Surex\DocuSign\Model\ErrorDetails
     */
    public function workspaceFolderGetWorkspaceFolder($folderId, $workspaceId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('count', null);
        $queryParam->setDefault('include_files', null);
        $queryParam->setDefault('include_sub_folders', null);
        $queryParam->setDefault('include_thumbnails', null);
        $queryParam->setDefault('include_user_detail', null);
        $queryParam->setDefault('start_position', null);
        $queryParam->setDefault('workspace_user_id', null);
        $url     = '/restapi/v2/accounts/{accountId}/workspaces/{workspaceId}/folders/{folderId}';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = str_replace('{folderId}', urlencode($folderId), $url);
        $url     = str_replace('{workspaceId}', urlencode($workspaceId), $url);
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\WorkspaceFolderContents', 'json');
            }
            if ('400' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * @param string $folderId    the ID of the folder being accessed
     * @param string $workspaceId specifies the workspace ID GUID
     * @param array  $parameters  List of parameters
     * @param string $fetch       Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\WorkspaceItems|\Surex\DocuSign\Model\ErrorDetails
     */
    public function workspaceFilePostWorkspaceFiles($folderId, $workspaceId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/workspaces/{workspaceId}/folders/{folderId}/files';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{folderId}', urlencode($folderId), $url);
        $url        = str_replace('{workspaceId}', urlencode($workspaceId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT === $fetch) {
            if ('201' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\WorkspaceItems', 'json');
            }
            if ('400' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieves a workspace file (the binary).
     *
     * @param string $fileId      specifies the room file ID GUID
     * @param string $folderId    the ID of the folder being accessed
     * @param string $workspaceId specifies the workspace ID GUID
     * @param array  $parameters  {
     *
     *     @var string $is_download When set to **true**, the Content-Disposition header is set in the response. The value of the header provides the filename of the file. Default is **false**.
     *     @var string $pdf_version When set to **true** the file returned as a PDF.
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\ErrorDetails
     */
    public function workspaceFileGetWorkspaceFile($fileId, $folderId, $workspaceId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('is_download', null);
        $queryParam->setDefault('pdf_version', null);
        $url     = '/restapi/v2/accounts/{accountId}/workspaces/{workspaceId}/folders/{folderId}/files/{fileId}';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = str_replace('{fileId}', urlencode($fileId), $url);
        $url     = str_replace('{folderId}', urlencode($folderId), $url);
        $url     = str_replace('{workspaceId}', urlencode($workspaceId), $url);
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
            if ('400' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Updates workspace item metadata for one or more specific files/folders.
     *
     * @param string $fileId      specifies the room file ID GUID
     * @param string $folderId    the ID of the folder being accessed
     * @param string $workspaceId specifies the workspace ID GUID
     * @param array  $parameters  List of parameters
     * @param string $fetch       Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\WorkspaceItems|\Surex\DocuSign\Model\ErrorDetails
     */
    public function workspaceFilePutWorkspaceFile($fileId, $folderId, $workspaceId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/workspaces/{workspaceId}/folders/{folderId}/files/{fileId}';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{fileId}', urlencode($fileId), $url);
        $url        = str_replace('{folderId}', urlencode($folderId), $url);
        $url        = str_replace('{workspaceId}', urlencode($workspaceId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT === $fetch) {
            if ('200' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\WorkspaceItems', 'json');
            }
            if ('400' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieves a workspace file as rasterized pages.
     *
     * @param string $fileId      specifies the room file ID GUID
     * @param string $folderId    the ID of the folder being accessed
     * @param string $workspaceId specifies the workspace ID GUID
     * @param array  $parameters  {
     *
     *     @var string $count the maximum number of results to be returned by this request
     *     @var string $dpi Number of dots per inch for the resulting image. The default if not used is 94. The range is 1-310.
     *     @var string $max_height sets the maximum height (in pixels) of the returned image
     *     @var string $max_width sets the maximum width (in pixels) of the returned image
     *     @var string $start_position The position within the total result set from which to start returning values. The value **thumbnail** may be used to return the page image.
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\PageImages|\Surex\DocuSign\Model\ErrorDetails
     */
    public function workspaceFilePagesGetWorkspaceFilePages($fileId, $folderId, $workspaceId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('count', null);
        $queryParam->setDefault('dpi', null);
        $queryParam->setDefault('max_height', null);
        $queryParam->setDefault('max_width', null);
        $queryParam->setDefault('start_position', null);
        $url     = '/restapi/v2/accounts/{accountId}/workspaces/{workspaceId}/folders/{folderId}/files/{fileId}/pages';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = str_replace('{fileId}', urlencode($fileId), $url);
        $url     = str_replace('{folderId}', urlencode($folderId), $url);
        $url     = str_replace('{workspaceId}', urlencode($workspaceId), $url);
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\PageImages', 'json');
            }
            if ('400' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }
}
