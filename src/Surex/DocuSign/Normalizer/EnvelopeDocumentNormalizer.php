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

class EnvelopeDocumentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\EnvelopeDocument' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\EnvelopeDocument;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\EnvelopeDocument();
        if (property_exists($data, 'attachmentTabId')) {
            $object->setAttachmentTabId($data->{'attachmentTabId'});
        }
        if (property_exists($data, 'availableDocumentTypes')) {
            $values = [];
            foreach ($data->{'availableDocumentTypes'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Model\\SignatureType', 'json', $context);
            }
            $object->setAvailableDocumentTypes($values);
        }
        if (property_exists($data, 'containsPdfFormFields')) {
            $object->setContainsPdfFormFields($data->{'containsPdfFormFields'});
        }
        if (property_exists($data, 'display')) {
            $object->setDisplay($data->{'display'});
        }
        if (property_exists($data, 'documentFields')) {
            $values_1 = [];
            foreach ($data->{'documentFields'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Surex\\DocuSign\\Model\\NameValue', 'json', $context);
            }
            $object->setDocumentFields($values_1);
        }
        if (property_exists($data, 'documentGroup')) {
            $object->setDocumentGroup($data->{'documentGroup'});
        }
        if (property_exists($data, 'documentId')) {
            $object->setDocumentId($data->{'documentId'});
        }
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->denormalizer->denormalize($data->{'errorDetails'}, 'Surex\\DocuSign\\Model\\ErrorDetails', 'json', $context));
        }
        if (property_exists($data, 'includeInDownload')) {
            $object->setIncludeInDownload($data->{'includeInDownload'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'order')) {
            $object->setOrder($data->{'order'});
        }
        if (property_exists($data, 'pages')) {
            $object->setPages($data->{'pages'});
        }
        if (property_exists($data, 'signerMustAcknowledge')) {
            $object->setSignerMustAcknowledge($data->{'signerMustAcknowledge'});
        }
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'uri')) {
            $object->setUri($data->{'uri'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAttachmentTabId()) {
            $data->{'attachmentTabId'} = $object->getAttachmentTabId();
        }
        if (null !== $object->getAvailableDocumentTypes()) {
            $values = [];
            foreach ($object->getAvailableDocumentTypes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'availableDocumentTypes'} = $values;
        }
        if (null !== $object->getContainsPdfFormFields()) {
            $data->{'containsPdfFormFields'} = $object->getContainsPdfFormFields();
        }
        if (null !== $object->getDisplay()) {
            $data->{'display'} = $object->getDisplay();
        }
        if (null !== $object->getDocumentFields()) {
            $values_1 = [];
            foreach ($object->getDocumentFields() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'documentFields'} = $values_1;
        }
        if (null !== $object->getDocumentGroup()) {
            $data->{'documentGroup'} = $object->getDocumentGroup();
        }
        if (null !== $object->getDocumentId()) {
            $data->{'documentId'} = $object->getDocumentId();
        }
        if (null !== $object->getErrorDetails()) {
            $data->{'errorDetails'} = $this->normalizer->normalize($object->getErrorDetails(), 'json', $context);
        }
        if (null !== $object->getIncludeInDownload()) {
            $data->{'includeInDownload'} = $object->getIncludeInDownload();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getOrder()) {
            $data->{'order'} = $object->getOrder();
        }
        if (null !== $object->getPages()) {
            $data->{'pages'} = $object->getPages();
        }
        if (null !== $object->getSignerMustAcknowledge()) {
            $data->{'signerMustAcknowledge'} = $object->getSignerMustAcknowledge();
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getUri()) {
            $data->{'uri'} = $object->getUri();
        }

        return $data;
    }
}
