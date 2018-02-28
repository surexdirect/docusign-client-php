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

class NewAccountSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\NewAccountSummary' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\NewAccountSummary;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
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
            $object->setBillingPlanPreview($this->denormalizer->denormalize($data->{'billingPlanPreview'}, 'Surex\\DocuSign\\Model\\BillingPlanPreview', 'json', $context));
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
            $data->{'billingPlanPreview'} = $this->normalizer->normalize($object->getBillingPlanPreview(), 'json', $context);
        }
        if (null !== $object->getUserId()) {
            $data->{'userId'} = $object->getUserId();
        }

        return $data;
    }
}
