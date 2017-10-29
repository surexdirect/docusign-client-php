<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class BulkRecipientsRequestNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\BulkRecipientsRequest' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\BulkRecipientsRequest) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\BulkRecipientsRequest();
        if (property_exists($data, 'bulkRecipients')) {
            $values = [];
            foreach ($data->{'bulkRecipients'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\BulkRecipient', 'raw', $context);
            }
            $object->setBulkRecipients($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBulkRecipients()) {
            $values = [];
            foreach ($object->getBulkRecipients() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'bulkRecipients'} = $values;
        }

        return $data;
    }
}
