<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class ConsumerDisclosureGetConsumerDisclosure extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;

    /**
     * Retrieves the Electronic Record and Signature Disclosure, with HTML formatting, associated with the account. You can use an optional query string to set the language for the disclosure.
     *
     * @param string $accountId       the external account number (int) or account ID Guid
     * @param array  $queryParameters {
     *
     *     @var string $langCode Specifies the language used in the response. The supported languages, with the language value shown in parenthesis, are: Arabic (ar), Bulgarian (bg), Czech (cs), Chinese Simplified (zh_CN), Chinese Traditional (zh_TW), Croatian (hr), Danish (da), Dutch (nl), English US (en), English UK (en_GB), Estonian (et), Farsi (fa), Finnish (fi), French (fr), French Canada (fr_CA), German (de), Greek (el), Hebrew (he), Hindi (hi), Hungarian (hu), Bahasa Indonesia (id), Italian (it), Japanese (ja), Korean (ko), Latvian (lv), Lithuanian (lt), Bahasa Melayu (ms), Norwegian (no), Polish (pl), Portuguese (pt), Portuguese Brazil (pt_BR), Romanian (ro), Russian (ru), Serbian (sr), Slovak (sk), Slovenian (sl), Spanish (es),Spanish Latin America (es_MX), Swedish (sv), Thai (th), Turkish (tr), Ukrainian (uk), and Vietnamese (vi).

     Additionally, the value can be set to `browser` to automatically detect the browser language being used by the viewer and display the disclosure in that language.

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
        return str_replace(['{accountId}'], [$this->accountId], '/v2/accounts/{accountId}/consumer_disclosure');
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
        $optionsResolver->setDefined(['langCode']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('langCode', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\ConsumerDisclosureGetConsumerDisclosureBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\AccountConsumerDisclosures
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\AccountConsumerDisclosures', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\ConsumerDisclosureGetConsumerDisclosureBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
