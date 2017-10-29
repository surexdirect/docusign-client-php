<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign;

use Http\Client\HttpAsyncClient;
use Http\Client\HttpClient;
use Http\Message\MessageFactory;
use Joli\Jane\OpenApi\Runtime\Client\Resource;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Class AccountResource.
 *
 * @author Wesley O. Nichols <spanishwes@gmail.com>
 */
abstract class AccountResource extends Resource
{
    protected $accountId;

    /**
     * AccountResource constructor.
     *
     * @param string                     $accountId
     * @param HttpClient|HttpAsyncClient $httpClient
     * @param MessageFactory             $messageFactory
     * @param SerializerInterface        $serializer
     */
    public function __construct(
        $accountId,
        $httpClient,
        MessageFactory $messageFactory,
        SerializerInterface $serializer
    ) {
        $this->accountId = $accountId;
        parent::__construct($httpClient, $messageFactory, $serializer);
    }
}
