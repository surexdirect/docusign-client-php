<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class TemplateRecipients
{
    /**
     * @var Agent[]
     */
    protected $agents;
    /**
     * @var CarbonCopy[]
     */
    protected $carbonCopies;
    /**
     * @var CertifiedDelivery[]
     */
    protected $certifiedDeliveries;
    /**
     * @var string
     */
    protected $currentRoutingOrder;
    /**
     * @var Editor[]
     */
    protected $editors;
    /**
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * @var InPersonSigner[]
     */
    protected $inPersonSigners;
    /**
     * @var Intermediary[]
     */
    protected $intermediaries;
    /**
     * @var string
     */
    protected $recipientCount;
    /**
     * @var Signer[]
     */
    protected $signers;

    /**
     * @return Agent[]
     */
    public function getAgents()
    {
        return $this->agents;
    }

    /**
     * @param Agent[] $agents
     *
     * @return self
     */
    public function setAgents(array $agents = null)
    {
        $this->agents = $agents;

        return $this;
    }

    /**
     * @return CarbonCopy[]
     */
    public function getCarbonCopies()
    {
        return $this->carbonCopies;
    }

    /**
     * @param CarbonCopy[] $carbonCopies
     *
     * @return self
     */
    public function setCarbonCopies(array $carbonCopies = null)
    {
        $this->carbonCopies = $carbonCopies;

        return $this;
    }

    /**
     * @return CertifiedDelivery[]
     */
    public function getCertifiedDeliveries()
    {
        return $this->certifiedDeliveries;
    }

    /**
     * @param CertifiedDelivery[] $certifiedDeliveries
     *
     * @return self
     */
    public function setCertifiedDeliveries(array $certifiedDeliveries = null)
    {
        $this->certifiedDeliveries = $certifiedDeliveries;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrentRoutingOrder()
    {
        return $this->currentRoutingOrder;
    }

    /**
     * @param string $currentRoutingOrder
     *
     * @return self
     */
    public function setCurrentRoutingOrder($currentRoutingOrder = null)
    {
        $this->currentRoutingOrder = $currentRoutingOrder;

        return $this;
    }

    /**
     * @return Editor[]
     */
    public function getEditors()
    {
        return $this->editors;
    }

    /**
     * @param Editor[] $editors
     *
     * @return self
     */
    public function setEditors(array $editors = null)
    {
        $this->editors = $editors;

        return $this;
    }

    /**
     * @return ErrorDetails
     */
    public function getErrorDetails()
    {
        return $this->errorDetails;
    }

    /**
     * @param ErrorDetails $errorDetails
     *
     * @return self
     */
    public function setErrorDetails(ErrorDetails $errorDetails = null)
    {
        $this->errorDetails = $errorDetails;

        return $this;
    }

    /**
     * @return InPersonSigner[]
     */
    public function getInPersonSigners()
    {
        return $this->inPersonSigners;
    }

    /**
     * @param InPersonSigner[] $inPersonSigners
     *
     * @return self
     */
    public function setInPersonSigners(array $inPersonSigners = null)
    {
        $this->inPersonSigners = $inPersonSigners;

        return $this;
    }

    /**
     * @return Intermediary[]
     */
    public function getIntermediaries()
    {
        return $this->intermediaries;
    }

    /**
     * @param Intermediary[] $intermediaries
     *
     * @return self
     */
    public function setIntermediaries(array $intermediaries = null)
    {
        $this->intermediaries = $intermediaries;

        return $this;
    }

    /**
     * @return string
     */
    public function getRecipientCount()
    {
        return $this->recipientCount;
    }

    /**
     * @param string $recipientCount
     *
     * @return self
     */
    public function setRecipientCount($recipientCount = null)
    {
        $this->recipientCount = $recipientCount;

        return $this;
    }

    /**
     * @return Signer[]
     */
    public function getSigners()
    {
        return $this->signers;
    }

    /**
     * @param Signer[] $signers
     *
     * @return self
     */
    public function setSigners(array $signers = null)
    {
        $this->signers = $signers;

        return $this;
    }
}
