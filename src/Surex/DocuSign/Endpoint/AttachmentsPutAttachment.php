<?php

namespace Surex\DocuSign\Endpoint;

class AttachmentsPutAttachment extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $attachmentId;
    protected $envelopeId;
    /**
     * 
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $attachmentId 
     * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec 
     * @param \Surex\DocuSign\Model\Attachment $attachment 
     */
    function __construct(string $accountId, string $attachmentId, string $envelopeId, \Surex\DocuSign\Model\Attachment $attachment)
    {
        $this->accountId = $accountId;
        $this->attachmentId = $attachmentId;
        $this->envelopeId = $envelopeId;
        $this->body = $attachment;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PUT';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{attachmentId}', '{envelopeId}'), array($this->accountId, $this->attachmentId, $this->envelopeId), '/v2/accounts/{accountId}/envelopes/{envelopeId}/attachments/{attachmentId}');
    }
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\AttachmentsPutAttachmentBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\EnvelopeAttachmentsResult
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\EnvelopeAttachmentsResult', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\AttachmentsPutAttachmentBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}