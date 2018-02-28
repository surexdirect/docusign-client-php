<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class EventNotification
{
    /**
     * A list of envelope-level event statuses that will trigger Connect to send updates to the endpoint specified in the `url` property.

     To receive notifications, you must include either an `envelopeEvents` node or a `recipientEvents` node. You do not need to specify both.
     *
     * @var EnvelopeEvent[]
     */
    protected $envelopeEvents;
    /**
     * When set to **true**, the Connect Service includes the Certificate of Completion with completed envelopes.
     *
     * @var string
     */
    protected $includeCertificateOfCompletion;
    /**
     * When set to **true**, the Connect service will send the DocuSign signedby certificate as part of the SOAP xml. The certificate is included in the XML message as `wsse:BinarySecurityToken`.
     *
     * @var string
     */
    protected $includeCertificateWithSoap;
    /**
     * When set to **true**, the Document Fields associated with the envelope's documents are included in the notification messages. Document Fields are optional custom name-value pairs added to documents using the API.
     *
     * @var string
     */
    protected $includeDocumentFields;
    /**
     * When set to **true**, the XML webhook messages will include the envelope's PDF documents. Including the PDF documents will greatly increase the size of the notification messages. Ensure that your listener can handle incoming messages that are 25MB or larger.
     *
     * @var string
     */
    protected $includeDocuments;
    /**
     * When set to **true**, if the envelope is voided, the Connect Service notification will include the void reason, as entered by the person that voided the envelope.
     *
     * @var string
     */
    protected $includeEnvelopeVoidReason;
    /**
     * When set to **true**, Connect will include the sender account as Custom Field in the data.
     *
     * @var string
     */
    protected $includeSenderAccountAsCustomField;
    /**
     * When set to **true**, the envelope's time zone information is included in the webhook messages.
     *
     * @var string
     */
    protected $includeTimeZone;
    /**
     * When set to **true**, the webhook messages are logged. They can be viewed on the DocuSign Administration Web Tool in the Connect section. Logged messages can also be downloaded via the [ConnectEvents resource](../../../Connect/ConnectEvents/).
     *
     * @var string
     */
    protected $loggingEnabled;
    /**
     * An array of recipient event statuses that will trigger Connect to send notifications to your webhook listener at the url endpoint specified in the `url` property.

     To receive notifications, you must include either an `envelopeEvents` node or a `recipientEvents` node. You do not need to specify both.
     *
     * @var RecipientEvent[]
     */
    protected $recipientEvents;
    /**
     * When set to **true**, the DocuSign Connect service checks that the message was received and retries on failures.
     *
     * @var string
     */
    protected $requireAcknowledgment;
    /**
     * When set to **true**, notification messages are digitally signed with an [X509 certificate](https://trust.docusign.com/en-us/trust-certifications/docusign-public-certificates/).
     *
     * @var string
     */
    protected $signMessageWithX509Cert;
    /**
     * The namespace of the SOAP interface.

     The namespace value must be set if useSoapInterface is set to true.
     *
     * @var string
     */
    protected $soapNameSpace;
    /**
     * The endpoint to which webhook notification messages are sent via an HTTP/S POST request. For the DocuSign production platform, the url must start with https. For the demo platform, either http or https is ok.
     *
     * @var string
     */
    protected $url;
    /**
     * When set to **true**, the notifications are sent to your endpoint as SOAP requests.
     *
     * @var string
     */
    protected $useSoapInterface;

    /**
     * A list of envelope-level event statuses that will trigger Connect to send updates to the endpoint specified in the `url` property.

     To receive notifications, you must include either an `envelopeEvents` node or a `recipientEvents` node. You do not need to specify both.
     *
     * @return EnvelopeEvent[]
     */
    public function getEnvelopeEvents(): ?array
    {
        return $this->envelopeEvents;
    }

    /**
     * A list of envelope-level event statuses that will trigger Connect to send updates to the endpoint specified in the `url` property.

     To receive notifications, you must include either an `envelopeEvents` node or a `recipientEvents` node. You do not need to specify both.
     *
     * @param EnvelopeEvent[] $envelopeEvents
     *
     * @return self
     */
    public function setEnvelopeEvents(?array $envelopeEvents): self
    {
        $this->envelopeEvents = $envelopeEvents;

        return $this;
    }

    /**
     * When set to **true**, the Connect Service includes the Certificate of Completion with completed envelopes.
     *
     * @return string
     */
    public function getIncludeCertificateOfCompletion(): ?string
    {
        return $this->includeCertificateOfCompletion;
    }

    /**
     * When set to **true**, the Connect Service includes the Certificate of Completion with completed envelopes.
     *
     * @param string $includeCertificateOfCompletion
     *
     * @return self
     */
    public function setIncludeCertificateOfCompletion(?string $includeCertificateOfCompletion): self
    {
        $this->includeCertificateOfCompletion = $includeCertificateOfCompletion;

        return $this;
    }

    /**
     * When set to **true**, the Connect service will send the DocuSign signedby certificate as part of the SOAP xml. The certificate is included in the XML message as `wsse:BinarySecurityToken`.
     *
     * @return string
     */
    public function getIncludeCertificateWithSoap(): ?string
    {
        return $this->includeCertificateWithSoap;
    }

    /**
     * When set to **true**, the Connect service will send the DocuSign signedby certificate as part of the SOAP xml. The certificate is included in the XML message as `wsse:BinarySecurityToken`.
     *
     * @param string $includeCertificateWithSoap
     *
     * @return self
     */
    public function setIncludeCertificateWithSoap(?string $includeCertificateWithSoap): self
    {
        $this->includeCertificateWithSoap = $includeCertificateWithSoap;

        return $this;
    }

    /**
     * When set to **true**, the Document Fields associated with the envelope's documents are included in the notification messages. Document Fields are optional custom name-value pairs added to documents using the API.
     *
     * @return string
     */
    public function getIncludeDocumentFields(): ?string
    {
        return $this->includeDocumentFields;
    }

    /**
     * When set to **true**, the Document Fields associated with the envelope's documents are included in the notification messages. Document Fields are optional custom name-value pairs added to documents using the API.
     *
     * @param string $includeDocumentFields
     *
     * @return self
     */
    public function setIncludeDocumentFields(?string $includeDocumentFields): self
    {
        $this->includeDocumentFields = $includeDocumentFields;

        return $this;
    }

    /**
     * When set to **true**, the XML webhook messages will include the envelope's PDF documents. Including the PDF documents will greatly increase the size of the notification messages. Ensure that your listener can handle incoming messages that are 25MB or larger.
     *
     * @return string
     */
    public function getIncludeDocuments(): ?string
    {
        return $this->includeDocuments;
    }

    /**
     * When set to **true**, the XML webhook messages will include the envelope's PDF documents. Including the PDF documents will greatly increase the size of the notification messages. Ensure that your listener can handle incoming messages that are 25MB or larger.
     *
     * @param string $includeDocuments
     *
     * @return self
     */
    public function setIncludeDocuments(?string $includeDocuments): self
    {
        $this->includeDocuments = $includeDocuments;

        return $this;
    }

    /**
     * When set to **true**, if the envelope is voided, the Connect Service notification will include the void reason, as entered by the person that voided the envelope.
     *
     * @return string
     */
    public function getIncludeEnvelopeVoidReason(): ?string
    {
        return $this->includeEnvelopeVoidReason;
    }

    /**
     * When set to **true**, if the envelope is voided, the Connect Service notification will include the void reason, as entered by the person that voided the envelope.
     *
     * @param string $includeEnvelopeVoidReason
     *
     * @return self
     */
    public function setIncludeEnvelopeVoidReason(?string $includeEnvelopeVoidReason): self
    {
        $this->includeEnvelopeVoidReason = $includeEnvelopeVoidReason;

        return $this;
    }

    /**
     * When set to **true**, Connect will include the sender account as Custom Field in the data.
     *
     * @return string
     */
    public function getIncludeSenderAccountAsCustomField(): ?string
    {
        return $this->includeSenderAccountAsCustomField;
    }

    /**
     * When set to **true**, Connect will include the sender account as Custom Field in the data.
     *
     * @param string $includeSenderAccountAsCustomField
     *
     * @return self
     */
    public function setIncludeSenderAccountAsCustomField(?string $includeSenderAccountAsCustomField): self
    {
        $this->includeSenderAccountAsCustomField = $includeSenderAccountAsCustomField;

        return $this;
    }

    /**
     * When set to **true**, the envelope's time zone information is included in the webhook messages.
     *
     * @return string
     */
    public function getIncludeTimeZone(): ?string
    {
        return $this->includeTimeZone;
    }

    /**
     * When set to **true**, the envelope's time zone information is included in the webhook messages.
     *
     * @param string $includeTimeZone
     *
     * @return self
     */
    public function setIncludeTimeZone(?string $includeTimeZone): self
    {
        $this->includeTimeZone = $includeTimeZone;

        return $this;
    }

    /**
     * When set to **true**, the webhook messages are logged. They can be viewed on the DocuSign Administration Web Tool in the Connect section. Logged messages can also be downloaded via the [ConnectEvents resource](../../../Connect/ConnectEvents/).
     *
     * @return string
     */
    public function getLoggingEnabled(): ?string
    {
        return $this->loggingEnabled;
    }

    /**
     * When set to **true**, the webhook messages are logged. They can be viewed on the DocuSign Administration Web Tool in the Connect section. Logged messages can also be downloaded via the [ConnectEvents resource](../../../Connect/ConnectEvents/).
     *
     * @param string $loggingEnabled
     *
     * @return self
     */
    public function setLoggingEnabled(?string $loggingEnabled): self
    {
        $this->loggingEnabled = $loggingEnabled;

        return $this;
    }

    /**
     * An array of recipient event statuses that will trigger Connect to send notifications to your webhook listener at the url endpoint specified in the `url` property.

     To receive notifications, you must include either an `envelopeEvents` node or a `recipientEvents` node. You do not need to specify both.
     *
     * @return RecipientEvent[]
     */
    public function getRecipientEvents(): ?array
    {
        return $this->recipientEvents;
    }

    /**
     * An array of recipient event statuses that will trigger Connect to send notifications to your webhook listener at the url endpoint specified in the `url` property.

     To receive notifications, you must include either an `envelopeEvents` node or a `recipientEvents` node. You do not need to specify both.
     *
     * @param RecipientEvent[] $recipientEvents
     *
     * @return self
     */
    public function setRecipientEvents(?array $recipientEvents): self
    {
        $this->recipientEvents = $recipientEvents;

        return $this;
    }

    /**
     * When set to **true**, the DocuSign Connect service checks that the message was received and retries on failures.
     *
     * @return string
     */
    public function getRequireAcknowledgment(): ?string
    {
        return $this->requireAcknowledgment;
    }

    /**
     * When set to **true**, the DocuSign Connect service checks that the message was received and retries on failures.
     *
     * @param string $requireAcknowledgment
     *
     * @return self
     */
    public function setRequireAcknowledgment(?string $requireAcknowledgment): self
    {
        $this->requireAcknowledgment = $requireAcknowledgment;

        return $this;
    }

    /**
     * When set to **true**, notification messages are digitally signed with an [X509 certificate](https://trust.docusign.com/en-us/trust-certifications/docusign-public-certificates/).
     *
     * @return string
     */
    public function getSignMessageWithX509Cert(): ?string
    {
        return $this->signMessageWithX509Cert;
    }

    /**
     * When set to **true**, notification messages are digitally signed with an [X509 certificate](https://trust.docusign.com/en-us/trust-certifications/docusign-public-certificates/).
     *
     * @param string $signMessageWithX509Cert
     *
     * @return self
     */
    public function setSignMessageWithX509Cert(?string $signMessageWithX509Cert): self
    {
        $this->signMessageWithX509Cert = $signMessageWithX509Cert;

        return $this;
    }

    /**
     * The namespace of the SOAP interface.

     The namespace value must be set if useSoapInterface is set to true.
     *
     * @return string
     */
    public function getSoapNameSpace(): ?string
    {
        return $this->soapNameSpace;
    }

    /**
     * The namespace of the SOAP interface.

     The namespace value must be set if useSoapInterface is set to true.
     *
     * @param string $soapNameSpace
     *
     * @return self
     */
    public function setSoapNameSpace(?string $soapNameSpace): self
    {
        $this->soapNameSpace = $soapNameSpace;

        return $this;
    }

    /**
     * The endpoint to which webhook notification messages are sent via an HTTP/S POST request. For the DocuSign production platform, the url must start with https. For the demo platform, either http or https is ok.
     *
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * The endpoint to which webhook notification messages are sent via an HTTP/S POST request. For the DocuSign production platform, the url must start with https. For the demo platform, either http or https is ok.
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * When set to **true**, the notifications are sent to your endpoint as SOAP requests.
     *
     * @return string
     */
    public function getUseSoapInterface(): ?string
    {
        return $this->useSoapInterface;
    }

    /**
     * When set to **true**, the notifications are sent to your endpoint as SOAP requests.
     *
     * @param string $useSoapInterface
     *
     * @return self
     */
    public function setUseSoapInterface(?string $useSoapInterface): self
    {
        $this->useSoapInterface = $useSoapInterface;

        return $this;
    }
}
