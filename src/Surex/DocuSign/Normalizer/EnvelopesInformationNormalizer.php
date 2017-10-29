<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class EnvelopesInformationNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\EnvelopesInformation' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\EnvelopesInformation) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\EnvelopesInformation();
        if (property_exists($data, 'endPosition')) {
            $object->setEndPosition($data->{'endPosition'});
        }
        if (property_exists($data, 'envelopes')) {
            $values = [];
            foreach ($data->{'envelopes'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\Envelopes', 'raw', $context);
            }
            $object->setEnvelopes($values);
        }
        if (property_exists($data, 'envelopeTransactionStatuses')) {
            $values_1 = [];
            foreach ($data->{'envelopeTransactionStatuses'} as $value_1) {
                $values_1[] = $this->serializer->deserialize($value_1, 'Surex\\DocuSign\\Model\\EnvelopeTransactionStatus', 'raw', $context);
            }
            $object->setEnvelopeTransactionStatuses($values_1);
        }
        if (property_exists($data, 'nextUri')) {
            $object->setNextUri($data->{'nextUri'});
        }
        if (property_exists($data, 'previousUri')) {
            $object->setPreviousUri($data->{'previousUri'});
        }
        if (property_exists($data, 'resultSetSize')) {
            $object->setResultSetSize($data->{'resultSetSize'});
        }
        if (property_exists($data, 'startPosition')) {
            $object->setStartPosition($data->{'startPosition'});
        }
        if (property_exists($data, 'totalSetSize')) {
            $object->setTotalSetSize($data->{'totalSetSize'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getEndPosition()) {
            $data->{'endPosition'} = $object->getEndPosition();
        }
        if (null !== $object->getEnvelopes()) {
            $values = [];
            foreach ($object->getEnvelopes() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'envelopes'} = $values;
        }
        if (null !== $object->getEnvelopeTransactionStatuses()) {
            $values_1 = [];
            foreach ($object->getEnvelopeTransactionStatuses() as $value_1) {
                $values_1[] = $this->serializer->serialize($value_1, 'raw', $context);
            }
            $data->{'envelopeTransactionStatuses'} = $values_1;
        }
        if (null !== $object->getNextUri()) {
            $data->{'nextUri'} = $object->getNextUri();
        }
        if (null !== $object->getPreviousUri()) {
            $data->{'previousUri'} = $object->getPreviousUri();
        }
        if (null !== $object->getResultSetSize()) {
            $data->{'resultSetSize'} = $object->getResultSetSize();
        }
        if (null !== $object->getStartPosition()) {
            $data->{'startPosition'} = $object->getStartPosition();
        }
        if (null !== $object->getTotalSetSize()) {
            $data->{'totalSetSize'} = $object->getTotalSetSize();
        }

        return $data;
    }
}
