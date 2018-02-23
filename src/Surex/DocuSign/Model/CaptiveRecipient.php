<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class CaptiveRecipient
{
    /**
     * Specifies whether the recipient is embedded or remote.

     If the `clientUserId` property is not null then the recipient is embedded. Use this field to associate the signer with their userId in your app. Authenticating the user is the responsibility of your app when you use embedded signing.

     Note: if the `clientUserId` property is set and either `SignerMustHaveAccount` or `SignerMustLoginToSign` property of the account settings is set to  **true**, an error is generated on sending.

     Maximum length: 100 characters.
     *
     * @var string
     */
    protected $clientUserId;
    /**
     * Specifies the email address associated with the captive recipient.
     *
     * @var string
     */
    protected $email;
    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * Specifies the user name associated with the captive recipient.
     *
     * @var string
     */
    protected $userName;

    /**
     * Specifies whether the recipient is embedded or remote.

     If the `clientUserId` property is not null then the recipient is embedded. Use this field to associate the signer with their userId in your app. Authenticating the user is the responsibility of your app when you use embedded signing.

     Note: if the `clientUserId` property is set and either `SignerMustHaveAccount` or `SignerMustLoginToSign` property of the account settings is set to  **true**, an error is generated on sending.

     Maximum length: 100 characters.
     *
     * @return string
     */
    public function getClientUserId(): ?string
    {
        return $this->clientUserId;
    }

    /**
     * Specifies whether the recipient is embedded or remote.

     If the `clientUserId` property is not null then the recipient is embedded. Use this field to associate the signer with their userId in your app. Authenticating the user is the responsibility of your app when you use embedded signing.

     Note: if the `clientUserId` property is set and either `SignerMustHaveAccount` or `SignerMustLoginToSign` property of the account settings is set to  **true**, an error is generated on sending.

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
     * Specifies the email address associated with the captive recipient.
     *
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Specifies the email address associated with the captive recipient.
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
     * Specifies the user name associated with the captive recipient.
     *
     * @return string
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }

    /**
     * Specifies the user name associated with the captive recipient.
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
}
