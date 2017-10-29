<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class AddressInformationInputNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\AddressInformationInput' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\AddressInformationInput) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\AddressInformationInput();
        if (property_exists($data, 'addressInformation')) {
            $object->setAddressInformation($this->serializer->deserialize($data->{'addressInformation'}, 'Surex\\DocuSign\\Model\\AddressInformation', 'raw', $context));
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
            $data->{'addressInformation'} = $this->serializer->serialize($object->getAddressInformation(), 'raw', $context);
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
