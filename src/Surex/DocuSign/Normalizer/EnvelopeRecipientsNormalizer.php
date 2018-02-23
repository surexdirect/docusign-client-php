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

class EnvelopeRecipientsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\EnvelopeRecipients' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\EnvelopeRecipients;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\EnvelopeRecipients();
        if (property_exists($data, 'agents')) {
            $values = [];
            foreach ($data->{'agents'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Model\\Agent', 'json', $context);
            }
            $object->setAgents($values);
        }
        if (property_exists($data, 'carbonCopies')) {
            $values_1 = [];
            foreach ($data->{'carbonCopies'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Surex\\DocuSign\\Model\\CarbonCopy', 'json', $context);
            }
            $object->setCarbonCopies($values_1);
        }
        if (property_exists($data, 'certifiedDeliveries')) {
            $values_2 = [];
            foreach ($data->{'certifiedDeliveries'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Surex\\DocuSign\\Model\\CertifiedDelivery', 'json', $context);
            }
            $object->setCertifiedDeliveries($values_2);
        }
        if (property_exists($data, 'currentRoutingOrder')) {
            $object->setCurrentRoutingOrder($data->{'currentRoutingOrder'});
        }
        if (property_exists($data, 'editors')) {
            $values_3 = [];
            foreach ($data->{'editors'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Surex\\DocuSign\\Model\\Editor', 'json', $context);
            }
            $object->setEditors($values_3);
        }
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->denormalizer->denormalize($data->{'errorDetails'}, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json', $context));
        }
        if (property_exists($data, 'inPersonSigners')) {
            $values_4 = [];
            foreach ($data->{'inPersonSigners'} as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Surex\\DocuSign\\Model\\InPersonSigner', 'json', $context);
            }
            $object->setInPersonSigners($values_4);
        }
        if (property_exists($data, 'intermediaries')) {
            $values_5 = [];
            foreach ($data->{'intermediaries'} as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Surex\\DocuSign\\Model\\Intermediary', 'json', $context);
            }
            $object->setIntermediaries($values_5);
        }
        if (property_exists($data, 'recipientCount')) {
            $object->setRecipientCount($data->{'recipientCount'});
        }
        if (property_exists($data, 'signers')) {
            $values_6 = [];
            foreach ($data->{'signers'} as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, 'Surex\\DocuSign\\Model\\Signer', 'json', $context);
            }
            $object->setSigners($values_6);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAgents()) {
            $values = [];
            foreach ($object->getAgents() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'agents'} = $values;
        }
        if (null !== $object->getCarbonCopies()) {
            $values_1 = [];
            foreach ($object->getCarbonCopies() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'carbonCopies'} = $values_1;
        }
        if (null !== $object->getCertifiedDeliveries()) {
            $values_2 = [];
            foreach ($object->getCertifiedDeliveries() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'certifiedDeliveries'} = $values_2;
        }
        if (null !== $object->getCurrentRoutingOrder()) {
            $data->{'currentRoutingOrder'} = $object->getCurrentRoutingOrder();
        }
        if (null !== $object->getEditors()) {
            $values_3 = [];
            foreach ($object->getEditors() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'editors'} = $values_3;
        }
        if (null !== $object->getErrorDetails()) {
            $data->{'errorDetails'} = $this->normalizer->normalize($object->getErrorDetails(), 'json', $context);
        }
        if (null !== $object->getInPersonSigners()) {
            $values_4 = [];
            foreach ($object->getInPersonSigners() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data->{'inPersonSigners'} = $values_4;
        }
        if (null !== $object->getIntermediaries()) {
            $values_5 = [];
            foreach ($object->getIntermediaries() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data->{'intermediaries'} = $values_5;
        }
        if (null !== $object->getRecipientCount()) {
            $data->{'recipientCount'} = $object->getRecipientCount();
        }
        if (null !== $object->getSigners()) {
            $values_6 = [];
            foreach ($object->getSigners() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $data->{'signers'} = $values_6;
        }

        return $data;
    }
}
