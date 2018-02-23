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

class PaymentGatewayAccountsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\PaymentGatewayAccounts' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\PaymentGatewayAccounts;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
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
