<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Surex\DocuSign\AccountResource as Resource;

class EnvelopeRecipientTabsResource extends Resource
{
    /**
     * Deletes one or more tabs associated with a recipient in a draft envelope.
     *
     * @param string                                      $envelopeId            The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string                                      $recipientId           the `recipientId` used when the envelope or template was created
     * @param \Surex\DocuSign\Model\EnvelopeRecipientTabs $envelopeRecipientTabs
     * @param array                                       $parameters            List of parameters
     * @param string                                      $fetch                 Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\EnvelopeRecipientTabs|\Surex\DocuSign\Model\ErrorDetails
     */
    public function recipientsDeleteRecipientTabs($envelopeId, $recipientId, \Surex\DocuSign\Model\EnvelopeRecipientTabs $envelopeRecipientTabs, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/envelopes/{envelopeId}/recipients/{recipientId}/tabs';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{envelopeId}', urlencode($envelopeId), $url);
        $url        = str_replace('{recipientId}', urlencode($recipientId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($envelopeRecipientTabs, 'json');
        $request    = $this->messageFactory->createRequest('DELETE', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\EnvelopeRecipientTabs', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieves information about the tabs associated with a recipient in a draft envelope.
     *
     * @param string $envelopeId  The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $recipientId the `recipientId` used when the envelope or template was created
     * @param array  $parameters  {
     *
     *     @var string $include_anchor_tab_locations When set to **true**, all tabs with anchor tab properties are included in the response.
     *     @var string $include_metadata Reserved for DocuSign.
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\EnvelopeRecipientTabs|\Surex\DocuSign\Model\ErrorDetails
     */
    public function recipientsGetRecipientTabs($envelopeId, $recipientId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('include_anchor_tab_locations', null);
        $queryParam->setDefault('include_metadata', null);
        $url     = '/restapi/v2/accounts/{accountId}/envelopes/{envelopeId}/recipients/{recipientId}/tabs';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = str_replace('{envelopeId}', urlencode($envelopeId), $url);
        $url     = str_replace('{recipientId}', urlencode($recipientId), $url);
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\EnvelopeRecipientTabs', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Adds one or more tabs for a recipient.
     *
     * @param string                                      $envelopeId            The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string                                      $recipientId           the `recipientId` used when the envelope or template was created
     * @param \Surex\DocuSign\Model\EnvelopeRecipientTabs $envelopeRecipientTabs
     * @param array                                       $parameters            List of parameters
     * @param string                                      $fetch                 Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\EnvelopeRecipientTabs|\Surex\DocuSign\Model\ErrorDetails
     */
    public function recipientsPostRecipientTabs($envelopeId, $recipientId, \Surex\DocuSign\Model\EnvelopeRecipientTabs $envelopeRecipientTabs, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/envelopes/{envelopeId}/recipients/{recipientId}/tabs';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{envelopeId}', urlencode($envelopeId), $url);
        $url        = str_replace('{recipientId}', urlencode($recipientId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($envelopeRecipientTabs, 'json');
        $request    = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (201 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\EnvelopeRecipientTabs', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Updates one or more tabs for a recipient in a draft envelope.
     *
     * @param string                                      $envelopeId            The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string                                      $recipientId           the `recipientId` used when the envelope or template was created
     * @param \Surex\DocuSign\Model\EnvelopeRecipientTabs $envelopeRecipientTabs
     * @param array                                       $parameters            List of parameters
     * @param string                                      $fetch                 Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\EnvelopeRecipientTabs|\Surex\DocuSign\Model\ErrorDetails
     */
    public function recipientsPutRecipientTabs($envelopeId, $recipientId, \Surex\DocuSign\Model\EnvelopeRecipientTabs $envelopeRecipientTabs, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/envelopes/{envelopeId}/recipients/{recipientId}/tabs';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{envelopeId}', urlencode($envelopeId), $url);
        $url        = str_replace('{recipientId}', urlencode($recipientId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($envelopeRecipientTabs, 'json');
        $request    = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\EnvelopeRecipientTabs', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }
}
