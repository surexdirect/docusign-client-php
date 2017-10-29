<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class BulkEnvelopeNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\BulkEnvelope' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\BulkEnvelope) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\BulkEnvelope();
        if (property_exists($data, 'bulkRecipientRow')) {
            $object->setBulkRecipientRow($data->{'bulkRecipientRow'});
        }
        if (property_exists($data, 'bulkStatus')) {
            $object->setBulkStatus($data->{'bulkStatus'});
        }
        if (property_exists($data, 'email')) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'envelopeId')) {
            $object->setEnvelopeId($data->{'envelopeId'});
        }
        if (property_exists($data, 'envelopeUri')) {
            $object->setEnvelopeUri($data->{'envelopeUri'});
        }
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->serializer->deserialize($data->{'errorDetails'}, 'Surex\\DocuSign\\Model\\ErrorDetails', 'raw', $context));
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'submittedDateTime')) {
            $object->setSubmittedDateTime($data->{'submittedDateTime'});
        }
        if (property_exists($data, 'transactionId')) {
            $object->setTransactionId($data->{'transactionId'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBulkRecipientRow()) {
            $data->{'bulkRecipientRow'} = $object->getBulkRecipientRow();
        }
        if (null !== $object->getBulkStatus()) {
            $data->{'bulkStatus'} = $object->getBulkStatus();
        }
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }
        if (null !== $object->getEnvelopeId()) {
            $data->{'envelopeId'} = $object->getEnvelopeId();
        }
        if (null !== $object->getEnvelopeUri()) {
            $data->{'envelopeUri'} = $object->getEnvelopeUri();
        }
        if (null !== $object->getErrorDetails()) {
            $data->{'errorDetails'} = $this->serializer->serialize($object->getErrorDetails(), 'raw', $context);
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getSubmittedDateTime()) {
            $data->{'submittedDateTime'} = $object->getSubmittedDateTime();
        }
        if (null !== $object->getTransactionId()) {
            $data->{'transactionId'} = $object->getTransactionId();
        }

        return $data;
    }
}
