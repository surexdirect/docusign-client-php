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

class PostTransactionsResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\PostTransactionsResponse' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\PostTransactionsResponse;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
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
