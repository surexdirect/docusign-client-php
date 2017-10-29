<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class EventNotification
{
    /**
     * @var EnvelopeEvent[]
     */
    protected $envelopeEvents;
    /**
     * @var string
     */
    protected $includeCertificateOfCompletion;
    /**
     * @var string
     */
    protected $includeCertificateWithSoap;
    /**
     * @var string
     */
    protected $includeDocumentFields;
    /**
     * @var string
     */
    protected $includeDocuments;
    /**
     * @var string
     */
    protected $includeEnvelopeVoidReason;
    /**
     * @var string
     */
    protected $includeSenderAccountAsCustomField;
    /**
     * @var string
     */
    protected $includeTimeZone;
    /**
     * @var string
     */
    protected $loggingEnabled;
    /**
     * @var RecipientEvent[]
     */
    protected $recipientEvents;
    /**
     * @var string
     */
    protected $requireAcknowledgment;
    /**
     * @var string
     */
    protected $signMessageWithX509Cert;
    /**
     * @var string
     */
    protected $soapNameSpace;
    /**
     * @var string
     */
    protected $url;
    /**
     * @var string
     */
    protected $useSoapInterface;

    /**
     * @return EnvelopeEvent[]
     */
    public function getEnvelopeEvents()
    {
        return $this->envelopeEvents;
    }

    /**
     * @param EnvelopeEvent[] $envelopeEvents
     *
     * @return self
     */
    public function setEnvelopeEvents(array $envelopeEvents = null)
    {
        $this->envelopeEvents = $envelopeEvents;

        return $this;
    }

    /**
     * @return string
     */
    public function getIncludeCertificateOfCompletion()
    {
        return $this->includeCertificateOfCompletion;
    }

    /**
     * @param string $includeCertificateOfCompletion
     *
     * @return self
     */
    public function setIncludeCertificateOfCompletion($includeCertificateOfCompletion = null)
    {
        $this->includeCertificateOfCompletion = $includeCertificateOfCompletion;

        return $this;
    }

    /**
     * @return string
     */
    public function getIncludeCertificateWithSoap()
    {
        return $this->includeCertificateWithSoap;
    }

    /**
     * @param string $includeCertificateWithSoap
     *
     * @return self
     */
    public function setIncludeCertificateWithSoap($includeCertificateWithSoap = null)
    {
        $this->includeCertificateWithSoap = $includeCertificateWithSoap;

        return $this;
    }

    /**
     * @return string
     */
    public function getIncludeDocumentFields()
    {
        return $this->includeDocumentFields;
    }

    /**
     * @param string $includeDocumentFields
     *
     * @return self
     */
    public function setIncludeDocumentFields($includeDocumentFields = null)
    {
        $this->includeDocumentFields = $includeDocumentFields;

        return $this;
    }

    /**
     * @return string
     */
    public function getIncludeDocuments()
    {
        return $this->includeDocuments;
    }

    /**
     * @param string $includeDocuments
     *
     * @return self
     */
    public function setIncludeDocuments($includeDocuments = null)
    {
        $this->includeDocuments = $includeDocuments;

        return $this;
    }

    /**
     * @return string
     */
    public function getIncludeEnvelopeVoidReason()
    {
        return $this->includeEnvelopeVoidReason;
    }

    /**
     * @param string $includeEnvelopeVoidReason
     *
     * @return self
     */
    public function setIncludeEnvelopeVoidReason($includeEnvelopeVoidReason = null)
    {
        $this->includeEnvelopeVoidReason = $includeEnvelopeVoidReason;

        return $this;
    }

    /**
     * @return string
     */
    public function getIncludeSenderAccountAsCustomField()
    {
        return $this->includeSenderAccountAsCustomField;
    }

    /**
     * @param string $includeSenderAccountAsCustomField
     *
     * @return self
     */
    public function setIncludeSenderAccountAsCustomField($includeSenderAccountAsCustomField = null)
    {
        $this->includeSenderAccountAsCustomField = $includeSenderAccountAsCustomField;

        return $this;
    }

    /**
     * @return string
     */
    public function getIncludeTimeZone()
    {
        return $this->includeTimeZone;
    }

    /**
     * @param string $includeTimeZone
     *
     * @return self
     */
    public function setIncludeTimeZone($includeTimeZone = null)
    {
        $this->includeTimeZone = $includeTimeZone;

        return $this;
    }

    /**
     * @return string
     */
    public function getLoggingEnabled()
    {
        return $this->loggingEnabled;
    }

    /**
     * @param string $loggingEnabled
     *
     * @return self
     */
    public function setLoggingEnabled($loggingEnabled = null)
    {
        $this->loggingEnabled = $loggingEnabled;

        return $this;
    }

    /**
     * @return RecipientEvent[]
     */
    public function getRecipientEvents()
    {
        return $this->recipientEvents;
    }

    /**
     * @param RecipientEvent[] $recipientEvents
     *
     * @return self
     */
    public function setRecipientEvents(array $recipientEvents = null)
    {
        $this->recipientEvents = $recipientEvents;

        return $this;
    }

    /**
     * @return string
     */
    public function getRequireAcknowledgment()
    {
        return $this->requireAcknowledgment;
    }

    /**
     * @param string $requireAcknowledgment
     *
     * @return self
     */
    public function setRequireAcknowledgment($requireAcknowledgment = null)
    {
        $this->requireAcknowledgment = $requireAcknowledgment;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignMessageWithX509Cert()
    {
        return $this->signMessageWithX509Cert;
    }

    /**
     * @param string $signMessageWithX509Cert
     *
     * @return self
     */
    public function setSignMessageWithX509Cert($signMessageWithX509Cert = null)
    {
        $this->signMessageWithX509Cert = $signMessageWithX509Cert;

        return $this;
    }

    /**
     * @return string
     */
    public function getSoapNameSpace()
    {
        return $this->soapNameSpace;
    }

    /**
     * @param string $soapNameSpace
     *
     * @return self
     */
    public function setSoapNameSpace($soapNameSpace = null)
    {
        $this->soapNameSpace = $soapNameSpace;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return self
     */
    public function setUrl($url = null)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return string
     */
    public function getUseSoapInterface()
    {
        return $this->useSoapInterface;
    }

    /**
     * @param string $useSoapInterface
     *
     * @return self
     */
    public function setUseSoapInterface($useSoapInterface = null)
    {
        $this->useSoapInterface = $useSoapInterface;

        return $this;
    }
}
