<?php

namespace Surex\DocuSign\Endpoint;

class RecipientsGetRecipientSignature extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $envelopeId;
    protected $recipientId;
    /**
     * Retrieves signature information for a signer or sign-in-person recipient.
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec 
     * @param string $recipientId The `recipientId` used when the envelope or template was created.
     */
    function __construct(string $accountId, string $envelopeId, string $recipientId)
    {
        $this->accountId = $accountId;
        $this->envelopeId = $envelopeId;
        $this->recipientId = $recipientId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{envelopeId}', '{recipientId}'), array($this->accountId, $this->envelopeId, $this->recipientId), '/v2/accounts/{accountId}/envelopes/{envelopeId}/recipients/{recipientId}/signature');
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
     * @throws \Surex\DocuSign\Exception\RecipientsGetRecipientSignatureBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\UserSignatures
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\UserSignatures', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\RecipientsGetRecipientSignatureBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}