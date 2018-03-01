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

class BulkRecipientsSummaryResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\BulkRecipientsSummaryResponse' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\BulkRecipientsSummaryResponse;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\BulkRecipientsSummaryResponse();
        if (property_exists($data, 'bulkRecipients')) {
            $values = [];
            foreach ($data->{'bulkRecipients'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Generated\\Model\\BulkRecipient', 'json', $context);
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
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json', $context);
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
                $values[] = $this->normalizer->normalize($value, 'json', $context);
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
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'errorDetails'} = $values_1;
        }

        return $data;
    }
}
