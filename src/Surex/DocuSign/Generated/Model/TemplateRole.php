<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class TemplateRole
{
    /**
     * If a value is provided, the recipient must enter the value as the access code to view and sign the envelope.

     Maximum Length: 50 characters and it must conform to the account's access code format setting.

     If blank, but the signer `accessCode` property is set in the envelope, then that value is used.

     If blank and the signer `accessCode` property is not set, then the access code is not required.
     *
     * @var string
     */
    protected $accessCode;
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
     * When set to **true**, this recipient is the default recipient and any tabs generated by the transformPdfFields option are mapped to this recipient.
     *
     * @var string
     */
    protected $defaultRecipient;
    /**
     * Specifies the email associated with a role name.
     *
     * @var string
     */
    protected $email;
    /**
     * @var RecipientEmailNotification
     */
    protected $emailNotification;
    /**
     * Specifies a sender provided valid URL string for redirecting an embedded recipient. When using this option, the embedded recipient still receives an email from DocuSign, just as a remote recipient would. When the document link in the email is clicked the recipient is redirected, through DocuSign, to the supplied URL to complete their actions. When routing to the URL, the sender's system (the server responding to the URL) must request a recipient token to launch a signing session.

     If set to `SIGN_AT_DOCUSIGN`, the recipient is directed to an embedded signing or viewing process directly at DocuSign. The signing or viewing action is initiated by the DocuSign system and the transaction activity and Certificate of Completion records will reflect this. In all other ways the process is identical to an embedded signing or viewing operation that is launched by any partner.

     It is important to remember that in a typical embedded workflow the authentication of an embedded recipient is the responsibility of the sending application, DocuSign expects that senders will follow their own process for establishing the recipient's identity. In this workflow the recipient goes through the sending application before the embedded signing or viewing process in initiated. However, when the sending application sets `EmbeddedRecipientStartURL=SIGN_AT_DOCUSIGN`, the recipient goes directly to the embedded signing or viewing process bypassing the sending application and any authentication steps the sending application would use. In this case, DocuSign recommends that you use one of the normal DocuSign authentication features (Access Code, Phone Authentication, SMS Authentication, etc.) to verify the identity of the recipient.

     If the `clientUserId` property is NOT set, and the `embeddedRecipientStartURL` is set, DocuSign will ignore the redirect URL and launch the standard signing process for the email recipient. Information can be appended to the embedded recipient start URL using merge fields. The available merge fields items are: envelopeId, recipientId, recipientName, recipientEmail, and customFields. The `customFields` property must be set fort the recipient or envelope. The merge fields are enclosed in double brackets.

     *Example*:

     `http://senderHost/[[mergeField1]]/ beginSigningSession? [[mergeField2]]&[[mergeField3]]`
     *
     * @var string
     */
    protected $embeddedRecipientStartURL;
    /**
     * Specifies the full legal name of the signer in person signer template roles.

     Maximum Length: 100 characters.
     *
     * @var string
     */
    protected $inPersonSignerName;
    /**
     * Specifies the recipient's name.
     *
     * @var string
     */
    protected $name;
    /**
     * The default signature provider is the DocuSign Electronic signature system. This parameter is used to specify one or more Standards Based Signature (digital signature) providers for the signer to use. [More information](../../../../guide/appendix/standards_based_signatures.html).
     *
     * @var RecipientSignatureProvider[]
     */
    protected $recipientSignatureProviders;
    /**
     * Optional element. Specifies the role name associated with the recipient.<br/><br/>This is required when working with template recipients.
     *
     * @var string
     */
    protected $roleName;
    /**
     * Specifies the routing order of the recipient in the envelope.
     *
     * @var string
     */
    protected $routingOrder;
    /**
     * When set to **true** and the feature is enabled in the sender's account, the signing recipient is required to draw signatures and initials at each signature/initial tab ( instead of adopting a signature/initial style or only drawing a signature/initial once).
     *
     * @var string
     */
    protected $signingGroupId;
    /**
     * Envelope tabs.
     *
     * @var EnvelopeRecipientTabs
     */
    protected $tabs;

    /**
     * If a value is provided, the recipient must enter the value as the access code to view and sign the envelope.

     Maximum Length: 50 characters and it must conform to the account's access code format setting.

     If blank, but the signer `accessCode` property is set in the envelope, then that value is used.

     If blank and the signer `accessCode` property is not set, then the access code is not required.
     *
     * @return string
     */
    public function getAccessCode(): ?string
    {
        return $this->accessCode;
    }

    /**
     * If a value is provided, the recipient must enter the value as the access code to view and sign the envelope.

     Maximum Length: 50 characters and it must conform to the account's access code format setting.

     If blank, but the signer `accessCode` property is set in the envelope, then that value is used.

     If blank and the signer `accessCode` property is not set, then the access code is not required.
     *
     * @param string $accessCode
     *
     * @return self
     */
    public function setAccessCode(?string $accessCode): self
    {
        $this->accessCode = $accessCode;

        return $this;
    }

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
     * When set to **true**, this recipient is the default recipient and any tabs generated by the transformPdfFields option are mapped to this recipient.
     *
     * @return string
     */
    public function getDefaultRecipient(): ?string
    {
        return $this->defaultRecipient;
    }

    /**
     * When set to **true**, this recipient is the default recipient and any tabs generated by the transformPdfFields option are mapped to this recipient.
     *
     * @param string $defaultRecipient
     *
     * @return self
     */
    public function setDefaultRecipient(?string $defaultRecipient): self
    {
        $this->defaultRecipient = $defaultRecipient;

        return $this;
    }

    /**
     * Specifies the email associated with a role name.
     *
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Specifies the email associated with a role name.
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
     * @return RecipientEmailNotification
     */
    public function getEmailNotification(): ?RecipientEmailNotification
    {
        return $this->emailNotification;
    }

    /**
     * @param RecipientEmailNotification $emailNotification
     *
     * @return self
     */
    public function setEmailNotification(?RecipientEmailNotification $emailNotification): self
    {
        $this->emailNotification = $emailNotification;

        return $this;
    }

    /**
     * Specifies a sender provided valid URL string for redirecting an embedded recipient. When using this option, the embedded recipient still receives an email from DocuSign, just as a remote recipient would. When the document link in the email is clicked the recipient is redirected, through DocuSign, to the supplied URL to complete their actions. When routing to the URL, the sender's system (the server responding to the URL) must request a recipient token to launch a signing session.

     If set to `SIGN_AT_DOCUSIGN`, the recipient is directed to an embedded signing or viewing process directly at DocuSign. The signing or viewing action is initiated by the DocuSign system and the transaction activity and Certificate of Completion records will reflect this. In all other ways the process is identical to an embedded signing or viewing operation that is launched by any partner.

     It is important to remember that in a typical embedded workflow the authentication of an embedded recipient is the responsibility of the sending application, DocuSign expects that senders will follow their own process for establishing the recipient's identity. In this workflow the recipient goes through the sending application before the embedded signing or viewing process in initiated. However, when the sending application sets `EmbeddedRecipientStartURL=SIGN_AT_DOCUSIGN`, the recipient goes directly to the embedded signing or viewing process bypassing the sending application and any authentication steps the sending application would use. In this case, DocuSign recommends that you use one of the normal DocuSign authentication features (Access Code, Phone Authentication, SMS Authentication, etc.) to verify the identity of the recipient.

     If the `clientUserId` property is NOT set, and the `embeddedRecipientStartURL` is set, DocuSign will ignore the redirect URL and launch the standard signing process for the email recipient. Information can be appended to the embedded recipient start URL using merge fields. The available merge fields items are: envelopeId, recipientId, recipientName, recipientEmail, and customFields. The `customFields` property must be set fort the recipient or envelope. The merge fields are enclosed in double brackets.

     *Example*:

     `http://senderHost/[[mergeField1]]/ beginSigningSession? [[mergeField2]]&[[mergeField3]]`
     *
     * @return string
     */
    public function getEmbeddedRecipientStartURL(): ?string
    {
        return $this->embeddedRecipientStartURL;
    }

    /**
     * Specifies a sender provided valid URL string for redirecting an embedded recipient. When using this option, the embedded recipient still receives an email from DocuSign, just as a remote recipient would. When the document link in the email is clicked the recipient is redirected, through DocuSign, to the supplied URL to complete their actions. When routing to the URL, the sender's system (the server responding to the URL) must request a recipient token to launch a signing session.

     If set to `SIGN_AT_DOCUSIGN`, the recipient is directed to an embedded signing or viewing process directly at DocuSign. The signing or viewing action is initiated by the DocuSign system and the transaction activity and Certificate of Completion records will reflect this. In all other ways the process is identical to an embedded signing or viewing operation that is launched by any partner.

     It is important to remember that in a typical embedded workflow the authentication of an embedded recipient is the responsibility of the sending application, DocuSign expects that senders will follow their own process for establishing the recipient's identity. In this workflow the recipient goes through the sending application before the embedded signing or viewing process in initiated. However, when the sending application sets `EmbeddedRecipientStartURL=SIGN_AT_DOCUSIGN`, the recipient goes directly to the embedded signing or viewing process bypassing the sending application and any authentication steps the sending application would use. In this case, DocuSign recommends that you use one of the normal DocuSign authentication features (Access Code, Phone Authentication, SMS Authentication, etc.) to verify the identity of the recipient.

     If the `clientUserId` property is NOT set, and the `embeddedRecipientStartURL` is set, DocuSign will ignore the redirect URL and launch the standard signing process for the email recipient. Information can be appended to the embedded recipient start URL using merge fields. The available merge fields items are: envelopeId, recipientId, recipientName, recipientEmail, and customFields. The `customFields` property must be set fort the recipient or envelope. The merge fields are enclosed in double brackets.

     *Example*:

     `http://senderHost/[[mergeField1]]/ beginSigningSession? [[mergeField2]]&[[mergeField3]]`
     *
     * @param string $embeddedRecipientStartURL
     *
     * @return self
     */
    public function setEmbeddedRecipientStartURL(?string $embeddedRecipientStartURL): self
    {
        $this->embeddedRecipientStartURL = $embeddedRecipientStartURL;

        return $this;
    }

    /**
     * Specifies the full legal name of the signer in person signer template roles.

     Maximum Length: 100 characters.
     *
     * @return string
     */
    public function getInPersonSignerName(): ?string
    {
        return $this->inPersonSignerName;
    }

    /**
     * Specifies the full legal name of the signer in person signer template roles.

     Maximum Length: 100 characters.
     *
     * @param string $inPersonSignerName
     *
     * @return self
     */
    public function setInPersonSignerName(?string $inPersonSignerName): self
    {
        $this->inPersonSignerName = $inPersonSignerName;

        return $this;
    }

    /**
     * Specifies the recipient's name.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Specifies the recipient's name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * The default signature provider is the DocuSign Electronic signature system. This parameter is used to specify one or more Standards Based Signature (digital signature) providers for the signer to use. [More information](../../../../guide/appendix/standards_based_signatures.html).
     *
     * @return RecipientSignatureProvider[]
     */
    public function getRecipientSignatureProviders(): ?array
    {
        return $this->recipientSignatureProviders;
    }

    /**
     * The default signature provider is the DocuSign Electronic signature system. This parameter is used to specify one or more Standards Based Signature (digital signature) providers for the signer to use. [More information](../../../../guide/appendix/standards_based_signatures.html).
     *
     * @param RecipientSignatureProvider[] $recipientSignatureProviders
     *
     * @return self
     */
    public function setRecipientSignatureProviders(?array $recipientSignatureProviders): self
    {
        $this->recipientSignatureProviders = $recipientSignatureProviders;

        return $this;
    }

    /**
     * Optional element. Specifies the role name associated with the recipient.<br/><br/>This is required when working with template recipients.
     *
     * @return string
     */
    public function getRoleName(): ?string
    {
        return $this->roleName;
    }

    /**
     * Optional element. Specifies the role name associated with the recipient.<br/><br/>This is required when working with template recipients.
     *
     * @param string $roleName
     *
     * @return self
     */
    public function setRoleName(?string $roleName): self
    {
        $this->roleName = $roleName;

        return $this;
    }

    /**
     * Specifies the routing order of the recipient in the envelope.
     *
     * @return string
     */
    public function getRoutingOrder(): ?string
    {
        return $this->routingOrder;
    }

    /**
     * Specifies the routing order of the recipient in the envelope.
     *
     * @param string $routingOrder
     *
     * @return self
     */
    public function setRoutingOrder(?string $routingOrder): self
    {
        $this->routingOrder = $routingOrder;

        return $this;
    }

    /**
     * When set to **true** and the feature is enabled in the sender's account, the signing recipient is required to draw signatures and initials at each signature/initial tab ( instead of adopting a signature/initial style or only drawing a signature/initial once).
     *
     * @return string
     */
    public function getSigningGroupId(): ?string
    {
        return $this->signingGroupId;
    }

    /**
     * When set to **true** and the feature is enabled in the sender's account, the signing recipient is required to draw signatures and initials at each signature/initial tab ( instead of adopting a signature/initial style or only drawing a signature/initial once).
     *
     * @param string $signingGroupId
     *
     * @return self
     */
    public function setSigningGroupId(?string $signingGroupId): self
    {
        $this->signingGroupId = $signingGroupId;

        return $this;
    }

    /**
     * Envelope tabs.
     *
     * @return EnvelopeRecipientTabs
     */
    public function getTabs(): ?EnvelopeRecipientTabs
    {
        return $this->tabs;
    }

    /**
     * Envelope tabs.
     *
     * @param EnvelopeRecipientTabs $tabs
     *
     * @return self
     */
    public function setTabs(?EnvelopeRecipientTabs $tabs): self
    {
        $this->tabs = $tabs;

        return $this;
    }
}