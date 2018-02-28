<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class LoginInformationGetLoginInformation extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

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
     * @param array $queryParameters {
     *
     *     @var string $api_password reserved for DocuSign

     *     @var string $embed_account_id_guid
     *     @var string $include_account_id_guid when set to **true**, shows the account ID GUID in the response
     *     @var string $login_settings determines whether login settings are returned in the response

     Valid Values:

     * all -  All the login settings are returned.
     * none - no login settings are returned.
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/v2/login_information';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['api_password', 'embed_account_id_guid', 'include_account_id_guid', 'login_settings']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('api_password', ['string']);
        $optionsResolver->setAllowedTypes('embed_account_id_guid', ['string']);
        $optionsResolver->setAllowedTypes('include_account_id_guid', ['string']);
        $optionsResolver->setAllowedTypes('login_settings', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\LoginInformationGetLoginInformationBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\Authentication
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\Authentication', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\LoginInformationGetLoginInformationBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
