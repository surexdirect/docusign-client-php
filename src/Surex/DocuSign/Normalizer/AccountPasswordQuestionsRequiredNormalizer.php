<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class AccountPasswordQuestionsRequiredNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\AccountPasswordQuestionsRequired' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\AccountPasswordQuestionsRequired) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\AccountPasswordQuestionsRequired();
        if (property_exists($data, 'maximumQuestions')) {
            $object->setMaximumQuestions($data->{'maximumQuestions'});
        }
        if (property_exists($data, 'minimumQuestions')) {
            $object->setMinimumQuestions($data->{'minimumQuestions'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getMaximumQuestions()) {
            $data->{'maximumQuestions'} = $object->getMaximumQuestions();
        }
        if (null !== $object->getMinimumQuestions()) {
            $data->{'minimumQuestions'} = $object->getMinimumQuestions();
        }

        return $data;
    }
}
