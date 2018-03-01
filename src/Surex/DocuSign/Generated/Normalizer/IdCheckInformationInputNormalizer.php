<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class IdCheckInformationInputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\IdCheckInformationInput' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\IdCheckInformationInput;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\IdCheckInformationInput();
        if (property_exists($data, 'addressInformationInput')) {
            $object->setAddressInformationInput($this->denormalizer->denormalize($data->{'addressInformationInput'}, 'Surex\\DocuSign\\Generated\\Model\\AddressInformationInput', 'json', $context));
        }
        if (property_exists($data, 'dobInformationInput')) {
            $object->setDobInformationInput($this->denormalizer->denormalize($data->{'dobInformationInput'}, 'Surex\\DocuSign\\Generated\\Model\\DobInformationInput', 'json', $context));
        }
        if (property_exists($data, 'ssn4InformationInput')) {
            $object->setSsn4InformationInput($this->denormalizer->denormalize($data->{'ssn4InformationInput'}, 'Surex\\DocuSign\\Generated\\Model\\Ssn4InformationInput', 'json', $context));
        }
        if (property_exists($data, 'ssn9InformationInput')) {
            $object->setSsn9InformationInput($this->denormalizer->denormalize($data->{'ssn9InformationInput'}, 'Surex\\DocuSign\\Generated\\Model\\Ssn9InformationInput', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAddressInformationInput()) {
            $data->{'addressInformationInput'} = $this->normalizer->normalize($object->getAddressInformationInput(), 'json', $context);
        }
        if (null !== $object->getDobInformationInput()) {
            $data->{'dobInformationInput'} = $this->normalizer->normalize($object->getDobInformationInput(), 'json', $context);
        }
        if (null !== $object->getSsn4InformationInput()) {
            $data->{'ssn4InformationInput'} = $this->normalizer->normalize($object->getSsn4InformationInput(), 'json', $context);
        }
        if (null !== $object->getSsn9InformationInput()) {
            $data->{'ssn9InformationInput'} = $this->normalizer->normalize($object->getSsn9InformationInput(), 'json', $context);
        }

        return $data;
    }
}
