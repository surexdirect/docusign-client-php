<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class RecipientViewRequest
{
    /**
     * A unique identifier of the authentication event executed by the client application.
     *
     * @var string
     */
    protected $assertionId;
    /**
     * A sender generated value that indicates the date/time that the signer was authenticated.
     *
     * @var string
     */
    protected $authenticationInstant;
    /**
     * Required. Choose a value that most closely matches the technique your application used to authenticate the recipient / signer.

     Choose a value from this list:
     * Biometric
     * Email
     * HTTPBasicAuth
     * Kerberos
     * KnowledgeBasedAuth
     * None
     * PaperDocuments
     * Password
     * RSASecureID
     * SingleSignOn_CASiteminder
     * SingleSignOn_InfoCard
     * SingleSignOn_MicrosoftActiveDirectory
     * SingleSignOn_Other
     * SingleSignOn_Passport
     * SingleSignOn_SAML
     * Smartcard
     * SSLMutualAuth
     * X509Certificate

     This information is included in the Certificate of Completion.
     *
     * @var string
     */
    protected $authenticationMethod;
    /**
     * A sender created value. If provided, the recipient is treated as an embedded (captive) recipient or signer.

     Use your application's client ID (user ID) for the recipient. Doing so enables the details of your application's authentication of the recipient to be connected to the recipient's signature if the signature is disputed or repudiated.

     Maximum length: 100 characters.
     *
     * @var string
     */
    protected $clientUserId;
    /**
     * Specifies the email of the recipient. You can use either email and userName or userId to identify the recipient.
     *
     * @var string
     */
    protected $email;
    /**
     * Only used if pingUrl is specified. This is the interval, in seconds, between pings on the pingUrl.  The default is 300 seconds. Valid values are 60-1200 seconds.
     *
     * @var string
     */
    protected $pingFrequency;
    /**
     * A client Url to be pinged by the DocuSign Signing experience to indicate to the client that Signing is active. An HTTP Get is executed against the client. The response from the client is ignored. The intent is for the client to reset it's session timer when the request is received.
     *
     * @var string
     */
    protected $pingUrl;
    /**
     * Unique for the recipient. It is used by the tab element to indicate which recipient is to sign the Document.
     *
     * @var string
     */
    protected $recipientId;
    /**
     * The URL that the recipient is redirected to.
     after the signing session has ended.
     DocuSign redirects to the URL
     and includes an `event` query parameter
     that can be used by your application.

     Possible `event` parameter values:

     * `access_code_failed`<br>
     Recipient used incorrect access code.
     * `cancel`<br>
     Recipient canceled the signing operation,
     possibly by using the Finish Later option.
     * `decline`<br>
     Recipient declined to sign.
     * `exception`<br>
     A system error occurred during signing.
     * `fax_pending`<br>
     Recipient has a fax pending.
     * `id_check_failed`<br>
     Recipient failed an ID check.
     * `session_timeout`<br>
     The session timed out.
     An account can control this timeout using the Signer Session Timeout option.
     * `signing_complete`<br>
     Recipient completed the signing ceremony.
     * `ttl_expired`<br>
     The Time To Live token for the envelope has expired.
     After being successfully invoked, these tokens expire
     after 5 minutes
     or if the envelope is voided.
     * `viewing_complete`<br>
     The recipient completed viewing an envelope
     that is in a read-only/terminal state
     such as completed, declined, or voided.

     Be sure to include `https://` in the URL
     or the redirect may fail
     on some browsers.

     *
     * @var string
     */
    protected $returnUrl;
    /**
     * The domain in which the user authenticated.
     *
     * @var string
     */
    protected $securityDomain;
    /**
     * Specifies the user ID of the recipient. You can use with user ID or email and user name to identify the recipient.

     If userId is used and a clientUserId is provided, the value in the `userId` property must match a recipientId (which can be retrieved with a GET recipients call) for the envelope.

     If a userId is used and a clientUserId is not provided, the userId must match the user ID of the authenticating user.
     *
     * @var string
     */
    protected $userId;
    /**
     * Specifies the username of the recipient. You can use either email and userName or userId to identify the recipient.
     *
     * @var string
     */
    protected $userName;
    /**
     * @var string
     */
    protected $xFrameOptions;
    /**
     * @var string
     */
    protected $xFrameOptionsAllowFromUrl;

    /**
     * A unique identifier of the authentication event executed by the client application.
     *
     * @return string
     */
    public function getAssertionId(): ?string
    {
        return $this->assertionId;
    }

    /**
     * A unique identifier of the authentication event executed by the client application.
     *
     * @param string $assertionId
     *
     * @return self
     */
    public function setAssertionId(?string $assertionId): self
    {
        $this->assertionId = $assertionId;

        return $this;
    }

    /**
     * A sender generated value that indicates the date/time that the signer was authenticated.
     *
     * @return string
     */
    public function getAuthenticationInstant(): ?string
    {
        return $this->authenticationInstant;
    }

    /**
     * A sender generated value that indicates the date/time that the signer was authenticated.
     *
     * @param string $authenticationInstant
     *
     * @return self
     */
    public function setAuthenticationInstant(?string $authenticationInstant): self
    {
        $this->authenticationInstant = $authenticationInstant;

        return $this;
    }

    /**
     * Required. Choose a value that most closely matches the technique your application used to authenticate the recipient / signer.

     Choose a value from this list:
     * Biometric
     * Email
     * HTTPBasicAuth
     * Kerberos
     * KnowledgeBasedAuth
     * None
     * PaperDocuments
     * Password
     * RSASecureID
     * SingleSignOn_CASiteminder
     * SingleSignOn_InfoCard
     * SingleSignOn_MicrosoftActiveDirectory
     * SingleSignOn_Other
     * SingleSignOn_Passport
     * SingleSignOn_SAML
     * Smartcard
     * SSLMutualAuth
     * X509Certificate

     This information is included in the Certificate of Completion.
     *
     * @return string
     */
    public function getAuthenticationMethod(): ?string
    {
        return $this->authenticationMethod;
    }

    /**
     * Required. Choose a value that most closely matches the technique your application used to authenticate the recipient / signer.

     Choose a value from this list:
     * Biometric
     * Email
     * HTTPBasicAuth
     * Kerberos
     * KnowledgeBasedAuth
     * None
     * PaperDocuments
     * Password
     * RSASecureID
     * SingleSignOn_CASiteminder
     * SingleSignOn_InfoCard
     * SingleSignOn_MicrosoftActiveDirectory
     * SingleSignOn_Other
     * SingleSignOn_Passport
     * SingleSignOn_SAML
     * Smartcard
     * SSLMutualAuth
     * X509Certificate

     This information is included in the Certificate of Completion.
     *
     * @param string $authenticationMethod
     *
     * @return self
     */
    public function setAuthenticationMethod(?string $authenticationMethod): self
    {
        $this->authenticationMethod = $authenticationMethod;

        return $this;
    }

    /**
     * A sender created value. If provided, the recipient is treated as an embedded (captive) recipient or signer.

     Use your application's client ID (user ID) for the recipient. Doing so enables the details of your application's authentication of the recipient to be connected to the recipient's signature if the signature is disputed or repudiated.

     Maximum length: 100 characters.
     *
     * @return string
     */
    public function getClientUserId(): ?string
    {
        return $this->clientUserId;
    }

    /**
     * A sender created value. If provided, the recipient is treated as an embedded (captive) recipient or signer.

     Use your application's client ID (user ID) for the recipient. Doing so enables the details of your application's authentication of the recipient to be connected to the recipient's signature if the signature is disputed or repudiated.

     Maximum length: 100 characters.
     *
     * @param string $clientUserId
     *
     * @return self
     */
    public function setClientUserId(?string $clientUserId): self
    {
        $this->clientUserId = $clientUserId;

        return $this;
    }

    /**
     * Specifies the email of the recipient. You can use either email and userName or userId to identify the recipient.
     *
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Specifies the email of the recipient. You can use either email and userName or userId to identify the recipient.
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Only used if pingUrl is specified. This is the interval, in seconds, between pings on the pingUrl.  The default is 300 seconds. Valid values are 60-1200 seconds.
     *
     * @return string
     */
    public function getPingFrequency(): ?string
    {
        return $this->pingFrequency;
    }

    /**
     * Only used if pingUrl is specified. This is the interval, in seconds, between pings on the pingUrl.  The default is 300 seconds. Valid values are 60-1200 seconds.
     *
     * @param string $pingFrequency
     *
     * @return self
     */
    public function setPingFrequency(?string $pingFrequency): self
    {
        $this->pingFrequency = $pingFrequency;

        return $this;
    }

    /**
     * A client Url to be pinged by the DocuSign Signing experience to indicate to the client that Signing is active. An HTTP Get is executed against the client. The response from the client is ignored. The intent is for the client to reset it's session timer when the request is received.
     *
     * @return string
     */
    public function getPingUrl(): ?string
    {
        return $this->pingUrl;
    }

    /**
     * A client Url to be pinged by the DocuSign Signing experience to indicate to the client that Signing is active. An HTTP Get is executed against the client. The response from the client is ignored. The intent is for the client to reset it's session timer when the request is received.
     *
     * @param string $pingUrl
     *
     * @return self
     */
    public function setPingUrl(?string $pingUrl): self
    {
        $this->pingUrl = $pingUrl;

        return $this;
    }

    /**
     * Unique for the recipient. It is used by the tab element to indicate which recipient is to sign the Document.
     *
     * @return string
     */
    public function getRecipientId(): ?string
    {
        return $this->recipientId;
    }

    /**
     * Unique for the recipient. It is used by the tab element to indicate which recipient is to sign the Document.
     *
     * @param string $recipientId
     *
     * @return self
     */
    public function setRecipientId(?string $recipientId): self
    {
        $this->recipientId = $recipientId;

        return $this;
    }

    /**
     * The URL that the recipient is redirected to.
     after the signing session has ended.
     DocuSign redirects to the URL
     and includes an `event` query parameter
     that can be used by your application.

     Possible `event` parameter values:

     * `access_code_failed`<br>
     Recipient used incorrect access code.
     * `cancel`<br>
     Recipient canceled the signing operation,
     possibly by using the Finish Later option.
     * `decline`<br>
     Recipient declined to sign.
     * `exception`<br>
     A system error occurred during signing.
     * `fax_pending`<br>
     Recipient has a fax pending.
     * `id_check_failed`<br>
     Recipient failed an ID check.
     * `session_timeout`<br>
     The session timed out.
     An account can control this timeout using the Signer Session Timeout option.
     * `signing_complete`<br>
     Recipient completed the signing ceremony.
     * `ttl_expired`<br>
     The Time To Live token for the envelope has expired.
     After being successfully invoked, these tokens expire
     after 5 minutes
     or if the envelope is voided.
     * `viewing_complete`<br>
     The recipient completed viewing an envelope
     that is in a read-only/terminal state
     such as completed, declined, or voided.

     Be sure to include `https://` in the URL
     or the redirect may fail
     on some browsers.

     *
     * @return string
     */
    public function getReturnUrl(): ?string
    {
        return $this->returnUrl;
    }

    /**
     * The URL that the recipient is redirected to.
     after the signing session has ended.
     DocuSign redirects to the URL
     and includes an `event` query parameter
     that can be used by your application.

     Possible `event` parameter values:

     * `access_code_failed`<br>
     Recipient used incorrect access code.
     * `cancel`<br>
     Recipient canceled the signing operation,
     possibly by using the Finish Later option.
     * `decline`<br>
     Recipient declined to sign.
     * `exception`<br>
     A system error occurred during signing.
     * `fax_pending`<br>
     Recipient has a fax pending.
     * `id_check_failed`<br>
     Recipient failed an ID check.
     * `session_timeout`<br>
     The session timed out.
     An account can control this timeout using the Signer Session Timeout option.
     * `signing_complete`<br>
     Recipient completed the signing ceremony.
     * `ttl_expired`<br>
     The Time To Live token for the envelope has expired.
     After being successfully invoked, these tokens expire
     after 5 minutes
     or if the envelope is voided.
     * `viewing_complete`<br>
     The recipient completed viewing an envelope
     that is in a read-only/terminal state
     such as completed, declined, or voided.

     Be sure to include `https://` in the URL
     or the redirect may fail
     on some browsers.

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
     * The domain in which the user authenticated.
     *
     * @return string
     */
    public function getSecurityDomain(): ?string
    {
        return $this->securityDomain;
    }

    /**
     * The domain in which the user authenticated.
     *
     * @param string $securityDomain
     *
     * @return self
     */
    public function setSecurityDomain(?string $securityDomain): self
    {
        $this->securityDomain = $securityDomain;

        return $this;
    }

    /**
     * Specifies the user ID of the recipient. You can use with user ID or email and user name to identify the recipient.

     If userId is used and a clientUserId is provided, the value in the `userId` property must match a recipientId (which can be retrieved with a GET recipients call) for the envelope.

     If a userId is used and a clientUserId is not provided, the userId must match the user ID of the authenticating user.
     *
     * @return string
     */
    public function getUserId(): ?string
    {
        return $this->userId;
    }

    /**
     * Specifies the user ID of the recipient. You can use with user ID or email and user name to identify the recipient.

     If userId is used and a clientUserId is provided, the value in the `userId` property must match a recipientId (which can be retrieved with a GET recipients call) for the envelope.

     If a userId is used and a clientUserId is not provided, the userId must match the user ID of the authenticating user.
     *
     * @param string $userId
     *
     * @return self
     */
    public function setUserId(?string $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Specifies the username of the recipient. You can use either email and userName or userId to identify the recipient.
     *
     * @return string
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }

    /**
     * Specifies the username of the recipient. You can use either email and userName or userId to identify the recipient.
     *
     * @param string $userName
     *
     * @return self
     */
    public function setUserName(?string $userName): self
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * @return string
     */
    public function getXFrameOptions(): ?string
    {
        return $this->xFrameOptions;
    }

    /**
     * @param string $xFrameOptions
     *
     * @return self
     */
    public function setXFrameOptions(?string $xFrameOptions): self
    {
        $this->xFrameOptions = $xFrameOptions;

        return $this;
    }

    /**
     * @return string
     */
    public function getXFrameOptionsAllowFromUrl(): ?string
    {
        return $this->xFrameOptionsAllowFromUrl;
    }

    /**
     * @param string $xFrameOptionsAllowFromUrl
     *
     * @return self
     */
    public function setXFrameOptionsAllowFromUrl(?string $xFrameOptionsAllowFromUrl): self
    {
        $this->xFrameOptionsAllowFromUrl = $xFrameOptionsAllowFromUrl;

        return $this;
    }
}
