<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ProvisioningInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\ProvisioningInformation' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\ProvisioningInformation;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\ProvisioningInformation();
        if (property_exists($data, 'defaultConnectionId')) {
            $object->setDefaultConnectionId($data->{'defaultConnectionId'});
        }
        if (property_exists($data, 'defaultPlanId')) {
            $object->setDefaultPlanId($data->{'defaultPlanId'});
        }
        if (property_exists($data, 'distributorCode')) {
            $object->setDistributorCode($data->{'distributorCode'});
        }
        if (property_exists($data, 'distributorPassword')) {
            $object->setDistributorPassword($data->{'distributorPassword'});
        }
        if (property_exists($data, 'passwordRuleText')) {
            $object->setPasswordRuleText($data->{'passwordRuleText'});
        }
        if (property_exists($data, 'planPromotionText')) {
            $object->setPlanPromotionText($data->{'planPromotionText'});
        }
        if (property_exists($data, 'purchaseOrderOrPromAllowed')) {
            $object->setPurchaseOrderOrPromAllowed($data->{'purchaseOrderOrPromAllowed'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDefaultConnectionId()) {
            $data->{'defaultConnectionId'} = $object->getDefaultConnectionId();
        }
        if (null !== $object->getDefaultPlanId()) {
            $data->{'defaultPlanId'} = $object->getDefaultPlanId();
        }
        if (null !== $object->getDistributorCode()) {
            $data->{'distributorCode'} = $object->getDistributorCode();
        }
        if (null !== $object->getDistributorPassword()) {
            $data->{'distributorPassword'} = $object->getDistributorPassword();
        }
        if (null !== $object->getPasswordRuleText()) {
            $data->{'passwordRuleText'} = $object->getPasswordRuleText();
        }
        if (null !== $object->getPlanPromotionText()) {
            $data->{'planPromotionText'} = $object->getPlanPromotionText();
        }
        if (null !== $object->getPurchaseOrderOrPromAllowed()) {
            $data->{'purchaseOrderOrPromAllowed'} = $object->getPurchaseOrderOrPromAllowed();
        }

        return $data;
    }
}
