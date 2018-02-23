<?php

namespace Surex\DocuSign\Endpoint;

class FoldersGetFolders extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    /**
    * Retrieves a list of the folders for the account, including the folder hierarchy. You can specify whether to return just the template folder or template folder and normal folders by setting the `template` query string parameter.
    *
    * @param string $accountId The external account number (int) or account ID Guid.
    * @param array $queryParameters {
    *     @var string $include Reserved for DocuSign.
    
    *     @var string $include_items 
    *     @var string $start_position Reserved for DocuSign.
    
    *     @var string $template Specifies the items that are returned. Valid values are: 
    
    * include - The folder list will return normal folders plus template folders. 
    * only - Only the list of template folders are returned.
    *     @var string $user_filter Reserved for DocuSign.
    
    * }
    */
    function __construct(string $accountId, array $queryParameters = array())
    {
        $this->accountId = $accountId;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}'), array($this->accountId), '/v2/accounts/{accountId}/folders');
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
        $optionsResolver->setDefined(array('include', 'include_items', 'start_position', 'template', 'user_filter'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('include', array('string'));
        $optionsResolver->setAllowedTypes('include_items', array('string'));
        $optionsResolver->setAllowedTypes('start_position', array('string'));
        $optionsResolver->setAllowedTypes('template', array('string'));
        $optionsResolver->setAllowedTypes('user_filter', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\FoldersGetFoldersBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\Folders
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\Folders', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\FoldersGetFoldersBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}