<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class UserProfilesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\UserProfiles' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\UserProfiles;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\UserProfiles();
        if (property_exists($data, 'address')) {
            $object->setAddress($this->denormalizer->denormalize($data->{'address'}, 'Surex\\DocuSign\\Model\\AddressInformationV2', 'json', $context));
        }
        if (property_exists($data, 'authenticationMethods')) {
            $values = [];
            foreach ($data->{'authenticationMethods'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Model\\AuthenticationMethod', 'json', $context);
            }
            $object->setAuthenticationMethods($values);
        }
        if (property_exists($data, 'companyName')) {
            $object->setCompanyName($data->{'companyName'});
        }
        if (property_exists($data, 'displayOrganizationInfo')) {
            $object->setDisplayOrganizationInfo($data->{'displayOrganizationInfo'});
        }
        if (property_exists($data, 'displayPersonalInfo')) {
            $object->setDisplayPersonalInfo($data->{'displayPersonalInfo'});
        }
        if (property_exists($data, 'displayProfile')) {
            $object->setDisplayProfile($data->{'displayProfile'});
        }
        if (property_exists($data, 'displayUsageHistory')) {
            $object->setDisplayUsageHistory($data->{'displayUsageHistory'});
        }
        if (property_exists($data, 'profileImageUri')) {
            $object->setProfileImageUri($data->{'profileImageUri'});
        }
        if (property_exists($data, 'title')) {
            $object->setTitle($data->{'title'});
        }
        if (property_exists($data, 'usageHistory')) {
            $object->setUsageHistory($this->denormalizer->denormalize($data->{'usageHistory'}, 'Surex\\DocuSign\\Model\\UsageHistory', 'json', $context));
        }
        if (property_exists($data, 'userDetails')) {
            $object->setUserDetails($this->denormalizer->denormalize($data->{'userDetails'}, 'Surex\\DocuSign\\Model\\Users', 'json', $context));
        }
        if (property_exists($data, 'userProfileLastModifiedDate')) {
            $object->setUserProfileLastModifiedDate($data->{'userProfileLastModifiedDate'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAddress()) {
            $data->{'address'} = $this->normalizer->normalize($object->getAddress(), 'json', $context);
        }
        if (null !== $object->getAuthenticationMethods()) {
            $values = [];
            foreach ($object->getAuthenticationMethods() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'authenticationMethods'} = $values;
        }
        if (null !== $object->getCompanyName()) {
            $data->{'companyName'} = $object->getCompanyName();
        }
        if (null !== $object->getDisplayOrganizationInfo()) {
            $data->{'displayOrganizationInfo'} = $object->getDisplayOrganizationInfo();
        }
        if (null !== $object->getDisplayPersonalInfo()) {
            $data->{'displayPersonalInfo'} = $object->getDisplayPersonalInfo();
        }
        if (null !== $object->getDisplayProfile()) {
            $data->{'displayProfile'} = $object->getDisplayProfile();
        }
        if (null !== $object->getDisplayUsageHistory()) {
            $data->{'displayUsageHistory'} = $object->getDisplayUsageHistory();
        }
        if (null !== $object->getProfileImageUri()) {
            $data->{'profileImageUri'} = $object->getProfileImageUri();
        }
        if (null !== $object->getTitle()) {
            $data->{'title'} = $object->getTitle();
        }
        if (null !== $object->getUsageHistory()) {
            $data->{'usageHistory'} = $this->normalizer->normalize($object->getUsageHistory(), 'json', $context);
        }
        if (null !== $object->getUserDetails()) {
            $data->{'userDetails'} = $this->normalizer->normalize($object->getUserDetails(), 'json', $context);
        }
        if (null !== $object->getUserProfileLastModifiedDate()) {
            $data->{'userProfileLastModifiedDate'} = $object->getUserProfileLastModifiedDate();
        }

        return $data;
    }
}
