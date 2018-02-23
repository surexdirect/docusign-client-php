<?php

namespace Surex\DocuSign\Endpoint;

class TemplatesPutTemplatePart extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $templateId;
    protected $templatePart;
    /**
     * Shares a template with the specified members group.
     *
     * @param string $accountId The external account number (int) or account ID Guid.
     * @param string $templateId The ID of the template being accessed.
     * @param string $templatePart Currently, the only defined part is **groups**.
     * @param \Surex\DocuSign\Model\Groups $groups 
     */
    function __construct(string $accountId, string $templateId, string $templatePart, \Surex\DocuSign\Model\Groups $groups)
    {
        $this->accountId = $accountId;
        $this->templateId = $templateId;
        $this->templatePart = $templatePart;
        $this->body = $groups;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'PUT';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{templateId}', '{templatePart}'), array($this->accountId, $this->templateId, $this->templatePart), '/v2/accounts/{accountId}/templates/{templateId}/{templatePart}');
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
     * @throws \Surex\DocuSign\Exception\TemplatesPutTemplatePartBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\Groups
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\Groups', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\TemplatesPutTemplatePartBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}