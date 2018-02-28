<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class SignerEmailNotifications
{
    /**
     * When set to **true**, the user receives agent notification emails.
     *
     * @var string
     */
    protected $agentNotification;
    /**
     * When set to **true**, the user receives notifications of carbon copy deliveries.
     *
     * @var string
     */
    protected $carbonCopyNotification;
    /**
     * When set to **true**, the user receives notifications of certified deliveries.
     *
     * @var string
     */
    protected $certifiedDeliveryNotification;
    /**
     * When set to **true**, the user receives notification that document markup has been activated.
     *
     * @var string
     */
    protected $documentMarkupActivation;
    /**
     * When set to **true**, the user receives notification that the envelope has been activated.
     *
     * @var string
     */
    protected $envelopeActivation;
    /**
     * When set to **true**, the user receives notification that the envelope has been completed.
     *
     * @var string
     */
    protected $envelopeComplete;
    /**
     * When set to **true**, the user receives notification that the envelope has been corrected.
     *
     * @var string
     */
    protected $envelopeCorrected;
    /**
     * When set to **true**, the user receives notification that the envelope has been declined.
     *
     * @var string
     */
    protected $envelopeDeclined;
    /**
     * When set to **true**, the user receives notification that the envelope has been voided.
     *
     * @var string
     */
    protected $envelopeVoided;
    /**
     * Reserved:.
     *
     * @var string
     */
    protected $faxReceived;
    /**
     * When set to **true**, the user receives notification if the offline signing failed.
     *
     * @var string
     */
    protected $offlineSigningFailed;
    /**
     * When set to **true**, the user receives notification of document purges.
     *
     * @var string
     */
    protected $purgeDocuments;
    /**
     * When set to **true**, the user receives notification that the envelope has been reassigned.
     *
     * @var string
     */
    protected $reassignedSigner;
    /**
     * @var string
     */
    protected $whenSigningGroupMember;

    /**
     * When set to **true**, the user receives agent notification emails.
     *
     * @return string
     */
    public function getAgentNotification(): ?string
    {
        return $this->agentNotification;
    }

    /**
     * When set to **true**, the user receives agent notification emails.
     *
     * @param string $agentNotification
     *
     * @return self
     */
    public function setAgentNotification(?string $agentNotification): self
    {
        $this->agentNotification = $agentNotification;

        return $this;
    }

    /**
     * When set to **true**, the user receives notifications of carbon copy deliveries.
     *
     * @return string
     */
    public function getCarbonCopyNotification(): ?string
    {
        return $this->carbonCopyNotification;
    }

    /**
     * When set to **true**, the user receives notifications of carbon copy deliveries.
     *
     * @param string $carbonCopyNotification
     *
     * @return self
     */
    public function setCarbonCopyNotification(?string $carbonCopyNotification): self
    {
        $this->carbonCopyNotification = $carbonCopyNotification;

        return $this;
    }

    /**
     * When set to **true**, the user receives notifications of certified deliveries.
     *
     * @return string
     */
    public function getCertifiedDeliveryNotification(): ?string
    {
        return $this->certifiedDeliveryNotification;
    }

    /**
     * When set to **true**, the user receives notifications of certified deliveries.
     *
     * @param string $certifiedDeliveryNotification
     *
     * @return self
     */
    public function setCertifiedDeliveryNotification(?string $certifiedDeliveryNotification): self
    {
        $this->certifiedDeliveryNotification = $certifiedDeliveryNotification;

        return $this;
    }

    /**
     * When set to **true**, the user receives notification that document markup has been activated.
     *
     * @return string
     */
    public function getDocumentMarkupActivation(): ?string
    {
        return $this->documentMarkupActivation;
    }

    /**
     * When set to **true**, the user receives notification that document markup has been activated.
     *
     * @param string $documentMarkupActivation
     *
     * @return self
     */
    public function setDocumentMarkupActivation(?string $documentMarkupActivation): self
    {
        $this->documentMarkupActivation = $documentMarkupActivation;

        return $this;
    }

    /**
     * When set to **true**, the user receives notification that the envelope has been activated.
     *
     * @return string
     */
    public function getEnvelopeActivation(): ?string
    {
        return $this->envelopeActivation;
    }

    /**
     * When set to **true**, the user receives notification that the envelope has been activated.
     *
     * @param string $envelopeActivation
     *
     * @return self
     */
    public function setEnvelopeActivation(?string $envelopeActivation): self
    {
        $this->envelopeActivation = $envelopeActivation;

        return $this;
    }

    /**
     * When set to **true**, the user receives notification that the envelope has been completed.
     *
     * @return string
     */
    public function getEnvelopeComplete(): ?string
    {
        return $this->envelopeComplete;
    }

    /**
     * When set to **true**, the user receives notification that the envelope has been completed.
     *
     * @param string $envelopeComplete
     *
     * @return self
     */
    public function setEnvelopeComplete(?string $envelopeComplete): self
    {
        $this->envelopeComplete = $envelopeComplete;

        return $this;
    }

    /**
     * When set to **true**, the user receives notification that the envelope has been corrected.
     *
     * @return string
     */
    public function getEnvelopeCorrected(): ?string
    {
        return $this->envelopeCorrected;
    }

    /**
     * When set to **true**, the user receives notification that the envelope has been corrected.
     *
     * @param string $envelopeCorrected
     *
     * @return self
     */
    public function setEnvelopeCorrected(?string $envelopeCorrected): self
    {
        $this->envelopeCorrected = $envelopeCorrected;

        return $this;
    }

    /**
     * When set to **true**, the user receives notification that the envelope has been declined.
     *
     * @return string
     */
    public function getEnvelopeDeclined(): ?string
    {
        return $this->envelopeDeclined;
    }

    /**
     * When set to **true**, the user receives notification that the envelope has been declined.
     *
     * @param string $envelopeDeclined
     *
     * @return self
     */
    public function setEnvelopeDeclined(?string $envelopeDeclined): self
    {
        $this->envelopeDeclined = $envelopeDeclined;

        return $this;
    }

    /**
     * When set to **true**, the user receives notification that the envelope has been voided.
     *
     * @return string
     */
    public function getEnvelopeVoided(): ?string
    {
        return $this->envelopeVoided;
    }

    /**
     * When set to **true**, the user receives notification that the envelope has been voided.
     *
     * @param string $envelopeVoided
     *
     * @return self
     */
    public function setEnvelopeVoided(?string $envelopeVoided): self
    {
        $this->envelopeVoided = $envelopeVoided;

        return $this;
    }

    /**
     * Reserved:.
     *
     * @return string
     */
    public function getFaxReceived(): ?string
    {
        return $this->faxReceived;
    }

    /**
     * Reserved:.
     *
     * @param string $faxReceived
     *
     * @return self
     */
    public function setFaxReceived(?string $faxReceived): self
    {
        $this->faxReceived = $faxReceived;

        return $this;
    }

    /**
     * When set to **true**, the user receives notification if the offline signing failed.
     *
     * @return string
     */
    public function getOfflineSigningFailed(): ?string
    {
        return $this->offlineSigningFailed;
    }

    /**
     * When set to **true**, the user receives notification if the offline signing failed.
     *
     * @param string $offlineSigningFailed
     *
     * @return self
     */
    public function setOfflineSigningFailed(?string $offlineSigningFailed): self
    {
        $this->offlineSigningFailed = $offlineSigningFailed;

        return $this;
    }

    /**
     * When set to **true**, the user receives notification of document purges.
     *
     * @return string
     */
    public function getPurgeDocuments(): ?string
    {
        return $this->purgeDocuments;
    }

    /**
     * When set to **true**, the user receives notification of document purges.
     *
     * @param string $purgeDocuments
     *
     * @return self
     */
    public function setPurgeDocuments(?string $purgeDocuments): self
    {
        $this->purgeDocuments = $purgeDocuments;

        return $this;
    }

    /**
     * When set to **true**, the user receives notification that the envelope has been reassigned.
     *
     * @return string
     */
    public function getReassignedSigner(): ?string
    {
        return $this->reassignedSigner;
    }

    /**
     * When set to **true**, the user receives notification that the envelope has been reassigned.
     *
     * @param string $reassignedSigner
     *
     * @return self
     */
    public function setReassignedSigner(?string $reassignedSigner): self
    {
        $this->reassignedSigner = $reassignedSigner;

        return $this;
    }

    /**
     * @return string
     */
    public function getWhenSigningGroupMember(): ?string
    {
        return $this->whenSigningGroupMember;
    }

    /**
     * @param string $whenSigningGroupMember
     *
     * @return self
     */
    public function setWhenSigningGroupMember(?string $whenSigningGroupMember): self
    {
        $this->whenSigningGroupMember = $whenSigningGroupMember;

        return $this;
    }
}
