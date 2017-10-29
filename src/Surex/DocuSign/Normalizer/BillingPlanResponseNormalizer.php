<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class BillingPlanResponseNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\BillingPlanResponse' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\BillingPlanResponse) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\BillingPlanResponse();
        if (property_exists($data, 'billingPlan')) {
            $object->setBillingPlan($this->serializer->deserialize($data->{'billingPlan'}, 'Surex\\DocuSign\\Model\\BillingPlan', 'raw', $context));
        }
        if (property_exists($data, 'successorPlans')) {
            $values = [];
            foreach ($data->{'successorPlans'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\BillingPlan', 'raw', $context);
            }
            $object->setSuccessorPlans($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBillingPlan()) {
            $data->{'billingPlan'} = $this->serializer->serialize($object->getBillingPlan(), 'raw', $context);
        }
        if (null !== $object->getSuccessorPlans()) {
            $values = [];
            foreach ($object->getSuccessorPlans() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'successorPlans'} = $values;
        }

        return $data;
    }
}
