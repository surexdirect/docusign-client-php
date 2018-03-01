<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class FoldersGetFolderItems extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $folderId;

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
     */
    public function __construct(string $accountId, string $folderId, array $queryParameters = [])
    {
        $this->accountId       = $accountId;
        $this->folderId        = $folderId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{folderId}'], [$this->accountId, $this->folderId], '/v2/accounts/{accountId}/folders/{folderId}');
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
        $optionsResolver->setDefined(['from_date', 'include_items', 'owner_email', 'owner_name', 'search_text', 'start_position', 'status', 'to_date']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('from_date', ['string']);
        $optionsResolver->setAllowedTypes('include_items', ['string']);
        $optionsResolver->setAllowedTypes('owner_email', ['string']);
        $optionsResolver->setAllowedTypes('owner_name', ['string']);
        $optionsResolver->setAllowedTypes('search_text', ['string']);
        $optionsResolver->setAllowedTypes('start_position', ['string']);
        $optionsResolver->setAllowedTypes('status', ['string']);
        $optionsResolver->setAllowedTypes('to_date', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Generated\Exception\FoldersGetFolderItemsBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\FolderItemsResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\FolderItemsResponse', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\FoldersGetFolderItemsBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
