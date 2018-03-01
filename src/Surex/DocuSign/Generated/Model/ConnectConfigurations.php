<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class ConnectConfigurations
{
    /**
     * When set to **true**, data is sent to the urlToPublishTo web address. This option can be set to false to stop sending data while maintaining the Connect configuration information.
     *
     * @var string
     */
    protected $allowEnvelopePublish;
    /**
     * When set to **true**, the tracked envelope and recipient events for all users, including users that are added a later time, are sent through Connect.
     *
     * @var string
     */
    protected $allUsers;
    /**
     * If merge field's are being used, specifies the type of the merge field. The only  supported value is **salesforce**.
     *
     * @var string
     */
    protected $configurationType;
    /**
     *  Specifies the DocuSign generated ID for the Connect configuration.
     *
     * @var string
     */
    protected $connectId;
    /**
     * This turns Connect logging on or off. When set to **true**, logging is turned on.
     *
     * @var string
     */
    protected $enableLog;
    /**
     * A comma separated list of Envelope related events that are tracked through Connect. The possible event values are: Sent, Delivered, Completed, Declined, and Voided.
     *
     * @var string
     */
    protected $envelopeEvents;
    /**
     * When set to **true**, the Connect Service includes the Certificate of Completion with completed envelopes.
     *
     * @var string
     */
    protected $includeCertificateOfCompletion;
    /**
     * @var string
     */
    protected $includeCertSoapHeader;
    /**
     * When set to **true**, the Document Fields associated with the envelope's documents are included in the notification messages. Document Fields are optional custom name-value pairs added to documents using the API.
     *
     * @var string
     */
    protected $includeDocumentFields;
    /**
     * When set to **true**, Connect will send the PDF document along with the update XML.
     *
     * @var string
     */
    protected $includeDocuments;
    /**
     * When set to **true**, Connect will include the voidedReason for voided envelopes.
     *
     * @var string
     */
    protected $includeEnvelopeVoidReason;
    /**
     * When set to **true**, Connect will include the sender account as Custom Field in the data.
     *
     * @var string
     */
    protected $includeSenderAccountasCustomField;
    /**
     * When set to **true**, Connect will include the envelope time zone information.
     *
     * @var string
     */
    protected $includeTimeZoneInformation;
    /**
     * The name of the Connect configuration. The name helps identify the configuration in the list.
     *
     * @var string
     */
    protected $name;
    /**
     * A comma separated list of *Recipient* related events that will trigger a notification to your webhook Connect listener. The possible event values are: Sent, Delivered, Completed, Declined, AuthenticationFailed, and AutoResponded.
     *
     * @var string
     */
    protected $recipientEvents;
    /**
     * When set to **true**, and a publication message fails to be acknowledged, the message goes back into the queue and the system will retry delivery after a successful acknowledgement is received. If the delivery fails a second time, the message is not returned to the queue for sending until Connect receives a successful acknowledgement and it has been at least 24 hours since the previous retry. There is a maximum of ten retries Alternately, you can use Republish Connect Information to manually republish the envelope information.
     *
     * @var string
     */
    protected $requiresAcknowledgement;
    /**
     * When set to **true**, Mutual TLS will be enabled for notifications. Mutual TLS must be initiated by the listener (the customer's web server) during the TLS handshake protocol.
     *
     * @var string
     */
    protected $signMessageWithX509Certificate;
    /**
     * The namespace of the SOAP interface.

     The namespace value must be set if useSoapInterface is set to true.
     *
     * @var string
     */
    protected $soapNamespace;
    /**
     * This is the web address and name of your listener or Retrieving Service endpoint. You need to include HTTPS:// in the web address.
     *
     * @var string
     */
    protected $urlToPublishTo;
    /**
     * A comma separated list of userIds. This sets the users associated with the tracked envelope and recipient events. When a tracked event occurs for a set user, the a notification message is sent to your Connect listener.

     ###### Note: If allUsers is set to `false` then you must provide a list of user ids.
     *
     * @var string
     */
    protected $userIds;
    /**
     * When set to **true**, indicates that the `urlToPublishTo` property contains a SOAP endpoint.
     *
     * @var string
     */
    protected $useSoapInterface;

    /**
     * When set to **true**, data is sent to the urlToPublishTo web address. This option can be set to false to stop sending data while maintaining the Connect configuration information.
     *
     * @return string
     */
    public function getAllowEnvelopePublish(): ?string
    {
        return $this->allowEnvelopePublish;
    }

    /**
     * When set to **true**, data is sent to the urlToPublishTo web address. This option can be set to false to stop sending data while maintaining the Connect configuration information.
     *
     * @param string $allowEnvelopePublish
     *
     * @return self
     */
    public function setAllowEnvelopePublish(?string $allowEnvelopePublish): self
    {
        $this->allowEnvelopePublish = $allowEnvelopePublish;

        return $this;
    }

    /**
     * When set to **true**, the tracked envelope and recipient events for all users, including users that are added a later time, are sent through Connect.
     *
     * @return string
     */
    public function getAllUsers(): ?string
    {
        return $this->allUsers;
    }

    /**
     * When set to **true**, the tracked envelope and recipient events for all users, including users that are added a later time, are sent through Connect.
     *
     * @param string $allUsers
     *
     * @return self
     */
    public function setAllUsers(?string $allUsers): self
    {
        $this->allUsers = $allUsers;

        return $this;
    }

    /**
     * If merge field's are being used, specifies the type of the merge field. The only  supported value is **salesforce**.
     *
     * @return string
     */
    public function getConfigurationType(): ?string
    {
        return $this->configurationType;
    }

    /**
     * If merge field's are being used, specifies the type of the merge field. The only  supported value is **salesforce**.
     *
     * @param string $configurationType
     *
     * @return self
     */
    public function setConfigurationType(?string $configurationType): self
    {
        $this->configurationType = $configurationType;

        return $this;
    }

    /**
     *  Specifies the DocuSign generated ID for the Connect configuration.
     *
     * @return string
     */
    public function getConnectId(): ?string
    {
        return $this->connectId;
    }

    /**
     *  Specifies the DocuSign generated ID for the Connect configuration.
     *
     * @param string $connectId
     *
     * @return self
     */
    public function setConnectId(?string $connectId): self
    {
        $this->connectId = $connectId;

        return $this;
    }

    /**
     * This turns Connect logging on or off. When set to **true**, logging is turned on.
     *
     * @return string
     */
    public function getEnableLog(): ?string
    {
        return $this->enableLog;
    }

    /**
     * This turns Connect logging on or off. When set to **true**, logging is turned on.
     *
     * @param string $enableLog
     *
     * @return self
     */
    public function setEnableLog(?string $enableLog): self
    {
        $this->enableLog = $enableLog;

        return $this;
    }

    /**
     * A comma separated list of Envelope related events that are tracked through Connect. The possible event values are: Sent, Delivered, Completed, Declined, and Voided.
     *
     * @return string
     */
    public function getEnvelopeEvents(): ?string
    {
        return $this->envelopeEvents;
    }

    /**
     * A comma separated list of Envelope related events that are tracked through Connect. The possible event values are: Sent, Delivered, Completed, Declined, and Voided.
     *
     * @param string $envelopeEvents
     *
     * @return self
     */
    public function setEnvelopeEvents(?string $envelopeEvents): self
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
     * @return string
     */
    public function getIncludeCertSoapHeader(): ?string
    {
        return $this->includeCertSoapHeader;
    }

    /**
     * @param string $includeCertSoapHeader
     *
     * @return self
     */
    public function setIncludeCertSoapHeader(?string $includeCertSoapHeader): self
    {
        $this->includeCertSoapHeader = $includeCertSoapHeader;

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
     * When set to **true**, Connect will send the PDF document along with the update XML.
     *
     * @return string
     */
    public function getIncludeDocuments(): ?string
    {
        return $this->includeDocuments;
    }

    /**
     * When set to **true**, Connect will send the PDF document along with the update XML.
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
     * When set to **true**, Connect will include the voidedReason for voided envelopes.
     *
     * @return string
     */
    public function getIncludeEnvelopeVoidReason(): ?string
    {
        return $this->includeEnvelopeVoidReason;
    }

    /**
     * When set to **true**, Connect will include the voidedReason for voided envelopes.
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
    public function getIncludeSenderAccountasCustomField(): ?string
    {
        return $this->includeSenderAccountasCustomField;
    }

    /**
     * When set to **true**, Connect will include the sender account as Custom Field in the data.
     *
     * @param string $includeSenderAccountasCustomField
     *
     * @return self
     */
    public function setIncludeSenderAccountasCustomField(?string $includeSenderAccountasCustomField): self
    {
        $this->includeSenderAccountasCustomField = $includeSenderAccountasCustomField;

        return $this;
    }

    /**
     * When set to **true**, Connect will include the envelope time zone information.
     *
     * @return string
     */
    public function getIncludeTimeZoneInformation(): ?string
    {
        return $this->includeTimeZoneInformation;
    }

    /**
     * When set to **true**, Connect will include the envelope time zone information.
     *
     * @param string $includeTimeZoneInformation
     *
     * @return self
     */
    public function setIncludeTimeZoneInformation(?string $includeTimeZoneInformation): self
    {
        $this->includeTimeZoneInformation = $includeTimeZoneInformation;

        return $this;
    }

    /**
     * The name of the Connect configuration. The name helps identify the configuration in the list.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The name of the Connect configuration. The name helps identify the configuration in the list.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * A comma separated list of *Recipient* related events that will trigger a notification to your webhook Connect listener. The possible event values are: Sent, Delivered, Completed, Declined, AuthenticationFailed, and AutoResponded.
     *
     * @return string
     */
    public function getRecipientEvents(): ?string
    {
        return $this->recipientEvents;
    }

    /**
     * A comma separated list of *Recipient* related events that will trigger a notification to your webhook Connect listener. The possible event values are: Sent, Delivered, Completed, Declined, AuthenticationFailed, and AutoResponded.
     *
     * @param string $recipientEvents
     *
     * @return self
     */
    public function setRecipientEvents(?string $recipientEvents): self
    {
        $this->recipientEvents = $recipientEvents;

        return $this;
    }

    /**
     * When set to **true**, and a publication message fails to be acknowledged, the message goes back into the queue and the system will retry delivery after a successful acknowledgement is received. If the delivery fails a second time, the message is not returned to the queue for sending until Connect receives a successful acknowledgement and it has been at least 24 hours since the previous retry. There is a maximum of ten retries Alternately, you can use Republish Connect Information to manually republish the envelope information.
     *
     * @return string
     */
    public function getRequiresAcknowledgement(): ?string
    {
        return $this->requiresAcknowledgement;
    }

    /**
     * When set to **true**, and a publication message fails to be acknowledged, the message goes back into the queue and the system will retry delivery after a successful acknowledgement is received. If the delivery fails a second time, the message is not returned to the queue for sending until Connect receives a successful acknowledgement and it has been at least 24 hours since the previous retry. There is a maximum of ten retries Alternately, you can use Republish Connect Information to manually republish the envelope information.
     *
     * @param string $requiresAcknowledgement
     *
     * @return self
     */
    public function setRequiresAcknowledgement(?string $requiresAcknowledgement): self
    {
        $this->requiresAcknowledgement = $requiresAcknowledgement;

        return $this;
    }

    /**
     * When set to **true**, Mutual TLS will be enabled for notifications. Mutual TLS must be initiated by the listener (the customer's web server) during the TLS handshake protocol.
     *
     * @return string
     */
    public function getSignMessageWithX509Certificate(): ?string
    {
        return $this->signMessageWithX509Certificate;
    }

    /**
     * When set to **true**, Mutual TLS will be enabled for notifications. Mutual TLS must be initiated by the listener (the customer's web server) during the TLS handshake protocol.
     *
     * @param string $signMessageWithX509Certificate
     *
     * @return self
     */
    public function setSignMessageWithX509Certificate(?string $signMessageWithX509Certificate): self
    {
        $this->signMessageWithX509Certificate = $signMessageWithX509Certificate;

        return $this;
    }

    /**
     * The namespace of the SOAP interface.

     The namespace value must be set if useSoapInterface is set to true.
     *
     * @return string
     */
    public function getSoapNamespace(): ?string
    {
        return $this->soapNamespace;
    }

    /**
     * The namespace of the SOAP interface.

     The namespace value must be set if useSoapInterface is set to true.
     *
     * @param string $soapNamespace
     *
     * @return self
     */
    public function setSoapNamespace(?string $soapNamespace): self
    {
        $this->soapNamespace = $soapNamespace;

        return $this;
    }

    /**
     * This is the web address and name of your listener or Retrieving Service endpoint. You need to include HTTPS:// in the web address.
     *
     * @return string
     */
    public function getUrlToPublishTo(): ?string
    {
        return $this->urlToPublishTo;
    }

    /**
     * This is the web address and name of your listener or Retrieving Service endpoint. You need to include HTTPS:// in the web address.
     *
     * @param string $urlToPublishTo
     *
     * @return self
     */
    public function setUrlToPublishTo(?string $urlToPublishTo): self
    {
        $this->urlToPublishTo = $urlToPublishTo;

        return $this;
    }

    /**
     * A comma separated list of userIds. This sets the users associated with the tracked envelope and recipient events. When a tracked event occurs for a set user, the a notification message is sent to your Connect listener.

     ###### Note: If allUsers is set to `false` then you must provide a list of user ids.
     *
     * @return string
     */
    public function getUserIds(): ?string
    {
        return $this->userIds;
    }

    /**
     * A comma separated list of userIds. This sets the users associated with the tracked envelope and recipient events. When a tracked event occurs for a set user, the a notification message is sent to your Connect listener.

     ###### Note: If allUsers is set to `false` then you must provide a list of user ids.
     *
     * @param string $userIds
     *
     * @return self
     */
    public function setUserIds(?string $userIds): self
    {
        $this->userIds = $userIds;

        return $this;
    }

    /**
     * When set to **true**, indicates that the `urlToPublishTo` property contains a SOAP endpoint.
     *
     * @return string
     */
    public function getUseSoapInterface(): ?string
    {
        return $this->useSoapInterface;
    }

    /**
     * When set to **true**, indicates that the `urlToPublishTo` property contains a SOAP endpoint.
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
