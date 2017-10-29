<?php

namespace Surex\DocuSign\Factory;

use Joli\Jane\Runtime\Encoder\RawEncoder;
use Surex\DocuSign\Normalizer\NormalizerFactory;
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
    public static function create()
    {
        $serializer = new Serializer(
            NormalizerFactory::create(),
            [
                new JsonEncoder(
                    new JsonEncode(),
                    new JsonDecode()
                ),
                new RawEncoder()
            ]
        );

        return $serializer;
    }

}
