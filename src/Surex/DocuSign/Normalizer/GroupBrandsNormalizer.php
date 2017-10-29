<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class GroupBrandsNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\GroupBrands' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\GroupBrands) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\GroupBrands();
        if (property_exists($data, 'brands')) {
            $values = [];
            foreach ($data->{'brands'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\Brand', 'raw', $context);
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
                $values[] = $this->serializer->serialize($value, 'raw', $context);
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
