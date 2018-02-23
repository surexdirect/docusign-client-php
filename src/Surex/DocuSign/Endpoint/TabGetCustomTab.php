<?php

namespace Surex\DocuSign\Endpoint;

class TabGetCustomTab extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $customTabId;
    /**
     * Retrieves information about the requested custom tab on the specified account.
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $customTabId 
     */
    function __construct(string $accountId, string $customTabId)
    {
        $this->accountId = $accountId;
        $this->customTabId = $customTabId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{customTabId}'), array($this->accountId, $this->customTabId), '/v2/accounts/{accountId}/tab_definitions/{customTabId}');
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
     * @throws \Surex\DocuSign\Exception\TabGetCustomTabBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\CustomTabs
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\CustomTabs', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\TabGetCustomTabBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}