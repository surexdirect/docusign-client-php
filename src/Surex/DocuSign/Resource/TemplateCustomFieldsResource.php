<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Surex\DocuSign\AccountResource as Resource;

class TemplateCustomFieldsResource extends Resource
{
    /**
     * Deletes envelope custom fields in a template.
     *
     * @param string                                     $templateId           the ID of the template being accessed
     * @param \Surex\DocuSign\Model\TemplateCustomFields $templateCustomFields
     * @param array                                      $parameters           List of parameters
     * @param string                                     $fetch                Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\TemplateCustomFields|\Surex\DocuSign\Model\ErrorDetails
     */
    public function customFieldsDeleteTemplateCustomFields($templateId, \Surex\DocuSign\Model\TemplateCustomFields $templateCustomFields, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/templates/{templateId}/custom_fields';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{templateId}', urlencode($templateId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($templateCustomFields, 'json');
        $request    = $this->messageFactory->createRequest('DELETE', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\TemplateCustomFields', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieves the custom document field information from an existing template.
     *
     * @param string $templateId the ID of the template being accessed
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\TemplateCustomFields|\Surex\DocuSign\Model\ErrorDetails
     */
    public function customFieldsGetTemplateCustomFields($templateId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/templates/{templateId}/custom_fields';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\TemplateCustomFields', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Creates custom document fields in an existing template document.
     *
     * @param string                                     $templateId           the ID of the template being accessed
     * @param \Surex\DocuSign\Model\TemplateCustomFields $templateCustomFields
     * @param array                                      $parameters           List of parameters
     * @param string                                     $fetch                Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\TemplateCustomFields|\Surex\DocuSign\Model\ErrorDetails
     */
    public function customFieldsPostTemplateCustomFields($templateId, \Surex\DocuSign\Model\TemplateCustomFields $templateCustomFields, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/templates/{templateId}/custom_fields';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{templateId}', urlencode($templateId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($templateCustomFields, 'json');
        $request    = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (201 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\TemplateCustomFields', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Updates the custom fields in a template.

     Each custom field used in a template must have a unique name.
     *
     * @param string                                     $templateId           the ID of the template being accessed
     * @param \Surex\DocuSign\Model\TemplateCustomFields $templateCustomFields
     * @param array                                      $parameters           List of parameters
     * @param string                                     $fetch                Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\TemplateCustomFields|\Surex\DocuSign\Model\ErrorDetails
     */
    public function customFieldsPutTemplateCustomFields($templateId, \Surex\DocuSign\Model\TemplateCustomFields $templateCustomFields, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/templates/{templateId}/custom_fields';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{templateId}', urlencode($templateId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($templateCustomFields, 'json');
        $request    = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\TemplateCustomFields', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }
}
