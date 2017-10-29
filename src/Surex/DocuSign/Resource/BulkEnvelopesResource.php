<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Surex\DocuSign\AccountResource as Resource;

class BulkEnvelopesResource extends Resource
{
    /**
     * Retrieves status information about all the bulk recipient batches. A bulk recipient batch is the set of envelopes sent from a single bulk recipient file. The response includes general information about each bulk recipient batch.

     The response returns information about the envelopes sent with bulk recipient batches, including the `batchId` property, which can be used to retrieve a more detailed status of individual bulk recipient batches.
     *
     * @param array $parameters {
     *
     *     @var string $count The number of results to return. This can be 1 to 20.
     *     @var string $include Specifies which entries are included in the response. Multiple entries can be included by using commas in the query string (example: ?include="failed,queued")

     Valid values:
     * all - Returns all entries. If present, overrides all other query settings. This is the default if no query string is provided.
     * failed - Entries with a failed status.
     * processing - Entries with a processing status.
     * queued - Entries with a queued status.
     * sent - Entries with a sent status.

     *     @var string $start_position The position of the bulk envelope items in the response. This is used for repeated calls, when the number of bulk envelopes returned is too large for one return. The default value is 0.
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\BulkEnvelopes|\Surex\DocuSign\Model\ErrorDetails
     */
    public function bulkEnvelopesGetEnvelopesBulk($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('count', null);
        $queryParam->setDefault('include', null);
        $queryParam->setDefault('start_position', null);
        $url     = '/restapi/v2/accounts/{accountId}/bulk_envelopes';
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\BulkEnvelopes', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieves the status information of a single bulk recipient batch. A bulk recipient batch is the set of envelopes sent from a single bulk recipient file.
     *
     * @param string $batchId
     * @param array  $parameters {
     *
     *     @var string $count specifies the number of entries to return
     *     @var string $include Specifies which entries are included in the response. Multiple entries can be included by using commas in the query string (example: ?include="failed,queued")

     Valid values:
     * all - Returns all entries. If present, overrides all other query settings. This is the default if no query string is provided.
     * failed - Entries with a failed status.
     * processing - Entries with a processing status.
     * queued - Entries with a queued status.
     * sent - Entries with a sent status.

     *     @var string $start_position Specifies the location in the list of envelopes from which to start.
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\BulkEnvelopeStatus|\Surex\DocuSign\Model\ErrorDetails
     */
    public function bulkEnvelopesGetBulkEnvelopesBatchId($batchId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('count', null);
        $queryParam->setDefault('include', null);
        $queryParam->setDefault('start_position', null);
        $url     = '/restapi/v2/accounts/{accountId}/bulk_envelopes/{batchId}';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = str_replace('{batchId}', urlencode($batchId), $url);
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\BulkEnvelopeStatus', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }
}
