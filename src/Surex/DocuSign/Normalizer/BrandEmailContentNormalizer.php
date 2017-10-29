<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class BrandEmailContentNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\BrandEmailContent' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\BrandEmailContent) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\BrandEmailContent();
        if (property_exists($data, 'content')) {
            $object->setContent($data->{'content'});
        }
        if (property_exists($data, 'emailContentType')) {
            $object->setEmailContentType($data->{'emailContentType'});
        }
        if (property_exists($data, 'emailToLink')) {
            $object->setEmailToLink($data->{'emailToLink'});
        }
        if (property_exists($data, 'linkText')) {
            $object->setLinkText($data->{'linkText'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getContent()) {
            $data->{'content'} = $object->getContent();
        }
        if (null !== $object->getEmailContentType()) {
            $data->{'emailContentType'} = $object->getEmailContentType();
        }
        if (null !== $object->getEmailToLink()) {
            $data->{'emailToLink'} = $object->getEmailToLink();
        }
        if (null !== $object->getLinkText()) {
            $data->{'linkText'} = $object->getLinkText();
        }

        return $data;
    }
}
