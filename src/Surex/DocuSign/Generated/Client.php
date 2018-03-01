<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated;

class Client extends \Jane\OpenApiRuntime\Client\Psr7HttplugClient
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ServiceInformationGetServiceInformationBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\Services|\Psr\Http\Message\ResponseInterface
     */
    public function serviceInformationGetServiceInformation(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ServiceInformationGetServiceInformation(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ServiceInformationGetResourceInformationBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\Resources|\Psr\Http\Message\ResponseInterface
     */
    public function serviceInformationGetResourceInformation(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ServiceInformationGetResourceInformation(), $fetch);
    }

    /**
     * Creates new DocuSign accounts.
     You can use this method to create
     a single account
     or up to 100 accounts at a time.

     When creating a single account,
     the body of the request is a
     [`newAccountDefinition`][newAccountDefinition]
     object.

     If the request succeeds.
     it returns a
     201 (Created) code.
     The response returns the new account ID, password and the default user
     information for each newly created account.


     When creating multiple accounts,
     the body of the request is a
     `newAccountRequests`
     object,
     which contains one or more
     [`newAccountDefinition`][newAccountDefinition]
     objects.
     You can create up to 100 new accounts
     at a time this way.

     The body for a multi-account
     creation request
     looks like this in JSON:

     ```
     {
     "newAccountRequests": [
     {
     "accountName": "accountone",
     . . .
     },
     {
     "accountName": "accounttwo",
     . . .
     }
     ]
     }
     ```

     A multi-account request
     looks like this in XML:

     ```
     <newAccountsDefinition xmlns:i="http://www.w3.org/2001/XMLSchema-instance" xmlns="http://www.docusign.com/restapi">
     <newAccountRequests>
     <newAccountDefinition>
     . . .
     </newAccountDefinition>
     <newAccountDefinition>
     . . .
     </newAccountDefinition>
     </newAccountRequests>
     </newAccountsDefinition>
     ```

     A multi-account creation request
     may succeed (report a 201 code)
     even if some accounts could not be created.
     In this case, the `errorDetails` property
     in the response contains specific information
     about the failure.


     ### Account Settings

     The `accountSettings` property
     is a [name/value][nameValue]
     list that can contain the following settings:

     | Name                                               | Type    | Authorization Required                                      | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
     | :------------------------------------------------- | :------ | :---------------------------------------------------------- | :----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
     | adoptSigConfig                                     | Boolean | Admin                                                       | When **true**, the Signature Adoption Configuration page is available to account administrators.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             |
     | allowAccessCodeFormat                              | Boolean | Admin                                                       | When **true**, the Access Code Format page is available to account administrators.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
     | allowAccountManagementGranular                     | Boolean | Admin                                                       | When **true**, the Delegated Administration functionality is available to account.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
     | allowBulkSend                                      | Boolean | Admin                                                       | When **true**, the account can set if the bulk send feature can be used.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
     | allowCDWithdraw                                    | Boolean | Admin                                                       | When **true**, signers can withdraw their consent to use electronic signatures.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              |
     | allowConnectSendFinishLater                        | Boolean | Reserved                                                    | Reserved for DocuSign.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
     | allowDataDownload                                  | Boolean | Admin                                                       | When **true**, the account can download envelope data.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
     | allowEnvelopeCorrect                               | Boolean | Admin                                                       | When **true**, the account allows in process envelopes to be corrected.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |
     | allowEnvelopePublishReporting                      | Boolean | Admin                                                       | When **true**, the account can access the Envelope Publish section in Classic DocuSign Experience Account Administration.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
     | allowExpressSignerCertificate                      | Boolean | Admin                                                       | When **true**, senders are allowed to use the DocuSign Express digital signatures.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
     | allowExternalSignaturePad                          | Boolean | Admin                                                       | When **true**, an external signature pad can be used for signing. The signature pad type is set by the externalSignaturePadType property.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
     | allowInPerson                                      | Boolean | SysAdmin                                                    | When **true**, the account allows In Person Signing.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
     | allowMarkup                                        | Boolean | Admin                                                       | When **true**, the document markup feature is enabled for the account.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
     | allowMemberTimezone                                | Boolean | Admin                                                       | When **true**, account users can set their own time zones.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
     | allowMergeFields                                   | Boolean | Admin                                                       | When **true**, the account can use merge fields in conjunction with DocuSign for Salesforce.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
     | allowMultipleSignerAttachments                     | Boolean | Admin                                                       | When **true**, multiple signer attachments are allowed for an envelope.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |
     | allowOfflineSigning                                | Boolean | Admin                                                       | When **true**, the account can use Offline Signing and envelopes signed using offline signing on mobile devices are synchronized with this account. This option and the inSessionEnabled option must both be enabled (**true**) for a caller to use offline signing.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
     | allowOpenTrustSignerCertificate                    | Boolean | Admin                                                       | When **true**, senders are allowed to use the OpenTrust digital signatures.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
     | allowPaymentProcessing                             | Boolean | Admin                                                       | When **true**, the account can access the Payment Processing set up page.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
     | allowPersonalSignerCertificate                     | Boolean | Admin                                                       | When **true**, the account can specify that signers must use personal signer certificates during signing.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
     | allowPrivateSigningGroups                          | Boolean | SysAdmin Read Only                                          | Reserved for DocuSign. This currently returns false in a response. This setting is only shown in the response when listing account settings.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
     | allowReminders                                     | Boolean | Admin                                                       | When **true**, the reminder and expiration functionality is available when sending envelops.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
     | allowSafeBioPharmaSignerCertificate                | Boolean | Admin                                                       | When **true**, senders are allowed to use the SAFE BioPharma digital signatures.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             |
     | allowSharedTabs                                    | Boolean | Admin                                                       | When **true**, the account allows users to share custom tabs (fields). <br>   This setting is only shown when getting account settings. It cannot be modified.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
     | allowSignDocumentFromHomePage                      | Boolean | Admin                                                       | When **true**, the Sign a Document Now button is available on the Home tab.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
     | allowSignatureStamps                               | Boolean | Reserved                                                    | Reserved for DocuSign.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
     | allowSignerReassign                                | Boolean | Admin                                                       | When **true**, the account allows signers to reassign an envelope.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
     | allowSignerReassignOverride                        | Boolean | Admin                                                       | When **true**, the sender has the option override the default account setting for reassigning recipients.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
     | allowSigningGroups                                 | Boolean | SysAdmin Read Only                                          | When **true**, the account can use signing groups. This setting is only shown in the response when listing account settings.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
     | allowTabOrder                                      | Boolean | Admin                                                       | When **true**, the Tab Order field is available for use when creating tabs.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
     | allowWorkspaceComments                             | Boolean | Reserved                                                    | Reserved for DocuSign.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
     | allowWorkspaceCreate                               | Boolean | Admin                                                       | When **true**, account users can create DocuSign Rooms.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |
     | attachCompletedEnvelope                            | Boolean | SysAdmin                                                    | When **true**, envelope documents are included as a PDF file attachment for signing completed emails.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
     | authenticationCheck                                | String  | Admin                                                       | Sets when authentication checks are applied for recipient envelope access. This setting only applies to the following ID checks: <ul> <li>Phone Authentication</li> <li>SMS Authentication</li> <li>Knowledge-Based ID</li> </ul> This setting takes one of the following options: <ul> <li><p><code>initial_access</code>: The authentication check always applies the first time a recipient accesses the documents. Recipients are not asked to authenticate again when they access the documents from the same browser on the same device. If the recipient attempts to access the documents from a different browser or a different device, the recipient must pass authentication again. Once authenticated, that recipient is not challenged again on the new device or browser. The ability for a recipient to skip authentication for documents is limited to documents sent from the same sending account.</p></li> <li><p><code>each_access</code>: Authentication checks apply every time a recipient attempts to access the envelope. However, you can configure the Authentication Expiration setting to allow recipients to skip authentication when they have recently passed authentication by setting a variable timeframe.</p></li> </ul> |
     | autoNavRule                                        | String  | Admin                                                       | The auto-navigation rule for the account. Enumeration values are: <ul> <li><code>off</li></code> <li><code>required_fields</li></code> <li><code>required_and_blank_fields</li></code> <li><code>all_fields</li></code> <li><code>page_then_required_fields</li></code> <li><code>page_then_required_and_blank_fields</li></code> <li><code>page_then_all_fields</li></code> </ul>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
     | bulkSend                                           | Boolean | Admin                                                       | When **true**, the account allows bulk sending of envelopes.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
     | canSelfBrandSend                                   | Boolean | SysAdmin                                                    | When **true**, account administrators can self-brand their sending console through the DocuSign Console.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
     | canSelfBrandSign                                   | Boolean | SysAdmin                                                    | When **true**, account administrators can self-brand their signing console through the DocuSign Console.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
     | conditionalFieldsEnabled                           | Boolean | Admin                                                       | When **true**, conditional fields can be used by the account.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
     | consumerDisclosureFrequency                        | enum    | Admin                                                       | Possible values are: <ul> <li> <code>once</code>: Per account, the supplemental document is displayed once only per userId. </li> <li> <code>always</code>: Per envelope, the supplemental document is displayed once only per userId. </li> <li> <code>each_access</code>: - Per envelope, the supplemental document is displayed once only per recipientId. </li> </ul>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
     | dataFieldRegexEnabled                              | Boolean | Admin                                                       | When **true**, the Regex field is available for tabs with that property.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
     | dataFieldSizeEnabled                               | Boolean | Admin                                                       | When **true**, the maximum number of characters field is available for tabs with that property.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              |
     | dataPopulationScope                                | String  | Admin                                                       | Specifies how data is shared for tabs with the same tabLabel. There are two possible values: <ul> <li> <code>document</code>: Tabs in a document with the same label populate with the same data. </li> <li> <code>envelope</code>: Tabs in all documents in the envelope with the same label populate with the same data. </li> </ul> This setting applies to the following tab types: <ul> <li> Check box </li> <li> Company </li> <li> Data Field </li> <li> Dropdown List </li> <li> Full Name </li> <li> Formula </li> <li> Note </li> <li> Title </li> </ul> Changing this setting affects envelopes that have been sent but not completed.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |
     | disableMobilePushNotifications                     | Boolean | Admin                                                       | When **true**, mobile push notifications are disabled on the account.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
     | disableMobileSending                               | Boolean | Admin                                                       | When **true**, sending from mobile applications is disabled.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
     | disableMultipleSessions                            | Boolean | Admin                                                       | When **true**, account users cannot be logged into multiple sessions at once.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
     | disableUploadSignature                             | Boolean | Admin                                                       | When **true**, signers cannot use the upload signature/initials image option when signing a document.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
     | documentConversionRestrictions                     | String  | Admin                                                       | Sets the account document upload restriction for non-account administrators. There are three possible values: <ul> <li> <code>no_restrictions</code> : there are no restrictions on the type of documents that can be uploaded. </li> <li> <code>allow_pdf_only</code> : only: non-administrators can only upload PDF files. </li> <li> <code>no_upload</code> : Non-administrators cannot upload files. </li> </ul>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
     | enableAutoNav                                      | Boolean | SysAdmin  or EnableAutoNavByDSAdmin is set                  | When **true**, the auto-navigation is enabled for the account.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
     | enableCalculatedFields                             | Boolean | Admin & AllowExpression is set                              | When **true**, this account can use the Calculated Fields feature.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
     | enableDSPro                                        | Boolean | SysAdmin                                                    | When **true**, this account can send and manage envelopes from the DocuSign Desktop Client.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
     | enableEnvelopeStampingByAccountAdmin               | Boolean | SysAdmin or account has EnableEnvelopeStampingByDSAdmin set | When **true**, senders for this account can choose to have the envelope ID stamped in the document margins.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
     | enablePaymentProcessing                            | Boolean | Admin & AllowPaymentProcessing is set.                      | When **true**, Payment Processing is enabled for the account.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
     | enablePowerForm                                    | Boolean | SysAdmin                                                    | When **true**, PowerForm access is enabled for the account.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
     | enablePowerFormDirect                              | Boolean | Admin                                                       | When **true**, direct PowerForms are enabled for the account.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
     | enableRecipientDomainValidation                    | Boolean | Admin                                                       | When **true**, validation on recipient email domains for DocuSign Access feature is enabled.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
     | enableRequireSignOnPaper                           | Boolean | Admin                                                       | When **true**, the account can use the requireSignOnPaper option.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |
     | enableReservedDomain                               | Boolean | SysAdmin                                                    | When **true**, an account administrator can reserve web domain and users.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
     | enableSMSAuthentication                            | Boolean | Admin                                                       | When **true**, the account can use SMS authentication.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
     | enableSendToAgent                                  | Boolean | SysAdmin                                                    | When **true**, this account can use the Agent Recipient Type.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
     | enableSendToIntermediary                           | Boolean | Admin & AllowSendToIntermediary is set                      | When **true**, this account can use the Intermediary Recipient Type.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
     | enableSendToManage                                 | Boolean | Admin                                                       | When **true**, this account can use the Editor Recipient Type.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
     | enableSequentialSigningAPI                         | Boolean | SysAdmin                                                    | When **true**, the account can define the routing order of recipients for envelopes sent using the DocuSign API.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             |
     | enableSequentialSigningUI                          | Boolean | SysAdmin                                                    | When **true**, the account can define the routing order of recipients for envelopes sent using the DocuSign console.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
     | enableSignOnPaper                                  | Boolean | Admin                                                       | When **true**, a user can allow signers to use the sign on paper option.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
     | enableSignOnPaperOverride                          | Boolean | Admin                                                       | When **true**, a user can override the default account setting for the sign on paper option.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
     | enableSignerAttachments                            | Boolean | Admin                                                       | When **true**, a user can request attachments from a signer.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
     | enableTransactionPoint                             | Boolean | SysAdmin                                                    | When **true**, Transaction Point is enabled for this account.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
     | enableVaulting                                     | Boolean | SysAdmin                                                    | When **true**, this account can use electronic vaulting for documents.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
     | enableWorkspaces                                   | Boolean | Admin                                                       | When **true**, DocuSign Rooms is enabled for the account.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
     | envelopeIntegrationAllowed                         | String  | SysAdmin                                                    | Shows the envelope integration rule for the account. <br> Enumeration values are: NotAllowed, Full, IntegrationSendOnly.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
     | envelopeIntegrationEnabled                         | Boolean | Admin & EnvelopeIntegrationAllowed is set                   | When **true**, envelope integration is enabled for the account.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              |
     | envelopeStamplingDefaultValue                      | Boolean | (GET only)                                                  | When **true**, envelopes sent by this account automatically have the envelope ID stamped in the margins, unless the sender selects not to have them stamped.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
     | externalSignaturePadType                           | String  | Admin                                                       | Sets the type of signature pad that can be used. Possible values are: <ul> <li> <code>none</code> </li> <li> <code>topaz</code> </li> <li> <code>e_padv9</code> </li> <li> <code>e_pad_integrisign</code> </li> </ul>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
     | faxOutEnabled                                      | Boolean | Admin                                                       | When **true**, the account can use the fax out feature.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |
     | idCheckExpire                                      | String  | Admin                                                       | Indicates when a user's authentication expires. Possible values are: <ul> <li> <code>always</code> </li> <li> <code>never</code> </li> <li> <code>variable</code>: Use the value in <code>idCheckExpireDays</code> </li> </ul>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
     | idCheckExpireDays                                  | Integer | Admin                                                       | The number of days before a user's authentication expires.  Valid only if the `IDCheckExpire` value is Variable.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             |
     | idCheckRequired                                    | String  | Admin                                                       | Indicates if authentication is required by envelope signers. Possible values are: <ul> <li> <code>always</code> </li> <li> <code>never</code> </li> <li> <code>optional</code>: Authentication is determined by the sender. </li> </ul>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |
     | inPersonIDCheckQuestion                            | String  | Admin                                                       | The default question used by the In Person signing host for an In Person signing session.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
     | inSessionEnabled                                   | Boolean | Admin                                                       | When **true**, the account can use In Session (embedded) and offline signing. This option and the allowOfflineSigning option must both be enabled (**true**) for a caller to use offline signing.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |
     | inSessionSuppressEmails                            | Boolean | Admin                                                       | When **true**, emails are not sent to the embedded recipients on an envelope for the account.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
     | maximumSigningGroups                               | String  | SysAdmin Read Only                                          | The maximum number of signing groups an account can have. The default value for this is 50. This setting is only shown in the response when listing account settings.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
     | maximumUsersPerSigningGroup                        | String  | SysAdmin Read Only                                          | The maximum number of members in a signing group. The default value for this is 50. This setting is only shown in the response when listing account settings.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
     | mobileSessionTimeout                               | String  | Admin                                                       | Sets the amount of idle activity time, in minutes, before a mobile user is automatically logged off of the system. If the setting is 0, then DocuSign mobile application users are never automatically logged off the system. The minimum setting is 1 minute and the maximum setting is 120 minutes. <br> This setting only applies to the DocuSign for iOS v2.8.2 or later mobile app.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
     | phoneAuthRecipientMayProvidePhoneNumber            | Boolean | Admin                                                       | When **true**, senders can select to allow the recipient to provide a phone number for the Phone Authentication process.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
     | pkiSignDownloadedPDFDocs                           | String  | Admin                                                       | The policy for adding a digital certificate to downloaded, printed and emailed documents. Possible values are: <ul> <li> <code>no_sign</code> </li> <li> <code>no_sign_allow_user_override</code> </li> <li> <code>yes_sign</code> </li> </ul>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
     | recipientsCanSignOffline                           | Boolean | Admin                                                       | When **true**, envelopes signed using offline signing on mobile devices are synchronized with this account.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
     | requireDeclineReason                               | Boolean | Admin                                                       | When **true**, recipients that decline to sign an envelope must provide a reason.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |
     | requireSignerCertificateType                       | String  | Admin                                                       | Sets which Digital Signature certificate is required when sending envelopes. There are three possible values: <ul> <li> <code>none</code>: a Digital Signature certificate is not required. </li> <li> <code>docusign_express</code>: signers must use a DocuSign Express certificate. </li> <li> <code>docusign_personal</code>: signers must use a DocuSign personal certificate. </li> <li> <code>open_trust</code>: signers must use an OpenTrust certificate. </li> </ul>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
     | rsaVeridAccountName                                | String  | Admin                                                       | The RSA account name.<br> Modifying this value might inadvertently disrupt your ID Check capability. Ensure you have the correct value before changing this.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
     | rsaVeridPassword                                   | String  | Admin                                                       | The password used with the RSA account.<br>Modifying this value might inadvertently disrupt your ID Check capability. Ensure you have the correct value before changing this.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
     | rsaVeridRuleset                                    | String  | Admin                                                       | The RSA rule set used with the account. <br>Modifying this value might inadvertently disrupt your ID Check capability. Ensure you have the correct value before changing this.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
     | rsaVeridUserId                                     | String  | Admin                                                       | The user ID for the RSA account. <br>Modifying this value might inadvertently disrupt your ID Check capability. Ensure you have the correct value before changing this.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |
     | savingCustomTabsEnabled                            | Boolean | Admin                                                       | When **true**, account users can save custom tabs.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
     | selfSignedRecipientEmailDocument                   | String  | Admin                                                       | Sets how self-signed documents are presented to the email recipients. Possible values are: <ul> <li><code>include_pdf</code>: A PDF of the completed document is attached to the email</li> <li><code>include_link</code>: A secure link to the self-signed documents is included in the email.</li> </ul>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
     | selfSignedRecipientEmailDocumentRights             | Boolean | Admin                                                       | When **true**, account administrators can set the selfSignedRecipientEmailDocument option.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
     | selfSignedRecipientEmailDocumentUserOverride       | Boolean | Admin                                                       | When **true** the selfSignedRecipientEmailDocument userSetting can be set for an individual user.  The userSetting will override the account setting.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
     | selfSignedRecipientEmailDocumentUserOverrideRights | Boolean | Admin                                                       | When **true**, account administrators can set the selfSignedRecipientEmailDocumentOverride option.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
     | sendToCertifiedDeliveryEnabled                     | Boolean | Admin                                                       | When **true**, the Certified Deliveries Recipient type can be used by the account.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
     | senderMustAuthenticateSigning                      | Boolean | Admin                                                       | When **true**, a sender that is also a recipient of an envelope must follow the authentication requirements for the envelope.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
     | sessionTimeout                                     | Integer | Admin                                                       | The amount of idle activity time, in minutes, before a user is automatically logged out of the system. The minimum setting is 20 minutes and the maximum setting is 120 minutes.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             |
     | setRecipEmailLang                                  | Boolean | Admin                                                       | When **true**, senders can set the email languages for each recipient.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
     | setRecipSignLang                                   | Boolean | Admin                                                       | When **true**, senders can set the signing language used for each recipient.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
     | sharedCustomTabsEnabled                            | Boolean | Admin                                                       | When **true**, saved custom tabs can be shared with account users.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
     | signDateFormat                                     | String  | Admin                                                       | The date/time format applied to Date Signed fields for the account.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          |
     | signTimeShowAmPm                                   | Boolean | Admin                                                       | When **true**, AM or PM is shown as part of the time for signDateFormat.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
     | signerAttachCertificateToEnvelopePDF               | Boolean | AccountAdmin & account is selected in AccountSigningSettings| When **true**, the Certificate of Completion is included in the envelope documents PDF when it is downloaded.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
     | signerAttachConcat                                 | Boolean | Admin                                                       | When **true**, signer attachments are added to the parent document that the attachment tab is located on, instead of the default behavior that creates a new document in the envelope for every signer attachment.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
     | signerCanCreateAccount                             | Boolean | AccountAdmin & account is selected in AccountSigningSettings| When **true**, the signer without a DocuSign account can create a DocuSign account after signing.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |
     | signerCanSignOnMobile                              | Boolean | AccountAdmin & account is selected in AccountSigningSettings| When **true**, signers can use the DocuSign mobile signing user interface.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
     | signerInSessionUseEnvelopeCompleteEmail            | Boolean | Admin                                                       | When **true**, an envelope complete email is sent to an In Session (embedded) or offline signer after DocuSign processes the envelope.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
     | signerLoginRequirements                            | String  | Admin                                                       | Sets the Login requirements for the signer. There are four options: <ul> <li> <code>login_not_required</code>: The signer is not required to log on to the system. </li> <li> <code>login_required_if_account_holder</code>: If the signer has a DocuSign account, they must log on to sign the document. </li> <li> <code>login_required_per_session</code>: The sender cannot send an envelope to anyone who does not have a DocuSign account. </li> <li> <code>login_required_per_envelope</code>: The sender cannot send an envelope to anyone who does not have a DocuSign account and the signer must log on the system for each envelope they will sign. </li> </ul> If you use Direct PowerForms or captive/embedded signers, the "Account required" settings are bypassed for those signers. If your workflow requires that the signer have an account, you should not use those methods.                                                                                                                                                                                                                                                                                                                                                           |
     | signerMustHaveAccount                              | Boolean | AccountAdmin & account is selected in AccountSigningSettings| When **true**, senders can only send an envelope to a recipient that has a DocuSign account.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
     | signerMustLoginToSign                              | Boolean | AccountAdmin & account is selected in AccountSigningSettings| When **true**, an envelope signer must log in to the DocuSign console to sign an envelope.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
     | signerShowSecureFieldInitialValues                 | Boolean | AccountAdmin & account is selected in AccountSigningSettings| When **true**, the initial value of all SecureFields is written to the document when sent.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
     | tabDataLabelEnabled                                | Boolean | Admin                                                       | When **true**, senders can change the default tabLabel for tabs.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             |
     | tabLockingEnabled                                  | Boolean | Admin                                                       | When **true**, the locked option is available for tabs with that property.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
     | tabTextFormattingEnabled                           | Boolean | Admin                                                       | When **true**, the formatting options (font type, font size, font color, bold, italic, and underline) are available for tabs with those properties.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          |
     | universalSignatureOptIn                            | Boolean | Reserved                                                    | Reserved for DocuSign.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
     | universalSignatureOptOut                           | Boolean | Reserved                                                    | Reserved for DocuSign.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
     | useAccountLevelEmail                               | Boolean | AccountAdmin & account is selected in AccountSigningSettings| When **true**, the content of notification emails is determined at the account level.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
     | useConsumerDisclosure                              | Boolean | Admin                                                       | When **true**, the account  can use supplemental documents.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
     | usesAPI                                            | Boolean | SysAdmin                                                    | When **true**, the account can use the DocuSign API.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |





     [newAccountDefinition]: #/definitions/newAccountDefinition
     [nameValue]: #/definitions/nameValue

     *
     * @param \Surex\DocuSign\Generated\Model\NewAccountDefinition $newAccountDefinition
     * @param array                                                $queryParameters      {
     *
     *     @var string $preview_billing_plan When set to **true**, creates the account using a preview billing plan.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\AccountsPostAccountsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\NewAccountSummary|\Psr\Http\Message\ResponseInterface
     */
    public function accountsPostAccounts(\Surex\DocuSign\Generated\Model\NewAccountDefinition $newAccountDefinition, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\AccountsPostAccounts($newAccountDefinition, $queryParameters), $fetch);
    }

    /**
     * This closes the specified account. You must be an account admin to close your account. Once closed, an account must be reopened by DocuSign.
     *
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\AccountsDeleteAccountBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function accountsDeleteAccount(string $accountId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\AccountsDeleteAccount($accountId), $fetch);
    }

    /**
     * Retrieves the account information for the specified account.

     **Response**
     The `canUpgrade` property contains is a Boolean that indicates whether the account can be upgraded through the API.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param array  $queryParameters {
     *
     *     @var string $include_account_settings When set to **true**, includes the account settings for the account in the response.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\AccountsGetAccountBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\Accounts|\Psr\Http\Message\ResponseInterface
     */
    public function accountsGetAccount(string $accountId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\AccountsGetAccount($accountId, $queryParameters), $fetch);
    }

    /**
     * Retrieves the list of recurring and usage charges for the account. This can be used to determine the charge structure and usage of charge plan items.

     Privileges required: account administrator
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param array  $queryParameters {
     *
     *     @var string $include_charges specifies which billing charges to return
     Valid values are:

     * envelopes
     * seats

     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\BillingChargesGetAccountBillingChargesBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\BillingChargeResponse|\Psr\Http\Message\ResponseInterface
     */
    public function billingChargesGetAccountBillingCharges(string $accountId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\BillingChargesGetAccountBillingCharges($accountId, $queryParameters), $fetch);
    }

    /**
     * Retrieves a list of invoices for the account. If the from date or to date queries are not specified, the response returns invoices for the last 365 days.

     Privileges required: account administrator
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param array  $queryParameters {
     *
     *     @var string $from_date specifies the date/time of the earliest invoice in the account to retrieve
     *     @var string $to_date Specifies the date/time of the latest invoice in the account to retrieve.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\BillingInvoicesGetBillingInvoicesBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\BillingInvoicesResponse|\Psr\Http\Message\ResponseInterface
     */
    public function billingInvoicesGetBillingInvoices(string $accountId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\BillingInvoicesGetBillingInvoices($accountId, $queryParameters), $fetch);
    }

    /**
     * Retrieves the specified invoice.

     ###### Note: If the `pdfAvailable` property in the response is set to *true*, you can download a PDF version of the invoice. To download the PDF, make the call again and change the value of the `Accept` property in the header to `Accept: application/pdf`.

     Privileges required: account administrator

     The response returns a list of charges and information about the charges. Quantities are usually shown as 'unlimited' or an integer. Amounts are shown in the currency set for the account.

     **Response**
     The following table provides a description of the different `chargeName` property values. The information will grow as more chargeable items are added to the system.

     | chargeName | Description |
     | --- | --- |
     | id_check | ID Check Charge |
     | in_person_signing | In Person Signing charge |
     | envelopes Included | Sent Envelopes for the account |
     | age_verify | Age verification check |
     | ofac | OFAC Check |
     | id_confirm | ID confirmation check |
     | student_authentication | STAN PIN authentication check |
     | wet_sign_fax | Pages for returning signed documents by fax |
     | attachment_fax | Pages for returning attachments by fax |
     | phone_authentication | Phone authentication charge |
     | powerforms | PowerForm envelopes sent |
     | signer_payments | Payment processing charge |
     | outbound_fax | Send by fax charge |
     | bulk_recipient_envelopes | Bulk Recipient Envelopes sent |
     | sms_authentications | SMS authentication charge |
     | saml_authentications | SAML authentication charge |
     | express_signer_certificate | DocuSign Express Certificate charge |
     | personal_signer_certificate | Personal Signer Certificate charge |
     | safe_certificate | SAFE BioPharma Signer Certificate charge |
     | seats | Included active seats charge |
     | open_trust_certificate | OpenTrust Signer Certificate charge |
     *
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $invoiceId
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\BillingInvoicesGetBillingInvoiceBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\Invoices|\Psr\Http\Message\ResponseInterface
     */
    public function billingInvoicesGetBillingInvoice(string $accountId, string $invoiceId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\BillingInvoicesGetBillingInvoice($accountId, $invoiceId), $fetch);
    }

    /**
     * Returns a list past due invoices for the account and notes if payment can be made through the REST API.

     Privileges Required: account administrator
     *
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\BillingInvoicesGetBillingInvoicesPastDueBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\BillingInvoicesSummary|\Psr\Http\Message\ResponseInterface
     */
    public function billingInvoicesGetBillingInvoicesPastDue(string $accountId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\BillingInvoicesGetBillingInvoicesPastDue($accountId), $fetch);
    }

    /**
     * Retrieves a list containing information about one or more payments. If the from date or to date queries are not used, the response returns payment information for the last 365 days.

     Privileges required: account administrator
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param array  $queryParameters {
     *
     *     @var string $from_date specifies the date/time of the earliest payment in the account to retrieve
     *     @var string $to_date Specifies the date/time of the latest payment in the account to retrieve.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\BillingPaymentsGetPaymentListBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\BillingPaymentsResponse|\Psr\Http\Message\ResponseInterface
     */
    public function billingPaymentsGetPaymentList(string $accountId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\BillingPaymentsGetPaymentList($accountId, $queryParameters), $fetch);
    }

    /**
     * Posts a payment to a past due invoice.

     ###### Note: This can only be used if the `paymentAllowed` value for a past due invoice is true. This can be determined calling [ML:GetBillingInvoicesPastDue].

     The response returns information for a single payment, if a payment ID was used in the endpoint, or a list of payments. If the from date or to date queries or payment ID are not used, the response returns payment information for the last 365 days. If the request was for a single payment ID, the `nextUri` and `previousUri` properties are not returned.

     Privileges required: account administrator
     *
     * @param string                                                $accountId             the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\BillingPaymentRequest $billingPaymentRequest
     * @param string                                                $fetch                 Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\BillingPaymentsPostPaymentBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\BillingPaymentResponse|\Psr\Http\Message\ResponseInterface
     */
    public function billingPaymentsPostPayment(string $accountId, \Surex\DocuSign\Generated\Model\BillingPaymentRequest $billingPaymentRequest, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\BillingPaymentsPostPayment($accountId, $billingPaymentRequest), $fetch);
    }

    /**
     * Retrieves the information for a specified payment.

     Privileges required: account administrator
     *
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $paymentId
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\BillingPaymentsGetPaymentBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\Payments|\Psr\Http\Message\ResponseInterface
     */
    public function billingPaymentsGetPayment(string $accountId, string $paymentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\BillingPaymentsGetPayment($accountId, $paymentId), $fetch);
    }

    /**
     * Retrieves the billing plan information for the specified account, including the current billing plan, successor plans, billing address, and billing credit card.

     By default the successor plan and credit card information is included in the response. This information can be excluded from the response by adding the appropriate optional query string with the `setting` set to **false**.

     Response

     The response returns the billing plan information, including the currency code, for the plan. The `billingPlan` and `succesorPlans` property values are the same as those shown in the [ML:Get Billing Plan Details] reference. the `billingAddress` and `creditCardInformation` property values are the same as those shown in the [ML:Update Billing Plan] reference.

     ###### Note: When credit card number information is shown, a mask is applied to the response so that only the last 4 digits of the card number are visible.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param array  $queryParameters {
     *
     *     @var string $include_credit_card_information when set to **true**, excludes credit card information from the response
     *     @var string $include_metadata When set to **true**, the `canUpgrade` and `renewalStatus` properities are included the response and an array of `supportedCountries` property is added to the `billingAddress` information.
     *     @var string $include_successor_plans When set to **true**, excludes successor information from the response.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\BillingPlanGetBillingPlanBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\BillingPlans|\Psr\Http\Message\ResponseInterface
     */
    public function billingPlanGetBillingPlan(string $accountId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\BillingPlanGetBillingPlan($accountId, $queryParameters), $fetch);
    }

    /**
     * Updates the billing plan information, billing address, and credit card information for the specified account.
     *
     * @param string                                                 $accountId              the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\BillingPlanInformation $billingPlanInformation
     * @param array                                                  $queryParameters        {
     *
     *     @var string $preview_billing_plan When set to **true**, updates the account using a preview billing plan.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\BillingPlanPutBillingPlanBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\BillingPlanUpdateResponse|\Psr\Http\Message\ResponseInterface
     */
    public function billingPlanPutBillingPlan(string $accountId, \Surex\DocuSign\Generated\Model\BillingPlanInformation $billingPlanInformation, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\BillingPlanPutBillingPlan($accountId, $billingPlanInformation, $queryParameters), $fetch);
    }

    /**
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\BillingPlanGetCreditCardInfoBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\CreditCardInformation|\Psr\Http\Message\ResponseInterface
     */
    public function billingPlanGetCreditCardInfo(string $accountId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\BillingPlanGetCreditCardInfo($accountId), $fetch);
    }

    /**
     * Reserved: At this time, this endpoint is limited to DocuSign internal use only. Completes the purchase of envelopes for your account. The actual purchase is done as part of an internal workflow interaction with an envelope vendor.
     *
     * @param string                                                        $accountId                     the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\PurchasedEnvelopesInformation $purchasedEnvelopesInformation
     * @param string                                                        $fetch                         Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\PurchasedEnvelopesPutPurchasedEnvelopesBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function purchasedEnvelopesPutPurchasedEnvelopes(string $accountId, \Surex\DocuSign\Generated\Model\PurchasedEnvelopesInformation $purchasedEnvelopesInformation, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\PurchasedEnvelopesPutPurchasedEnvelopes($accountId, $purchasedEnvelopesInformation), $fetch);
    }

    /**
     * Deletes one or more brand profiles from an account. The Account Branding feature (accountSettings properties `canSelfBrandSend` and `canSelfBrandSend`) must be set to **true** to use this call.
     *
     * @param string                                        $accountId     the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\BrandsRequest $brandsRequest
     * @param string                                        $fetch         Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\BrandsDeleteBrandsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\AccountBrands|\Psr\Http\Message\ResponseInterface
     */
    public function brandsDeleteBrands(string $accountId, \Surex\DocuSign\Generated\Model\BrandsRequest $brandsRequest, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\BrandsDeleteBrands($accountId, $brandsRequest), $fetch);
    }

    /**
     * Retrieves the list of brand profiles associated with the account and the default brand profiles. The Account Branding feature (accountSettings properties `canSelfBrandSend` and `canSelfBrandSend`)  must be set to **true** for the account to use this call.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param array  $queryParameters {
     *
     *     @var string $exclude_distributor_brand when set to **true**, excludes distributor brand information from the response set
     *     @var string $include_logos When set to **true**, returns the logos associated with the brand.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\BrandsGetBrandsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\AccountBrands|\Psr\Http\Message\ResponseInterface
     */
    public function brandsGetBrands(string $accountId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\BrandsGetBrands($accountId, $queryParameters), $fetch);
    }

    /**
     * Creates one or more brand profile files for the account. The Account Branding feature (accountSettings properties `canSelfBrandSend` and `canSelfBrandSig`) must be set to **true** for the account to use this call.

     An error is returned if `brandId` property for a brand profile is already set for the account. To upload a new version of an existing brand profile, you must delete the profile and then upload the newer version.

     When brand profile files are being uploaded, they must be combined into one zip file and the `Content-Type` must be `application/zip`.
     *
     * @param string                                $accountId the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\Brand $brand
     * @param string                                $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\BrandsPostBrandsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\AccountBrands|\Psr\Http\Message\ResponseInterface
     */
    public function brandsPostBrands(string $accountId, \Surex\DocuSign\Generated\Model\Brand $brand, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\BrandsPostBrands($accountId, $brand), $fetch);
    }

    /**
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $brandId   the unique identifier of a brand
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\BrandDeleteBrandBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function brandDeleteBrand(string $accountId, string $brandId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\BrandDeleteBrand($accountId, $brandId), $fetch);
    }

    /**
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $brandId         the unique identifier of a brand
     * @param array  $queryParameters {
     *
     *     @var string $include_external_references
     *     @var string $include_logos
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\BrandGetBrandBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\Brand|\Psr\Http\Message\ResponseInterface
     */
    public function brandGetBrand(string $accountId, string $brandId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\BrandGetBrand($accountId, $brandId, $queryParameters), $fetch);
    }

    /**
     * @param string                                $accountId the external account number (int) or account ID Guid
     * @param string                                $brandId   the unique identifier of a brand
     * @param \Surex\DocuSign\Generated\Model\Brand $brand
     * @param string                                $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\BrandPutBrandBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\Brand|\Psr\Http\Message\ResponseInterface
     */
    public function brandPutBrand(string $accountId, string $brandId, \Surex\DocuSign\Generated\Model\Brand $brand, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\BrandPutBrand($accountId, $brandId, $brand), $fetch);
    }

    /**
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $brandId   the unique identifier of a brand
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\BrandExportGetBrandExportFileBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function brandExportGetBrandExportFile(string $accountId, string $brandId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\BrandExportGetBrandExportFile($accountId, $brandId), $fetch);
    }

    /**
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $brandId   the unique identifier of a brand
     * @param string $logoType  one of **Primary**, **Secondary** or **Email**
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\BrandLogoDeleteBrandLogoBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function brandLogoDeleteBrandLogo(string $accountId, string $brandId, string $logoType, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\BrandLogoDeleteBrandLogo($accountId, $brandId, $logoType), $fetch);
    }

    /**
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $brandId   the unique identifier of a brand
     * @param string $logoType  one of **Primary**, **Secondary** or **Email**
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\BrandLogoGetBrandLogoBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function brandLogoGetBrandLogo(string $accountId, string $brandId, string $logoType, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\BrandLogoGetBrandLogo($accountId, $brandId, $logoType), $fetch);
    }

    /**
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $brandId   the unique identifier of a brand
     * @param string $logoType  one of **Primary**, **Secondary** or **Email**
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\BrandLogoPutBrandLogoBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function brandLogoPutBrandLogo(string $accountId, string $brandId, string $logoType, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\BrandLogoPutBrandLogo($accountId, $brandId, $logoType), $fetch);
    }

    /**
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $brandId   the unique identifier of a brand
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\BrandResourcesGetBrandResourcesListBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\BrandResourcesList|\Psr\Http\Message\ResponseInterface
     */
    public function brandResourcesGetBrandResourcesList(string $accountId, string $brandId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\BrandResourcesGetBrandResourcesList($accountId, $brandId), $fetch);
    }

    /**
     * @param string $accountId           the external account number (int) or account ID Guid
     * @param string $brandId             the unique identifier of a brand
     * @param string $resourceContentType
     * @param array  $queryParameters     {
     *
     *     @var string $langcode
     *     @var string $return_master
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\BrandResourcesGetBrandResourcesBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function brandResourcesGetBrandResources(string $accountId, string $brandId, string $resourceContentType, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\BrandResourcesGetBrandResources($accountId, $brandId, $resourceContentType, $queryParameters), $fetch);
    }

    /**
     * @param string $accountId           the external account number (int) or account ID Guid
     * @param string $brandId             the unique identifier of a brand
     * @param string $resourceContentType
     * @param string $fetch               Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\BrandResourcesPutBrandResourcesBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\BrandResources|\Psr\Http\Message\ResponseInterface
     */
    public function brandResourcesPutBrandResources(string $accountId, string $brandId, string $resourceContentType, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\BrandResourcesPutBrandResources($accountId, $brandId, $resourceContentType), $fetch);
    }

    /**
     * Retrieves status information about all the bulk recipient batches. A bulk recipient batch is the set of envelopes sent from a single bulk recipient file. The response includes general information about each bulk recipient batch.

     The response returns information about the envelopes sent with bulk recipient batches, including the `batchId` property, which can be used to retrieve a more detailed status of individual bulk recipient batches.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param array  $queryParameters {
     *
     *     @var string $count The number of results to return. This can be 1 to 20.
     *     @var string $include Specifies which entries are included in the response. Multiple entries can be included by using commas in the query string (example: ?include="failed,queued")

     Valid values:
     * all - Returns all entries. If present, overrides all other query settings. This is the default if no query string is provided.
     * failed - Entries with a failed status.
     * processing - Entries with a processing status.
     * queued - Entries with a queued status.
     * sent - Entries with a sent status.

     *     @var string $start_position The position of the bulk envelope items in the response. This is used for repeated calls, when the number of bulk envelopes returned is too large for one return. The default value is 0.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\BulkEnvelopesGetEnvelopesBulkBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\BulkEnvelopes|\Psr\Http\Message\ResponseInterface
     */
    public function bulkEnvelopesGetEnvelopesBulk(string $accountId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\BulkEnvelopesGetEnvelopesBulk($accountId, $queryParameters), $fetch);
    }

    /**
     * Retrieves the status information of a single bulk recipient batch. A bulk recipient batch is the set of envelopes sent from a single bulk recipient file.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $batchId
     * @param array  $queryParameters {
     *
     *     @var string $count specifies the number of entries to return
     *     @var string $include Specifies which entries are included in the response. Multiple entries can be included by using commas in the query string (example: ?include="failed,queued")

     Valid values:
     * all - Returns all entries. If present, overrides all other query settings. This is the default if no query string is provided.
     * failed - Entries with a failed status.
     * processing - Entries with a processing status.
     * queued - Entries with a queued status.
     * sent - Entries with a sent status.

     *     @var string $start_position Specifies the location in the list of envelopes from which to start.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\BulkEnvelopesGetBulkEnvelopesBatchIdBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\BulkEnvelopeStatus|\Psr\Http\Message\ResponseInterface
     */
    public function bulkEnvelopesGetBulkEnvelopesBatchId(string $accountId, string $batchId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\BulkEnvelopesGetBulkEnvelopesBatchId($accountId, $batchId, $queryParameters), $fetch);
    }

    /**
     * Deletes the signature for one or more captive recipient records; it is primarily used for testing. This provides a way to reset the signature associated with a client user ID so that a new signature can be created the next time the client user ID is used.
     *
     * @param string                                                      $accountId                   the external account number (int) or account ID Guid
     * @param string                                                      $recipientPart
     * @param \Surex\DocuSign\Generated\Model\CaptiveRecipientInformation $captiveRecipientInformation
     * @param string                                                      $fetch                       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\CaptiveRecipientsDeleteCaptiveRecipientsPartBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\CaptiveRecipientInformation|\Psr\Http\Message\ResponseInterface
     */
    public function captiveRecipientsDeleteCaptiveRecipientsPart(string $accountId, string $recipientPart, \Surex\DocuSign\Generated\Model\CaptiveRecipientInformation $captiveRecipientInformation, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\CaptiveRecipientsDeleteCaptiveRecipientsPart($accountId, $recipientPart, $captiveRecipientInformation), $fetch);
    }

    /**
     * @param string                                               $accountId            the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\ChunkedUploadRequest $chunkedUploadRequest
     * @param string                                               $fetch                Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ChunkedUploadsPostChunkedUploadsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\ChunkedUploads|\Psr\Http\Message\ResponseInterface
     */
    public function chunkedUploadsPostChunkedUploads(string $accountId, \Surex\DocuSign\Generated\Model\ChunkedUploadRequest $chunkedUploadRequest, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ChunkedUploadsPostChunkedUploads($accountId, $chunkedUploadRequest), $fetch);
    }

    /**
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $chunkedUploadId
     * @param string $fetch           Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ChunkedUploadsDeleteChunkedUploadBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\ChunkedUploads|\Psr\Http\Message\ResponseInterface
     */
    public function chunkedUploadsDeleteChunkedUpload(string $accountId, string $chunkedUploadId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ChunkedUploadsDeleteChunkedUpload($accountId, $chunkedUploadId), $fetch);
    }

    /**
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $chunkedUploadId
     * @param array  $queryParameters {
     *
     *     @var string $include A comma-separated list of additional template attributes to include in the response. Valid values are: recipients, folders, documents, custom_fields, and notifications.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ChunkedUploadsGetChunkedUploadBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\ChunkedUploads|\Psr\Http\Message\ResponseInterface
     */
    public function chunkedUploadsGetChunkedUpload(string $accountId, string $chunkedUploadId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ChunkedUploadsGetChunkedUpload($accountId, $chunkedUploadId, $queryParameters), $fetch);
    }

    /**
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $chunkedUploadId
     * @param array  $queryParameters {
     *
     *     @var string $action
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ChunkedUploadsPutChunkedUploadsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\ChunkedUploads|\Psr\Http\Message\ResponseInterface
     */
    public function chunkedUploadsPutChunkedUploads(string $accountId, string $chunkedUploadId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ChunkedUploadsPutChunkedUploads($accountId, $chunkedUploadId, $queryParameters), $fetch);
    }

    /**
     * @param string                                               $accountId            the external account number (int) or account ID Guid
     * @param string                                               $chunkedUploadId
     * @param string                                               $chunkedUploadPartSeq
     * @param \Surex\DocuSign\Generated\Model\ChunkedUploadRequest $chunkedUploadRequest
     * @param string                                               $fetch                Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ChunkedUploadsPutChunkedUploadPartBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\ChunkedUploads|\Psr\Http\Message\ResponseInterface
     */
    public function chunkedUploadsPutChunkedUploadPart(string $accountId, string $chunkedUploadId, string $chunkedUploadPartSeq, \Surex\DocuSign\Generated\Model\ChunkedUploadRequest $chunkedUploadRequest, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ChunkedUploadsPutChunkedUploadPart($accountId, $chunkedUploadId, $chunkedUploadPartSeq, $chunkedUploadRequest), $fetch);
    }

    /**
     * Retrieves all the DocuSign Custom Connect definitions for the specified account.

     ###### Note: Connect must be enabled for your account to use this function. This does not retrieve information for Connect configurations for Box, eOriginal, or Salesforce.
     *
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ConnectGetConnectConfigsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\ConnectConfigResults|\Psr\Http\Message\ResponseInterface
     */
    public function connectGetConnectConfigs(string $accountId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ConnectGetConnectConfigs($accountId), $fetch);
    }

    /**
     * Creates a DocuSign Custom Connect definition for your account. DocuSign Connect enables the sending of real-time data updates to external applications. These updates are generated by user transactions as the envelope progresses through actions to completion. The Connect Service provides updated information about the status of these transactions and returns updates that include the actual content of document form fields. Be aware that, these updates might or might not include the document itself. For more information about Connect, see the [ML:DocuSign Connect Service Guide].

     ###### Note: Connect must be enabled for your account to use this function. This cannot be used to set up Connect configurations for Salesforce or eOriginal.
     *
     * @param string                                                $accountId             the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\ConnectConfigurations $connectConfigurations
     * @param string                                                $fetch                 Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ConnectPostConnectConfigurationBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\ConnectConfigurations|\Psr\Http\Message\ResponseInterface
     */
    public function connectPostConnectConfiguration(string $accountId, \Surex\DocuSign\Generated\Model\ConnectConfigurations $connectConfigurations, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ConnectPostConnectConfiguration($accountId, $connectConfigurations), $fetch);
    }

    /**
     * Updates the specified DocuSign Connect configuration in your account.

     ###### Note: Connect must be enabled for your account to use this function. This cannot be used to update Connect configurations for Box, eOriginal, or Salesforce.
     *
     * @param string                                                $accountId             the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\ConnectConfigurations $connectConfigurations
     * @param string                                                $fetch                 Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ConnectPutConnectConfigurationBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\ConnectConfigurations|\Psr\Http\Message\ResponseInterface
     */
    public function connectPutConnectConfiguration(string $accountId, \Surex\DocuSign\Generated\Model\ConnectConfigurations $connectConfigurations, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ConnectPutConnectConfiguration($accountId, $connectConfigurations), $fetch);
    }

    /**
     * Deletes the specified DocuSign Connect configuration.

     ###### Note: Connect must be enabled for your account to use this function.



     *
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $connectId the ID of the custom Connect configuration being accessed
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ConnectDeleteConnectConfigBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function connectDeleteConnectConfig(string $accountId, string $connectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ConnectDeleteConnectConfig($accountId, $connectId), $fetch);
    }

    /**
     * Retrieves the information for the specified DocuSign Connect configuration.

     ###### Note: Connect must be enabled for your account to use this function.

     *
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $connectId the ID of the custom Connect configuration being accessed
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ConnectGetConnectConfigBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\ConnectConfigResults|\Psr\Http\Message\ResponseInterface
     */
    public function connectGetConnectConfig(string $accountId, string $connectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ConnectGetConnectConfig($accountId, $connectId), $fetch);
    }

    /**
     * Returns users from the configured Connect service.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $connectId       the ID of the custom Connect configuration being accessed
     * @param array  $queryParameters {
     *
     *     @var string $count Optional. Number of items to return.

     *     @var string $email_substring filters the returned user records by the email address or a sub-string of email address
     *     @var string $list_included_users
     *     @var string $start_position The position within the total result set from which to start returning values. The value **thumbnail** may be used to return the page image.
     *     @var string $status filters the results by user status
     *     @var string $user_name_substring Filters the user records returned by the user name or a sub-string of user name.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ConnectGetConnectUsersBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\IntegratedUserInfoList|\Psr\Http\Message\ResponseInterface
     */
    public function connectGetConnectUsers(string $accountId, string $connectId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ConnectGetConnectUsers($accountId, $connectId, $queryParameters), $fetch);
    }

    /**
     * Republishes Connect information for the specified envelope.
     *
     * @param string $accountId  the external account number (int) or account ID Guid
     * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $fetch      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ConnectPublishPutConnectRetryByEnvelopeBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\ConnectFailureResults|\Psr\Http\Message\ResponseInterface
     */
    public function connectPublishPutConnectRetryByEnvelope(string $accountId, string $envelopeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ConnectPublishPutConnectRetryByEnvelope($accountId, $envelopeId), $fetch);
    }

    /**
     * Republishes Connect information for the  specified set of envelopes. The primary use is to republish Connect post failures by including envelope IDs for the envelopes that failed to post in the request. The list of envelope IDs that failed to post correctly can be retrieved by calling to [ML:GetConnectLog] retrieve the failure log.
     *
     * @param string                                               $accountId            the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\ConnectFailureFilter $connectFailureFilter
     * @param string                                               $fetch                Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ConnectPublishPutConnectRetryBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\ConnectFailureResults|\Psr\Http\Message\ResponseInterface
     */
    public function connectPublishPutConnectRetry(string $accountId, \Surex\DocuSign\Generated\Model\ConnectFailureFilter $connectFailureFilter, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ConnectPublishPutConnectRetry($accountId, $connectFailureFilter), $fetch);
    }

    /**
     * Retrieves the Connect Failure Log information. It can be used to determine which envelopes failed to post, so a republish request can be created.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param array  $queryParameters {
     *
     *     @var string $from_date Start of the search date range. Only returns templates created on or after this date/time. If no value is specified, there is no limit on the earliest date created.
     *     @var string $to_date End of the search date range. Only returns templates created up to this date/time. If no value is provided, this defaults to the current date.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ConnectFailuresGetConnectLogsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\ConnectEvents|\Psr\Http\Message\ResponseInterface
     */
    public function connectFailuresGetConnectLogs(string $accountId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ConnectFailuresGetConnectLogs($accountId, $queryParameters), $fetch);
    }

    /**
     * Deletes the Connect failure log information for the specified entry.
     *
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $failureId the ID of the failed connect log entry
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ConnectFailuresDeleteConnectFailureLogBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function connectFailuresDeleteConnectFailureLog(string $accountId, string $failureId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ConnectFailuresDeleteConnectFailureLog($accountId, $failureId), $fetch);
    }

    /**
     * Retrieves a list of connect log entries for your account.

     ###### Note: The `enableLog` property in the Connect configuration must be set to **true** to enable logging. If logging is not enabled, then no log entries are recorded.
     *
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ConnectLogDeleteConnectLogsBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function connectLogDeleteConnectLogs(string $accountId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ConnectLogDeleteConnectLogs($accountId), $fetch);
    }

    /**
     * Retrieves a list of connect log entries for your account.

     ###### Note: The `enableLog` setting in the Connect configuration must be set to true to enable logging. If logging is not enabled, then no log entries are recorded.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param array  $queryParameters {
     *
     *     @var string $from_date Start of the search date range. Only returns templates created on or after this date/time. If no value is specified, there is no limit on the earliest date created.
     *     @var string $to_date End of the search date range. Only returns templates created up to this date/time. If no value is provided, this defaults to the current date.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ConnectLogGetConnectLogsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\ConnectEvents|\Psr\Http\Message\ResponseInterface
     */
    public function connectLogGetConnectLogs(string $accountId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ConnectLogGetConnectLogs($accountId, $queryParameters), $fetch);
    }

    /**
     * Deletes a specified entry from the Connect Log.
     *
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $logId     The ID of the connect log entry
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ConnectLogDeleteConnectLogBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function connectLogDeleteConnectLog(string $accountId, string $logId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ConnectLogDeleteConnectLog($accountId, $logId), $fetch);
    }

    /**
     * Retrieves the specified Connect log entry for your account.

     ###### Note: The `enableLog` setting in the Connect configuration must be set to true to enable logging. If logging is not enabled, then no log entries are recorded.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $logId           The ID of the connect log entry
     * @param array  $queryParameters {
     *
     *     @var string $additional_info When true, the connectDebugLog information is included in the response.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ConnectLogGetConnectLogBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\ConnectLog|\Psr\Http\Message\ResponseInterface
     */
    public function connectLogGetConnectLog(string $accountId, string $logId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ConnectLogGetConnectLog($accountId, $logId, $queryParameters), $fetch);
    }

    /**
     * Retrieves the Electronic Record and Signature Disclosure, with HTML formatting, associated with the account. You can use an optional query string to set the language for the disclosure.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param array  $queryParameters {
     *
     *     @var string $langCode Specifies the language used in the response. The supported languages, with the language value shown in parenthesis, are: Arabic (ar), Bulgarian (bg), Czech (cs), Chinese Simplified (zh_CN), Chinese Traditional (zh_TW), Croatian (hr), Danish (da), Dutch (nl), English US (en), English UK (en_GB), Estonian (et), Farsi (fa), Finnish (fi), French (fr), French Canada (fr_CA), German (de), Greek (el), Hebrew (he), Hindi (hi), Hungarian (hu), Bahasa Indonesia (id), Italian (it), Japanese (ja), Korean (ko), Latvian (lv), Lithuanian (lt), Bahasa Melayu (ms), Norwegian (no), Polish (pl), Portuguese (pt), Portuguese Brazil (pt_BR), Romanian (ro), Russian (ru), Serbian (sr), Slovak (sk), Slovenian (sl), Spanish (es),Spanish Latin America (es_MX), Swedish (sv), Thai (th), Turkish (tr), Ukrainian (uk), and Vietnamese (vi).

     Additionally, the value can be set to `browser` to automatically detect the browser language being used by the viewer and display the disclosure in that language.

     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ConsumerDisclosureGetConsumerDisclosureBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\AccountConsumerDisclosures|\Psr\Http\Message\ResponseInterface
     */
    public function consumerDisclosureGetConsumerDisclosure(string $accountId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ConsumerDisclosureGetConsumerDisclosure($accountId, $queryParameters), $fetch);
    }

    /**
     * Retrieves the Electronic Record and Signature Disclosure, with HTML formatting, for the requested envelope recipient. This might be different than the current account disclosure depending on account settings, such as branding, and when the account disclosure was last updated. An optional query string can be included to return the language for the disclosure.
     *
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $langCode  The simple type enumeration the language used in the response. The supported languages, with the language value shown in parenthesis, are:Arabic (ar), Bulgarian (bg), Czech (cs), Chinese Simplified (zh_CN), Chinese Traditional (zh_TW), Croatian (hr), Danish (da), Dutch (nl), English US (en), English UK (en_GB), Estonian (et), Farsi (fa), Finnish (fi), French (fr), French Canada (fr_CA), German (de), Greek (el), Hebrew (he), Hindi (hi), Hungarian (hu), Bahasa Indonesia (id), Italian (it), Japanese (ja), Korean (ko), Latvian (lv), Lithuanian (lt), Bahasa Melayu (ms), Norwegian (no), Polish (pl), Portuguese (pt), Portuguese Brazil (pt_BR), Romanian (ro), Russian (ru), Serbian (sr), Slovak (sk), Slovenian (sl), Spanish (es),Spanish Latin America (es_MX), Swedish (sv), Thai (th), Turkish (tr), Ukrainian (uk) and Vietnamese (vi). Additionally, the value can be set to "browser" to automatically detect the browser language being used by the viewer and display the disclosure in that language.
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ConsumerDisclosureGetConsumerDisclosureLangCodeBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\AccountConsumerDisclosures|\Psr\Http\Message\ResponseInterface
     */
    public function consumerDisclosureGetConsumerDisclosureLangCode(string $accountId, string $langCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ConsumerDisclosureGetConsumerDisclosureLangCode($accountId, $langCode), $fetch);
    }

    /**
     * @param string                                                      $accountId                   the external account number (int) or account ID Guid
     * @param string                                                      $langCode                    The simple type enumeration the language used in the response. The supported languages, with the language value shown in parenthesis, are:Arabic (ar), Bulgarian (bg), Czech (cs), Chinese Simplified (zh_CN), Chinese Traditional (zh_TW), Croatian (hr), Danish (da), Dutch (nl), English US (en), English UK (en_GB), Estonian (et), Farsi (fa), Finnish (fi), French (fr), French Canada (fr_CA), German (de), Greek (el), Hebrew (he), Hindi (hi), Hungarian (hu), Bahasa Indonesia (id), Italian (it), Japanese (ja), Korean (ko), Latvian (lv), Lithuanian (lt), Bahasa Melayu (ms), Norwegian (no), Polish (pl), Portuguese (pt), Portuguese Brazil (pt_BR), Romanian (ro), Russian (ru), Serbian (sr), Slovak (sk), Slovenian (sl), Spanish (es),Spanish Latin America (es_MX), Swedish (sv), Thai (th), Turkish (tr), Ukrainian (uk) and Vietnamese (vi). Additionally, the value can be set to "browser" to automatically detect the browser language being used by the viewer and display the disclosure in that language.
     * @param \Surex\DocuSign\Generated\Model\EnvelopeConsumerDisclosures $envelopeConsumerDisclosures
     * @param array                                                       $queryParameters             {
     *
     *     @var string $include_metadata Reserved for DocuSign.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ConsumerDisclosurePutConsumerDisclosureBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeConsumerDisclosures|\Psr\Http\Message\ResponseInterface
     */
    public function consumerDisclosurePutConsumerDisclosure(string $accountId, string $langCode, \Surex\DocuSign\Generated\Model\EnvelopeConsumerDisclosures $envelopeConsumerDisclosures, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ConsumerDisclosurePutConsumerDisclosure($accountId, $langCode, $envelopeConsumerDisclosures, $queryParameters), $fetch);
    }

    /**
     * @param string                                            $accountId         the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\ContactModRequest $contactModRequest
     * @param string                                            $fetch             Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ContactsDeleteContactsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\ContactUpdateResponse|\Psr\Http\Message\ResponseInterface
     */
    public function contactsDeleteContacts(string $accountId, \Surex\DocuSign\Generated\Model\ContactModRequest $contactModRequest, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ContactsDeleteContacts($accountId, $contactModRequest), $fetch);
    }

    /**
     * @param string                                            $accountId         the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\ContactModRequest $contactModRequest
     * @param string                                            $fetch             Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ContactsPostContactsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\ContactUpdateResponse|\Psr\Http\Message\ResponseInterface
     */
    public function contactsPostContacts(string $accountId, \Surex\DocuSign\Generated\Model\ContactModRequest $contactModRequest, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ContactsPostContacts($accountId, $contactModRequest), $fetch);
    }

    /**
     * @param string                                            $accountId         the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\ContactModRequest $contactModRequest
     * @param string                                            $fetch             Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ContactsPutContactsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\ContactUpdateResponse|\Psr\Http\Message\ResponseInterface
     */
    public function contactsPutContacts(string $accountId, \Surex\DocuSign\Generated\Model\ContactModRequest $contactModRequest, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ContactsPutContacts($accountId, $contactModRequest), $fetch);
    }

    /**
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $contactId the unique identifier of a person in the contacts address book
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ContactsDeleteContactWithIdBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\ContactUpdateResponse|\Psr\Http\Message\ResponseInterface
     */
    public function contactsDeleteContactWithId(string $accountId, string $contactId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ContactsDeleteContactWithId($accountId, $contactId), $fetch);
    }

    /**
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $contactId       the unique identifier of a person in the contacts address book
     * @param array  $queryParameters {
     *
     *     @var string $cloud_provider
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ContactsGetContactByIdBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\ContactGetResponse|\Psr\Http\Message\ResponseInterface
     */
    public function contactsGetContactById(string $accountId, string $contactId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ContactsGetContactById($accountId, $contactId, $queryParameters), $fetch);
    }

    /**
     * Retrieves a list of envelope custom fields associated with the account. You can use these fields in the envelopes for your account to record information about the envelope, help search for envelopes and track information. The envelope custom fields are shown in the Envelope Settings section when a user is creating an envelope in the DocuSign member console. The envelope custom fields are not seen by the envelope recipients.

     There are two types of envelope custom fields, text, and list. A text custom field lets the sender enter the value for the field. The list custom field lets the sender select the value of the field from a list you provide.
     *
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\AccountCustomFieldsGetAccountCustomFieldsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\AccountCustomFields|\Psr\Http\Message\ResponseInterface
     */
    public function accountCustomFieldsGetAccountCustomFields(string $accountId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\AccountCustomFieldsGetAccountCustomFields($accountId), $fetch);
    }

    /**
     * @param string                                      $accountId       the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\CustomField $customField
     * @param array                                       $queryParameters {
     *
     *     @var string $apply_to_templates
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\AccountCustomFieldsPostAccountCustomFieldsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\AccountCustomFields|\Psr\Http\Message\ResponseInterface
     */
    public function accountCustomFieldsPostAccountCustomFields(string $accountId, \Surex\DocuSign\Generated\Model\CustomField $customField, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\AccountCustomFieldsPostAccountCustomFields($accountId, $customField, $queryParameters), $fetch);
    }

    /**
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $customFieldId
     * @param array  $queryParameters {
     *
     *     @var string $apply_to_templates
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\AccountCustomFieldsDeleteAccountCustomFieldsBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function accountCustomFieldsDeleteAccountCustomFields(string $accountId, string $customFieldId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\AccountCustomFieldsDeleteAccountCustomFields($accountId, $customFieldId, $queryParameters), $fetch);
    }

    /**
     * @param string                                      $accountId       the external account number (int) or account ID Guid
     * @param string                                      $customFieldId
     * @param \Surex\DocuSign\Generated\Model\CustomField $customField
     * @param array                                       $queryParameters {
     *
     *     @var string $apply_to_templates
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\AccountCustomFieldsPutAccountCustomFieldsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\AccountCustomFields|\Psr\Http\Message\ResponseInterface
     */
    public function accountCustomFieldsPutAccountCustomFields(string $accountId, string $customFieldId, \Surex\DocuSign\Generated\Model\CustomField $customField, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\AccountCustomFieldsPutAccountCustomFields($accountId, $customFieldId, $customField, $queryParameters), $fetch);
    }

    /**
     * @param string                                                $accountId             the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\EMortgageTransactions $eMortgageTransactions
     * @param string                                                $fetch                 Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\EMortgagePostTransactionsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\PostTransactionsResponse|\Psr\Http\Message\ResponseInterface
     */
    public function eMortgagePostTransactions(string $accountId, \Surex\DocuSign\Generated\Model\EMortgageTransactions $eMortgageTransactions, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\EMortgagePostTransactions($accountId, $eMortgageTransactions), $fetch);
    }

    /**
     * Retrieves a list of envelopes that match your request.
     A large set of optional filters let you filter
     by date,
     by envelope ID,
     or by status codes.

     Your request must include one or more of the following parameters:

     * `from_date`
     * `envelope_ids`
     * `transaction_ids`


     Getting envelope status using `transaction_ids` is useful
     for offline signing situations where it can be used
     determine if an envelope was created or not. It can be used
     for the cases where a network connection was lost, before
     the envelope status could be returned.

     To avoid unnecessary database queries, the DocuSign
     signature platform first checks requests to ensure that the
     filter set supplied does not result in a zero-size response
     before querying the database.

     For example, for a request with a `from_to_status` of
     `delivered` and a current `status` of `created,sent`,
     DocuSign will always return an empty list.
     This is because the request translates to: find the
     envelopes that were delivered between the `from_date` and
     `to_date` dates that have a current status of `created` or
     `sent`. Since an envelope that has been delivered can
     never have a status of `created` or `sent`, a zero-size
     response would be generated.
     In this case, DocuSign does not query the database
     and returns an empty list immediately.


     The following table shows the valid current envelope
     statuses (`status` parameter) for the different status
     qualifiers (`from_to_status` parameter) in the request. If
     the status and status qualifiers in the API request do not
     contain any of the values shown in the Valid Current
     Statuses column, then an empty list is returned.

     Client applications should check that the statuses (`status`
     parameter) they are requesting make sense for a given
     `from_to_status` parameter value.

     | Status Qualifier<br>(`from_to_status`) | Effective Status Qualifier | Valid Current Statuses                                                      |
     | :------------------------------------- | :------------------------- | :-------------------------------------------------------------------------- |
     | any (changed)                          | StatusChanged              | any, created, sent, delivered, signed, completed, declined, voided, deleted |
     | created                                | Created                    | any, created, sent, delivered, signed, completed, declined, voided, deleted |
     | sent                                   | Sent                       | any, sent, delivered, signed, completed, declined, voided, deleted          |
     | delivered                              | StatusChanged              | any, delivered, signed, completed, declined, voided, deleted                |
     | signed                                 | StatusChanged              | any, signed, completed, declined, voided, deleted                           |
     | completed                              | Completed                  | any, completed, declined, voided, deleted                                   |
     | declined                               | StatusChanged              | any, declined, voided, deleted                                              |
     | timedout<br>always return zero results | StatusChanged              | any, voided, deleted                                                        |
     | voided                                 | Voided                     | any, voided, deleted                                                        |
     | deleted                                | StatusChanged              | any, deleted                                                                |

     ## Extraneous results

     In some cases, a request for a specific envelope status will
     include envelopes with additional statuses. For example, in
     a request with a `from_date` of 2017-01-01, a `to_date` of
     2017-01-07 and the status qualifier (`from_to_status`) set
     to `delivered`, the response set might contain envelopes
     that were created during that time period, but not delivered
     during the time period. As a workaround, check the envelope
     status values in the result set as needed.

     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param array  $queryParameters {
     *
     *     @var string $ac_status Specifies the Authoritative Copy Status for the envelopes. The possible values are: Unknown, Original, Transferred, AuthoritativeCopy, AuthoritativeCopyExportPending, AuthoritativeCopyExported, DepositPending, Deposited, DepositedEO, or DepositFailed.
     *     @var string $block reserved for DocuSign

     *     @var string $count Optional. Number of items to return.

     *     @var string $custom_field Optional. Specifies a envelope custom field name and value searched for in the envelopes. Format: `custom_envelope_field_name=desired_value`

     *     @var string $email Limit results to envelopes
     *     @var string $envelope_ids comma separated list of `envelopeId` values
     *     @var string $exclude reserved for DocuSign

     *     @var string $folder_ids reserved for DocuSign

     *     @var string $folder_types reserved for DocuSign

     *     @var string $from_date Specifies the date and time
     *     @var string $from_to_status The status value checked for in the `from_date` to `to_date` time period.

     *     @var string $include reserved for DocuSign

     *     @var string $include_purge_information
     *     @var string $intersecting_folder_ids reserved for DocuSign

     *     @var string $order reserved for DocuSign

     *     @var string $order_by reserved for DocuSign

     *     @var string $powerformids reserved for DocuSign

     *     @var string $search_text reserved for DocuSign

     *     @var string $start_position reserved for DocuSign

     *     @var string $status A comma-separated list of current envelope statuses to included in the response. Possible values are:

     * completed
     * created
     * declined
     * deleted
     * delivered
     * processing
     * sent
     * signed
     * timedout
     * voided

     *     @var string $to_date Specifies the date and time
     *     @var string $transaction_ids a comma-separated list of envelope transaction IDs
     *     @var string $user_filter reserved for DocuSign

     *     @var string $user_id reserved for DocuSign

     *     @var string $user_name Limit results to envelopes
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\EnvelopesGetEnvelopesBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopesInformation|\Psr\Http\Message\ResponseInterface
     */
    public function envelopesGetEnvelopes(string $accountId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\EnvelopesGetEnvelopes($accountId, $queryParameters), $fetch);
    }

    /**
     * Creates and sends an envelope or creates a draft envelope.
     Envelopes are fundamental resources in the DocuSign platform
     and are used in a variety of ways.

     With this method you can:

     * Create and send an envelope
     with documents, recipients, and tabs.
     * Create and send an envelope from a template.
     * Create and send an envelope from
     a combination of documents and templates.
     * Create a draft envelope.

     There are many ways to use envelopes.
     You can create and send an envelope
     with a single API request,
     or you can use several API requests
     to create, populate, and send envelopes.

     When you use this method
     to create and send an envelope
     in a single request,
     the following parameters are required:

     | Parameter      | Description |
     | :--------      | :---------- |
     | `status`       | Set to `sent` to send the envelope to recipients.<br>Set to `created` (or don't set at all) to save the envelope as a draft. |
     | `emailSubject` | The subject of the email used to send the envelope. |
     | `documents`    | The documents to be signed. |
     | `recipients`   | The email addresses of the envelope recipients. |

     If you are creating an envelope
     to be sent later,
     save it as a draft
     by either setting `status`
     to `created` or leaving it unset.
     For instance, you can create a draft envelope
     with documents only.
     Using additional API requests,
     you can add the recipients
     and send the envelope
     in subsequent API requests.



     ## Feature Availability

     Not all DocuSign features are available to all accounts.
     Use DocuSign Admin to check and enable feature availability.
     You can also check feature availability via the web application.
     For example, if the web application allows you to send an envelope with SMS authentication,
     then you can use the same feature through the API.

     ## Sending Envelopes

     Documents can be included
     with the Envelopes:create method,
     or a template can include documents.
     Documents can be added by using
     a multipart/form request
     or by using the `documentBase64` property of the [`document` object][documentDef].

     ### Adding Documents to Requests

     There are two ways to add documents to your envelopes:

     1. Use the `documents` property of the envelope definition.
     2. Send this request as a multipart/form-data `POST`
     with documents added through additional request parts.

     Using the `documents` property is the simpler option,
     but the request may be quite large
     due to the base64 encoding.
     This example shows how to add a document
     using this method.

     ```json
     {
     "status": "sent",
     "emailSubject": "Example of one recipient, type signer",
     "documents": [{
     "documentId": "1",
     "name": "contract.pdf",
     "documentBase64": "base64 document bytes...",
     }],
     "recipients": {
     "signers": [{
     "name": "Lisa Simpson",
     "email": "lisa@email.com",
     "recipientId": "1",
     "routingOrder": "1",
     "tabs": {
     "signHereTabs": [{
     "xPosition": "150",
     "yPosition": "200",
     "documentId": "1",
     "pageNumber": "1"
     }],
     }
     }]
     }
     }
     ```

     If you are using a multipart/form-data `POST` request,
     you do not have to base64 encode your documents.
     You place the envelope definition in one part
     and the document bytes in another:

     ```
     --AAA
     Content-Type: application/json
     Content-Disposition: form-data

     <ENVELOPE DEFINITION GOES HERE>
     --AAA
     Content-Type:application/pdf
     Content-Disposition: file; filename="contract.pdf"; documentid=1

     <DOCUMENT BYTES GO HERE>
     --AAA--
     ```

     ### Using Supplemental Documents

     Supplemental documents are supporting materials
     such as disclosures and other informational documents
     that need to accompany a document sent for signature.
     These supplemental documents are available to the signer
     to view and acknowledge,
     without making the envelope too large or confusing for signers.

     Supplemental documents use the following properties in the
     [`document` object][documentDef].

     | Name                  | Type    | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          |
     | :-------------------- | :------ | :--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
     | includeInDownload     | Boolean | When set to **true**, the document is included in the combined document download. The default value is **true**.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
     | display               | String  | This string sets the display and behavior properties of the document during signing. The possible values are:<br>`<ul><li><p><code>modal</code><br>The document is shown as a supplement action strip and can be viewed, downloaded, or printed in a modal window. This is the recommended value for supplemental documents.</p></li><li><p><code>download</code><br>The document is shown as a supplement action strip and can be viewed, downloaded, or printed in a new browser window.</p></li><li><p><code>inline</code><br>This value is not used with supplemental documents, but is the default value for all other documents. The document is shown in the normal signing window.</li></ul> |
     | signerMustAcknowledge | String  | Sets how the signer interacts with the supplemental document. The possible values are:<br><ul><li><p><code>no_interaction</code><br>No recipient action is required.</p></li><li><p><code>view</code><br>The recipient is required to view the document.</p></li><li><p><code>accept</code><br>The recipient is required to accept the document by selecting accept during signing, but is not required to view the document.</p></li><li><p><code>view_accept</code><br>The recipient is required to view and accept the document.</p></li></ul>                                                                                                                                                    |


     [viewtab]: /esign/restapi/Envelopes/EnvelopeRecipientTabs/#view-tab

     The [View][viewtab] and Approve tabs
     are used to set the interactions
     for individual recipients.
     The View tab includes a `required` property
     that requires the recipient to view the supplemental document.
     If the View tab `required` property is not set,
     the recipient can, but is not required to,
     view the supplemental document.

     To use the View and Approve tabs for
     supplemental documents,
     the document `display` property
     must be set to `modal` or `download`.

     The actions that the recipient must take
     depend on the value
     of the `signerMustAcknowledge` document property
     and
     whether the signer is assigned
     View or Approve tabs
     on the document.

     To set the interactions for individual recipients,
     set the `signerMustAcknowledge` property
     to `no_interaction`,
     then add View and Approve tabs
     on the appropriate document for the recipient.


     The action that a signer must take
     depends on the value of the
     `signerMustAcknowledge` document property,
     whether the signer has an Approve tab,
     and the value of the
     `required` property of the View tab.
     The following table
     shows the actions a recipient must take
     for different combinations
     of these tabs and properties.



     | Document `signerMustAcknowledge`property  | Approve Tab | View Tab `required` property  | Recipient is required to ...  |
     | :----                                     | :----       | :----                         | :----                         |
     | no_interaction                            | No          |  --                           |  Take no action               |
     | no_interaction                            | No          |  false                        |  Take no action               |
     | no_interaction                            | No          |  true                         |  View                         |
     | no_interaction                            | Yes         |  false                        |  Accept                       |
     | no_interaction                            | Yes         |  true                         |  View and Accept              |
     | view                                      | No          |  --                           |  View                         |
     | view                                      | Yes         |  --                           |  View and Accept              |
     | accept                                    | --          |  false                        |  Accept                       |
     | accept                                    | --          |  true                         |  View and Accept              |
     | view_accept                               | --          |  --                           |  View and Accept              |




     ### Recipient Types

     An [`envelopeDefinition` object][envelopeDef] is used as the method's body.
     Envelope recipients can be defined in the envelope or in templates.
     The `envelopeDefinition` object's `recipients` property
     is an [`EnvelopeRecipients` resource object][envelopeRecipientsDef].
     It includes arrays of the seven types of recipients defined by DocuSign:

     | Recipient type                      | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
     | :---------------------------------- | :-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
     | [Agents][agentDef]                  | An agent recipient can add name and email information for recipients that appear after the agent in routing order.                                                                                                                                                                                                                                                                                                                                                                                  |
     | [Carbon Copies][ccDef]              | Carbon copy recipients get a copy of the envelope but don't need to sign, initial, date or add information to any of the documents. This type of recipient can be used in any routing order. Carbon copy recipients receive their copy of the envelope when the envelope reaches the recipient's order in the process flow and when the envelope is completed.                                                                                                                                      |
     | [Certified Deliveries][certfiedDef] | Certified delivery recipients must receive the completed documents for the envelope to be completed. However, they don't need to sign, initial, date or add information to any of the documents.                                                                                                                                                                                                                                                                                                    |
     | [Editors][editorDef]                | Editors have the same management and access rights for the envelope as the sender. They can make changes to the envelope as if they were using the Advanced Correct feature. This recipient can add name and email information, add or change the routing order and set authentication options for the remaining recipients. Additionally, this recipient can edit signature/initial tabs and data fields for the remaining recipients. The recipient must have a DocuSign account to be an editor. |
     | [In-Person Signers][inPersonDef]    | An in-person recipient is a DocuSign user, acting as a Signing Host, who is in the same physical location as the signer.                                                                                                                                                                                                                                                                                                                                                                            |
     | [Intermediaries][intermediaryDef]   | An intermediary is a recipient who can, but is not required to, add name and email information for recipients at the same or subsequent level in the routing order, unless subsequent agents, editors or intermediaries are added.                                                                                                                                                                                                                                                                  |
     | [Signers][signerDef]                | A signer is a recipient who must sign, initial, date, or add data to form fields on the documents in the envelope.                                                                                                                                                                                                                                                                                                                                                                                  |


     Additional information about the different types of recipients
     is available from the [`EnvelopeRecipients` resource page][envelopeRecipientsRes]
     and from the Developer Center [Recipients][devecenterrecipients] topic.



     ### Tabs

     Tabs (also referred to as tags and fields in the web application),
     can be defined in the `envelopeDefinition`,
     in templates, by transforming PDF Form Fields,
     or by using Composite Templates (see below).

     The `inPersonSigner`, and `signer` recipient objects
     include a `tabs` property.
     It is an [`EnvelopeRecipientTabs` resource object][envRecipientTabsDef]
     that includes arrays of the different tab types available.
     See the [`EnvelopeRecipientTabs` resource][envRecipientTabsRes] for more information.


     ## Using Templates

     Envelopes use specific people or groups as recipients.
     Templates can specify a role, eg `account_manager.`
     When a template is used in an envelope,
     the roles must be replaced with specific people or groups.

     When you create an envelope using a `templateId`,
     the different recipient type objects
     within the [`EnvelopeRecipients` property][envelopeRecipientsDef]
     are used to assign recipients to the template's roles via the `roleName` property.
     The recipient objects can also override settings
     that were specified in the template,
     and set values for tab fields that were defined in the template.

     ### Message Lock

     When a template is added or applied to an envelope,
     and the template has a locked email subject and message,
     that subject and message are used for the envelope
     and cannot be changed
     even if another locked template
     is subsequently added or applied to the envelope.
     The `messageLock` property is used to lock the email subject and message.

     If an email subject or message is entered
     before adding or applying a template with `messageLock` set to **true**,
     the email subject and message is overwritten
     with the locked email subject and message from the template.

     ## Envelope Status

     The status of sent envelopes
     can be determined through the DocuSign webhook system
     or by polling.
     Webhooks are highly recommended:
     they provide your application with the quickest updates when an envelope's
     status changes.
     DocuSign limits polling to once every 15 minutes or less
     frequently.
     See [API Rules and Limits][apirules] for more information and examples.


     When a webhook is used,
     DocuSign calls your application via the URL you provide, with a notification XML message.

     See the
     [Webhook recipe](https://www.docusign.com/developer-center/recipes/webhook-status)
     for examples and live demos of using webhooks.

     ## Webhook Options

     The two webhook options,
     `eventNotification` and Connect,
     use the same notification mechanism and message formats.
     Use `eventNotification` to create a webhook
     for a specific envelope sent via the API.
     Connect webhooks can be used
     for any envelope sent from an account,
     from any user, from any client.
     The [Connect guide][connectGuide] discusses the webhook notification message format.

     ### eventNotification Webhooks

     The Envelopes:create method
     includes an optional [`eventNotification` object][eventNotificationDef] property
     that adds a webhook to the envelope.
     `eventNotification` webhooks are available for all DocuSign accounts with API access.

     ### Connect Webhooks

     Connect can be used to create a webhook
     for all envelopes sent by all users in an account,
     either through the API or through other DocuSign clients (web, mobile, etc).
     Connect configurations are independent of specific envelopes.
     A Connect configuration includes a filter
     that may be used to limit the webhook to specific users, envelope statuses, etc.

     You can create and manage Connect configurations with
     the [ConnectConfigurations resource][connectConfigurationsRes].
     Configurations can also be created and managed from DocuSign Admin
     accessed by selecting **Go to Admin** from the menu
     next to your picture on the DocuSign web app.
     See the **Connect** topic in the **Integrations** section of DocuSign Admin.
     For repeatability, and to minimize support questions,
     creating Connect configurations via the API is recommended, especially for ISVs.

     Connect is available for some DocuSign account types.
     Please contact DocuSign Sales for more information.

     ## Composite Templates

     The Composite Templates feature,
     like [compositing in film production](https://en.wikipedia.org/wiki/Compositing),
     enables you to overlay
     document,
     recipient,
     and tab definitions
     from multiple sources,
     including PDF Form Field definitions,
     templates defined on the server,
     and more.

     Each Composite Template consists of optional elements: server templates,
     inline templates, PDF Metadata templates, and documents.

     * The Composite Template ID is an optional element used to identify the
     composite template. It is used as a reference when adding document
     object information via a multipart HTTP message. If used, the document
     content-disposition must include the `compositeTemplateId` to which the
     document should be added. If `compositeTemplateId` is not specified in
     the content-disposition, the document is applied based on the
     `documentId` only. If no document object is specified, the composite
     template inherits the first document.

     * Server Templates are server-side templates stored on the DocuSign
     platform. If supplied, they are overlaid into the envelope in the order
     of their Sequence value.

     * Inline Templates provide a container to add documents, recipients,
     tabs, and custom fields. If inline templates are supplied, they are
     overlaid into the envelope in the order of their Sequence value.

     * Document objects are optional structures that provide a container to
     pass in a document or form. If this object is not included, the
     composite template inherits the *first* document it finds from a server
     template or inline template, starting with the lowest sequence value.

     PDF Form objects are only transformed from the document object. DocuSign
     does not derive PDF form properties from server templates or inline
     templates. To instruct DocuSign to transform fields from the PDF form,
     set `transformPdfFields` to **true** for the document.

     See [PDF Form Field Transformation](#pdf-form-field-transformation)
     for more information about process.

     * PDF Metadata Templates provide a container to embed design-time
     template information into a PDF document. DocuSign uses this information
     when processing the Envelope. This convention allows the document to
     carry the signing instructions with it, so that less information needs
     to be provided at run-time through an inline template or synchronized
     with an external structure like a server template. PDF Metadata
     templates are stored in the Metadata layer of a PDF in accordance with
     Acrobat's XMP specification. DocuSign will only find PDF Metadata
     templates inside documents passed in the Document object (see below). If
     supplied, the PDF metadata template will be overlaid into the envelope
     in the order of its Sequence value.

     ### Compositing the Definitions

     Each Composite Template adds a new document and templates overlay into
     the envelope. For each Composite Template these rules are applied:

     * Templates are overlaid in the order of their Sequence value.
     * If Document is not passed into the Composite Template's `document`
     field, the *first* template's document (based on the template's Sequence
     value) is used.
     * Last in wins in all cases except for the document (i.e. envelope
     information, recipient information, secure field information). There is
     no special casing.

     For example, if you want higher security on a tab,
     then that needs to be specified in a later template (by sequence number)
     than where the tab is included.
     If you want higher security on a role recipient,
     then it needs to be in a later template
     than where that role recipient is specified.

     * Recipient matching is based on Recipient Role and Routing Order. If
     there are matches, the recipient information is merged together. A final
     pass is done on all Composite Templates, after all template overlays
     have been applied, to collapse recipients with the same email, username
     and routing order. This prevents having the same recipients at the same
     routing order.

     * If you specify in a template that a recipient is locked, once that
     recipient is overlaid the recipient attributes can no longer be changed.
     The only items that can be changed for the recipient in this case are
     the email, username, access code and IDCheckInformationInput.

     * Tab matching is based on Tab Labels, Tab Types and Documents. If a Tab
     Label matches but the Document is not supplied, the Tab is overlaid for
     all the Documents.

     For example, if you have a simple inline template with only one tab in
     it with a label and a value, the Signature, Initial, Company, Envelope
     ID, User Name tabs will only be matched and collapsed if they fall in
     the exact same X and Y locations.

     * `roleName` and `tabLabel` matching is case sensitive.

     * The `defaultRecipient` property enables you to specify which recipient
     the tabs generated from a PDF form are mapped to. You can also set PDF
     form generated tabs to a recipient other than the default recipient by
     specifying the mapping of the tab label that is created to one of the
     template recipients.

     * You can use `tabLabel` wild carding to map a series of tabs from the PDF
     form. To use this you must end a tab label with "\*" and then the system
     matches tabs that start with the label.

     * If no `defaultRecipient` is specified, tabs must be explicitly mapped
     to recipients in order to be generated from the form. Unmapped form
     objects will not be generated into their DocuSign equivalents. (In the
     case of Signature/Initials, the tabs will be disregarded entirely; in
     the case of pdf text fields, the field data will be flattened on the
     Envelope document, but there will not be a corresponding DocuSign data
     tab.)

     ### Including the Document Content for Composite Templates

     Document content can be supplied inline, using the `documentBase64` or
     can be included in a multipart HTTP message. If a multipart message is
     used and there are multiple Composite Templates, the document
     content-disposition can include the `compositeTemplateId` to which the
     document should be added. Using the `compositeTemplateId` sets which
     documents are associated with particular composite templates. An example
     of this usage is:

     ```
     --5cd3320a-5aac-4453-b3a4-cbb52a4cba5d
     Content-Type: application/pdf
     Content-Disposition: file; filename="eula.pdf"; documentId=1; compositeTemplateId="1"
     Content-Transfer-Encoding: base64
     ```

     ### PDF Form Field Transformation

     Only the following PDF Form FieldTypes are transformed to DocuSign
     tabs:

     * CheckBox
     * DateTime
     * ListBox
     * Numeric
     * Password
     * Radio
     * Signature,
     * Text

     Field Properties that are transformed:

     * Read Only
     * Required
     * Max Length
     * Positions
     * Initial Data

     When transforming a PDF Form Digital Signature Field, the following rules apply.
     Any other PDF Form Digital Signature Field will be transformed to a DocuSign Signature tab


     | If the PDF Field Name contains                              | Then the DocuSign tab will be |
     | :---------------------------------------------------------- | :---------------------------- |
     | DocuSignSignHere or<br> eSignSignHere                       | Signature                     |
     | DocuSignSignHereOptional or<br> eSignSignHereOptional       | Optional Signature            |
     | DocuSignInitialHere or<br> eSignInitialHere                 | Initials                      |
     | DocuSignInitialHereOptional or<br> eSignInitialHereOptional | Optional Initials             |


     When transforming PDF Form Text Fields, the following rules apply.
     Any other PDF Form Text Field will be transformed to a DocuSign data (text) tab.


     | If the PDF Field Name contains                                        | Then the DocuSign tab will be |
     | :-------------------------------------------------------------------- | :---------------------------- |
     | DocuSignSignHere or<br> eSignSignHere                                 | Signature                     |
     | DocuSignSignHereOptional or<br> eSignSignHereOptional                 | Optional Signature            |
     | DocuSignInitialHere or<br> eSignInitialHere                           | Initials                      |
     | DocuSignInitialHereOptional or<br> eSignInitialHereOptional           | Optional Initials             |
     | DocuSignEnvelopeID or<br> eSignEnvelopeID                             | EnvelopeID                    |
     | DocuSignCompany or<br> eSignCompany                                   | Company                       |
     | DocuSignDateSigned or<br> eSignDateSigned                             | Date Signed                   |
     | DocuSignTitle or<br> eSignTitle                                       | Title                         |
     | DocuSignFullName or<br> eSignFullName                                 | Full Name                     |
     | DocuSignSignerAttachmentOptional or<br> eSignSignerAttachmentOptional | Optional Signer Attachment    |


     PDF Form Field Names that include `DocuSignIgnoreTransform`
     or `eSignIgnoreTransform` will not be transformed.

     PDF Form Date fields that include `DocuSignDateSigned` or `eSignDateSigned`
     will be transformed
     to Date Signed fields.

     ## Template Email Subject Merge Fields

     This feature enables you to insert recipient name and email address
     merge fields into the email subject line when creating or sending from a
     template.

     The merge fields, based on the recipient's `roleName`, are added to the
     `emailSubject` when the template is created or when the template is used
     to create an envelope. After a template sender adds the name and email
     information for the recipient and sends the envelope, the recipient
     information is automatically merged into the appropriate fields in the
     email subject line.

     Both the sender and the recipients will see the information in the email
     subject line for any emails associated with the template. This provides
     an easy way for senders to organize their envelope emails without having
     to open an envelope to check the recipient.

     If merging the recipient information into the subject line causes the
     subject line to exceed 100 characters, then any characters over the 100
     character limit are not included in the subject line. For cases where
     the recipient name or email is expected to be long, you should consider
     placing the merge field at the start of the email subject.

     * To add a recipient's name in the subject line add the following text
     in the `emailSubject` when creating the template or when sending an
     envelope from a template:

     `[[<roleName>_UserName]]`

     Example:

     `"emailSubject":"[[Signer 1_UserName]], Please sign this NDA"`

     * To add a recipient's email address in the subject line add the
     following text in the emailSubject when creating the template or when
     sending an envelope from a template:

     `[[<roleName>_Email]]`

     Example:

     `"emailSubject":"[[Signer 1_Email]], Please sign this NDA"`

     In both cases `<roleName>` is the recipient's `roleName` in the template.

     For cases where another recipient (such as an Agent, Editor, or
     Intermediary recipient) is entering the name and email information for
     the recipient included in the email subject, then
     `[[<roleName>_UserName]]` or `[[<roleName>_Email]]` is shown in the
     email subject.

     ## Branding an Envelope

     The following rules are used to determine the `brandId` used in an envelope:

     * If a `brandId` is specified in the envelope or template
     and that `brandId` is available to the account,
     that brand is used in the envelope.
     * If more than one template is used in an envelope,
     and more than one `brandId` is specified,
     the first `brandId` specified is used throughout the envelope.
     * In cases where no brand is specified,
     and the sender belongs to a group:
     - If there is only one brand associated with the group,
     then that brand is used in the envelope.
     - Otherwise, the account's default signing brand is used.
     * For envelopes that do not meet any of the previous criteria,
     the account's default signing brand is used for the envelope.


     ## BCC Email Address Feature

     The BCC Email address feature
     is designed to provide a copy
     of all email communications for external archiving purposes.
     DocuSign recommends that envelopes sent using the BCC for Email Archive feature,
     including the BCC Email Override option,
     include additional signer authentication options.

     Do **not** use this feature
     to send a copy of the envelope
     to a recipient who does not need to sign.
     Use a Carbon Copy or Certified Delivery Recipient type instead.

     ## Merge Recipient Roles for Draft Envelopes

     When an envelope with multiple templates is sent,
     the recipients from the templates are merged according to the template roles,
     and empty recipients are removed.
     When creating an envelope with multiple templates,
     but not sending it (keeping it in a created state),
     duplicate recipients are not merged,
     which could leave duplicate recipients in the envelope.

     To prevent this,
     the query parameter `merge_roles_on_draft`
     should be added when posting a draft envelope (`status` is `created`)
     with multiple templates.
     Doing this will merge template roles and remove empty recipients.


     DocuSign recommends that the `merge_roles_on_draft` query
     parameter be used any time you are creating an envelope with
     multiple templates and keeping it in draft (`status` is `created`) status.


     [agentDef]:                 #/definitions/agent
     [apirules]:                 /esign/guide/appendix/resource_limits.html#api-rules-and-limits
     [ccDef]:                     #/definitions/carbonCopy
     [certfiedDef]:               #/definitions/certifiedDelivery
     [connectConfigurationsRes]: /esign/restapi/Connect/ConnectConfigurations/
     [connectGuide]:             https://www.docusign.com/supportdocs/pdf/connect-guide.pdf
     [devecenterrecipients]:     https://www.docusign.com/developer-center/explore/features/recipients
     [documentDef]:               #/definitions/document
     [editorDef]:                 #/definitions/editor
     [envelopeDef]:               #/definitions/envelopeDefinition
     [envelopeRecipientsDef]:     #/definitions/EnvelopeRecipients
     [envelopeRecipientsRes]:    /esign/restapi/Envelopes/EnvelopeRecipients/
     [envRecipientTabsDef]:       #/definitions/EnvelopeRecipientTabs
     [envRecipientTabsRes]:      /esign/restapi/Envelopes/EnvelopeRecipientTabs/
     [eventNotificationDef]:      #/definitions/eventNotification
     [inPersonDef]:               #/definitions/inPersonSigner
     [intermediaryDef]:           #/definitions/intermediary
     [signerDef]:                 #/definitions/signer

     *
     * @param string                                             $accountId          the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\EnvelopeDefinition $envelopeDefinition
     * @param array                                              $queryParameters    {
     *
     *     @var string $cdse_mode reserved for DocuSign

     *     @var string $completed_documents_only reserved for DocuSign

     *     @var string $merge_roles_on_draft When set to **true**, template roles will be merged, and empty recipients will be removed. This parameter applies when you create a draft envelope with multiple templates. (To create a draft envelope, the `status` field is set to `created`.)

     ###### Note: DocuSign recommends that this parameter should be set to **true** whenever you create a draft envelope with multiple templates.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\EnvelopesPostEnvelopesBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeSummary|\Psr\Http\Message\ResponseInterface
     */
    public function envelopesPostEnvelopes(string $accountId, \Surex\DocuSign\Generated\Model\EnvelopeDefinition $envelopeDefinition, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\EnvelopesPostEnvelopes($accountId, $envelopeDefinition, $queryParameters), $fetch);
    }

    /**
     * Retrieves the overall status for the specified envelope.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $envelopeId      The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param array  $queryParameters {
     *
     *     @var string $advanced_update when true, envelope information can be added or modified
     *     @var string $include Reserved for DocuSign.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\EnvelopesGetEnvelopeBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\Envelopes|\Psr\Http\Message\ResponseInterface
     */
    public function envelopesGetEnvelope(string $accountId, string $envelopeId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\EnvelopesGetEnvelope($accountId, $envelopeId, $queryParameters), $fetch);
    }

    /**
     * The Put Envelopes endpoint provides the following functionality:.

     * Sends the specified single draft envelope.
     Add {"status":"sent"} to the request body to send the envelope.

     * Voids the specified in-process envelope.
     Add {"status":"voided", "voidedReason":"The reason for voiding the envelope"} to the request body to void the envelope.

     * Replaces the current email subject and message for a draft envelope.
     Add {"emailSubject":"subject",  "emailBlurb":"message"}  to the request body to modify the subject and message.

     * Place the envelope documents and envelope metadata in a purge queue so that this information is removed from the DocuSign system.
     Add {"purgeState":"purge type"} to the request body.

     *Additional information on purging documents*

     The purge request can only be used for completed envelopes that are not marked as the authoritative copy. The requesting user must have permission to purge documents and must be the sender (the requesting user can act as the sender using Send On Behalf Of).

     ###### Note: If you have set the Document Retention policy on your account, envelope documents are automatically placed in the purge queue and the warning emails are sent at the end of the retention period.
     ###### Note: You can set the Document Retention policy in the Classic DocuSign Experience by specifying the number of days to retain documents.
     ###### Note: Setting a Document Retention policy is the same as setting a schedule for purging documents.

     When the purge request is initiated the envelope documents, or documents and envelope metadata, are placed in a purge queue for deletion in 14 days. A warning email notification is sent to the sender and recipients associated with the envelope, notifying them that the envelope documents will be deleted in 14 days and providing a link to the documents. A second email is sent 7 days later with the same message. At the end of the 14-day period, the envelope documents are deleted from the system.

     If `purgeState="documents_queued"` is used in the request, then only the documents are deleted and any corresponding attachments and tabs remain in the DocuSign system. If `purgeState= "documents_and_metadata_queued"` is used in the request, then the documents, attachments, and tabs are deleted.
     *
     * @param string                                    $accountId       the external account number (int) or account ID Guid
     * @param string                                    $envelopeId      The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Generated\Model\Envelopes $envelopes
     * @param array                                     $queryParameters {
     *
     *     @var string $advanced_update when set to **true**, allows the caller to update recipients, tabs, custom fields, notification, email settings and other envelope attributes
     *     @var string $resend_envelope When set to **true**, sends the specified envelope again.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\EnvelopesPutEnvelopeBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeUpdateSummary|\Psr\Http\Message\ResponseInterface
     */
    public function envelopesPutEnvelope(string $accountId, string $envelopeId, \Surex\DocuSign\Generated\Model\Envelopes $envelopes, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\EnvelopesPutEnvelope($accountId, $envelopeId, $envelopes, $queryParameters), $fetch);
    }

    /**
     * @param string                                                     $accountId                  the external account number (int) or account ID Guid
     * @param string                                                     $envelopeId                 The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Generated\Model\EnvelopeAttachmentsRequest $envelopeAttachmentsRequest
     * @param string                                                     $fetch                      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\AttachmentsDeleteAttachmentsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeAttachmentsResult|\Psr\Http\Message\ResponseInterface
     */
    public function attachmentsDeleteAttachments(string $accountId, string $envelopeId, \Surex\DocuSign\Generated\Model\EnvelopeAttachmentsRequest $envelopeAttachmentsRequest, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\AttachmentsDeleteAttachments($accountId, $envelopeId, $envelopeAttachmentsRequest), $fetch);
    }

    /**
     * @param string $accountId  the external account number (int) or account ID Guid
     * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $fetch      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\AttachmentsGetAttachmentsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeAttachmentsResult|\Psr\Http\Message\ResponseInterface
     */
    public function attachmentsGetAttachments(string $accountId, string $envelopeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\AttachmentsGetAttachments($accountId, $envelopeId), $fetch);
    }

    /**
     * @param string                                                     $accountId                  the external account number (int) or account ID Guid
     * @param string                                                     $envelopeId                 The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Generated\Model\EnvelopeAttachmentsRequest $envelopeAttachmentsRequest
     * @param string                                                     $fetch                      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\AttachmentsPutAttachmentsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeAttachmentsResult|\Psr\Http\Message\ResponseInterface
     */
    public function attachmentsPutAttachments(string $accountId, string $envelopeId, \Surex\DocuSign\Generated\Model\EnvelopeAttachmentsRequest $envelopeAttachmentsRequest, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\AttachmentsPutAttachments($accountId, $envelopeId, $envelopeAttachmentsRequest), $fetch);
    }

    /**
     * @param string $accountId    the external account number (int) or account ID Guid
     * @param string $attachmentId
     * @param string $envelopeId   The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $fetch        Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\AttachmentsGetAttachmentBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function attachmentsGetAttachment(string $accountId, string $attachmentId, string $envelopeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\AttachmentsGetAttachment($accountId, $attachmentId, $envelopeId), $fetch);
    }

    /**
     * @param string                                     $accountId    the external account number (int) or account ID Guid
     * @param string                                     $attachmentId
     * @param string                                     $envelopeId   The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Generated\Model\Attachment $attachment
     * @param string                                     $fetch        Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\AttachmentsPutAttachmentBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeAttachmentsResult|\Psr\Http\Message\ResponseInterface
     */
    public function attachmentsPutAttachment(string $accountId, string $attachmentId, string $envelopeId, \Surex\DocuSign\Generated\Model\Attachment $attachment, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\AttachmentsPutAttachment($accountId, $attachmentId, $envelopeId, $attachment), $fetch);
    }

    /**
     * Gets the envelope audit events for the specified envelope.
     *
     * @param string $accountId  the external account number (int) or account ID Guid
     * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $fetch      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\AuditEventsGetAuditEventsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeAuditEventResponse|\Psr\Http\Message\ResponseInterface
     */
    public function auditEventsGetAuditEvents(string $accountId, string $envelopeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\AuditEventsGetAuditEvents($accountId, $envelopeId), $fetch);
    }

    /**
     * Deletes envelope custom fields for draft and in-process envelopes.
     *
     * @param string                                               $accountId            the external account number (int) or account ID Guid
     * @param string                                               $envelopeId           The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Generated\Model\EnvelopeCustomFields $envelopeCustomFields
     * @param string                                               $fetch                Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\CustomFieldsDeleteCustomFieldsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeCustomFields|\Psr\Http\Message\ResponseInterface
     */
    public function customFieldsDeleteCustomFields(string $accountId, string $envelopeId, \Surex\DocuSign\Generated\Model\EnvelopeCustomFields $envelopeCustomFields, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\CustomFieldsDeleteCustomFields($accountId, $envelopeId, $envelopeCustomFields), $fetch);
    }

    /**
     * Retrieves the custom field information for the specified envelope. You can use these fields in the envelopes for your account to record information about the envelope, help search for envelopes, and track information. The envelope custom fields are shown in the Envelope Settings section when a user is creating an envelope in the DocuSign member console. The envelope custom fields are not seen by the envelope recipients.

     There are two types of envelope custom fields, text, and list. A text custom field lets the sender enter the value for the field. With a list custom field, the sender selects the value of the field from a pre-made list.
     *
     * @param string $accountId  the external account number (int) or account ID Guid
     * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $fetch      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\CustomFieldsGetCustomFieldsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\CustomFieldsEnvelope|\Psr\Http\Message\ResponseInterface
     */
    public function customFieldsGetCustomFields(string $accountId, string $envelopeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\CustomFieldsGetCustomFields($accountId, $envelopeId), $fetch);
    }

    /**
     * Updates the envelope custom fields for draft and in-process envelopes.

     Each custom field used in an envelope must have a unique name.
     *
     * @param string                                               $accountId            the external account number (int) or account ID Guid
     * @param string                                               $envelopeId           The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Generated\Model\EnvelopeCustomFields $envelopeCustomFields
     * @param string                                               $fetch                Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\CustomFieldsPostCustomFieldsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeCustomFields|\Psr\Http\Message\ResponseInterface
     */
    public function customFieldsPostCustomFields(string $accountId, string $envelopeId, \Surex\DocuSign\Generated\Model\EnvelopeCustomFields $envelopeCustomFields, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\CustomFieldsPostCustomFields($accountId, $envelopeId, $envelopeCustomFields), $fetch);
    }

    /**
     * Updates the envelope custom fields in draft and in-process envelopes.

     Each custom field used in an envelope must have a unique name.

     *
     * @param string                                               $accountId            the external account number (int) or account ID Guid
     * @param string                                               $envelopeId           The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Generated\Model\EnvelopeCustomFields $envelopeCustomFields
     * @param string                                               $fetch                Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\CustomFieldsPutCustomFieldsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeCustomFields|\Psr\Http\Message\ResponseInterface
     */
    public function customFieldsPutCustomFields(string $accountId, string $envelopeId, \Surex\DocuSign\Generated\Model\EnvelopeCustomFields $envelopeCustomFields, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\CustomFieldsPutCustomFields($accountId, $envelopeId, $envelopeCustomFields), $fetch);
    }

    /**
     * Deletes one or more documents from an existing draft envelope.
     *
     * @param string                                             $accountId          the external account number (int) or account ID Guid
     * @param string                                             $envelopeId         The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Generated\Model\EnvelopeDefinition $envelopeDefinition
     * @param string                                             $fetch              Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\DocumentsDeleteDocumentsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeDocuments|\Psr\Http\Message\ResponseInterface
     */
    public function documentsDeleteDocuments(string $accountId, string $envelopeId, \Surex\DocuSign\Generated\Model\EnvelopeDefinition $envelopeDefinition, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\DocumentsDeleteDocuments($accountId, $envelopeId, $envelopeDefinition), $fetch);
    }

    /**
     * Retrieves a list of documents associated with the specified envelope.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $envelopeId      The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param array  $queryParameters {
     *
     *     @var string $include_metadata Reserved for DocuSign.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\DocumentsGetDocumentsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeDocuments|\Psr\Http\Message\ResponseInterface
     */
    public function documentsGetDocuments(string $accountId, string $envelopeId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\DocumentsGetDocuments($accountId, $envelopeId, $queryParameters), $fetch);
    }

    /**
     * Adds one or more documents to an existing envelope document.
     *
     * @param string                                             $accountId          the external account number (int) or account ID Guid
     * @param string                                             $envelopeId         The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Generated\Model\EnvelopeDefinition $envelopeDefinition
     * @param array                                              $queryParameters    {
     *
     *     @var string $apply_document_fields When **true**, document fields
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\DocumentsPutDocumentsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeDocuments|\Psr\Http\Message\ResponseInterface
     */
    public function documentsPutDocuments(string $accountId, string $envelopeId, \Surex\DocuSign\Generated\Model\EnvelopeDefinition $envelopeDefinition, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\DocumentsPutDocuments($accountId, $envelopeId, $envelopeDefinition, $queryParameters), $fetch);
    }

    /**
     * Retrieves the specified document from the envelope. If the account has the Highlight Data Changes feature enabled, there is an option to request that any changes in the envelope be highlighted.

     The `{documentID}` parameter takes two special values:

     | Value      | Description |
     | :---       | :--- |
     | `combined` | Retrieve a PDF that contains the combined content of all documents and the certificate. |
     | `archive`  | Retrieve a ZIP archive that contains all of the PDF documents, the certificate, and any .WAV files used for voice authentication. |

     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $documentId      the ID of the document being accessed
     * @param string $envelopeId      The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param array  $queryParameters {
     *
     *     @var string $certificate when set to **false**, the envelope signing certificate is removed from the download
     *     @var string $encoding
     *     @var string $encrypt When set to **true**, the PDF bytes returned in the response are encrypted for all the key managers configured on your DocuSign account. The documents can be decrypted with the KeyManager Decrypt Document API.
     *     @var string $language Specifies the language for the Certificate of Completion in the response. The supported languages, with the language value shown in parenthesis, are: Chinese Simplified (zh_CN), , Chinese Traditional (zh_TW), Dutch (nl), English US (en), French (fr), German (de), Italian (it), Japanese (ja), Korean (ko), Portuguese (pt), Portuguese (Brazil) (pt_BR), Russian (ru), Spanish (es).
     *     @var string $recipient_id
     *     @var string $show_changes When set to **true**, any changed fields for the returned PDF are highlighted in yellow and optional signatures or initials outlined in red.
     *     @var string $watermark When set to **true**, the account has the watermark feature enabled, and the envelope is not complete, the watermark for the account is added to the PDF documents. This option can remove the watermark.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\DocumentsGetDocumentBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function documentsGetDocument(string $accountId, string $documentId, string $envelopeId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\DocumentsGetDocument($accountId, $documentId, $envelopeId, $queryParameters), $fetch);
    }

    /**
     * Adds a document to an existing draft envelope.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $documentId      the ID of the document being accessed
     * @param string $envelopeId      The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param array  $queryParameters {
     *
     *     @var string $apply_document_fields When **true**, document fields
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\DocumentsPutDocumentBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function documentsPutDocument(string $accountId, string $documentId, string $envelopeId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\DocumentsPutDocument($accountId, $documentId, $envelopeId, $queryParameters), $fetch);
    }

    /**
     * Deletes custom document fields from an existing envelope document.
     *
     * @param string                                                 $accountId              the external account number (int) or account ID Guid
     * @param string                                                 $documentId             the ID of the document being accessed
     * @param string                                                 $envelopeId             The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Generated\Model\EnvelopeDocumentFields $envelopeDocumentFields
     * @param string                                                 $fetch                  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\DocumentFieldsDeleteDocumentFieldsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeDocumentFields|\Psr\Http\Message\ResponseInterface
     */
    public function documentFieldsDeleteDocumentFields(string $accountId, string $documentId, string $envelopeId, \Surex\DocuSign\Generated\Model\EnvelopeDocumentFields $envelopeDocumentFields, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\DocumentFieldsDeleteDocumentFields($accountId, $documentId, $envelopeId, $envelopeDocumentFields), $fetch);
    }

    /**
     * Retrieves the custom document field information from an existing envelope document.
     *
     * @param string $accountId  the external account number (int) or account ID Guid
     * @param string $documentId the ID of the document being accessed
     * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $fetch      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\DocumentFieldsGetDocumentFieldsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeDocumentFields|\Psr\Http\Message\ResponseInterface
     */
    public function documentFieldsGetDocumentFields(string $accountId, string $documentId, string $envelopeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\DocumentFieldsGetDocumentFields($accountId, $documentId, $envelopeId), $fetch);
    }

    /**
     * Creates custom document fields in an existing envelope document.
     *
     * @param string                                                 $accountId              the external account number (int) or account ID Guid
     * @param string                                                 $documentId             the ID of the document being accessed
     * @param string                                                 $envelopeId             The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Generated\Model\EnvelopeDocumentFields $envelopeDocumentFields
     * @param string                                                 $fetch                  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\DocumentFieldsPostDocumentFieldsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeDocumentFields|\Psr\Http\Message\ResponseInterface
     */
    public function documentFieldsPostDocumentFields(string $accountId, string $documentId, string $envelopeId, \Surex\DocuSign\Generated\Model\EnvelopeDocumentFields $envelopeDocumentFields, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\DocumentFieldsPostDocumentFields($accountId, $documentId, $envelopeId, $envelopeDocumentFields), $fetch);
    }

    /**
     * Updates existing custom document fields in an existing envelope document.
     *
     * @param string                                                 $accountId              the external account number (int) or account ID Guid
     * @param string                                                 $documentId             the ID of the document being accessed
     * @param string                                                 $envelopeId             The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Generated\Model\EnvelopeDocumentFields $envelopeDocumentFields
     * @param string                                                 $fetch                  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\DocumentFieldsPutDocumentFieldsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeDocumentFields|\Psr\Http\Message\ResponseInterface
     */
    public function documentFieldsPutDocumentFields(string $accountId, string $documentId, string $envelopeId, \Surex\DocuSign\Generated\Model\EnvelopeDocumentFields $envelopeDocumentFields, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\DocumentFieldsPutDocumentFields($accountId, $documentId, $envelopeId, $envelopeDocumentFields), $fetch);
    }

    /**
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $documentId      the ID of the document being accessed
     * @param string $envelopeId      The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param array  $queryParameters {
     *
     *     @var string $count the maximum number of results to be returned by this request
     *     @var string $dpi Number of dots per inch for the resulting image. The default if not used is 94. The range is 1-310.
     *     @var string $max_height sets the maximum height (in pixels) of the returned image
     *     @var string $max_width sets the maximum width (in pixels) of the returned image
     *     @var string $nocache
     *     @var string $show_changes
     *     @var string $start_position The position within the total result set from which to start returning values. The value **thumbnail** may be used to return the page image.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\PagesGetPageImagesBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\PageImages|\Psr\Http\Message\ResponseInterface
     */
    public function pagesGetPageImages(string $accountId, string $documentId, string $envelopeId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\PagesGetPageImages($accountId, $documentId, $envelopeId, $queryParameters), $fetch);
    }

    /**
     * Deletes a page from a document in an envelope based on the page number.
     *
     * @param string $accountId  the external account number (int) or account ID Guid
     * @param string $documentId the ID of the document being accessed
     * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $pageNumber the page number being accessed
     * @param string $fetch      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\PagesDeletePageBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function pagesDeletePage(string $accountId, string $documentId, string $envelopeId, string $pageNumber, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\PagesDeletePage($accountId, $documentId, $envelopeId, $pageNumber), $fetch);
    }

    /**
     * Retrieves a page image for display from the specified envelope.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $documentId      the ID of the document being accessed
     * @param string $envelopeId      The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $pageNumber      the page number being accessed
     * @param array  $queryParameters {
     *
     *     @var string $dpi sets the dpi for the image
     *     @var string $max_height Sets the maximum height for the page image in pixels. The dpi is recalculated based on this setting.
     *     @var string $max_width Sets the maximum width for the page image in pixels. The dpi is recalculated based on this setting.
     *     @var string $show_changes
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\PagesGetPageImageBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function pagesGetPageImage(string $accountId, string $documentId, string $envelopeId, string $pageNumber, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\PagesGetPageImage($accountId, $documentId, $envelopeId, $pageNumber, $queryParameters), $fetch);
    }

    /**
     * Rotates page image from an envelope for display. The page image can be rotated to the left or right.
     *
     * @param string                                      $accountId   the external account number (int) or account ID Guid
     * @param string                                      $documentId  the ID of the document being accessed
     * @param string                                      $envelopeId  The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string                                      $pageNumber  the page number being accessed
     * @param \Surex\DocuSign\Generated\Model\PageRequest $pageRequest
     * @param string                                      $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\PagesPutPageImageBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function pagesPutPageImage(string $accountId, string $documentId, string $envelopeId, string $pageNumber, \Surex\DocuSign\Generated\Model\PageRequest $pageRequest, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\PagesPutPageImage($accountId, $documentId, $envelopeId, $pageNumber, $pageRequest), $fetch);
    }

    /**
     * @param string $accountId  the external account number (int) or account ID Guid
     * @param string $documentId the ID of the document being accessed
     * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $pageNumber the page number being accessed
     * @param string $fetch      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\TabsGetPageTabsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeDocumentTabs|\Psr\Http\Message\ResponseInterface
     */
    public function tabsGetPageTabs(string $accountId, string $documentId, string $envelopeId, string $pageNumber, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\TabsGetPageTabs($accountId, $documentId, $envelopeId, $pageNumber), $fetch);
    }

    /**
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $documentId      the ID of the document being accessed
     * @param string $envelopeId      The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param array  $queryParameters {
     *
     *     @var string $page_numbers
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\TabsGetDocumentTabsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeDocumentTabs|\Psr\Http\Message\ResponseInterface
     */
    public function tabsGetDocumentTabs(string $accountId, string $documentId, string $envelopeId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\TabsGetDocumentTabs($accountId, $documentId, $envelopeId, $queryParameters), $fetch);
    }

    /**
     * Retrieves the templates associated with a document in the specified envelope.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $documentId      the ID of the document being accessed
     * @param string $envelopeId      The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param array  $queryParameters {
     *
     *     @var string $include A comma-separated list
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\TemplatesGetDocumentTemplatesBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeTemplates|\Psr\Http\Message\ResponseInterface
     */
    public function templatesGetDocumentTemplates(string $accountId, string $documentId, string $envelopeId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\TemplatesGetDocumentTemplates($accountId, $documentId, $envelopeId, $queryParameters), $fetch);
    }

    /**
     * Adds templates to a document in the specified envelope.
     *
     * @param string                                               $accountId            the external account number (int) or account ID Guid
     * @param string                                               $documentId           the ID of the document being accessed
     * @param string                                               $envelopeId           The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Generated\Model\DocumentTemplateList $documentTemplateList
     * @param string                                               $fetch                Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\TemplatesPostDocumentTemplatesBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\DocumentTemplateList|\Psr\Http\Message\ResponseInterface
     */
    public function templatesPostDocumentTemplates(string $accountId, string $documentId, string $envelopeId, \Surex\DocuSign\Generated\Model\DocumentTemplateList $documentTemplateList, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\TemplatesPostDocumentTemplates($accountId, $documentId, $envelopeId, $documentTemplateList), $fetch);
    }

    /**
     * Deletes the specified template from a document in an existing envelope.
     *
     * @param string $accountId  the external account number (int) or account ID Guid
     * @param string $documentId the ID of the document being accessed
     * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $templateId the ID of the template being accessed
     * @param string $fetch      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\TemplatesDeleteDocumentTemplatesBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function templatesDeleteDocumentTemplates(string $accountId, string $documentId, string $envelopeId, string $templateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\TemplatesDeleteDocumentTemplates($accountId, $documentId, $envelopeId, $templateId), $fetch);
    }

    /**
     * Deletes all existing email override settings for the envelope. If you want to delete an individual email override setting, use the PUT and set the value to an empty string. Note that deleting email settings will only affect email communications that occur after the deletion and the normal account email settings are used for future email communications.
     *
     * @param string $accountId  the external account number (int) or account ID Guid
     * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $fetch      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\EmailSettingsDeleteEmailSettingsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeEmailSettings|\Psr\Http\Message\ResponseInterface
     */
    public function emailSettingsDeleteEmailSettings(string $accountId, string $envelopeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\EmailSettingsDeleteEmailSettings($accountId, $envelopeId), $fetch);
    }

    /**
     * Retrieves the email override settings for the specified envelope.
     *
     * @param string $accountId  the external account number (int) or account ID Guid
     * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $fetch      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\EmailSettingsGetEmailSettingsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeEmailSettings|\Psr\Http\Message\ResponseInterface
     */
    public function emailSettingsGetEmailSettings(string $accountId, string $envelopeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\EmailSettingsGetEmailSettings($accountId, $envelopeId), $fetch);
    }

    /**
     * Adds email override settings, changing the email address to reply to an email address, name, or the BCC for email archive information, for the envelope. Note that adding email settings will only affect email communications that occur after the addition was made.

     ### Important: The BCC Email address feature is designed to provide a copy of all email communications for external archiving purposes. DocuSign recommends that envelopes sent using the BCC for Email Archive feature, including the BCC Email Override option, include additional signer authentication options. To send a copy of the envelope to a recipient who does not need to sign, use a Carbon Copies or Certified Deliveries Recipient Type.
     *
     * @param string                                                $accountId             the external account number (int) or account ID Guid
     * @param string                                                $envelopeId            The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Generated\Model\EnvelopeEmailSettings $envelopeEmailSettings
     * @param string                                                $fetch                 Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\EmailSettingsPostEmailSettingsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeEmailSettings|\Psr\Http\Message\ResponseInterface
     */
    public function emailSettingsPostEmailSettings(string $accountId, string $envelopeId, \Surex\DocuSign\Generated\Model\EnvelopeEmailSettings $envelopeEmailSettings, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\EmailSettingsPostEmailSettings($accountId, $envelopeId, $envelopeEmailSettings), $fetch);
    }

    /**
     * Updates the existing email override settings for the specified envelope. Note that modifying email settings will only affect email communications that occur after the modification was made.

     This can also be used to delete an individual email override setting by using an empty string for the value to be deleted.
     *
     * @param string                                                $accountId             the external account number (int) or account ID Guid
     * @param string                                                $envelopeId            The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Generated\Model\EnvelopeEmailSettings $envelopeEmailSettings
     * @param string                                                $fetch                 Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\EmailSettingsPutEmailSettingsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeEmailSettings|\Psr\Http\Message\ResponseInterface
     */
    public function emailSettingsPutEmailSettings(string $accountId, string $envelopeId, \Surex\DocuSign\Generated\Model\EnvelopeEmailSettings $envelopeEmailSettings, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\EmailSettingsPutEmailSettings($accountId, $envelopeId, $envelopeEmailSettings), $fetch);
    }

    /**
     * @param string $accountId  the external account number (int) or account ID Guid
     * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $fetch      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\FormDataGetFormDataBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeFormData|\Psr\Http\Message\ResponseInterface
     */
    public function formDataGetFormData(string $accountId, string $envelopeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\FormDataGetFormData($accountId, $envelopeId), $fetch);
    }

    /**
     * Deletes the lock from the specified envelope. The `X-DocuSign-Edit` header must be included in the request.
     *
     * @param string $accountId  the external account number (int) or account ID Guid
     * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $fetch      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\LockDeleteEnvelopeLockBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeLocks|\Psr\Http\Message\ResponseInterface
     */
    public function lockDeleteEnvelopeLock(string $accountId, string $envelopeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\LockDeleteEnvelopeLock($accountId, $envelopeId), $fetch);
    }

    /**
     * Retrieves general information about the envelope lock.

     If the call is made by the locked by user and the request has the same integrator key as original, then the `X-DocuSign-Edit` header and additional lock information is included in the response. This allows users to recover a lost editing session token and the `X-DocuSign-Edit` header.
     *
     * @param string $accountId  the external account number (int) or account ID Guid
     * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $fetch      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\LockGetEnvelopeLockBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeLocks|\Psr\Http\Message\ResponseInterface
     */
    public function lockGetEnvelopeLock(string $accountId, string $envelopeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\LockGetEnvelopeLock($accountId, $envelopeId), $fetch);
    }

    /**
     * Locks the specified envelope, and sets the time until the lock expires, to prevent other users or recipients from accessing and changing the envelope.

     ###### Note: Users must have envelope locking capability enabled to use this function (userSetting `canLockEnvelopes` must be  set to true for the user).
     *
     * @param string                                      $accountId   the external account number (int) or account ID Guid
     * @param string                                      $envelopeId  The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Generated\Model\LockRequest $lockRequest
     * @param string                                      $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\LockPostEnvelopeLockBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeLocks|\Psr\Http\Message\ResponseInterface
     */
    public function lockPostEnvelopeLock(string $accountId, string $envelopeId, \Surex\DocuSign\Generated\Model\LockRequest $lockRequest, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\LockPostEnvelopeLock($accountId, $envelopeId, $lockRequest), $fetch);
    }

    /**
     * Updates the lock duration time or update the `lockedByApp` property information for the specified envelope. The user and integrator key must match the user specified by the `lockByUser` property and integrator key information and the `X-DocuSign-Edit` header must be included or an error will be generated.
     *
     * @param string                                      $accountId   the external account number (int) or account ID Guid
     * @param string                                      $envelopeId  The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Generated\Model\LockRequest $lockRequest
     * @param string                                      $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\LockPutEnvelopeLockBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeLocks|\Psr\Http\Message\ResponseInterface
     */
    public function lockPutEnvelopeLock(string $accountId, string $envelopeId, \Surex\DocuSign\Generated\Model\LockRequest $lockRequest, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\LockPutEnvelopeLock($accountId, $envelopeId, $lockRequest), $fetch);
    }

    /**
     * Retrieves the envelope notification, reminders and expirations, information for an existing envelope.
     *
     * @param string $accountId  the external account number (int) or account ID Guid
     * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $fetch      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\NotificationGetEnvelopesEnvelopeIdNotificationBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\Notification|\Psr\Http\Message\ResponseInterface
     */
    public function notificationGetEnvelopesEnvelopeIdNotification(string $accountId, string $envelopeId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\NotificationGetEnvelopesEnvelopeIdNotification($accountId, $envelopeId), $fetch);
    }

    /**
     * @param string                                                      $accountId                   the external account number (int) or account ID Guid
     * @param string                                                      $envelopeId                  The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Generated\Model\EnvelopeNotificationRequest $envelopeNotificationRequest
     * @param string                                                      $fetch                       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\NotificationPutEnvelopesEnvelopeIdNotificationBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\Notification|\Psr\Http\Message\ResponseInterface
     */
    public function notificationPutEnvelopesEnvelopeIdNotification(string $accountId, string $envelopeId, \Surex\DocuSign\Generated\Model\EnvelopeNotificationRequest $envelopeNotificationRequest, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\NotificationPutEnvelopesEnvelopeIdNotification($accountId, $envelopeId, $envelopeNotificationRequest), $fetch);
    }

    /**
     * Deletes one or more recipients from a draft or sent envelope. Recipients to be deleted are listed in the request, with the `recipientId` being used as the key for deleting recipients.

     If the envelope is `In Process`, meaning that it has been sent and has not  been completed or voided, recipients that have completed their actions cannot be deleted.
     *
     * @param string                                             $accountId          the external account number (int) or account ID Guid
     * @param string                                             $envelopeId         The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Generated\Model\EnvelopeRecipients $envelopeRecipients
     * @param string                                             $fetch              Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsDeleteRecipientsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeRecipients|\Psr\Http\Message\ResponseInterface
     */
    public function recipientsDeleteRecipients(string $accountId, string $envelopeId, \Surex\DocuSign\Generated\Model\EnvelopeRecipients $envelopeRecipients, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\RecipientsDeleteRecipients($accountId, $envelopeId, $envelopeRecipients), $fetch);
    }

    /**
     * Retrieves the status of all recipients in a single envelope and identifies the current recipient in the routing list.

     The `currentRoutingOrder` property of the response contains the `routingOrder` value of the current recipient indicating that the envelope has been sent to the recipient, but the recipient has not completed their actions.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $envelopeId      The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param array  $queryParameters {
     *
     *     @var string $include_anchor_tab_locations  When set to **true** and `include_tabs` is set to **true**, all tabs with anchor tab properties are included in the response.
     *     @var string $include_extended  When set to **true**, the extended properties are included in the response.
     *     @var string $include_metadata reserved for DocuSign

     *     @var string $include_tabs When set to **true**, the tab information associated with the recipient is included in the response.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsGetRecipientsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeRecipients|\Psr\Http\Message\ResponseInterface
     */
    public function recipientsGetRecipients(string $accountId, string $envelopeId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\RecipientsGetRecipients($accountId, $envelopeId, $queryParameters), $fetch);
    }

    /**
     * Adds one or more recipients to an envelope.

     For an in process envelope, one that has been sent and has not been completed or voided, an email is sent to a new recipient when they are reached in the routing order. If the new recipient's routing order is before or the same as the envelope's next recipient, an email is only sent if the optional `resend_envelope` query string is set to **true**.
     *
     * @param string                                             $accountId          the external account number (int) or account ID Guid
     * @param string                                             $envelopeId         The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Generated\Model\EnvelopeRecipients $envelopeRecipients
     * @param array                                              $queryParameters    {
     *
     *     @var string $resend_envelope When set to **true**, resends the   envelope if the new recipient's routing order is before or the same as the envelope's next recipient.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsPostRecipientsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeRecipients|\Psr\Http\Message\ResponseInterface
     */
    public function recipientsPostRecipients(string $accountId, string $envelopeId, \Surex\DocuSign\Generated\Model\EnvelopeRecipients $envelopeRecipients, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\RecipientsPostRecipients($accountId, $envelopeId, $envelopeRecipients, $queryParameters), $fetch);
    }

    /**
     * Updates recipients in a draft envelope or corrects recipient information for an in process envelope.

     For draft envelopes, you can edit the following properties: `email`, `userName`, `routingOrder`, `faxNumber`, `deliveryMethod`, `accessCode`, and `requireIdLookup`.

     Once an envelope has been sent, you can only edit: `email`, `userName`, `signerName`, `routingOrder`, `faxNumber`, and `deliveryMethod`. You can also select to resend an envelope by using the `resend_envelope` option.

     If you send information for a recipient that does not already exist in a draft envelope, the recipient is added to the envelope (similar to the POST).
     *
     * @param string                                             $accountId          the external account number (int) or account ID Guid
     * @param string                                             $envelopeId         The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Generated\Model\EnvelopeRecipients $envelopeRecipients
     * @param array                                              $queryParameters    {
     *
     *     @var string $resend_envelope When set to **true**, resends the   envelope if the new recipient's routing order is before or the same as the envelope's next recipient.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsPutRecipientsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\RecipientsUpdateSummary|\Psr\Http\Message\ResponseInterface
     */
    public function recipientsPutRecipients(string $accountId, string $envelopeId, \Surex\DocuSign\Generated\Model\EnvelopeRecipients $envelopeRecipients, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\RecipientsPutRecipients($accountId, $envelopeId, $envelopeRecipients, $queryParameters), $fetch);
    }

    /**
     * Deletes a recipient from a `draft` or `sent` envelope.

     If the envelope is "In Process" (has been sent and is not completed or voided), recipients that have completed their actions cannot be deleted.
     *
     * @param string $accountId   the external account number (int) or account ID Guid
     * @param string $envelopeId  The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $recipientId the `recipientId` used when the envelope or template was created
     * @param string $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsDeleteRecipientBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeRecipients|\Psr\Http\Message\ResponseInterface
     */
    public function recipientsDeleteRecipient(string $accountId, string $envelopeId, string $recipientId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\RecipientsDeleteRecipient($accountId, $envelopeId, $recipientId), $fetch);
    }

    /**
     * Deletes the bulk recipient file from an envelope. This cannot be used if the envelope has been sent.

     After using this, the `bulkRecipientsUri` property is not returned in subsequent GET calls for the envelope, but the recipient will remain as a bulk recipient.
     *
     * @param string $accountId   the external account number (int) or account ID Guid
     * @param string $envelopeId  The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $recipientId the `recipientId` used when the envelope or template was created
     * @param string $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsDeleteBulkRecipientsFileBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\BulkRecipientsUpdateResponse|\Psr\Http\Message\ResponseInterface
     */
    public function recipientsDeleteBulkRecipientsFile(string $accountId, string $envelopeId, string $recipientId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\RecipientsDeleteBulkRecipientsFile($accountId, $envelopeId, $recipientId), $fetch);
    }

    /**
     * Retrieves the bulk recipient file information from an envelope that has a bulk recipient.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $envelopeId      The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $recipientId     the `recipientId` used when the envelope or template was created
     * @param array  $queryParameters {
     *
     *     @var string $include_tabs If **true**
     *     @var string $start_position Reserved for DocuSign.

     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsGetBulkRecipientsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeBulkRecipients|\Psr\Http\Message\ResponseInterface
     */
    public function recipientsGetBulkRecipients(string $accountId, string $envelopeId, string $recipientId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\RecipientsGetBulkRecipients($accountId, $envelopeId, $recipientId, $queryParameters), $fetch);
    }

    /**
     * Updates the bulk recipients in a draft envelope using a file upload. The Content-Type supported for uploading a bulk recipient file is CSV (text/csv).

     The REST API does not support modifying individual rows or values in the bulk recipients file. It only allows the entire file to be added or replaced with a new file.
     *
     * @param string                                                $accountId             the external account number (int) or account ID Guid
     * @param string                                                $envelopeId            The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string                                                $recipientId           the `recipientId` used when the envelope or template was created
     * @param \Surex\DocuSign\Generated\Model\BulkRecipientsRequest $bulkRecipientsRequest
     * @param string                                                $fetch                 Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsPutBulkRecipientsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\BulkRecipientsSummaryResponse|\Psr\Http\Message\ResponseInterface
     */
    public function recipientsPutBulkRecipients(string $accountId, string $envelopeId, string $recipientId, \Surex\DocuSign\Generated\Model\BulkRecipientsRequest $bulkRecipientsRequest, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\RecipientsPutBulkRecipients($accountId, $envelopeId, $recipientId, $bulkRecipientsRequest), $fetch);
    }

    /**
     * Retrieves the Electronic Record and Signature Disclosure, with html formatting, associated with the account. You can use an optional query string to set the language for the disclosure.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $envelopeId      The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $recipientId     the `recipientId` used when the envelope or template was created
     * @param array  $queryParameters {
     *
     *     @var string $langCode
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ConsumerDisclosureGetConsumerDisclosureEnvelopeIdRecipientIdBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeConsumerDisclosures|\Psr\Http\Message\ResponseInterface
     */
    public function consumerDisclosureGetConsumerDisclosureEnvelopeIdRecipientId(string $accountId, string $envelopeId, string $recipientId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ConsumerDisclosureGetConsumerDisclosureEnvelopeIdRecipientId($accountId, $envelopeId, $recipientId, $queryParameters), $fetch);
    }

    /**
     * Reserved: Retrieves the Electronic Record and Signature Disclosure, with HTML formatting, associated with the account.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $envelopeId      The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $langCode        The simple type enumeration the language used in the response. The supported languages, with the language value shown in parenthesis, are:Arabic (ar), Bulgarian (bg), Czech (cs), Chinese Simplified (zh_CN), Chinese Traditional (zh_TW), Croatian (hr), Danish (da), Dutch (nl), English US (en), English UK (en_GB), Estonian (et), Farsi (fa), Finnish (fi), French (fr), French Canada (fr_CA), German (de), Greek (el), Hebrew (he), Hindi (hi), Hungarian (hu), Bahasa Indonesia (id), Italian (it), Japanese (ja), Korean (ko), Latvian (lv), Lithuanian (lt), Bahasa Melayu (ms), Norwegian (no), Polish (pl), Portuguese (pt), Portuguese Brazil (pt_BR), Romanian (ro), Russian (ru), Serbian (sr), Slovak (sk), Slovenian (sl), Spanish (es),Spanish Latin America (es_MX), Swedish (sv), Thai (th), Turkish (tr), Ukrainian (uk) and Vietnamese (vi). Additionally, the value can be set to "browser" to automatically detect the browser language being used by the viewer and display the disclosure in that language.
     * @param string $recipientId     the `recipientId` used when the envelope or template was created
     * @param array  $queryParameters {
     *
     *     @var string $langCode
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ConsumerDisclosureGetConsumerDisclosureEnvelopeIdRecipientIdLangCodeBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeConsumerDisclosures|\Psr\Http\Message\ResponseInterface
     */
    public function consumerDisclosureGetConsumerDisclosureEnvelopeIdRecipientIdLangCode(string $accountId, string $envelopeId, string $langCode, string $recipientId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ConsumerDisclosureGetConsumerDisclosureEnvelopeIdRecipientIdLangCode($accountId, $envelopeId, $langCode, $recipientId, $queryParameters), $fetch);
    }

    /**
     * @param string $accountId   the external account number (int) or account ID Guid
     * @param string $envelopeId  The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $recipientId the `recipientId` used when the envelope or template was created
     * @param string $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsGetRecipientDocumentVisibilityBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeDocumentVisibility|\Psr\Http\Message\ResponseInterface
     */
    public function recipientsGetRecipientDocumentVisibility(string $accountId, string $envelopeId, string $recipientId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\RecipientsGetRecipientDocumentVisibility($accountId, $envelopeId, $recipientId), $fetch);
    }

    /**
     * @param string                                                     $accountId                  the external account number (int) or account ID Guid
     * @param string                                                     $envelopeId                 The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string                                                     $recipientId                the `recipientId` used when the envelope or template was created
     * @param \Surex\DocuSign\Generated\Model\EnvelopeDocumentVisibility $envelopeDocumentVisibility
     * @param string                                                     $fetch                      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsPutRecipientDocumentVisibilityBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeDocumentVisibility|\Psr\Http\Message\ResponseInterface
     */
    public function recipientsPutRecipientDocumentVisibility(string $accountId, string $envelopeId, string $recipientId, \Surex\DocuSign\Generated\Model\EnvelopeDocumentVisibility $envelopeDocumentVisibility, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\RecipientsPutRecipientDocumentVisibility($accountId, $envelopeId, $recipientId, $envelopeDocumentVisibility), $fetch);
    }

    /**
     * Retrieves the initials image for the specified user. The image is returned in the same format as it was uploaded. In the request you can specify if the chrome (the added line and identifier around the initial image) is returned with the image.

     The userId specified in the endpoint must match the authenticated user's user id and the user must be a member of the account.

     The `signatureIdOrName` paramter accepts signature ID or signature name. DocuSign recommends you use signature ID (`signatureId`), since some names contain characters that do not properly URL encode. If you use the user name, it is likely that the name includes spaces and you might need to URL encode the name before using it in the endpoint.

     For example: "Bob Smith" to "Bob%20Smith"

     Older envelopes might only contain chromed images. If getting the non-chromed image fails, try getting the chromed image.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $envelopeId      The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $recipientId     the `recipientId` used when the envelope or template was created
     * @param array  $queryParameters {
     *
     *     @var string $include_chrome The added line and identifier around the initial image. Note: Older envelopes might only have chromed images. If getting the non-chromed image fails, try getting the chromed image.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsGetRecipientInitialsImageBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function recipientsGetRecipientInitialsImage(string $accountId, string $envelopeId, string $recipientId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\RecipientsGetRecipientInitialsImage($accountId, $envelopeId, $recipientId, $queryParameters), $fetch);
    }

    /**
     * Updates the initials image for a signer that does not have a DocuSign account. The supported image formats for this file are: gif, png, jpeg, and bmp. The file size must be less than 200K.

     For the Authentication/Authorization for this call, the credentials must match the sender of the envelope, the recipient must be an accountless signer or in person signer. The account must have the `CanSendEnvelope` property set to **true** and the `ExpressSendOnly` property in `SendingUser` structure must be set to **false**.
     *
     * @param string $accountId   the external account number (int) or account ID Guid
     * @param string $envelopeId  The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $recipientId the `recipientId` used when the envelope or template was created
     * @param string $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsPutRecipientInitialsImageBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function recipientsPutRecipientInitialsImage(string $accountId, string $envelopeId, string $recipientId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\RecipientsPutRecipientInitialsImage($accountId, $envelopeId, $recipientId), $fetch);
    }

    /**
     * Retrieves signature information for a signer or sign-in-person recipient.
     *
     * @param string $accountId   the external account number (int) or account ID Guid
     * @param string $envelopeId  The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $recipientId the `recipientId` used when the envelope or template was created
     * @param string $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsGetRecipientSignatureBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\UserSignatures|\Psr\Http\Message\ResponseInterface
     */
    public function recipientsGetRecipientSignature(string $accountId, string $envelopeId, string $recipientId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\RecipientsGetRecipientSignature($accountId, $envelopeId, $recipientId), $fetch);
    }

    /**
     * Retrieves the specified user signature image. The image is returned in the same format as uploaded. In the request you can specify if the chrome (the added line and identifier around the initial image) is returned with the image.

     The userId specified in the endpoint must match the authenticated user's user ID and the user must be a member of the account.

     The `signatureIdOrName` parameter accepts signature ID or signature name. DocuSign recommends you use signature ID (`signatureId`), since some names contain characters that don't properly URL encode. If you use the user name, it is likely that the name includes spaces and you might need to URL encode the name before using it in the endpoint.

     For example: "Bob Smith" to "Bob%20Smith"

     Older envelopes might only have chromed images. If getting the non-chromed image fails, try getting the chromed image.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $envelopeId      The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $recipientId     the `recipientId` used when the envelope or template was created
     * @param array  $queryParameters {
     *
     *     @var string $include_chrome When set to **true**, indicates the chromed version of the signature image should be retrieved.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsGetRecipientSignatureImageBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function recipientsGetRecipientSignatureImage(string $accountId, string $envelopeId, string $recipientId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\RecipientsGetRecipientSignatureImage($accountId, $envelopeId, $recipientId, $queryParameters), $fetch);
    }

    /**
     * Updates the signature image for an accountless signer. The supported image formats for this file are: gif, png, jpeg, and bmp. The file size must be less than 200K.

     For the Authentication/Authorization for this call, the credentials must match the sender of the envelope, the recipient must be an accountless signer or in person signer. The account must have the `CanSendEnvelope` property set to **true** and the `ExpressSendOnly` property in `SendingUser` structure must be set to **false**.
     *
     * @param string $accountId   the external account number (int) or account ID Guid
     * @param string $envelopeId  The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $recipientId the `recipientId` used when the envelope or template was created
     * @param string $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsPutRecipientSignatureImageBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function recipientsPutRecipientSignatureImage(string $accountId, string $envelopeId, string $recipientId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\RecipientsPutRecipientSignatureImage($accountId, $envelopeId, $recipientId), $fetch);
    }

    /**
     * Deletes one or more tabs associated with a recipient in a draft envelope.
     *
     * @param string                                                $accountId             the external account number (int) or account ID Guid
     * @param string                                                $envelopeId            The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string                                                $recipientId           the `recipientId` used when the envelope or template was created
     * @param \Surex\DocuSign\Generated\Model\EnvelopeRecipientTabs $envelopeRecipientTabs
     * @param string                                                $fetch                 Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsDeleteRecipientTabsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeRecipientTabs|\Psr\Http\Message\ResponseInterface
     */
    public function recipientsDeleteRecipientTabs(string $accountId, string $envelopeId, string $recipientId, \Surex\DocuSign\Generated\Model\EnvelopeRecipientTabs $envelopeRecipientTabs, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\RecipientsDeleteRecipientTabs($accountId, $envelopeId, $recipientId, $envelopeRecipientTabs), $fetch);
    }

    /**
     * Retrieves information about the tabs associated with a recipient in a draft envelope.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $envelopeId      The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $recipientId     the `recipientId` used when the envelope or template was created
     * @param array  $queryParameters {
     *
     *     @var string $include_anchor_tab_locations When set to **true**, all tabs with anchor tab properties are included in the response.
     *     @var string $include_metadata Reserved for DocuSign.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsGetRecipientTabsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeRecipientTabs|\Psr\Http\Message\ResponseInterface
     */
    public function recipientsGetRecipientTabs(string $accountId, string $envelopeId, string $recipientId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\RecipientsGetRecipientTabs($accountId, $envelopeId, $recipientId, $queryParameters), $fetch);
    }

    /**
     * Adds one or more tabs for a recipient.
     *
     * @param string                                                $accountId             the external account number (int) or account ID Guid
     * @param string                                                $envelopeId            The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string                                                $recipientId           the `recipientId` used when the envelope or template was created
     * @param \Surex\DocuSign\Generated\Model\EnvelopeRecipientTabs $envelopeRecipientTabs
     * @param string                                                $fetch                 Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsPostRecipientTabsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeRecipientTabs|\Psr\Http\Message\ResponseInterface
     */
    public function recipientsPostRecipientTabs(string $accountId, string $envelopeId, string $recipientId, \Surex\DocuSign\Generated\Model\EnvelopeRecipientTabs $envelopeRecipientTabs, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\RecipientsPostRecipientTabs($accountId, $envelopeId, $recipientId, $envelopeRecipientTabs), $fetch);
    }

    /**
     * Updates one or more tabs for a recipient in a draft envelope.
     *
     * @param string                                                $accountId             the external account number (int) or account ID Guid
     * @param string                                                $envelopeId            The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string                                                $recipientId           the `recipientId` used when the envelope or template was created
     * @param \Surex\DocuSign\Generated\Model\EnvelopeRecipientTabs $envelopeRecipientTabs
     * @param string                                                $fetch                 Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsPutRecipientTabsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeRecipientTabs|\Psr\Http\Message\ResponseInterface
     */
    public function recipientsPutRecipientTabs(string $accountId, string $envelopeId, string $recipientId, \Surex\DocuSign\Generated\Model\EnvelopeRecipientTabs $envelopeRecipientTabs, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\RecipientsPutRecipientTabs($accountId, $envelopeId, $recipientId, $envelopeRecipientTabs), $fetch);
    }

    /**
     * @param string                                                     $accountId                  the external account number (int) or account ID Guid
     * @param string                                                     $envelopeId                 The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Generated\Model\EnvelopeDocumentVisibility $envelopeDocumentVisibility
     * @param string                                                     $fetch                      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsPutRecipientsDocumentVisibilityBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeDocumentVisibility|\Psr\Http\Message\ResponseInterface
     */
    public function recipientsPutRecipientsDocumentVisibility(string $accountId, string $envelopeId, \Surex\DocuSign\Generated\Model\EnvelopeDocumentVisibility $envelopeDocumentVisibility, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\RecipientsPutRecipientsDocumentVisibility($accountId, $envelopeId, $envelopeDocumentVisibility), $fetch);
    }

    /**
     * This returns a list of the server-side templates, their name and ID, used in an envelope.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $envelopeId      The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param array  $queryParameters {
     *
     *     @var string $include The possible values are:  matching_applied - This returns template matching information for the template.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\TemplatesGetEnvelopeTemplatesBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeTemplates|\Psr\Http\Message\ResponseInterface
     */
    public function templatesGetEnvelopeTemplates(string $accountId, string $envelopeId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\TemplatesGetEnvelopeTemplates($accountId, $envelopeId, $queryParameters), $fetch);
    }

    /**
     * Adds templates to the specified envelope.
     *
     * @param string                                               $accountId            the external account number (int) or account ID Guid
     * @param string                                               $envelopeId           The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Generated\Model\DocumentTemplateList $documentTemplateList
     * @param string                                               $fetch                Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\TemplatesPostEnvelopeTemplatesBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\DocumentTemplateList|\Psr\Http\Message\ResponseInterface
     */
    public function templatesPostEnvelopeTemplates(string $accountId, string $envelopeId, \Surex\DocuSign\Generated\Model\DocumentTemplateList $documentTemplateList, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\TemplatesPostEnvelopeTemplates($accountId, $envelopeId, $documentTemplateList), $fetch);
    }

    /**
     * Returns a URL that allows you to embed the envelope correction view of the DocuSign UI in your applications.

     Important: iFrames should not be used for embedded operations on mobile devices due to screen space issues. For iOS devices DocuSign recommends using a WebView.
     *
     * @param string                                             $accountId          the external account number (int) or account ID Guid
     * @param string                                             $envelopeId         The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Generated\Model\CorrectViewRequest $correctViewRequest
     * @param string                                             $fetch              Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ViewsPostEnvelopeCorrectViewBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeViews|\Psr\Http\Message\ResponseInterface
     */
    public function viewsPostEnvelopeCorrectView(string $accountId, string $envelopeId, \Surex\DocuSign\Generated\Model\CorrectViewRequest $correctViewRequest, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ViewsPostEnvelopeCorrectView($accountId, $envelopeId, $correctViewRequest), $fetch);
    }

    /**
     * Returns a URL that allows you to embed the edit view of the DocuSign UI in your applications. This is a one-time use login token that allows the user to be placed into the DocuSign editing view.

     Upon sending completion, the user is returned to the return URL provided by the API application.

     Important: iFrames should not be used for embedded operations on mobile devices due to screen space issues. For iOS devices DocuSign recommends using a WebView.
     *
     * @param string                                           $accountId        the external account number (int) or account ID Guid
     * @param string                                           $envelopeId       The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Generated\Model\ReturnUrlRequest $returnUrlRequest
     * @param string                                           $fetch            Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ViewsPostEnvelopeEditViewBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeViews|\Psr\Http\Message\ResponseInterface
     */
    public function viewsPostEnvelopeEditView(string $accountId, string $envelopeId, \Surex\DocuSign\Generated\Model\ReturnUrlRequest $returnUrlRequest, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ViewsPostEnvelopeEditView($accountId, $envelopeId, $returnUrlRequest), $fetch);
    }

    /**
     * Returns a URL that enables you to embed the recipient view of the DocuSign UI in your applications. If the recipient is a signer, then the view will provide the signing ceremony.

     ###### Note: Please redirect the client to the URL. iFrames should not be used, especially if the recipient may be using a mobile or tablet.

     This method is only used with envelopes in the `sent` status.

     Your application is responsible for authenticating the identity of the recipient or signer when you use this method. Use the parameters `assertionId`, `authenticationInstant`, `authenticationMethod`, `clientUserId`, and `securityDomain` to record information on how the recipient was authenticated. At a minimum, `authenticationMethod` and `clientUserId` are required. The information that you provide is included in the envelope's certificate of completion.

     ## The event status parameter
     After the signer completes or ends the signing ceremony, DocuSign will redirect the user's browser back to your app via the `returnUrl` that you supply. DocuSIgn appends an `event` query parameter to the URL with the outcome of the signing ceremony. Your app should use the event parameter to determine the next step for the envelope. Don't fetch the envelope's status via Envelopes: get or a similar method; that could break the DocuSign rule against polling.

     ## The URL is time-limited
     The URL returned by this method is valid for one use. It must be used/displayed within a couple of minutes after being generated. Once the recipient is redirected to the recipient view, they must interact with the DocuSign system periodically or their session will time out.

     Because the URL is time-limited, it should not be stored or sent via email. Immediately redirect the user's browser to the URL after you receive it.

     If you want to invite someone to an embedded signing session via email, the email invitation's URL must be to your application. When invoked, your app should request a recipientView URL from DocuSign and then redirect the signer to that URL.

     ## Maintaining State
     After the recipient completes the recipient view (or signing ceremony), they are redirected to your application. Your application can recover state information about the transaction by storing information in a cookie, or by including query parameters in the `returnUrl` field. Eg, `https://myapp.eg.com/docusign_return?myState=12345` When the user is redirected to your app, the `event` query parameter will be appended. In this example, prevent spoofing by not using a guessable value as the state value.
     *
     * @param string                                               $accountId            the external account number (int) or account ID Guid
     * @param string                                               $envelopeId           The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Generated\Model\RecipientViewRequest $recipientViewRequest
     * @param string                                               $fetch                Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ViewsPostEnvelopeRecipientViewBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeViews|\Psr\Http\Message\ResponseInterface
     */
    public function viewsPostEnvelopeRecipientView(string $accountId, string $envelopeId, \Surex\DocuSign\Generated\Model\RecipientViewRequest $recipientViewRequest, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ViewsPostEnvelopeRecipientView($accountId, $envelopeId, $recipientViewRequest), $fetch);
    }

    /**
     * Returns a URL that enables you to embed the sender view of the DocuSign UI in your applications.

     The returned URL can only be redirected to immediately after it is generated. It can only be used once.
     Therefore, request the URL immediately before you redirect your user to it.

     For the best user experience, don't use an iFrame. For iOS devices DocuSign recommends using a WebView.

     Multiple solutions are available for maintaining your
     client state. See the "Maintaining State" section of the [Embedded Signing introduction.](../../../../guide/usage/embedded_signing.html#maintaining-state)

     After the user has completed the sending view, their browser is redirected to the `returnUrl` you supplied.

     By default, if the envelope already contains one or more documents, DocuSign will initially show the document tagging view when you redirect to the URL.

     To start with the envelope's recipients and documents view instead, examine the URL in the method's response.
     Then change the query parameter from `send=1` to `send=0` to start with the recipients/documents view.
     *
     * @param string                                           $accountId        the external account number (int) or account ID Guid
     * @param string                                           $envelopeId       The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Generated\Model\ReturnUrlRequest $returnUrlRequest
     * @param string                                           $fetch            Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ViewsPostEnvelopeSenderViewBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeViews|\Psr\Http\Message\ResponseInterface
     */
    public function viewsPostEnvelopeSenderView(string $accountId, string $envelopeId, \Surex\DocuSign\Generated\Model\ReturnUrlRequest $returnUrlRequest, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ViewsPostEnvelopeSenderView($accountId, $envelopeId, $returnUrlRequest), $fetch);
    }

    /**
     * Retrieves the envelope status for the specified envelopes.
     *
     * @param string                                             $accountId          the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\EnvelopeIdsRequest $envelopeIdsRequest
     * @param array                                              $queryParameters    {
     *
     *     @var string $email reserved for DocuSign

     *     @var string $from_date the date/time setting that specifies when the request begins checking for status changes for envelopes in the account

     *     @var string $start_position reserved for DocuSign

     *     @var string $to_date Optional date/time setting
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\EnvelopesPutStatusBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopesInformation|\Psr\Http\Message\ResponseInterface
     */
    public function envelopesPutStatus(string $accountId, \Surex\DocuSign\Generated\Model\EnvelopeIdsRequest $envelopeIdsRequest, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\EnvelopesPutStatus($accountId, $envelopeIdsRequest, $queryParameters), $fetch);
    }

    /**
     * Retrieves a list of the folders for the account, including the folder hierarchy. You can specify whether to return just the template folder or template folder and normal folders by setting the `template` query string parameter.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param array  $queryParameters {
     *
     *     @var string $include reserved for DocuSign

     *     @var string $include_items
     *     @var string $start_position reserved for DocuSign

     *     @var string $template Specifies the items that are returned. Valid values are:

     * include - The folder list will return normal folders plus template folders.
     * only - Only the list of template folders are returned.
     *     @var string $user_filter Reserved for DocuSign.

     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\FoldersGetFoldersBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\Folders|\Psr\Http\Message\ResponseInterface
     */
    public function foldersGetFolders(string $accountId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\FoldersGetFolders($accountId, $queryParameters), $fetch);
    }

    /**
     * Retrieves a list of the envelopes in the specified folder. You can narrow the query by specifying search criteria in the query string parameters.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $folderId        the ID of the folder being accessed
     * @param array  $queryParameters {
     *
     *     @var string $from_date  Only return items on or after this date. If no value is provided, the default search is the previous 30 days.
     *     @var string $include_items
     *     @var string $owner_email  The email of the folder owner.
     *     @var string $owner_name  The name of the folder owner.
     *     @var string $search_text  The search text used to search the items of the envelope. The search looks at recipient names and emails, envelope custom fields, sender name, and subject.
     *     @var string $start_position The position of the folder items to return. This is used for repeated calls, when the number of envelopes returned is too much for one return (calls return 100 envelopes at a time). The default value is 0.
     *     @var string $status The current status of the envelope. If no value is provided, the default search is all/any status.
     *     @var string $to_date Only return items up to this date. If no value is provided, the default search is to the current date.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\FoldersGetFolderItemsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\FolderItemsResponse|\Psr\Http\Message\ResponseInterface
     */
    public function foldersGetFolderItems(string $accountId, string $folderId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\FoldersGetFolderItems($accountId, $folderId, $queryParameters), $fetch);
    }

    /**
     * Moves an envelope from its current folder to the specified folder.

     ###### Note: You can use this endpoint to delete envelopes by specifying `recyclebin` in the `folderId` parameter of the endpoint. Placing an in process envelope (envelope status of `sent` or `delivered`) in the recycle bin voids the envelope. You can also use this endpoint to delete templates by specifying a template ID instead of an envelope ID in the 'envelopeIds' property and specifying `recyclebin` in the `folderId` parameter.
     *
     * @param string                                         $accountId      the external account number (int) or account ID Guid
     * @param string                                         $folderId       the ID of the folder being accessed
     * @param \Surex\DocuSign\Generated\Model\FoldersRequest $foldersRequest
     * @param string                                         $fetch          Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\FoldersPutFolderByIdBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\Folders|\Psr\Http\Message\ResponseInterface
     */
    public function foldersPutFolderById(string $accountId, string $folderId, \Surex\DocuSign\Generated\Model\FoldersRequest $foldersRequest, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\FoldersPutFolderById($accountId, $folderId, $foldersRequest), $fetch);
    }

    /**
     * Deletes an existing user group.
     *
     * @param string                                 $accountId the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\Groups $groups
     * @param string                                 $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\GroupsDeleteGroupsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\Groups|\Psr\Http\Message\ResponseInterface
     */
    public function groupsDeleteGroups(string $accountId, \Surex\DocuSign\Generated\Model\Groups $groups, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\GroupsDeleteGroups($accountId, $groups), $fetch);
    }

    /**
     * Retrieves information about groups associated with the account.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param array  $queryParameters {
     *
     *     @var string $count Number of records to return. The number must be greater than 1 and less than or equal to 100.
     *     @var string $group_name filters the groups returned by the group name or a sub-string of group name
     *     @var string $group_type
     *     @var string $search_text
     *     @var string $start_position Starting value for the list.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\GroupsGetGroupsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\Groups|\Psr\Http\Message\ResponseInterface
     */
    public function groupsGetGroups(string $accountId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\GroupsGetGroups($accountId, $queryParameters), $fetch);
    }

    /**
     * Creates one or more groups for the account.

     Groups can be used to help manage users by associating users with a group. You can associate a group with a Permission Profile, which sets the user permissions for users in that group without having to set the `userSettings` property for each user. You are not required to set Permission Profiles for a group, but it makes it easier to manage user permissions for a large number of users. You can also use groups with template sharing to limit user access to templates.
     *
     * @param string                                 $accountId the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\Groups $groups
     * @param string                                 $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\GroupsPostGroupsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\Groups|\Psr\Http\Message\ResponseInterface
     */
    public function groupsPostGroups(string $accountId, \Surex\DocuSign\Generated\Model\Groups $groups, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\GroupsPostGroups($accountId, $groups), $fetch);
    }

    /**
     * Updates the group name and modifies, or sets, the permission profile for the group.
     *
     * @param string                                 $accountId the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\Groups $groups
     * @param string                                 $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\GroupsPutGroupsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\Groups|\Psr\Http\Message\ResponseInterface
     */
    public function groupsPutGroups(string $accountId, \Surex\DocuSign\Generated\Model\Groups $groups, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\GroupsPutGroups($accountId, $groups), $fetch);
    }

    /**
     * Deletes brand information from the requested group.
     *
     * @param string                                        $accountId     the external account number (int) or account ID Guid
     * @param string                                        $groupId       the ID of the group being accessed
     * @param \Surex\DocuSign\Generated\Model\BrandsRequest $brandsRequest
     * @param string                                        $fetch         Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\BrandsDeleteGroupBrandsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\GroupBrands|\Psr\Http\Message\ResponseInterface
     */
    public function brandsDeleteGroupBrands(string $accountId, string $groupId, \Surex\DocuSign\Generated\Model\BrandsRequest $brandsRequest, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\BrandsDeleteGroupBrands($accountId, $groupId, $brandsRequest), $fetch);
    }

    /**
     * Retrieves information about the brands associated with the requested group.
     *
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $groupId   the ID of the group being accessed
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\BrandsGetGroupBrandsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\GroupBrands|\Psr\Http\Message\ResponseInterface
     */
    public function brandsGetGroupBrands(string $accountId, string $groupId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\BrandsGetGroupBrands($accountId, $groupId), $fetch);
    }

    /**
     * Adds group brand ID information to a group.
     *
     * @param string                                        $accountId     the external account number (int) or account ID Guid
     * @param string                                        $groupId       the ID of the group being accessed
     * @param \Surex\DocuSign\Generated\Model\BrandsRequest $brandsRequest
     * @param string                                        $fetch         Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\BrandsPutGroupBrandsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\GroupBrands|\Psr\Http\Message\ResponseInterface
     */
    public function brandsPutGroupBrands(string $accountId, string $groupId, \Surex\DocuSign\Generated\Model\BrandsRequest $brandsRequest, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\BrandsPutGroupBrands($accountId, $groupId, $brandsRequest), $fetch);
    }

    /**
     * Deletes one or more users from a group.
     *
     * @param string                                       $accountId    the external account number (int) or account ID Guid
     * @param string                                       $groupId      the ID of the group being accessed
     * @param \Surex\DocuSign\Generated\Model\UserInfoList $userInfoList
     * @param string                                       $fetch        Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\GroupsDeleteGroupUsersBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\GroupUsers|\Psr\Http\Message\ResponseInterface
     */
    public function groupsDeleteGroupUsers(string $accountId, string $groupId, \Surex\DocuSign\Generated\Model\UserInfoList $userInfoList, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\GroupsDeleteGroupUsers($accountId, $groupId, $userInfoList), $fetch);
    }

    /**
     * Retrieves a list of users in a group.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $groupId         the ID of the group being accessed
     * @param array  $queryParameters {
     *
     *     @var string $count Number of records to return. The number must be greater than 1 and less than or equal to 100.
     *     @var string $start_position Starting value for the list.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\GroupsGetGroupUsersBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\GroupUsers|\Psr\Http\Message\ResponseInterface
     */
    public function groupsGetGroupUsers(string $accountId, string $groupId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\GroupsGetGroupUsers($accountId, $groupId, $queryParameters), $fetch);
    }

    /**
     * Adds one or more users to an existing group.
     *
     * @param string                                       $accountId    the external account number (int) or account ID Guid
     * @param string                                       $groupId      the ID of the group being accessed
     * @param \Surex\DocuSign\Generated\Model\UserInfoList $userInfoList
     * @param string                                       $fetch        Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\GroupsPutGroupUsersBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\GroupUsers|\Psr\Http\Message\ResponseInterface
     */
    public function groupsPutGroupUsers(string $accountId, string $groupId, \Surex\DocuSign\Generated\Model\UserInfoList $userInfoList, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\GroupsPutGroupUsers($accountId, $groupId, $userInfoList), $fetch);
    }

    /**
     * List payment gateway account information.
     *
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\PaymentGatewayAccountsGetAllPaymentGatewayAccountsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\PaymentGatewayAccountsInfo|\Psr\Http\Message\ResponseInterface
     */
    public function paymentGatewayAccountsGetAllPaymentGatewayAccounts(string $accountId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\PaymentGatewayAccountsGetAllPaymentGatewayAccounts($accountId), $fetch);
    }

    /**
     * Retrieves a list of Permission Profiles. Permission Profiles are a standard set of user permissions that you can apply to individual users or users in a Group. This makes it easier to manage user permissions for a large number of users, without having to change permissions on a user-by-user basis.

     Currently, Permission Profiles can only be created and modified in the DocuSign console.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param array  $queryParameters {
     *
     *     @var string $include Reserved for DocuSign.

     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\PermissionProfilesGetPermissionProfilesBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\PermissionProfileInformation|\Psr\Http\Message\ResponseInterface
     */
    public function permissionProfilesGetPermissionProfiles(string $accountId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\PermissionProfilesGetPermissionProfiles($accountId, $queryParameters), $fetch);
    }

    /**
     * @param string                                                    $accountId                 the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\AccountPermissionProfiles $accountPermissionProfiles
     * @param array                                                     $queryParameters           {
     *
     *     @var string $include A comma-separated list of additional template attributes to include in the response. Valid values are: recipients, folders, documents, custom_fields, and notifications.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\PermissionProfilesPostPermissionProfilesBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\AccountPermissionProfiles|\Psr\Http\Message\ResponseInterface
     */
    public function permissionProfilesPostPermissionProfiles(string $accountId, \Surex\DocuSign\Generated\Model\AccountPermissionProfiles $accountPermissionProfiles, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\PermissionProfilesPostPermissionProfiles($accountId, $accountPermissionProfiles, $queryParameters), $fetch);
    }

    /**
     * @param string $accountId           the external account number (int) or account ID Guid
     * @param string $permissionProfileId
     * @param string $fetch               Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\PermissionProfilesDeletePermissionProfilesBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function permissionProfilesDeletePermissionProfiles(string $accountId, string $permissionProfileId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\PermissionProfilesDeletePermissionProfiles($accountId, $permissionProfileId), $fetch);
    }

    /**
     * @param string $accountId           the external account number (int) or account ID Guid
     * @param string $permissionProfileId
     * @param array  $queryParameters     {
     *
     *     @var string $include A comma-separated list of additional template attributes to include in the response. Valid values are: recipients, folders, documents, custom_fields, and notifications.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\PermissionProfilesGetPermissionProfileBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\AccountPermissionProfiles|\Psr\Http\Message\ResponseInterface
     */
    public function permissionProfilesGetPermissionProfile(string $accountId, string $permissionProfileId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\PermissionProfilesGetPermissionProfile($accountId, $permissionProfileId, $queryParameters), $fetch);
    }

    /**
     * @param string                                                    $accountId                 the external account number (int) or account ID Guid
     * @param string                                                    $permissionProfileId
     * @param \Surex\DocuSign\Generated\Model\AccountPermissionProfiles $accountPermissionProfiles
     * @param array                                                     $queryParameters           {
     *
     *     @var string $include A comma-separated list of additional template attributes to include in the response. Valid values are: recipients, folders, documents, custom_fields, and notifications.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\PermissionProfilesPutPermissionProfilesBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\AccountPermissionProfiles|\Psr\Http\Message\ResponseInterface
     */
    public function permissionProfilesPutPermissionProfiles(string $accountId, string $permissionProfileId, \Surex\DocuSign\Generated\Model\AccountPermissionProfiles $accountPermissionProfiles, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\PermissionProfilesPutPermissionProfiles($accountId, $permissionProfileId, $accountPermissionProfiles, $queryParameters), $fetch);
    }

    /**
     * @param string                                            $accountId         the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\PowerFormsRequest $powerFormsRequest
     * @param string                                            $fetch             Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\PowerFormsDeletePowerFormsListBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\PowerFormsResponse|\Psr\Http\Message\ResponseInterface
     */
    public function powerFormsDeletePowerFormsList(string $accountId, \Surex\DocuSign\Generated\Model\PowerFormsRequest $powerFormsRequest, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\PowerFormsDeletePowerFormsList($accountId, $powerFormsRequest), $fetch);
    }

    /**
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param array  $queryParameters {
     *
     *     @var string $from_date Start of the search date range. Only returns templates created on or after this date/time. If no value is specified, there is no limit on the earliest date created.
     *     @var string $order An optional value that sets the direction order used to sort the item list.

     Valid values are:

     * asc = ascending sort order
     * desc = descending sort order
     *     @var string $order_by An optional value that sets the file attribute used to sort the item list.

     Valid values are:

     * modified
     * name
     *     @var string $to_date End of the search date range. Only returns templates created up to this date/time. If no value is provided, this defaults to the current date.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\PowerFormsGetPowerFormsListBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\PowerFormsResponse|\Psr\Http\Message\ResponseInterface
     */
    public function powerFormsGetPowerFormsList(string $accountId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\PowerFormsGetPowerFormsList($accountId, $queryParameters), $fetch);
    }

    /**
     * @param string                                     $accountId  the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\PowerForms $powerForms
     * @param string                                     $fetch      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\PowerFormsPostPowerFormBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\PowerForms|\Psr\Http\Message\ResponseInterface
     */
    public function powerFormsPostPowerForm(string $accountId, \Surex\DocuSign\Generated\Model\PowerForms $powerForms, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\PowerFormsPostPowerForm($accountId, $powerForms), $fetch);
    }

    /**
     * @param string $accountId   the external account number (int) or account ID Guid
     * @param string $powerFormId
     * @param string $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\PowerFormsDeletePowerFormBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function powerFormsDeletePowerForm(string $accountId, string $powerFormId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\PowerFormsDeletePowerForm($accountId, $powerFormId), $fetch);
    }

    /**
     * @param string $accountId   the external account number (int) or account ID Guid
     * @param string $powerFormId
     * @param string $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\PowerFormsGetPowerFormBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\PowerForms|\Psr\Http\Message\ResponseInterface
     */
    public function powerFormsGetPowerForm(string $accountId, string $powerFormId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\PowerFormsGetPowerForm($accountId, $powerFormId), $fetch);
    }

    /**
     * @param string                                     $accountId   the external account number (int) or account ID Guid
     * @param string                                     $powerFormId
     * @param \Surex\DocuSign\Generated\Model\PowerForms $powerForms
     * @param string                                     $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\PowerFormsPutPowerFormBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\PowerForms|\Psr\Http\Message\ResponseInterface
     */
    public function powerFormsPutPowerForm(string $accountId, string $powerFormId, \Surex\DocuSign\Generated\Model\PowerForms $powerForms, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\PowerFormsPutPowerForm($accountId, $powerFormId, $powerForms), $fetch);
    }

    /**
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $powerFormId
     * @param array  $queryParameters {
     *
     *     @var string $from_date Start of the search date range. Only returns templates created on or after this date/time. If no value is specified, there is no limit on the earliest date created.
     *     @var string $to_date End of the search date range. Only returns templates created up to this date/time. If no value is provided, this defaults to the current date.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\PowerFormsGetPowerFormFormDataBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\PowerFormsFormDataResponse|\Psr\Http\Message\ResponseInterface
     */
    public function powerFormsGetPowerFormFormData(string $accountId, string $powerFormId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\PowerFormsGetPowerFormFormData($accountId, $powerFormId, $queryParameters), $fetch);
    }

    /**
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param array  $queryParameters {
     *
     *     @var string $start_position The position within the total result set from which to start returning values. The value **thumbnail** may be used to return the page image.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\PowerFormsGetPowerFormsSendersBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\PowerFormSendersResponse|\Psr\Http\Message\ResponseInterface
     */
    public function powerFormsGetPowerFormsSenders(string $accountId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\PowerFormsGetPowerFormsSenders($accountId, $queryParameters), $fetch);
    }

    /**
     * Retrieves a list of recipients in the specified account that are associated with a email address supplied in the query string.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param array  $queryParameters {
     *
     *     @var string $email The email address for the user
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\RecipientNamesGetRecipientNamesBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\RecipientNamesResponse|\Psr\Http\Message\ResponseInterface
     */
    public function recipientNamesGetRecipientNames(string $accountId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\RecipientNamesGetRecipientNames($accountId, $queryParameters), $fetch);
    }

    /**
     * Retrieves a list of envelopes that match the criteria specified in the query.

     If the user ID of the user making the call is the same as the user ID for any returned recipient, then the userId property is added to the returned information for those recipients.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $searchFolderId  Specifies the envelope group that is searched by the request. These are logical groupings, not actual folder names. Valid values are: drafts, awaiting_my_signature, completed, out_for_signature.
     * @param array  $queryParameters {
     *
     *     @var string $all specifies that all envelopes that match the criteria are returned
     *     @var string $count Specifies the number of records returned in the cache. The number must be greater than 0 and less than or equal to 100.
     *     @var string $from_date Specifies the start of the date range to return. If no value is provided, the default search is the previous 30 days.
     *     @var string $include_recipients when set to **true**, the recipient information is returned in the response
     *     @var string $order Specifies the order in which the list is returned. Valid values are: `asc` for ascending order, and `desc` for descending order.
     *     @var string $order_by Specifies the property used to sort the list. Valid values are: `action_required`, `created`, `completed`, `sent`, `signer_list`, `status`, or `subject`.
     *     @var string $start_position specifies the the starting location in the result set of the items that are returned
     *     @var string $to_date Specifies the end of the date range to return.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\SearchFoldersGetSearchFolderContentsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\FolderItemResponse|\Psr\Http\Message\ResponseInterface
     */
    public function searchFoldersGetSearchFolderContents(string $accountId, string $searchFolderId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\SearchFoldersGetSearchFolderContents($accountId, $searchFolderId, $queryParameters), $fetch);
    }

    /**
     * Retrieves the account settings information for the specified account.
     *
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\SettingsGetSettingsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\AccountSettingsInformation|\Psr\Http\Message\ResponseInterface
     */
    public function settingsGetSettings(string $accountId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\SettingsGetSettings($accountId), $fetch);
    }

    /**
     * Updates the account settings for the specified account.
     *
     * @param string                                                     $accountId                  the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\AccountSettingsInformation $accountSettingsInformation
     * @param string                                                     $fetch                      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\SettingsPutSettingsBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function settingsPutSettings(string $accountId, \Surex\DocuSign\Generated\Model\AccountSettingsInformation $accountSettingsInformation, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\SettingsPutSettings($accountId, $accountSettingsInformation), $fetch);
    }

    /**
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ENoteConfigurationDeleteENoteConfigurationBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function eNoteConfigurationDeleteENoteConfiguration(string $accountId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ENoteConfigurationDeleteENoteConfiguration($accountId), $fetch);
    }

    /**
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ENoteConfigurationGetENoteConfigurationBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\ENoteConfigurations|\Psr\Http\Message\ResponseInterface
     */
    public function eNoteConfigurationGetENoteConfiguration(string $accountId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ENoteConfigurationGetENoteConfiguration($accountId), $fetch);
    }

    /**
     * @param string                                              $accountId           the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\ENoteConfigurations $eNoteConfigurations
     * @param string                                              $fetch               Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ENoteConfigurationPutENoteConfigurationBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\ENoteConfigurations|\Psr\Http\Message\ResponseInterface
     */
    public function eNoteConfigurationPutENoteConfiguration(string $accountId, \Surex\DocuSign\Generated\Model\ENoteConfigurations $eNoteConfigurations, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ENoteConfigurationPutENoteConfiguration($accountId, $eNoteConfigurations), $fetch);
    }

    /**
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\AccountPasswordRulesGetAccountPasswordRulesBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\AccountPasswordRules|\Psr\Http\Message\ResponseInterface
     */
    public function accountPasswordRulesGetAccountPasswordRules(string $accountId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\AccountPasswordRulesGetAccountPasswordRules($accountId), $fetch);
    }

    /**
     * @param string                                               $accountId            the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\AccountPasswordRules $accountPasswordRules
     * @param string                                               $fetch                Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\AccountPasswordRulesPutAccountPasswordRulesBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\AccountPasswordRules|\Psr\Http\Message\ResponseInterface
     */
    public function accountPasswordRulesPutAccountPasswordRules(string $accountId, \Surex\DocuSign\Generated\Model\AccountPasswordRules $accountPasswordRules, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\AccountPasswordRulesPutAccountPasswordRules($accountId, $accountPasswordRules), $fetch);
    }

    /**
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\TabSettingsGetTabSettingsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\AccountTabSettings|\Psr\Http\Message\ResponseInterface
     */
    public function tabSettingsGetTabSettings(string $accountId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\TabSettingsGetTabSettings($accountId), $fetch);
    }

    /**
     * @param string                                             $accountId          the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\AccountTabSettings $accountTabSettings
     * @param string                                             $fetch              Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\TabSettingsPutSettingsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\AccountTabSettings|\Psr\Http\Message\ResponseInterface
     */
    public function tabSettingsPutSettings(string $accountId, \Surex\DocuSign\Generated\Model\AccountTabSettings $accountTabSettings, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\TabSettingsPutSettings($accountId, $accountTabSettings), $fetch);
    }

    /**
     * Reserved: Retrieves shared item status for one or more users and types of items.

     Users with account administration privileges can retrieve shared access information for all account users. Users without account administrator privileges can only retrieve shared access information for themselves and the returned information is limited to the retrieving the status of all members of the account that are sharing their folders to the user. This is equivalent to setting the shared=shared_from.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param array  $queryParameters {
     *
     *     @var string $count Specifies maximum number of results included in the response. If no value is specified, this defaults to 1000.
     *     @var string $envelopes_not_shared_user_status
     *     @var string $folder_ids a comma separated list of folder ID GUIDs
     *     @var string $item_type Reserved:
     *     @var string $search_text This can be used to filter user names in the response. The wild-card '*' (asterisk) can be used around the string.
     *     @var string $shared Reserved:
     *     @var string $start_position Reserved:
     *     @var string $user_ids Reserved:
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\SharedAccessGetSharedAccessBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\AccountSharedAccess|\Psr\Http\Message\ResponseInterface
     */
    public function sharedAccessGetSharedAccess(string $accountId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\SharedAccessGetSharedAccess($accountId, $queryParameters), $fetch);
    }

    /**
     * Reserved: Sets the shared access information for one or more users.
     *
     * @param string                                              $accountId           the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\AccountSharedAccess $accountSharedAccess
     * @param array                                               $queryParameters     {
     *
     *     @var string $item_type
     *     @var string $user_ids
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\SharedAccessPutSharedAccessBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\AccountSharedAccess|\Psr\Http\Message\ResponseInterface
     */
    public function sharedAccessPutSharedAccess(string $accountId, \Surex\DocuSign\Generated\Model\AccountSharedAccess $accountSharedAccess, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\SharedAccessPutSharedAccess($accountId, $accountSharedAccess, $queryParameters), $fetch);
    }

    /**
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\AccountSignatureProvidersGetSignatureProvidersBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\AccountSignatureProviders|\Psr\Http\Message\ResponseInterface
     */
    public function accountSignatureProvidersGetSignatureProviders(string $accountId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\AccountSignatureProvidersGetSignatureProviders($accountId), $fetch);
    }

    /**
     * Deletes one or more signing groups in the specified account.
     *
     * @param string                                                  $accountId               the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\SigningGroupInformation $signingGroupInformation
     * @param string                                                  $fetch                   Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\SigningGroupsDeleteSigningGroupsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\SigningGroupInformation|\Psr\Http\Message\ResponseInterface
     */
    public function signingGroupsDeleteSigningGroups(string $accountId, \Surex\DocuSign\Generated\Model\SigningGroupInformation $signingGroupInformation, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\SigningGroupsDeleteSigningGroups($accountId, $signingGroupInformation), $fetch);
    }

    /**
     * Retrieves a list of all signing groups in the specified account.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param array  $queryParameters {
     *
     *     @var string $group_type
     *     @var string $include_users When set to **true**, the response includes the signing group members.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\SigningGroupsGetSigningGroupsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\SigningGroupInformation|\Psr\Http\Message\ResponseInterface
     */
    public function signingGroupsGetSigningGroups(string $accountId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\SigningGroupsGetSigningGroups($accountId, $queryParameters), $fetch);
    }

    /**
     * Creates one or more signing groups.

     Multiple signing groups can be created in one call. Only users with account administrator privileges can create signing groups.

     An account can have a maximum of 50 signing groups. Each signing group can have a maximum of 50 group members.

     Signing groups can be used by any account user.
     *
     * @param string                                                  $accountId               the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\SigningGroupInformation $signingGroupInformation
     * @param string                                                  $fetch                   Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\SigningGroupsPostSigningGroupsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\SigningGroupInformation|\Psr\Http\Message\ResponseInterface
     */
    public function signingGroupsPostSigningGroups(string $accountId, \Surex\DocuSign\Generated\Model\SigningGroupInformation $signingGroupInformation, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\SigningGroupsPostSigningGroups($accountId, $signingGroupInformation), $fetch);
    }

    /**
     * Updates the name of one or more existing signing groups.
     *
     * @param string                                                  $accountId               the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\SigningGroupInformation $signingGroupInformation
     * @param string                                                  $fetch                   Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\SigningGroupsPutSigningGroupsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\SigningGroupInformation|\Psr\Http\Message\ResponseInterface
     */
    public function signingGroupsPutSigningGroups(string $accountId, \Surex\DocuSign\Generated\Model\SigningGroupInformation $signingGroupInformation, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\SigningGroupsPutSigningGroups($accountId, $signingGroupInformation), $fetch);
    }

    /**
     * Retrieves information, including group member information, for the specified signing group.
     *
     * @param string $accountId      the external account number (int) or account ID Guid
     * @param string $signingGroupId
     * @param string $fetch          Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\SigningGroupsGetSigningGroupBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\SigningGroups|\Psr\Http\Message\ResponseInterface
     */
    public function signingGroupsGetSigningGroup(string $accountId, string $signingGroupId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\SigningGroupsGetSigningGroup($accountId, $signingGroupId), $fetch);
    }

    /**
     * Updates signing group name and member information. You can also add new members to the signing group. A signing group can have a maximum of 50 members.
     *
     * @param string                                        $accountId      the external account number (int) or account ID Guid
     * @param string                                        $signingGroupId
     * @param \Surex\DocuSign\Generated\Model\SigningGroups $signingGroups
     * @param string                                        $fetch          Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\SigningGroupsPutSigningGroupBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\SigningGroups|\Psr\Http\Message\ResponseInterface
     */
    public function signingGroupsPutSigningGroup(string $accountId, string $signingGroupId, \Surex\DocuSign\Generated\Model\SigningGroups $signingGroups, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\SigningGroupsPutSigningGroup($accountId, $signingGroupId, $signingGroups), $fetch);
    }

    /**
     * Deletes  one or more members from the specified signing group.
     *
     * @param string                                            $accountId         the external account number (int) or account ID Guid
     * @param string                                            $signingGroupId
     * @param \Surex\DocuSign\Generated\Model\SigningGroupUsers $signingGroupUsers
     * @param string                                            $fetch             Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\SigningGroupsDeleteSigningGroupUsersBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\SigningGroupUsers|\Psr\Http\Message\ResponseInterface
     */
    public function signingGroupsDeleteSigningGroupUsers(string $accountId, string $signingGroupId, \Surex\DocuSign\Generated\Model\SigningGroupUsers $signingGroupUsers, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\SigningGroupsDeleteSigningGroupUsers($accountId, $signingGroupId, $signingGroupUsers), $fetch);
    }

    /**
     * Retrieves the list of members in the specified Signing Group.
     *
     * @param string $accountId      the external account number (int) or account ID Guid
     * @param string $signingGroupId
     * @param string $fetch          Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\SigningGroupsGetSigningGroupUsersBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\SigningGroupUsers|\Psr\Http\Message\ResponseInterface
     */
    public function signingGroupsGetSigningGroupUsers(string $accountId, string $signingGroupId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\SigningGroupsGetSigningGroupUsers($accountId, $signingGroupId), $fetch);
    }

    /**
     * Adds one or more new members to a signing group. A signing group can have a maximum of 50 members.
     *
     * @param string                                            $accountId         the external account number (int) or account ID Guid
     * @param string                                            $signingGroupId
     * @param \Surex\DocuSign\Generated\Model\SigningGroupUsers $signingGroupUsers
     * @param string                                            $fetch             Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\SigningGroupsPutSigningGroupUsersBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\SigningGroupUsers|\Psr\Http\Message\ResponseInterface
     */
    public function signingGroupsPutSigningGroupUsers(string $accountId, string $signingGroupId, \Surex\DocuSign\Generated\Model\SigningGroupUsers $signingGroupUsers, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\SigningGroupsPutSigningGroupUsers($accountId, $signingGroupId, $signingGroupUsers), $fetch);
    }

    /**
     * List supported languages for the recipient language setting.
     *
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\SupportedLanguagesGetSupportedLanguagesBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\SupportedLanguages|\Psr\Http\Message\ResponseInterface
     */
    public function supportedLanguagesGetSupportedLanguages(string $accountId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\SupportedLanguagesGetSupportedLanguages($accountId), $fetch);
    }

    /**
     * Retrieves a list of all tabs associated with the account.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param array  $queryParameters {
     *
     *     @var string $custom_tab_only When set to **true**, only custom tabs are returned in the response.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\TabsGetTabDefinitionsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TabMetadataList|\Psr\Http\Message\ResponseInterface
     */
    public function tabsGetTabDefinitions(string $accountId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\TabsGetTabDefinitions($accountId, $queryParameters), $fetch);
    }

    /**
     * Creates a tab with pre-defined properties, such as a text tab with a certain font type and validation pattern. Users can access the custom tabs when sending documents through the DocuSign web application.

     Custom tabs can be created for approve, checkbox, company, date, date signed, decline, email, email address, envelope ID, first name, formula, full name, initial here, last name, list, note, number, radio, sign here, signer attachment, SSN, text, title, and zip tabs.
     *
     * @param string                                     $accountId  the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\CustomTabs $customTabs
     * @param string                                     $fetch      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\TabsPostTabDefinitionsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\CustomTabs|\Psr\Http\Message\ResponseInterface
     */
    public function tabsPostTabDefinitions(string $accountId, \Surex\DocuSign\Generated\Model\CustomTabs $customTabs, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\TabsPostTabDefinitions($accountId, $customTabs), $fetch);
    }

    /**
     * Deletes the custom from the specified account.
     *
     * @param string $accountId   the external account number (int) or account ID Guid
     * @param string $customTabId
     * @param string $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\TabDeleteCustomTabBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function tabDeleteCustomTab(string $accountId, string $customTabId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\TabDeleteCustomTab($accountId, $customTabId), $fetch);
    }

    /**
     * Retrieves information about the requested custom tab on the specified account.
     *
     * @param string $accountId   the external account number (int) or account ID Guid
     * @param string $customTabId
     * @param string $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\TabGetCustomTabBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\CustomTabs|\Psr\Http\Message\ResponseInterface
     */
    public function tabGetCustomTab(string $accountId, string $customTabId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\TabGetCustomTab($accountId, $customTabId), $fetch);
    }

    /**
     * Updates the information in a custom tab for the specified account.
     *
     * @param string                                     $accountId   the external account number (int) or account ID Guid
     * @param string                                     $customTabId
     * @param \Surex\DocuSign\Generated\Model\CustomTabs $customTabs
     * @param string                                     $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\TabPutCustomTabBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\CustomTabs|\Psr\Http\Message\ResponseInterface
     */
    public function tabPutCustomTab(string $accountId, string $customTabId, \Surex\DocuSign\Generated\Model\CustomTabs $customTabs, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\TabPutCustomTab($accountId, $customTabId, $customTabs), $fetch);
    }

    /**
     * Retrieves the list of templates for the specified account. The request can be limited to a specific folder.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param array  $queryParameters {
     *
     *     @var string $count number of records to return in the cache
     *     @var string $folder The query value can be a folder name or folder ID. The response will only return templates in the specified folder.
     *     @var string $folder_ids a comma separated list of folder ID GUIDs
     *     @var string $folder_types
     *     @var string $from_date Start of the search date range. Only returns templates created on or after this date/time. If no value is specified, there is no limit on the earliest date created.
     *     @var string $include A comma-separated list
     *     @var string $order Sets the direction order used to sort the list. Valid values are: -asc = ascending sort order (a to z)  -desc = descending sort order (z to a)
     *     @var string $order_by Sets the file attribute used to sort the list. Valid values are:  -name: template name  -modified: date/time template was last modified.  -used: date/time the template was last used.
     *     @var string $search_text the search text used to search the names of templates
     *     @var string $shared
     *     @var string $shared_by_me If true, the response only includes templates shared by the user. If false, the response only returns template not shared by the user. If not specified, the response is not affected.
     *     @var string $start_position The starting index for the first template shown in the response. This must be greater than or equal to 0 (zero).
     *     @var string $to_date End of the search date range. Only returns templates created up to this date/time. If no value is provided, this defaults to the current date.
     *     @var string $used_from_date Start of the search date range. Only returns templates used or edited on or after this date/time. If no value is specified, there is no limit on the earliest date used.
     *     @var string $used_to_date End of the search date range. Only returns templates used or edited up to this date/time. If no value is provided, this defaults to the current date.
     *     @var string $user_filter Sets if the templates shown in the response Valid values are:  -owned_by_me: only shows templates the user owns.  -shared_with_me: only shows templates that are shared with the user.  -all: shows all templates owned or shared with the user.
     *     @var string $user_id
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\TemplatesGetTemplatesBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeTemplateResults|\Psr\Http\Message\ResponseInterface
     */
    public function templatesGetTemplates(string $accountId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\TemplatesGetTemplates($accountId, $queryParameters), $fetch);
    }

    /**
     * Creates a template definition using a multipart request.

     ### Template Email Subject Merge Fields

     Call this endpoint to insert a recipient name and email address merge fields into the email subject line when creating or sending from a template.

     The merge fields, based on the recipient's role name, are added to the `emailSubject` property when the template is created or when the template is used to create an envelope. After a template sender adds the name and email information for the recipient and sends the envelope, the recipient information is automatically merged into the appropriate fields in the email subject line.

     Both the sender and the recipients will see the information in the email subject line for any emails associated with the template. This provides an easy way for senders to organize their envelope emails without having to open an envelope to check the recipient.
     ###### Note: If merging the recipient information into the subject line causes the subject line to exceed 100 characters, then any characters over the 100 character limit are not included in the subject line. For cases where the recipient name or email is expected to be long, you should consider placing the merge field at the start of the email subject.

     To add a recipient's name in the subject line add the following text in the `emailSubject` property when creating the template or when sending an envelope from a template:

     `[[<roleName>_UserName]]`

     Example:

     `"emailSubject":"[[Signer 1_UserName]], Please sign this NDA",`

     To add a recipient's email address in the subject line add the following text in the `emailSubject` property when creating the template or when sending an envelope from a template:

     `[[<roleName>_Email]]`

     Example:

     `"emailSubject":"[[Signer 1_Email]], Please sign this NDA",`


     In both cases the <roleName> is the recipient's contents of the `roleName` property in the template.

     For cases where another recipient (such as an Agent, Editor, or Intermediary recipient) is entering the name and email information for the recipient included in the email subject, then `[[<roleName>_UserName]]` or `[[<roleName>_Email]]` is shown in the email subject.
     *
     * @param string                                    $accountId the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\Templates $templates
     * @param string                                    $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\TemplatesPostTemplatesBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateSummary|\Psr\Http\Message\ResponseInterface
     */
    public function templatesPostTemplates(string $accountId, \Surex\DocuSign\Generated\Model\Templates $templates, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\TemplatesPostTemplates($accountId, $templates), $fetch);
    }

    /**
     * Retrieves the definition of the specified template.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $templateId      the ID of the template being accessed
     * @param array  $queryParameters {
     *
     *     @var string $include A comma-separated list of additional template attributes to include in the response. Valid values are: recipients, folders, documents, custom_fields, and notifications.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\TemplatesGetTemplateBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\Templates|\Psr\Http\Message\ResponseInterface
     */
    public function templatesGetTemplate(string $accountId, string $templateId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\TemplatesGetTemplate($accountId, $templateId, $queryParameters), $fetch);
    }

    /**
     * Updates an existing template.
     *
     * @param string                                    $accountId  the external account number (int) or account ID Guid
     * @param string                                    $templateId the ID of the template being accessed
     * @param \Surex\DocuSign\Generated\Model\Templates $templates
     * @param string                                    $fetch      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\TemplatesPutTemplateBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateUpdateSummary|\Psr\Http\Message\ResponseInterface
     */
    public function templatesPutTemplate(string $accountId, string $templateId, \Surex\DocuSign\Generated\Model\Templates $templates, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\TemplatesPutTemplate($accountId, $templateId, $templates), $fetch);
    }

    /**
     * Removes a member group's sharing permissions for a specified template.
     *
     * @param string                                 $accountId    the external account number (int) or account ID Guid
     * @param string                                 $templateId   the ID of the template being accessed
     * @param string                                 $templatePart currently, the only defined part is **groups**
     * @param \Surex\DocuSign\Generated\Model\Groups $groups
     * @param string                                 $fetch        Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\TemplatesDeleteTemplatePartBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\Groups|\Psr\Http\Message\ResponseInterface
     */
    public function templatesDeleteTemplatePart(string $accountId, string $templateId, string $templatePart, \Surex\DocuSign\Generated\Model\Groups $groups, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\TemplatesDeleteTemplatePart($accountId, $templateId, $templatePart, $groups), $fetch);
    }

    /**
     * Shares a template with the specified members group.
     *
     * @param string                                 $accountId    the external account number (int) or account ID Guid
     * @param string                                 $templateId   the ID of the template being accessed
     * @param string                                 $templatePart currently, the only defined part is **groups**
     * @param \Surex\DocuSign\Generated\Model\Groups $groups
     * @param string                                 $fetch        Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\TemplatesPutTemplatePartBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\Groups|\Psr\Http\Message\ResponseInterface
     */
    public function templatesPutTemplatePart(string $accountId, string $templateId, string $templatePart, \Surex\DocuSign\Generated\Model\Groups $groups, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\TemplatesPutTemplatePart($accountId, $templateId, $templatePart, $groups), $fetch);
    }

    /**
     * Deletes envelope custom fields in a template.
     *
     * @param string                                               $accountId            the external account number (int) or account ID Guid
     * @param string                                               $templateId           the ID of the template being accessed
     * @param \Surex\DocuSign\Generated\Model\TemplateCustomFields $templateCustomFields
     * @param string                                               $fetch                Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\CustomFieldsDeleteTemplateCustomFieldsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateCustomFields|\Psr\Http\Message\ResponseInterface
     */
    public function customFieldsDeleteTemplateCustomFields(string $accountId, string $templateId, \Surex\DocuSign\Generated\Model\TemplateCustomFields $templateCustomFields, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\CustomFieldsDeleteTemplateCustomFields($accountId, $templateId, $templateCustomFields), $fetch);
    }

    /**
     * Retrieves the custom document field information from an existing template.
     *
     * @param string $accountId  the external account number (int) or account ID Guid
     * @param string $templateId the ID of the template being accessed
     * @param string $fetch      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\CustomFieldsGetTemplateCustomFieldsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateCustomFields|\Psr\Http\Message\ResponseInterface
     */
    public function customFieldsGetTemplateCustomFields(string $accountId, string $templateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\CustomFieldsGetTemplateCustomFields($accountId, $templateId), $fetch);
    }

    /**
     * Creates custom document fields in an existing template document.
     *
     * @param string                                               $accountId            the external account number (int) or account ID Guid
     * @param string                                               $templateId           the ID of the template being accessed
     * @param \Surex\DocuSign\Generated\Model\TemplateCustomFields $templateCustomFields
     * @param string                                               $fetch                Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\CustomFieldsPostTemplateCustomFieldsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateCustomFields|\Psr\Http\Message\ResponseInterface
     */
    public function customFieldsPostTemplateCustomFields(string $accountId, string $templateId, \Surex\DocuSign\Generated\Model\TemplateCustomFields $templateCustomFields, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\CustomFieldsPostTemplateCustomFields($accountId, $templateId, $templateCustomFields), $fetch);
    }

    /**
     * Updates the custom fields in a template.

     Each custom field used in a template must have a unique name.
     *
     * @param string                                               $accountId            the external account number (int) or account ID Guid
     * @param string                                               $templateId           the ID of the template being accessed
     * @param \Surex\DocuSign\Generated\Model\TemplateCustomFields $templateCustomFields
     * @param string                                               $fetch                Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\CustomFieldsPutTemplateCustomFieldsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateCustomFields|\Psr\Http\Message\ResponseInterface
     */
    public function customFieldsPutTemplateCustomFields(string $accountId, string $templateId, \Surex\DocuSign\Generated\Model\TemplateCustomFields $templateCustomFields, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\CustomFieldsPutTemplateCustomFields($accountId, $templateId, $templateCustomFields), $fetch);
    }

    /**
     * Deletes one or more documents from an existing template.
     *
     * @param string                                             $accountId          the external account number (int) or account ID Guid
     * @param string                                             $templateId         the ID of the template being accessed
     * @param \Surex\DocuSign\Generated\Model\EnvelopeDefinition $envelopeDefinition
     * @param string                                             $fetch              Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\DocumentsDeleteTemplateDocumentsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateDocuments|\Psr\Http\Message\ResponseInterface
     */
    public function documentsDeleteTemplateDocuments(string $accountId, string $templateId, \Surex\DocuSign\Generated\Model\EnvelopeDefinition $envelopeDefinition, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\DocumentsDeleteTemplateDocuments($accountId, $templateId, $envelopeDefinition), $fetch);
    }

    /**
     * Retrieves a list of documents associated with the specified template.
     *
     * @param string $accountId  the external account number (int) or account ID Guid
     * @param string $templateId the ID of the template being accessed
     * @param string $fetch      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\DocumentsGetTemplateDocumentsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateDocuments|\Psr\Http\Message\ResponseInterface
     */
    public function documentsGetTemplateDocuments(string $accountId, string $templateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\DocumentsGetTemplateDocuments($accountId, $templateId), $fetch);
    }

    /**
     * Adds one or more documents to an existing template document.
     *
     * @param string                                             $accountId          the external account number (int) or account ID Guid
     * @param string                                             $templateId         the ID of the template being accessed
     * @param \Surex\DocuSign\Generated\Model\EnvelopeDefinition $envelopeDefinition
     * @param array                                              $queryParameters    {
     *
     *     @var string $apply_document_fields When **true**, document fields
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\DocumentsPutTemplateDocumentsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateDocuments|\Psr\Http\Message\ResponseInterface
     */
    public function documentsPutTemplateDocuments(string $accountId, string $templateId, \Surex\DocuSign\Generated\Model\EnvelopeDefinition $envelopeDefinition, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\DocumentsPutTemplateDocuments($accountId, $templateId, $envelopeDefinition, $queryParameters), $fetch);
    }

    /**
     * Retrieves one or more PDF documents from the specified template.

     You can specify the ID of the document to retrieve or can specify `combined` to retrieve all documents in the template as one pdf.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $documentId      the ID of the document being accessed
     * @param string $templateId      the ID of the template being accessed
     * @param array  $queryParameters {
     *
     *     @var string $encrypt
     *     @var string $show_changes
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\DocumentsGetTemplateDocumentBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function documentsGetTemplateDocument(string $accountId, string $documentId, string $templateId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\DocumentsGetTemplateDocument($accountId, $documentId, $templateId, $queryParameters), $fetch);
    }

    /**
     * Adds the specified document to an existing template document.
     *
     * @param string                                             $accountId          the external account number (int) or account ID Guid
     * @param string                                             $documentId         the ID of the document being accessed
     * @param string                                             $templateId         the ID of the template being accessed
     * @param \Surex\DocuSign\Generated\Model\EnvelopeDefinition $envelopeDefinition
     * @param array                                              $queryParameters    {
     *
     *     @var string $apply_document_fields When **true**, document fields
     *     @var string $is_envelope_definition
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\DocumentsPutTemplateDocumentBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeDocument|\Psr\Http\Message\ResponseInterface
     */
    public function documentsPutTemplateDocument(string $accountId, string $documentId, string $templateId, \Surex\DocuSign\Generated\Model\EnvelopeDefinition $envelopeDefinition, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\DocumentsPutTemplateDocument($accountId, $documentId, $templateId, $envelopeDefinition, $queryParameters), $fetch);
    }

    /**
     * Deletes custom document fields from an existing template document.
     *
     * @param string                                                 $accountId              the external account number (int) or account ID Guid
     * @param string                                                 $documentId             the ID of the document being accessed
     * @param string                                                 $templateId             the ID of the template being accessed
     * @param \Surex\DocuSign\Generated\Model\TemplateDocumentFields $templateDocumentFields
     * @param string                                                 $fetch                  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\DocumentFieldsDeleteTemplateDocumentFieldsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateDocumentFields|\Psr\Http\Message\ResponseInterface
     */
    public function documentFieldsDeleteTemplateDocumentFields(string $accountId, string $documentId, string $templateId, \Surex\DocuSign\Generated\Model\TemplateDocumentFields $templateDocumentFields, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\DocumentFieldsDeleteTemplateDocumentFields($accountId, $documentId, $templateId, $templateDocumentFields), $fetch);
    }

    /**
     * Retrieves the custom document fields for an existing template document.
     *
     * @param string $accountId  the external account number (int) or account ID Guid
     * @param string $documentId the ID of the document being accessed
     * @param string $templateId the ID of the template being accessed
     * @param string $fetch      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\DocumentFieldsGetTemplateDocumentFieldsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateDocumentFields|\Psr\Http\Message\ResponseInterface
     */
    public function documentFieldsGetTemplateDocumentFields(string $accountId, string $documentId, string $templateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\DocumentFieldsGetTemplateDocumentFields($accountId, $documentId, $templateId), $fetch);
    }

    /**
     * Creates custom document fields in an existing template document.
     *
     * @param string                                                 $accountId              the external account number (int) or account ID Guid
     * @param string                                                 $documentId             the ID of the document being accessed
     * @param string                                                 $templateId             the ID of the template being accessed
     * @param \Surex\DocuSign\Generated\Model\TemplateDocumentFields $templateDocumentFields
     * @param string                                                 $fetch                  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\DocumentFieldsPostTemplateDocumentFieldsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateDocumentFields|\Psr\Http\Message\ResponseInterface
     */
    public function documentFieldsPostTemplateDocumentFields(string $accountId, string $documentId, string $templateId, \Surex\DocuSign\Generated\Model\TemplateDocumentFields $templateDocumentFields, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\DocumentFieldsPostTemplateDocumentFields($accountId, $documentId, $templateId, $templateDocumentFields), $fetch);
    }

    /**
     * Updates existing custom document fields in an existing template document.
     *
     * @param string                                                 $accountId              the external account number (int) or account ID Guid
     * @param string                                                 $documentId             the ID of the document being accessed
     * @param string                                                 $templateId             the ID of the template being accessed
     * @param \Surex\DocuSign\Generated\Model\TemplateDocumentFields $templateDocumentFields
     * @param string                                                 $fetch                  Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\DocumentFieldsPutTemplateDocumentFieldsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateDocumentFields|\Psr\Http\Message\ResponseInterface
     */
    public function documentFieldsPutTemplateDocumentFields(string $accountId, string $documentId, string $templateId, \Surex\DocuSign\Generated\Model\TemplateDocumentFields $templateDocumentFields, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\DocumentFieldsPutTemplateDocumentFields($accountId, $documentId, $templateId, $templateDocumentFields), $fetch);
    }

    /**
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $documentId      the ID of the document being accessed
     * @param string $templateId      the ID of the template being accessed
     * @param array  $queryParameters {
     *
     *     @var string $count the maximum number of results to be returned by this request
     *     @var string $dpi Number of dots per inch for the resulting image. The default if not used is 94. The range is 1-310.
     *     @var string $max_height sets the maximum height (in pixels) of the returned image
     *     @var string $max_width sets the maximum width (in pixels) of the returned image
     *     @var string $nocache
     *     @var string $show_changes
     *     @var string $start_position The position within the total result set from which to start returning values. The value **thumbnail** may be used to return the page image.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\PagesGetTemplatePageImagesBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\PageImages|\Psr\Http\Message\ResponseInterface
     */
    public function pagesGetTemplatePageImages(string $accountId, string $documentId, string $templateId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\PagesGetTemplatePageImages($accountId, $documentId, $templateId, $queryParameters), $fetch);
    }

    /**
     * Deletes a page from a document in a template based on the page number.
     *
     * @param string                                      $accountId   the external account number (int) or account ID Guid
     * @param string                                      $documentId  the ID of the document being accessed
     * @param string                                      $pageNumber  the page number being accessed
     * @param string                                      $templateId  the ID of the template being accessed
     * @param \Surex\DocuSign\Generated\Model\PageRequest $pageRequest
     * @param string                                      $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\PagesDeleteTemplatePageBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function pagesDeleteTemplatePage(string $accountId, string $documentId, string $pageNumber, string $templateId, \Surex\DocuSign\Generated\Model\PageRequest $pageRequest, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\PagesDeleteTemplatePage($accountId, $documentId, $pageNumber, $templateId, $pageRequest), $fetch);
    }

    /**
     * Retrieves a page image for display from the specified template.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $documentId      the ID of the document being accessed
     * @param string $pageNumber      the page number being accessed
     * @param string $templateId      the ID of the template being accessed
     * @param array  $queryParameters {
     *
     *     @var string $dpi Number of dots per inch for the resulting image. The default if not used is 94. The range is 1-310.
     *     @var string $max_height sets the maximum height (in pixels) of the returned image
     *     @var string $max_width sets the maximum width (in pixels) of the returned image
     *     @var string $show_changes
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\PagesGetTemplatePageImageBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function pagesGetTemplatePageImage(string $accountId, string $documentId, string $pageNumber, string $templateId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\PagesGetTemplatePageImage($accountId, $documentId, $pageNumber, $templateId, $queryParameters), $fetch);
    }

    /**
     * Rotates page image from a template for display. The page image can be rotated to the left or right.
     *
     * @param string                                      $accountId   the external account number (int) or account ID Guid
     * @param string                                      $documentId  the ID of the document being accessed
     * @param string                                      $pageNumber  the page number being accessed
     * @param string                                      $templateId  the ID of the template being accessed
     * @param \Surex\DocuSign\Generated\Model\PageRequest $pageRequest
     * @param string                                      $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\PagesPutTemplatePageImageBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function pagesPutTemplatePageImage(string $accountId, string $documentId, string $pageNumber, string $templateId, \Surex\DocuSign\Generated\Model\PageRequest $pageRequest, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\PagesPutTemplatePageImage($accountId, $documentId, $pageNumber, $templateId, $pageRequest), $fetch);
    }

    /**
     * @param string $accountId  the external account number (int) or account ID Guid
     * @param string $documentId the ID of the document being accessed
     * @param string $pageNumber the page number being accessed
     * @param string $templateId the ID of the template being accessed
     * @param string $fetch      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\TabsGetTemplatePageTabsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateDocumentTabs|\Psr\Http\Message\ResponseInterface
     */
    public function tabsGetTemplatePageTabs(string $accountId, string $documentId, string $pageNumber, string $templateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\TabsGetTemplatePageTabs($accountId, $documentId, $pageNumber, $templateId), $fetch);
    }

    /**
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $documentId      the ID of the document being accessed
     * @param string $templateId      the ID of the template being accessed
     * @param array  $queryParameters {
     *
     *     @var string $page_numbers
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\TabsGetTemplateDocumentTabsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateDocumentTabs|\Psr\Http\Message\ResponseInterface
     */
    public function tabsGetTemplateDocumentTabs(string $accountId, string $documentId, string $templateId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\TabsGetTemplateDocumentTabs($accountId, $documentId, $templateId, $queryParameters), $fetch);
    }

    /**
     * Deletes the lock from the specified template. The `X-DocuSign-Edit` header must be included in the request.
     *
     * @param string                                      $accountId   the external account number (int) or account ID Guid
     * @param string                                      $templateId  the ID of the template being accessed
     * @param \Surex\DocuSign\Generated\Model\LockRequest $lockRequest
     * @param string                                      $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\LockDeleteTemplateLockBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateLocks|\Psr\Http\Message\ResponseInterface
     */
    public function lockDeleteTemplateLock(string $accountId, string $templateId, \Surex\DocuSign\Generated\Model\LockRequest $lockRequest, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\LockDeleteTemplateLock($accountId, $templateId, $lockRequest), $fetch);
    }

    /**
     * Retrieves general information about the template lock.

     If the call is made by the user who has the lock and the request has the same integrator key as original, then the `X-DocuSign-Edit` header  field and additional lock information is included in the response. This allows users to recover a lost editing session token and the `X-DocuSign-Edit` header.
     *
     * @param string $accountId  the external account number (int) or account ID Guid
     * @param string $templateId the ID of the template being accessed
     * @param string $fetch      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\LockGetTemplateLockBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateLocks|\Psr\Http\Message\ResponseInterface
     */
    public function lockGetTemplateLock(string $accountId, string $templateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\LockGetTemplateLock($accountId, $templateId), $fetch);
    }

    /**
     * Locks the specified template, and sets the time until the lock expires, to prevent other users or recipients from accessing and changing the template.

     ###### Note: Users must have envelope locking capability enabled to use this function (the userSetting property `canLockEnvelopes` must be set to **true** for the user).
     *
     * @param string                                      $accountId   the external account number (int) or account ID Guid
     * @param string                                      $templateId  the ID of the template being accessed
     * @param \Surex\DocuSign\Generated\Model\LockRequest $lockRequest
     * @param string                                      $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\LockPostTemplateLockBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateLocks|\Psr\Http\Message\ResponseInterface
     */
    public function lockPostTemplateLock(string $accountId, string $templateId, \Surex\DocuSign\Generated\Model\LockRequest $lockRequest, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\LockPostTemplateLock($accountId, $templateId, $lockRequest), $fetch);
    }

    /**
     * Updates the lock duration time or update the `lockedByApp` property information for the specified template. The user and integrator key must match the user specified by the `lockByUser` property and integrator key information and the `X-DocuSign-Edit` header must be included or an error will be generated.
     *
     * @param string                                      $accountId   the external account number (int) or account ID Guid
     * @param string                                      $templateId  the ID of the template being accessed
     * @param \Surex\DocuSign\Generated\Model\LockRequest $lockRequest
     * @param string                                      $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\LockPutTemplateLockBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateLocks|\Psr\Http\Message\ResponseInterface
     */
    public function lockPutTemplateLock(string $accountId, string $templateId, \Surex\DocuSign\Generated\Model\LockRequest $lockRequest, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\LockPutTemplateLock($accountId, $templateId, $lockRequest), $fetch);
    }

    /**
     * Retrieves the envelope notification, reminders and expirations, information for an existing template.
     *
     * @param string $accountId  the external account number (int) or account ID Guid
     * @param string $templateId the ID of the template being accessed
     * @param string $fetch      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\NotificationGetTemplatesTemplateIdNotificationBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\Notification|\Psr\Http\Message\ResponseInterface
     */
    public function notificationGetTemplatesTemplateIdNotification(string $accountId, string $templateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\NotificationGetTemplatesTemplateIdNotification($accountId, $templateId), $fetch);
    }

    /**
     * Updates the notification structure for an existing template. Use this endpoint to set reminder and expiration notifications.
     *
     * @param string                                                      $accountId                   the external account number (int) or account ID Guid
     * @param string                                                      $templateId                  the ID of the template being accessed
     * @param \Surex\DocuSign\Generated\Model\TemplateNotificationRequest $templateNotificationRequest
     * @param string                                                      $fetch                       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\NotificationPutTemplatesTemplateIdNotificationBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\Notification|\Psr\Http\Message\ResponseInterface
     */
    public function notificationPutTemplatesTemplateIdNotification(string $accountId, string $templateId, \Surex\DocuSign\Generated\Model\TemplateNotificationRequest $templateNotificationRequest, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\NotificationPutTemplatesTemplateIdNotification($accountId, $templateId, $templateNotificationRequest), $fetch);
    }

    /**
     * Deletes one or more recipients from a template. Recipients to be deleted are listed in the request, with the `recipientId` being used as the key for deleting recipients.
     *
     * @param string                                             $accountId          the external account number (int) or account ID Guid
     * @param string                                             $templateId         the ID of the template being accessed
     * @param \Surex\DocuSign\Generated\Model\TemplateRecipients $templateRecipients
     * @param string                                             $fetch              Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsDeleteTemplateRecipientsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateRecipients|\Psr\Http\Message\ResponseInterface
     */
    public function recipientsDeleteTemplateRecipients(string $accountId, string $templateId, \Surex\DocuSign\Generated\Model\TemplateRecipients $templateRecipients, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\RecipientsDeleteTemplateRecipients($accountId, $templateId, $templateRecipients), $fetch);
    }

    /**
     * Retrieves the information for all recipients in the specified template.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $templateId      the ID of the template being accessed
     * @param array  $queryParameters {
     *
     *     @var string $include_anchor_tab_locations  When set to **true** and `include_tabs` is set to **true**, all tabs with anchor tab properties are included in the response.
     *     @var string $include_extended  When set to **true**, the extended properties are included in the response.
     *     @var string $include_tabs When set to **true**, the tab information associated with the recipient is included in the response.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsGetTemplateRecipientsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateRecipients|\Psr\Http\Message\ResponseInterface
     */
    public function recipientsGetTemplateRecipients(string $accountId, string $templateId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\RecipientsGetTemplateRecipients($accountId, $templateId, $queryParameters), $fetch);
    }

    /**
     * Adds one or more recipients to a template.
     *
     * @param string                                             $accountId          the external account number (int) or account ID Guid
     * @param string                                             $templateId         the ID of the template being accessed
     * @param \Surex\DocuSign\Generated\Model\TemplateRecipients $templateRecipients
     * @param array                                              $queryParameters    {
     *
     *     @var string $resend_envelope When set to **true**, resends the   envelope if the new recipient's routing order is before or the same as the envelope's next recipient.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsPostTemplateRecipientsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateRecipients|\Psr\Http\Message\ResponseInterface
     */
    public function recipientsPostTemplateRecipients(string $accountId, string $templateId, \Surex\DocuSign\Generated\Model\TemplateRecipients $templateRecipients, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\RecipientsPostTemplateRecipients($accountId, $templateId, $templateRecipients, $queryParameters), $fetch);
    }

    /**
     * Updates recipients in a template.

     You can edit the following properties: `email`, `userName`, `routingOrder`, `faxNumber`, `deliveryMethod`, `accessCode`, and `requireIdLookup`.
     *
     * @param string                                             $accountId          the external account number (int) or account ID Guid
     * @param string                                             $templateId         the ID of the template being accessed
     * @param \Surex\DocuSign\Generated\Model\TemplateRecipients $templateRecipients
     * @param array                                              $queryParameters    {
     *
     *     @var string $resend_envelope When set to **true**, resends the   envelope if the new recipient's routing order is before or the same as the envelope's next recipient.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsPutTemplateRecipientsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\RecipientsUpdateSummary|\Psr\Http\Message\ResponseInterface
     */
    public function recipientsPutTemplateRecipients(string $accountId, string $templateId, \Surex\DocuSign\Generated\Model\TemplateRecipients $templateRecipients, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\RecipientsPutTemplateRecipients($accountId, $templateId, $templateRecipients, $queryParameters), $fetch);
    }

    /**
     * Deletes the specified recipient file from the specified template.
     *
     * @param string                                             $accountId          the external account number (int) or account ID Guid
     * @param string                                             $recipientId        the `recipientId` used when the envelope or template was created
     * @param string                                             $templateId         the ID of the template being accessed
     * @param \Surex\DocuSign\Generated\Model\TemplateRecipients $templateRecipients
     * @param string                                             $fetch              Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsDeleteTemplateRecipientBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateRecipients|\Psr\Http\Message\ResponseInterface
     */
    public function recipientsDeleteTemplateRecipient(string $accountId, string $recipientId, string $templateId, \Surex\DocuSign\Generated\Model\TemplateRecipients $templateRecipients, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\RecipientsDeleteTemplateRecipient($accountId, $recipientId, $templateId, $templateRecipients), $fetch);
    }

    /**
     * Deletes the bulk recipient list on a template.
     *
     * @param string $accountId   the external account number (int) or account ID Guid
     * @param string $recipientId the `recipientId` used when the envelope or template was created
     * @param string $templateId  the ID of the template being accessed
     * @param string $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsDeleteTemplateBulkRecipientsFileBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\BulkRecipientsUpdateResponse|\Psr\Http\Message\ResponseInterface
     */
    public function recipientsDeleteTemplateBulkRecipientsFile(string $accountId, string $recipientId, string $templateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\RecipientsDeleteTemplateBulkRecipientsFile($accountId, $recipientId, $templateId), $fetch);
    }

    /**
     * Retrieves the bulk recipient file information from a template that has a bulk recipient.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $recipientId     the `recipientId` used when the envelope or template was created
     * @param string $templateId      the ID of the template being accessed
     * @param array  $queryParameters {
     *
     *     @var string $include_tabs when set to **true**, the tab information associated with the recipient is included in the response
     *     @var string $start_position Reserved for DocuSign.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsGetTemplateBulkRecipientsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateBulkRecipients|\Psr\Http\Message\ResponseInterface
     */
    public function recipientsGetTemplateBulkRecipients(string $accountId, string $recipientId, string $templateId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\RecipientsGetTemplateBulkRecipients($accountId, $recipientId, $templateId, $queryParameters), $fetch);
    }

    /**
     * Updates the bulk recipients in a template using a file upload. The Content-Type supported for uploading a bulk recipient file is CSV (text/csv).

     The REST API does not support modifying individual rows or values in the bulk recipients file. It only allows the entire file to be added or replaced with a new file.
     *
     * @param string                                                $accountId             the external account number (int) or account ID Guid
     * @param string                                                $recipientId           the `recipientId` used when the envelope or template was created
     * @param string                                                $templateId            the ID of the template being accessed
     * @param \Surex\DocuSign\Generated\Model\BulkRecipientsRequest $bulkRecipientsRequest
     * @param string                                                $fetch                 Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsPutTemplateBulkRecipientsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\BulkRecipientsSummaryResponse|\Psr\Http\Message\ResponseInterface
     */
    public function recipientsPutTemplateBulkRecipients(string $accountId, string $recipientId, string $templateId, \Surex\DocuSign\Generated\Model\BulkRecipientsRequest $bulkRecipientsRequest, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\RecipientsPutTemplateBulkRecipients($accountId, $recipientId, $templateId, $bulkRecipientsRequest), $fetch);
    }

    /**
     * @param string $accountId   the external account number (int) or account ID Guid
     * @param string $recipientId the `recipientId` used when the envelope or template was created
     * @param string $templateId  the ID of the template being accessed
     * @param string $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsGetTemplateRecipientDocumentVisibilityBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeDocumentVisibility|\Psr\Http\Message\ResponseInterface
     */
    public function recipientsGetTemplateRecipientDocumentVisibility(string $accountId, string $recipientId, string $templateId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\RecipientsGetTemplateRecipientDocumentVisibility($accountId, $recipientId, $templateId), $fetch);
    }

    /**
     * @param string                                                     $accountId                  the external account number (int) or account ID Guid
     * @param string                                                     $recipientId                the `recipientId` used when the envelope or template was created
     * @param string                                                     $templateId                 the ID of the template being accessed
     * @param \Surex\DocuSign\Generated\Model\TemplateDocumentVisibility $templateDocumentVisibility
     * @param string                                                     $fetch                      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsPutTemplateRecipientDocumentVisibilityBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateDocumentVisibility|\Psr\Http\Message\ResponseInterface
     */
    public function recipientsPutTemplateRecipientDocumentVisibility(string $accountId, string $recipientId, string $templateId, \Surex\DocuSign\Generated\Model\TemplateDocumentVisibility $templateDocumentVisibility, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\RecipientsPutTemplateRecipientDocumentVisibility($accountId, $recipientId, $templateId, $templateDocumentVisibility), $fetch);
    }

    /**
     * Deletes one or more tabs associated with a recipient in a template.
     *
     * @param string                                       $accountId    the external account number (int) or account ID Guid
     * @param string                                       $recipientId  the `recipientId` used when the envelope or template was created
     * @param string                                       $templateId   the ID of the template being accessed
     * @param \Surex\DocuSign\Generated\Model\TemplateTabs $templateTabs
     * @param string                                       $fetch        Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsDeleteTemplateRecipientTabsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateRecipientTabs|\Psr\Http\Message\ResponseInterface
     */
    public function recipientsDeleteTemplateRecipientTabs(string $accountId, string $recipientId, string $templateId, \Surex\DocuSign\Generated\Model\TemplateTabs $templateTabs, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\RecipientsDeleteTemplateRecipientTabs($accountId, $recipientId, $templateId, $templateTabs), $fetch);
    }

    /**
     * Gets the tabs information for a signer or sign-in-person recipient in a template.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $recipientId     the `recipientId` used when the envelope or template was created
     * @param string $templateId      the ID of the template being accessed
     * @param array  $queryParameters {
     *
     *     @var string $include_anchor_tab_locations When set to **true**, all tabs with anchor tab properties are included in the response.
     *     @var string $include_metadata Reserved for DocuSign.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsGetTemplateRecipientTabsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateRecipientTabs|\Psr\Http\Message\ResponseInterface
     */
    public function recipientsGetTemplateRecipientTabs(string $accountId, string $recipientId, string $templateId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\RecipientsGetTemplateRecipientTabs($accountId, $recipientId, $templateId, $queryParameters), $fetch);
    }

    /**
     * Adds one or more tabs for a recipient.
     *
     * @param string                                       $accountId    the external account number (int) or account ID Guid
     * @param string                                       $recipientId  the `recipientId` used when the envelope or template was created
     * @param string                                       $templateId   the ID of the template being accessed
     * @param \Surex\DocuSign\Generated\Model\TemplateTabs $templateTabs
     * @param string                                       $fetch        Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsPostTemplateRecipientTabsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateRecipientTabs|\Psr\Http\Message\ResponseInterface
     */
    public function recipientsPostTemplateRecipientTabs(string $accountId, string $recipientId, string $templateId, \Surex\DocuSign\Generated\Model\TemplateTabs $templateTabs, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\RecipientsPostTemplateRecipientTabs($accountId, $recipientId, $templateId, $templateTabs), $fetch);
    }

    /**
     * Updates one or more tabs for a recipient in a template.
     *
     * @param string                                       $accountId    the external account number (int) or account ID Guid
     * @param string                                       $recipientId  the `recipientId` used when the envelope or template was created
     * @param string                                       $templateId   the ID of the template being accessed
     * @param \Surex\DocuSign\Generated\Model\TemplateTabs $templateTabs
     * @param string                                       $fetch        Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsPutTemplateRecipientTabsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateRecipientTabs|\Psr\Http\Message\ResponseInterface
     */
    public function recipientsPutTemplateRecipientTabs(string $accountId, string $recipientId, string $templateId, \Surex\DocuSign\Generated\Model\TemplateTabs $templateTabs, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\RecipientsPutTemplateRecipientTabs($accountId, $recipientId, $templateId, $templateTabs), $fetch);
    }

    /**
     * @param string                                                     $accountId                  the external account number (int) or account ID Guid
     * @param string                                                     $templateId                 the ID of the template being accessed
     * @param \Surex\DocuSign\Generated\Model\TemplateDocumentVisibility $templateDocumentVisibility
     * @param string                                                     $fetch                      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\RecipientsPutTemplateRecipientsDocumentVisibilityBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateDocumentVisibility|\Psr\Http\Message\ResponseInterface
     */
    public function recipientsPutTemplateRecipientsDocumentVisibility(string $accountId, string $templateId, \Surex\DocuSign\Generated\Model\TemplateDocumentVisibility $templateDocumentVisibility, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\RecipientsPutTemplateRecipientsDocumentVisibility($accountId, $templateId, $templateDocumentVisibility), $fetch);
    }

    /**
     * @param string                                           $accountId        the external account number (int) or account ID Guid
     * @param string                                           $templateId       the ID of the template being accessed
     * @param \Surex\DocuSign\Generated\Model\ReturnUrlRequest $returnUrlRequest
     * @param string                                           $fetch            Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ViewsPostTemplateEditViewBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\TemplateViews|\Psr\Http\Message\ResponseInterface
     */
    public function viewsPostTemplateEditView(string $accountId, string $templateId, \Surex\DocuSign\Generated\Model\ReturnUrlRequest $returnUrlRequest, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ViewsPostTemplateEditView($accountId, $templateId, $returnUrlRequest), $fetch);
    }

    /**
     * Retrieves a list of file types (mime-types and file-extensions) that are not supported for upload through the DocuSign system.
     *
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\UnsupportedFileTypesGetUnsupportedFileTypesBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\FileTypeList|\Psr\Http\Message\ResponseInterface
     */
    public function unsupportedFileTypesGetUnsupportedFileTypes(string $accountId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\UnsupportedFileTypesGetUnsupportedFileTypes($accountId), $fetch);
    }

    /**
     * This closes one or more user records in the account. Users are never deleted from an account, but closing a user prevents them from using account functions.

     The response returns whether the API execution was successful (200 - OK) or  if it failed. The response contains a user structure similar to the request and includes the user changes. If an error occurred during the DELETE operation for any of the users, the response for that user contains an `errorDetails` node with `errorCode` and `message` properties.
     *
     * @param string                                       $accountId    the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\UserInfoList $userInfoList
     * @param string                                       $fetch        Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\UsersDeleteUsersBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\GroupUsers|\Psr\Http\Message\ResponseInterface
     */
    public function usersDeleteUsers(string $accountId, \Surex\DocuSign\Generated\Model\UserInfoList $userInfoList, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\UsersDeleteUsers($accountId, $userInfoList), $fetch);
    }

    /**
     * Retrieves the list of users for the specified account.

     The response returns the list of users for the account along with the information about the result set. If the `additional_info` query was added to the endpoint and set to **true**, the full user information is returned for each user
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param array  $queryParameters {
     *
     *     @var string $additional_info when set to **true**, the full list of user information is returned for each user in the account
     *     @var string $count Number of records to return. The number must be greater than 0 and less than or equal to 100.
     *     @var string $email
     *     @var string $email_substring filters the returned user records by the email address or a sub-string of email address
     *     @var string $group_id filters user records returned by one or more group Id's
     *     @var string $include_usersettings_for_csv
     *     @var string $login_status
     *     @var string $not_group_id
     *     @var string $start_position Starting value for the list.
     *     @var string $status filters the results by user status
     *     @var string $user_name_substring Filters the user records returned by the user name or a sub-string of user name.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\UsersGetUsersBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\UserInformationList|\Psr\Http\Message\ResponseInterface
     */
    public function usersGetUsers(string $accountId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\UsersGetUsers($accountId, $queryParameters), $fetch);
    }

    /**
     * Adds new users to your account. Set the `userSettings` property in the request to specify the actions the users can perform on the account.
     *
     * @param string                                             $accountId          the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\NewUsersDefinition $newUsersDefinition
     * @param string                                             $fetch              Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\UsersPostUsersBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\NewUsersSummary|\Psr\Http\Message\ResponseInterface
     */
    public function usersPostUsers(string $accountId, \Surex\DocuSign\Generated\Model\NewUsersDefinition $newUsersDefinition, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\UsersPostUsers($accountId, $newUsersDefinition), $fetch);
    }

    /**
     * @param string                                              $accountId           the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\UserInformationList $userInformationList
     * @param string                                              $fetch               Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\UsersPutUsersBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\UserInformationList|\Psr\Http\Message\ResponseInterface
     */
    public function usersPutUsers(string $accountId, \Surex\DocuSign\Generated\Model\UserInformationList $userInformationList, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\UsersPutUsers($accountId, $userInformationList), $fetch);
    }

    /**
     * Retrieves the user information for the specified user.

     To return additional user information that details the last login date, login status, and the user's password expiration date, set the optional `additional_info` query string parameter to **true**.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $userId          The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param array  $queryParameters {
     *
     *     @var string $additional_info when set to **true**, the full list of user information is returned for each user in the account
     *     @var string $email
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\UserGetUserBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\Users|\Psr\Http\Message\ResponseInterface
     */
    public function userGetUser(string $accountId, string $userId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\UserGetUser($accountId, $userId, $queryParameters), $fetch);
    }

    /**
     * @param string                                $accountId the external account number (int) or account ID Guid
     * @param string                                $userId    The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param \Surex\DocuSign\Generated\Model\Users $users
     * @param string                                $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\UserPutUserBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\Users|\Psr\Http\Message\ResponseInterface
     */
    public function userPutUser(string $accountId, string $userId, \Surex\DocuSign\Generated\Model\Users $users, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\UserPutUser($accountId, $userId, $users), $fetch);
    }

    /**
     * Deletes the user authentication information for one or more cloud storage providers. The next time the user tries to access the cloud storage provider, they must pass normal authentication.
     *
     * @param string                                                $accountId             the external account number (int) or account ID Guid
     * @param string                                                $userId                The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param \Surex\DocuSign\Generated\Model\CloudStorageProviders $cloudStorageProviders
     * @param string                                                $fetch                 Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\CloudStorageDeleteCloudStorageProvidersBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\CloudStorageProviders|\Psr\Http\Message\ResponseInterface
     */
    public function cloudStorageDeleteCloudStorageProviders(string $accountId, string $userId, \Surex\DocuSign\Generated\Model\CloudStorageProviders $cloudStorageProviders, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\CloudStorageDeleteCloudStorageProviders($accountId, $userId, $cloudStorageProviders), $fetch);
    }

    /**
     * Retrieves the list of cloud storage providers enabled for the account and the configuration information for the user.

     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $userId          The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param array  $queryParameters {
     *
     *     @var string $redirectUrl  The URL the user is redirected to after the cloud storage provider authenticates the user. Using this will append the redirectUrl to the authenticationUrl.

     The redirectUrl is restricted to URLs in the docusign.com or docusign.net domains.

     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\CloudStorageGetCloudStorageProvidersBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\CloudStorageProviders|\Psr\Http\Message\ResponseInterface
     */
    public function cloudStorageGetCloudStorageProviders(string $accountId, string $userId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\CloudStorageGetCloudStorageProviders($accountId, $userId, $queryParameters), $fetch);
    }

    /**
     * Configures the redirect URL information  for one or more cloud storage providers for the specified user. The redirect URL is added to the authentication URL to complete the return route.
     *
     * @param string                                                $accountId             the external account number (int) or account ID Guid
     * @param string                                                $userId                The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param \Surex\DocuSign\Generated\Model\CloudStorageProviders $cloudStorageProviders
     * @param string                                                $fetch                 Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\CloudStoragePostCloudStorageBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\CloudStorageProviders|\Psr\Http\Message\ResponseInterface
     */
    public function cloudStoragePostCloudStorage(string $accountId, string $userId, \Surex\DocuSign\Generated\Model\CloudStorageProviders $cloudStorageProviders, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\CloudStoragePostCloudStorage($accountId, $userId, $cloudStorageProviders), $fetch);
    }

    /**
     * Deletes the user authentication information for the specified cloud storage provider. The next time the user tries to access the cloud storage provider, they must pass normal authentication for this cloud storage provider.
     *
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $serviceId The ID of the service to access.
     * @param string $userId    The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\CloudStorageDeleteCloudStorageBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\CloudStorageProviders|\Psr\Http\Message\ResponseInterface
     */
    public function cloudStorageDeleteCloudStorage(string $accountId, string $serviceId, string $userId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\CloudStorageDeleteCloudStorage($accountId, $serviceId, $userId), $fetch);
    }

    /**
     * Retrieves the list of cloud storage providers enabled for the account and the configuration information for the user.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $serviceId       The ID of the service to access.
     * @param string $userId          The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param array  $queryParameters {
     *
     *     @var string $redirectUrl  The URL the user is redirected to after the cloud storage provider authenticates the user. Using this will append the redirectUrl to the authenticationUrl.

     The redirectUrl is restricted to URLs in the docusign.com or docusign.net domains.

     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\CloudStorageGetCloudStorageBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\CloudStorageProviders|\Psr\Http\Message\ResponseInterface
     */
    public function cloudStorageGetCloudStorage(string $accountId, string $serviceId, string $userId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\CloudStorageGetCloudStorage($accountId, $serviceId, $userId, $queryParameters), $fetch);
    }

    /**
     * Retrieves a list of all the items in a specified folder from the specified cloud storage provider.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $serviceId       The ID of the service to access.
     * @param string $userId          The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param array  $queryParameters {
     *
     *     @var string $cloud_storage_folder_path A comma separated list of folder IDs included in the request.
     *     @var string $count An optional value that sets how many items are included in the response.

     *     @var string $order An optional value that sets the direction order used to sort the item list.

     Valid values are:

     * asc = ascending sort order
     * desc = descending sort order
     *     @var string $order_by An optional value that sets the file attribute used to sort the item list.

     Valid values are:

     * modified
     * name
     *     @var string $search_text
     *     @var string $start_position Indicates the starting point of the first item included in the response set. It uses a 0-based index. The default setting for this is 0.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\CloudStorageFolderGetCloudStorageFolderAllBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\CloudStorage|\Psr\Http\Message\ResponseInterface
     */
    public function cloudStorageFolderGetCloudStorageFolderAll(string $accountId, string $serviceId, string $userId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\CloudStorageFolderGetCloudStorageFolderAll($accountId, $serviceId, $userId, $queryParameters), $fetch);
    }

    /**
     * Retrieves a list of all the items in all  the folders associated with the user from the specified cloud storage provider. You can limit the scope of the returned items by providing a comma separated list of folder IDs in the request.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $folderId        the ID of the folder being accessed
     * @param string $serviceId       The ID of the service to access.
     * @param string $userId          The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param array  $queryParameters {
     *
     *     @var string $cloud_storage_folder_path
     *     @var string $count An optional value that sets how many items are included in the response.

     *     @var string $order An optional value that sets the direction order used to sort the item list.

     Valid values are:

     * asc = ascending sort order
     * desc = descending sort order
     *     @var string $order_by An optional value that sets the file attribute used to sort the item list.

     Valid values are:

     * modified
     * name
     *     @var string $search_text
     *     @var string $start_position Indicates the starting point of the first item included in the response set. It uses a 0-based index. The default setting for this is 0.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\CloudStorageFolderGetCloudStorageFolderBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\CloudStorage|\Psr\Http\Message\ResponseInterface
     */
    public function cloudStorageFolderGetCloudStorageFolder(string $accountId, string $folderId, string $serviceId, string $userId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\CloudStorageFolderGetCloudStorageFolder($accountId, $folderId, $serviceId, $userId, $queryParameters), $fetch);
    }

    /**
     * Deletes the specified custom user settings for a single user.

     ###Deleting Grouped Custom User Settings###

     If the custom user settings you want to delete are grouped, you must include the following information in the header, after Content-Type, in the request:

     `X-DocuSign-User-Settings-Key:group_name`

     Where the `group_name` is your designated name for the group of customer user settings.

     If the extra header information is not included, only the custom user settings that were added without a group are deleted.
     *
     * @param string                                             $accountId          the external account number (int) or account ID Guid
     * @param string                                             $userId             The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param \Surex\DocuSign\Generated\Model\UserCustomSettings $userCustomSettings
     * @param string                                             $fetch              Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\UserCustomSettingsDeleteCustomSettingsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\UserCustomSettings|\Psr\Http\Message\ResponseInterface
     */
    public function userCustomSettingsDeleteCustomSettings(string $accountId, string $userId, \Surex\DocuSign\Generated\Model\UserCustomSettings $userCustomSettings, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\UserCustomSettingsDeleteCustomSettings($accountId, $userId, $userCustomSettings), $fetch);
    }

    /**
     * Retrieves a list of custom user settings for a single user.

     Custom settings provide a flexible way to store and retrieve custom user information that can be used in your own system.

     ###### Note: Custom user settings are not the same as user account settings.

     ###Getting Grouped Custom User Settings###

     If the custom user settings you want to retrieve are grouped, you must include the following information in the header, after Content-Type, in the request:

     `X-DocuSign-User-Settings-Key:group_name`

     Where the `group_name` is your designated name for the group of customer user settings.

     If the extra header information is not included, only the custom user settings that were added without a group are retrieved.
     *
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $userId    The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\UserCustomSettingsGetCustomSettingsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\UserCustomSettings|\Psr\Http\Message\ResponseInterface
     */
    public function userCustomSettingsGetCustomSettings(string $accountId, string $userId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\UserCustomSettingsGetCustomSettings($accountId, $userId), $fetch);
    }

    /**
     * Adds or updates custom user settings for the specified user.

     ###### Note: Custom user settings are not the same as user account settings.

     Custom settings provide a flexible way to store and retrieve custom user information that you can use in your own system.

     **Important**: There is a limit on the size for all the custom user settings for a single user. The limit is 4,000 characters, which includes the XML and JSON structure for the settings.

     ### Grouping Custom User Settings ###

     You can group custom user settings when adding them. Grouping allows you to retrieve settings that are in a specific group, instead of retrieving all the user custom settings.

     To group custom user settings, add the following information in the header, after Content-Type:

     `X-DocuSign-User-Settings-Key:group_name`

     Where the `group_name` is your designated name for the group of customer user settings. Grouping is shown in the Example Request Body below.

     When getting or deleting grouped custom user settings, you must include the extra header information.

     Grouping custom user settings is not required and if the extra header information is not included, the custom user settings are added normally and can be retrieved or deleted without including the additional header.
     *
     * @param string                                             $accountId          the external account number (int) or account ID Guid
     * @param string                                             $userId             The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param \Surex\DocuSign\Generated\Model\UserCustomSettings $userCustomSettings
     * @param string                                             $fetch              Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\UserCustomSettingsPutCustomSettingsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\UserCustomSettings|\Psr\Http\Message\ResponseInterface
     */
    public function userCustomSettingsPutCustomSettings(string $accountId, string $userId, \Surex\DocuSign\Generated\Model\UserCustomSettings $userCustomSettings, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\UserCustomSettingsPutCustomSettings($accountId, $userId, $userCustomSettings), $fetch);
    }

    /**
     * Retrieves the user profile information, the privacy settings and personal information (address, phone number, etc.) for the specified user.

     The userId parameter specified in the endpoint must match the authenticated user's user ID and the user must be a member of the specified account.
     *
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $userId    The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\UserProfileGetProfileBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\UserProfiles|\Psr\Http\Message\ResponseInterface
     */
    public function userProfileGetProfile(string $accountId, string $userId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\UserProfileGetProfile($accountId, $userId), $fetch);
    }

    /**
     * Updates the user's detail information, profile information, privacy settings, and personal information in the user ID card.

     You can also change a user's name by changing the information in the `userDetails` property. When changing a user's name, you can either change the information in the `userName` property OR change the information in `firstName`, `middleName`, `lastName, suffixName`, and `title` properties. Changes to `firstName`, `middleName`, `lastName`, `suffixName`, and `title` properties take precedence over changes to the `userName` property.
     *
     * @param string                                       $accountId    the external account number (int) or account ID Guid
     * @param string                                       $userId       The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param \Surex\DocuSign\Generated\Model\UserProfiles $userProfiles
     * @param string                                       $fetch        Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\UserProfilePutProfileBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function userProfilePutProfile(string $accountId, string $userId, \Surex\DocuSign\Generated\Model\UserProfiles $userProfiles, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\UserProfilePutProfile($accountId, $userId, $userProfiles), $fetch);
    }

    /**
     * Deletes the user profile image from the  specified user's profile.

     The userId parameter specified in the endpoint must match the authenticated user's user ID and the user must be a member of the specified account.
     *
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $userId    The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\UserProfileImageDeleteUserProfileImageBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function userProfileImageDeleteUserProfileImage(string $accountId, string $userId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\UserProfileImageDeleteUserProfileImage($accountId, $userId), $fetch);
    }

    /**
     * Retrieves the user profile picture for the specified user. The image is returned in the same format as uploaded.

     The userId parameter specified in the endpoint must match the authenticated user's user ID and the user must be a member of the specified account.

     If successful, the response returns a 200 - OK and the user profile image.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $userId          The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param array  $queryParameters {
     *
     *     @var string $encoding
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\UserProfileImageGetUserProfileImageBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function userProfileImageGetUserProfileImage(string $accountId, string $userId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\UserProfileImageGetUserProfileImage($accountId, $userId, $queryParameters), $fetch);
    }

    /**
     * Updates the user profile image by uploading an image to the user profile.

     The supported image formats are: gif, png, jpeg, and bmp. The file must be less than 200K. For best viewing results, DocuSign recommends that the image is no more than 79 pixels wide and high.
     *
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $userId    The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\UserProfileImagePutUserProfileImageBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function userProfileImagePutUserProfileImage(string $accountId, string $userId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\UserProfileImagePutUserProfileImage($accountId, $userId), $fetch);
    }

    /**
     * Retrieves a list of the account settings and email notification information for the specified user.

     The response returns the account setting name/value information and the email notification settings for the specified user. For more information about the different user settings, see the [ML:userSettings list].
     *
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $userId    The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\UserSettingsGetUserSettingsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\UserSettingsInformation|\Psr\Http\Message\ResponseInterface
     */
    public function userSettingsGetUserSettings(string $accountId, string $userId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\UserSettingsGetUserSettings($accountId, $userId), $fetch);
    }

    /**
     * Updates the account settings list and email notification types for the specified user.
     *
     * @param string                                                  $accountId               the external account number (int) or account ID Guid
     * @param string                                                  $userId                  The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param \Surex\DocuSign\Generated\Model\UserSettingsInformation $userSettingsInformation
     * @param string                                                  $fetch                   Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\UserSettingsPutUserSettingsBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function userSettingsPutUserSettings(string $accountId, string $userId, \Surex\DocuSign\Generated\Model\UserSettingsInformation $userSettingsInformation, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\UserSettingsPutUserSettings($accountId, $userId, $userSettingsInformation), $fetch);
    }

    /**
     * Retrieves the signature definitions for the specified user.

     The userId parameter specified in the endpoint must match the authenticated user's user ID and the user must be a member of the account.

     The `signatureId` parameter accepts a signature ID or a signature name. DocuSign recommends you use signature ID (`signatureId`), since some names contain characters that do not properly encode into a URL. If you use the user name, it is likely that the name includes spaces. In that case, URL encode the name before using it in the endpoint.

     For example encode "Bob Smith" as "Bob%20Smith".
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $userId          The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param array  $queryParameters {
     *
     *     @var string $stamp_type
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\UserSignaturesGetUserSignaturesBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\UserSignaturesInformation|\Psr\Http\Message\ResponseInterface
     */
    public function userSignaturesGetUserSignatures(string $accountId, string $userId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\UserSignaturesGetUserSignatures($accountId, $userId, $queryParameters), $fetch);
    }

    /**
     * Adds a user signature image and/or user initials image to the specified user.

     The userId property specified in the endpoint must match the authenticated user's userId and the user must be a member of the account.

     The rules and processes associated with this are:

     * If Content-Type is set to application/json, then the default behavior for creating a default signature image, based on the name and a DocuSign font, is used.
     * If Content-Type is set to multipart/form-data, then the request must contain a first part with the user signature information, followed by parts that contain the images.

     For each Image part, the Content-Disposition header has a "filename" value that is used to map to the `signatureName` and/or `signatureInitials` properties in the JSON to the image.

     For example:
     `Content-Disposition: file; filename="Ron Test20121127083900"`

     If no matching image (by filename value) is found, then the image is not set. One, both, or neither of the signature and initials images can be set with this call.

     The Content-Transfer-Encoding: base64 header, set in the header for the part containing the image, can be set to indicate that the images are formatted as base64 instead of as binary.

     If successful, 200-OK is returned, and a JSON structure containing the signature information is provided, note that the signatureId can change with each API POST, PUT, or DELETE since the changes to the signature structure cause the current signature to be closed, and a new signature record to be created.
     *
     * @param string                                                    $accountId                 the external account number (int) or account ID Guid
     * @param string                                                    $userId                    The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param \Surex\DocuSign\Generated\Model\UserSignaturesInformation $userSignaturesInformation
     * @param string                                                    $fetch                     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\UserSignaturesPostUserSignaturesBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\UserSignaturesInformation|\Psr\Http\Message\ResponseInterface
     */
    public function userSignaturesPostUserSignatures(string $accountId, string $userId, \Surex\DocuSign\Generated\Model\UserSignaturesInformation $userSignaturesInformation, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\UserSignaturesPostUserSignatures($accountId, $userId, $userSignaturesInformation), $fetch);
    }

    /**
     * @param string                                                    $accountId                 the external account number (int) or account ID Guid
     * @param string                                                    $userId                    The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param \Surex\DocuSign\Generated\Model\UserSignaturesInformation $userSignaturesInformation
     * @param string                                                    $fetch                     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\UserSignaturesPutUserSignatureBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\UserSignaturesInformation|\Psr\Http\Message\ResponseInterface
     */
    public function userSignaturesPutUserSignature(string $accountId, string $userId, \Surex\DocuSign\Generated\Model\UserSignaturesInformation $userSignaturesInformation, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\UserSignaturesPutUserSignature($accountId, $userId, $userSignaturesInformation), $fetch);
    }

    /**
     * Removes the signature information for the user.

     The userId parameter specified in the endpoint must match the authenticated user's user ID and the user must be a member of the account.

     The `signatureId` accepts a signature ID or a signature name. DocuSign recommends you use signature ID (`signatureId`), since some names contain characters that do not properly encode into a URL. If you use the user name, it is likely that the name includes spaces. In that case, URL encode the name before using it in the endpoint.

     For example encode "Bob Smith" as "Bob%20Smith".
     *
     * @param string $accountId   the external account number (int) or account ID Guid
     * @param string $signatureId the ID of the signature being accessed
     * @param string $userId      The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param string $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\UserSignaturesDeleteUserSignatureBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function userSignaturesDeleteUserSignature(string $accountId, string $signatureId, string $userId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\UserSignaturesDeleteUserSignature($accountId, $signatureId, $userId), $fetch);
    }

    /**
     * Retrieves the structure of a single signature with a known signature name.

     The userId specified in the endpoint must match the authenticated user's user ID and the user must be a member of the account.

     The `signatureId` parameter accepts a signature ID or a signature name. DocuSign recommends you use signature ID (`signatureId`), since some names contain characters that do not properly encode into a URL. If you use the user name, it is likely that the name includes spaces. In that case, URL encode the name before using it in the endpoint.

     For example encode "Bob Smith" as "Bob%20Smith".
     *
     * @param string $accountId   the external account number (int) or account ID Guid
     * @param string $signatureId the ID of the signature being accessed
     * @param string $userId      The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param string $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\UserSignaturesGetUserSignatureBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\UserSignatures|\Psr\Http\Message\ResponseInterface
     */
    public function userSignaturesGetUserSignature(string $accountId, string $signatureId, string $userId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\UserSignaturesGetUserSignature($accountId, $signatureId, $userId), $fetch);
    }

    /**
     * Creates, or updates, the signature font and initials for the specified user. When creating a signature, you use this resource to create the signature name and then add the signature and initials images into the signature.

     ###### Note: This will also create a default signature for the user when one does not exist.

     The userId property specified in the endpoint must match the authenticated user's user ID and the user must be a member of the account.

     The `signatureId` parameter accepts a signature ID or a signature name. DocuSign recommends you use signature ID (`signatureId`), since some names contain characters that do not properly encode into a URL. If you use the user name, it is likely that the name includes spaces. In that case, URL encode the name before using it in the endpoint.

     For example encode "Bob Smith" as "Bob%20Smith".
     *
     * @param string                                                  $accountId               the external account number (int) or account ID Guid
     * @param string                                                  $signatureId             the ID of the signature being accessed
     * @param string                                                  $userId                  The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param \Surex\DocuSign\Generated\Model\UserSignatureDefinition $userSignatureDefinition
     * @param array                                                   $queryParameters         {
     *
     *     @var string $close_existing_signature When set to **true**, closes the current signature.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\UserSignaturesPutUserSignatureByIdBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\UserSignatures|\Psr\Http\Message\ResponseInterface
     */
    public function userSignaturesPutUserSignatureById(string $accountId, string $signatureId, string $userId, \Surex\DocuSign\Generated\Model\UserSignatureDefinition $userSignatureDefinition, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\UserSignaturesPutUserSignatureById($accountId, $signatureId, $userId, $userSignatureDefinition, $queryParameters), $fetch);
    }

    /**
     * Deletes the specified initials image or signature image for the specified user.

     The function deletes one or the other of the image types, to delete both the initials image and signature image you must call the endpoint twice.

     The userId parameter specified in the endpoint must match the authenticated user's user ID and the user must be a member of the account.

     The `signatureId` parameter accepts a signature ID or a signature name. DocuSign recommends you use signature ID (`signatureId`), since some names contain characters that do not properly encode into a URL. If you use the user name, it is likely that the name includes spaces. In that case, URL encode the name before using it in the endpoint.

     For example encode "Bob Smith" as "Bob%20Smith".
     *
     * @param string $accountId   the external account number (int) or account ID Guid
     * @param string $imageType   one of **signature_image** or **initials_image**
     * @param string $signatureId the ID of the signature being accessed
     * @param string $userId      The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param string $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\UserSignaturesDeleteUserSignatureImageBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\UserSignatures|\Psr\Http\Message\ResponseInterface
     */
    public function userSignaturesDeleteUserSignatureImage(string $accountId, string $imageType, string $signatureId, string $userId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\UserSignaturesDeleteUserSignatureImage($accountId, $imageType, $signatureId, $userId), $fetch);
    }

    /**
     * Retrieves the specified initials image or signature image for the specified user. The image is returned in the same format as uploaded. In the request you can specify if the chrome (the added line and identifier around the initial image) is returned with the image.

     The userId property specified in the endpoint must match the authenticated user's user ID and the user must be a member of the account.

     The `signatureId` parameter accepts a signature ID or a signature name. DocuSign recommends you use signature ID (`signatureId`), since some names contain characters that do not properly encode into a URL. If you use the user name, it is likely that the name includes spaces. In that case, URL encode the name before using it in the endpoint.

     For example encode "Bob Smith" as "Bob%20Smith".

     ###### Note: Older envelopes might only have chromed images. If getting the non-chromed image fails, try getting the chromed image.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $imageType       one of **signature_image** or **initials_image**
     * @param string $signatureId     the ID of the signature being accessed
     * @param string $userId          The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param array  $queryParameters {
     *
     *     @var string $include_chrome
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\UserSignaturesGetUserSignatureImageBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function userSignaturesGetUserSignatureImage(string $accountId, string $imageType, string $signatureId, string $userId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\UserSignaturesGetUserSignatureImage($accountId, $imageType, $signatureId, $userId, $queryParameters), $fetch);
    }

    /**
     * Updates the user signature image or user initials image for the specified user. The supported image formats for this file are: gif, png, jpeg, and bmp. The file must be less than 200K.

     The userId property specified in the endpoint must match the authenticated user's user ID and the user must be a member of the account.

     The `signatureId` parameter accepts a signature ID or a signature name. DocuSign recommends you use signature ID (`signatureId`), since some names contain characters that do not properly encode into a URL. If you use the user name, it is likely that the name includes spaces. In that case, URL encode the name before using it in the endpoint.

     For example encode "Bob Smith" as "Bob%20Smith".

     *
     * @param string $accountId   the external account number (int) or account ID Guid
     * @param string $imageType   one of **signature_image** or **initials_image**
     * @param string $signatureId the ID of the signature being accessed
     * @param string $userId      The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param string $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\UserSignaturesPutUserSignatureImageBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\UserSignatures|\Psr\Http\Message\ResponseInterface
     */
    public function userSignaturesPutUserSignatureImage(string $accountId, string $imageType, string $signatureId, string $userId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\UserSignaturesPutUserSignatureImage($accountId, $imageType, $signatureId, $userId), $fetch);
    }

    /**
     * Deletes a social account from a use's account.
     *
     * @param string                                                  $accountId               the external account number (int) or account ID Guid
     * @param string                                                  $userId                  The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param \Surex\DocuSign\Generated\Model\UserSocialAccountLogins $userSocialAccountLogins
     * @param string                                                  $fetch                   Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\UserSocialLoginDeleteUserSocialLoginBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function userSocialLoginDeleteUserSocialLogin(string $accountId, string $userId, \Surex\DocuSign\Generated\Model\UserSocialAccountLogins $userSocialAccountLogins, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\UserSocialLoginDeleteUserSocialLogin($accountId, $userId, $userSocialAccountLogins), $fetch);
    }

    /**
     * Retrieves a list of social accounts linked to a user's account.
     *
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $userId    The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\UserSocialLoginGetUserSocialLoginBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\UserSocialIdResult|\Psr\Http\Message\ResponseInterface
     */
    public function userSocialLoginGetUserSocialLogin(string $accountId, string $userId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\UserSocialLoginGetUserSocialLogin($accountId, $userId), $fetch);
    }

    /**
     * Adds a new social account to a user's account.
     *
     * @param string                                                  $accountId               the external account number (int) or account ID Guid
     * @param string                                                  $userId                  The user ID of the user being accessed. Generally this is the user ID of the authenticated user, but if the authenticated user is an Admin on the account, this may be another user the Admin user is accessing.
     * @param \Surex\DocuSign\Generated\Model\UserSocialAccountLogins $userSocialAccountLogins
     * @param string                                                  $fetch                   Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\UserSocialLoginPutUserSocialLoginBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function userSocialLoginPutUserSocialLogin(string $accountId, string $userId, \Surex\DocuSign\Generated\Model\UserSocialAccountLogins $userSocialAccountLogins, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\UserSocialLoginPutUserSocialLogin($accountId, $userId, $userSocialAccountLogins), $fetch);
    }

    /**
     * Returns a URL that allows you to embed the authentication view of the DocuSign UI in your applications.
     *
     * @param string                                             $accountId          the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\ConsoleViewRequest $consoleViewRequest
     * @param string                                             $fetch              Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\ViewsPostAccountConsoleViewBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\EnvelopeViews|\Psr\Http\Message\ResponseInterface
     */
    public function viewsPostAccountConsoleView(string $accountId, \Surex\DocuSign\Generated\Model\ConsoleViewRequest $consoleViewRequest, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\ViewsPostAccountConsoleView($accountId, $consoleViewRequest), $fetch);
    }

    /**
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\WatermarkGetWatermarkBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\AccountWatermarks|\Psr\Http\Message\ResponseInterface
     */
    public function watermarkGetWatermark(string $accountId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\WatermarkGetWatermark($accountId), $fetch);
    }

    /**
     * @param string                                            $accountId         the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\AccountWatermarks $accountWatermarks
     * @param string                                            $fetch             Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\WatermarkPutWatermarkBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\AccountWatermarks|\Psr\Http\Message\ResponseInterface
     */
    public function watermarkPutWatermark(string $accountId, \Surex\DocuSign\Generated\Model\AccountWatermarks $accountWatermarks, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\WatermarkPutWatermark($accountId, $accountWatermarks), $fetch);
    }

    /**
     * @param string                                            $accountId         the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\AccountWatermarks $accountWatermarks
     * @param string                                            $fetch             Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\WatermarkPreviewPutWatermarkPreviewBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\AccountWatermarks|\Psr\Http\Message\ResponseInterface
     */
    public function watermarkPreviewPutWatermarkPreview(string $accountId, \Surex\DocuSign\Generated\Model\AccountWatermarks $accountWatermarks, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\WatermarkPreviewPutWatermarkPreview($accountId, $accountWatermarks), $fetch);
    }

    /**
     * Gets information about the Workspaces that have been created.
     *
     * @param string $accountId the external account number (int) or account ID Guid
     * @param string $fetch     Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\WorkspaceGetWorkspacesBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\WorkspaceList|\Psr\Http\Message\ResponseInterface
     */
    public function workspaceGetWorkspaces(string $accountId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\WorkspaceGetWorkspaces($accountId), $fetch);
    }

    /**
     * Creates a new workspace.
     *
     * @param string                                     $accountId  the external account number (int) or account ID Guid
     * @param \Surex\DocuSign\Generated\Model\Workspaces $workspaces
     * @param string                                     $fetch      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\WorkspacePostWorkspaceBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\Workspaces|\Psr\Http\Message\ResponseInterface
     */
    public function workspacePostWorkspace(string $accountId, \Surex\DocuSign\Generated\Model\Workspaces $workspaces, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\WorkspacePostWorkspace($accountId, $workspaces), $fetch);
    }

    /**
     * Deletes an existing workspace (logically).
     *
     * @param string $accountId   the external account number (int) or account ID Guid
     * @param string $workspaceId specifies the workspace ID GUID
     * @param string $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\WorkspaceDeleteWorkspaceBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\Workspaces|\Psr\Http\Message\ResponseInterface
     */
    public function workspaceDeleteWorkspace(string $accountId, string $workspaceId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\WorkspaceDeleteWorkspace($accountId, $workspaceId), $fetch);
    }

    /**
     * Retrives properties about a workspace given a unique workspaceId.
     *
     * @param string $accountId   the external account number (int) or account ID Guid
     * @param string $workspaceId specifies the workspace ID GUID
     * @param string $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\WorkspaceGetWorkspaceBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\Workspaces|\Psr\Http\Message\ResponseInterface
     */
    public function workspaceGetWorkspace(string $accountId, string $workspaceId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\WorkspaceGetWorkspace($accountId, $workspaceId), $fetch);
    }

    /**
     * Updates information about a specific workspace.
     *
     * @param string                                     $accountId   the external account number (int) or account ID Guid
     * @param string                                     $workspaceId specifies the workspace ID GUID
     * @param \Surex\DocuSign\Generated\Model\Workspaces $workspaces
     * @param string                                     $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\WorkspacePutWorkspaceBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\Workspaces|\Psr\Http\Message\ResponseInterface
     */
    public function workspacePutWorkspace(string $accountId, string $workspaceId, \Surex\DocuSign\Generated\Model\Workspaces $workspaces, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\WorkspacePutWorkspace($accountId, $workspaceId, $workspaces), $fetch);
    }

    /**
     * @param string                                            $accountId         the external account number (int) or account ID Guid
     * @param string                                            $folderId          the ID of the folder being accessed
     * @param string                                            $workspaceId       specifies the workspace ID GUID
     * @param \Surex\DocuSign\Generated\Model\WorkspaceItemList $workspaceItemList
     * @param string                                            $fetch             Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\WorkspaceFolderDeleteWorkspaceItemsBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function workspaceFolderDeleteWorkspaceItems(string $accountId, string $folderId, string $workspaceId, \Surex\DocuSign\Generated\Model\WorkspaceItemList $workspaceItemList, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\WorkspaceFolderDeleteWorkspaceItems($accountId, $folderId, $workspaceId, $workspaceItemList), $fetch);
    }

    /**
     * Retrieves workspace folder contents, which can include sub folders and files.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $folderId        the ID of the folder being accessed
     * @param string $workspaceId     specifies the workspace ID GUID
     * @param array  $queryParameters {
     *
     *     @var string $count the maximum number of results to be returned by this request
     *     @var string $include_files When set to **true**, file information is returned in the response along with folder information. The default is **false**.
     *     @var string $include_sub_folders When set to **true**, information about the sub-folders of the current folder is returned. The default is **false**.
     *     @var string $include_thumbnails When set to **true**, thumbnails are returned as part of the response.  The default is **false**.
     *     @var string $include_user_detail Set to **true** to return extended details about the user. The default is **false**.
     *     @var string $start_position the position within the total result set from which to start returning values
     *     @var string $workspace_user_id If set, then the results are filtered to those associated with the specified userId.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\WorkspaceFolderGetWorkspaceFolderBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\WorkspaceFolderContents|\Psr\Http\Message\ResponseInterface
     */
    public function workspaceFolderGetWorkspaceFolder(string $accountId, string $folderId, string $workspaceId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\WorkspaceFolderGetWorkspaceFolder($accountId, $folderId, $workspaceId, $queryParameters), $fetch);
    }

    /**
     * @param string $accountId   the external account number (int) or account ID Guid
     * @param string $folderId    the ID of the folder being accessed
     * @param string $workspaceId specifies the workspace ID GUID
     * @param string $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\WorkspaceFilePostWorkspaceFilesBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\WorkspaceItems|\Psr\Http\Message\ResponseInterface
     */
    public function workspaceFilePostWorkspaceFiles(string $accountId, string $folderId, string $workspaceId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\WorkspaceFilePostWorkspaceFiles($accountId, $folderId, $workspaceId), $fetch);
    }

    /**
     * Retrieves a workspace file (the binary).
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $fileId          specifies the room file ID GUID
     * @param string $folderId        the ID of the folder being accessed
     * @param string $workspaceId     specifies the workspace ID GUID
     * @param array  $queryParameters {
     *
     *     @var string $is_download When set to **true**, the Content-Disposition header is set in the response. The value of the header provides the filename of the file. Default is **false**.
     *     @var string $pdf_version When set to **true** the file returned as a PDF.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\WorkspaceFileGetWorkspaceFileBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function workspaceFileGetWorkspaceFile(string $accountId, string $fileId, string $folderId, string $workspaceId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\WorkspaceFileGetWorkspaceFile($accountId, $fileId, $folderId, $workspaceId, $queryParameters), $fetch);
    }

    /**
     * Updates workspace item metadata for one or more specific files/folders.
     *
     * @param string $accountId   the external account number (int) or account ID Guid
     * @param string $fileId      specifies the room file ID GUID
     * @param string $folderId    the ID of the folder being accessed
     * @param string $workspaceId specifies the workspace ID GUID
     * @param string $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\WorkspaceFilePutWorkspaceFileBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\WorkspaceItems|\Psr\Http\Message\ResponseInterface
     */
    public function workspaceFilePutWorkspaceFile(string $accountId, string $fileId, string $folderId, string $workspaceId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\WorkspaceFilePutWorkspaceFile($accountId, $fileId, $folderId, $workspaceId), $fetch);
    }

    /**
     * Retrieves a workspace file as rasterized pages.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param string $fileId          specifies the room file ID GUID
     * @param string $folderId        the ID of the folder being accessed
     * @param string $workspaceId     specifies the workspace ID GUID
     * @param array  $queryParameters {
     *
     *     @var string $count the maximum number of results to be returned by this request
     *     @var string $dpi Number of dots per inch for the resulting image. The default if not used is 94. The range is 1-310.
     *     @var string $max_height sets the maximum height (in pixels) of the returned image
     *     @var string $max_width sets the maximum width (in pixels) of the returned image
     *     @var string $start_position The position within the total result set from which to start returning values. The value **thumbnail** may be used to return the page image.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\WorkspaceFilePagesGetWorkspaceFilePagesBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\PageImages|\Psr\Http\Message\ResponseInterface
     */
    public function workspaceFilePagesGetWorkspaceFilePages(string $accountId, string $fileId, string $folderId, string $workspaceId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\WorkspaceFilePagesGetWorkspaceFilePages($accountId, $fileId, $folderId, $workspaceId, $queryParameters), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\AccountsGetProvisioningBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\ProvisioningInformation|\Psr\Http\Message\ResponseInterface
     */
    public function accountsGetProvisioning(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\AccountsGetProvisioning(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\BillingPlansGetBillingPlansBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\BillingPlansResponse|\Psr\Http\Message\ResponseInterface
     */
    public function billingPlansGetBillingPlans(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\BillingPlansGetBillingPlans(), $fetch);
    }

    /**
     * Retrieves the billing plan details for the specified billing plan ID.
     *
     * @param string $billingPlanId the ID of the billing plan being accessed
     * @param string $fetch         Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\BillingPlansGetBillingPlanBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\BillingPlanResponse|\Psr\Http\Message\ResponseInterface
     */
    public function billingPlansGetBillingPlan(string $billingPlanId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\BillingPlansGetBillingPlan($billingPlanId), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\PasswordRulesGetPasswordRulesBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\UserPasswordRules|\Psr\Http\Message\ResponseInterface
     */
    public function passwordRulesGetPasswordRules(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\PasswordRulesGetPasswordRules(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\APIRequestLogDeleteRequestLogsBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function aPIRequestLogDeleteRequestLogs(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\APIRequestLogDeleteRequestLogs(), $fetch);
    }

    /**
     * Retrieves a list of log entries as a JSON or xml object or as a zip file containing the entries.

     If the Accept header is set to application/zip, the response is a zip file containing individual text files, each representing an API request.

     If the Accept header is set to `application/json` or `application/xml`, the response returns list of log entries in either JSON or XML. An example JSON response body is shown below.
     *
     * @param array $queryParameters {
     *
     *     @var string $encoding
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\APIRequestLogGetRequestLogsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\ApiRequestLogsResult|\Psr\Http\Message\ResponseInterface
     */
    public function aPIRequestLogGetRequestLogs(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\APIRequestLogGetRequestLogs($queryParameters), $fetch);
    }

    /**
     * Retrieves information for a single log entry.

     **Request**
     The `requestLogfId` property can be retrieved by getting the list of log entries. The Content-Transfer-Encoding header can be set to base64 to retrieve the API request/response as base 64 string. Otherwise the bytes of the request/response are returned.

     **Response**
     If the Content-Transfer-Encoding header was set to base64, the log is returned as a base64 string.
     *
     * @param string $requestLogId
     * @param string $fetch        Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\APIRequestLogGetRequestLogBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function aPIRequestLogGetRequestLog(string $requestLogId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\APIRequestLogGetRequestLog($requestLogId), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\APIRequestLogGetRequestLogSettingsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\RequestLogs|\Psr\Http\Message\ResponseInterface
     */
    public function aPIRequestLogGetRequestLogSettings(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\APIRequestLogGetRequestLogSettings(), $fetch);
    }

    /**
     * Enables or disables API request logging for troubleshooting.

     When enabled (`apiRequestLogging` is set to true), REST API requests and responses for the user are added to a log. A log can have up to 50 requests/responses and the current number of log entries can be determined by getting the settings. Logging is automatically disabled when the log limit of 50 is reached.

     You can call [ML:GetRequestLog] or [ML:GetRequestLogs] to download the log files (individually or as a zip file). Call [ML:DeleteRequestLogs] to clear the log by deleting current entries.

     Private information, such as passwords and integrator key information, which is normally located in the call header is omitted from the request/response log.

     ###### Note: API request logging only captures requests from the authenticated user. Any call that does not authenticate the user and resolve a userId isn't logged. Meaning that login_information, NewAccounts, or other distributor-credential calls are not logged.

     *
     * @param \Surex\DocuSign\Generated\Model\RequestLogs $requestLogs
     * @param string                                      $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\APIRequestLogPutRequestLogSettingsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\RequestLogs|\Psr\Http\Message\ResponseInterface
     */
    public function aPIRequestLogPutRequestLogSettings(\Surex\DocuSign\Generated\Model\RequestLogs $requestLogs, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\APIRequestLogPutRequestLogSettings($requestLogs), $fetch);
    }

    /**
     * Retrieves account information for the authenticated user. Since the API is sessionless, this method does not actually log you in.
     Instead, the method returns information about the account or accounts that the authenticated user has access to.

     ###### Important: This method must only be used for the [Legacy Header Authentication][legacyheader] flow. Use the [`AccountServer: userInfo` method](../../../../guide/authentication/userinfo.html) for the OAuth2 Authentiction Code and Implicit Grant flows.

     Each account has a `baseUrl` property, returned in the response.
     Use this `baseUrl` in all future API calls as the base of the request URL.

     For each account, the `baseUrl` property includes the DocuSign server, the API version, and the `accountId` property.

     It is not uncommon for an authenticated user to have access to more than one account (and more than one `baseUrl`). Depending on your integration's use case, your integration may choose to:

     * Use the account whose `isDefault` field is `true`.
     * List the available accounts and ask the user to choose one.
     * Enable the system administrator to set the account that should be used by your integration.

     If this method returns successfully, then you also know that the user has successfully authenticated with the DocuSign Signature platform.


     [legacyheader]: ../../../../guide/authentication/legacy_auth.html
     [userinfo]: ../../../../guide/authentication/userinfo.html
     [authcode]: ../../../../guide/authentication/oa2_auth_code.md
     [implicit]: ../../../../guide/authentication/oa2_implicit.md

     *
     * @param array $queryParameters {
     *
     *     @var string $api_password reserved for DocuSign

     *     @var string $embed_account_id_guid
     *     @var string $include_account_id_guid when set to **true**, shows the account ID GUID in the response
     *     @var string $login_settings determines whether login settings are returned in the response

     Valid Values:

     * all -  All the login settings are returned.
     * none - no login settings are returned.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\LoginInformationGetLoginInformationBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\Authentication|\Psr\Http\Message\ResponseInterface
     */
    public function loginInformationGetLoginInformation(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\LoginInformationGetLoginInformation($queryParameters), $fetch);
    }

    /**
     * Updates the password for a specified user.
     *
     * @param string                                                  $loginPart               currently, only the value **password** is supported
     * @param \Surex\DocuSign\Generated\Model\UserPasswordInformation $userPasswordInformation
     * @param string                                                  $fetch                   Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\LoginInformationPutLoginInformationBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function loginInformationPutLoginInformation(string $loginPart, \Surex\DocuSign\Generated\Model\UserPasswordInformation $userPasswordInformation, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\LoginInformationPutLoginInformation($loginPart, $userPasswordInformation), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\OAuth2PostRevokeBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function oAuth2PostRevoke(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\OAuth2PostRevoke(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Surex\DocuSign\Generated\Exception\OAuth2PostTokenBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\OauthAccess|\Psr\Http\Message\ResponseInterface
     */
    public function oAuth2PostToken(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Surex\DocuSign\Generated\Endpoint\OAuth2PostToken(), $fetch);
    }

    public static function create($httpClient = null)
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\HttpClientDiscovery::find();
            $plugins    = [];
            $uri        = \Http\Discovery\UriFactoryDiscovery::find()->createUri('https://www.docusign.net/restapi');
            $plugins[]  = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            $plugins[]  = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $messageFactory = \Http\Discovery\MessageFactoryDiscovery::find();
        $streamFactory  = \Http\Discovery\StreamFactoryDiscovery::find();
        $serializer     = new \Symfony\Component\Serializer\Serializer(\Surex\DocuSign\Generated\Normalizer\NormalizerFactory::create(), [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode())]);

        return new static($httpClient, $messageFactory, $serializer, $streamFactory);
    }
}
