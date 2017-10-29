<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Surex\DocuSign\AccountResource as Resource;

class TemplateRecipientTabsResource extends Resource
{
    /**
     * Deletes one or more tabs associated with a recipient in a template.
     *
     * @param string                             $recipientId  the `recipientId` used when the envelope or template was created
     * @param string                             $templateId   the ID of the template being accessed
     * @param \Surex\DocuSign\Model\TemplateTabs $templateTabs
     * @param array                              $parameters   List of parameters
     * @param string                             $fetch        Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\TemplateRecipientTabs|\Surex\DocuSign\Model\ErrorDetails
     */
    public function recipientsDeleteTemplateRecipientTabs($recipientId, $templateId, \Surex\DocuSign\Model\TemplateTabs $templateTabs, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/templates/{templateId}/recipients/{recipientId}/tabs';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{recipientId}', urlencode($recipientId), $url);
        $url        = str_replace('{templateId}', urlencode($templateId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($templateTabs, 'json');
        $request    = $this->messageFactory->createRequest('DELETE', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT === $fetch) {
            if ('200' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\TemplateRecipientTabs', 'json');
            }
            if ('400' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Gets the tabs information for a signer or sign-in-person recipient in a template.
     *
     * @param string $recipientId the `recipientId` used when the envelope or template was created
     * @param string $templateId  the ID of the template being accessed
     * @param array  $parameters  {
     *
     *     @var string $include_anchor_tab_locations When set to **true**, all tabs with anchor tab properties are included in the response.
     *     @var string $include_metadata Reserved for DocuSign.
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\TemplateRecipientTabs|\Surex\DocuSign\Model\ErrorDetails
     */
    public function recipientsGetTemplateRecipientTabs($recipientId, $templateId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('include_anchor_tab_locations', null);
        $queryParam->setDefault('include_metadata', null);
        $url     = '/restapi/v2/accounts/{accountId}/templates/{templateId}/recipients/{recipientId}/tabs';
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\TemplateRecipientTabs', 'json');
            }
            if ('400' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Adds one or more tabs for a recipient.
     *
     * @param string                             $recipientId  the `recipientId` used when the envelope or template was created
     * @param string                             $templateId   the ID of the template being accessed
     * @param \Surex\DocuSign\Model\TemplateTabs $templateTabs
     * @param array                              $parameters   List of parameters
     * @param string                             $fetch        Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\TemplateRecipientTabs|\Surex\DocuSign\Model\ErrorDetails
     */
    public function recipientsPostTemplateRecipientTabs($recipientId, $templateId, \Surex\DocuSign\Model\TemplateTabs $templateTabs, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/templates/{templateId}/recipients/{recipientId}/tabs';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{recipientId}', urlencode($recipientId), $url);
        $url        = str_replace('{templateId}', urlencode($templateId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($templateTabs, 'json');
        $request    = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT === $fetch) {
            if ('201' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\TemplateRecipientTabs', 'json');
            }
            if ('400' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Updates one or more tabs for a recipient in a template.
     *
     * @param string                             $recipientId  the `recipientId` used when the envelope or template was created
     * @param string                             $templateId   the ID of the template being accessed
     * @param \Surex\DocuSign\Model\TemplateTabs $templateTabs
     * @param array                              $parameters   List of parameters
     * @param string                             $fetch        Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\TemplateRecipientTabs|\Surex\DocuSign\Model\ErrorDetails
     */
    public function recipientsPutTemplateRecipientTabs($recipientId, $templateId, \Surex\DocuSign\Model\TemplateTabs $templateTabs, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/templates/{templateId}/recipients/{recipientId}/tabs';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{recipientId}', urlencode($recipientId), $url);
        $url        = str_replace('{templateId}', urlencode($templateId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($templateTabs, 'json');
        $request    = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT === $fetch) {
            if ('200' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\TemplateRecipientTabs', 'json');
            }
            if ('400' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }
}
