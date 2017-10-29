<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class RecipientEmailNotificationNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\RecipientEmailNotification' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\RecipientEmailNotification) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\RecipientEmailNotification();
        if (property_exists($data, 'emailBody')) {
            $object->setEmailBody($data->{'emailBody'});
        }
        if (property_exists($data, 'emailSubject')) {
            $object->setEmailSubject($data->{'emailSubject'});
        }
        if (property_exists($data, 'supportedLanguage')) {
            $object->setSupportedLanguage($data->{'supportedLanguage'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getEmailBody()) {
            $data->{'emailBody'} = $object->getEmailBody();
        }
        if (null !== $object->getEmailSubject()) {
            $data->{'emailSubject'} = $object->getEmailSubject();
        }
        if (null !== $object->getSupportedLanguage()) {
            $data->{'supportedLanguage'} = $object->getSupportedLanguage();
        }

        return $data;
    }
}
