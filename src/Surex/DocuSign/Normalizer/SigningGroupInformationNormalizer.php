<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SigningGroupInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\SigningGroupInformation' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\SigningGroupInformation;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\SigningGroupInformation();
        if (property_exists($data, 'groups')) {
            $values = [];
            foreach ($data->{'groups'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Model\\SigningGroups', 'json', $context);
            }
            $object->setGroups($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getGroups()) {
            $values = [];
            foreach ($object->getGroups() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'groups'} = $values;
        }

        return $data;
    }
}
