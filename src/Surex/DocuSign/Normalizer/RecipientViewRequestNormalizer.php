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

class RecipientViewRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\RecipientViewRequest' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\RecipientViewRequest;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\RecipientViewRequest();
        if (property_exists($data, 'assertionId')) {
            $object->setAssertionId($data->{'assertionId'});
        }
        if (property_exists($data, 'authenticationInstant')) {
            $object->setAuthenticationInstant($data->{'authenticationInstant'});
        }
        if (property_exists($data, 'authenticationMethod')) {
            $object->setAuthenticationMethod($data->{'authenticationMethod'});
        }
        if (property_exists($data, 'clientUserId')) {
            $object->setClientUserId($data->{'clientUserId'});
        }
        if (property_exists($data, 'email')) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'pingFrequency')) {
            $object->setPingFrequency($data->{'pingFrequency'});
        }
        if (property_exists($data, 'pingUrl')) {
            $object->setPingUrl($data->{'pingUrl'});
        }
        if (property_exists($data, 'recipientId')) {
            $object->setRecipientId($data->{'recipientId'});
        }
        if (property_exists($data, 'returnUrl')) {
            $object->setReturnUrl($data->{'returnUrl'});
        }
        if (property_exists($data, 'securityDomain')) {
            $object->setSecurityDomain($data->{'securityDomain'});
        }
        if (property_exists($data, 'userId')) {
            $object->setUserId($data->{'userId'});
        }
        if (property_exists($data, 'userName')) {
            $object->setUserName($data->{'userName'});
        }
        if (property_exists($data, 'xFrameOptions')) {
            $object->setXFrameOptions($data->{'xFrameOptions'});
        }
        if (property_exists($data, 'xFrameOptionsAllowFromUrl')) {
            $object->setXFrameOptionsAllowFromUrl($data->{'xFrameOptionsAllowFromUrl'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAssertionId()) {
            $data->{'assertionId'} = $object->getAssertionId();
        }
        if (null !== $object->getAuthenticationInstant()) {
            $data->{'authenticationInstant'} = $object->getAuthenticationInstant();
        }
        if (null !== $object->getAuthenticationMethod()) {
            $data->{'authenticationMethod'} = $object->getAuthenticationMethod();
        }
        if (null !== $object->getClientUserId()) {
            $data->{'clientUserId'} = $object->getClientUserId();
        }
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }
        if (null !== $object->getPingFrequency()) {
            $data->{'pingFrequency'} = $object->getPingFrequency();
        }
        if (null !== $object->getPingUrl()) {
            $data->{'pingUrl'} = $object->getPingUrl();
        }
        if (null !== $object->getRecipientId()) {
            $data->{'recipientId'} = $object->getRecipientId();
        }
        if (null !== $object->getReturnUrl()) {
            $data->{'returnUrl'} = $object->getReturnUrl();
        }
        if (null !== $object->getSecurityDomain()) {
            $data->{'securityDomain'} = $object->getSecurityDomain();
        }
        if (null !== $object->getUserId()) {
            $data->{'userId'} = $object->getUserId();
        }
        if (null !== $object->getUserName()) {
            $data->{'userName'} = $object->getUserName();
        }
        if (null !== $object->getXFrameOptions()) {
            $data->{'xFrameOptions'} = $object->getXFrameOptions();
        }
        if (null !== $object->getXFrameOptionsAllowFromUrl()) {
            $data->{'xFrameOptionsAllowFromUrl'} = $object->getXFrameOptionsAllowFromUrl();
        }

        return $data;
    }
}
