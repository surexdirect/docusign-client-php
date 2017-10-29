<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class AddressInformationV2Normalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\AddressInformationV2' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\AddressInformationV2) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\AddressInformationV2();
        if (property_exists($data, 'address1')) {
            $object->setAddress1($data->{'address1'});
        }
        if (property_exists($data, 'address2')) {
            $object->setAddress2($data->{'address2'});
        }
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
        if (property_exists($data, 'postalCode')) {
            $object->setPostalCode($data->{'postalCode'});
        }
        if (property_exists($data, 'stateOrProvince')) {
            $object->setStateOrProvince($data->{'stateOrProvince'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAddress1()) {
            $data->{'address1'} = $object->getAddress1();
        }
        if (null !== $object->getAddress2()) {
            $data->{'address2'} = $object->getAddress2();
        }
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
        if (null !== $object->getPostalCode()) {
            $data->{'postalCode'} = $object->getPostalCode();
        }
        if (null !== $object->getStateOrProvince()) {
            $data->{'stateOrProvince'} = $object->getStateOrProvince();
        }

        return $data;
    }
}
