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

class BrandNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\Brand' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\Brand;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\Brand();
        if (property_exists($data, 'brandCompany')) {
            $object->setBrandCompany($data->{'brandCompany'});
        }
        if (property_exists($data, 'brandId')) {
            $object->setBrandId($data->{'brandId'});
        }
        if (property_exists($data, 'brandName')) {
            $object->setBrandName($data->{'brandName'});
        }
        if (property_exists($data, 'colors')) {
            $values = [];
            foreach ($data->{'colors'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Model\\NameValue', 'json', $context);
            }
            $object->setColors($values);
        }
        if (property_exists($data, 'emailContent')) {
            $values_1 = [];
            foreach ($data->{'emailContent'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Surex\\DocuSign\\Model\\BrandEmailContent', 'json', $context);
            }
            $object->setEmailContent($values_1);
        }
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->denormalizer->denormalize($data->{'errorDetails'}, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json', $context));
        }
        if (property_exists($data, 'isOverridingCompanyName')) {
            $object->setIsOverridingCompanyName($data->{'isOverridingCompanyName'});
        }
        if (property_exists($data, 'isSendingDefault')) {
            $object->setIsSendingDefault($data->{'isSendingDefault'});
        }
        if (property_exists($data, 'isSigningDefault')) {
            $object->setIsSigningDefault($data->{'isSigningDefault'});
        }
        if (property_exists($data, 'landingPages')) {
            $values_2 = [];
            foreach ($data->{'landingPages'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Surex\\DocuSign\\Model\\NameValue', 'json', $context);
            }
            $object->setLandingPages($values_2);
        }
        if (property_exists($data, 'links')) {
            $values_3 = [];
            foreach ($data->{'links'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Surex\\DocuSign\\Model\\BrandLink', 'json', $context);
            }
            $object->setLinks($values_3);
        }
        if (property_exists($data, 'logos')) {
            $object->setLogos($this->denormalizer->denormalize($data->{'logos'}, 'Surex\\DocuSign\\Model\\BrandLogos', 'json', $context));
        }
        if (property_exists($data, 'resources')) {
            $object->setResources($this->denormalizer->denormalize($data->{'resources'}, 'Surex\\DocuSign\\Model\\BrandResourceUrls', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBrandCompany()) {
            $data->{'brandCompany'} = $object->getBrandCompany();
        }
        if (null !== $object->getBrandId()) {
            $data->{'brandId'} = $object->getBrandId();
        }
        if (null !== $object->getBrandName()) {
            $data->{'brandName'} = $object->getBrandName();
        }
        if (null !== $object->getColors()) {
            $values = [];
            foreach ($object->getColors() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'colors'} = $values;
        }
        if (null !== $object->getEmailContent()) {
            $values_1 = [];
            foreach ($object->getEmailContent() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'emailContent'} = $values_1;
        }
        if (null !== $object->getErrorDetails()) {
            $data->{'errorDetails'} = $this->normalizer->normalize($object->getErrorDetails(), 'json', $context);
        }
        if (null !== $object->getIsOverridingCompanyName()) {
            $data->{'isOverridingCompanyName'} = $object->getIsOverridingCompanyName();
        }
        if (null !== $object->getIsSendingDefault()) {
            $data->{'isSendingDefault'} = $object->getIsSendingDefault();
        }
        if (null !== $object->getIsSigningDefault()) {
            $data->{'isSigningDefault'} = $object->getIsSigningDefault();
        }
        if (null !== $object->getLandingPages()) {
            $values_2 = [];
            foreach ($object->getLandingPages() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'landingPages'} = $values_2;
        }
        if (null !== $object->getLinks()) {
            $values_3 = [];
            foreach ($object->getLinks() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'links'} = $values_3;
        }
        if (null !== $object->getLogos()) {
            $data->{'logos'} = $this->normalizer->normalize($object->getLogos(), 'json', $context);
        }
        if (null !== $object->getResources()) {
            $data->{'resources'} = $this->normalizer->normalize($object->getResources(), 'json', $context);
        }

        return $data;
    }
}
