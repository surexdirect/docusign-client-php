<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class EnvelopeEmailSettings
{
    /**
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
     * @return BccEmailAddress[]
     */
    public function getBccEmailAddresses()
    {
        return $this->bccEmailAddresses;
    }

    /**
     * @param BccEmailAddress[] $bccEmailAddresses
     *
     * @return self
     */
    public function setBccEmailAddresses(array $bccEmailAddresses = null)
    {
        $this->bccEmailAddresses = $bccEmailAddresses;

        return $this;
    }

    /**
     * @return string
     */
    public function getReplyEmailAddressOverride()
    {
        return $this->replyEmailAddressOverride;
    }

    /**
     * @param string $replyEmailAddressOverride
     *
     * @return self
     */
    public function setReplyEmailAddressOverride($replyEmailAddressOverride = null)
    {
        $this->replyEmailAddressOverride = $replyEmailAddressOverride;

        return $this;
    }

    /**
     * @return string
     */
    public function getReplyEmailNameOverride()
    {
        return $this->replyEmailNameOverride;
    }

    /**
     * @param string $replyEmailNameOverride
     *
     * @return self
     */
    public function setReplyEmailNameOverride($replyEmailNameOverride = null)
    {
        $this->replyEmailNameOverride = $replyEmailNameOverride;

        return $this;
    }
}
