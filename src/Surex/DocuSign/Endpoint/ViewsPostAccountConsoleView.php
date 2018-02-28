<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class ViewsPostAccountConsoleView extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;

    /**
     * Returns a URL that allows you to embed the authentication view of the DocuSign UI in your applications.
     *
     * @param string                                   $accountId          the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Model\ConsoleViewRequest $consoleViewRequest
     */
    public function __construct(string $accountId, \Surex\DocuSign\Model\ConsoleViewRequest $consoleViewRequest)
    {
        $this->accountId = $accountId;
        $this->body      = $consoleViewRequest;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}'], [$this->accountId], '/v2/accounts/{accountId}/views/console');
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
     * @throws \Surex\DocuSign\Exception\ViewsPostAccountConsoleViewBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\EnvelopeViews
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\EnvelopeViews', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\ViewsPostAccountConsoleViewBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
