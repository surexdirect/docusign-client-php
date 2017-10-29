<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class BulkRecipientNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\BulkRecipient' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\BulkRecipient) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\BulkRecipient();
        if (property_exists($data, 'accessCode')) {
            $object->setAccessCode($data->{'accessCode'});
        }
        if (property_exists($data, 'email')) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'errorDetails')) {
            $values = [];
            foreach ($data->{'errorDetails'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\ErrorDetails', 'raw', $context);
            }
            $object->setErrorDetails($values);
        }
        if (property_exists($data, 'identification')) {
            $object->setIdentification($data->{'identification'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'note')) {
            $object->setNote($data->{'note'});
        }
        if (property_exists($data, 'phoneNumber')) {
            $object->setPhoneNumber($data->{'phoneNumber'});
        }
        if (property_exists($data, 'recipientSignatureProviderInfo')) {
            $values_1 = [];
            foreach ($data->{'recipientSignatureProviderInfo'} as $value_1) {
                $values_1[] = $this->serializer->deserialize($value_1, 'Surex\\DocuSign\\Model\\BulkRecipientSignatureProvider', 'raw', $context);
            }
            $object->setRecipientSignatureProviderInfo($values_1);
        }
        if (property_exists($data, 'rowNumber')) {
            $object->setRowNumber($data->{'rowNumber'});
        }
        if (property_exists($data, 'tabLabels')) {
            $values_2 = [];
            foreach ($data->{'tabLabels'} as $value_2) {
                $values_2[] = $this->serializer->deserialize($value_2, 'Surex\\DocuSign\\Model\\BulkRecipientTabLabel', 'raw', $context);
            }
            $object->setTabLabels($values_2);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAccessCode()) {
            $data->{'accessCode'} = $object->getAccessCode();
        }
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }
        if (null !== $object->getErrorDetails()) {
            $values = [];
            foreach ($object->getErrorDetails() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'errorDetails'} = $values;
        }
        if (null !== $object->getIdentification()) {
            $data->{'identification'} = $object->getIdentification();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getNote()) {
            $data->{'note'} = $object->getNote();
        }
        if (null !== $object->getPhoneNumber()) {
            $data->{'phoneNumber'} = $object->getPhoneNumber();
        }
        if (null !== $object->getRecipientSignatureProviderInfo()) {
            $values_1 = [];
            foreach ($object->getRecipientSignatureProviderInfo() as $value_1) {
                $values_1[] = $this->serializer->serialize($value_1, 'raw', $context);
            }
            $data->{'recipientSignatureProviderInfo'} = $values_1;
        }
        if (null !== $object->getRowNumber()) {
            $data->{'rowNumber'} = $object->getRowNumber();
        }
        if (null !== $object->getTabLabels()) {
            $values_2 = [];
            foreach ($object->getTabLabels() as $value_2) {
                $values_2[] = $this->serializer->serialize($value_2, 'raw', $context);
            }
            $data->{'tabLabels'} = $values_2;
        }

        return $data;
    }
}
