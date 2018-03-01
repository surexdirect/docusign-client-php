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

class RequestLogsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\RequestLogs' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\RequestLogs;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\RequestLogs();
        if (property_exists($data, 'apiRequestLogging')) {
            $object->setApiRequestLogging($data->{'apiRequestLogging'});
        }
        if (property_exists($data, 'apiRequestLogMaxEntries')) {
            $object->setApiRequestLogMaxEntries($data->{'apiRequestLogMaxEntries'});
        }
        if (property_exists($data, 'apiRequestLogRemainingEntries')) {
            $object->setApiRequestLogRemainingEntries($data->{'apiRequestLogRemainingEntries'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getApiRequestLogging()) {
            $data->{'apiRequestLogging'} = $object->getApiRequestLogging();
        }
        if (null !== $object->getApiRequestLogMaxEntries()) {
            $data->{'apiRequestLogMaxEntries'} = $object->getApiRequestLogMaxEntries();
        }
        if (null !== $object->getApiRequestLogRemainingEntries()) {
            $data->{'apiRequestLogRemainingEntries'} = $object->getApiRequestLogRemainingEntries();
        }

        return $data;
    }
}
