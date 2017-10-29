<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class IdCheckInformationInputNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\IdCheckInformationInput' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\IdCheckInformationInput) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\IdCheckInformationInput();
        if (property_exists($data, 'addressInformationInput')) {
            $object->setAddressInformationInput($this->serializer->deserialize($data->{'addressInformationInput'}, 'Surex\\DocuSign\\Model\\AddressInformationInput', 'raw', $context));
        }
        if (property_exists($data, 'dobInformationInput')) {
            $object->setDobInformationInput($this->serializer->deserialize($data->{'dobInformationInput'}, 'Surex\\DocuSign\\Model\\DobInformationInput', 'raw', $context));
        }
        if (property_exists($data, 'ssn4InformationInput')) {
            $object->setSsn4InformationInput($this->serializer->deserialize($data->{'ssn4InformationInput'}, 'Surex\\DocuSign\\Model\\Ssn4InformationInput', 'raw', $context));
        }
        if (property_exists($data, 'ssn9InformationInput')) {
            $object->setSsn9InformationInput($this->serializer->deserialize($data->{'ssn9InformationInput'}, 'Surex\\DocuSign\\Model\\Ssn9InformationInput', 'raw', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAddressInformationInput()) {
            $data->{'addressInformationInput'} = $this->serializer->serialize($object->getAddressInformationInput(), 'raw', $context);
        }
        if (null !== $object->getDobInformationInput()) {
            $data->{'dobInformationInput'} = $this->serializer->serialize($object->getDobInformationInput(), 'raw', $context);
        }
        if (null !== $object->getSsn4InformationInput()) {
            $data->{'ssn4InformationInput'} = $this->serializer->serialize($object->getSsn4InformationInput(), 'raw', $context);
        }
        if (null !== $object->getSsn9InformationInput()) {
            $data->{'ssn9InformationInput'} = $this->serializer->serialize($object->getSsn9InformationInput(), 'raw', $context);
        }

        return $data;
    }
}
