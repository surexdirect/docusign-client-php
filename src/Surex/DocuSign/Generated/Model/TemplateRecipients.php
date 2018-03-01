<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class TemplateRecipients
{
    /**
     * A complex type defining the management and access rights of a recipient assigned assigned as an agent on the document.
     *
     * @var Agent[]
     */
    protected $agents;
    /**
     * A complex type containing information about recipients who should receive a copy of the envelope, but does not need to sign it.
     *
     * @var CarbonCopy[]
     */
    protected $carbonCopies;
    /**
     * A complex type containing information on a recipient the must receive the completed documents for the envelope to be completed, but the recipient does not need to sign, initial, date, or add information to any of the documents.
     *
     * @var CertifiedDelivery[]
     */
    protected $certifiedDeliveries;
    /**
     * @var string
     */
    protected $currentRoutingOrder;
    /**
     * A complex type defining the management and access rights of a recipient assigned assigned as an editor on the document.
     *
     * @var Editor[]
     */
    protected $editors;
    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * Specifies a signer that is in the same physical location as a DocuSign user who will act as a Signing Host for the transaction. The recipient added is the Signing Host and new separate Signer Name field appears after Sign in person is selected.
     *
     * @var InPersonSigner[]
     */
    protected $inPersonSigners;
    /**
     * Identifies a recipient that can, but is not required to, add name and email information for recipients at the same or subsequent level in the routing order (until subsequent Agents, Editors or Intermediaries recipient types are added).
     *
     * @var Intermediary[]
     */
    protected $intermediaries;
    /**
     * The list of recipient event statuses that will trigger Connect to send updates to the url. It can be a two-part list with:.

     * recipientEventStatusCode - The recipient status, this can be Sent, Delivered, Completed, Declined, AuthenticationFailed, and AutoResponded.
     * includeDocuments - When set to **true**, the envelope time zone information is included in the message.
     *
     * @var string
     */
    protected $recipientCount;
    /**
     * A complex type containing information about the Signer recipient.
     *
     * @var Signer[]
     */
    protected $signers;

    /**
     * A complex type defining the management and access rights of a recipient assigned assigned as an agent on the document.
     *
     * @return Agent[]
     */
    public function getAgents(): ?array
    {
        return $this->agents;
    }

    /**
     * A complex type defining the management and access rights of a recipient assigned assigned as an agent on the document.
     *
     * @param Agent[] $agents
     *
     * @return self
     */
    public function setAgents(?array $agents): self
    {
        $this->agents = $agents;

        return $this;
    }

    /**
     * A complex type containing information about recipients who should receive a copy of the envelope, but does not need to sign it.
     *
     * @return CarbonCopy[]
     */
    public function getCarbonCopies(): ?array
    {
        return $this->carbonCopies;
    }

    /**
     * A complex type containing information about recipients who should receive a copy of the envelope, but does not need to sign it.
     *
     * @param CarbonCopy[] $carbonCopies
     *
     * @return self
     */
    public function setCarbonCopies(?array $carbonCopies): self
    {
        $this->carbonCopies = $carbonCopies;

        return $this;
    }

    /**
     * A complex type containing information on a recipient the must receive the completed documents for the envelope to be completed, but the recipient does not need to sign, initial, date, or add information to any of the documents.
     *
     * @return CertifiedDelivery[]
     */
    public function getCertifiedDeliveries(): ?array
    {
        return $this->certifiedDeliveries;
    }

    /**
     * A complex type containing information on a recipient the must receive the completed documents for the envelope to be completed, but the recipient does not need to sign, initial, date, or add information to any of the documents.
     *
     * @param CertifiedDelivery[] $certifiedDeliveries
     *
     * @return self
     */
    public function setCertifiedDeliveries(?array $certifiedDeliveries): self
    {
        $this->certifiedDeliveries = $certifiedDeliveries;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrentRoutingOrder(): ?string
    {
        return $this->currentRoutingOrder;
    }

    /**
     * @param string $currentRoutingOrder
     *
     * @return self
     */
    public function setCurrentRoutingOrder(?string $currentRoutingOrder): self
    {
        $this->currentRoutingOrder = $currentRoutingOrder;

        return $this;
    }

    /**
     * A complex type defining the management and access rights of a recipient assigned assigned as an editor on the document.
     *
     * @return Editor[]
     */
    public function getEditors(): ?array
    {
        return $this->editors;
    }

    /**
     * A complex type defining the management and access rights of a recipient assigned assigned as an editor on the document.
     *
     * @param Editor[] $editors
     *
     * @return self
     */
    public function setEditors(?array $editors): self
    {
        $this->editors = $editors;

        return $this;
    }

    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @return ErrorDetails
     */
    public function getErrorDetails(): ?ErrorDetails
    {
        return $this->errorDetails;
    }

    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @param ErrorDetails $errorDetails
     *
     * @return self
     */
    public function setErrorDetails(?ErrorDetails $errorDetails): self
    {
        $this->errorDetails = $errorDetails;

        return $this;
    }

    /**
     * Specifies a signer that is in the same physical location as a DocuSign user who will act as a Signing Host for the transaction. The recipient added is the Signing Host and new separate Signer Name field appears after Sign in person is selected.
     *
     * @return InPersonSigner[]
     */
    public function getInPersonSigners(): ?array
    {
        return $this->inPersonSigners;
    }

    /**
     * Specifies a signer that is in the same physical location as a DocuSign user who will act as a Signing Host for the transaction. The recipient added is the Signing Host and new separate Signer Name field appears after Sign in person is selected.
     *
     * @param InPersonSigner[] $inPersonSigners
     *
     * @return self
     */
    public function setInPersonSigners(?array $inPersonSigners): self
    {
        $this->inPersonSigners = $inPersonSigners;

        return $this;
    }

    /**
     * Identifies a recipient that can, but is not required to, add name and email information for recipients at the same or subsequent level in the routing order (until subsequent Agents, Editors or Intermediaries recipient types are added).
     *
     * @return Intermediary[]
     */
    public function getIntermediaries(): ?array
    {
        return $this->intermediaries;
    }

    /**
     * Identifies a recipient that can, but is not required to, add name and email information for recipients at the same or subsequent level in the routing order (until subsequent Agents, Editors or Intermediaries recipient types are added).
     *
     * @param Intermediary[] $intermediaries
     *
     * @return self
     */
    public function setIntermediaries(?array $intermediaries): self
    {
        $this->intermediaries = $intermediaries;

        return $this;
    }

    /**
     * The list of recipient event statuses that will trigger Connect to send updates to the url. It can be a two-part list with:.

     * recipientEventStatusCode - The recipient status, this can be Sent, Delivered, Completed, Declined, AuthenticationFailed, and AutoResponded.
     * includeDocuments - When set to **true**, the envelope time zone information is included in the message.
     *
     * @return string
     */
    public function getRecipientCount(): ?string
    {
        return $this->recipientCount;
    }

    /**
     * The list of recipient event statuses that will trigger Connect to send updates to the url. It can be a two-part list with:.

     * recipientEventStatusCode - The recipient status, this can be Sent, Delivered, Completed, Declined, AuthenticationFailed, and AutoResponded.
     * includeDocuments - When set to **true**, the envelope time zone information is included in the message.
     *
     * @param string $recipientCount
     *
     * @return self
     */
    public function setRecipientCount(?string $recipientCount): self
    {
        $this->recipientCount = $recipientCount;

        return $this;
    }

    /**
     * A complex type containing information about the Signer recipient.
     *
     * @return Signer[]
     */
    public function getSigners(): ?array
    {
        return $this->signers;
    }

    /**
     * A complex type containing information about the Signer recipient.
     *
     * @param Signer[] $signers
     *
     * @return self
     */
    public function setSigners(?array $signers): self
    {
        $this->signers = $signers;

        return $this;
    }
}
