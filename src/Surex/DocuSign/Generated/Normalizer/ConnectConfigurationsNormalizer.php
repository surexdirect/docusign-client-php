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

class ConnectConfigurationsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\ConnectConfigurations' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\ConnectConfigurations;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\ConnectConfigurations();
        if (property_exists($data, 'allowEnvelopePublish')) {
            $object->setAllowEnvelopePublish($data->{'allowEnvelopePublish'});
        }
        if (property_exists($data, 'allUsers')) {
            $object->setAllUsers($data->{'allUsers'});
        }
        if (property_exists($data, 'configurationType')) {
            $object->setConfigurationType($data->{'configurationType'});
        }
        if (property_exists($data, 'connectId')) {
            $object->setConnectId($data->{'connectId'});
        }
        if (property_exists($data, 'enableLog')) {
            $object->setEnableLog($data->{'enableLog'});
        }
        if (property_exists($data, 'envelopeEvents')) {
            $object->setEnvelopeEvents($data->{'envelopeEvents'});
        }
        if (property_exists($data, 'includeCertificateOfCompletion')) {
            $object->setIncludeCertificateOfCompletion($data->{'includeCertificateOfCompletion'});
        }
        if (property_exists($data, 'includeCertSoapHeader')) {
            $object->setIncludeCertSoapHeader($data->{'includeCertSoapHeader'});
        }
        if (property_exists($data, 'includeDocumentFields')) {
            $object->setIncludeDocumentFields($data->{'includeDocumentFields'});
        }
        if (property_exists($data, 'includeDocuments')) {
            $object->setIncludeDocuments($data->{'includeDocuments'});
        }
        if (property_exists($data, 'includeEnvelopeVoidReason')) {
            $object->setIncludeEnvelopeVoidReason($data->{'includeEnvelopeVoidReason'});
        }
        if (property_exists($data, 'includeSenderAccountasCustomField')) {
            $object->setIncludeSenderAccountasCustomField($data->{'includeSenderAccountasCustomField'});
        }
        if (property_exists($data, 'includeTimeZoneInformation')) {
            $object->setIncludeTimeZoneInformation($data->{'includeTimeZoneInformation'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'recipientEvents')) {
            $object->setRecipientEvents($data->{'recipientEvents'});
        }
        if (property_exists($data, 'requiresAcknowledgement')) {
            $object->setRequiresAcknowledgement($data->{'requiresAcknowledgement'});
        }
        if (property_exists($data, 'signMessageWithX509Certificate')) {
            $object->setSignMessageWithX509Certificate($data->{'signMessageWithX509Certificate'});
        }
        if (property_exists($data, 'soapNamespace')) {
            $object->setSoapNamespace($data->{'soapNamespace'});
        }
        if (property_exists($data, 'urlToPublishTo')) {
            $object->setUrlToPublishTo($data->{'urlToPublishTo'});
        }
        if (property_exists($data, 'userIds')) {
            $object->setUserIds($data->{'userIds'});
        }
        if (property_exists($data, 'useSoapInterface')) {
            $object->setUseSoapInterface($data->{'useSoapInterface'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAllowEnvelopePublish()) {
            $data->{'allowEnvelopePublish'} = $object->getAllowEnvelopePublish();
        }
        if (null !== $object->getAllUsers()) {
            $data->{'allUsers'} = $object->getAllUsers();
        }
        if (null !== $object->getConfigurationType()) {
            $data->{'configurationType'} = $object->getConfigurationType();
        }
        if (null !== $object->getConnectId()) {
            $data->{'connectId'} = $object->getConnectId();
        }
        if (null !== $object->getEnableLog()) {
            $data->{'enableLog'} = $object->getEnableLog();
        }
        if (null !== $object->getEnvelopeEvents()) {
            $data->{'envelopeEvents'} = $object->getEnvelopeEvents();
        }
        if (null !== $object->getIncludeCertificateOfCompletion()) {
            $data->{'includeCertificateOfCompletion'} = $object->getIncludeCertificateOfCompletion();
        }
        if (null !== $object->getIncludeCertSoapHeader()) {
            $data->{'includeCertSoapHeader'} = $object->getIncludeCertSoapHeader();
        }
        if (null !== $object->getIncludeDocumentFields()) {
            $data->{'includeDocumentFields'} = $object->getIncludeDocumentFields();
        }
        if (null !== $object->getIncludeDocuments()) {
            $data->{'includeDocuments'} = $object->getIncludeDocuments();
        }
        if (null !== $object->getIncludeEnvelopeVoidReason()) {
            $data->{'includeEnvelopeVoidReason'} = $object->getIncludeEnvelopeVoidReason();
        }
        if (null !== $object->getIncludeSenderAccountasCustomField()) {
            $data->{'includeSenderAccountasCustomField'} = $object->getIncludeSenderAccountasCustomField();
        }
        if (null !== $object->getIncludeTimeZoneInformation()) {
            $data->{'includeTimeZoneInformation'} = $object->getIncludeTimeZoneInformation();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getRecipientEvents()) {
            $data->{'recipientEvents'} = $object->getRecipientEvents();
        }
        if (null !== $object->getRequiresAcknowledgement()) {
            $data->{'requiresAcknowledgement'} = $object->getRequiresAcknowledgement();
        }
        if (null !== $object->getSignMessageWithX509Certificate()) {
            $data->{'signMessageWithX509Certificate'} = $object->getSignMessageWithX509Certificate();
        }
        if (null !== $object->getSoapNamespace()) {
            $data->{'soapNamespace'} = $object->getSoapNamespace();
        }
        if (null !== $object->getUrlToPublishTo()) {
            $data->{'urlToPublishTo'} = $object->getUrlToPublishTo();
        }
        if (null !== $object->getUserIds()) {
            $data->{'userIds'} = $object->getUserIds();
        }
        if (null !== $object->getUseSoapInterface()) {
            $data->{'useSoapInterface'} = $object->getUseSoapInterface();
        }

        return $data;
    }
}
