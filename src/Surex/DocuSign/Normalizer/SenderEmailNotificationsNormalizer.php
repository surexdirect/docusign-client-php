<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class SenderEmailNotificationsNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\SenderEmailNotifications' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\SenderEmailNotifications) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\SenderEmailNotifications();
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
