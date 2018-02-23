<?php

namespace Surex\DocuSign\Endpoint;

class UserSignaturesGetUserSignatureImage extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $imageType;
    protected $signatureId;
    protected $userId;
    /**
    * Retrieves the specified initials image or signature image for the specified user. The image is returned in the same format as uploaded. In the request you can specify if the chrome (the added line and identifier around the initial image) is returned with the image.
    
    The userId property specified in the endpoint must match the authenticated user's user ID and the user must be a member of the account.
    
    The `signatureId` parameter accepts a signature ID or a signature name. DocuSign recommends you use signature ID (`signatureId`), since some names contain characters that do not properly encode into a URL. If you use the user name, it is likely that the name includes spaces. In that case, URL encode the name before using it in the endpoint. 
    
    For example encode "Bob Smith" as "Bob%20Smith".
    
    ###### Note: Older envelopes might only have chromed images. If getting the non-chromed image fails, try getting the chromed image.
    *
    * @param string $accountId The external account number (int) or account ID Guid.
    * @param string $imageType One of **signature_image** or **initials_image**.
    * @param string $signatureId The ID of the signature being accessed.
    * @param string $userId The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
    * @param array $queryParameters {
    *     @var string $include_chrome 
    * }
    */
    function __construct(string $accountId, string $imageType, string $signatureId, string $userId, array $queryParameters = array())
    {
        $this->accountId = $accountId;
        $this->imageType = $imageType;
        $this->signatureId = $signatureId;
        $this->userId = $userId;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{imageType}', '{signatureId}', '{userId}'), array($this->accountId, $this->imageType, $this->signatureId, $this->userId), '/v2/accounts/{accountId}/users/{userId}/signatures/{signatureId}/{imageType}');
    }
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        return array(array(), null);
    }
    function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('include_chrome'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('include_chrome', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\UserSignaturesGetUserSignatureImageBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\UserSignaturesGetUserSignatureImageBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}