<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class BillingInvoicesSummaryNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\BillingInvoicesSummary' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\BillingInvoicesSummary) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\BillingInvoicesSummary();
        if (property_exists($data, 'billingInvoices')) {
            $values = [];
            foreach ($data->{'billingInvoices'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\Invoices', 'raw', $context);
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
                $values[] = $this->serializer->serialize($value, 'raw', $context);
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
