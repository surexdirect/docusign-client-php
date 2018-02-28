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

class AccountBrandsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\AccountBrands' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\AccountBrands;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\AccountBrands();
        if (property_exists($data, 'brands')) {
            $values = [];
            foreach ($data->{'brands'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Model\\Brand', 'json', $context);
            }
            $object->setBrands($values);
        }
        if (property_exists($data, 'recipientBrandIdDefault')) {
            $object->setRecipientBrandIdDefault($data->{'recipientBrandIdDefault'});
        }
        if (property_exists($data, 'senderBrandIdDefault')) {
            $object->setSenderBrandIdDefault($data->{'senderBrandIdDefault'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBrands()) {
            $values = [];
            foreach ($object->getBrands() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'brands'} = $values;
        }
        if (null !== $object->getRecipientBrandIdDefault()) {
            $data->{'recipientBrandIdDefault'} = $object->getRecipientBrandIdDefault();
        }
        if (null !== $object->getSenderBrandIdDefault()) {
            $data->{'senderBrandIdDefault'} = $object->getSenderBrandIdDefault();
        }

        return $data;
    }
}
