<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class UserPasswordInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\UserPasswordInformation' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\UserPasswordInformation;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\UserPasswordInformation();
        if (property_exists($data, 'currentPassword')) {
            $object->setCurrentPassword($data->{'currentPassword'});
        }
        if (property_exists($data, 'email')) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'forgottenPasswordInfo')) {
            $object->setForgottenPasswordInfo($this->denormalizer->denormalize($data->{'forgottenPasswordInfo'}, 'Surex\\DocuSign\\Generated\\Model\\ForgottenPasswordInformation', 'json', $context));
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
            $data->{'forgottenPasswordInfo'} = $this->normalizer->normalize($object->getForgottenPasswordInfo(), 'json', $context);
        }
        if (null !== $object->getNewPassword()) {
            $data->{'newPassword'} = $object->getNewPassword();
        }

        return $data;
    }
}
