<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class PowerFormsNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\PowerForms' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\PowerForms) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\PowerForms();
        if (property_exists($data, 'createdDateTime')) {
            $object->setCreatedDateTime($data->{'createdDateTime'});
        }
        if (property_exists($data, 'emailBody')) {
            $object->setEmailBody($data->{'emailBody'});
        }
        if (property_exists($data, 'emailSubject')) {
            $object->setEmailSubject($data->{'emailSubject'});
        }
        if (property_exists($data, 'envelopes')) {
            $values = [];
            foreach ($data->{'envelopes'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\Envelopes', 'raw', $context);
            }
            $object->setEnvelopes($values);
        }
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->serializer->deserialize($data->{'errorDetails'}, 'Surex\\DocuSign\\Model\\ErrorDetails', 'raw', $context));
        }
        if (property_exists($data, 'instructions')) {
            $object->setInstructions($data->{'instructions'});
        }
        if (property_exists($data, 'isActive')) {
            $object->setIsActive($data->{'isActive'});
        }
        if (property_exists($data, 'lastUsed')) {
            $object->setLastUsed($data->{'lastUsed'});
        }
        if (property_exists($data, 'limitUseInterval')) {
            $object->setLimitUseInterval($data->{'limitUseInterval'});
        }
        if (property_exists($data, 'limitUseIntervalEnabled')) {
            $object->setLimitUseIntervalEnabled($data->{'limitUseIntervalEnabled'});
        }
        if (property_exists($data, 'limitUseIntervalUnits')) {
            $object->setLimitUseIntervalUnits($data->{'limitUseIntervalUnits'});
        }
        if (property_exists($data, 'maxUseEnabled')) {
            $object->setMaxUseEnabled($data->{'maxUseEnabled'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'powerFormId')) {
            $object->setPowerFormId($data->{'powerFormId'});
        }
        if (property_exists($data, 'powerFormUrl')) {
            $object->setPowerFormUrl($data->{'powerFormUrl'});
        }
        if (property_exists($data, 'recipients')) {
            $values_1 = [];
            foreach ($data->{'recipients'} as $value_1) {
                $values_1[] = $this->serializer->deserialize($value_1, 'Surex\\DocuSign\\Model\\PowerFormRecipient', 'raw', $context);
            }
            $object->setRecipients($values_1);
        }
        if (property_exists($data, 'senderName')) {
            $object->setSenderName($data->{'senderName'});
        }
        if (property_exists($data, 'senderUserId')) {
            $object->setSenderUserId($data->{'senderUserId'});
        }
        if (property_exists($data, 'signingMode')) {
            $object->setSigningMode($data->{'signingMode'});
        }
        if (property_exists($data, 'templateId')) {
            $object->setTemplateId($data->{'templateId'});
        }
        if (property_exists($data, 'templateName')) {
            $object->setTemplateName($data->{'templateName'});
        }
        if (property_exists($data, 'timesUsed')) {
            $object->setTimesUsed($data->{'timesUsed'});
        }
        if (property_exists($data, 'uri')) {
            $object->setUri($data->{'uri'});
        }
        if (property_exists($data, 'usesRemaining')) {
            $object->setUsesRemaining($data->{'usesRemaining'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCreatedDateTime()) {
            $data->{'createdDateTime'} = $object->getCreatedDateTime();
        }
        if (null !== $object->getEmailBody()) {
            $data->{'emailBody'} = $object->getEmailBody();
        }
        if (null !== $object->getEmailSubject()) {
            $data->{'emailSubject'} = $object->getEmailSubject();
        }
        if (null !== $object->getEnvelopes()) {
            $values = [];
            foreach ($object->getEnvelopes() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'envelopes'} = $values;
        }
        if (null !== $object->getErrorDetails()) {
            $data->{'errorDetails'} = $this->serializer->serialize($object->getErrorDetails(), 'raw', $context);
        }
        if (null !== $object->getInstructions()) {
            $data->{'instructions'} = $object->getInstructions();
        }
        if (null !== $object->getIsActive()) {
            $data->{'isActive'} = $object->getIsActive();
        }
        if (null !== $object->getLastUsed()) {
            $data->{'lastUsed'} = $object->getLastUsed();
        }
        if (null !== $object->getLimitUseInterval()) {
            $data->{'limitUseInterval'} = $object->getLimitUseInterval();
        }
        if (null !== $object->getLimitUseIntervalEnabled()) {
            $data->{'limitUseIntervalEnabled'} = $object->getLimitUseIntervalEnabled();
        }
        if (null !== $object->getLimitUseIntervalUnits()) {
            $data->{'limitUseIntervalUnits'} = $object->getLimitUseIntervalUnits();
        }
        if (null !== $object->getMaxUseEnabled()) {
            $data->{'maxUseEnabled'} = $object->getMaxUseEnabled();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getPowerFormId()) {
            $data->{'powerFormId'} = $object->getPowerFormId();
        }
        if (null !== $object->getPowerFormUrl()) {
            $data->{'powerFormUrl'} = $object->getPowerFormUrl();
        }
        if (null !== $object->getRecipients()) {
            $values_1 = [];
            foreach ($object->getRecipients() as $value_1) {
                $values_1[] = $this->serializer->serialize($value_1, 'raw', $context);
            }
            $data->{'recipients'} = $values_1;
        }
        if (null !== $object->getSenderName()) {
            $data->{'senderName'} = $object->getSenderName();
        }
        if (null !== $object->getSenderUserId()) {
            $data->{'senderUserId'} = $object->getSenderUserId();
        }
        if (null !== $object->getSigningMode()) {
            $data->{'signingMode'} = $object->getSigningMode();
        }
        if (null !== $object->getTemplateId()) {
            $data->{'templateId'} = $object->getTemplateId();
        }
        if (null !== $object->getTemplateName()) {
            $data->{'templateName'} = $object->getTemplateName();
        }
        if (null !== $object->getTimesUsed()) {
            $data->{'timesUsed'} = $object->getTimesUsed();
        }
        if (null !== $object->getUri()) {
            $data->{'uri'} = $object->getUri();
        }
        if (null !== $object->getUsesRemaining()) {
            $data->{'usesRemaining'} = $object->getUsesRemaining();
        }

        return $data;
    }
}
