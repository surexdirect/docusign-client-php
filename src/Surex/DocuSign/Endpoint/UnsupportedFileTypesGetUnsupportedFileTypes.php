<?php

namespace Surex\DocuSign\Endpoint;

class UnsupportedFileTypesGetUnsupportedFileTypes extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    /**
     * Retrieves a list of file types (mime-types and file-extensions) that are not supported for upload through the DocuSign system.
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     */
    function __construct(string $accountId)
    {
        $this->accountId = $accountId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}'), array($this->accountId), '/v2/accounts/{accountId}/unsupported_file_types');
    }
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        return array(array(), null);
    }
    function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\UnsupportedFileTypesGetUnsupportedFileTypesBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\FileTypeList
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\FileTypeList', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\UnsupportedFileTypesGetUnsupportedFileTypesBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}