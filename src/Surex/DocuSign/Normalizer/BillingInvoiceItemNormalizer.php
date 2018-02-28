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

class BillingInvoiceItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\BillingInvoiceItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\BillingInvoiceItem;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\BillingInvoiceItem();
        if (property_exists($data, 'chargeAmount')) {
            $object->setChargeAmount($data->{'chargeAmount'});
        }
        if (property_exists($data, 'chargeName')) {
            $object->setChargeName($data->{'chargeName'});
        }
        if (property_exists($data, 'invoiceItemId')) {
            $object->setInvoiceItemId($data->{'invoiceItemId'});
        }
        if (property_exists($data, 'quantity')) {
            $object->setQuantity($data->{'quantity'});
        }
        if (property_exists($data, 'unitPrice')) {
            $object->setUnitPrice($data->{'unitPrice'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getChargeAmount()) {
            $data->{'chargeAmount'} = $object->getChargeAmount();
        }
        if (null !== $object->getChargeName()) {
            $data->{'chargeName'} = $object->getChargeName();
        }
        if (null !== $object->getInvoiceItemId()) {
            $data->{'invoiceItemId'} = $object->getInvoiceItemId();
        }
        if (null !== $object->getQuantity()) {
            $data->{'quantity'} = $object->getQuantity();
        }
        if (null !== $object->getUnitPrice()) {
            $data->{'unitPrice'} = $object->getUnitPrice();
        }

        return $data;
    }
}
