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

class ContactGetResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\ContactGetResponse' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\ContactGetResponse;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\ContactGetResponse();
        if (property_exists($data, 'contacts')) {
            $values = [];
            foreach ($data->{'contacts'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Model\\Contacts', 'json', $context);
            }
            $object->setContacts($values);
        }
        if (property_exists($data, 'endPosition')) {
            $object->setEndPosition($data->{'endPosition'});
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
        if (null !== $object->getContacts()) {
            $values = [];
            foreach ($object->getContacts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'contacts'} = $values;
        }
        if (null !== $object->getEndPosition()) {
            $data->{'endPosition'} = $object->getEndPosition();
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
