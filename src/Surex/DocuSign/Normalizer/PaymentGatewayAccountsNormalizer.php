<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class PaymentGatewayAccountsNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\PaymentGatewayAccounts' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\PaymentGatewayAccounts) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\PaymentGatewayAccounts();
        if (property_exists($data, 'displayName')) {
            $object->setDisplayName($data->{'displayName'});
        }
        if (property_exists($data, 'paymentGateway')) {
            $object->setPaymentGateway($data->{'paymentGateway'});
        }
        if (property_exists($data, 'paymentGatewayAccountId')) {
            $object->setPaymentGatewayAccountId($data->{'paymentGatewayAccountId'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDisplayName()) {
            $data->{'displayName'} = $object->getDisplayName();
        }
        if (null !== $object->getPaymentGateway()) {
            $data->{'paymentGateway'} = $object->getPaymentGateway();
        }
        if (null !== $object->getPaymentGatewayAccountId()) {
            $data->{'paymentGatewayAccountId'} = $object->getPaymentGatewayAccountId();
        }

        return $data;
    }
}
