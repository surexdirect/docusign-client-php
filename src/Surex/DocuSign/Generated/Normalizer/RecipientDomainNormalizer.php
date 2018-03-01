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

class RecipientDomainNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\RecipientDomain' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\RecipientDomain;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\RecipientDomain();
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
