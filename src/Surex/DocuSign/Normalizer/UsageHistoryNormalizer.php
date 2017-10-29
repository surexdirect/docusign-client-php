<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class UsageHistoryNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\UsageHistory' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\UsageHistory) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\UsageHistory();
        if (property_exists($data, 'lastSentDateTime')) {
            $object->setLastSentDateTime($data->{'lastSentDateTime'});
        }
        if (property_exists($data, 'lastSignedDateTime')) {
            $object->setLastSignedDateTime($data->{'lastSignedDateTime'});
        }
        if (property_exists($data, 'sentCount')) {
            $object->setSentCount($data->{'sentCount'});
        }
        if (property_exists($data, 'signedCount')) {
            $object->setSignedCount($data->{'signedCount'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getLastSentDateTime()) {
            $data->{'lastSentDateTime'} = $object->getLastSentDateTime();
        }
        if (null !== $object->getLastSignedDateTime()) {
            $data->{'lastSignedDateTime'} = $object->getLastSignedDateTime();
        }
        if (null !== $object->getSentCount()) {
            $data->{'sentCount'} = $object->getSentCount();
        }
        if (null !== $object->getSignedCount()) {
            $data->{'signedCount'} = $object->getSignedCount();
        }

        return $data;
    }
}
