<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Surex\DocuSign\AccountResource as Resource;

class EnvelopeDocumentsResource extends Resource
{
    /**
     * Deletes one or more documents from an existing draft envelope.
     *
     * @param string                                   $envelopeId         The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Model\EnvelopeDefinition $envelopeDefinition
     * @param array                                    $parameters         List of parameters
     * @param string                                   $fetch              Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\EnvelopeDocuments|\Surex\DocuSign\Model\ErrorDetails
     */
    public function documentsDeleteDocuments($envelopeId, \Surex\DocuSign\Model\EnvelopeDefinition $envelopeDefinition, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/envelopes/{envelopeId}/documents';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{envelopeId}', urlencode($envelopeId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($envelopeDefinition, 'json');
        $request    = $this->messageFactory->createRequest('DELETE', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT === $fetch) {
            if ('200' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\EnvelopeDocuments', 'json');
            }
            if ('400' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieves a list of documents associated with the specified envelope.
     *
     * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param array  $parameters {
     *
     *     @var string $include_metadata Reserved for DocuSign.
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\EnvelopeDocuments|\Surex\DocuSign\Model\ErrorDetails
     */
    public function documentsGetDocuments($envelopeId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('include_metadata', null);
        $url     = '/restapi/v2/accounts/{accountId}/envelopes/{envelopeId}/documents';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = str_replace('{envelopeId}', urlencode($envelopeId), $url);
        $url     = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body    = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT === $fetch) {
            if ('200' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\EnvelopeDocuments', 'json');
            }
            if ('400' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Adds one or more documents to an existing envelope document.
     *
     * @param string                                   $envelopeId         The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Model\EnvelopeDefinition $envelopeDefinition
     * @param array                                    $parameters         {
     *
     *     @var string $apply_document_fields When **true**, document fields
     * }
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\EnvelopeDocuments|\Surex\DocuSign\Model\ErrorDetails
     */
    public function documentsPutDocuments($envelopeId, \Surex\DocuSign\Model\EnvelopeDefinition $envelopeDefinition, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('apply_document_fields', null);
        $url     = '/restapi/v2/accounts/{accountId}/envelopes/{envelopeId}/documents';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = str_replace('{envelopeId}', urlencode($envelopeId), $url);
        $url     = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body    = $this->serializer->serialize($envelopeDefinition, 'json');
        $request = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT === $fetch) {
            if ('200' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\EnvelopeDocuments', 'json');
            }
            if ('400' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieves the specified document from the envelope. If the account has the Highlight Data Changes feature enabled, there is an option to request that any changes in the envelope be highlighted.

     The `{documentID}` parameter takes two special values:

     | Value      | Description |
     | :---       | :--- |
     | `combined` | Retrieve a PDF that contains the combined content of all documents and the certificate. |
     | `archive`  | Retrieve a ZIP archive that contains all of the PDF documents, the certificate, and any .WAV files used for voice authentication. |

     *
     * @param string $documentId the ID of the document being accessed
     * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param array  $parameters {
     *
     *     @var string $certificate when set to **false**, the envelope signing certificate is removed from the download
     *     @var string $encoding
     *     @var string $encrypt When set to **true**, the PDF bytes returned in the response are encrypted for all the key managers configured on your DocuSign account. The documents can be decrypted with the KeyManager Decrypt Document API.
     *     @var string $language Specifies the language for the Certificate of Completion in the response. The supported languages, with the language value shown in parenthesis, are: Chinese Simplified (zh_CN), , Chinese Traditional (zh_TW), Dutch (nl), English US (en), French (fr), German (de), Italian (it), Japanese (ja), Korean (ko), Portuguese (pt), Portuguese (Brazil) (pt_BR), Russian (ru), Spanish (es).
     *     @var string $recipient_id
     *     @var string $show_changes When set to **true**, any changed fields for the returned PDF are highlighted in yellow and optional signatures or initials outlined in red.
     *     @var string $watermark When set to **true**, the account has the watermark feature enabled, and the envelope is not complete, the watermark for the account is added to the PDF documents. This option can remove the watermark.
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\ErrorDetails
     */
    public function documentsGetDocument($documentId, $envelopeId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('certificate', null);
        $queryParam->setDefault('encoding', null);
        $queryParam->setDefault('encrypt', null);
        $queryParam->setDefault('language', null);
        $queryParam->setDefault('recipient_id', null);
        $queryParam->setDefault('show_changes', null);
        $queryParam->setDefault('watermark', null);
        $url     = '/restapi/v2/accounts/{accountId}/envelopes/{envelopeId}/documents/{documentId}';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = str_replace('{documentId}', urlencode($documentId), $url);
        $url     = str_replace('{envelopeId}', urlencode($envelopeId), $url);
        $url     = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body    = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT === $fetch) {
            if ('400' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Adds a document to an existing draft envelope.
     *
     * @param string $documentId the ID of the document being accessed
     * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param array  $parameters {
     *
     *     @var string $apply_document_fields When **true**, document fields
     * }
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\ErrorDetails
     */
    public function documentsPutDocument($documentId, $envelopeId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('apply_document_fields', null);
        $url     = '/restapi/v2/accounts/{accountId}/envelopes/{envelopeId}/documents/{documentId}';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = str_replace('{documentId}', urlencode($documentId), $url);
        $url     = str_replace('{envelopeId}', urlencode($envelopeId), $url);
        $url     = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body    = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT === $fetch) {
            if ('400' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }
}
