<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class FoldersRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\FoldersRequest' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\FoldersRequest;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\FoldersRequest();
        if (property_exists($data, 'envelopeIds')) {
            $values = [];
            foreach ($data->{'envelopeIds'} as $value) {
                $values[] = $value;
            }
            $object->setEnvelopeIds($values);
        }
        if (property_exists($data, 'fromFolderId')) {
            $object->setFromFolderId($data->{'fromFolderId'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getEnvelopeIds()) {
            $values = [];
            foreach ($object->getEnvelopeIds() as $value) {
                $values[] = $value;
            }
            $data->{'envelopeIds'} = $values;
        }
        if (null !== $object->getFromFolderId()) {
            $data->{'fromFolderId'} = $object->getFromFolderId();
        }

        return $data;
    }
}
