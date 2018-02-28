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

class BillingPaymentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\BillingPayment' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\BillingPayment;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\BillingPayment();
        if (property_exists($data, 'amount')) {
            $object->setAmount($data->{'amount'});
        }
        if (property_exists($data, 'invoiceId')) {
            $object->setInvoiceId($data->{'invoiceId'});
        }
        if (property_exists($data, 'paymentId')) {
            $object->setPaymentId($data->{'paymentId'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAmount()) {
            $data->{'amount'} = $object->getAmount();
        }
        if (null !== $object->getInvoiceId()) {
            $data->{'invoiceId'} = $object->getInvoiceId();
        }
        if (null !== $object->getPaymentId()) {
            $data->{'paymentId'} = $object->getPaymentId();
        }

        return $data;
    }
}
