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

class ENoteConfigurationsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\ENoteConfigurations' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\ENoteConfigurations;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\ENoteConfigurations();
        if (property_exists($data, 'connectConfigured')) {
            $object->setConnectConfigured($data->{'connectConfigured'});
        }
        if (property_exists($data, 'eNoteConfigured')) {
            $object->setENoteConfigured($data->{'eNoteConfigured'});
        }
        if (property_exists($data, 'organization')) {
            $object->setOrganization($data->{'organization'});
        }
        if (property_exists($data, 'password')) {
            $object->setPassword($data->{'password'});
        }
        if (property_exists($data, 'userName')) {
            $object->setUserName($data->{'userName'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getConnectConfigured()) {
            $data->{'connectConfigured'} = $object->getConnectConfigured();
        }
        if (null !== $object->getENoteConfigured()) {
            $data->{'eNoteConfigured'} = $object->getENoteConfigured();
        }
        if (null !== $object->getOrganization()) {
            $data->{'organization'} = $object->getOrganization();
        }
        if (null !== $object->getPassword()) {
            $data->{'password'} = $object->getPassword();
        }
        if (null !== $object->getUserName()) {
            $data->{'userName'} = $object->getUserName();
        }

        return $data;
    }
}
