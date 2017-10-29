<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class BrandNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\Brand' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\Brand) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
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
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\NameValue', 'raw', $context);
            }
            $object->setColors($values);
        }
        if (property_exists($data, 'emailContent')) {
            $values_1 = [];
            foreach ($data->{'emailContent'} as $value_1) {
                $values_1[] = $this->serializer->deserialize($value_1, 'Surex\\DocuSign\\Model\\BrandEmailContent', 'raw', $context);
            }
            $object->setEmailContent($values_1);
        }
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->serializer->deserialize($data->{'errorDetails'}, 'Surex\\DocuSign\\Model\\ErrorDetails', 'raw', $context));
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
                $values_2[] = $this->serializer->deserialize($value_2, 'Surex\\DocuSign\\Model\\NameValue', 'raw', $context);
            }
            $object->setLandingPages($values_2);
        }
        if (property_exists($data, 'links')) {
            $values_3 = [];
            foreach ($data->{'links'} as $value_3) {
                $values_3[] = $this->serializer->deserialize($value_3, 'Surex\\DocuSign\\Model\\BrandLink', 'raw', $context);
            }
            $object->setLinks($values_3);
        }
        if (property_exists($data, 'logos')) {
            $object->setLogos($this->serializer->deserialize($data->{'logos'}, 'Surex\\DocuSign\\Model\\BrandLogos', 'raw', $context));
        }
        if (property_exists($data, 'resources')) {
            $object->setResources($this->serializer->deserialize($data->{'resources'}, 'Surex\\DocuSign\\Model\\BrandResourceUrls', 'raw', $context));
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
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'colors'} = $values;
        }
        if (null !== $object->getEmailContent()) {
            $values_1 = [];
            foreach ($object->getEmailContent() as $value_1) {
                $values_1[] = $this->serializer->serialize($value_1, 'raw', $context);
            }
            $data->{'emailContent'} = $values_1;
        }
        if (null !== $object->getErrorDetails()) {
            $data->{'errorDetails'} = $this->serializer->serialize($object->getErrorDetails(), 'raw', $context);
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
                $values_2[] = $this->serializer->serialize($value_2, 'raw', $context);
            }
            $data->{'landingPages'} = $values_2;
        }
        if (null !== $object->getLinks()) {
            $values_3 = [];
            foreach ($object->getLinks() as $value_3) {
                $values_3[] = $this->serializer->serialize($value_3, 'raw', $context);
            }
            $data->{'links'} = $values_3;
        }
        if (null !== $object->getLogos()) {
            $data->{'logos'} = $this->serializer->serialize($object->getLogos(), 'raw', $context);
        }
        if (null !== $object->getResources()) {
            $data->{'resources'} = $this->serializer->serialize($object->getResources(), 'raw', $context);
        }

        return $data;
    }
}
