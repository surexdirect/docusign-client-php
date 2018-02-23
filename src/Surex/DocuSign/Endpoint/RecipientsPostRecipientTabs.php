<?php

namespace Surex\DocuSign\Endpoint;

class RecipientsPostRecipientTabs extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $envelopeId;
    protected $recipientId;
    /**
     * Adds one or more tabs for a recipient.
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec 
     * @param string $recipientId The `recipientId` used when the envelope or template was created.
     * @param \Surex\DocuSign\Model\EnvelopeRecipientTabs $envelopeRecipientTabs 
     */
    function __construct(string $accountId, string $envelopeId, string $recipientId, \Surex\DocuSign\Model\EnvelopeRecipientTabs $envelopeRecipientTabs)
    {
        $this->accountId = $accountId;
        $this->envelopeId = $envelopeId;
        $this->recipientId = $recipientId;
        $this->body = $envelopeRecipientTabs;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'POST';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{envelopeId}', '{recipientId}'), array($this->accountId, $this->envelopeId, $this->recipientId), '/v2/accounts/{accountId}/envelopes/{envelopeId}/recipients/{recipientId}/tabs');
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
     * @throws \Surex\DocuSign\Exception\RecipientsPostRecipientTabsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\EnvelopeRecipientTabs
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\EnvelopeRecipientTabs', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\RecipientsPostRecipientTabsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}