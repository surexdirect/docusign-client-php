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

class ForgottenPasswordInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\ForgottenPasswordInformation' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\ForgottenPasswordInformation;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\ForgottenPasswordInformation();
        if (property_exists($data, 'forgottenPasswordAnswer1')) {
            $object->setForgottenPasswordAnswer1($data->{'forgottenPasswordAnswer1'});
        }
        if (property_exists($data, 'forgottenPasswordAnswer2')) {
            $object->setForgottenPasswordAnswer2($data->{'forgottenPasswordAnswer2'});
        }
        if (property_exists($data, 'forgottenPasswordAnswer3')) {
            $object->setForgottenPasswordAnswer3($data->{'forgottenPasswordAnswer3'});
        }
        if (property_exists($data, 'forgottenPasswordAnswer4')) {
            $object->setForgottenPasswordAnswer4($data->{'forgottenPasswordAnswer4'});
        }
        if (property_exists($data, 'forgottenPasswordQuestion1')) {
            $object->setForgottenPasswordQuestion1($data->{'forgottenPasswordQuestion1'});
        }
        if (property_exists($data, 'forgottenPasswordQuestion2')) {
            $object->setForgottenPasswordQuestion2($data->{'forgottenPasswordQuestion2'});
        }
        if (property_exists($data, 'forgottenPasswordQuestion3')) {
            $object->setForgottenPasswordQuestion3($data->{'forgottenPasswordQuestion3'});
        }
        if (property_exists($data, 'forgottenPasswordQuestion4')) {
            $object->setForgottenPasswordQuestion4($data->{'forgottenPasswordQuestion4'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getForgottenPasswordAnswer1()) {
            $data->{'forgottenPasswordAnswer1'} = $object->getForgottenPasswordAnswer1();
        }
        if (null !== $object->getForgottenPasswordAnswer2()) {
            $data->{'forgottenPasswordAnswer2'} = $object->getForgottenPasswordAnswer2();
        }
        if (null !== $object->getForgottenPasswordAnswer3()) {
            $data->{'forgottenPasswordAnswer3'} = $object->getForgottenPasswordAnswer3();
        }
        if (null !== $object->getForgottenPasswordAnswer4()) {
            $data->{'forgottenPasswordAnswer4'} = $object->getForgottenPasswordAnswer4();
        }
        if (null !== $object->getForgottenPasswordQuestion1()) {
            $data->{'forgottenPasswordQuestion1'} = $object->getForgottenPasswordQuestion1();
        }
        if (null !== $object->getForgottenPasswordQuestion2()) {
            $data->{'forgottenPasswordQuestion2'} = $object->getForgottenPasswordQuestion2();
        }
        if (null !== $object->getForgottenPasswordQuestion3()) {
            $data->{'forgottenPasswordQuestion3'} = $object->getForgottenPasswordQuestion3();
        }
        if (null !== $object->getForgottenPasswordQuestion4()) {
            $data->{'forgottenPasswordQuestion4'} = $object->getForgottenPasswordQuestion4();
        }

        return $data;
    }
}
