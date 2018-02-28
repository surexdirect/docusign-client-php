<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EventNotificationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\EventNotification' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\EventNotification;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\EventNotification();
        if (property_exists($data, 'envelopeEvents')) {
            $values = [];
            foreach ($data->{'envelopeEvents'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Model\\EnvelopeEvent', 'json', $context);
            }
            $object->setEnvelopeEvents($values);
        }
        if (property_exists($data, 'includeCertificateOfCompletion')) {
            $object->setIncludeCertificateOfCompletion($data->{'includeCertificateOfCompletion'});
        }
        if (property_exists($data, 'includeCertificateWithSoap')) {
            $object->setIncludeCertificateWithSoap($data->{'includeCertificateWithSoap'});
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
        if (property_exists($data, 'includeSenderAccountAsCustomField')) {
            $object->setIncludeSenderAccountAsCustomField($data->{'includeSenderAccountAsCustomField'});
        }
        if (property_exists($data, 'includeTimeZone')) {
            $object->setIncludeTimeZone($data->{'includeTimeZone'});
        }
        if (property_exists($data, 'loggingEnabled')) {
            $object->setLoggingEnabled($data->{'loggingEnabled'});
        }
        if (property_exists($data, 'recipientEvents')) {
            $values_1 = [];
            foreach ($data->{'recipientEvents'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Surex\\DocuSign\\Model\\RecipientEvent', 'json', $context);
            }
            $object->setRecipientEvents($values_1);
        }
        if (property_exists($data, 'requireAcknowledgment')) {
            $object->setRequireAcknowledgment($data->{'requireAcknowledgment'});
        }
        if (property_exists($data, 'signMessageWithX509Cert')) {
            $object->setSignMessageWithX509Cert($data->{'signMessageWithX509Cert'});
        }
        if (property_exists($data, 'soapNameSpace')) {
            $object->setSoapNameSpace($data->{'soapNameSpace'});
        }
        if (property_exists($data, 'url')) {
            $object->setUrl($data->{'url'});
        }
        if (property_exists($data, 'useSoapInterface')) {
            $object->setUseSoapInterface($data->{'useSoapInterface'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getEnvelopeEvents()) {
            $values = [];
            foreach ($object->getEnvelopeEvents() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'envelopeEvents'} = $values;
        }
        if (null !== $object->getIncludeCertificateOfCompletion()) {
            $data->{'includeCertificateOfCompletion'} = $object->getIncludeCertificateOfCompletion();
        }
        if (null !== $object->getIncludeCertificateWithSoap()) {
            $data->{'includeCertificateWithSoap'} = $object->getIncludeCertificateWithSoap();
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
        if (null !== $object->getIncludeSenderAccountAsCustomField()) {
            $data->{'includeSenderAccountAsCustomField'} = $object->getIncludeSenderAccountAsCustomField();
        }
        if (null !== $object->getIncludeTimeZone()) {
            $data->{'includeTimeZone'} = $object->getIncludeTimeZone();
        }
        if (null !== $object->getLoggingEnabled()) {
            $data->{'loggingEnabled'} = $object->getLoggingEnabled();
        }
        if (null !== $object->getRecipientEvents()) {
            $values_1 = [];
            foreach ($object->getRecipientEvents() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'recipientEvents'} = $values_1;
        }
        if (null !== $object->getRequireAcknowledgment()) {
            $data->{'requireAcknowledgment'} = $object->getRequireAcknowledgment();
        }
        if (null !== $object->getSignMessageWithX509Cert()) {
            $data->{'signMessageWithX509Cert'} = $object->getSignMessageWithX509Cert();
        }
        if (null !== $object->getSoapNameSpace()) {
            $data->{'soapNameSpace'} = $object->getSoapNameSpace();
        }
        if (null !== $object->getUrl()) {
            $data->{'url'} = $object->getUrl();
        }
        if (null !== $object->getUseSoapInterface()) {
            $data->{'useSoapInterface'} = $object->getUseSoapInterface();
        }

        return $data;
    }
}
