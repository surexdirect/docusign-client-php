<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Surex\DocuSign\AccountResource as Resource;

class UserCustomSettingsResource extends Resource
{
    /**
     * Deletes the specified custom user settings for a single user.

     ###Deleting Grouped Custom User Settings###

     If the custom user settings you want to delete are grouped, you must include the following information in the header, after Content-Type, in the request:

     `X-DocuSign-User-Settings-Key:group_name`

     Where the `group_name` is your designated name for the group of customer user settings.

     If the extra header information is not included, only the custom user settings that were added without a group are deleted.
     *
     * @param string                                   $userId             The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param \Surex\DocuSign\Model\UserCustomSettings $userCustomSettings
     * @param array                                    $parameters         List of parameters
     * @param string                                   $fetch              Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\UserCustomSettings|\Surex\DocuSign\Model\ErrorDetails
     */
    public function userCustomSettingsDeleteCustomSettings($userId, \Surex\DocuSign\Model\UserCustomSettings $userCustomSettings, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/users/{userId}/custom_settings';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{userId}', urlencode($userId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($userCustomSettings, 'json');
        $request    = $this->messageFactory->createRequest('DELETE', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\UserCustomSettings', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieves a list of custom user settings for a single user.

     Custom settings provide a flexible way to store and retrieve custom user information that can be used in your own system.

     ###### Note: Custom user settings are not the same as user account settings.

     ###Getting Grouped Custom User Settings###

     If the custom user settings you want to retrieve are grouped, you must include the following information in the header, after Content-Type, in the request:

     `X-DocuSign-User-Settings-Key:group_name`

     Where the `group_name` is your designated name for the group of customer user settings.

     If the extra header information is not included, only the custom user settings that were added without a group are retrieved.
     *
     * @param string $userId     The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\UserCustomSettings|\Surex\DocuSign\Model\ErrorDetails
     */
    public function userCustomSettingsGetCustomSettings($userId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/users/{userId}/custom_settings';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{userId}', urlencode($userId), $url);
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\UserCustomSettings', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Adds or updates custom user settings for the specified user.

     ###### Note: Custom user settings are not the same as user account settings.

     Custom settings provide a flexible way to store and retrieve custom user information that you can use in your own system.

     **Important**: There is a limit on the size for all the custom user settings for a single user. The limit is 4,000 characters, which includes the XML and JSON structure for the settings.

     ### Grouping Custom User Settings ###

     You can group custom user settings when adding them. Grouping allows you to retrieve settings that are in a specific group, instead of retrieving all the user custom settings.

     To group custom user settings, add the following information in the header, after Content-Type:

     `X-DocuSign-User-Settings-Key:group_name`

     Where the `group_name` is your designated name for the group of customer user settings. Grouping is shown in the Example Request Body below.

     When getting or deleting grouped custom user settings, you must include the extra header information.

     Grouping custom user settings is not required and if the extra header information is not included, the custom user settings are added normally and can be retrieved or deleted without including the additional header.
     *
     * @param string                                   $userId             The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param \Surex\DocuSign\Model\UserCustomSettings $userCustomSettings
     * @param array                                    $parameters         List of parameters
     * @param string                                   $fetch              Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\UserCustomSettings|\Surex\DocuSign\Model\ErrorDetails
     */
    public function userCustomSettingsPutCustomSettings($userId, \Surex\DocuSign\Model\UserCustomSettings $userCustomSettings, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/users/{userId}/custom_settings';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{userId}', urlencode($userId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($userCustomSettings, 'json');
        $request    = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\UserCustomSettings', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }
}
