<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Surex\DocuSign\AccountResource as Resource;

class TemplateBulkRecipientsResource extends Resource
{
    /**
     * Deletes the bulk recipient list on a template.
     *
     * @param string $recipientId the `recipientId` used when the envelope or template was created
     * @param string $templateId  the ID of the template being accessed
     * @param array  $parameters  List of parameters
     * @param string $fetch       Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\BulkRecipientsUpdateResponse|\Surex\DocuSign\Model\ErrorDetails
     */
    public function recipientsDeleteTemplateBulkRecipientsFile($recipientId, $templateId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/templates/{templateId}/recipients/{recipientId}/bulk_recipients';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{recipientId}', urlencode($recipientId), $url);
        $url        = str_replace('{templateId}', urlencode($templateId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('DELETE', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT === $fetch) {
            if ('200' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\BulkRecipientsUpdateResponse', 'json');
            }
            if ('400' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieves the bulk recipient file information from a template that has a bulk recipient.
     *
     * @param string $recipientId the `recipientId` used when the envelope or template was created
     * @param string $templateId  the ID of the template being accessed
     * @param array  $parameters  {
     *
     *     @var string $include_tabs when set to **true**, the tab information associated with the recipient is included in the response
     *     @var string $start_position Reserved for DocuSign.
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\TemplateBulkRecipients|\Surex\DocuSign\Model\ErrorDetails
     */
    public function recipientsGetTemplateBulkRecipients($recipientId, $templateId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('include_tabs', null);
        $queryParam->setDefault('start_position', null);
        $url     = '/restapi/v2/accounts/{accountId}/templates/{templateId}/recipients/{recipientId}/bulk_recipients';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = str_replace('{recipientId}', urlencode($recipientId), $url);
        $url     = str_replace('{templateId}', urlencode($templateId), $url);
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\TemplateBulkRecipients', 'json');
            }
            if ('400' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Updates the bulk recipients in a template using a file upload. The Content-Type supported for uploading a bulk recipient file is CSV (text/csv).

     The REST API does not support modifying individual rows or values in the bulk recipients file. It only allows the entire file to be added or replaced with a new file.
     *
     * @param string                                      $recipientId           the `recipientId` used when the envelope or template was created
     * @param string                                      $templateId            the ID of the template being accessed
     * @param \Surex\DocuSign\Model\BulkRecipientsRequest $bulkRecipientsRequest
     * @param array                                       $parameters            List of parameters
     * @param string                                      $fetch                 Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\BulkRecipientsSummaryResponse|\Surex\DocuSign\Model\ErrorDetails
     */
    public function recipientsPutTemplateBulkRecipients($recipientId, $templateId, \Surex\DocuSign\Model\BulkRecipientsRequest $bulkRecipientsRequest, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/templates/{templateId}/recipients/{recipientId}/bulk_recipients';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{recipientId}', urlencode($recipientId), $url);
        $url        = str_replace('{templateId}', urlencode($templateId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($bulkRecipientsRequest, 'json');
        $request    = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT === $fetch) {
            if ('200' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\BulkRecipientsSummaryResponse', 'json');
            }
            if ('400' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }
}
