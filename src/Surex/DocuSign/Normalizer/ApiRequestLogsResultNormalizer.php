<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class ApiRequestLogsResultNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\ApiRequestLogsResult' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\ApiRequestLogsResult) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\ApiRequestLogsResult();
        if (property_exists($data, 'apiRequestLogs')) {
            $values = [];
            foreach ($data->{'apiRequestLogs'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\ApiRequestLog', 'raw', $context);
            }
            $object->setApiRequestLogs($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getApiRequestLogs()) {
            $values = [];
            foreach ($object->getApiRequestLogs() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'apiRequestLogs'} = $values;
        }

        return $data;
    }
}
