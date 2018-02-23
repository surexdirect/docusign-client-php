<?php

namespace Surex\DocuSign\Endpoint;

class UserSignaturesPutUserSignatureById extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $signatureId;
    protected $userId;
    /**
    * Creates, or updates, the signature font and initials for the specified user. When creating a signature, you use this resource to create the signature name and then add the signature and initials images into the signature.
    
    ###### Note: This will also create a default signature for the user when one does not exist.
    
    The userId property specified in the endpoint must match the authenticated user's user ID and the user must be a member of the account.
    
    The `signatureId` parameter accepts a signature ID or a signature name. DocuSign recommends you use signature ID (`signatureId`), since some names contain characters that do not properly encode into a URL. If you use the user name, it is likely that the name includes spaces. In that case, URL encode the name before using it in the endpoint. 
    
    For example encode "Bob Smith" as "Bob%20Smith".
    *
    * @param string $accountId The external account number (int) or account ID Guid.
    * @param string $signatureId The ID of the signature being accessed.
    * @param string $userId The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
    * @param \Surex\DocuSign\Model\UserSignatureDefinition $userSignatureDefinition 
    * @param array $queryParameters {
    *     @var string $close_existing_signature When set to **true**, closes the current signature.
    * }
    */
    function __construct(string $accountId, string $signatureId, string $userId, \Surex\DocuSign\Model\UserSignatureDefinition $userSignatureDefinition, array $queryParameters = array())
    {
        $this->accountId = $accountId;
        $this->signatureId = $signatureId;
        $this->userId = $userId;
        $this->body = $userSignatureDefinition;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PUT';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{signatureId}', '{userId}'), array($this->accountId, $this->signatureId, $this->userId), '/v2/accounts/{accountId}/users/{userId}/signatures/{signatureId}');
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
        $optionsResolver->setDefined(array('close_existing_signature'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('close_existing_signature', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\UserSignaturesPutUserSignatureByIdBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\UserSignatures
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\UserSignatures', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\UserSignaturesPutUserSignatureByIdBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}