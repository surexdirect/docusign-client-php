<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class BulkEnvelopeStatusNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\BulkEnvelopeStatus' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\BulkEnvelopeStatus) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\BulkEnvelopeStatus();
        if (property_exists($data, 'batchId')) {
            $object->setBatchId($data->{'batchId'});
        }
        if (property_exists($data, 'batchSize')) {
            $object->setBatchSize($data->{'batchSize'});
        }
        if (property_exists($data, 'bulkEnvelopes')) {
            $values = [];
            foreach ($data->{'bulkEnvelopes'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\BulkEnvelope', 'raw', $context);
            }
            $object->setBulkEnvelopes($values);
        }
        if (property_exists($data, 'bulkEnvelopesBatchUri')) {
            $object->setBulkEnvelopesBatchUri($data->{'bulkEnvelopesBatchUri'});
        }
        if (property_exists($data, 'endPosition')) {
            $object->setEndPosition($data->{'endPosition'});
        }
        if (property_exists($data, 'failed')) {
            $object->setFailed($data->{'failed'});
        }
        if (property_exists($data, 'nextUri')) {
            $object->setNextUri($data->{'nextUri'});
        }
        if (property_exists($data, 'previousUri')) {
            $object->setPreviousUri($data->{'previousUri'});
        }
        if (property_exists($data, 'queued')) {
            $object->setQueued($data->{'queued'});
        }
        if (property_exists($data, 'resultSetSize')) {
            $object->setResultSetSize($data->{'resultSetSize'});
        }
        if (property_exists($data, 'sent')) {
            $object->setSent($data->{'sent'});
        }
        if (property_exists($data, 'startPosition')) {
            $object->setStartPosition($data->{'startPosition'});
        }
        if (property_exists($data, 'submittedDate')) {
            $object->setSubmittedDate($data->{'submittedDate'});
        }
        if (property_exists($data, 'totalSetSize')) {
            $object->setTotalSetSize($data->{'totalSetSize'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBatchId()) {
            $data->{'batchId'} = $object->getBatchId();
        }
        if (null !== $object->getBatchSize()) {
            $data->{'batchSize'} = $object->getBatchSize();
        }
        if (null !== $object->getBulkEnvelopes()) {
            $values = [];
            foreach ($object->getBulkEnvelopes() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'bulkEnvelopes'} = $values;
        }
        if (null !== $object->getBulkEnvelopesBatchUri()) {
            $data->{'bulkEnvelopesBatchUri'} = $object->getBulkEnvelopesBatchUri();
        }
        if (null !== $object->getEndPosition()) {
            $data->{'endPosition'} = $object->getEndPosition();
        }
        if (null !== $object->getFailed()) {
            $data->{'failed'} = $object->getFailed();
        }
        if (null !== $object->getNextUri()) {
            $data->{'nextUri'} = $object->getNextUri();
        }
        if (null !== $object->getPreviousUri()) {
            $data->{'previousUri'} = $object->getPreviousUri();
        }
        if (null !== $object->getQueued()) {
            $data->{'queued'} = $object->getQueued();
        }
        if (null !== $object->getResultSetSize()) {
            $data->{'resultSetSize'} = $object->getResultSetSize();
        }
        if (null !== $object->getSent()) {
            $data->{'sent'} = $object->getSent();
        }
        if (null !== $object->getStartPosition()) {
            $data->{'startPosition'} = $object->getStartPosition();
        }
        if (null !== $object->getSubmittedDate()) {
            $data->{'submittedDate'} = $object->getSubmittedDate();
        }
        if (null !== $object->getTotalSetSize()) {
            $data->{'totalSetSize'} = $object->getTotalSetSize();
        }

        return $data;
    }
}
