<?php

namespace Surex\DocuSign\Endpoint;

class UsersPostUsers extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    /**
     * Adds new users to your account. Set the `userSettings` property in the request to specify the actions the users can perform on the account.
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param \Surex\DocuSign\Model\NewUsersDefinition $newUsersDefinition 
     */
    function __construct(string $accountId, \Surex\DocuSign\Model\NewUsersDefinition $newUsersDefinition)
    {
        $this->accountId = $accountId;
        $this->body = $newUsersDefinition;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'POST';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}'), array($this->accountId), '/v2/accounts/{accountId}/users');
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
     * @throws \Surex\DocuSign\Exception\UsersPostUsersBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\NewUsersSummary
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\NewUsersSummary', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\UsersPostUsersBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}