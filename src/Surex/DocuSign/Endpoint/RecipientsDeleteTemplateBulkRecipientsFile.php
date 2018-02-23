<?php

namespace Surex\DocuSign\Endpoint;

class RecipientsDeleteTemplateBulkRecipientsFile extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $recipientId;
    protected $templateId;
    /**
     * Deletes the bulk recipient list on a template.
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $recipientId The `recipientId` used when the envelope or template was created.
     * @param string $templateId The ID of the template being accessed.
     */
    function __construct(string $accountId, string $recipientId, string $templateId)
    {
        $this->accountId = $accountId;
        $this->recipientId = $recipientId;
        $this->templateId = $templateId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'DELETE';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{recipientId}', '{templateId}'), array($this->accountId, $this->recipientId, $this->templateId), '/v2/accounts/{accountId}/templates/{templateId}/recipients/{recipientId}/bulk_recipients');
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
     * @throws \Surex\DocuSign\Exception\RecipientsDeleteTemplateBulkRecipientsFileBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\BulkRecipientsUpdateResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\BulkRecipientsUpdateResponse', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\RecipientsDeleteTemplateBulkRecipientsFileBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}