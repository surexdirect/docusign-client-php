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

class BillingPlanPreviewNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\BillingPlanPreview' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\BillingPlanPreview;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\BillingPlanPreview();
        if (property_exists($data, 'currencyCode')) {
            $object->setCurrencyCode($data->{'currencyCode'});
        }
        if (property_exists($data, 'invoice')) {
            $object->setInvoice($this->denormalizer->denormalize($data->{'invoice'}, 'Surex\\DocuSign\\Generated\\Model\\Invoices', 'json', $context));
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
            $data->{'invoice'} = $this->normalizer->normalize($object->getInvoice(), 'json', $context);
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
