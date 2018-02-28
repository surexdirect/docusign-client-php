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

class MemberSharedItemsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\MemberSharedItems' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\MemberSharedItems;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\MemberSharedItems();
        if (property_exists($data, 'envelopes')) {
            $values = [];
            foreach ($data->{'envelopes'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Model\\SharedItem', 'json', $context);
            }
            $object->setEnvelopes($values);
        }
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->denormalizer->denormalize($data->{'errorDetails'}, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json', $context));
        }
        if (property_exists($data, 'templates')) {
            $values_1 = [];
            foreach ($data->{'templates'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Surex\\DocuSign\\Model\\TemplateSharedItem', 'json', $context);
            }
            $object->setTemplates($values_1);
        }
        if (property_exists($data, 'user')) {
            $object->setUser($this->denormalizer->denormalize($data->{'user'}, 'Surex\\DocuSign\\Model\\UserInfo', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getEnvelopes()) {
            $values = [];
            foreach ($object->getEnvelopes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'envelopes'} = $values;
        }
        if (null !== $object->getErrorDetails()) {
            $data->{'errorDetails'} = $this->normalizer->normalize($object->getErrorDetails(), 'json', $context);
        }
        if (null !== $object->getTemplates()) {
            $values_1 = [];
            foreach ($object->getTemplates() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'templates'} = $values_1;
        }
        if (null !== $object->getUser()) {
            $data->{'user'} = $this->normalizer->normalize($object->getUser(), 'json', $context);
        }

        return $data;
    }
}
