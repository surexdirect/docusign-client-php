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

class PaymentDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\PaymentDetails' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\PaymentDetails;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\PaymentDetails();
        if (property_exists($data, 'chargeId')) {
            $object->setChargeId($data->{'chargeId'});
        }
        if (property_exists($data, 'currencyCode')) {
            $object->setCurrencyCode($data->{'currencyCode'});
        }
        if (property_exists($data, 'gatewayAccountId')) {
            $object->setGatewayAccountId($data->{'gatewayAccountId'});
        }
        if (property_exists($data, 'gatewayName')) {
            $object->setGatewayName($data->{'gatewayName'});
        }
        if (property_exists($data, 'lineItems')) {
            $values = [];
            foreach ($data->{'lineItems'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Model\\PaymentLineItem', 'json', $context);
            }
            $object->setLineItems($values);
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'total')) {
            $object->setTotal($this->denormalizer->denormalize($data->{'total'}, 'Surex\\DocuSign\\Model\\Money', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getChargeId()) {
            $data->{'chargeId'} = $object->getChargeId();
        }
        if (null !== $object->getCurrencyCode()) {
            $data->{'currencyCode'} = $object->getCurrencyCode();
        }
        if (null !== $object->getGatewayAccountId()) {
            $data->{'gatewayAccountId'} = $object->getGatewayAccountId();
        }
        if (null !== $object->getGatewayName()) {
            $data->{'gatewayName'} = $object->getGatewayName();
        }
        if (null !== $object->getLineItems()) {
            $values = [];
            foreach ($object->getLineItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'lineItems'} = $values;
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getTotal()) {
            $data->{'total'} = $this->normalizer->normalize($object->getTotal(), 'json', $context);
        }

        return $data;
    }
}
