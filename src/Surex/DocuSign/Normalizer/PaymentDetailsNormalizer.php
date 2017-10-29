<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class PaymentDetailsNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\PaymentDetails' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\PaymentDetails) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
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
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\PaymentLineItem', 'raw', $context);
            }
            $object->setLineItems($values);
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'total')) {
            $object->setTotal($this->serializer->deserialize($data->{'total'}, 'Surex\\DocuSign\\Model\\Money', 'raw', $context));
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
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'lineItems'} = $values;
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getTotal()) {
            $data->{'total'} = $this->serializer->serialize($object->getTotal(), 'raw', $context);
        }

        return $data;
    }
}
