<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class ConnectEventsNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\ConnectEvents' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\ConnectEvents) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\ConnectEvents();
        if (property_exists($data, 'failures')) {
            $values = [];
            foreach ($data->{'failures'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\ConnectLog', 'raw', $context);
            }
            $object->setFailures($values);
        }
        if (property_exists($data, 'logs')) {
            $values_1 = [];
            foreach ($data->{'logs'} as $value_1) {
                $values_1[] = $this->serializer->deserialize($value_1, 'Surex\\DocuSign\\Model\\ConnectLog', 'raw', $context);
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
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'failures'} = $values;
        }
        if (null !== $object->getLogs()) {
            $values_1 = [];
            foreach ($object->getLogs() as $value_1) {
                $values_1[] = $this->serializer->serialize($value_1, 'raw', $context);
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
