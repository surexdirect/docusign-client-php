<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class ReturnUrlRequest
{
    /**
     * Your app's return url that the user will be redirected to after sending the envelope or completing the sending/tagging view. Query parameters `envelopeId` and `event` will be added to the URL. The event parameter values:.

     * `Send` (the user sent the envelope)
     * `Save` (the user saved the envelope, it is still a draft)
     * `Cancel` (the user canceled the sending transaction)
     * `Error` (there was an error during the send operation)
     * `SessionEnd` (the sending session ended before the user completed a different action)
     *
     * @var string
     */
    protected $returnUrl;

    /**
     * Your app's return url that the user will be redirected to after sending the envelope or completing the sending/tagging view. Query parameters `envelopeId` and `event` will be added to the URL. The event parameter values:.

     * `Send` (the user sent the envelope)
     * `Save` (the user saved the envelope, it is still a draft)
     * `Cancel` (the user canceled the sending transaction)
     * `Error` (there was an error during the send operation)
     * `SessionEnd` (the sending session ended before the user completed a different action)
     *
     * @return string
     */
    public function getReturnUrl(): ?string
    {
        return $this->returnUrl;
    }

    /**
     * Your app's return url that the user will be redirected to after sending the envelope or completing the sending/tagging view. Query parameters `envelopeId` and `event` will be added to the URL. The event parameter values:.

     * `Send` (the user sent the envelope)
     * `Save` (the user saved the envelope, it is still a draft)
     * `Cancel` (the user canceled the sending transaction)
     * `Error` (there was an error during the send operation)
     * `SessionEnd` (the sending session ended before the user completed a different action)
     *
     * @param string $returnUrl
     *
     * @return self
     */
    public function setReturnUrl(?string $returnUrl): self
    {
        $this->returnUrl = $returnUrl;

        return $this;
    }
}
