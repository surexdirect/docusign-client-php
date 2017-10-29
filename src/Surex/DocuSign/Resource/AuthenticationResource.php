<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Surex\DocuSign\AccountResource as Resource;

class AuthenticationResource extends Resource
{
    /**
     * Retrieves account information for the authenticated user. Since the API is sessionless, this method does not actually log you in.
     Instead, the method returns information about the account or accounts that the authenticated user has access to.

     ###### Important: This method must only be used for the [Legacy Header Authentication][legacyheader] flow. Use the [`AccountServer: userInfo` method](../../../../guide/authentication/userinfo.html) for the OAuth2 Authentiction Code and Implicit Grant flows.

     Each account has a `baseUrl` property, returned in the response.
     Use this `baseUrl` in all future API calls as the base of the request URL.

     For each account, the `baseUrl` property includes the DocuSign server, the API version, and the `accountId` property.

     It is not uncommon for an authenticated user to have access to more than one account (and more than one `baseUrl`). Depending on your integration's use case, your integration may choose to:

     * Use the account whose `isDefault` field is `true`.
     * List the available accounts and ask the user to choose one.
     * Enable the system administrator to set the account that should be used by your integration.

     If this method returns successfully, then you also know that the user has successfully authenticated with the DocuSign Signature platform.


     [legacyheader]: ../../../../guide/authentication/legacy_auth.html
     [userinfo]: ../../../../guide/authentication/userinfo.html
     [authcode]: ../../../../guide/authentication/oa2_auth_code.md
     [implicit]: ../../../../guide/authentication/oa2_implicit.md

     *
     * @param array $parameters {
     *
     *     @var string $api_password reserved for DocuSign

     *     @var string $embed_account_id_guid
     *     @var string $include_account_id_guid when set to **true**, shows the account ID GUID in the response
     *     @var string $login_settings determines whether login settings are returned in the response

     Valid Values:

     * all -  All the login settings are returned.
     * none - no login settings are returned.
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\Authentication|\Surex\DocuSign\Model\ErrorDetails
     */
    public function loginInformationGetLoginInformation($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('api_password', null);
        $queryParam->setDefault('embed_account_id_guid', null);
        $queryParam->setDefault('include_account_id_guid', null);
        $queryParam->setDefault('login_settings', null);
        $url     = '/restapi/v2/login_information';
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\Authentication', 'json');
            }
            if ('400' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Updates the password for a specified user.
     *
     * @param string                                        $loginPart               currently, only the value **password** is supported
     * @param \Surex\DocuSign\Model\UserPasswordInformation $userPasswordInformation
     * @param array                                         $parameters              List of parameters
     * @param string                                        $fetch                   Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\ErrorDetails
     */
    public function loginInformationPutLoginInformation($loginPart, \Surex\DocuSign\Model\UserPasswordInformation $userPasswordInformation, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/login_information/{loginPart}';
        $url        = str_replace('{loginPart}', urlencode($loginPart), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($userPasswordInformation, 'json');
        $request    = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
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
     * **Deprecated**.

     Revokes an OAuth2 authorization server token. After the revocation is complete, a caller must re-authenticate to restore access.

     *
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\ErrorDetails
     */
    public function oAuth2PostRevoke($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/oauth2/revoke';
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
            if ('400' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * **Deprecated**.

     Creates an OAuth2 authorization server token endpoint.

     *
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\OauthAccess|\Surex\DocuSign\Model\ErrorDetails
     */
    public function oAuth2PostToken($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/oauth2/token';
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\OauthAccess', 'json');
            }
            if ('400' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }
}
