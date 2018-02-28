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

class Ssn4InformationInputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\Ssn4InformationInput' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\Ssn4InformationInput;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\Ssn4InformationInput();
        if (property_exists($data, 'displayLevelCode')) {
            $object->setDisplayLevelCode($data->{'displayLevelCode'});
        }
        if (property_exists($data, 'receiveInResponse')) {
            $object->setReceiveInResponse($data->{'receiveInResponse'});
        }
        if (property_exists($data, 'ssn4')) {
            $object->setSsn4($data->{'ssn4'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDisplayLevelCode()) {
            $data->{'displayLevelCode'} = $object->getDisplayLevelCode();
        }
        if (null !== $object->getReceiveInResponse()) {
            $data->{'receiveInResponse'} = $object->getReceiveInResponse();
        }
        if (null !== $object->getSsn4()) {
            $data->{'ssn4'} = $object->getSsn4();
        }

        return $data;
    }
}
