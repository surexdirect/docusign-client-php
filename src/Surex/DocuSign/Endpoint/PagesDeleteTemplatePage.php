<?php

namespace Surex\DocuSign\Endpoint;

class PagesDeleteTemplatePage extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $documentId;
    protected $pageNumber;
    protected $templateId;
    /**
     * Deletes a page from a document in a template based on the page number.
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $documentId The ID of the document being accessed.
     * @param string $pageNumber The page number being accessed.
     * @param string $templateId The ID of the template being accessed.
     * @param \Surex\DocuSign\Model\PageRequest $pageRequest 
     */
    function __construct(string $accountId, string $documentId, string $pageNumber, string $templateId, \Surex\DocuSign\Model\PageRequest $pageRequest)
    {
        $this->accountId = $accountId;
        $this->documentId = $documentId;
        $this->pageNumber = $pageNumber;
        $this->templateId = $templateId;
        $this->body = $pageRequest;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'DELETE';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{documentId}', '{pageNumber}', '{templateId}'), array($this->accountId, $this->documentId, $this->pageNumber, $this->templateId), '/v2/accounts/{accountId}/templates/{templateId}/documents/{documentId}/pages/{pageNumber}');
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
     * @throws \Surex\DocuSign\Exception\PagesDeleteTemplatePageBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\PagesDeleteTemplatePageBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}