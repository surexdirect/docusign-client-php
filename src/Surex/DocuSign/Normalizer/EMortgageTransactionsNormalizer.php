<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class EMortgageTransactionsNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\EMortgageTransactions' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\EMortgageTransactions) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\EMortgageTransactions();
        if (property_exists($data, 'documentData')) {
            $object->setDocumentData($data->{'documentData'});
        }
        if (property_exists($data, 'dptName')) {
            $object->setDptName($data->{'dptName'});
        }
        if (property_exists($data, 'transactionName')) {
            $object->setTransactionName($data->{'transactionName'});
        }
        if (property_exists($data, 'transactionTypeName')) {
            $object->setTransactionTypeName($data->{'transactionTypeName'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDocumentData()) {
            $data->{'documentData'} = $object->getDocumentData();
        }
        if (null !== $object->getDptName()) {
            $data->{'dptName'} = $object->getDptName();
        }
        if (null !== $object->getTransactionName()) {
            $data->{'transactionName'} = $object->getTransactionName();
        }
        if (null !== $object->getTransactionTypeName()) {
            $data->{'transactionTypeName'} = $object->getTransactionTypeName();
        }

        return $data;
    }
}
