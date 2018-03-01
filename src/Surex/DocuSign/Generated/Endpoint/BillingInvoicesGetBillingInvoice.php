<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class BillingInvoicesGetBillingInvoice extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $invoiceId;

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
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $invoiceId
     */
    public function __construct(string $accountId, string $invoiceId)
    {
        $this->accountId = $accountId;
        $this->invoiceId = $invoiceId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{invoiceId}'], [$this->accountId, $this->invoiceId], '/v2/accounts/{accountId}/billing_invoices/{invoiceId}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Generated\Exception\BillingInvoicesGetBillingInvoiceBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\Invoices
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\Invoices', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\BillingInvoicesGetBillingInvoiceBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
