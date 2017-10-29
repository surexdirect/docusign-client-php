<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class BillingPlanPreviewNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\BillingPlanPreview' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\BillingPlanPreview) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\BillingPlanPreview();
        if (property_exists($data, 'currencyCode')) {
            $object->setCurrencyCode($data->{'currencyCode'});
        }
        if (property_exists($data, 'invoice')) {
            $object->setInvoice($this->serializer->deserialize($data->{'invoice'}, 'Surex\\DocuSign\\Model\\Invoices', 'raw', $context));
        }
        if (property_exists($data, 'isProrated')) {
            $object->setIsProrated($data->{'isProrated'});
        }
        if (property_exists($data, 'subtotalAmount')) {
            $object->setSubtotalAmount($data->{'subtotalAmount'});
        }
        if (property_exists($data, 'taxAmount')) {
            $object->setTaxAmount($data->{'taxAmount'});
        }
        if (property_exists($data, 'totalAmount')) {
            $object->setTotalAmount($data->{'totalAmount'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCurrencyCode()) {
            $data->{'currencyCode'} = $object->getCurrencyCode();
        }
        if (null !== $object->getInvoice()) {
            $data->{'invoice'} = $this->serializer->serialize($object->getInvoice(), 'raw', $context);
        }
        if (null !== $object->getIsProrated()) {
            $data->{'isProrated'} = $object->getIsProrated();
        }
        if (null !== $object->getSubtotalAmount()) {
            $data->{'subtotalAmount'} = $object->getSubtotalAmount();
        }
        if (null !== $object->getTaxAmount()) {
            $data->{'taxAmount'} = $object->getTaxAmount();
        }
        if (null !== $object->getTotalAmount()) {
            $data->{'totalAmount'} = $object->getTotalAmount();
        }

        return $data;
    }
}
