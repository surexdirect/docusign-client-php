<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class EnvelopeEmailSettings
{
    /**
     * A list of email addresses that receive a copy of all email communications for an envelope. You can use this for archiving purposes.
     *
     * @var BccEmailAddress[]
     */
    protected $bccEmailAddresses;
    /**
     * @var string
     */
    protected $replyEmailAddressOverride;
    /**
     * @var string
     */
    protected $replyEmailNameOverride;

    /**
     * A list of email addresses that receive a copy of all email communications for an envelope. You can use this for archiving purposes.
     *
     * @return BccEmailAddress[]
     */
    public function getBccEmailAddresses(): ?array
    {
        return $this->bccEmailAddresses;
    }

    /**
     * A list of email addresses that receive a copy of all email communications for an envelope. You can use this for archiving purposes.
     *
     * @param BccEmailAddress[] $bccEmailAddresses
     *
     * @return self
     */
    public function setBccEmailAddresses(?array $bccEmailAddresses): self
    {
        $this->bccEmailAddresses = $bccEmailAddresses;

        return $this;
    }

    /**
     * @return string
     */
    public function getReplyEmailAddressOverride(): ?string
    {
        return $this->replyEmailAddressOverride;
    }

    /**
     * @param string $replyEmailAddressOverride
     *
     * @return self
     */
    public function setReplyEmailAddressOverride(?string $replyEmailAddressOverride): self
    {
        $this->replyEmailAddressOverride = $replyEmailAddressOverride;

        return $this;
    }

    /**
     * @return string
     */
    public function getReplyEmailNameOverride(): ?string
    {
        return $this->replyEmailNameOverride;
    }

    /**
     * @param string $replyEmailNameOverride
     *
     * @return self
     */
    public function setReplyEmailNameOverride(?string $replyEmailNameOverride): self
    {
        $this->replyEmailNameOverride = $replyEmailNameOverride;

        return $this;
    }
}
