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

class BillingPlanResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\BillingPlanResponse' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\BillingPlanResponse;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\BillingPlanResponse();
        if (property_exists($data, 'billingPlan')) {
            $object->setBillingPlan($this->denormalizer->denormalize($data->{'billingPlan'}, 'Surex\\DocuSign\\Generated\\Model\\BillingPlan', 'json', $context));
        }
        if (property_exists($data, 'successorPlans')) {
            $values = [];
            foreach ($data->{'successorPlans'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Generated\\Model\\BillingPlan', 'json', $context);
            }
            $object->setSuccessorPlans($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBillingPlan()) {
            $data->{'billingPlan'} = $this->normalizer->normalize($object->getBillingPlan(), 'json', $context);
        }
        if (null !== $object->getSuccessorPlans()) {
            $values = [];
            foreach ($object->getSuccessorPlans() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'successorPlans'} = $values;
        }

        return $data;
    }
}
