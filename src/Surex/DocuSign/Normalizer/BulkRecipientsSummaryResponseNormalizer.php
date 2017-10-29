<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class BulkRecipientsSummaryResponseNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\BulkRecipientsSummaryResponse' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\BulkRecipientsSummaryResponse) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\BulkRecipientsSummaryResponse();
        if (property_exists($data, 'bulkRecipients')) {
            $values = [];
            foreach ($data->{'bulkRecipients'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\BulkRecipient', 'raw', $context);
            }
            $object->setBulkRecipients($values);
        }
        if (property_exists($data, 'bulkRecipientsCount')) {
            $object->setBulkRecipientsCount($data->{'bulkRecipientsCount'});
        }
        if (property_exists($data, 'bulkRecipientsUri')) {
            $object->setBulkRecipientsUri($data->{'bulkRecipientsUri'});
        }
        if (property_exists($data, 'errorDetails')) {
            $values_1 = [];
            foreach ($data->{'errorDetails'} as $value_1) {
                $values_1[] = $this->serializer->deserialize($value_1, 'Surex\\DocuSign\\Model\\ErrorDetails', 'raw', $context);
            }
            $object->setErrorDetails($values_1);
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
        if (null !== $object->getBulkRecipientsCount()) {
            $data->{'bulkRecipientsCount'} = $object->getBulkRecipientsCount();
        }
        if (null !== $object->getBulkRecipientsUri()) {
            $data->{'bulkRecipientsUri'} = $object->getBulkRecipientsUri();
        }
        if (null !== $object->getErrorDetails()) {
            $values_1 = [];
            foreach ($object->getErrorDetails() as $value_1) {
                $values_1[] = $this->serializer->serialize($value_1, 'raw', $context);
            }
            $data->{'errorDetails'} = $values_1;
        }

        return $data;
    }
}
