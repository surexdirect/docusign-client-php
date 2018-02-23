<?php

namespace Surex\DocuSign\Endpoint;

class TabPutCustomTab extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $customTabId;
    /**
     * Updates the information in a custom tab for the specified account.
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $customTabId 
     * @param \Surex\DocuSign\Model\CustomTabs $customTabs 
     */
    function __construct(string $accountId, string $customTabId, \Surex\DocuSign\Model\CustomTabs $customTabs)
    {
        $this->accountId = $accountId;
        $this->customTabId = $customTabId;
        $this->body = $customTabs;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PUT';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{customTabId}'), array($this->accountId, $this->customTabId), '/v2/accounts/{accountId}/tab_definitions/{customTabId}');
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
     * @throws \Surex\DocuSign\Exception\TabPutCustomTabBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\CustomTabs
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\CustomTabs', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\TabPutCustomTabBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}