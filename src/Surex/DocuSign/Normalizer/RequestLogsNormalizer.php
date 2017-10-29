<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class RequestLogsNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\RequestLogs' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\RequestLogs) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\RequestLogs();
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
