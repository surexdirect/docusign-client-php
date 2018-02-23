<?php

namespace Surex\DocuSign\Endpoint;

class DocumentsGetDocument extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $accountId;
    protected $documentId;
    protected $envelopeId;
    /**
    * Retrieves the specified document from the envelope. If the account has the Highlight Data Changes feature enabled, there is an option to request that any changes in the envelope be highlighted.
    
    The `{documentID}` parameter takes two special values:
    
    | Value      | Description |
    | :---       | :--- |
    | `combined` | Retrieve a PDF that contains the combined content of all documents and the certificate. |
    | `archive`  | Retrieve a ZIP archive that contains all of the PDF documents, the certificate, and any .WAV files used for voice authentication. |
    
    *
    * @param string $accountId The external account number (int) or account ID Guid.
    * @param string $documentId The ID of the document being accessed.
    * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec 
    * @param array $queryParameters {
    *     @var string $certificate When set to **false**, the envelope signing certificate is removed from the download.
    *     @var string $encoding 
    *     @var string $encrypt When set to **true**, the PDF bytes returned in the response are encrypted for all the key managers configured on your DocuSign account. The documents can be decrypted with the KeyManager Decrypt Document API.
    *     @var string $language Specifies the language for the Certificate of Completion in the response. The supported languages, with the language value shown in parenthesis, are: Chinese Simplified (zh_CN), , Chinese Traditional (zh_TW), Dutch (nl), English US (en), French (fr), German (de), Italian (it), Japanese (ja), Korean (ko), Portuguese (pt), Portuguese (Brazil) (pt_BR), Russian (ru), Spanish (es). 
    *     @var string $recipient_id 
    *     @var string $show_changes When set to **true**, any changed fields for the returned PDF are highlighted in yellow and optional signatures or initials outlined in red. 
    *     @var string $watermark When set to **true**, the account has the watermark feature enabled, and the envelope is not complete, the watermark for the account is added to the PDF documents. This option can remove the watermark. 
    * }
    */
    function __construct(string $accountId, string $documentId, string $envelopeId, array $queryParameters = array())
    {
        $this->accountId = $accountId;
        $this->documentId = $documentId;
        $this->envelopeId = $envelopeId;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return str_replace(array('{accountId}', '{documentId}', '{envelopeId}'), array($this->accountId, $this->documentId, $this->envelopeId), '/v2/accounts/{accountId}/envelopes/{envelopeId}/documents/{documentId}');
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
        $optionsResolver->setDefined(array('certificate', 'encoding', 'encrypt', 'language', 'recipient_id', 'show_changes', 'watermark'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('certificate', array('string'));
        $optionsResolver->setAllowedTypes('encoding', array('string'));
        $optionsResolver->setAllowedTypes('encrypt', array('string'));
        $optionsResolver->setAllowedTypes('language', array('string'));
        $optionsResolver->setAllowedTypes('recipient_id', array('string'));
        $optionsResolver->setAllowedTypes('show_changes', array('string'));
        $optionsResolver->setAllowedTypes('watermark', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\DocumentsGetDocumentBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\DocumentsGetDocumentBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}