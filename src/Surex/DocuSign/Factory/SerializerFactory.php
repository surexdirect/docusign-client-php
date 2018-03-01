<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Factory;

use Surex\DocuSign\Generated\Normalizer\NormalizerFactory;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;

/**
 * Class SerializerFactory.
 *
 * @author Wesley O. Nichols <spanishwes@gmail.com>
 */
class SerializerFactory
{
    public static function create(): Serializer
    {
        $serializer = new Serializer(
            NormalizerFactory::create(),
            [
                new JsonEncoder(
                    new JsonEncode(),
                    new JsonDecode()
                ),
            ]
        );

        return $serializer;
    }
}
