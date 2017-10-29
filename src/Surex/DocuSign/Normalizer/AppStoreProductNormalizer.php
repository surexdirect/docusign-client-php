<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class AppStoreProductNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\AppStoreProduct' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\AppStoreProduct) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\AppStoreProduct();
        if (property_exists($data, 'marketPlace')) {
            $object->setMarketPlace($data->{'marketPlace'});
        }
        if (property_exists($data, 'productId')) {
            $object->setProductId($data->{'productId'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getMarketPlace()) {
            $data->{'marketPlace'} = $object->getMarketPlace();
        }
        if (null !== $object->getProductId()) {
            $data->{'productId'} = $object->getProductId();
        }

        return $data;
    }
}
