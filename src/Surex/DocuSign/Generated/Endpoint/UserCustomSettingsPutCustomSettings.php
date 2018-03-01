<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class UserCustomSettingsPutCustomSettings extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $userId;

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
     * @param string                                             $accountId          the external account number (int) or account ID Guid
     * @param string                                             $userId             The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param \Surex\DocuSign\Generated\Model\UserCustomSettings $userCustomSettings
     */
    public function __construct(string $accountId, string $userId, \Surex\DocuSign\Generated\Model\UserCustomSettings $userCustomSettings)
    {
        $this->accountId = $accountId;
        $this->userId    = $userId;
        $this->body      = $userCustomSettings;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{userId}'], [$this->accountId, $this->userId], '/v2/accounts/{accountId}/users/{userId}/custom_settings');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Generated\Exception\UserCustomSettingsPutCustomSettingsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\UserCustomSettings
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\UserCustomSettings', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\UserCustomSettingsPutCustomSettingsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
