<?php

namespace Surex\DocuSign\Endpoint;

class RecipientsPutRecipients extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $envelopeId;
    /**
    * Updates recipients in a draft envelope or corrects recipient information for an in process envelope. 
    
    For draft envelopes, you can edit the following properties: `email`, `userName`, `routingOrder`, `faxNumber`, `deliveryMethod`, `accessCode`, and `requireIdLookup`.
    
    Once an envelope has been sent, you can only edit: `email`, `userName`, `signerName`, `routingOrder`, `faxNumber`, and `deliveryMethod`. You can also select to resend an envelope by using the `resend_envelope` option.
    
    If you send information for a recipient that does not already exist in a draft envelope, the recipient is added to the envelope (similar to the POST).
    *
    * @param string $accountId The external account number (int) or account ID Guid.
    * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec 
    * @param \Surex\DocuSign\Model\EnvelopeRecipients $envelopeRecipients 
    * @param array $queryParameters {
    *     @var string $resend_envelope When set to **true**, resends the   envelope if the new recipient's routing order is before or the same as the envelope's next recipient.
    * }
    */
    function __construct(string $accountId, string $envelopeId, \Surex\DocuSign\Model\EnvelopeRecipients $envelopeRecipients, array $queryParameters = array())
    {
        $this->accountId = $accountId;
        $this->envelopeId = $envelopeId;
        $this->body = $envelopeRecipients;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PUT';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{envelopeId}'), array($this->accountId, $this->envelopeId), '/v2/accounts/{accountId}/envelopes/{envelopeId}/recipients');
    }
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('resend_envelope'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('resend_envelope', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\RecipientsPutRecipientsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\RecipientsUpdateSummary
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\RecipientsUpdateSummary', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\RecipientsPutRecipientsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}