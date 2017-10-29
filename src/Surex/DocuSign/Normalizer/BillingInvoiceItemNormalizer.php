<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class BillingInvoiceItemNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\BillingInvoiceItem' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\BillingInvoiceItem) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
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
