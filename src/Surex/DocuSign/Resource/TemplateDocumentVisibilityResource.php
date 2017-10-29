<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Surex\DocuSign\AccountResource as Resource;

class TemplateDocumentVisibilityResource extends Resource
{
    /**
     * @param string $recipientId the `recipientId` used when the envelope or template was created
     * @param string $templateId  the ID of the template being accessed
     * @param array  $parameters  List of parameters
     * @param string $fetch       Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\EnvelopeDocumentVisibility|\Surex\DocuSign\Model\ErrorDetails
     */
    public function recipientsGetTemplateRecipientDocumentVisibility($recipientId, $templateId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/templates/{templateId}/recipients/{recipientId}/document_visibility';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{recipientId}', urlencode($recipientId), $url);
        $url        = str_replace('{templateId}', urlencode($templateId), $url);
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\EnvelopeDocumentVisibility', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * @param string                                           $recipientId                the `recipientId` used when the envelope or template was created
     * @param string                                           $templateId                 the ID of the template being accessed
     * @param \Surex\DocuSign\Model\TemplateDocumentVisibility $templateDocumentVisibility
     * @param array                                            $parameters                 List of parameters
     * @param string                                           $fetch                      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\TemplateDocumentVisibility|\Surex\DocuSign\Model\ErrorDetails
     */
    public function recipientsPutTemplateRecipientDocumentVisibility($recipientId, $templateId, \Surex\DocuSign\Model\TemplateDocumentVisibility $templateDocumentVisibility, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/templates/{templateId}/recipients/{recipientId}/document_visibility';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{recipientId}', urlencode($recipientId), $url);
        $url        = str_replace('{templateId}', urlencode($templateId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($templateDocumentVisibility, 'json');
        $request    = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\TemplateDocumentVisibility', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * @param string                                           $templateId                 the ID of the template being accessed
     * @param \Surex\DocuSign\Model\TemplateDocumentVisibility $templateDocumentVisibility
     * @param array                                            $parameters                 List of parameters
     * @param string                                           $fetch                      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\TemplateDocumentVisibility|\Surex\DocuSign\Model\ErrorDetails
     */
    public function recipientsPutTemplateRecipientsDocumentVisibility($templateId, \Surex\DocuSign\Model\TemplateDocumentVisibility $templateDocumentVisibility, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/templates/{templateId}/recipients/document_visibility';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{templateId}', urlencode($templateId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($templateDocumentVisibility, 'json');
        $request    = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\TemplateDocumentVisibility', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }
}
