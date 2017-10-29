<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Surex\DocuSign\AccountResource as Resource;

class EnvelopesResource extends Resource
{
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
     * @param array $parameters {
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
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\EnvelopesInformation|\Surex\DocuSign\Model\ErrorDetails
     */
    public function envelopesGetEnvelopes($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('ac_status', null);
        $queryParam->setDefault('block', null);
        $queryParam->setDefault('count', null);
        $queryParam->setDefault('custom_field', null);
        $queryParam->setDefault('email', null);
        $queryParam->setDefault('envelope_ids', null);
        $queryParam->setDefault('exclude', null);
        $queryParam->setDefault('folder_ids', null);
        $queryParam->setDefault('folder_types', null);
        $queryParam->setDefault('from_date', null);
        $queryParam->setDefault('from_to_status', null);
        $queryParam->setDefault('include', null);
        $queryParam->setDefault('include_purge_information', null);
        $queryParam->setDefault('intersecting_folder_ids', null);
        $queryParam->setDefault('order', null);
        $queryParam->setDefault('order_by', null);
        $queryParam->setDefault('powerformids', null);
        $queryParam->setDefault('search_text', null);
        $queryParam->setDefault('start_position', null);
        $queryParam->setDefault('status', null);
        $queryParam->setDefault('to_date', null);
        $queryParam->setDefault('transaction_ids', null);
        $queryParam->setDefault('user_filter', null);
        $queryParam->setDefault('user_id', null);
        $queryParam->setDefault('user_name', null);
        $url     = '/restapi/v2/accounts/{accountId}/envelopes';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body    = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\EnvelopesInformation', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
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
     * @param \Surex\DocuSign\Model\EnvelopeDefinition $envelopeDefinition
     * @param array                                    $parameters         {
     *
     *     @var string $cdse_mode reserved for DocuSign

     *     @var string $completed_documents_only reserved for DocuSign

     *     @var string $merge_roles_on_draft When set to **true**, template roles will be merged, and empty recipients will be removed. This parameter applies when you create a draft envelope with multiple templates. (To create a draft envelope, the `status` field is set to `created`.)

     ###### Note: DocuSign recommends that this parameter should be set to **true** whenever you create a draft envelope with multiple templates.
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\EnvelopeSummary|\Surex\DocuSign\Model\ErrorDetails
     */
    public function envelopesPostEnvelopes(\Surex\DocuSign\Model\EnvelopeDefinition $envelopeDefinition, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('cdse_mode', null);
        $queryParam->setDefault('completed_documents_only', null);
        $queryParam->setDefault('merge_roles_on_draft', null);
        $url     = '/restapi/v2/accounts/{accountId}/envelopes';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body    = $this->serializer->serialize($envelopeDefinition, 'json');
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (201 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\EnvelopeSummary', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieves the overall status for the specified envelope.
     *
     * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param array  $parameters {
     *
     *     @var string $advanced_update when true, envelope information can be added or modified
     *     @var string $include Reserved for DocuSign.
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\Envelopes|\Surex\DocuSign\Model\ErrorDetails
     */
    public function envelopesGetEnvelope($envelopeId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('advanced_update', null);
        $queryParam->setDefault('include', null);
        $url     = '/restapi/v2/accounts/{accountId}/envelopes/{envelopeId}';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = str_replace('{envelopeId}', urlencode($envelopeId), $url);
        $url     = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body    = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\Envelopes', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
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
     * @param string                          $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Model\Envelopes $envelopes
     * @param array                           $parameters {
     *
     *     @var string $advanced_update when set to **true**, allows the caller to update recipients, tabs, custom fields, notification, email settings and other envelope attributes
     *     @var string $resend_envelope When set to **true**, sends the specified envelope again.
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\EnvelopeUpdateSummary|\Surex\DocuSign\Model\ErrorDetails
     */
    public function envelopesPutEnvelope($envelopeId, \Surex\DocuSign\Model\Envelopes $envelopes, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('advanced_update', null);
        $queryParam->setDefault('resend_envelope', null);
        $url     = '/restapi/v2/accounts/{accountId}/envelopes/{envelopeId}';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = str_replace('{envelopeId}', urlencode($envelopeId), $url);
        $url     = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body    = $this->serializer->serialize($envelopes, 'json');
        $request = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\EnvelopeUpdateSummary', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Gets the envelope audit events for the specified envelope.
     *
     * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\EnvelopeAuditEventResponse|\Surex\DocuSign\Model\ErrorDetails
     */
    public function auditEventsGetAuditEvents($envelopeId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/envelopes/{envelopeId}/audit_events';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{envelopeId}', urlencode($envelopeId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\EnvelopeAuditEventResponse', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * @param string $documentId the ID of the document being accessed
     * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param array  $parameters {
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
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\PageImages|\Surex\DocuSign\Model\ErrorDetails
     */
    public function pagesGetPageImages($documentId, $envelopeId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('count', null);
        $queryParam->setDefault('dpi', null);
        $queryParam->setDefault('max_height', null);
        $queryParam->setDefault('max_width', null);
        $queryParam->setDefault('nocache', null);
        $queryParam->setDefault('show_changes', null);
        $queryParam->setDefault('start_position', null);
        $url     = '/restapi/v2/accounts/{accountId}/envelopes/{envelopeId}/documents/{documentId}/pages';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = str_replace('{documentId}', urlencode($documentId), $url);
        $url     = str_replace('{envelopeId}', urlencode($envelopeId), $url);
        $url     = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body    = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\PageImages', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Deletes a page from a document in an envelope based on the page number.
     *
     * @param string $documentId the ID of the document being accessed
     * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $pageNumber the page number being accessed
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\ErrorDetails
     */
    public function pagesDeletePage($documentId, $envelopeId, $pageNumber, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/envelopes/{envelopeId}/documents/{documentId}/pages/{pageNumber}';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{documentId}', urlencode($documentId), $url);
        $url        = str_replace('{envelopeId}', urlencode($envelopeId), $url);
        $url        = str_replace('{pageNumber}', urlencode($pageNumber), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('DELETE', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieves a page image for display from the specified envelope.
     *
     * @param string $documentId the ID of the document being accessed
     * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $pageNumber the page number being accessed
     * @param array  $parameters {
     *
     *     @var string $dpi sets the dpi for the image
     *     @var string $max_height Sets the maximum height for the page image in pixels. The dpi is recalculated based on this setting.
     *     @var string $max_width Sets the maximum width for the page image in pixels. The dpi is recalculated based on this setting.
     *     @var string $show_changes
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\ErrorDetails
     */
    public function pagesGetPageImage($documentId, $envelopeId, $pageNumber, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('dpi', null);
        $queryParam->setDefault('max_height', null);
        $queryParam->setDefault('max_width', null);
        $queryParam->setDefault('show_changes', null);
        $url     = '/restapi/v2/accounts/{accountId}/envelopes/{envelopeId}/documents/{documentId}/pages/{pageNumber}/page_image';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = str_replace('{documentId}', urlencode($documentId), $url);
        $url     = str_replace('{envelopeId}', urlencode($envelopeId), $url);
        $url     = str_replace('{pageNumber}', urlencode($pageNumber), $url);
        $url     = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body    = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Rotates page image from an envelope for display. The page image can be rotated to the left or right.
     *
     * @param string                            $documentId  the ID of the document being accessed
     * @param string                            $envelopeId  The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string                            $pageNumber  the page number being accessed
     * @param \Surex\DocuSign\Model\PageRequest $pageRequest
     * @param array                             $parameters  List of parameters
     * @param string                            $fetch       Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\ErrorDetails
     */
    public function pagesPutPageImage($documentId, $envelopeId, $pageNumber, \Surex\DocuSign\Model\PageRequest $pageRequest, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/envelopes/{envelopeId}/documents/{documentId}/pages/{pageNumber}/page_image';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{documentId}', urlencode($documentId), $url);
        $url        = str_replace('{envelopeId}', urlencode($envelopeId), $url);
        $url        = str_replace('{pageNumber}', urlencode($pageNumber), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($pageRequest, 'json');
        $request    = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieves the envelope notification, reminders and expirations, information for an existing envelope.
     *
     * @param string $envelopeId The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\Notification|\Surex\DocuSign\Model\ErrorDetails
     */
    public function notificationGetEnvelopesEnvelopeIdNotification($envelopeId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/envelopes/{envelopeId}/notification';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{envelopeId}', urlencode($envelopeId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\Notification', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * @param string                                            $envelopeId                  The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param \Surex\DocuSign\Model\EnvelopeNotificationRequest $envelopeNotificationRequest
     * @param array                                             $parameters                  List of parameters
     * @param string                                            $fetch                       Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\Notification|\Surex\DocuSign\Model\ErrorDetails
     */
    public function notificationPutEnvelopesEnvelopeIdNotification($envelopeId, \Surex\DocuSign\Model\EnvelopeNotificationRequest $envelopeNotificationRequest, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/envelopes/{envelopeId}/notification';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{envelopeId}', urlencode($envelopeId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($envelopeNotificationRequest, 'json');
        $request    = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\Notification', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieves the initials image for the specified user. The image is returned in the same format as it was uploaded. In the request you can specify if the chrome (the added line and identifier around the initial image) is returned with the image.

     The userId specified in the endpoint must match the authenticated user's user id and the user must be a member of the account.

     The `signatureIdOrName` paramter accepts signature ID or signature name. DocuSign recommends you use signature ID (`signatureId`), since some names contain characters that do not properly URL encode. If you use the user name, it is likely that the name includes spaces and you might need to URL encode the name before using it in the endpoint.

     For example: "Bob Smith" to "Bob%20Smith"

     Older envelopes might only contain chromed images. If getting the non-chromed image fails, try getting the chromed image.
     *
     * @param string $envelopeId  The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $recipientId the `recipientId` used when the envelope or template was created
     * @param array  $parameters  {
     *
     *     @var string $include_chrome The added line and identifier around the initial image. Note: Older envelopes might only have chromed images. If getting the non-chromed image fails, try getting the chromed image.
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\ErrorDetails
     */
    public function recipientsGetRecipientInitialsImage($envelopeId, $recipientId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('include_chrome', null);
        $url     = '/restapi/v2/accounts/{accountId}/envelopes/{envelopeId}/recipients/{recipientId}/initials_image';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = str_replace('{envelopeId}', urlencode($envelopeId), $url);
        $url     = str_replace('{recipientId}', urlencode($recipientId), $url);
        $url     = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body    = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Updates the initials image for a signer that does not have a DocuSign account. The supported image formats for this file are: gif, png, jpeg, and bmp. The file size must be less than 200K.

     For the Authentication/Authorization for this call, the credentials must match the sender of the envelope, the recipient must be an accountless signer or in person signer. The account must have the `CanSendEnvelope` property set to **true** and the `ExpressSendOnly` property in `SendingUser` structure must be set to **false**.
     *
     * @param string $envelopeId  The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $recipientId the `recipientId` used when the envelope or template was created
     * @param array  $parameters  List of parameters
     * @param string $fetch       Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\ErrorDetails
     */
    public function recipientsPutRecipientInitialsImage($envelopeId, $recipientId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/envelopes/{envelopeId}/recipients/{recipientId}/initials_image';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{envelopeId}', urlencode($envelopeId), $url);
        $url        = str_replace('{recipientId}', urlencode($recipientId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieves signature information for a signer or sign-in-person recipient.
     *
     * @param string $envelopeId  The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $recipientId the `recipientId` used when the envelope or template was created
     * @param array  $parameters  List of parameters
     * @param string $fetch       Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\UserSignatures|\Surex\DocuSign\Model\ErrorDetails
     */
    public function recipientsGetRecipientSignature($envelopeId, $recipientId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/envelopes/{envelopeId}/recipients/{recipientId}/signature';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{envelopeId}', urlencode($envelopeId), $url);
        $url        = str_replace('{recipientId}', urlencode($recipientId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\UserSignatures', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieves the specified user signature image. The image is returned in the same format as uploaded. In the request you can specify if the chrome (the added line and identifier around the initial image) is returned with the image.

     The userId specified in the endpoint must match the authenticated user's user ID and the user must be a member of the account.

     The `signatureIdOrName` parameter accepts signature ID or signature name. DocuSign recommends you use signature ID (`signatureId`), since some names contain characters that don't properly URL encode. If you use the user name, it is likely that the name includes spaces and you might need to URL encode the name before using it in the endpoint.

     For example: "Bob Smith" to "Bob%20Smith"

     Older envelopes might only have chromed images. If getting the non-chromed image fails, try getting the chromed image.
     *
     * @param string $envelopeId  The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $recipientId the `recipientId` used when the envelope or template was created
     * @param array  $parameters  {
     *
     *     @var string $include_chrome When set to **true**, indicates the chromed version of the signature image should be retrieved.
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\ErrorDetails
     */
    public function recipientsGetRecipientSignatureImage($envelopeId, $recipientId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('include_chrome', null);
        $url     = '/restapi/v2/accounts/{accountId}/envelopes/{envelopeId}/recipients/{recipientId}/signature_image';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = str_replace('{envelopeId}', urlencode($envelopeId), $url);
        $url     = str_replace('{recipientId}', urlencode($recipientId), $url);
        $url     = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body    = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Updates the signature image for an accountless signer. The supported image formats for this file are: gif, png, jpeg, and bmp. The file size must be less than 200K.

     For the Authentication/Authorization for this call, the credentials must match the sender of the envelope, the recipient must be an accountless signer or in person signer. The account must have the `CanSendEnvelope` property set to **true** and the `ExpressSendOnly` property in `SendingUser` structure must be set to **false**.
     *
     * @param string $envelopeId  The envelope's GUID. Eg 93be49ab-afa0-4adf-933c-f752070d71ec
     * @param string $recipientId the `recipientId` used when the envelope or template was created
     * @param array  $parameters  List of parameters
     * @param string $fetch       Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\ErrorDetails
     */
    public function recipientsPutRecipientSignatureImage($envelopeId, $recipientId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/envelopes/{envelopeId}/recipients/{recipientId}/signature_image';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{envelopeId}', urlencode($envelopeId), $url);
        $url        = str_replace('{recipientId}', urlencode($recipientId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $queryParam->buildFormDataString($parameters);
        $request    = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieves the envelope status for the specified envelopes.
     *
     * @param \Surex\DocuSign\Model\EnvelopeIdsRequest $envelopeIdsRequest
     * @param array                                    $parameters         {
     *
     *     @var string $email reserved for DocuSign

     *     @var string $from_date the date/time setting that specifies when the request begins checking for status changes for envelopes in the account

     *     @var string $start_position reserved for DocuSign

     *     @var string $to_date Optional date/time setting
     * }
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\EnvelopesInformation|\Surex\DocuSign\Model\ErrorDetails
     */
    public function envelopesPutStatus(\Surex\DocuSign\Model\EnvelopeIdsRequest $envelopeIdsRequest, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('email', null);
        $queryParam->setDefault('from_date', null);
        $queryParam->setDefault('start_position', null);
        $queryParam->setDefault('to_date', null);
        $url     = '/restapi/v2/accounts/{accountId}/envelopes/status';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body    = $this->serializer->serialize($envelopeIdsRequest, 'json');
        $request = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\EnvelopesInformation', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }
}
