<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class SenderEmailNotifications
{
    /**
     * When set to **true**, the sender receives notification if the signer changes.
     *
     * @var string
     */
    protected $changedSigner;
    /**
     * When set to **true**, the sender receives notification if the delivery of the envelope fails.
     *
     * @var string
     */
    protected $deliveryFailed;
    /**
     * When set to **true**, the user receives notification that the envelope has been completed.
     *
     * @var string
     */
    protected $envelopeComplete;
    /**
     * When set to **true**, the user receives notification if the offline signing failed.
     *
     * @var string
     */
    protected $offlineSigningFailed;
    /**
     * When set to **true**, the sender receives notification that the recipient viewed the enveloper.
     *
     * @var string
     */
    protected $recipientViewed;
    /**
     * @var string
     */
    protected $senderEnvelopeDeclined;
    /**
     * When set to **true**, the user receives notification if consent is withdrawn.
     *
     * @var string
     */
    protected $withdrawnConsent;

    /**
     * When set to **true**, the sender receives notification if the signer changes.
     *
     * @return string
     */
    public function getChangedSigner(): ?string
    {
        return $this->changedSigner;
    }

    /**
     * When set to **true**, the sender receives notification if the signer changes.
     *
     * @param string $changedSigner
     *
     * @return self
     */
    public function setChangedSigner(?string $changedSigner): self
    {
        $this->changedSigner = $changedSigner;

        return $this;
    }

    /**
     * When set to **true**, the sender receives notification if the delivery of the envelope fails.
     *
     * @return string
     */
    public function getDeliveryFailed(): ?string
    {
        return $this->deliveryFailed;
    }

    /**
     * When set to **true**, the sender receives notification if the delivery of the envelope fails.
     *
     * @param string $deliveryFailed
     *
     * @return self
     */
    public function setDeliveryFailed(?string $deliveryFailed): self
    {
        $this->deliveryFailed = $deliveryFailed;

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
     * When set to **true**, the sender receives notification that the recipient viewed the enveloper.
     *
     * @return string
     */
    public function getRecipientViewed(): ?string
    {
        return $this->recipientViewed;
    }

    /**
     * When set to **true**, the sender receives notification that the recipient viewed the enveloper.
     *
     * @param string $recipientViewed
     *
     * @return self
     */
    public function setRecipientViewed(?string $recipientViewed): self
    {
        $this->recipientViewed = $recipientViewed;

        return $this;
    }

    /**
     * @return string
     */
    public function getSenderEnvelopeDeclined(): ?string
    {
        return $this->senderEnvelopeDeclined;
    }

    /**
     * @param string $senderEnvelopeDeclined
     *
     * @return self
     */
    public function setSenderEnvelopeDeclined(?string $senderEnvelopeDeclined): self
    {
        $this->senderEnvelopeDeclined = $senderEnvelopeDeclined;

        return $this;
    }

    /**
     * When set to **true**, the user receives notification if consent is withdrawn.
     *
     * @return string
     */
    public function getWithdrawnConsent(): ?string
    {
        return $this->withdrawnConsent;
    }

    /**
     * When set to **true**, the user receives notification if consent is withdrawn.
     *
     * @param string $withdrawnConsent
     *
     * @return self
     */
    public function setWithdrawnConsent(?string $withdrawnConsent): self
    {
        $this->withdrawnConsent = $withdrawnConsent;

        return $this;
    }
}
