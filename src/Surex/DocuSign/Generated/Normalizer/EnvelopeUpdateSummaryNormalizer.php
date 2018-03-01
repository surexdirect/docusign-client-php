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

class EnvelopeUpdateSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\EnvelopeUpdateSummary' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\EnvelopeUpdateSummary;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\EnvelopeUpdateSummary();
        if (property_exists($data, 'bulkEnvelopeStatus')) {
            $object->setBulkEnvelopeStatus($this->denormalizer->denormalize($data->{'bulkEnvelopeStatus'}, 'Surex\\DocuSign\\Generated\\Model\\BulkEnvelopeStatus', 'json', $context));
        }
        if (property_exists($data, 'envelopeId')) {
            $object->setEnvelopeId($data->{'envelopeId'});
        }
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->denormalizer->denormalize($data->{'errorDetails'}, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json', $context));
        }
        if (property_exists($data, 'listCustomFieldUpdateResults')) {
            $values = [];
            foreach ($data->{'listCustomFieldUpdateResults'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Generated\\Model\\ListCustomField', 'json', $context);
            }
            $object->setListCustomFieldUpdateResults($values);
        }
        if (property_exists($data, 'lockInformation')) {
            $object->setLockInformation($this->denormalizer->denormalize($data->{'lockInformation'}, 'Surex\\DocuSign\\Generated\\Model\\EnvelopeLocks', 'json', $context));
        }
        if (property_exists($data, 'recipientUpdateResults')) {
            $values_1 = [];
            foreach ($data->{'recipientUpdateResults'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Surex\\DocuSign\\Generated\\Model\\RecipientUpdateResponse', 'json', $context);
            }
            $object->setRecipientUpdateResults($values_1);
        }
        if (property_exists($data, 'tabUpdateResults')) {
            $object->setTabUpdateResults($this->denormalizer->denormalize($data->{'tabUpdateResults'}, 'Surex\\DocuSign\\Generated\\Model\\EnvelopeRecipientTabs', 'json', $context));
        }
        if (property_exists($data, 'textCustomFieldUpdateResults')) {
            $values_2 = [];
            foreach ($data->{'textCustomFieldUpdateResults'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Surex\\DocuSign\\Generated\\Model\\TextCustomField', 'json', $context);
            }
            $object->setTextCustomFieldUpdateResults($values_2);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBulkEnvelopeStatus()) {
            $data->{'bulkEnvelopeStatus'} = $this->normalizer->normalize($object->getBulkEnvelopeStatus(), 'json', $context);
        }
        if (null !== $object->getEnvelopeId()) {
            $data->{'envelopeId'} = $object->getEnvelopeId();
        }
        if (null !== $object->getErrorDetails()) {
            $data->{'errorDetails'} = $this->normalizer->normalize($object->getErrorDetails(), 'json', $context);
        }
        if (null !== $object->getListCustomFieldUpdateResults()) {
            $values = [];
            foreach ($object->getListCustomFieldUpdateResults() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'listCustomFieldUpdateResults'} = $values;
        }
        if (null !== $object->getLockInformation()) {
            $data->{'lockInformation'} = $this->normalizer->normalize($object->getLockInformation(), 'json', $context);
        }
        if (null !== $object->getRecipientUpdateResults()) {
            $values_1 = [];
            foreach ($object->getRecipientUpdateResults() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'recipientUpdateResults'} = $values_1;
        }
        if (null !== $object->getTabUpdateResults()) {
            $data->{'tabUpdateResults'} = $this->normalizer->normalize($object->getTabUpdateResults(), 'json', $context);
        }
        if (null !== $object->getTextCustomFieldUpdateResults()) {
            $values_2 = [];
            foreach ($object->getTextCustomFieldUpdateResults() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'textCustomFieldUpdateResults'} = $values_2;
        }

        return $data;
    }
}
