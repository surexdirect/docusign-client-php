<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class Ssn9InformationInputNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\Ssn9InformationInput' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\Ssn9InformationInput) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\Ssn9InformationInput();
        if (property_exists($data, 'displayLevelCode')) {
            $object->setDisplayLevelCode($data->{'displayLevelCode'});
        }
        if (property_exists($data, 'ssn9')) {
            $object->setSsn9($data->{'ssn9'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDisplayLevelCode()) {
            $data->{'displayLevelCode'} = $object->getDisplayLevelCode();
        }
        if (null !== $object->getSsn9()) {
            $data->{'ssn9'} = $object->getSsn9();
        }

        return $data;
    }
}
