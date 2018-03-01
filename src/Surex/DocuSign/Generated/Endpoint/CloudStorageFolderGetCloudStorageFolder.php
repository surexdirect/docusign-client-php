<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Endpoint;

class CloudStorageFolderGetCloudStorageFolder extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $folderId;
    protected $serviceId;
    protected $userId;

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
     */
    public function __construct(string $accountId, string $folderId, string $serviceId, string $userId, array $queryParameters = [])
    {
        $this->accountId       = $accountId;
        $this->folderId        = $folderId;
        $this->serviceId       = $serviceId;
        $this->userId          = $userId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{folderId}', '{serviceId}', '{userId}'], [$this->accountId, $this->folderId, $this->serviceId, $this->userId], '/v2/accounts/{accountId}/users/{userId}/cloud_storage/{serviceId}/folders/{folderId}');
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
        $optionsResolver->setDefined(['cloud_storage_folder_path', 'count', 'order', 'order_by', 'search_text', 'start_position']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('cloud_storage_folder_path', ['string']);
        $optionsResolver->setAllowedTypes('count', ['string']);
        $optionsResolver->setAllowedTypes('order', ['string']);
        $optionsResolver->setAllowedTypes('order_by', ['string']);
        $optionsResolver->setAllowedTypes('search_text', ['string']);
        $optionsResolver->setAllowedTypes('start_position', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Generated\Exception\CloudStorageFolderGetCloudStorageFolderBadRequestException
     *
     * @return null|\Surex\DocuSign\Generated\Model\CloudStorage
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\CloudStorage', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Generated\Exception\CloudStorageFolderGetCloudStorageFolderBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json'));
        }
    }
}
