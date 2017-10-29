<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Surex\DocuSign\AccountResource as Resource;

class EnvelopeViewsResource extends Resource
{
    /**
     * Returns a URL that allows you to embed the envelope correction view of the DocuSign UI in your applications.

     Important: iFrames should not be used for embedded operations on mobile devices due to screen space issues. For iOS devices DocuSign recommends using a WebView.
     *
     * @param string                                   $envelopeId         The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Model\CorrectViewRequest $correctViewRequest
     * @param array                                    $parameters         List of parameters
     * @param string                                   $fetch              Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\EnvelopeViews|\Surex\DocuSign\Model\ErrorDetails
     */
    public function viewsPostEnvelopeCorrectView($envelopeId, \Surex\DocuSign\Model\CorrectViewRequest $correctViewRequest, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/envelopes/{envelopeId}/views/correct';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{envelopeId}', urlencode($envelopeId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($correctViewRequest, 'json');
        $request    = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (201 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\EnvelopeViews', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Returns a URL that allows you to embed the edit view of the DocuSign UI in your applications. This is a one-time use login token that allows the user to be placed into the DocuSign editing view.

     Upon sending completion, the user is returned to the return URL provided by the API application.

     Important: iFrames should not be used for embedded operations on mobile devices due to screen space issues. For iOS devices DocuSign recommends using a WebView.
     *
     * @param string                                 $envelopeId       The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Model\ReturnUrlRequest $returnUrlRequest
     * @param array                                  $parameters       List of parameters
     * @param string                                 $fetch            Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\EnvelopeViews|\Surex\DocuSign\Model\ErrorDetails
     */
    public function viewsPostEnvelopeEditView($envelopeId, \Surex\DocuSign\Model\ReturnUrlRequest $returnUrlRequest, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/envelopes/{envelopeId}/views/edit';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{envelopeId}', urlencode($envelopeId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($returnUrlRequest, 'json');
        $request    = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (201 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\EnvelopeViews', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Returns a URL that enables you to embed the recipient view of the DocuSign UI in your applications. If the recipient is a signer, then the view will provide the signing ceremony.

     ###### Note: Please redirect the client to the URL. iFrames should not be used, especially if the recipient may be using a mobile or tablet.

     This method is only used with envelopes in the `sent` status.

     Your application is responsible for authenticating the identity of the recipient or signer when you use this method. Use the parameters `assertionId`, `authenticationInstant`, `authenticationMethod`, `clientUserId`, and `securityDomain` to record information on how the recipient was authenticated. At a minimum, `authenticationMethod` and `clientUserId` are required. The information that you provide is included in the envelope's certificate of completion.

     ## The event status parameter
     After the signer completes or ends the signing ceremony, DocuSign will redirect the user's browser back to your app via the `returnUrl` that you supply. DocuSIgn appends an `event` query parameter to the URL with the outcome of the signing ceremony. Your app should use the event parameter to determine the next step for the envelope. Don't fetch the envelope's status via Envelopes: get or a similar method; that could break the DocuSign rule against polling.

     ## The URL is time-limited
     The URL returned by this method is valid for one use. It must be used/displayed within a couple of minutes after being generated. Once the recipient is redirected to the recipient view, they must interact with the DocuSign system periodically or their session will time out.

     Because the URL is time-limited, it should not be stored or sent via email. Immediately redirect the user's browser to the URL after you receive it.

     If you want to invite someone to an embedded signing session via email, the email invitation's URL must be to your application. When invoked, your app should request a recipientView URL from DocuSign and then redirect the signer to that URL.

     ## Maintaining State
     After the recipient completes the recipient view (or signing ceremony), they are redirected to your application. Your application can recover state information about the transaction by storing information in a cookie, or by including query parameters in the `returnUrl` field. Eg, `https://myapp.eg.com/docusign_return?myState=12345` When the user is redirected to your app, the `event` query parameter will be appended. In this example, prevent spoofing by not using a guessable value as the state value.
     *
     * @param string                                     $envelopeId           The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Model\RecipientViewRequest $recipientViewRequest
     * @param array                                      $parameters           List of parameters
     * @param string                                     $fetch                Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\EnvelopeViews|\Surex\DocuSign\Model\ErrorDetails
     */
    public function viewsPostEnvelopeRecipientView($envelopeId, \Surex\DocuSign\Model\RecipientViewRequest $recipientViewRequest, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/envelopes/{envelopeId}/views/recipient';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{envelopeId}', urlencode($envelopeId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($recipientViewRequest, 'json');
        $request    = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (201 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\EnvelopeViews', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Returns a URL that enables you to embed the sender view of the DocuSign UI in your applications.

     The returned URL can only be redirected to immediately after it is generated. It can only be used once.
     Therefore, request the URL immediately before you redirect your user to it.

     For the best user experience, don't use an iFrame. For iOS devices DocuSign recommends using a WebView.

     Multiple solutions are available for maintaining your
     client state. See the "Maintaining State" section of the [Embedded Signing introduction.](../../../../guide/usage/embedded_signing.html#maintaining-state)

     After the user has completed the sending view, their browser is redirected to the `returnUrl` you supplied.

     By default, if the envelope already contains one or more documents, DocuSign will initially show the document tagging view when you redirect to the URL.

     To start with the envelope's recipients and documents view instead, examine the URL in the method's response.
     Then change the query parameter from `send=1` to `send=0` to start with the recipients/documents view.
     *
     * @param string                                 $envelopeId       The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Model\ReturnUrlRequest $returnUrlRequest
     * @param array                                  $parameters       List of parameters
     * @param string                                 $fetch            Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\EnvelopeViews|\Surex\DocuSign\Model\ErrorDetails
     */
    public function viewsPostEnvelopeSenderView($envelopeId, \Surex\DocuSign\Model\ReturnUrlRequest $returnUrlRequest, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/envelopes/{envelopeId}/views/sender';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{envelopeId}', urlencode($envelopeId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($returnUrlRequest, 'json');
        $request    = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (201 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\EnvelopeViews', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Returns a URL that allows you to embed the authentication view of the DocuSign UI in your applications.
     *
     * @param \Surex\DocuSign\Model\ConsoleViewRequest $consoleViewRequest
     * @param array                                    $parameters         List of parameters
     * @param string                                   $fetch              Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\EnvelopeViews|\Surex\DocuSign\Model\ErrorDetails
     */
    public function viewsPostAccountConsoleView(\Surex\DocuSign\Model\ConsoleViewRequest $consoleViewRequest, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/views/console';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($consoleViewRequest, 'json');
        $request    = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (201 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\EnvelopeViews', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }
}
