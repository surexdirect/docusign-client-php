<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class ConnectConfigurations
{
    /**
     * @var string
     */
    protected $allowEnvelopePublish;
    /**
     * @var string
     */
    protected $allUsers;
    /**
     * @var string
     */
    protected $configurationType;
    /**
     * @var string
     */
    protected $connectId;
    /**
     * @var string
     */
    protected $enableLog;
    /**
     * @var string
     */
    protected $envelopeEvents;
    /**
     * @var string
     */
    protected $includeCertificateOfCompletion;
    /**
     * @var string
     */
    protected $includeCertSoapHeader;
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
    protected $includeSenderAccountasCustomField;
    /**
     * @var string
     */
    protected $includeTimeZoneInformation;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $recipientEvents;
    /**
     * @var string
     */
    protected $requiresAcknowledgement;
    /**
     * @var string
     */
    protected $signMessageWithX509Certificate;
    /**
     * @var string
     */
    protected $soapNamespace;
    /**
     * @var string
     */
    protected $urlToPublishTo;
    /**
     * @var string
     */
    protected $userIds;
    /**
     * @var string
     */
    protected $useSoapInterface;

    /**
     * @return string
     */
    public function getAllowEnvelopePublish()
    {
        return $this->allowEnvelopePublish;
    }

    /**
     * @param string $allowEnvelopePublish
     *
     * @return self
     */
    public function setAllowEnvelopePublish($allowEnvelopePublish = null)
    {
        $this->allowEnvelopePublish = $allowEnvelopePublish;

        return $this;
    }

    /**
     * @return string
     */
    public function getAllUsers()
    {
        return $this->allUsers;
    }

    /**
     * @param string $allUsers
     *
     * @return self
     */
    public function setAllUsers($allUsers = null)
    {
        $this->allUsers = $allUsers;

        return $this;
    }

    /**
     * @return string
     */
    public function getConfigurationType()
    {
        return $this->configurationType;
    }

    /**
     * @param string $configurationType
     *
     * @return self
     */
    public function setConfigurationType($configurationType = null)
    {
        $this->configurationType = $configurationType;

        return $this;
    }

    /**
     * @return string
     */
    public function getConnectId()
    {
        return $this->connectId;
    }

    /**
     * @param string $connectId
     *
     * @return self
     */
    public function setConnectId($connectId = null)
    {
        $this->connectId = $connectId;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnableLog()
    {
        return $this->enableLog;
    }

    /**
     * @param string $enableLog
     *
     * @return self
     */
    public function setEnableLog($enableLog = null)
    {
        $this->enableLog = $enableLog;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnvelopeEvents()
    {
        return $this->envelopeEvents;
    }

    /**
     * @param string $envelopeEvents
     *
     * @return self
     */
    public function setEnvelopeEvents($envelopeEvents = null)
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
    public function getIncludeCertSoapHeader()
    {
        return $this->includeCertSoapHeader;
    }

    /**
     * @param string $includeCertSoapHeader
     *
     * @return self
     */
    public function setIncludeCertSoapHeader($includeCertSoapHeader = null)
    {
        $this->includeCertSoapHeader = $includeCertSoapHeader;

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
    public function getIncludeSenderAccountasCustomField()
    {
        return $this->includeSenderAccountasCustomField;
    }

    /**
     * @param string $includeSenderAccountasCustomField
     *
     * @return self
     */
    public function setIncludeSenderAccountasCustomField($includeSenderAccountasCustomField = null)
    {
        $this->includeSenderAccountasCustomField = $includeSenderAccountasCustomField;

        return $this;
    }

    /**
     * @return string
     */
    public function getIncludeTimeZoneInformation()
    {
        return $this->includeTimeZoneInformation;
    }

    /**
     * @param string $includeTimeZoneInformation
     *
     * @return self
     */
    public function setIncludeTimeZoneInformation($includeTimeZoneInformation = null)
    {
        $this->includeTimeZoneInformation = $includeTimeZoneInformation;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getRecipientEvents()
    {
        return $this->recipientEvents;
    }

    /**
     * @param string $recipientEvents
     *
     * @return self
     */
    public function setRecipientEvents($recipientEvents = null)
    {
        $this->recipientEvents = $recipientEvents;

        return $this;
    }

    /**
     * @return string
     */
    public function getRequiresAcknowledgement()
    {
        return $this->requiresAcknowledgement;
    }

    /**
     * @param string $requiresAcknowledgement
     *
     * @return self
     */
    public function setRequiresAcknowledgement($requiresAcknowledgement = null)
    {
        $this->requiresAcknowledgement = $requiresAcknowledgement;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignMessageWithX509Certificate()
    {
        return $this->signMessageWithX509Certificate;
    }

    /**
     * @param string $signMessageWithX509Certificate
     *
     * @return self
     */
    public function setSignMessageWithX509Certificate($signMessageWithX509Certificate = null)
    {
        $this->signMessageWithX509Certificate = $signMessageWithX509Certificate;

        return $this;
    }

    /**
     * @return string
     */
    public function getSoapNamespace()
    {
        return $this->soapNamespace;
    }

    /**
     * @param string $soapNamespace
     *
     * @return self
     */
    public function setSoapNamespace($soapNamespace = null)
    {
        $this->soapNamespace = $soapNamespace;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrlToPublishTo()
    {
        return $this->urlToPublishTo;
    }

    /**
     * @param string $urlToPublishTo
     *
     * @return self
     */
    public function setUrlToPublishTo($urlToPublishTo = null)
    {
        $this->urlToPublishTo = $urlToPublishTo;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserIds()
    {
        return $this->userIds;
    }

    /**
     * @param string $userIds
     *
     * @return self
     */
    public function setUserIds($userIds = null)
    {
        $this->userIds = $userIds;

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
