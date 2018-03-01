<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class UserSignaturesDeleteUserSignatureImage extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $imageType;
    protected $signatureId;
    protected $userId;

    /**
     * Deletes the specified initials image or signature image for the specified user.

     The function deletes one or the other of the image types, to delete both the initials image and signature image you must call the endpoint twice.

     The userId parameter specified in the endpoint must match the authenticated user's user ID and the user must be a member of the account.

     The `signatureId` parameter accepts a signature ID or a signature name. DocuSign recommends you use signature ID (`signatureId`), since some names contain characters that do not properly encode into a URL. If you use the user name, it is likely that the name includes spaces. In that case, URL encode the name before using it in the endpoint.

     For example encode "Bob Smith" as "Bob%20Smith".
     *
     * @param string $accountId   the external account number (int) or account ID Guid
     * @param string $imageType   one of **signature_image** or **initials_image**
     * @param string $signatureId the ID of the signature being accessed
     * @param string $userId      The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     */
    public function __construct(string $accountId, string $imageType, string $signatureId, string $userId)
    {
        $this->accountId   = $accountId;
        $this->imageType   = $imageType;
        $this->signatureId = $signatureId;
        $this->userId      = $userId;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{imageType}', '{signatureId}', '{userId}'], [$this->accountId, $this->imageType, $this->signatureId, $this->userId], '/v2/accounts/{accountId}/users/{userId}/signatures/{signatureId}/{imageType}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Generated\Exception\UserSignaturesDeleteUserSignatureImageBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\UserSignatures
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\UserSignatures', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\UserSignaturesDeleteUserSignatureImageBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
