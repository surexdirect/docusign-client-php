<?php

namespace Surex\DocuSign\Endpoint;

class EmailSettingsPutEmailSettings extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $envelopeId;
    /**
    * Updates the existing email override settings for the specified envelope. Note that modifying email settings will only affect email communications that occur after the modification was made.
    
    This can also be used to delete an individual email override setting by using an empty string for the value to be deleted.
    *
    * @param string $accountId The external account number (int) or account ID Guid.
    * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec 
    * @param \Surex\DocuSign\Model\EnvelopeEmailSettings $envelopeEmailSettings 
    */
    function __construct(string $accountId, string $envelopeId, \Surex\DocuSign\Model\EnvelopeEmailSettings $envelopeEmailSettings)
    {
        $this->accountId = $accountId;
        $this->envelopeId = $envelopeId;
        $this->body = $envelopeEmailSettings;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PUT';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{envelopeId}'), array($this->accountId, $this->envelopeId), '/v2/accounts/{accountId}/envelopes/{envelopeId}/email_settings');
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
     * @throws \Surex\DocuSign\Exception\EmailSettingsPutEmailSettingsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\EnvelopeEmailSettings
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\EnvelopeEmailSettings', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\EmailSettingsPutEmailSettingsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}