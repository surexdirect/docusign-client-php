<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class APIRequestLogPutRequestLogSettings extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

    /**
     * Enables or disables API request logging for troubleshooting.

     When enabled (`apiRequestLogging` is set to true), REST API requests and responses for the user are added to a log. A log can have up to 50 requests/responses and the current number of log entries can be determined by getting the settings. Logging is automatically disabled when the log limit of 50 is reached.

     You can call [ML:GetRequestLog] or [ML:GetRequestLogs] to download the log files (individually or as a zip file). Call [ML:DeleteRequestLogs] to clear the log by deleting current entries.

     Private information, such as passwords and integrator key information, which is normally located in the call header is omitted from the request/response log.

     ###### Note: API request logging only captures requests from the authenticated user. Any call that does not authenticate the user and resolve a userId isn't logged. Meaning that login_information, NewAccounts, or other distributor-credential calls are not logged.

     *
     * @param \Surex\DocuSign\Generated\Model\RequestLogs $requestLogs
     */
    public function __construct(\Surex\DocuSign\Generated\Model\RequestLogs $requestLogs)
    {
        $this->body = $requestLogs;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return '/v2/diagnostics/settings';
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
     * @throws \Surex\DocuSign\Generated\Exception\APIRequestLogPutRequestLogSettingsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\RequestLogs
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\RequestLogs', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\APIRequestLogPutRequestLogSettingsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
