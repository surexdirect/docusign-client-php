<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class MemberSharedItemsNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\MemberSharedItems' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\MemberSharedItems) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\MemberSharedItems();
        if (property_exists($data, 'envelopes')) {
            $values = [];
            foreach ($data->{'envelopes'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\SharedItem', 'raw', $context);
            }
            $object->setEnvelopes($values);
        }
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->serializer->deserialize($data->{'errorDetails'}, 'Surex\\DocuSign\\Model\\ErrorDetails', 'raw', $context));
        }
        if (property_exists($data, 'templates')) {
            $values_1 = [];
            foreach ($data->{'templates'} as $value_1) {
                $values_1[] = $this->serializer->deserialize($value_1, 'Surex\\DocuSign\\Model\\TemplateSharedItem', 'raw', $context);
            }
            $object->setTemplates($values_1);
        }
        if (property_exists($data, 'user')) {
            $object->setUser($this->serializer->deserialize($data->{'user'}, 'Surex\\DocuSign\\Model\\UserInfo', 'raw', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getEnvelopes()) {
            $values = [];
            foreach ($object->getEnvelopes() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'envelopes'} = $values;
        }
        if (null !== $object->getErrorDetails()) {
            $data->{'errorDetails'} = $this->serializer->serialize($object->getErrorDetails(), 'raw', $context);
        }
        if (null !== $object->getTemplates()) {
            $values_1 = [];
            foreach ($object->getTemplates() as $value_1) {
                $values_1[] = $this->serializer->serialize($value_1, 'raw', $context);
            }
            $data->{'templates'} = $values_1;
        }
        if (null !== $object->getUser()) {
            $data->{'user'} = $this->serializer->serialize($object->getUser(), 'raw', $context);
        }

        return $data;
    }
}
