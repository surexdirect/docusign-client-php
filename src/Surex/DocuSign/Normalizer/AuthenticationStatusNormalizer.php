<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class AuthenticationStatusNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\AuthenticationStatus' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\AuthenticationStatus) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\AuthenticationStatus();
        if (property_exists($data, 'accessCodeResult')) {
            $object->setAccessCodeResult($this->serializer->deserialize($data->{'accessCodeResult'}, 'Surex\\DocuSign\\Model\\EventResult', 'raw', $context));
        }
        if (property_exists($data, 'ageVerifyResult')) {
            $object->setAgeVerifyResult($this->serializer->deserialize($data->{'ageVerifyResult'}, 'Surex\\DocuSign\\Model\\EventResult', 'raw', $context));
        }
        if (property_exists($data, 'anySocialIDResult')) {
            $object->setAnySocialIDResult($this->serializer->deserialize($data->{'anySocialIDResult'}, 'Surex\\DocuSign\\Model\\EventResult', 'raw', $context));
        }
        if (property_exists($data, 'facebookResult')) {
            $object->setFacebookResult($this->serializer->deserialize($data->{'facebookResult'}, 'Surex\\DocuSign\\Model\\EventResult', 'raw', $context));
        }
        if (property_exists($data, 'googleResult')) {
            $object->setGoogleResult($this->serializer->deserialize($data->{'googleResult'}, 'Surex\\DocuSign\\Model\\EventResult', 'raw', $context));
        }
        if (property_exists($data, 'idLookupResult')) {
            $object->setIdLookupResult($this->serializer->deserialize($data->{'idLookupResult'}, 'Surex\\DocuSign\\Model\\EventResult', 'raw', $context));
        }
        if (property_exists($data, 'idQuestionsResult')) {
            $object->setIdQuestionsResult($this->serializer->deserialize($data->{'idQuestionsResult'}, 'Surex\\DocuSign\\Model\\EventResult', 'raw', $context));
        }
        if (property_exists($data, 'linkedinResult')) {
            $object->setLinkedinResult($this->serializer->deserialize($data->{'linkedinResult'}, 'Surex\\DocuSign\\Model\\EventResult', 'raw', $context));
        }
        if (property_exists($data, 'liveIDResult')) {
            $object->setLiveIDResult($this->serializer->deserialize($data->{'liveIDResult'}, 'Surex\\DocuSign\\Model\\EventResult', 'raw', $context));
        }
        if (property_exists($data, 'ofacResult')) {
            $object->setOfacResult($this->serializer->deserialize($data->{'ofacResult'}, 'Surex\\DocuSign\\Model\\EventResult', 'raw', $context));
        }
        if (property_exists($data, 'openIDResult')) {
            $object->setOpenIDResult($this->serializer->deserialize($data->{'openIDResult'}, 'Surex\\DocuSign\\Model\\EventResult', 'raw', $context));
        }
        if (property_exists($data, 'phoneAuthResult')) {
            $object->setPhoneAuthResult($this->serializer->deserialize($data->{'phoneAuthResult'}, 'Surex\\DocuSign\\Model\\EventResult', 'raw', $context));
        }
        if (property_exists($data, 'salesforceResult')) {
            $object->setSalesforceResult($this->serializer->deserialize($data->{'salesforceResult'}, 'Surex\\DocuSign\\Model\\EventResult', 'raw', $context));
        }
        if (property_exists($data, 'signatureProviderResult')) {
            $object->setSignatureProviderResult($this->serializer->deserialize($data->{'signatureProviderResult'}, 'Surex\\DocuSign\\Model\\EventResult', 'raw', $context));
        }
        if (property_exists($data, 'smsAuthResult')) {
            $object->setSmsAuthResult($this->serializer->deserialize($data->{'smsAuthResult'}, 'Surex\\DocuSign\\Model\\EventResult', 'raw', $context));
        }
        if (property_exists($data, 'sTANPinResult')) {
            $object->setSTANPinResult($this->serializer->deserialize($data->{'sTANPinResult'}, 'Surex\\DocuSign\\Model\\EventResult', 'raw', $context));
        }
        if (property_exists($data, 'twitterResult')) {
            $object->setTwitterResult($this->serializer->deserialize($data->{'twitterResult'}, 'Surex\\DocuSign\\Model\\EventResult', 'raw', $context));
        }
        if (property_exists($data, 'yahooResult')) {
            $object->setYahooResult($this->serializer->deserialize($data->{'yahooResult'}, 'Surex\\DocuSign\\Model\\EventResult', 'raw', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAccessCodeResult()) {
            $data->{'accessCodeResult'} = $this->serializer->serialize($object->getAccessCodeResult(), 'raw', $context);
        }
        if (null !== $object->getAgeVerifyResult()) {
            $data->{'ageVerifyResult'} = $this->serializer->serialize($object->getAgeVerifyResult(), 'raw', $context);
        }
        if (null !== $object->getAnySocialIDResult()) {
            $data->{'anySocialIDResult'} = $this->serializer->serialize($object->getAnySocialIDResult(), 'raw', $context);
        }
        if (null !== $object->getFacebookResult()) {
            $data->{'facebookResult'} = $this->serializer->serialize($object->getFacebookResult(), 'raw', $context);
        }
        if (null !== $object->getGoogleResult()) {
            $data->{'googleResult'} = $this->serializer->serialize($object->getGoogleResult(), 'raw', $context);
        }
        if (null !== $object->getIdLookupResult()) {
            $data->{'idLookupResult'} = $this->serializer->serialize($object->getIdLookupResult(), 'raw', $context);
        }
        if (null !== $object->getIdQuestionsResult()) {
            $data->{'idQuestionsResult'} = $this->serializer->serialize($object->getIdQuestionsResult(), 'raw', $context);
        }
        if (null !== $object->getLinkedinResult()) {
            $data->{'linkedinResult'} = $this->serializer->serialize($object->getLinkedinResult(), 'raw', $context);
        }
        if (null !== $object->getLiveIDResult()) {
            $data->{'liveIDResult'} = $this->serializer->serialize($object->getLiveIDResult(), 'raw', $context);
        }
        if (null !== $object->getOfacResult()) {
            $data->{'ofacResult'} = $this->serializer->serialize($object->getOfacResult(), 'raw', $context);
        }
        if (null !== $object->getOpenIDResult()) {
            $data->{'openIDResult'} = $this->serializer->serialize($object->getOpenIDResult(), 'raw', $context);
        }
        if (null !== $object->getPhoneAuthResult()) {
            $data->{'phoneAuthResult'} = $this->serializer->serialize($object->getPhoneAuthResult(), 'raw', $context);
        }
        if (null !== $object->getSalesforceResult()) {
            $data->{'salesforceResult'} = $this->serializer->serialize($object->getSalesforceResult(), 'raw', $context);
        }
        if (null !== $object->getSignatureProviderResult()) {
            $data->{'signatureProviderResult'} = $this->serializer->serialize($object->getSignatureProviderResult(), 'raw', $context);
        }
        if (null !== $object->getSmsAuthResult()) {
            $data->{'smsAuthResult'} = $this->serializer->serialize($object->getSmsAuthResult(), 'raw', $context);
        }
        if (null !== $object->getSTANPinResult()) {
            $data->{'sTANPinResult'} = $this->serializer->serialize($object->getSTANPinResult(), 'raw', $context);
        }
        if (null !== $object->getTwitterResult()) {
            $data->{'twitterResult'} = $this->serializer->serialize($object->getTwitterResult(), 'raw', $context);
        }
        if (null !== $object->getYahooResult()) {
            $data->{'yahooResult'} = $this->serializer->serialize($object->getYahooResult(), 'raw', $context);
        }

        return $data;
    }
}
