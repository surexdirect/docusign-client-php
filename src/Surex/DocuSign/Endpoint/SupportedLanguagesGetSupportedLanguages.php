<?php

namespace Surex\DocuSign\Endpoint;

class SupportedLanguagesGetSupportedLanguages extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    /**
     * List supported languages for the recipient language setting
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
        return str_replace(array('{accountId}'), array($this->accountId), '/v2/accounts/{accountId}/supported_languages');
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
     * @throws \Surex\DocuSign\Exception\SupportedLanguagesGetSupportedLanguagesBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\SupportedLanguages
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\SupportedLanguages', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\SupportedLanguagesGetSupportedLanguagesBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}