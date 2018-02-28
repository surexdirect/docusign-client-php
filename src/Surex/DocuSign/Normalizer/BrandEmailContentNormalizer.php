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

class BrandEmailContentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\BrandEmailContent' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\BrandEmailContent;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
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
