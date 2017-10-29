<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class TemplateRecipientsNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\TemplateRecipients' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\TemplateRecipients) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\TemplateRecipients();
        if (property_exists($data, 'agents')) {
            $values = [];
            foreach ($data->{'agents'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\Agent', 'raw', $context);
            }
            $object->setAgents($values);
        }
        if (property_exists($data, 'carbonCopies')) {
            $values_1 = [];
            foreach ($data->{'carbonCopies'} as $value_1) {
                $values_1[] = $this->serializer->deserialize($value_1, 'Surex\\DocuSign\\Model\\CarbonCopy', 'raw', $context);
            }
            $object->setCarbonCopies($values_1);
        }
        if (property_exists($data, 'certifiedDeliveries')) {
            $values_2 = [];
            foreach ($data->{'certifiedDeliveries'} as $value_2) {
                $values_2[] = $this->serializer->deserialize($value_2, 'Surex\\DocuSign\\Model\\CertifiedDelivery', 'raw', $context);
            }
            $object->setCertifiedDeliveries($values_2);
        }
        if (property_exists($data, 'currentRoutingOrder')) {
            $object->setCurrentRoutingOrder($data->{'currentRoutingOrder'});
        }
        if (property_exists($data, 'editors')) {
            $values_3 = [];
            foreach ($data->{'editors'} as $value_3) {
                $values_3[] = $this->serializer->deserialize($value_3, 'Surex\\DocuSign\\Model\\Editor', 'raw', $context);
            }
            $object->setEditors($values_3);
        }
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->serializer->deserialize($data->{'errorDetails'}, 'Surex\\DocuSign\\Model\\ErrorDetails', 'raw', $context));
        }
        if (property_exists($data, 'inPersonSigners')) {
            $values_4 = [];
            foreach ($data->{'inPersonSigners'} as $value_4) {
                $values_4[] = $this->serializer->deserialize($value_4, 'Surex\\DocuSign\\Model\\InPersonSigner', 'raw', $context);
            }
            $object->setInPersonSigners($values_4);
        }
        if (property_exists($data, 'intermediaries')) {
            $values_5 = [];
            foreach ($data->{'intermediaries'} as $value_5) {
                $values_5[] = $this->serializer->deserialize($value_5, 'Surex\\DocuSign\\Model\\Intermediary', 'raw', $context);
            }
            $object->setIntermediaries($values_5);
        }
        if (property_exists($data, 'recipientCount')) {
            $object->setRecipientCount($data->{'recipientCount'});
        }
        if (property_exists($data, 'signers')) {
            $values_6 = [];
            foreach ($data->{'signers'} as $value_6) {
                $values_6[] = $this->serializer->deserialize($value_6, 'Surex\\DocuSign\\Model\\Signer', 'raw', $context);
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
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'agents'} = $values;
        }
        if (null !== $object->getCarbonCopies()) {
            $values_1 = [];
            foreach ($object->getCarbonCopies() as $value_1) {
                $values_1[] = $this->serializer->serialize($value_1, 'raw', $context);
            }
            $data->{'carbonCopies'} = $values_1;
        }
        if (null !== $object->getCertifiedDeliveries()) {
            $values_2 = [];
            foreach ($object->getCertifiedDeliveries() as $value_2) {
                $values_2[] = $this->serializer->serialize($value_2, 'raw', $context);
            }
            $data->{'certifiedDeliveries'} = $values_2;
        }
        if (null !== $object->getCurrentRoutingOrder()) {
            $data->{'currentRoutingOrder'} = $object->getCurrentRoutingOrder();
        }
        if (null !== $object->getEditors()) {
            $values_3 = [];
            foreach ($object->getEditors() as $value_3) {
                $values_3[] = $this->serializer->serialize($value_3, 'raw', $context);
            }
            $data->{'editors'} = $values_3;
        }
        if (null !== $object->getErrorDetails()) {
            $data->{'errorDetails'} = $this->serializer->serialize($object->getErrorDetails(), 'raw', $context);
        }
        if (null !== $object->getInPersonSigners()) {
            $values_4 = [];
            foreach ($object->getInPersonSigners() as $value_4) {
                $values_4[] = $this->serializer->serialize($value_4, 'raw', $context);
            }
            $data->{'inPersonSigners'} = $values_4;
        }
        if (null !== $object->getIntermediaries()) {
            $values_5 = [];
            foreach ($object->getIntermediaries() as $value_5) {
                $values_5[] = $this->serializer->serialize($value_5, 'raw', $context);
            }
            $data->{'intermediaries'} = $values_5;
        }
        if (null !== $object->getRecipientCount()) {
            $data->{'recipientCount'} = $object->getRecipientCount();
        }
        if (null !== $object->getSigners()) {
            $values_6 = [];
            foreach ($object->getSigners() as $value_6) {
                $values_6[] = $this->serializer->serialize($value_6, 'raw', $context);
            }
            $data->{'signers'} = $values_6;
        }

        return $data;
    }
}
