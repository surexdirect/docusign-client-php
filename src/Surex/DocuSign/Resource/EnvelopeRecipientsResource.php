<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Surex\DocuSign\AccountResource as Resource;

class EnvelopeRecipientsResource extends Resource
{
    /**
     * Deletes one or more recipients from a draft or sent envelope. Recipients to be deleted are listed in the request, with the `recipientId` being used as the key for deleting recipients.

     If the envelope is `In Process`, meaning that it has been sent and has not  been completed or voided, recipients that have completed their actions cannot be deleted.
     *
     * @param string                                   $envelopeId         The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Model\EnvelopeRecipients $envelopeRecipients
     * @param array                                    $parameters         List of parameters
     * @param string                                   $fetch              Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\EnvelopeRecipients|\Surex\DocuSign\Model\ErrorDetails
     */
    public function recipientsDeleteRecipients($envelopeId, \Surex\DocuSign\Model\EnvelopeRecipients $envelopeRecipients, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/envelopes/{envelopeId}/recipients';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{envelopeId}', urlencode($envelopeId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($envelopeRecipients, 'json');
        $request    = $this->messageFactory->createRequest('DELETE', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT === $fetch) {
            if ('200' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\EnvelopeRecipients', 'json');
            }
            if ('400' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieves the status of all recipients in a single envelope and identifies the current recipient in the routing list.

     The `currentRoutingOrder` property of the response contains the `routingOrder` value of the current recipient indicating that the envelope has been sent to the recipient, but the recipient has not completed their actions.
     *
     * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param array  $parameters {
     *
     *     @var string $include_anchor_tab_locations  When set to **true** and `include_tabs` is set to **true**, all tabs with anchor tab properties are included in the response.
     *     @var string $include_extended  When set to **true**, the extended properties are included in the response.
     *     @var string $include_metadata reserved for DocuSign

     *     @var string $include_tabs When set to **true**, the tab information associated with the recipient is included in the response.
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\EnvelopeRecipients|\Surex\DocuSign\Model\ErrorDetails
     */
    public function recipientsGetRecipients($envelopeId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('include_anchor_tab_locations', null);
        $queryParam->setDefault('include_extended', null);
        $queryParam->setDefault('include_metadata', null);
        $queryParam->setDefault('include_tabs', null);
        $url     = '/restapi/v2/accounts/{accountId}/envelopes/{envelopeId}/recipients';
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\EnvelopeRecipients', 'json');
            }
            if ('400' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Adds one or more recipients to an envelope.

     For an in process envelope, one that has been sent and has not been completed or voided, an email is sent to a new recipient when they are reached in the routing order. If the new recipient's routing order is before or the same as the envelope's next recipient, an email is only sent if the optional `resend_envelope` query string is set to **true**.
     *
     * @param string                                   $envelopeId         The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Model\EnvelopeRecipients $envelopeRecipients
     * @param array                                    $parameters         {
     *
     *     @var string $resend_envelope When set to **true**, resends the   envelope if the new recipient's routing order is before or the same as the envelope's next recipient.
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\EnvelopeRecipients|\Surex\DocuSign\Model\ErrorDetails
     */
    public function recipientsPostRecipients($envelopeId, \Surex\DocuSign\Model\EnvelopeRecipients $envelopeRecipients, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('resend_envelope', null);
        $url     = '/restapi/v2/accounts/{accountId}/envelopes/{envelopeId}/recipients';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = str_replace('{envelopeId}', urlencode($envelopeId), $url);
        $url     = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body    = $this->serializer->serialize($envelopeRecipients, 'json');
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT === $fetch) {
            if ('201' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\EnvelopeRecipients', 'json');
            }
            if ('400' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Updates recipients in a draft envelope or corrects recipient information for an in process envelope.

     For draft envelopes, you can edit the following properties: `email`, `userName`, `routingOrder`, `faxNumber`, `deliveryMethod`, `accessCode`, and `requireIdLookup`.

     Once an envelope has been sent, you can only edit: `email`, `userName`, `signerName`, `routingOrder`, `faxNumber`, and `deliveryMethod`. You can also select to resend an envelope by using the `resend_envelope` option.

     If you send information for a recipient that does not already exist in a draft envelope, the recipient is added to the envelope (similar to the POST).
     *
     * @param string                                   $envelopeId         The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Model\EnvelopeRecipients $envelopeRecipients
     * @param array                                    $parameters         {
     *
     *     @var string $resend_envelope When set to **true**, resends the   envelope if the new recipient's routing order is before or the same as the envelope's next recipient.
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\RecipientsUpdateSummary|\Surex\DocuSign\Model\ErrorDetails
     */
    public function recipientsPutRecipients($envelopeId, \Surex\DocuSign\Model\EnvelopeRecipients $envelopeRecipients, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('resend_envelope', null);
        $url     = '/restapi/v2/accounts/{accountId}/envelopes/{envelopeId}/recipients';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = str_replace('{envelopeId}', urlencode($envelopeId), $url);
        $url     = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body    = $this->serializer->serialize($envelopeRecipients, 'json');
        $request = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT === $fetch) {
            if ('200' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\RecipientsUpdateSummary', 'json');
            }
            if ('400' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Deletes a recipient from a `draft` or `sent` envelope.

     If the envelope is "In Process" (has been sent and is not completed or voided), recipients that have completed their actions cannot be deleted.
     *
     * @param string $envelopeId  The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $recipientId the `recipientId` used when the envelope or template was created
     * @param array  $parameters  List of parameters
     * @param string $fetch       Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\EnvelopeRecipients|\Surex\DocuSign\Model\ErrorDetails
     */
    public function recipientsDeleteRecipient($envelopeId, $recipientId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/envelopes/{envelopeId}/recipients/{recipientId}';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{envelopeId}', urlencode($envelopeId), $url);
        $url        = str_replace('{recipientId}', urlencode($recipientId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('DELETE', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT === $fetch) {
            if ('200' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\EnvelopeRecipients', 'json');
            }
            if ('400' === $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }
}
