<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class PostTransactionsResponseNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\PostTransactionsResponse' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\PostTransactionsResponse) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\PostTransactionsResponse();
        if (property_exists($data, 'documentData')) {
            $object->setDocumentData($data->{'documentData'});
        }
        if (property_exists($data, 'transactionSid')) {
            $object->setTransactionSid($data->{'transactionSid'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDocumentData()) {
            $data->{'documentData'} = $object->getDocumentData();
        }
        if (null !== $object->getTransactionSid()) {
            $data->{'transactionSid'} = $object->getTransactionSid();
        }

        return $data;
    }
}
