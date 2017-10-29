<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class AppStoreReceiptNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\AppStoreReceipt' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\AppStoreReceipt) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\AppStoreReceipt();
        if (property_exists($data, 'productId')) {
            $object->setProductId($data->{'productId'});
        }
        if (property_exists($data, 'receiptData')) {
            $object->setReceiptData($data->{'receiptData'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getProductId()) {
            $data->{'productId'} = $object->getProductId();
        }
        if (null !== $object->getReceiptData()) {
            $data->{'receiptData'} = $object->getReceiptData();
        }

        return $data;
    }
}
