<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Endpoint;

class ConsumerDisclosurePutConsumerDisclosure extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    protected $accountId;
    protected $langCode;

    /**
     * @param string                                            $accountId                   the external account number (int) or account ID Guid
     * @param string                                            $langCode                    The simple type enumeration the language used in the response. The supported languages, with the language value shown in parenthesis, are:Arabic (ar), Bulgarian (bg), Czech (cs), Chinese Simplified (zh_CN), Chinese Traditional (zh_TW), Croatian (hr), Danish (da), Dutch (nl), English US (en), English UK (en_GB), Estonian (et), Farsi (fa), Finnish (fi), French (fr), French Canada (fr_CA), German (de), Greek (el), Hebrew (he), Hindi (hi), Hungarian (hu), Bahasa Indonesia (id), Italian (it), Japanese (ja), Korean (ko), Latvian (lv), Lithuanian (lt), Bahasa Melayu (ms), Norwegian (no), Polish (pl), Portuguese (pt), Portuguese Brazil (pt_BR), Romanian (ro), Russian (ru), Serbian (sr), Slovak (sk), Slovenian (sl), Spanish (es),Spanish Latin America (es_MX), Swedish (sv), Thai (th), Turkish (tr), Ukrainian (uk) and Vietnamese (vi). Additionally, the value can be set to "browser" to automatically detect the browser language being used by the viewer and display the disclosure in that language.
     * @param \Surex\DocuSign\Model\EnvelopeConsumerDisclosures $envelopeConsumerDisclosures
     * @param array                                             $queryParameters             {
     *
     *     @var string $include_metadata Reserved for DocuSign.
     * }
     */
    public function __construct(string $accountId, string $langCode, \Surex\DocuSign\Model\EnvelopeConsumerDisclosures $envelopeConsumerDisclosures, array $queryParameters = [])
    {
        $this->accountId       = $accountId;
        $this->langCode        = $langCode;
        $this->body            = $envelopeConsumerDisclosures;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{accountId}', '{langCode}'], [$this->accountId, $this->langCode], '/v2/accounts/{accountId}/consumer_disclosure/{langCode}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['include_metadata']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('include_metadata', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Surex\DocuSign\Exception\ConsumerDisclosurePutConsumerDisclosureBadRequestException
     *
     * @return null|\Surex\DocuSign\Model\EnvelopeConsumerDisclosures
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Surex\\DocuSign\\Model\\EnvelopeConsumerDisclosures', 'json');
        }
        if (400 === $status) {
            throw new \Surex\DocuSign\Exception\ConsumerDisclosurePutConsumerDisclosureBadRequestException($serializer->deserialize($body, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json'));
        }
    }
}
