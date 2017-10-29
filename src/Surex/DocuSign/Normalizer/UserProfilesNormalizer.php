<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class UserProfilesNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\UserProfiles' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\UserProfiles) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\UserProfiles();
        if (property_exists($data, 'address')) {
            $object->setAddress($this->serializer->deserialize($data->{'address'}, 'Surex\\DocuSign\\Model\\AddressInformationV2', 'raw', $context));
        }
        if (property_exists($data, 'authenticationMethods')) {
            $values = [];
            foreach ($data->{'authenticationMethods'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\AuthenticationMethod', 'raw', $context);
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
            $object->setUsageHistory($this->serializer->deserialize($data->{'usageHistory'}, 'Surex\\DocuSign\\Model\\UsageHistory', 'raw', $context));
        }
        if (property_exists($data, 'userDetails')) {
            $object->setUserDetails($this->serializer->deserialize($data->{'userDetails'}, 'Surex\\DocuSign\\Model\\Users', 'raw', $context));
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
            $data->{'address'} = $this->serializer->serialize($object->getAddress(), 'raw', $context);
        }
        if (null !== $object->getAuthenticationMethods()) {
            $values = [];
            foreach ($object->getAuthenticationMethods() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
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
            $data->{'usageHistory'} = $this->serializer->serialize($object->getUsageHistory(), 'raw', $context);
        }
        if (null !== $object->getUserDetails()) {
            $data->{'userDetails'} = $this->serializer->serialize($object->getUserDetails(), 'raw', $context);
        }
        if (null !== $object->getUserProfileLastModifiedDate()) {
            $data->{'userProfileLastModifiedDate'} = $object->getUserProfileLastModifiedDate();
        }

        return $data;
    }
}
