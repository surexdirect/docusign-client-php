<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign;

use Http\Client\HttpAsyncClient;
use Http\Client\HttpClient;
use Http\Message\MessageFactory;
use Http\Message\StreamFactory;
use Jane\OpenApiRuntime\Client\Psr7HttplugClient;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Class AccountClient.
 *
 * @author Wesley O. Nichols <spanishwes@gmail.com>
 */
abstract class AccountClient extends Psr7HttplugClient
{
    protected $accountId;

    /**
     * AccountClient constructor.
     *
     * @param string                     $accountId
     * @param HttpClient|HttpAsyncClient $httpClient
     * @param MessageFactory             $messageFactory
     * @param SerializerInterface        $serializer
     * @param StreamFactory|null         $streamFactory
     */
    public function __construct(
        $accountId,
        $httpClient,
        MessageFactory $messageFactory,
        SerializerInterface $serializer,
        ?StreamFactory $streamFactory
    ) {
        $this->accountId = $accountId;
        parent::__construct($httpClient, $messageFactory, $serializer, $streamFactory);
    }
}
