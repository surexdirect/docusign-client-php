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

class SenderEmailNotificationsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\SenderEmailNotifications' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\SenderEmailNotifications;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\SenderEmailNotifications();
        if (property_exists($data, 'changedSigner')) {
            $object->setChangedSigner($data->{'changedSigner'});
        }
        if (property_exists($data, 'deliveryFailed')) {
            $object->setDeliveryFailed($data->{'deliveryFailed'});
        }
        if (property_exists($data, 'envelopeComplete')) {
            $object->setEnvelopeComplete($data->{'envelopeComplete'});
        }
        if (property_exists($data, 'offlineSigningFailed')) {
            $object->setOfflineSigningFailed($data->{'offlineSigningFailed'});
        }
        if (property_exists($data, 'recipientViewed')) {
            $object->setRecipientViewed($data->{'recipientViewed'});
        }
        if (property_exists($data, 'senderEnvelopeDeclined')) {
            $object->setSenderEnvelopeDeclined($data->{'senderEnvelopeDeclined'});
        }
        if (property_exists($data, 'withdrawnConsent')) {
            $object->setWithdrawnConsent($data->{'withdrawnConsent'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getChangedSigner()) {
            $data->{'changedSigner'} = $object->getChangedSigner();
        }
        if (null !== $object->getDeliveryFailed()) {
            $data->{'deliveryFailed'} = $object->getDeliveryFailed();
        }
        if (null !== $object->getEnvelopeComplete()) {
            $data->{'envelopeComplete'} = $object->getEnvelopeComplete();
        }
        if (null !== $object->getOfflineSigningFailed()) {
            $data->{'offlineSigningFailed'} = $object->getOfflineSigningFailed();
        }
        if (null !== $object->getRecipientViewed()) {
            $data->{'recipientViewed'} = $object->getRecipientViewed();
        }
        if (null !== $object->getSenderEnvelopeDeclined()) {
            $data->{'senderEnvelopeDeclined'} = $object->getSenderEnvelopeDeclined();
        }
        if (null !== $object->getWithdrawnConsent()) {
            $data->{'withdrawnConsent'} = $object->getWithdrawnConsent();
        }

        return $data;
    }
}
