<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class NewAccountSummaryNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\NewAccountSummary' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\NewAccountSummary) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\NewAccountSummary();
        if (property_exists($data, 'accountId')) {
            $object->setAccountId($data->{'accountId'});
        }
        if (property_exists($data, 'accountIdGuid')) {
            $object->setAccountIdGuid($data->{'accountIdGuid'});
        }
        if (property_exists($data, 'accountName')) {
            $object->setAccountName($data->{'accountName'});
        }
        if (property_exists($data, 'apiPassword')) {
            $object->setApiPassword($data->{'apiPassword'});
        }
        if (property_exists($data, 'baseUrl')) {
            $object->setBaseUrl($data->{'baseUrl'});
        }
        if (property_exists($data, 'billingPlanPreview')) {
            $object->setBillingPlanPreview($this->serializer->deserialize($data->{'billingPlanPreview'}, 'Surex\\DocuSign\\Model\\BillingPlanPreview', 'raw', $context));
        }
        if (property_exists($data, 'userId')) {
            $object->setUserId($data->{'userId'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAccountId()) {
            $data->{'accountId'} = $object->getAccountId();
        }
        if (null !== $object->getAccountIdGuid()) {
            $data->{'accountIdGuid'} = $object->getAccountIdGuid();
        }
        if (null !== $object->getAccountName()) {
            $data->{'accountName'} = $object->getAccountName();
        }
        if (null !== $object->getApiPassword()) {
            $data->{'apiPassword'} = $object->getApiPassword();
        }
        if (null !== $object->getBaseUrl()) {
            $data->{'baseUrl'} = $object->getBaseUrl();
        }
        if (null !== $object->getBillingPlanPreview()) {
            $data->{'billingPlanPreview'} = $this->serializer->serialize($object->getBillingPlanPreview(), 'raw', $context);
        }
        if (null !== $object->getUserId()) {
            $data->{'userId'} = $object->getUserId();
        }

        return $data;
    }
}
