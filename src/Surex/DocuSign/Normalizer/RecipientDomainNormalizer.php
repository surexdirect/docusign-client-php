<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class RecipientDomainNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\RecipientDomain' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\RecipientDomain) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\RecipientDomain();
        if (property_exists($data, 'active')) {
            $object->setActive($data->{'active'});
        }
        if (property_exists($data, 'domainCode')) {
            $object->setDomainCode($data->{'domainCode'});
        }
        if (property_exists($data, 'domainName')) {
            $object->setDomainName($data->{'domainName'});
        }
        if (property_exists($data, 'recipientDomainId')) {
            $object->setRecipientDomainId($data->{'recipientDomainId'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getActive()) {
            $data->{'active'} = $object->getActive();
        }
        if (null !== $object->getDomainCode()) {
            $data->{'domainCode'} = $object->getDomainCode();
        }
        if (null !== $object->getDomainName()) {
            $data->{'domainName'} = $object->getDomainName();
        }
        if (null !== $object->getRecipientDomainId()) {
            $data->{'recipientDomainId'} = $object->getRecipientDomainId();
        }

        return $data;
    }
}
