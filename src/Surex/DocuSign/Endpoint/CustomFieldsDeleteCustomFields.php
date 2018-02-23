<?php

namespace Surex\DocuSign\Endpoint;

class CustomFieldsDeleteCustomFields extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $envelopeId;
    /**
     * Deletes envelope custom fields for draft and in-process envelopes.
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec 
     * @param \Surex\DocuSign\Model\EnvelopeCustomFields $envelopeCustomFields 
     */
    function __construct(string $accountId, string $envelopeId, \Surex\DocuSign\Model\EnvelopeCustomFields $envelopeCustomFields)
    {
        $this->accountId = $accountId;
        $this->envelopeId = $envelopeId;
        $this->body = $envelopeCustomFields;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'DELETE';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{envelopeId}'), array($this->accountId, $this->envelopeId), '/v2/accounts/{accountId}/envelopes/{envelopeId}/custom_fields');
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
     * @throws \Surex\DocuSign\Exception\CustomFieldsDeleteCustomFieldsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\EnvelopeCustomFields
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\EnvelopeCustomFields', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\CustomFieldsDeleteCustomFieldsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}