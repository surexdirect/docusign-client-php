<?php

namespace Surex\DocuSign\Endpoint;

class AttachmentsGetAttachments extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $envelopeId;
    /**
     * 
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec 
     */
    function __construct(string $accountId, string $envelopeId)
    {
        $this->accountId = $accountId;
        $this->envelopeId = $envelopeId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{envelopeId}'), array($this->accountId, $this->envelopeId), '/v2/accounts/{accountId}/envelopes/{envelopeId}/attachments');
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
     * @throws \Surex\DocuSign\Exception\AttachmentsGetAttachmentsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\EnvelopeAttachmentsResult
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\EnvelopeAttachmentsResult', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\AttachmentsGetAttachmentsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}