<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Surex\DocuSign\AccountResource as Resource;

class ResourcesResource extends Resource
{
    /**
     * Retrieves the base resources available for the DocuSign REST APIs.

     You do not need an integrator key to view the REST API versions and resources.

     Example: https://demo.docusign.net/restapi/v2 lists all of the base resources available in version 2 of the REST API on the DocuSign Demo system.

     To view descriptions and samples of the service operations for all versions, remove the version number and add /help to the URL.

     Example: https://demo.docusign.net/restapi/help lists the REST API operations on the DocuSign Demo system with XML and JSON request and response samples.
     *
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\Resources|\Surex\DocuSign\Model\ErrorDetails
     */
    public function serviceInformationGetResourceInformation($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2';
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\Resources', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }
}
