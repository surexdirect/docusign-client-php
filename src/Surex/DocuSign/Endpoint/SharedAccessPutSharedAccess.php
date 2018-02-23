<?php

namespace Surex\DocuSign\Endpoint;

class SharedAccessPutSharedAccess extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    /**
     * Reserved: Sets the shared access information for one or more users.
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param \Surex\DocuSign\Model\AccountSharedAccess $accountSharedAccess 
     * @param array $queryParameters {
     *     @var string $item_type 
     *     @var string $user_ids 
     * }
     */
    function __construct(string $accountId, \Surex\DocuSign\Model\AccountSharedAccess $accountSharedAccess, array $queryParameters = array())
    {
        $this->accountId = $accountId;
        $this->body = $accountSharedAccess;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PUT';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}'), array($this->accountId), '/v2/accounts/{accountId}/shared_access');
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
        $optionsResolver->setDefined(array('item_type', 'user_ids'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('item_type', array('string'));
        $optionsResolver->setAllowedTypes('user_ids', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\SharedAccessPutSharedAccessBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\AccountSharedAccess
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\AccountSharedAccess', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\SharedAccessPutSharedAccessBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}