<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class SenderEmailNotifications
{
    /**
     * @var string
     */
    protected $changedSigner;
    /**
     * @var string
     */
    protected $deliveryFailed;
    /**
     * @var string
     */
    protected $envelopeComplete;
    /**
     * @var string
     */
    protected $offlineSigningFailed;
    /**
     * @var string
     */
    protected $recipientViewed;
    /**
     * @var string
     */
    protected $senderEnvelopeDeclined;
    /**
     * @var string
     */
    protected $withdrawnConsent;

    /**
     * @return string
     */
    public function getChangedSigner()
    {
        return $this->changedSigner;
    }

    /**
     * @param string $changedSigner
     *
     * @return self
     */
    public function setChangedSigner($changedSigner = null)
    {
        $this->changedSigner = $changedSigner;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryFailed()
    {
        return $this->deliveryFailed;
    }

    /**
     * @param string $deliveryFailed
     *
     * @return self
     */
    public function setDeliveryFailed($deliveryFailed = null)
    {
        $this->deliveryFailed = $deliveryFailed;

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
    public function getRecipientViewed()
    {
        return $this->recipientViewed;
    }

    /**
     * @param string $recipientViewed
     *
     * @return self
     */
    public function setRecipientViewed($recipientViewed = null)
    {
        $this->recipientViewed = $recipientViewed;

        return $this;
    }

    /**
     * @return string
     */
    public function getSenderEnvelopeDeclined()
    {
        return $this->senderEnvelopeDeclined;
    }

    /**
     * @param string $senderEnvelopeDeclined
     *
     * @return self
     */
    public function setSenderEnvelopeDeclined($senderEnvelopeDeclined = null)
    {
        $this->senderEnvelopeDeclined = $senderEnvelopeDeclined;

        return $this;
    }

    /**
     * @return string
     */
    public function getWithdrawnConsent()
    {
        return $this->withdrawnConsent;
    }

    /**
     * @param string $withdrawnConsent
     *
     * @return self
     */
    public function setWithdrawnConsent($withdrawnConsent = null)
    {
        $this->withdrawnConsent = $withdrawnConsent;

        return $this;
    }
}
