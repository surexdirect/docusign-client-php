<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class CorrectViewRequest
{
    /**
     * The url used after correct/send view session has ended. DocuSign redirects to the url and includes an event parameter that can be used by your app. The event parameters returned are:.

     * send (user corrected and sent the envelope)
     * save (user saved the envelope)
     * cancel (user canceled the transaction.)
     * error (there was an error when performing the correct or send)
     * sessionEnd (the session ended before the user completed a different action)

     ###### Note: Include https:// in the URL or the redirect might not succeed on some browsers.
     *
     * @var string
     */
    protected $returnUrl;
    /**
     * Specifies whether the window is displayed with or without dressing.
     *
     * @var string
     */
    protected $suppressNavigation;

    /**
     * The url used after correct/send view session has ended. DocuSign redirects to the url and includes an event parameter that can be used by your app. The event parameters returned are:.

     * send (user corrected and sent the envelope)
     * save (user saved the envelope)
     * cancel (user canceled the transaction.)
     * error (there was an error when performing the correct or send)
     * sessionEnd (the session ended before the user completed a different action)

     ###### Note: Include https:// in the URL or the redirect might not succeed on some browsers.
     *
     * @return string
     */
    public function getReturnUrl(): ?string
    {
        return $this->returnUrl;
    }

    /**
     * The url used after correct/send view session has ended. DocuSign redirects to the url and includes an event parameter that can be used by your app. The event parameters returned are:.

     * send (user corrected and sent the envelope)
     * save (user saved the envelope)
     * cancel (user canceled the transaction.)
     * error (there was an error when performing the correct or send)
     * sessionEnd (the session ended before the user completed a different action)

     ###### Note: Include https:// in the URL or the redirect might not succeed on some browsers.
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

    /**
     * Specifies whether the window is displayed with or without dressing.
     *
     * @return string
     */
    public function getSuppressNavigation(): ?string
    {
        return $this->suppressNavigation;
    }

    /**
     * Specifies whether the window is displayed with or without dressing.
     *
     * @param string $suppressNavigation
     *
     * @return self
     */
    public function setSuppressNavigation(?string $suppressNavigation): self
    {
        $this->suppressNavigation = $suppressNavigation;

        return $this;
    }
}
