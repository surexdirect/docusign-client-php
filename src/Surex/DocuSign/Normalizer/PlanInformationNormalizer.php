<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class PlanInformationNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\PlanInformation' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\PlanInformation) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\PlanInformation();
        if (property_exists($data, 'addOns')) {
            $values = [];
            foreach ($data->{'addOns'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\AddOn', 'raw', $context);
            }
            $object->setAddOns($values);
        }
        if (property_exists($data, 'currencyCode')) {
            $object->setCurrencyCode($data->{'currencyCode'});
        }
        if (property_exists($data, 'freeTrialDaysOverride')) {
            $object->setFreeTrialDaysOverride($data->{'freeTrialDaysOverride'});
        }
        if (property_exists($data, 'planFeatureSets')) {
            $values_1 = [];
            foreach ($data->{'planFeatureSets'} as $value_1) {
                $values_1[] = $this->serializer->deserialize($value_1, 'Surex\\DocuSign\\Model\\FeatureSet', 'raw', $context);
            }
            $object->setPlanFeatureSets($values_1);
        }
        if (property_exists($data, 'planId')) {
            $object->setPlanId($data->{'planId'});
        }
        if (property_exists($data, 'recipientDomains')) {
            $values_2 = [];
            foreach ($data->{'recipientDomains'} as $value_2) {
                $values_2[] = $this->serializer->deserialize($value_2, 'Surex\\DocuSign\\Model\\RecipientDomain', 'raw', $context);
            }
            $object->setRecipientDomains($values_2);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAddOns()) {
            $values = [];
            foreach ($object->getAddOns() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'addOns'} = $values;
        }
        if (null !== $object->getCurrencyCode()) {
            $data->{'currencyCode'} = $object->getCurrencyCode();
        }
        if (null !== $object->getFreeTrialDaysOverride()) {
            $data->{'freeTrialDaysOverride'} = $object->getFreeTrialDaysOverride();
        }
        if (null !== $object->getPlanFeatureSets()) {
            $values_1 = [];
            foreach ($object->getPlanFeatureSets() as $value_1) {
                $values_1[] = $this->serializer->serialize($value_1, 'raw', $context);
            }
            $data->{'planFeatureSets'} = $values_1;
        }
        if (null !== $object->getPlanId()) {
            $data->{'planId'} = $object->getPlanId();
        }
        if (null !== $object->getRecipientDomains()) {
            $values_2 = [];
            foreach ($object->getRecipientDomains() as $value_2) {
                $values_2[] = $this->serializer->serialize($value_2, 'raw', $context);
            }
            $data->{'recipientDomains'} = $values_2;
        }

        return $data;
    }
}
