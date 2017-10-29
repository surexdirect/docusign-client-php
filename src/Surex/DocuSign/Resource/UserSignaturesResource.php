<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Surex\DocuSign\AccountResource as Resource;

class UserSignaturesResource extends Resource
{
    /**
     * Retrieves the signature definitions for the specified user.

     The userId parameter specified in the endpoint must match the authenticated user's user ID and the user must be a member of the account.

     The `signatureId` parameter accepts a signature ID or a signature name. DocuSign recommends you use signature ID (`signatureId`), since some names contain characters that do not properly encode into a URL. If you use the user name, it is likely that the name includes spaces. In that case, URL encode the name before using it in the endpoint.

     For example encode "Bob Smith" as "Bob%20Smith".
     *
     * @param string $userId     The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param array  $parameters {
     *
     *     @var string $stamp_type
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\UserSignaturesInformation|\Surex\DocuSign\Model\ErrorDetails
     */
    public function userSignaturesGetUserSignatures($userId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('stamp_type', null);
        $url     = '/restapi/v2/accounts/{accountId}/users/{userId}/signatures';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = str_replace('{userId}', urlencode($userId), $url);
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\UserSignaturesInformation', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Adds a user signature image and/or user initials image to the specified user.

     The userId property specified in the endpoint must match the authenticated user's userId and the user must be a member of the account.

     The rules and processes associated with this are:

     * If Content-Type is set to application/json, then the default behavior for creating a default signature image, based on the name and a DocuSign font, is used.
     * If Content-Type is set to multipart/form-data, then the request must contain a first part with the user signature information, followed by parts that contain the images.

     For each Image part, the Content-Disposition header has a "filename" value that is used to map to the `signatureName` and/or `signatureInitials` properties in the JSON to the image.

     For example:
     `Content-Disposition: file; filename="Ron Test20121127083900"`

     If no matching image (by filename value) is found, then the image is not set. One, both, or neither of the signature and initials images can be set with this call.

     The Content-Transfer-Encoding: base64 header, set in the header for the part containing the image, can be set to indicate that the images are formatted as base64 instead of as binary.

     If successful, 200-OK is returned, and a JSON structure containing the signature information is provided, note that the signatureId can change with each API POST, PUT, or DELETE since the changes to the signature structure cause the current signature to be closed, and a new signature record to be created.
     *
     * @param string                                          $userId                    The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param \Surex\DocuSign\Model\UserSignaturesInformation $userSignaturesInformation
     * @param array                                           $parameters                List of parameters
     * @param string                                          $fetch                     Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\UserSignaturesInformation|\Surex\DocuSign\Model\ErrorDetails
     */
    public function userSignaturesPostUserSignatures($userId, \Surex\DocuSign\Model\UserSignaturesInformation $userSignaturesInformation, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/users/{userId}/signatures';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{userId}', urlencode($userId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($userSignaturesInformation, 'json');
        $request    = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (201 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\UserSignaturesInformation', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * @param string                                          $userId                    The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param \Surex\DocuSign\Model\UserSignaturesInformation $userSignaturesInformation
     * @param array                                           $parameters                List of parameters
     * @param string                                          $fetch                     Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\UserSignaturesInformation|\Surex\DocuSign\Model\ErrorDetails
     */
    public function userSignaturesPutUserSignature($userId, \Surex\DocuSign\Model\UserSignaturesInformation $userSignaturesInformation, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/users/{userId}/signatures';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{userId}', urlencode($userId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($userSignaturesInformation, 'json');
        $request    = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\UserSignaturesInformation', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Removes the signature information for the user.

     The userId parameter specified in the endpoint must match the authenticated user's user ID and the user must be a member of the account.

     The `signatureId` accepts a signature ID or a signature name. DocuSign recommends you use signature ID (`signatureId`), since some names contain characters that do not properly encode into a URL. If you use the user name, it is likely that the name includes spaces. In that case, URL encode the name before using it in the endpoint.

     For example encode "Bob Smith" as "Bob%20Smith".
     *
     * @param string $signatureId the ID of the signature being accessed
     * @param string $userId      The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param array  $parameters  List of parameters
     * @param string $fetch       Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\ErrorDetails
     */
    public function userSignaturesDeleteUserSignature($signatureId, $userId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/users/{userId}/signatures/{signatureId}';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{signatureId}', urlencode($signatureId), $url);
        $url        = str_replace('{userId}', urlencode($userId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('DELETE', $url, $headers, $body);
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
     * Retrieves the structure of a single signature with a known signature name.

     The userId specified in the endpoint must match the authenticated user's user ID and the user must be a member of the account.

     The `signatureId` parameter accepts a signature ID or a signature name. DocuSign recommends you use signature ID (`signatureId`), since some names contain characters that do not properly encode into a URL. If you use the user name, it is likely that the name includes spaces. In that case, URL encode the name before using it in the endpoint.

     For example encode "Bob Smith" as "Bob%20Smith".
     *
     * @param string $signatureId the ID of the signature being accessed
     * @param string $userId      The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param array  $parameters  List of parameters
     * @param string $fetch       Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\UserSignatures|\Surex\DocuSign\Model\ErrorDetails
     */
    public function userSignaturesGetUserSignature($signatureId, $userId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/users/{userId}/signatures/{signatureId}';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{signatureId}', urlencode($signatureId), $url);
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\UserSignatures', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Creates, or updates, the signature font and initials for the specified user. When creating a signature, you use this resource to create the signature name and then add the signature and initials images into the signature.

     ###### Note: This will also create a default signature for the user when one does not exist.

     The userId property specified in the endpoint must match the authenticated user's user ID and the user must be a member of the account.

     The `signatureId` parameter accepts a signature ID or a signature name. DocuSign recommends you use signature ID (`signatureId`), since some names contain characters that do not properly encode into a URL. If you use the user name, it is likely that the name includes spaces. In that case, URL encode the name before using it in the endpoint.

     For example encode "Bob Smith" as "Bob%20Smith".
     *
     * @param string                                        $signatureId             the ID of the signature being accessed
     * @param string                                        $userId                  The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param \Surex\DocuSign\Model\UserSignatureDefinition $userSignatureDefinition
     * @param array                                         $parameters              {
     *
     *     @var string $close_existing_signature When set to **true**, closes the current signature.
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\UserSignatures|\Surex\DocuSign\Model\ErrorDetails
     */
    public function userSignaturesPutUserSignatureById($signatureId, $userId, \Surex\DocuSign\Model\UserSignatureDefinition $userSignatureDefinition, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('close_existing_signature', null);
        $url     = '/restapi/v2/accounts/{accountId}/users/{userId}/signatures/{signatureId}';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = str_replace('{signatureId}', urlencode($signatureId), $url);
        $url     = str_replace('{userId}', urlencode($userId), $url);
        $url     = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body    = $this->serializer->serialize($userSignatureDefinition, 'json');
        $request = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\UserSignatures', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Deletes the specified initials image or signature image for the specified user.

     The function deletes one or the other of the image types, to delete both the initials image and signature image you must call the endpoint twice.

     The userId parameter specified in the endpoint must match the authenticated user's user ID and the user must be a member of the account.

     The `signatureId` parameter accepts a signature ID or a signature name. DocuSign recommends you use signature ID (`signatureId`), since some names contain characters that do not properly encode into a URL. If you use the user name, it is likely that the name includes spaces. In that case, URL encode the name before using it in the endpoint.

     For example encode "Bob Smith" as "Bob%20Smith".
     *
     * @param string $imageType   one of **signature_image** or **initials_image**
     * @param string $signatureId the ID of the signature being accessed
     * @param string $userId      The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param array  $parameters  List of parameters
     * @param string $fetch       Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\UserSignatures|\Surex\DocuSign\Model\ErrorDetails
     */
    public function userSignaturesDeleteUserSignatureImage($imageType, $signatureId, $userId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/users/{userId}/signatures/{signatureId}/{imageType}';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{imageType}', urlencode($imageType), $url);
        $url        = str_replace('{signatureId}', urlencode($signatureId), $url);
        $url        = str_replace('{userId}', urlencode($userId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('DELETE', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\UserSignatures', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieves the specified initials image or signature image for the specified user. The image is returned in the same format as uploaded. In the request you can specify if the chrome (the added line and identifier around the initial image) is returned with the image.

     The userId property specified in the endpoint must match the authenticated user's user ID and the user must be a member of the account.

     The `signatureId` parameter accepts a signature ID or a signature name. DocuSign recommends you use signature ID (`signatureId`), since some names contain characters that do not properly encode into a URL. If you use the user name, it is likely that the name includes spaces. In that case, URL encode the name before using it in the endpoint.

     For example encode "Bob Smith" as "Bob%20Smith".

     ###### Note: Older envelopes might only have chromed images. If getting the non-chromed image fails, try getting the chromed image.
     *
     * @param string $imageType   one of **signature_image** or **initials_image**
     * @param string $signatureId the ID of the signature being accessed
     * @param string $userId      The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param array  $parameters  {
     *
     *     @var string $include_chrome
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\ErrorDetails
     */
    public function userSignaturesGetUserSignatureImage($imageType, $signatureId, $userId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('include_chrome', null);
        $url     = '/restapi/v2/accounts/{accountId}/users/{userId}/signatures/{signatureId}/{imageType}';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = str_replace('{imageType}', urlencode($imageType), $url);
        $url     = str_replace('{signatureId}', urlencode($signatureId), $url);
        $url     = str_replace('{userId}', urlencode($userId), $url);
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
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Updates the user signature image or user initials image for the specified user. The supported image formats for this file are: gif, png, jpeg, and bmp. The file must be less than 200K.

     The userId property specified in the endpoint must match the authenticated user's user ID and the user must be a member of the account.

     The `signatureId` parameter accepts a signature ID or a signature name. DocuSign recommends you use signature ID (`signatureId`), since some names contain characters that do not properly encode into a URL. If you use the user name, it is likely that the name includes spaces. In that case, URL encode the name before using it in the endpoint.

     For example encode "Bob Smith" as "Bob%20Smith".

     *
     * @param string $imageType   one of **signature_image** or **initials_image**
     * @param string $signatureId the ID of the signature being accessed
     * @param string $userId      The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param array  $parameters  List of parameters
     * @param string $fetch       Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\UserSignatures|\Surex\DocuSign\Model\ErrorDetails
     */
    public function userSignaturesPutUserSignatureImage($imageType, $signatureId, $userId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/users/{userId}/signatures/{signatureId}/{imageType}';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{imageType}', urlencode($imageType), $url);
        $url        = str_replace('{signatureId}', urlencode($signatureId), $url);
        $url        = str_replace('{userId}', urlencode($userId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\UserSignatures', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }
}
