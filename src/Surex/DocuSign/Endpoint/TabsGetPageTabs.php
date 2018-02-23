<?php

namespace Surex\DocuSign\Endpoint;

class TabsGetPageTabs extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $documentId;
    protected $envelopeId;
    protected $pageNumber;
    /**
     * 
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $documentId The ID of the document being accessed.
     * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec 
     * @param string $pageNumber The page number being accessed.
     */
    function __construct(string $accountId, string $documentId, string $envelopeId, string $pageNumber)
    {
        $this->accountId = $accountId;
        $this->documentId = $documentId;
        $this->envelopeId = $envelopeId;
        $this->pageNumber = $pageNumber;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{documentId}', '{envelopeId}', '{pageNumber}'), array($this->accountId, $this->documentId, $this->envelopeId, $this->pageNumber), '/v2/accounts/{accountId}/envelopes/{envelopeId}/documents/{documentId}/pages/{pageNumber}/tabs');
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
     * @throws \Surex\DocuSign\Exception\TabsGetPageTabsBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\EnvelopeDocumentTabs
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\EnvelopeDocumentTabs', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\TabsGetPageTabsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}