<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class InPersonSigner
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
     * This Optional attribute indicates that the access code will be added to the email sent to the recipient; this nullifies the Security measure of Access Code on the recipient.
     *
     * @var string
     */
    protected $addAccessCodeToEmail;
    /**
     * Specifies whether auto navigation is set for the recipient.
     *
     * @var string
     */
    protected $autoNavigation;
    /**
     * When set to **true**, specifies that the signer can perform the signing ceremony offline.
     *
     * @var string
     */
    protected $canSignOffline;
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
     * @var string
     */
    protected $creationReason;
    /**
     * An optional array of strings that allows the sender to provide custom data about the recipient. This information is returned in the envelope status but otherwise not used by DocuSign. Each customField string can be a maximum of 100 characters.
     *
     * @var string[]
     */
    protected $customFields;
    /**
     * The date and time the recipient declined the document.
     *
     * @var string
     */
    protected $declinedDateTime;
    /**
     * The reason the recipient declined the document.
     *
     * @var string
     */
    protected $declinedReason;
    /**
     * When set to **true**,.
     this is the default recipient for the envelope.
     This option is used when creating an envelope from a template.

     *
     * @var string
     */
    protected $defaultRecipient;
    /**
     * Reserved: For DocuSign use only.
     *
     * @var string
     */
    protected $deliveredDateTime;
    /**
     * Reserved: For DocuSign use only.
     *
     * @var string
     */
    protected $deliveryMethod;
    /**
     * @var DocumentVisibility[]
     */
    protected $documentVisibility;
    /**
     * The signer's email address in an eNotary flow.

     Use only when `inPersonSigningType` is `notary`.
     For regular in-person-signer flow, use `signerEmail` instead.

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
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * Reserved:.
     *
     * @var string
     */
    protected $faxNumber;
    /**
     * The email address of the signing host.
     This is the DocuSign user that is hosting the in-person signing session.

     Required when `inPersonSigningType` is `inPersonSigner`.
     For eNotary flow, use `email` instead.

     Maximum Length: 100 characters.

     *
     * @var string
     */
    protected $hostEmail;
    /**
     * The name of the signing host.
     This is the DocuSign user that is hosting the in-person signing session.

     Required when `inPersonSigningType` is `inPersonSigner`.
     For eNotary flow, use `name` instead.

     Maximum Length: 100 characters.

     *
     * @var string
     */
    protected $hostName;
    /**
     * Specifies authentication check by name. The names used here must be the same as the authentication type names used by the account (these name can also be found in the web console sending interface in the Identify list for a recipient,) This overrides any default authentication setting.
     *Example*: Your account has ID Check and SMS Authentication available and in the web console Identify list these appear as 'ID Check $' and 'SMS Auth $'. To use ID check in an envelope, the idCheckConfigurationName should be 'ID Check '. If you wanted to use SMS, it would be 'SMS Auth $' and you would need to add you would need to add phone number information to the `smsAuthentication` node.
     *
     * @var string
     */
    protected $idCheckConfigurationName;
    /**
     * A complex element that contains input information related to a recipient ID check. It can include the following information.

     addressInformationInput: Used to set recipient address information and consists of:

     * addressInformation: consists of six elements, with stree2 and zipPlus4 being optional. The elements are: street1, street2, city, state, zip, zipPlus4. The maximum length of each element is: street1/street2 = 150 characters, city = 50 characters, state = 2 characters, and zip/zipPlus4 = 20 characters.
     * displayLevelCode: Specifies the display level for the recipient. Values are: ReadOnly, Editable, or DoNotDisplay.
     * receiveInResponse: A Boolean element that specifies if the information needs to be returned in the response.

     dobInformationInput: Used to set recipient date of birth information and consists of:

     * dateOfBirth: Specifies the recipient's date, month and year of birth.
     * displayLevelCode: Specifies the display level for the recipient. Values are: ReadOnly, Editable, or DoNotDisplay.
     * receiveInResponse: A Boolean element that specifies if the information needs to be returned in the response.

     ssn4InformationInput: Used to set the last four digits of the recipient's SSN information and consists of:

     * ssn4: Specifies the last four digits of the recipient's SSN.
     * displayLevelCode: Specifies the display level for the recipient. Values are: ReadOnly, Editable, or DoNotDisplay.
     * receiveInResponse: A Boolean element that specifies if the information needs to be returned in the response.

     ssn9InformationInput: Used to set the recipient's SSN information. Note that the ssn9 information can never be returned in the response. The ssn9 input consists of:
     * ssn9: Specifies the recipient's SSN.
     * displayLevelCode: Specifies the display level for the recipient. Values are: ReadOnly, Editable, or DoNotDisplay.
     *
     * @var IdCheckInformationInput
     */
    protected $idCheckInformationInput;
    /**
     * When set to **true** and the envelope recipient creates a DocuSign account after signing, the Manage Account Email Notification settings are used as the default settings for the recipient's account.
     *
     * @var string
     */
    protected $inheritEmailNotificationConfiguration;
    /**
     * Specifies whether the envelope uses the eNotary feature.
     Valid values:

     * `inPersonSigner` The envelope uses the normal in-person signing flow.
     * `notary`: The envelope uses the eNotary in-person signing flow.

     *
     * @var string
     */
    protected $inPersonSigningType;
    /**
     * The signer's full legal name in an eNotary flow.

     Required when `inPersonSigningType` is `notary`.
     For regular in-person-signer flow, use `signerName` instead.

     Maximum Length: 100 characters.

     *
     * @var string
     */
    protected $name;
    /**
     * This object is used only when `inPersonSigningType` in the `inPersonSigner` object is `notary`.

     It describes information about the notary host.
     The following information is required
     when using the eNotary in-person signing flow:

     * `name`: Specifies the notary's full legal name.
     * `email`: Specifies the notary's email address.
     * `recipientId`: A unique ID number for the notary signing host.

     *
     * @var NotaryHost
     */
    protected $notaryHost;
    /**
     * A note sent to the in-person signer in the signing email.
     This note is visible only to this recipient.

     Maximum Length: 1000 characters.

     *
     * @var string
     */
    protected $note;
    /**
     * A complex type that Contains the elements:.

     * recipMayProvideNumber - Boolean. When set to **true**, the recipient can use whatever phone number they choose.
     * senderProvidedNumbers - ArrayOfString.  A list of phone numbers the recipient can use.
     * recordVoicePrint - Reserved.
     * validateRecipProvidedNumber - Reserved.
     *
     * @var RecipientPhoneAuthentication
     */
    protected $phoneAuthentication;
    /**
     * Reserved:.
     *
     * @var RecipientAttachment[]
     */
    protected $recipientAttachments;
    /**
     * Contains information about the authentication status.
     *
     * @var AuthenticationStatus
     */
    protected $recipientAuthenticationStatus;
    /**
     * Unique for the recipient. It is used by the tab element to indicate which recipient is to sign the Document.
     *
     * @var string
     */
    protected $recipientId;
    /**
     * @var string
     */
    protected $recipientIdGuid;
    /**
     * The default signature provider is the DocuSign Electronic signature system. This parameter is used to specify one or more Standards Based Signature (digital signature) providers for the signer to use. [More information](../../../../guide/appendix/standards_based_signatures.html).
     *
     * @var RecipientSignatureProvider[]
     */
    protected $recipientSignatureProviders;
    /**
     * @var string
     */
    protected $recipientSuppliesTabs;
    /**
     * When set to **true**, the recipient is required to use the specified ID check method (including Phone and SMS authentication) to validate their identity.
     *
     * @var string
     */
    protected $requireIdLookup;
    /**
     * By default, DocuSign signers create electronic signatures. This field can be used to require the signer to use a SAFE-BioPharma digital certificate for signing.

     This parameter should only be used to select a SAFE-BioPharma certificate. New integrations should use the `recipientSignatureProviders` parameter for other types of digital certificates.

     Set this parameter to `safe` to use a SAFE-BioPharma certificate.

     The signer must be enrolled in the SAFE program to sign with a SAFE certificate.
     *
     * @var string
     */
    protected $requireSignerCertificate;
    /**
     * When set to **true**, the signer must print, sign, and upload or fax the signed documents to DocuSign.
     *
     * @var string
     */
    protected $requireSignOnPaper;
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
     * Contains the name/value pair information for the SAML assertion attributes:.

     * name - The name of the SAML assertion attribute.
     * value - The value associated with the named SAML assertion attribute.

     Your account must be set up to use SSO to use this.
     *
     * @var RecipientSAMLAuthentication
     */
    protected $samlAuthentication;
    /**
     * The date and time the envelope was sent.
     *
     * @var string
     */
    protected $sentDateTime;
    /**
     * Allows the sender to pre-specify the signature name, signature initials and signature font used in the signature stamp for the recipient.

     Used only with recipient types In Person Signers and Signers.
     *
     * @var RecipientSignatureInformation
     */
    protected $signatureInfo;
    /**
     * Reserved: For DocuSign use only.
     *
     * @var string
     */
    protected $signedDateTime;
    /**
     * The in-person signer's email address.

     Required when `inPersonSigningType` is `inPersonSigner`.
     For eNotary flow, use `email` instead.

     Maximum Length: 100 characters.


     *
     * @var string
     */
    protected $signerEmail;
    /**
     * The in-person signer's full legal name.

     Required when `inPersonSigningType` is `inPersonSigner`.
     For eNotary flow, use `name` instead.

     Maximum Length: 100 characters.

     *
     * @var string
     */
    protected $signerName;
    /**
     * When set to **true**, specifies that the signer must sign in all locations.
     *
     * @var string
     */
    protected $signInEachLocation;
    /**
     * When set to **true** and the feature is enabled in the sender's account, the signing recipient is required to draw signatures and initials at each signature/initial tab ( instead of adopting a signature/initial style or only drawing a signature/initial once).
     *
     * @var string
     */
    protected $signingGroupId;
    /**
     * The display name for the signing group.

     Maximum Length: 100 characters.
     *
     * @var string
     */
    protected $signingGroupName;
    /**
     * A complex type that contains information about users in the signing group.
     *
     * @var UserInfo[]
     */
    protected $signingGroupUsers;
    /**
     * Contains the element senderProvidedNumbers which is an Array  of phone numbers the recipient can use for SMS text authentication.
     *
     * @var RecipientSMSAuthentication
     */
    protected $smsAuthentication;
    /**
     *  Lists the social ID type that can be used for recipient authentication.
     *
     * @var SocialAuthentication[]
     */
    protected $socialAuthentications;
    /**
     * Indicates the envelope status. Valid values are:.

     * sent - The envelope is sent to the recipients.
     * created - The envelope is saved as a draft and can be modified and sent later.
     *
     * @var string
     */
    protected $status;
    /**
     * Envelope tabs.
     *
     * @var EnvelopeRecipientTabs
     */
    protected $tabs;
    /**
     * When set to **true**, the sender cannot change any attributes of the recipient. Used only when working with template recipients.
     *
     * @var string
     */
    protected $templateLocked;
    /**
     * When set to **true**, the sender may not remove the recipient. Used only when working with template recipients.
     *
     * @var string
     */
    protected $templateRequired;
    /**
     * @var string
     */
    protected $totalTabCount;
    /**
     * The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     *
     * @var string
     */
    protected $userId;

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
     * This Optional attribute indicates that the access code will be added to the email sent to the recipient; this nullifies the Security measure of Access Code on the recipient.
     *
     * @return string
     */
    public function getAddAccessCodeToEmail(): ?string
    {
        return $this->addAccessCodeToEmail;
    }

    /**
     * This Optional attribute indicates that the access code will be added to the email sent to the recipient; this nullifies the Security measure of Access Code on the recipient.
     *
     * @param string $addAccessCodeToEmail
     *
     * @return self
     */
    public function setAddAccessCodeToEmail(?string $addAccessCodeToEmail): self
    {
        $this->addAccessCodeToEmail = $addAccessCodeToEmail;

        return $this;
    }

    /**
     * Specifies whether auto navigation is set for the recipient.
     *
     * @return string
     */
    public function getAutoNavigation(): ?string
    {
        return $this->autoNavigation;
    }

    /**
     * Specifies whether auto navigation is set for the recipient.
     *
     * @param string $autoNavigation
     *
     * @return self
     */
    public function setAutoNavigation(?string $autoNavigation): self
    {
        $this->autoNavigation = $autoNavigation;

        return $this;
    }

    /**
     * When set to **true**, specifies that the signer can perform the signing ceremony offline.
     *
     * @return string
     */
    public function getCanSignOffline(): ?string
    {
        return $this->canSignOffline;
    }

    /**
     * When set to **true**, specifies that the signer can perform the signing ceremony offline.
     *
     * @param string $canSignOffline
     *
     * @return self
     */
    public function setCanSignOffline(?string $canSignOffline): self
    {
        $this->canSignOffline = $canSignOffline;

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
     * @return string
     */
    public function getCreationReason(): ?string
    {
        return $this->creationReason;
    }

    /**
     * @param string $creationReason
     *
     * @return self
     */
    public function setCreationReason(?string $creationReason): self
    {
        $this->creationReason = $creationReason;

        return $this;
    }

    /**
     * An optional array of strings that allows the sender to provide custom data about the recipient. This information is returned in the envelope status but otherwise not used by DocuSign. Each customField string can be a maximum of 100 characters.
     *
     * @return string[]
     */
    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    /**
     * An optional array of strings that allows the sender to provide custom data about the recipient. This information is returned in the envelope status but otherwise not used by DocuSign. Each customField string can be a maximum of 100 characters.
     *
     * @param string[] $customFields
     *
     * @return self
     */
    public function setCustomFields(?array $customFields): self
    {
        $this->customFields = $customFields;

        return $this;
    }

    /**
     * The date and time the recipient declined the document.
     *
     * @return string
     */
    public function getDeclinedDateTime(): ?string
    {
        return $this->declinedDateTime;
    }

    /**
     * The date and time the recipient declined the document.
     *
     * @param string $declinedDateTime
     *
     * @return self
     */
    public function setDeclinedDateTime(?string $declinedDateTime): self
    {
        $this->declinedDateTime = $declinedDateTime;

        return $this;
    }

    /**
     * The reason the recipient declined the document.
     *
     * @return string
     */
    public function getDeclinedReason(): ?string
    {
        return $this->declinedReason;
    }

    /**
     * The reason the recipient declined the document.
     *
     * @param string $declinedReason
     *
     * @return self
     */
    public function setDeclinedReason(?string $declinedReason): self
    {
        $this->declinedReason = $declinedReason;

        return $this;
    }

    /**
     * When set to **true**,.
     this is the default recipient for the envelope.
     This option is used when creating an envelope from a template.

     *
     * @return string
     */
    public function getDefaultRecipient(): ?string
    {
        return $this->defaultRecipient;
    }

    /**
     * When set to **true**,.
     this is the default recipient for the envelope.
     This option is used when creating an envelope from a template.

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
     * Reserved: For DocuSign use only.
     *
     * @return string
     */
    public function getDeliveredDateTime(): ?string
    {
        return $this->deliveredDateTime;
    }

    /**
     * Reserved: For DocuSign use only.
     *
     * @param string $deliveredDateTime
     *
     * @return self
     */
    public function setDeliveredDateTime(?string $deliveredDateTime): self
    {
        $this->deliveredDateTime = $deliveredDateTime;

        return $this;
    }

    /**
     * Reserved: For DocuSign use only.
     *
     * @return string
     */
    public function getDeliveryMethod(): ?string
    {
        return $this->deliveryMethod;
    }

    /**
     * Reserved: For DocuSign use only.
     *
     * @param string $deliveryMethod
     *
     * @return self
     */
    public function setDeliveryMethod(?string $deliveryMethod): self
    {
        $this->deliveryMethod = $deliveryMethod;

        return $this;
    }

    /**
     * @return DocumentVisibility[]
     */
    public function getDocumentVisibility(): ?array
    {
        return $this->documentVisibility;
    }

    /**
     * @param DocumentVisibility[] $documentVisibility
     *
     * @return self
     */
    public function setDocumentVisibility(?array $documentVisibility): self
    {
        $this->documentVisibility = $documentVisibility;

        return $this;
    }

    /**
     * The signer's email address in an eNotary flow.

     Use only when `inPersonSigningType` is `notary`.
     For regular in-person-signer flow, use `signerEmail` instead.

     *
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * The signer's email address in an eNotary flow.

     Use only when `inPersonSigningType` is `notary`.
     For regular in-person-signer flow, use `signerEmail` instead.

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
     * Reserved:.
     *
     * @return string
     */
    public function getFaxNumber(): ?string
    {
        return $this->faxNumber;
    }

    /**
     * Reserved:.
     *
     * @param string $faxNumber
     *
     * @return self
     */
    public function setFaxNumber(?string $faxNumber): self
    {
        $this->faxNumber = $faxNumber;

        return $this;
    }

    /**
     * The email address of the signing host.
     This is the DocuSign user that is hosting the in-person signing session.

     Required when `inPersonSigningType` is `inPersonSigner`.
     For eNotary flow, use `email` instead.

     Maximum Length: 100 characters.

     *
     * @return string
     */
    public function getHostEmail(): ?string
    {
        return $this->hostEmail;
    }

    /**
     * The email address of the signing host.
     This is the DocuSign user that is hosting the in-person signing session.

     Required when `inPersonSigningType` is `inPersonSigner`.
     For eNotary flow, use `email` instead.

     Maximum Length: 100 characters.

     *
     * @param string $hostEmail
     *
     * @return self
     */
    public function setHostEmail(?string $hostEmail): self
    {
        $this->hostEmail = $hostEmail;

        return $this;
    }

    /**
     * The name of the signing host.
     This is the DocuSign user that is hosting the in-person signing session.

     Required when `inPersonSigningType` is `inPersonSigner`.
     For eNotary flow, use `name` instead.

     Maximum Length: 100 characters.

     *
     * @return string
     */
    public function getHostName(): ?string
    {
        return $this->hostName;
    }

    /**
     * The name of the signing host.
     This is the DocuSign user that is hosting the in-person signing session.

     Required when `inPersonSigningType` is `inPersonSigner`.
     For eNotary flow, use `name` instead.

     Maximum Length: 100 characters.

     *
     * @param string $hostName
     *
     * @return self
     */
    public function setHostName(?string $hostName): self
    {
        $this->hostName = $hostName;

        return $this;
    }

    /**
     * Specifies authentication check by name. The names used here must be the same as the authentication type names used by the account (these name can also be found in the web console sending interface in the Identify list for a recipient,) This overrides any default authentication setting.
     *Example*: Your account has ID Check and SMS Authentication available and in the web console Identify list these appear as 'ID Check $' and 'SMS Auth $'. To use ID check in an envelope, the idCheckConfigurationName should be 'ID Check '. If you wanted to use SMS, it would be 'SMS Auth $' and you would need to add you would need to add phone number information to the `smsAuthentication` node.
     *
     * @return string
     */
    public function getIdCheckConfigurationName(): ?string
    {
        return $this->idCheckConfigurationName;
    }

    /**
     * Specifies authentication check by name. The names used here must be the same as the authentication type names used by the account (these name can also be found in the web console sending interface in the Identify list for a recipient,) This overrides any default authentication setting.
     *Example*: Your account has ID Check and SMS Authentication available and in the web console Identify list these appear as 'ID Check $' and 'SMS Auth $'. To use ID check in an envelope, the idCheckConfigurationName should be 'ID Check '. If you wanted to use SMS, it would be 'SMS Auth $' and you would need to add you would need to add phone number information to the `smsAuthentication` node.
     *
     * @param string $idCheckConfigurationName
     *
     * @return self
     */
    public function setIdCheckConfigurationName(?string $idCheckConfigurationName): self
    {
        $this->idCheckConfigurationName = $idCheckConfigurationName;

        return $this;
    }

    /**
     * A complex element that contains input information related to a recipient ID check. It can include the following information.

     addressInformationInput: Used to set recipient address information and consists of:

     * addressInformation: consists of six elements, with stree2 and zipPlus4 being optional. The elements are: street1, street2, city, state, zip, zipPlus4. The maximum length of each element is: street1/street2 = 150 characters, city = 50 characters, state = 2 characters, and zip/zipPlus4 = 20 characters.
     * displayLevelCode: Specifies the display level for the recipient. Values are: ReadOnly, Editable, or DoNotDisplay.
     * receiveInResponse: A Boolean element that specifies if the information needs to be returned in the response.

     dobInformationInput: Used to set recipient date of birth information and consists of:

     * dateOfBirth: Specifies the recipient's date, month and year of birth.
     * displayLevelCode: Specifies the display level for the recipient. Values are: ReadOnly, Editable, or DoNotDisplay.
     * receiveInResponse: A Boolean element that specifies if the information needs to be returned in the response.

     ssn4InformationInput: Used to set the last four digits of the recipient's SSN information and consists of:

     * ssn4: Specifies the last four digits of the recipient's SSN.
     * displayLevelCode: Specifies the display level for the recipient. Values are: ReadOnly, Editable, or DoNotDisplay.
     * receiveInResponse: A Boolean element that specifies if the information needs to be returned in the response.

     ssn9InformationInput: Used to set the recipient's SSN information. Note that the ssn9 information can never be returned in the response. The ssn9 input consists of:
     * ssn9: Specifies the recipient's SSN.
     * displayLevelCode: Specifies the display level for the recipient. Values are: ReadOnly, Editable, or DoNotDisplay.
     *
     * @return IdCheckInformationInput
     */
    public function getIdCheckInformationInput(): ?IdCheckInformationInput
    {
        return $this->idCheckInformationInput;
    }

    /**
     * A complex element that contains input information related to a recipient ID check. It can include the following information.

     addressInformationInput: Used to set recipient address information and consists of:

     * addressInformation: consists of six elements, with stree2 and zipPlus4 being optional. The elements are: street1, street2, city, state, zip, zipPlus4. The maximum length of each element is: street1/street2 = 150 characters, city = 50 characters, state = 2 characters, and zip/zipPlus4 = 20 characters.
     * displayLevelCode: Specifies the display level for the recipient. Values are: ReadOnly, Editable, or DoNotDisplay.
     * receiveInResponse: A Boolean element that specifies if the information needs to be returned in the response.

     dobInformationInput: Used to set recipient date of birth information and consists of:

     * dateOfBirth: Specifies the recipient's date, month and year of birth.
     * displayLevelCode: Specifies the display level for the recipient. Values are: ReadOnly, Editable, or DoNotDisplay.
     * receiveInResponse: A Boolean element that specifies if the information needs to be returned in the response.

     ssn4InformationInput: Used to set the last four digits of the recipient's SSN information and consists of:

     * ssn4: Specifies the last four digits of the recipient's SSN.
     * displayLevelCode: Specifies the display level for the recipient. Values are: ReadOnly, Editable, or DoNotDisplay.
     * receiveInResponse: A Boolean element that specifies if the information needs to be returned in the response.

     ssn9InformationInput: Used to set the recipient's SSN information. Note that the ssn9 information can never be returned in the response. The ssn9 input consists of:
     * ssn9: Specifies the recipient's SSN.
     * displayLevelCode: Specifies the display level for the recipient. Values are: ReadOnly, Editable, or DoNotDisplay.
     *
     * @param IdCheckInformationInput $idCheckInformationInput
     *
     * @return self
     */
    public function setIdCheckInformationInput(?IdCheckInformationInput $idCheckInformationInput): self
    {
        $this->idCheckInformationInput = $idCheckInformationInput;

        return $this;
    }

    /**
     * When set to **true** and the envelope recipient creates a DocuSign account after signing, the Manage Account Email Notification settings are used as the default settings for the recipient's account.
     *
     * @return string
     */
    public function getInheritEmailNotificationConfiguration(): ?string
    {
        return $this->inheritEmailNotificationConfiguration;
    }

    /**
     * When set to **true** and the envelope recipient creates a DocuSign account after signing, the Manage Account Email Notification settings are used as the default settings for the recipient's account.
     *
     * @param string $inheritEmailNotificationConfiguration
     *
     * @return self
     */
    public function setInheritEmailNotificationConfiguration(?string $inheritEmailNotificationConfiguration): self
    {
        $this->inheritEmailNotificationConfiguration = $inheritEmailNotificationConfiguration;

        return $this;
    }

    /**
     * Specifies whether the envelope uses the eNotary feature.
     Valid values:

     * `inPersonSigner` The envelope uses the normal in-person signing flow.
     * `notary`: The envelope uses the eNotary in-person signing flow.

     *
     * @return string
     */
    public function getInPersonSigningType(): ?string
    {
        return $this->inPersonSigningType;
    }

    /**
     * Specifies whether the envelope uses the eNotary feature.
     Valid values:

     * `inPersonSigner` The envelope uses the normal in-person signing flow.
     * `notary`: The envelope uses the eNotary in-person signing flow.

     *
     * @param string $inPersonSigningType
     *
     * @return self
     */
    public function setInPersonSigningType(?string $inPersonSigningType): self
    {
        $this->inPersonSigningType = $inPersonSigningType;

        return $this;
    }

    /**
     * The signer's full legal name in an eNotary flow.

     Required when `inPersonSigningType` is `notary`.
     For regular in-person-signer flow, use `signerName` instead.

     Maximum Length: 100 characters.

     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The signer's full legal name in an eNotary flow.

     Required when `inPersonSigningType` is `notary`.
     For regular in-person-signer flow, use `signerName` instead.

     Maximum Length: 100 characters.

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
     * This object is used only when `inPersonSigningType` in the `inPersonSigner` object is `notary`.

     It describes information about the notary host.
     The following information is required
     when using the eNotary in-person signing flow:

     * `name`: Specifies the notary's full legal name.
     * `email`: Specifies the notary's email address.
     * `recipientId`: A unique ID number for the notary signing host.

     *
     * @return NotaryHost
     */
    public function getNotaryHost(): ?NotaryHost
    {
        return $this->notaryHost;
    }

    /**
     * This object is used only when `inPersonSigningType` in the `inPersonSigner` object is `notary`.

     It describes information about the notary host.
     The following information is required
     when using the eNotary in-person signing flow:

     * `name`: Specifies the notary's full legal name.
     * `email`: Specifies the notary's email address.
     * `recipientId`: A unique ID number for the notary signing host.

     *
     * @param NotaryHost $notaryHost
     *
     * @return self
     */
    public function setNotaryHost(?NotaryHost $notaryHost): self
    {
        $this->notaryHost = $notaryHost;

        return $this;
    }

    /**
     * A note sent to the in-person signer in the signing email.
     This note is visible only to this recipient.

     Maximum Length: 1000 characters.

     *
     * @return string
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * A note sent to the in-person signer in the signing email.
     This note is visible only to this recipient.

     Maximum Length: 1000 characters.

     *
     * @param string $note
     *
     * @return self
     */
    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }

    /**
     * A complex type that Contains the elements:.

     * recipMayProvideNumber - Boolean. When set to **true**, the recipient can use whatever phone number they choose.
     * senderProvidedNumbers - ArrayOfString.  A list of phone numbers the recipient can use.
     * recordVoicePrint - Reserved.
     * validateRecipProvidedNumber - Reserved.
     *
     * @return RecipientPhoneAuthentication
     */
    public function getPhoneAuthentication(): ?RecipientPhoneAuthentication
    {
        return $this->phoneAuthentication;
    }

    /**
     * A complex type that Contains the elements:.

     * recipMayProvideNumber - Boolean. When set to **true**, the recipient can use whatever phone number they choose.
     * senderProvidedNumbers - ArrayOfString.  A list of phone numbers the recipient can use.
     * recordVoicePrint - Reserved.
     * validateRecipProvidedNumber - Reserved.
     *
     * @param RecipientPhoneAuthentication $phoneAuthentication
     *
     * @return self
     */
    public function setPhoneAuthentication(?RecipientPhoneAuthentication $phoneAuthentication): self
    {
        $this->phoneAuthentication = $phoneAuthentication;

        return $this;
    }

    /**
     * Reserved:.
     *
     * @return RecipientAttachment[]
     */
    public function getRecipientAttachments(): ?array
    {
        return $this->recipientAttachments;
    }

    /**
     * Reserved:.
     *
     * @param RecipientAttachment[] $recipientAttachments
     *
     * @return self
     */
    public function setRecipientAttachments(?array $recipientAttachments): self
    {
        $this->recipientAttachments = $recipientAttachments;

        return $this;
    }

    /**
     * Contains information about the authentication status.
     *
     * @return AuthenticationStatus
     */
    public function getRecipientAuthenticationStatus(): ?AuthenticationStatus
    {
        return $this->recipientAuthenticationStatus;
    }

    /**
     * Contains information about the authentication status.
     *
     * @param AuthenticationStatus $recipientAuthenticationStatus
     *
     * @return self
     */
    public function setRecipientAuthenticationStatus(?AuthenticationStatus $recipientAuthenticationStatus): self
    {
        $this->recipientAuthenticationStatus = $recipientAuthenticationStatus;

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
     * @return string
     */
    public function getRecipientIdGuid(): ?string
    {
        return $this->recipientIdGuid;
    }

    /**
     * @param string $recipientIdGuid
     *
     * @return self
     */
    public function setRecipientIdGuid(?string $recipientIdGuid): self
    {
        $this->recipientIdGuid = $recipientIdGuid;

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
     * @return string
     */
    public function getRecipientSuppliesTabs(): ?string
    {
        return $this->recipientSuppliesTabs;
    }

    /**
     * @param string $recipientSuppliesTabs
     *
     * @return self
     */
    public function setRecipientSuppliesTabs(?string $recipientSuppliesTabs): self
    {
        $this->recipientSuppliesTabs = $recipientSuppliesTabs;

        return $this;
    }

    /**
     * When set to **true**, the recipient is required to use the specified ID check method (including Phone and SMS authentication) to validate their identity.
     *
     * @return string
     */
    public function getRequireIdLookup(): ?string
    {
        return $this->requireIdLookup;
    }

    /**
     * When set to **true**, the recipient is required to use the specified ID check method (including Phone and SMS authentication) to validate their identity.
     *
     * @param string $requireIdLookup
     *
     * @return self
     */
    public function setRequireIdLookup(?string $requireIdLookup): self
    {
        $this->requireIdLookup = $requireIdLookup;

        return $this;
    }

    /**
     * By default, DocuSign signers create electronic signatures. This field can be used to require the signer to use a SAFE-BioPharma digital certificate for signing.

     This parameter should only be used to select a SAFE-BioPharma certificate. New integrations should use the `recipientSignatureProviders` parameter for other types of digital certificates.

     Set this parameter to `safe` to use a SAFE-BioPharma certificate.

     The signer must be enrolled in the SAFE program to sign with a SAFE certificate.
     *
     * @return string
     */
    public function getRequireSignerCertificate(): ?string
    {
        return $this->requireSignerCertificate;
    }

    /**
     * By default, DocuSign signers create electronic signatures. This field can be used to require the signer to use a SAFE-BioPharma digital certificate for signing.

     This parameter should only be used to select a SAFE-BioPharma certificate. New integrations should use the `recipientSignatureProviders` parameter for other types of digital certificates.

     Set this parameter to `safe` to use a SAFE-BioPharma certificate.

     The signer must be enrolled in the SAFE program to sign with a SAFE certificate.
     *
     * @param string $requireSignerCertificate
     *
     * @return self
     */
    public function setRequireSignerCertificate(?string $requireSignerCertificate): self
    {
        $this->requireSignerCertificate = $requireSignerCertificate;

        return $this;
    }

    /**
     * When set to **true**, the signer must print, sign, and upload or fax the signed documents to DocuSign.
     *
     * @return string
     */
    public function getRequireSignOnPaper(): ?string
    {
        return $this->requireSignOnPaper;
    }

    /**
     * When set to **true**, the signer must print, sign, and upload or fax the signed documents to DocuSign.
     *
     * @param string $requireSignOnPaper
     *
     * @return self
     */
    public function setRequireSignOnPaper(?string $requireSignOnPaper): self
    {
        $this->requireSignOnPaper = $requireSignOnPaper;

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
     * Contains the name/value pair information for the SAML assertion attributes:.

     * name - The name of the SAML assertion attribute.
     * value - The value associated with the named SAML assertion attribute.

     Your account must be set up to use SSO to use this.
     *
     * @return RecipientSAMLAuthentication
     */
    public function getSamlAuthentication(): ?RecipientSAMLAuthentication
    {
        return $this->samlAuthentication;
    }

    /**
     * Contains the name/value pair information for the SAML assertion attributes:.

     * name - The name of the SAML assertion attribute.
     * value - The value associated with the named SAML assertion attribute.

     Your account must be set up to use SSO to use this.
     *
     * @param RecipientSAMLAuthentication $samlAuthentication
     *
     * @return self
     */
    public function setSamlAuthentication(?RecipientSAMLAuthentication $samlAuthentication): self
    {
        $this->samlAuthentication = $samlAuthentication;

        return $this;
    }

    /**
     * The date and time the envelope was sent.
     *
     * @return string
     */
    public function getSentDateTime(): ?string
    {
        return $this->sentDateTime;
    }

    /**
     * The date and time the envelope was sent.
     *
     * @param string $sentDateTime
     *
     * @return self
     */
    public function setSentDateTime(?string $sentDateTime): self
    {
        $this->sentDateTime = $sentDateTime;

        return $this;
    }

    /**
     * Allows the sender to pre-specify the signature name, signature initials and signature font used in the signature stamp for the recipient.

     Used only with recipient types In Person Signers and Signers.
     *
     * @return RecipientSignatureInformation
     */
    public function getSignatureInfo(): ?RecipientSignatureInformation
    {
        return $this->signatureInfo;
    }

    /**
     * Allows the sender to pre-specify the signature name, signature initials and signature font used in the signature stamp for the recipient.

     Used only with recipient types In Person Signers and Signers.
     *
     * @param RecipientSignatureInformation $signatureInfo
     *
     * @return self
     */
    public function setSignatureInfo(?RecipientSignatureInformation $signatureInfo): self
    {
        $this->signatureInfo = $signatureInfo;

        return $this;
    }

    /**
     * Reserved: For DocuSign use only.
     *
     * @return string
     */
    public function getSignedDateTime(): ?string
    {
        return $this->signedDateTime;
    }

    /**
     * Reserved: For DocuSign use only.
     *
     * @param string $signedDateTime
     *
     * @return self
     */
    public function setSignedDateTime(?string $signedDateTime): self
    {
        $this->signedDateTime = $signedDateTime;

        return $this;
    }

    /**
     * The in-person signer's email address.

     Required when `inPersonSigningType` is `inPersonSigner`.
     For eNotary flow, use `email` instead.

     Maximum Length: 100 characters.


     *
     * @return string
     */
    public function getSignerEmail(): ?string
    {
        return $this->signerEmail;
    }

    /**
     * The in-person signer's email address.

     Required when `inPersonSigningType` is `inPersonSigner`.
     For eNotary flow, use `email` instead.

     Maximum Length: 100 characters.


     *
     * @param string $signerEmail
     *
     * @return self
     */
    public function setSignerEmail(?string $signerEmail): self
    {
        $this->signerEmail = $signerEmail;

        return $this;
    }

    /**
     * The in-person signer's full legal name.

     Required when `inPersonSigningType` is `inPersonSigner`.
     For eNotary flow, use `name` instead.

     Maximum Length: 100 characters.

     *
     * @return string
     */
    public function getSignerName(): ?string
    {
        return $this->signerName;
    }

    /**
     * The in-person signer's full legal name.

     Required when `inPersonSigningType` is `inPersonSigner`.
     For eNotary flow, use `name` instead.

     Maximum Length: 100 characters.

     *
     * @param string $signerName
     *
     * @return self
     */
    public function setSignerName(?string $signerName): self
    {
        $this->signerName = $signerName;

        return $this;
    }

    /**
     * When set to **true**, specifies that the signer must sign in all locations.
     *
     * @return string
     */
    public function getSignInEachLocation(): ?string
    {
        return $this->signInEachLocation;
    }

    /**
     * When set to **true**, specifies that the signer must sign in all locations.
     *
     * @param string $signInEachLocation
     *
     * @return self
     */
    public function setSignInEachLocation(?string $signInEachLocation): self
    {
        $this->signInEachLocation = $signInEachLocation;

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
     * The display name for the signing group.

     Maximum Length: 100 characters.
     *
     * @return string
     */
    public function getSigningGroupName(): ?string
    {
        return $this->signingGroupName;
    }

    /**
     * The display name for the signing group.

     Maximum Length: 100 characters.
     *
     * @param string $signingGroupName
     *
     * @return self
     */
    public function setSigningGroupName(?string $signingGroupName): self
    {
        $this->signingGroupName = $signingGroupName;

        return $this;
    }

    /**
     * A complex type that contains information about users in the signing group.
     *
     * @return UserInfo[]
     */
    public function getSigningGroupUsers(): ?array
    {
        return $this->signingGroupUsers;
    }

    /**
     * A complex type that contains information about users in the signing group.
     *
     * @param UserInfo[] $signingGroupUsers
     *
     * @return self
     */
    public function setSigningGroupUsers(?array $signingGroupUsers): self
    {
        $this->signingGroupUsers = $signingGroupUsers;

        return $this;
    }

    /**
     * Contains the element senderProvidedNumbers which is an Array  of phone numbers the recipient can use for SMS text authentication.
     *
     * @return RecipientSMSAuthentication
     */
    public function getSmsAuthentication(): ?RecipientSMSAuthentication
    {
        return $this->smsAuthentication;
    }

    /**
     * Contains the element senderProvidedNumbers which is an Array  of phone numbers the recipient can use for SMS text authentication.
     *
     * @param RecipientSMSAuthentication $smsAuthentication
     *
     * @return self
     */
    public function setSmsAuthentication(?RecipientSMSAuthentication $smsAuthentication): self
    {
        $this->smsAuthentication = $smsAuthentication;

        return $this;
    }

    /**
     *  Lists the social ID type that can be used for recipient authentication.
     *
     * @return SocialAuthentication[]
     */
    public function getSocialAuthentications(): ?array
    {
        return $this->socialAuthentications;
    }

    /**
     *  Lists the social ID type that can be used for recipient authentication.
     *
     * @param SocialAuthentication[] $socialAuthentications
     *
     * @return self
     */
    public function setSocialAuthentications(?array $socialAuthentications): self
    {
        $this->socialAuthentications = $socialAuthentications;

        return $this;
    }

    /**
     * Indicates the envelope status. Valid values are:.

     * sent - The envelope is sent to the recipients.
     * created - The envelope is saved as a draft and can be modified and sent later.
     *
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Indicates the envelope status. Valid values are:.

     * sent - The envelope is sent to the recipients.
     * created - The envelope is saved as a draft and can be modified and sent later.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

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

    /**
     * When set to **true**, the sender cannot change any attributes of the recipient. Used only when working with template recipients.
     *
     * @return string
     */
    public function getTemplateLocked(): ?string
    {
        return $this->templateLocked;
    }

    /**
     * When set to **true**, the sender cannot change any attributes of the recipient. Used only when working with template recipients.
     *
     * @param string $templateLocked
     *
     * @return self
     */
    public function setTemplateLocked(?string $templateLocked): self
    {
        $this->templateLocked = $templateLocked;

        return $this;
    }

    /**
     * When set to **true**, the sender may not remove the recipient. Used only when working with template recipients.
     *
     * @return string
     */
    public function getTemplateRequired(): ?string
    {
        return $this->templateRequired;
    }

    /**
     * When set to **true**, the sender may not remove the recipient. Used only when working with template recipients.
     *
     * @param string $templateRequired
     *
     * @return self
     */
    public function setTemplateRequired(?string $templateRequired): self
    {
        $this->templateRequired = $templateRequired;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotalTabCount(): ?string
    {
        return $this->totalTabCount;
    }

    /**
     * @param string $totalTabCount
     *
     * @return self
     */
    public function setTotalTabCount(?string $totalTabCount): self
    {
        $this->totalTabCount = $totalTabCount;

        return $this;
    }

    /**
     * The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     *
     * @return string
     */
    public function getUserId(): ?string
    {
        return $this->userId;
    }

    /**
     * The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
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
}
