<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class TemplatesGetTemplates extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;

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
     */
    public function __construct(string $accountId, array $queryParameters = [])
    {
        $this->accountId       = $accountId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}'], [$this->accountId], '/v2/accounts/{accountId}/templates');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['count', 'folder', 'folder_ids', 'folder_types', 'from_date', 'include', 'order', 'order_by', 'search_text', 'shared', 'shared_by_me', 'start_position', 'to_date', 'used_from_date', 'used_to_date', 'user_filter', 'user_id']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('count', ['string']);
        $optionsResolver->setAllowedTypes('folder', ['string']);
        $optionsResolver->setAllowedTypes('folder_ids', ['string']);
        $optionsResolver->setAllowedTypes('folder_types', ['string']);
        $optionsResolver->setAllowedTypes('from_date', ['string']);
        $optionsResolver->setAllowedTypes('include', ['string']);
        $optionsResolver->setAllowedTypes('order', ['string']);
        $optionsResolver->setAllowedTypes('order_by', ['string']);
        $optionsResolver->setAllowedTypes('search_text', ['string']);
        $optionsResolver->setAllowedTypes('shared', ['string']);
        $optionsResolver->setAllowedTypes('shared_by_me', ['string']);
        $optionsResolver->setAllowedTypes('start_position', ['string']);
        $optionsResolver->setAllowedTypes('to_date', ['string']);
        $optionsResolver->setAllowedTypes('used_from_date', ['string']);
        $optionsResolver->setAllowedTypes('used_to_date', ['string']);
        $optionsResolver->setAllowedTypes('user_filter', ['string']);
        $optionsResolver->setAllowedTypes('user_id', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\TemplatesGetTemplatesBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\EnvelopeTemplateResults
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\EnvelopeTemplateResults', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\TemplatesGetTemplatesBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
