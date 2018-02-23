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

class SignerEmailNotificationsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\SignerEmailNotifications' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\SignerEmailNotifications;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\SignerEmailNotifications();
        if (property_exists($data, 'agentNotification')) {
            $object->setAgentNotification($data->{'agentNotification'});
        }
        if (property_exists($data, 'carbonCopyNotification')) {
            $object->setCarbonCopyNotification($data->{'carbonCopyNotification'});
        }
        if (property_exists($data, 'certifiedDeliveryNotification')) {
            $object->setCertifiedDeliveryNotification($data->{'certifiedDeliveryNotification'});
        }
        if (property_exists($data, 'documentMarkupActivation')) {
            $object->setDocumentMarkupActivation($data->{'documentMarkupActivation'});
        }
        if (property_exists($data, 'envelopeActivation')) {
            $object->setEnvelopeActivation($data->{'envelopeActivation'});
        }
        if (property_exists($data, 'envelopeComplete')) {
            $object->setEnvelopeComplete($data->{'envelopeComplete'});
        }
        if (property_exists($data, 'envelopeCorrected')) {
            $object->setEnvelopeCorrected($data->{'envelopeCorrected'});
        }
        if (property_exists($data, 'envelopeDeclined')) {
            $object->setEnvelopeDeclined($data->{'envelopeDeclined'});
        }
        if (property_exists($data, 'envelopeVoided')) {
            $object->setEnvelopeVoided($data->{'envelopeVoided'});
        }
        if (property_exists($data, 'faxReceived')) {
            $object->setFaxReceived($data->{'faxReceived'});
        }
        if (property_exists($data, 'offlineSigningFailed')) {
            $object->setOfflineSigningFailed($data->{'offlineSigningFailed'});
        }
        if (property_exists($data, 'purgeDocuments')) {
            $object->setPurgeDocuments($data->{'purgeDocuments'});
        }
        if (property_exists($data, 'reassignedSigner')) {
            $object->setReassignedSigner($data->{'reassignedSigner'});
        }
        if (property_exists($data, 'whenSigningGroupMember')) {
            $object->setWhenSigningGroupMember($data->{'whenSigningGroupMember'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAgentNotification()) {
            $data->{'agentNotification'} = $object->getAgentNotification();
        }
        if (null !== $object->getCarbonCopyNotification()) {
            $data->{'carbonCopyNotification'} = $object->getCarbonCopyNotification();
        }
        if (null !== $object->getCertifiedDeliveryNotification()) {
            $data->{'certifiedDeliveryNotification'} = $object->getCertifiedDeliveryNotification();
        }
        if (null !== $object->getDocumentMarkupActivation()) {
            $data->{'documentMarkupActivation'} = $object->getDocumentMarkupActivation();
        }
        if (null !== $object->getEnvelopeActivation()) {
            $data->{'envelopeActivation'} = $object->getEnvelopeActivation();
        }
        if (null !== $object->getEnvelopeComplete()) {
            $data->{'envelopeComplete'} = $object->getEnvelopeComplete();
        }
        if (null !== $object->getEnvelopeCorrected()) {
            $data->{'envelopeCorrected'} = $object->getEnvelopeCorrected();
        }
        if (null !== $object->getEnvelopeDeclined()) {
            $data->{'envelopeDeclined'} = $object->getEnvelopeDeclined();
        }
        if (null !== $object->getEnvelopeVoided()) {
            $data->{'envelopeVoided'} = $object->getEnvelopeVoided();
        }
        if (null !== $object->getFaxReceived()) {
            $data->{'faxReceived'} = $object->getFaxReceived();
        }
        if (null !== $object->getOfflineSigningFailed()) {
            $data->{'offlineSigningFailed'} = $object->getOfflineSigningFailed();
        }
        if (null !== $object->getPurgeDocuments()) {
            $data->{'purgeDocuments'} = $object->getPurgeDocuments();
        }
        if (null !== $object->getReassignedSigner()) {
            $data->{'reassignedSigner'} = $object->getReassignedSigner();
        }
        if (null !== $object->getWhenSigningGroupMember()) {
            $data->{'whenSigningGroupMember'} = $object->getWhenSigningGroupMember();
        }

        return $data;
    }
}
