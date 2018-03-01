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

class AuthenticationStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\AuthenticationStatus' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\AuthenticationStatus;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\AuthenticationStatus();
        if (property_exists($data, 'accessCodeResult')) {
            $object->setAccessCodeResult($this->denormalizer->denormalize($data->{'accessCodeResult'}, 'Surex\\DocuSign\\Generated\\Model\\EventResult', 'json', $context));
        }
        if (property_exists($data, 'ageVerifyResult')) {
            $object->setAgeVerifyResult($this->denormalizer->denormalize($data->{'ageVerifyResult'}, 'Surex\\DocuSign\\Generated\\Model\\EventResult', 'json', $context));
        }
        if (property_exists($data, 'anySocialIDResult')) {
            $object->setAnySocialIDResult($this->denormalizer->denormalize($data->{'anySocialIDResult'}, 'Surex\\DocuSign\\Generated\\Model\\EventResult', 'json', $context));
        }
        if (property_exists($data, 'facebookResult')) {
            $object->setFacebookResult($this->denormalizer->denormalize($data->{'facebookResult'}, 'Surex\\DocuSign\\Generated\\Model\\EventResult', 'json', $context));
        }
        if (property_exists($data, 'googleResult')) {
            $object->setGoogleResult($this->denormalizer->denormalize($data->{'googleResult'}, 'Surex\\DocuSign\\Generated\\Model\\EventResult', 'json', $context));
        }
        if (property_exists($data, 'idLookupResult')) {
            $object->setIdLookupResult($this->denormalizer->denormalize($data->{'idLookupResult'}, 'Surex\\DocuSign\\Generated\\Model\\EventResult', 'json', $context));
        }
        if (property_exists($data, 'idQuestionsResult')) {
            $object->setIdQuestionsResult($this->denormalizer->denormalize($data->{'idQuestionsResult'}, 'Surex\\DocuSign\\Generated\\Model\\EventResult', 'json', $context));
        }
        if (property_exists($data, 'linkedinResult')) {
            $object->setLinkedinResult($this->denormalizer->denormalize($data->{'linkedinResult'}, 'Surex\\DocuSign\\Generated\\Model\\EventResult', 'json', $context));
        }
        if (property_exists($data, 'liveIDResult')) {
            $object->setLiveIDResult($this->denormalizer->denormalize($data->{'liveIDResult'}, 'Surex\\DocuSign\\Generated\\Model\\EventResult', 'json', $context));
        }
        if (property_exists($data, 'ofacResult')) {
            $object->setOfacResult($this->denormalizer->denormalize($data->{'ofacResult'}, 'Surex\\DocuSign\\Generated\\Model\\EventResult', 'json', $context));
        }
        if (property_exists($data, 'openIDResult')) {
            $object->setOpenIDResult($this->denormalizer->denormalize($data->{'openIDResult'}, 'Surex\\DocuSign\\Generated\\Model\\EventResult', 'json', $context));
        }
        if (property_exists($data, 'phoneAuthResult')) {
            $object->setPhoneAuthResult($this->denormalizer->denormalize($data->{'phoneAuthResult'}, 'Surex\\DocuSign\\Generated\\Model\\EventResult', 'json', $context));
        }
        if (property_exists($data, 'salesforceResult')) {
            $object->setSalesforceResult($this->denormalizer->denormalize($data->{'salesforceResult'}, 'Surex\\DocuSign\\Generated\\Model\\EventResult', 'json', $context));
        }
        if (property_exists($data, 'signatureProviderResult')) {
            $object->setSignatureProviderResult($this->denormalizer->denormalize($data->{'signatureProviderResult'}, 'Surex\\DocuSign\\Generated\\Model\\EventResult', 'json', $context));
        }
        if (property_exists($data, 'smsAuthResult')) {
            $object->setSmsAuthResult($this->denormalizer->denormalize($data->{'smsAuthResult'}, 'Surex\\DocuSign\\Generated\\Model\\EventResult', 'json', $context));
        }
        if (property_exists($data, 'sTANPinResult')) {
            $object->setSTANPinResult($this->denormalizer->denormalize($data->{'sTANPinResult'}, 'Surex\\DocuSign\\Generated\\Model\\EventResult', 'json', $context));
        }
        if (property_exists($data, 'twitterResult')) {
            $object->setTwitterResult($this->denormalizer->denormalize($data->{'twitterResult'}, 'Surex\\DocuSign\\Generated\\Model\\EventResult', 'json', $context));
        }
        if (property_exists($data, 'yahooResult')) {
            $object->setYahooResult($this->denormalizer->denormalize($data->{'yahooResult'}, 'Surex\\DocuSign\\Generated\\Model\\EventResult', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAccessCodeResult()) {
            $data->{'accessCodeResult'} = $this->normalizer->normalize($object->getAccessCodeResult(), 'json', $context);
        }
        if (null !== $object->getAgeVerifyResult()) {
            $data->{'ageVerifyResult'} = $this->normalizer->normalize($object->getAgeVerifyResult(), 'json', $context);
        }
        if (null !== $object->getAnySocialIDResult()) {
            $data->{'anySocialIDResult'} = $this->normalizer->normalize($object->getAnySocialIDResult(), 'json', $context);
        }
        if (null !== $object->getFacebookResult()) {
            $data->{'facebookResult'} = $this->normalizer->normalize($object->getFacebookResult(), 'json', $context);
        }
        if (null !== $object->getGoogleResult()) {
            $data->{'googleResult'} = $this->normalizer->normalize($object->getGoogleResult(), 'json', $context);
        }
        if (null !== $object->getIdLookupResult()) {
            $data->{'idLookupResult'} = $this->normalizer->normalize($object->getIdLookupResult(), 'json', $context);
        }
        if (null !== $object->getIdQuestionsResult()) {
            $data->{'idQuestionsResult'} = $this->normalizer->normalize($object->getIdQuestionsResult(), 'json', $context);
        }
        if (null !== $object->getLinkedinResult()) {
            $data->{'linkedinResult'} = $this->normalizer->normalize($object->getLinkedinResult(), 'json', $context);
        }
        if (null !== $object->getLiveIDResult()) {
            $data->{'liveIDResult'} = $this->normalizer->normalize($object->getLiveIDResult(), 'json', $context);
        }
        if (null !== $object->getOfacResult()) {
            $data->{'ofacResult'} = $this->normalizer->normalize($object->getOfacResult(), 'json', $context);
        }
        if (null !== $object->getOpenIDResult()) {
            $data->{'openIDResult'} = $this->normalizer->normalize($object->getOpenIDResult(), 'json', $context);
        }
        if (null !== $object->getPhoneAuthResult()) {
            $data->{'phoneAuthResult'} = $this->normalizer->normalize($object->getPhoneAuthResult(), 'json', $context);
        }
        if (null !== $object->getSalesforceResult()) {
            $data->{'salesforceResult'} = $this->normalizer->normalize($object->getSalesforceResult(), 'json', $context);
        }
        if (null !== $object->getSignatureProviderResult()) {
            $data->{'signatureProviderResult'} = $this->normalizer->normalize($object->getSignatureProviderResult(), 'json', $context);
        }
        if (null !== $object->getSmsAuthResult()) {
            $data->{'smsAuthResult'} = $this->normalizer->normalize($object->getSmsAuthResult(), 'json', $context);
        }
        if (null !== $object->getSTANPinResult()) {
            $data->{'sTANPinResult'} = $this->normalizer->normalize($object->getSTANPinResult(), 'json', $context);
        }
        if (null !== $object->getTwitterResult()) {
            $data->{'twitterResult'} = $this->normalizer->normalize($object->getTwitterResult(), 'json', $context);
        }
        if (null !== $object->getYahooResult()) {
            $data->{'yahooResult'} = $this->normalizer->normalize($object->getYahooResult(), 'json', $context);
        }

        return $data;
    }
}
