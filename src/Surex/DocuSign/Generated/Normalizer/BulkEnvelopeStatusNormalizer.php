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

class BulkEnvelopeStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\BulkEnvelopeStatus' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\BulkEnvelopeStatus;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\BulkEnvelopeStatus();
        if (property_exists($data, 'batchId')) {
            $object->setBatchId($data->{'batchId'});
        }
        if (property_exists($data, 'batchSize')) {
            $object->setBatchSize($data->{'batchSize'});
        }
        if (property_exists($data, 'bulkEnvelopes')) {
            $values = [];
            foreach ($data->{'bulkEnvelopes'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Generated\\Model\\BulkEnvelope', 'json', $context);
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
                $values[] = $this->normalizer->normalize($value, 'json', $context);
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
