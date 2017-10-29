<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class EnvelopeAuditEventResponseNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\EnvelopeAuditEventResponse' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\EnvelopeAuditEventResponse) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\EnvelopeAuditEventResponse();
        if (property_exists($data, 'auditEvents')) {
            $values = [];
            foreach ($data->{'auditEvents'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\EnvelopeAuditEvent', 'raw', $context);
            }
            $object->setAuditEvents($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAuditEvents()) {
            $values = [];
            foreach ($object->getAuditEvents() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'auditEvents'} = $values;
        }

        return $data;
    }
}
