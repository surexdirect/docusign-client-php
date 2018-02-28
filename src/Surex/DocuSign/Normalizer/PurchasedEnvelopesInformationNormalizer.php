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

class PurchasedEnvelopesInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\PurchasedEnvelopesInformation' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\PurchasedEnvelopesInformation;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\PurchasedEnvelopesInformation();
        if (property_exists($data, 'amount')) {
            $object->setAmount($data->{'amount'});
        }
        if (property_exists($data, 'appName')) {
            $object->setAppName($data->{'appName'});
        }
        if (property_exists($data, 'currencyCode')) {
            $object->setCurrencyCode($data->{'currencyCode'});
        }
        if (property_exists($data, 'platform')) {
            $object->setPlatform($data->{'platform'});
        }
        if (property_exists($data, 'productId')) {
            $object->setProductId($data->{'productId'});
        }
        if (property_exists($data, 'quantity')) {
            $object->setQuantity($data->{'quantity'});
        }
        if (property_exists($data, 'receiptData')) {
            $object->setReceiptData($data->{'receiptData'});
        }
        if (property_exists($data, 'storeName')) {
            $object->setStoreName($data->{'storeName'});
        }
        if (property_exists($data, 'transactionId')) {
            $object->setTransactionId($data->{'transactionId'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAmount()) {
            $data->{'amount'} = $object->getAmount();
        }
        if (null !== $object->getAppName()) {
            $data->{'appName'} = $object->getAppName();
        }
        if (null !== $object->getCurrencyCode()) {
            $data->{'currencyCode'} = $object->getCurrencyCode();
        }
        if (null !== $object->getPlatform()) {
            $data->{'platform'} = $object->getPlatform();
        }
        if (null !== $object->getProductId()) {
            $data->{'productId'} = $object->getProductId();
        }
        if (null !== $object->getQuantity()) {
            $data->{'quantity'} = $object->getQuantity();
        }
        if (null !== $object->getReceiptData()) {
            $data->{'receiptData'} = $object->getReceiptData();
        }
        if (null !== $object->getStoreName()) {
            $data->{'storeName'} = $object->getStoreName();
        }
        if (null !== $object->getTransactionId()) {
            $data->{'transactionId'} = $object->getTransactionId();
        }

        return $data;
    }
}
