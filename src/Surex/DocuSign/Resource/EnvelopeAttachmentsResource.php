<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Surex\DocuSign\AccountResource as Resource;

class EnvelopeAttachmentsResource extends Resource
{
    /**
     * @param string                                           $envelopeId                 The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Model\EnvelopeAttachmentsRequest $envelopeAttachmentsRequest
     * @param array                                            $parameters                 List of parameters
     * @param string                                           $fetch                      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\EnvelopeAttachmentsResult|\Surex\DocuSign\Model\ErrorDetails
     */
    public function attachmentsDeleteAttachments($envelopeId, \Surex\DocuSign\Model\EnvelopeAttachmentsRequest $envelopeAttachmentsRequest, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/envelopes/{envelopeId}/attachments';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{envelopeId}', urlencode($envelopeId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($envelopeAttachmentsRequest, 'json');
        $request    = $this->messageFactory->createRequest('DELETE', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\EnvelopeAttachmentsResult', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\EnvelopeAttachmentsResult|\Surex\DocuSign\Model\ErrorDetails
     */
    public function attachmentsGetAttachments($envelopeId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/envelopes/{envelopeId}/attachments';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{envelopeId}', urlencode($envelopeId), $url);
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\EnvelopeAttachmentsResult', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * @param string                                           $envelopeId                 The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Model\EnvelopeAttachmentsRequest $envelopeAttachmentsRequest
     * @param array                                            $parameters                 List of parameters
     * @param string                                           $fetch                      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\EnvelopeAttachmentsResult|\Surex\DocuSign\Model\ErrorDetails
     */
    public function attachmentsPutAttachments($envelopeId, \Surex\DocuSign\Model\EnvelopeAttachmentsRequest $envelopeAttachmentsRequest, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/envelopes/{envelopeId}/attachments';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{envelopeId}', urlencode($envelopeId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($envelopeAttachmentsRequest, 'json');
        $request    = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\EnvelopeAttachmentsResult', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * @param string $attachmentId
     * @param string $envelopeId   The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param array  $parameters   List of parameters
     * @param string $fetch        Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\ErrorDetails
     */
    public function attachmentsGetAttachment($attachmentId, $envelopeId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/envelopes/{envelopeId}/attachments/{attachmentId}';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{attachmentId}', urlencode($attachmentId), $url);
        $url        = str_replace('{envelopeId}', urlencode($envelopeId), $url);
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
     * @param string                           $attachmentId
     * @param string                           $envelopeId   The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Model\Attachment $attachment
     * @param array                            $parameters   List of parameters
     * @param string                           $fetch        Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\EnvelopeAttachmentsResult|\Surex\DocuSign\Model\ErrorDetails
     */
    public function attachmentsPutAttachment($attachmentId, $envelopeId, \Surex\DocuSign\Model\Attachment $attachment, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/envelopes/{envelopeId}/attachments/{attachmentId}';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{attachmentId}', urlencode($attachmentId), $url);
        $url        = str_replace('{envelopeId}', urlencode($envelopeId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($attachment, 'json');
        $request    = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\EnvelopeAttachmentsResult', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }
}
