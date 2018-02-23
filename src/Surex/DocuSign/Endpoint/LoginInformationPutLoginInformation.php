<?php

namespace Surex\DocuSign\Endpoint;

class LoginInformationPutLoginInformation extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $loginPart;
    /**
     * Updates the password for a specified user.
     *
     * @param string $loginPart Currently, only the value **password** is supported.
     * @param \Surex\DocuSign\Model\UserPasswordInformation $userPasswordInformation 
     */
    function __construct(string $loginPart, \Surex\DocuSign\Model\UserPasswordInformation $userPasswordInformation)
    {
        $this->loginPart = $loginPart;
        $this->body = $userPasswordInformation;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PUT';
    }
    function getUri() : string
    {
        return str_replace(array('{loginPart}'), array($this->loginPart), '/v2/login_information/{loginPart}');
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
     * @throws \Surex\DocuSign\Exception\LoginInformationPutLoginInformationBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\LoginInformationPutLoginInformationBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}