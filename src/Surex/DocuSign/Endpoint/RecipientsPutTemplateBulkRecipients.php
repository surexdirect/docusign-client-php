<?php

namespace Surex\DocuSign\Endpoint;

class RecipientsPutTemplateBulkRecipients extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $recipientId;
    protected $templateId;
    /**
    * Updates the bulk recipients in a template using a file upload. The Content-Type supported for uploading a bulk recipient file is CSV (text/csv).
    
    The REST API does not support modifying individual rows or values in the bulk recipients file. It only allows the entire file to be added or replaced with a new file.
    *
    * @param string $accountId The external account number (int) or account ID Guid.
    * @param string $recipientId The `recipientId` used when the envelope or template was created.
    * @param string $templateId The ID of the template being accessed.
    * @param \Surex\DocuSign\Model\BulkRecipientsRequest $bulkRecipientsRequest 
    */
    function __construct(string $accountId, string $recipientId, string $templateId, \Surex\DocuSign\Model\BulkRecipientsRequest $bulkRecipientsRequest)
    {
        $this->accountId = $accountId;
        $this->recipientId = $recipientId;
        $this->templateId = $templateId;
        $this->body = $bulkRecipientsRequest;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PUT';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{recipientId}', '{templateId}'), array($this->accountId, $this->recipientId, $this->templateId), '/v2/accounts/{accountId}/templates/{templateId}/recipients/{recipientId}/bulk_recipients');
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
     * @throws \Surex\DocuSign\Exception\RecipientsPutTemplateBulkRecipientsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\BulkRecipientsSummaryResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\BulkRecipientsSummaryResponse', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\RecipientsPutTemplateBulkRecipientsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}