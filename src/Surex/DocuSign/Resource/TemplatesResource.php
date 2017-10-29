<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Surex\DocuSign\AccountResource as Resource;

class TemplatesResource extends Resource
{
    /**
     * Retrieves the list of templates for the specified account. The request can be limited to a specific folder.
     *
     * @param array $parameters {
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
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\EnvelopeTemplateResults|\Surex\DocuSign\Model\ErrorDetails
     */
    public function templatesGetTemplates($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('count', null);
        $queryParam->setDefault('folder', null);
        $queryParam->setDefault('folder_ids', null);
        $queryParam->setDefault('folder_types', null);
        $queryParam->setDefault('from_date', null);
        $queryParam->setDefault('include', null);
        $queryParam->setDefault('order', null);
        $queryParam->setDefault('order_by', null);
        $queryParam->setDefault('search_text', null);
        $queryParam->setDefault('shared', null);
        $queryParam->setDefault('shared_by_me', null);
        $queryParam->setDefault('start_position', null);
        $queryParam->setDefault('to_date', null);
        $queryParam->setDefault('used_from_date', null);
        $queryParam->setDefault('used_to_date', null);
        $queryParam->setDefault('user_filter', null);
        $queryParam->setDefault('user_id', null);
        $url     = '/restapi/v2/accounts/{accountId}/templates';
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\EnvelopeTemplateResults', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
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
     * @param \Surex\DocuSign\Model\Templates $templates
     * @param array                           $parameters List of parameters
     * @param string                          $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\TemplateSummary|\Surex\DocuSign\Model\ErrorDetails
     */
    public function templatesPostTemplates(\Surex\DocuSign\Model\Templates $templates, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/templates';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($templates, 'json');
        $request    = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (201 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\TemplateSummary', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieves the definition of the specified template.
     *
     * @param string $templateId the ID of the template being accessed
     * @param array  $parameters {
     *
     *     @var string $include A comma-separated list of additional template attributes to include in the response. Valid values are: recipients, folders, documents, custom_fields, and notifications.
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\Templates|\Surex\DocuSign\Model\ErrorDetails
     */
    public function templatesGetTemplate($templateId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('include', null);
        $url     = '/restapi/v2/accounts/{accountId}/templates/{templateId}';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = str_replace('{templateId}', urlencode($templateId), $url);
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
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\Templates', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Updates an existing template.
     *
     * @param string                          $templateId the ID of the template being accessed
     * @param \Surex\DocuSign\Model\Templates $templates
     * @param array                           $parameters List of parameters
     * @param string                          $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\TemplateUpdateSummary|\Surex\DocuSign\Model\ErrorDetails
     */
    public function templatesPutTemplate($templateId, \Surex\DocuSign\Model\Templates $templates, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/templates/{templateId}';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{templateId}', urlencode($templateId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($templates, 'json');
        $request    = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\TemplateUpdateSummary', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Removes a member group's sharing permissions for a specified template.
     *
     * @param string                       $templateId   the ID of the template being accessed
     * @param string                       $templatePart currently, the only defined part is **groups**
     * @param \Surex\DocuSign\Model\Groups $groups
     * @param array                        $parameters   List of parameters
     * @param string                       $fetch        Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\Groups|\Surex\DocuSign\Model\ErrorDetails
     */
    public function templatesDeleteTemplatePart($templateId, $templatePart, \Surex\DocuSign\Model\Groups $groups, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/templates/{templateId}/{templatePart}';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{templateId}', urlencode($templateId), $url);
        $url        = str_replace('{templatePart}', urlencode($templatePart), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($groups, 'json');
        $request    = $this->messageFactory->createRequest('DELETE', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\Groups', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * Shares a template with the specified members group.
     *
     * @param string                       $templateId   the ID of the template being accessed
     * @param string                       $templatePart currently, the only defined part is **groups**
     * @param \Surex\DocuSign\Model\Groups $groups
     * @param array                        $parameters   List of parameters
     * @param string                       $fetch        Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\Groups|\Surex\DocuSign\Model\ErrorDetails
     */
    public function templatesPutTemplatePart($templateId, $templatePart, \Surex\DocuSign\Model\Groups $groups, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/templates/{templateId}/{templatePart}';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{templateId}', urlencode($templateId), $url);
        $url        = str_replace('{templatePart}', urlencode($templatePart), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($groups, 'json');
        $request    = $this->messageFactory->createRequest('PUT', $url, $headers, $body);
        $promise    = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if (200 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\Groups', 'json');
            }
            if (400 == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Surex\\DocuSign\\Model\\ErrorDetails', 'json');
            }
        }

        return $response;
    }

    /**
     * @param string $documentId the ID of the document being accessed
     * @param string $templateId the ID of the template being accessed
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
    public function pagesGetTemplatePageImages($documentId, $templateId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('count', null);
        $queryParam->setDefault('dpi', null);
        $queryParam->setDefault('max_height', null);
        $queryParam->setDefault('max_width', null);
        $queryParam->setDefault('nocache', null);
        $queryParam->setDefault('show_changes', null);
        $queryParam->setDefault('start_position', null);
        $url     = '/restapi/v2/accounts/{accountId}/templates/{templateId}/documents/{documentId}/pages';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = str_replace('{documentId}', urlencode($documentId), $url);
        $url     = str_replace('{templateId}', urlencode($templateId), $url);
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
     * Deletes a page from a document in a template based on the page number.
     *
     * @param string                            $documentId  the ID of the document being accessed
     * @param string                            $pageNumber  the page number being accessed
     * @param string                            $templateId  the ID of the template being accessed
     * @param \Surex\DocuSign\Model\PageRequest $pageRequest
     * @param array                             $parameters  List of parameters
     * @param string                            $fetch       Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\ErrorDetails
     */
    public function pagesDeleteTemplatePage($documentId, $pageNumber, $templateId, \Surex\DocuSign\Model\PageRequest $pageRequest, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/templates/{templateId}/documents/{documentId}/pages/{pageNumber}';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{documentId}', urlencode($documentId), $url);
        $url        = str_replace('{pageNumber}', urlencode($pageNumber), $url);
        $url        = str_replace('{templateId}', urlencode($templateId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($pageRequest, 'json');
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
     * Retrieves a page image for display from the specified template.
     *
     * @param string $documentId the ID of the document being accessed
     * @param string $pageNumber the page number being accessed
     * @param string $templateId the ID of the template being accessed
     * @param array  $parameters {
     *
     *     @var string $dpi Number of dots per inch for the resulting image. The default if not used is 94. The range is 1-310.
     *     @var string $max_height sets the maximum height (in pixels) of the returned image
     *     @var string $max_width sets the maximum width (in pixels) of the returned image
     *     @var string $show_changes
     * }
     *
     * @param string $fetch Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\ErrorDetails
     */
    public function pagesGetTemplatePageImage($documentId, $pageNumber, $templateId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('dpi', null);
        $queryParam->setDefault('max_height', null);
        $queryParam->setDefault('max_width', null);
        $queryParam->setDefault('show_changes', null);
        $url     = '/restapi/v2/accounts/{accountId}/templates/{templateId}/documents/{documentId}/pages/{pageNumber}/page_image';
        $url     = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url     = str_replace('{documentId}', urlencode($documentId), $url);
        $url     = str_replace('{pageNumber}', urlencode($pageNumber), $url);
        $url     = str_replace('{templateId}', urlencode($templateId), $url);
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
     * Rotates page image from a template for display. The page image can be rotated to the left or right.
     *
     * @param string                            $documentId  the ID of the document being accessed
     * @param string                            $pageNumber  the page number being accessed
     * @param string                            $templateId  the ID of the template being accessed
     * @param \Surex\DocuSign\Model\PageRequest $pageRequest
     * @param array                             $parameters  List of parameters
     * @param string                            $fetch       Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\ErrorDetails
     */
    public function pagesPutTemplatePageImage($documentId, $pageNumber, $templateId, \Surex\DocuSign\Model\PageRequest $pageRequest, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/templates/{templateId}/documents/{documentId}/pages/{pageNumber}/page_image';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{documentId}', urlencode($documentId), $url);
        $url        = str_replace('{pageNumber}', urlencode($pageNumber), $url);
        $url        = str_replace('{templateId}', urlencode($templateId), $url);
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
     * Retrieves the envelope notification, reminders and expirations, information for an existing template.
     *
     * @param string $templateId the ID of the template being accessed
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\Notification|\Surex\DocuSign\Model\ErrorDetails
     */
    public function notificationGetTemplatesTemplateIdNotification($templateId, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/templates/{templateId}/notification';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{templateId}', urlencode($templateId), $url);
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
     * Updates the notification structure for an existing template. Use this endpoint to set reminder and expiration notifications.
     *
     * @param string                                            $templateId                  the ID of the template being accessed
     * @param \Surex\DocuSign\Model\TemplateNotificationRequest $templateNotificationRequest
     * @param array                                             $parameters                  List of parameters
     * @param string                                            $fetch                       Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surex\DocuSign\Model\Notification|\Surex\DocuSign\Model\ErrorDetails
     */
    public function notificationPutTemplatesTemplateIdNotification($templateId, \Surex\DocuSign\Model\TemplateNotificationRequest $templateNotificationRequest, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url        = '/restapi/v2/accounts/{accountId}/templates/{templateId}/notification';
        $url        = str_replace('{accountId}', urlencode($this->accountId), $url);
        $url        = str_replace('{templateId}', urlencode($templateId), $url);
        $url        = $url.('?'.$queryParam->buildQueryString($parameters));
        $headers    = array_merge(['Host' => 'www.docusign.net'], $queryParam->buildHeaders($parameters));
        $body       = $this->serializer->serialize($templateNotificationRequest, 'json');
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
}
