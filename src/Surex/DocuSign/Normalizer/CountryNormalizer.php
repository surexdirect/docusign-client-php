<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class CountryNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\Country' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\Country) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\Country();
        if (property_exists($data, 'isoCode')) {
            $object->setIsoCode($data->{'isoCode'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'provinces')) {
            $values = [];
            foreach ($data->{'provinces'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\Province', 'raw', $context);
            }
            $object->setProvinces($values);
        }
        if (property_exists($data, 'provinceValidated')) {
            $object->setProvinceValidated($data->{'provinceValidated'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getIsoCode()) {
            $data->{'isoCode'} = $object->getIsoCode();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getProvinces()) {
            $values = [];
            foreach ($object->getProvinces() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'provinces'} = $values;
        }
        if (null !== $object->getProvinceValidated()) {
            $data->{'provinceValidated'} = $object->getProvinceValidated();
        }

        return $data;
    }
}
