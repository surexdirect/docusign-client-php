<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class ConnectConfigResultsNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\ConnectConfigResults' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\ConnectConfigResults) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\ConnectConfigResults();
        if (property_exists($data, 'configurations')) {
            $values = [];
            foreach ($data->{'configurations'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\ConnectConfigurations', 'raw', $context);
            }
            $object->setConfigurations($values);
        }
        if (property_exists($data, 'totalRecords')) {
            $object->setTotalRecords($data->{'totalRecords'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getConfigurations()) {
            $values = [];
            foreach ($object->getConfigurations() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'configurations'} = $values;
        }
        if (null !== $object->getTotalRecords()) {
            $data->{'totalRecords'} = $object->getTotalRecords();
        }

        return $data;
    }
}
