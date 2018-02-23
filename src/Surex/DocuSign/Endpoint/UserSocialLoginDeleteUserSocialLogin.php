<?php

namespace Surex\DocuSign\Endpoint;

class UserSocialLoginDeleteUserSocialLogin extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $userId;
    /**
     * Deletes a social account from a use's account.
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $userId The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param \Surex\DocuSign\Model\UserSocialAccountLogins $userSocialAccountLogins 
     */
    function __construct(string $accountId, string $userId, \Surex\DocuSign\Model\UserSocialAccountLogins $userSocialAccountLogins)
    {
        $this->accountId = $accountId;
        $this->userId = $userId;
        $this->body = $userSocialAccountLogins;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'DELETE';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{userId}'), array($this->accountId, $this->userId), '/v2/accounts/{accountId}/users/{userId}/social');
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
     * @throws \Surex\DocuSign\Exception\UserSocialLoginDeleteUserSocialLoginBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\UserSocialLoginDeleteUserSocialLoginBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}