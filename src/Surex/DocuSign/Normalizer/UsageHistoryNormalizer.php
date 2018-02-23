<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class UsageHistoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\UsageHistory' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\UsageHistory;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
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
