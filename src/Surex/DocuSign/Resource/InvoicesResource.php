<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Surex\DocuSign\AccountResource as Resource;

class InvoicesResource extends Resource
{
    /**
     * Retrieves a list of invoices for the account. If the from date or to date queries are not specified, the response returns invoices for the last 365 days.

     Privileges required: account administrator
     *
     * @param array $parameters {
     *
     *     @var string $from_date specifies the date/time of the earliest invoice in the account to retrieve
     *     @var string $to_date Specifies the date/time of the latest invoice in the account to retrieve.
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\BillingInvoicesResponse|\Surex\DocuSign\Model\ErrorDetails
     */
    public function billingInvoicesGetBillingInvoices($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('from_date', null);
        $queryParam->setDefault('to_date', null);
        $url     = '/restapi/v2/accounts/{accountId}/billing_invoices';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body    = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\BillingInvoicesResponse', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieves the specified invoice.

     ###### Note: If the `pdfAvailable` property in the response is set to *true*, you can download a PDF version of the invoice. To download the PDF, make the call again and change the value of the `Accept` property in the header to `Accept: application/pdf`.

     Privileges required: account administrator

     The response returns a list of charges and information about the charges. Quantities are usually shown as 'unlimited' or an integer. Amounts are shown in the currency set for the account.

     **Response**
     The following table provides a description of the different `chargeName` property values. The information will grow as more chargeable items are added to the system.

     | chargeName | Description |
     | --- | --- |
     | id_check | ID Check Charge |
     | in_person_signing | In Person Signing charge |
     | envelopes Included | Sent Envelopes for the account |
     | age_verify | Age verification check |
     | ofac | OFAC Check |
     | id_confirm | ID confirmation check |
     | student_authentication | STAN PIN authentication check |
     | wet_sign_fax | Pages for returning signed documents by fax |
     | attachment_fax | Pages for returning attachments by fax |
     | phone_authentication | Phone authentication charge |
     | powerforms | PowerForm envelopes sent |
     | signer_payments | Payment processing charge |
     | outbound_fax | Send by fax charge |
     | bulk_recipient_envelopes | Bulk Recipient Envelopes sent |
     | sms_authentications | SMS authentication charge |
     | saml_authentications | SAML authentication charge |
     | express_signer_certificate | DocuSign Express Certificate charge |
     | personal_signer_certificate | Personal Signer Certificate charge |
     | safe_certificate | SAFE BioPharma Signer Certificate charge |
     | seats | Included active seats charge |
     | open_trust_certificate | OpenTrust Signer Certificate charge |
     *
     * @param string $invoiceId
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\Invoices|\Surex\DocuSign\Model\ErrorDetails
     */
    public function billingInvoicesGetBillingInvoice($invoiceId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/billing_invoices/{invoiceId}';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{invoiceId}', urlencode($invoiceId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\Invoices', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Returns a list past due invoices for the account and notes if payment can be made through the REST API.

     Privileges Required: account administrator
     *
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\BillingInvoicesSummary|\Surex\DocuSign\Model\ErrorDetails
     */
    public function billingInvoicesGetBillingInvoicesPastDue($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/billing_invoices_past_due';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\BillingInvoicesSummary', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }
}
