<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Surex\DocuSign\AccountResource as Resource;

class TemplateDocumentTabsResource extends Resource
{
    /**
     * @param string $documentId the ID of the document being accessed
     * @param string $pageNumber the page number being accessed
     * @param string $templateId the ID of the template being accessed
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\TemplateDocumentTabs|\Surex\DocuSign\Model\ErrorDetails
     */
    public function tabsGetTemplatePageTabs($documentId, $pageNumber, $templateId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/templates/{templateId}/documents/{documentId}/pages/{pageNumber}/tabs';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{documentId}', urlencode($documentId), $url);
        $url        = str_replace('{pageNumber}', urlencode($pageNumber), $url);
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\TemplateDocumentTabs', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * @param string $documentId the ID of the document being accessed
     * @param string $templateId the ID of the template being accessed
     * @param array  $parameters {
     *
     *     @var string $page_numbers
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\TemplateDocumentTabs|\Surex\DocuSign\Model\ErrorDetails
     */
    public function tabsGetTemplateDocumentTabs($documentId, $templateId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('page_numbers', null);
        $url     = '/restapi/v2/accounts/{accountId}/templates/{templateId}/documents/{documentId}/tabs';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = str_replace('{documentId}', urlencode($documentId), $url);
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
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\TemplateDocumentTabs', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }
}
