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

class LoginAccountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\LoginAccount' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\LoginAccount;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\LoginAccount();
        if (property_exists($data, 'accountId')) {
            $object->setAccountId($data->{'accountId'});
        }
        if (property_exists($data, 'accountIdGuid')) {
            $object->setAccountIdGuid($data->{'accountIdGuid'});
        }
        if (property_exists($data, 'baseUrl')) {
            $object->setBaseUrl($data->{'baseUrl'});
        }
        if (property_exists($data, 'email')) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'isDefault')) {
            $object->setIsDefault($data->{'isDefault'});
        }
        if (property_exists($data, 'loginAccountSettings')) {
            $values = [];
            foreach ($data->{'loginAccountSettings'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Model\\NameValue', 'json', $context);
            }
            $object->setLoginAccountSettings($values);
        }
        if (property_exists($data, 'loginUserSettings')) {
            $values_1 = [];
            foreach ($data->{'loginUserSettings'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Surex\\DocuSign\\Model\\NameValue', 'json', $context);
            }
            $object->setLoginUserSettings($values_1);
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'siteDescription')) {
            $object->setSiteDescription($data->{'siteDescription'});
        }
        if (property_exists($data, 'userId')) {
            $object->setUserId($data->{'userId'});
        }
        if (property_exists($data, 'userName')) {
            $object->setUserName($data->{'userName'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAccountId()) {
            $data->{'accountId'} = $object->getAccountId();
        }
        if (null !== $object->getAccountIdGuid()) {
            $data->{'accountIdGuid'} = $object->getAccountIdGuid();
        }
        if (null !== $object->getBaseUrl()) {
            $data->{'baseUrl'} = $object->getBaseUrl();
        }
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }
        if (null !== $object->getIsDefault()) {
            $data->{'isDefault'} = $object->getIsDefault();
        }
        if (null !== $object->getLoginAccountSettings()) {
            $values = [];
            foreach ($object->getLoginAccountSettings() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'loginAccountSettings'} = $values;
        }
        if (null !== $object->getLoginUserSettings()) {
            $values_1 = [];
            foreach ($object->getLoginUserSettings() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'loginUserSettings'} = $values_1;
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getSiteDescription()) {
            $data->{'siteDescription'} = $object->getSiteDescription();
        }
        if (null !== $object->getUserId()) {
            $data->{'userId'} = $object->getUserId();
        }
        if (null !== $object->getUserName()) {
            $data->{'userName'} = $object->getUserName();
        }

        return $data;
    }
}
