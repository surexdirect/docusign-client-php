<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class UserSignaturesPostUserSignatures extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $userId;

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
     * @param string                                                    $accountId                 the external account number (int) or account ID Guid
     * @param string                                                    $userId                    The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param \Surex\DocuSign\Generated\Model\UserSignaturesInformation $userSignaturesInformation
     */
    public function __construct(string $accountId, string $userId, \Surex\DocuSign\Generated\Model\UserSignaturesInformation $userSignaturesInformation)
    {
        $this->accountId = $accountId;
        $this->userId    = $userId;
        $this->body      = $userSignaturesInformation;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{userId}'], [$this->accountId, $this->userId], '/v2/accounts/{accountId}/users/{userId}/signatures');
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
     * @throws \Surex\DocuSign\Generated\Exception\UserSignaturesPostUserSignaturesBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\UserSignaturesInformation
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\UserSignaturesInformation', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\UserSignaturesPostUserSignaturesBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
