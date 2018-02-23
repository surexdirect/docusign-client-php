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

class PlanInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\PlanInformation' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\PlanInformation;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\PlanInformation();
        if (property_exists($data, 'addOns')) {
            $values = [];
            foreach ($data->{'addOns'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Model\\AddOn', 'json', $context);
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
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Surex\\DocuSign\\Model\\FeatureSet', 'json', $context);
            }
            $object->setPlanFeatureSets($values_1);
        }
        if (property_exists($data, 'planId')) {
            $object->setPlanId($data->{'planId'});
        }
        if (property_exists($data, 'recipientDomains')) {
            $values_2 = [];
            foreach ($data->{'recipientDomains'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Surex\\DocuSign\\Model\\RecipientDomain', 'json', $context);
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
                $values[] = $this->normalizer->normalize($value, 'json', $context);
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
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'planFeatureSets'} = $values_1;
        }
        if (null !== $object->getPlanId()) {
            $data->{'planId'} = $object->getPlanId();
        }
        if (null !== $object->getRecipientDomains()) {
            $values_2 = [];
            foreach ($object->getRecipientDomains() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'recipientDomains'} = $values_2;
        }

        return $data;
    }
}
