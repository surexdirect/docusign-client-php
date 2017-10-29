<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class InvoicesNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\Invoices' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\Invoices) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\Invoices();
        if (property_exists($data, 'amount')) {
            $object->setAmount($data->{'amount'});
        }
        if (property_exists($data, 'balance')) {
            $object->setBalance($data->{'balance'});
        }
        if (property_exists($data, 'dueDate')) {
            $object->setDueDate($data->{'dueDate'});
        }
        if (property_exists($data, 'invoiceId')) {
            $object->setInvoiceId($data->{'invoiceId'});
        }
        if (property_exists($data, 'invoiceItems')) {
            $values = [];
            foreach ($data->{'invoiceItems'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\BillingInvoiceItem', 'raw', $context);
            }
            $object->setInvoiceItems($values);
        }
        if (property_exists($data, 'invoiceNumber')) {
            $object->setInvoiceNumber($data->{'invoiceNumber'});
        }
        if (property_exists($data, 'invoiceUri')) {
            $object->setInvoiceUri($data->{'invoiceUri'});
        }
        if (property_exists($data, 'nonTaxableAmount')) {
            $object->setNonTaxableAmount($data->{'nonTaxableAmount'});
        }
        if (property_exists($data, 'pdfAvailable')) {
            $object->setPdfAvailable($data->{'pdfAvailable'});
        }
        if (property_exists($data, 'taxableAmount')) {
            $object->setTaxableAmount($data->{'taxableAmount'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAmount()) {
            $data->{'amount'} = $object->getAmount();
        }
        if (null !== $object->getBalance()) {
            $data->{'balance'} = $object->getBalance();
        }
        if (null !== $object->getDueDate()) {
            $data->{'dueDate'} = $object->getDueDate();
        }
        if (null !== $object->getInvoiceId()) {
            $data->{'invoiceId'} = $object->getInvoiceId();
        }
        if (null !== $object->getInvoiceItems()) {
            $values = [];
            foreach ($object->getInvoiceItems() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'invoiceItems'} = $values;
        }
        if (null !== $object->getInvoiceNumber()) {
            $data->{'invoiceNumber'} = $object->getInvoiceNumber();
        }
        if (null !== $object->getInvoiceUri()) {
            $data->{'invoiceUri'} = $object->getInvoiceUri();
        }
        if (null !== $object->getNonTaxableAmount()) {
            $data->{'nonTaxableAmount'} = $object->getNonTaxableAmount();
        }
        if (null !== $object->getPdfAvailable()) {
            $data->{'pdfAvailable'} = $object->getPdfAvailable();
        }
        if (null !== $object->getTaxableAmount()) {
            $data->{'taxableAmount'} = $object->getTaxableAmount();
        }

        return $data;
    }
}
