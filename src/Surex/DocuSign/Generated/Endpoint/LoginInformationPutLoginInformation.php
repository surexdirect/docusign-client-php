<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class LoginInformationPutLoginInformation extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $loginPart;

    /**
     * Updates the password for a specified user.
     *
     * @param string                                                  $loginPart               currently, only the value **password** is supported
     * @param \Surex\DocuSign\Generated\Model\UserPasswordInformation $userPasswordInformation
     */
    public function __construct(string $loginPart, \Surex\DocuSign\Generated\Model\UserPasswordInformation $userPasswordInformation)
    {
        $this->loginPart = $loginPart;
        $this->body      = $userPasswordInformation;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{loginPart}'], [$this->loginPart], '/v2/login_information/{loginPart}');
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
     * @throws \Surex\DocuSign\Generated\Exception\LoginInformationPutLoginInformationBadRequestException
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\LoginInformationPutLoginInformationBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
