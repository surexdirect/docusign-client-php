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

class PaymentProcessorInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\PaymentProcessorInformation' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\PaymentProcessorInformation;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\PaymentProcessorInformation();
        if (property_exists($data, 'address')) {
            $object->setAddress($this->denormalizer->denormalize($data->{'address'}, 'Surex\\DocuSign\\Generated\\Model\\AddressInformation', 'json', $context));
        }
        if (property_exists($data, 'billingAgreementId')) {
            $object->setBillingAgreementId($data->{'billingAgreementId'});
        }
        if (property_exists($data, 'email')) {
            $object->setEmail($data->{'email'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAddress()) {
            $data->{'address'} = $this->normalizer->normalize($object->getAddress(), 'json', $context);
        }
        if (null !== $object->getBillingAgreementId()) {
            $data->{'billingAgreementId'} = $object->getBillingAgreementId();
        }
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }

        return $data;
    }
}
