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

class BillingInvoicesSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\BillingInvoicesSummary' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\BillingInvoicesSummary;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\BillingInvoicesSummary();
        if (property_exists($data, 'billingInvoices')) {
            $values = [];
            foreach ($data->{'billingInvoices'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Generated\\Model\\Invoices', 'json', $context);
            }
            $object->setBillingInvoices($values);
        }
        if (property_exists($data, 'pastDueBalance')) {
            $object->setPastDueBalance($data->{'pastDueBalance'});
        }
        if (property_exists($data, 'paymentAllowed')) {
            $object->setPaymentAllowed($data->{'paymentAllowed'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBillingInvoices()) {
            $values = [];
            foreach ($object->getBillingInvoices() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'billingInvoices'} = $values;
        }
        if (null !== $object->getPastDueBalance()) {
            $data->{'pastDueBalance'} = $object->getPastDueBalance();
        }
        if (null !== $object->getPaymentAllowed()) {
            $data->{'paymentAllowed'} = $object->getPaymentAllowed();
        }

        return $data;
    }
}
