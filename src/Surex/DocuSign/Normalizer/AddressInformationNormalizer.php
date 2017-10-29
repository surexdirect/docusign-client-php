<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class AddressInformationNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\AddressInformation' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\AddressInformation) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\AddressInformation();
        if (property_exists($data, 'city')) {
            $object->setCity($data->{'city'});
        }
        if (property_exists($data, 'country')) {
            $object->setCountry($data->{'country'});
        }
        if (property_exists($data, 'fax')) {
            $object->setFax($data->{'fax'});
        }
        if (property_exists($data, 'phone')) {
            $object->setPhone($data->{'phone'});
        }
        if (property_exists($data, 'state')) {
            $object->setState($data->{'state'});
        }
        if (property_exists($data, 'street1')) {
            $object->setStreet1($data->{'street1'});
        }
        if (property_exists($data, 'street2')) {
            $object->setStreet2($data->{'street2'});
        }
        if (property_exists($data, 'zip')) {
            $object->setZip($data->{'zip'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCity()) {
            $data->{'city'} = $object->getCity();
        }
        if (null !== $object->getCountry()) {
            $data->{'country'} = $object->getCountry();
        }
        if (null !== $object->getFax()) {
            $data->{'fax'} = $object->getFax();
        }
        if (null !== $object->getPhone()) {
            $data->{'phone'} = $object->getPhone();
        }
        if (null !== $object->getState()) {
            $data->{'state'} = $object->getState();
        }
        if (null !== $object->getStreet1()) {
            $data->{'street1'} = $object->getStreet1();
        }
        if (null !== $object->getStreet2()) {
            $data->{'street2'} = $object->getStreet2();
        }
        if (null !== $object->getZip()) {
            $data->{'zip'} = $object->getZip();
        }

        return $data;
    }
}
