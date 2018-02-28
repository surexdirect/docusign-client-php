<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class UserProfilePutProfile extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $userId;

    /**
     * Updates the user's detail information, profile information, privacy settings, and personal information in the user ID card.

     You can also change a user's name by changing the information in the `userDetails` property. When changing a user's name, you can either change the information in the `userName` property OR change the information in `firstName`, `middleName`, `lastName, suffixName`, and `title` properties. Changes to `firstName`, `middleName`, `lastName`, `suffixName`, and `title` properties take precedence over changes to the `userName` property.
     *
     * @param string                             $accountId    the external account number (int) or account ID Guid
     * @param string                             $userId       The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param \Surex\DocuSign\Model\UserProfiles $userProfiles
     */
    public function __construct(string $accountId, string $userId, \Surex\DocuSign\Model\UserProfiles $userProfiles)
    {
        $this->accountId = $accountId;
        $this->userId    = $userId;
        $this->body      = $userProfiles;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{userId}'], [$this->accountId, $this->userId], '/v2/accounts/{accountId}/users/{userId}/profile');
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
     * @throws \Surex\DocuSign\Exception\UserProfilePutProfileBadRequestException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\UserProfilePutProfileBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
