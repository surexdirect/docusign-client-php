<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class TemplateUpdateSummaryNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\TemplateUpdateSummary' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\TemplateUpdateSummary) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\TemplateUpdateSummary();
        if (property_exists($data, 'bulkEnvelopeStatus')) {
            $object->setBulkEnvelopeStatus($this->serializer->deserialize($data->{'bulkEnvelopeStatus'}, 'Surex\\DocuSign\\Model\\BulkEnvelopeStatus', 'raw', $context));
        }
        if (property_exists($data, 'envelopeId')) {
            $object->setEnvelopeId($data->{'envelopeId'});
        }
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->serializer->deserialize($data->{'errorDetails'}, 'Surex\\DocuSign\\Model\\ErrorDetails', 'raw', $context));
        }
        if (property_exists($data, 'listCustomFieldUpdateResults')) {
            $values = [];
            foreach ($data->{'listCustomFieldUpdateResults'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\ListCustomField', 'raw', $context);
            }
            $object->setListCustomFieldUpdateResults($values);
        }
        if (property_exists($data, 'lockInformation')) {
            $object->setLockInformation($this->serializer->deserialize($data->{'lockInformation'}, 'Surex\\DocuSign\\Model\\EnvelopeLocks', 'raw', $context));
        }
        if (property_exists($data, 'recipientUpdateResults')) {
            $values_1 = [];
            foreach ($data->{'recipientUpdateResults'} as $value_1) {
                $values_1[] = $this->serializer->deserialize($value_1, 'Surex\\DocuSign\\Model\\RecipientUpdateResponse', 'raw', $context);
            }
            $object->setRecipientUpdateResults($values_1);
        }
        if (property_exists($data, 'tabUpdateResults')) {
            $object->setTabUpdateResults($this->serializer->deserialize($data->{'tabUpdateResults'}, 'Surex\\DocuSign\\Model\\EnvelopeRecipientTabs', 'raw', $context));
        }
        if (property_exists($data, 'textCustomFieldUpdateResults')) {
            $values_2 = [];
            foreach ($data->{'textCustomFieldUpdateResults'} as $value_2) {
                $values_2[] = $this->serializer->deserialize($value_2, 'Surex\\DocuSign\\Model\\TextCustomField', 'raw', $context);
            }
            $object->setTextCustomFieldUpdateResults($values_2);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBulkEnvelopeStatus()) {
            $data->{'bulkEnvelopeStatus'} = $this->serializer->serialize($object->getBulkEnvelopeStatus(), 'raw', $context);
        }
        if (null !== $object->getEnvelopeId()) {
            $data->{'envelopeId'} = $object->getEnvelopeId();
        }
        if (null !== $object->getErrorDetails()) {
            $data->{'errorDetails'} = $this->serializer->serialize($object->getErrorDetails(), 'raw', $context);
        }
        if (null !== $object->getListCustomFieldUpdateResults()) {
            $values = [];
            foreach ($object->getListCustomFieldUpdateResults() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'listCustomFieldUpdateResults'} = $values;
        }
        if (null !== $object->getLockInformation()) {
            $data->{'lockInformation'} = $this->serializer->serialize($object->getLockInformation(), 'raw', $context);
        }
        if (null !== $object->getRecipientUpdateResults()) {
            $values_1 = [];
            foreach ($object->getRecipientUpdateResults() as $value_1) {
                $values_1[] = $this->serializer->serialize($value_1, 'raw', $context);
            }
            $data->{'recipientUpdateResults'} = $values_1;
        }
        if (null !== $object->getTabUpdateResults()) {
            $data->{'tabUpdateResults'} = $this->serializer->serialize($object->getTabUpdateResults(), 'raw', $context);
        }
        if (null !== $object->getTextCustomFieldUpdateResults()) {
            $values_2 = [];
            foreach ($object->getTextCustomFieldUpdateResults() as $value_2) {
                $values_2[] = $this->serializer->serialize($value_2, 'raw', $context);
            }
            $data->{'textCustomFieldUpdateResults'} = $values_2;
        }

        return $data;
    }
}
