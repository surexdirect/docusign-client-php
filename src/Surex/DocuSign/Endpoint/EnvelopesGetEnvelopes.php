<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class EnvelopesGetEnvelopes extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;

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
     sent by the account user
     with this user name.

     `email` must be given as well,
     and both `email` and `user_name`
     must refer to an existing account user.

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
        return str_replace(['{accountId}'], [$this->accountId], '/v2/accounts/{accountId}/envelopes');
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
        $optionsResolver->setDefined(['ac_status', 'block', 'count', 'custom_field', 'email', 'envelope_ids', 'exclude', 'folder_ids', 'folder_types', 'from_date', 'from_to_status', 'include', 'include_purge_information', 'intersecting_folder_ids', 'order', 'order_by', 'powerformids', 'search_text', 'start_position', 'status', 'to_date', 'transaction_ids', 'user_filter', 'user_id', 'user_name']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('ac_status', ['string']);
        $optionsResolver->setAllowedTypes('block', ['string']);
        $optionsResolver->setAllowedTypes('count', ['string']);
        $optionsResolver->setAllowedTypes('custom_field', ['string']);
        $optionsResolver->setAllowedTypes('email', ['string']);
        $optionsResolver->setAllowedTypes('envelope_ids', ['string']);
        $optionsResolver->setAllowedTypes('exclude', ['string']);
        $optionsResolver->setAllowedTypes('folder_ids', ['string']);
        $optionsResolver->setAllowedTypes('folder_types', ['string']);
        $optionsResolver->setAllowedTypes('from_date', ['string']);
        $optionsResolver->setAllowedTypes('from_to_status', ['string']);
        $optionsResolver->setAllowedTypes('include', ['string']);
        $optionsResolver->setAllowedTypes('include_purge_information', ['string']);
        $optionsResolver->setAllowedTypes('intersecting_folder_ids', ['string']);
        $optionsResolver->setAllowedTypes('order', ['string']);
        $optionsResolver->setAllowedTypes('order_by', ['string']);
        $optionsResolver->setAllowedTypes('powerformids', ['string']);
        $optionsResolver->setAllowedTypes('search_text', ['string']);
        $optionsResolver->setAllowedTypes('start_position', ['string']);
        $optionsResolver->setAllowedTypes('status', ['string']);
        $optionsResolver->setAllowedTypes('to_date', ['string']);
        $optionsResolver->setAllowedTypes('transaction_ids', ['string']);
        $optionsResolver->setAllowedTypes('user_filter', ['string']);
        $optionsResolver->setAllowedTypes('user_id', ['string']);
        $optionsResolver->setAllowedTypes('user_name', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\EnvelopesGetEnvelopesBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\EnvelopesInformation
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\EnvelopesInformation', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\EnvelopesGetEnvelopesBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
