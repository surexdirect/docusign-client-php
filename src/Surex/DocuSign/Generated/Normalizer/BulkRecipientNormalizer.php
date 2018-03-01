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

class BulkRecipientNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\BulkRecipient' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\BulkRecipient;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\BulkRecipient();
        if (property_exists($data, 'accessCode')) {
            $object->setAccessCode($data->{'accessCode'});
        }
        if (property_exists($data, 'email')) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'errorDetails')) {
            $values = [];
            foreach ($data->{'errorDetails'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json', $context);
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
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Surex\\DocuSign\\Generated\\Model\\BulkRecipientSignatureProvider', 'json', $context);
            }
            $object->setRecipientSignatureProviderInfo($values_1);
        }
        if (property_exists($data, 'rowNumber')) {
            $object->setRowNumber($data->{'rowNumber'});
        }
        if (property_exists($data, 'tabLabels')) {
            $values_2 = [];
            foreach ($data->{'tabLabels'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Surex\\DocuSign\\Generated\\Model\\BulkRecipientTabLabel', 'json', $context);
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
                $values[] = $this->normalizer->normalize($value, 'json', $context);
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
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'recipientSignatureProviderInfo'} = $values_1;
        }
        if (null !== $object->getRowNumber()) {
            $data->{'rowNumber'} = $object->getRowNumber();
        }
        if (null !== $object->getTabLabels()) {
            $values_2 = [];
            foreach ($object->getTabLabels() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'tabLabels'} = $values_2;
        }

        return $data;
    }
}
