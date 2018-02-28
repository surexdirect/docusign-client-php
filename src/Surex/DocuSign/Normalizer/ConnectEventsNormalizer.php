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

class ConnectEventsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\ConnectEvents' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\ConnectEvents;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\ConnectEvents();
        if (property_exists($data, 'failures')) {
            $values = [];
            foreach ($data->{'failures'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Model\\ConnectLog', 'json', $context);
            }
            $object->setFailures($values);
        }
        if (property_exists($data, 'logs')) {
            $values_1 = [];
            foreach ($data->{'logs'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Surex\\DocuSign\\Model\\ConnectLog', 'json', $context);
            }
            $object->setLogs($values_1);
        }
        if (property_exists($data, 'totalRecords')) {
            $object->setTotalRecords($data->{'totalRecords'});
        }
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getFailures()) {
            $values = [];
            foreach ($object->getFailures() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'failures'} = $values;
        }
        if (null !== $object->getLogs()) {
            $values_1 = [];
            foreach ($object->getLogs() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'logs'} = $values_1;
        }
        if (null !== $object->getTotalRecords()) {
            $data->{'totalRecords'} = $object->getTotalRecords();
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }

        return $data;
    }
}
