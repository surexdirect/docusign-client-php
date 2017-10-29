<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class UserPasswordInformationNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\UserPasswordInformation' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\UserPasswordInformation) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\UserPasswordInformation();
        if (property_exists($data, 'currentPassword')) {
            $object->setCurrentPassword($data->{'currentPassword'});
        }
        if (property_exists($data, 'email')) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'forgottenPasswordInfo')) {
            $object->setForgottenPasswordInfo($this->serializer->deserialize($data->{'forgottenPasswordInfo'}, 'Surex\\DocuSign\\Model\\ForgottenPasswordInformation', 'raw', $context));
        }
        if (property_exists($data, 'newPassword')) {
            $object->setNewPassword($data->{'newPassword'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCurrentPassword()) {
            $data->{'currentPassword'} = $object->getCurrentPassword();
        }
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }
        if (null !== $object->getForgottenPasswordInfo()) {
            $data->{'forgottenPasswordInfo'} = $this->serializer->serialize($object->getForgottenPasswordInfo(), 'raw', $context);
        }
        if (null !== $object->getNewPassword()) {
            $data->{'newPassword'} = $object->getNewPassword();
        }

        return $data;
    }
}
