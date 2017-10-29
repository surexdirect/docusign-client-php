<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class PaymentProcessorInformationNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\PaymentProcessorInformation' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\PaymentProcessorInformation) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\PaymentProcessorInformation();
        if (property_exists($data, 'address')) {
            $object->setAddress($this->serializer->deserialize($data->{'address'}, 'Surex\\DocuSign\\Model\\AddressInformation', 'raw', $context));
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
            $data->{'address'} = $this->serializer->serialize($object->getAddress(), 'raw', $context);
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
