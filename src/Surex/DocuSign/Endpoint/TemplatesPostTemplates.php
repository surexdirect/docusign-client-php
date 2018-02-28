<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class TemplatesPostTemplates extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;

    /**
     * Creates a template definition using a multipart request.

     ### Template Email Subject Merge Fields

     Call this endpoint to insert a recipient name and email address merge fields into the email subject line when creating or sending from a template.

     The merge fields, based on the recipient's role name, are added to the `emailSubject` property when the template is created or when the template is used to create an envelope. After a template sender adds the name and email information for the recipient and sends the envelope, the recipient information is automatically merged into the appropriate fields in the email subject line.

     Both the sender and the recipients will see the information in the email subject line for any emails associated with the template. This provides an easy way for senders to organize their envelope emails without having to open an envelope to check the recipient.
     ###### Note: If merging the recipient information into the subject line causes the subject line to exceed 100 characters, then any characters over the 100 character limit are not included in the subject line. For cases where the recipient name or email is expected to be long, you should consider placing the merge field at the start of the email subject.

     To add a recipient's name in the subject line add the following text in the `emailSubject` property when creating the template or when sending an envelope from a template:

     `[[<roleName>_UserName]]`

     Example:

     `"emailSubject":"[[Signer 1_UserName]], Please sign this NDA",`

     To add a recipient's email address in the subject line add the following text in the `emailSubject` property when creating the template or when sending an envelope from a template:

     `[[<roleName>_Email]]`

     Example:

     `"emailSubject":"[[Signer 1_Email]], Please sign this NDA",`


     In both cases the <roleName> is the recipient's contents of the `roleName` property in the template.

     For cases where another recipient (such as an Agent, Editor, or Intermediary recipient) is entering the name and email information for the recipient included in the email subject, then `[[<roleName>_UserName]]` or `[[<roleName>_Email]]` is shown in the email subject.
     *
     * @param string                          $accountId the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Model\Templates $templates
     */
    public function __construct(string $accountId, \Surex\DocuSign\Model\Templates $templates)
    {
        $this->accountId = $accountId;
        $this->body      = $templates;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}'], [$this->accountId], '/v2/accounts/{accountId}/templates');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\TemplatesPostTemplatesBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\TemplateSummary
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\TemplateSummary', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\TemplatesPostTemplatesBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
