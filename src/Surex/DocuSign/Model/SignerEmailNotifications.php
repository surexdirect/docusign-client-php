<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class SignerEmailNotifications
{
    /**
     * @var string
     */
    protected $agentNotification;
    /**
     * @var string
     */
    protected $carbonCopyNotification;
    /**
     * @var string
     */
    protected $certifiedDeliveryNotification;
    /**
     * @var string
     */
    protected $documentMarkupActivation;
    /**
     * @var string
     */
    protected $envelopeActivation;
    /**
     * @var string
     */
    protected $envelopeComplete;
    /**
     * @var string
     */
    protected $envelopeCorrected;
    /**
     * @var string
     */
    protected $envelopeDeclined;
    /**
     * @var string
     */
    protected $envelopeVoided;
    /**
     * @var string
     */
    protected $faxReceived;
    /**
     * @var string
     */
    protected $offlineSigningFailed;
    /**
     * @var string
     */
    protected $purgeDocuments;
    /**
     * @var string
     */
    protected $reassignedSigner;
    /**
     * @var string
     */
    protected $whenSigningGroupMember;

    /**
     * @return string
     */
    public function getAgentNotification()
    {
        return $this->agentNotification;
    }

    /**
     * @param string $agentNotification
     *
     * @return self
     */
    public function setAgentNotification($agentNotification = null)
    {
        $this->agentNotification = $agentNotification;

        return $this;
    }

    /**
     * @return string
     */
    public function getCarbonCopyNotification()
    {
        return $this->carbonCopyNotification;
    }

    /**
     * @param string $carbonCopyNotification
     *
     * @return self
     */
    public function setCarbonCopyNotification($carbonCopyNotification = null)
    {
        $this->carbonCopyNotification = $carbonCopyNotification;

        return $this;
    }

    /**
     * @return string
     */
    public function getCertifiedDeliveryNotification()
    {
        return $this->certifiedDeliveryNotification;
    }

    /**
     * @param string $certifiedDeliveryNotification
     *
     * @return self
     */
    public function setCertifiedDeliveryNotification($certifiedDeliveryNotification = null)
    {
        $this->certifiedDeliveryNotification = $certifiedDeliveryNotification;

        return $this;
    }

    /**
     * @return string
     */
    public function getDocumentMarkupActivation()
    {
        return $this->documentMarkupActivation;
    }

    /**
     * @param string $documentMarkupActivation
     *
     * @return self
     */
    public function setDocumentMarkupActivation($documentMarkupActivation = null)
    {
        $this->documentMarkupActivation = $documentMarkupActivation;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnvelopeActivation()
    {
        return $this->envelopeActivation;
    }

    /**
     * @param string $envelopeActivation
     *
     * @return self
     */
    public function setEnvelopeActivation($envelopeActivation = null)
    {
        $this->envelopeActivation = $envelopeActivation;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnvelopeComplete()
    {
        return $this->envelopeComplete;
    }

    /**
     * @param string $envelopeComplete
     *
     * @return self
     */
    public function setEnvelopeComplete($envelopeComplete = null)
    {
        $this->envelopeComplete = $envelopeComplete;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnvelopeCorrected()
    {
        return $this->envelopeCorrected;
    }

    /**
     * @param string $envelopeCorrected
     *
     * @return self
     */
    public function setEnvelopeCorrected($envelopeCorrected = null)
    {
        $this->envelopeCorrected = $envelopeCorrected;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnvelopeDeclined()
    {
        return $this->envelopeDeclined;
    }

    /**
     * @param string $envelopeDeclined
     *
     * @return self
     */
    public function setEnvelopeDeclined($envelopeDeclined = null)
    {
        $this->envelopeDeclined = $envelopeDeclined;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnvelopeVoided()
    {
        return $this->envelopeVoided;
    }

    /**
     * @param string $envelopeVoided
     *
     * @return self
     */
    public function setEnvelopeVoided($envelopeVoided = null)
    {
        $this->envelopeVoided = $envelopeVoided;

        return $this;
    }

    /**
     * @return string
     */
    public function getFaxReceived()
    {
        return $this->faxReceived;
    }

    /**
     * @param string $faxReceived
     *
     * @return self
     */
    public function setFaxReceived($faxReceived = null)
    {
        $this->faxReceived = $faxReceived;

        return $this;
    }

    /**
     * @return string
     */
    public function getOfflineSigningFailed()
    {
        return $this->offlineSigningFailed;
    }

    /**
     * @param string $offlineSigningFailed
     *
     * @return self
     */
    public function setOfflineSigningFailed($offlineSigningFailed = null)
    {
        $this->offlineSigningFailed = $offlineSigningFailed;

        return $this;
    }

    /**
     * @return string
     */
    public function getPurgeDocuments()
    {
        return $this->purgeDocuments;
    }

    /**
     * @param string $purgeDocuments
     *
     * @return self
     */
    public function setPurgeDocuments($purgeDocuments = null)
    {
        $this->purgeDocuments = $purgeDocuments;

        return $this;
    }

    /**
     * @return string
     */
    public function getReassignedSigner()
    {
        return $this->reassignedSigner;
    }

    /**
     * @param string $reassignedSigner
     *
     * @return self
     */
    public function setReassignedSigner($reassignedSigner = null)
    {
        $this->reassignedSigner = $reassignedSigner;

        return $this;
    }

    /**
     * @return string
     */
    public function getWhenSigningGroupMember()
    {
        return $this->whenSigningGroupMember;
    }

    /**
     * @param string $whenSigningGroupMember
     *
     * @return self
     */
    public function setWhenSigningGroupMember($whenSigningGroupMember = null)
    {
        $this->whenSigningGroupMember = $whenSigningGroupMember;

        return $this;
    }
}
