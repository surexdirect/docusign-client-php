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

class AddressInformationInputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\AddressInformationInput' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\AddressInformationInput;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\AddressInformationInput();
        if (property_exists($data, 'addressInformation')) {
            $object->setAddressInformation($this->denormalizer->denormalize($data->{'addressInformation'}, 'Surex\\DocuSign\\Model\\AddressInformation', 'json', $context));
        }
        if (property_exists($data, 'displayLevelCode')) {
            $object->setDisplayLevelCode($data->{'displayLevelCode'});
        }
        if (property_exists($data, 'receiveInResponse')) {
            $object->setReceiveInResponse($data->{'receiveInResponse'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAddressInformation()) {
            $data->{'addressInformation'} = $this->normalizer->normalize($object->getAddressInformation(), 'json', $context);
        }
        if (null !== $object->getDisplayLevelCode()) {
            $data->{'displayLevelCode'} = $object->getDisplayLevelCode();
        }
        if (null !== $object->getReceiveInResponse()) {
            $data->{'receiveInResponse'} = $object->getReceiveInResponse();
        }

        return $data;
    }
}
