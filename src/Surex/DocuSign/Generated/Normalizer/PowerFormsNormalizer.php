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

class PowerFormsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\PowerForms' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\PowerForms;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\PowerForms();
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
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Generated\\Model\\Envelopes', 'json', $context);
            }
            $object->setEnvelopes($values);
        }
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->denormalizer->denormalize($data->{'errorDetails'}, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json', $context));
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
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Surex\\DocuSign\\Generated\\Model\\PowerFormRecipient', 'json', $context);
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
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'envelopes'} = $values;
        }
        if (null !== $object->getErrorDetails()) {
            $data->{'errorDetails'} = $this->normalizer->normalize($object->getErrorDetails(), 'json', $context);
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
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
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
