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

class DocumentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\Document' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\Document;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\Document();
        if (property_exists($data, 'applyAnchorTabs')) {
            $object->setApplyAnchorTabs($data->{'applyAnchorTabs'});
        }
        if (property_exists($data, 'display')) {
            $object->setDisplay($data->{'display'});
        }
        if (property_exists($data, 'documentBase64')) {
            $object->setDocumentBase64($data->{'documentBase64'});
        }
        if (property_exists($data, 'documentFields')) {
            $values = [];
            foreach ($data->{'documentFields'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Generated\\Model\\NameValue', 'json', $context);
            }
            $object->setDocumentFields($values);
        }
        if (property_exists($data, 'documentGroup')) {
            $object->setDocumentGroup($data->{'documentGroup'});
        }
        if (property_exists($data, 'documentId')) {
            $object->setDocumentId($data->{'documentId'});
        }
        if (property_exists($data, 'encryptedWithKeyManager')) {
            $object->setEncryptedWithKeyManager($data->{'encryptedWithKeyManager'});
        }
        if (property_exists($data, 'fileExtension')) {
            $object->setFileExtension($data->{'fileExtension'});
        }
        if (property_exists($data, 'fileFormatHint')) {
            $object->setFileFormatHint($data->{'fileFormatHint'});
        }
        if (property_exists($data, 'includeInDownload')) {
            $object->setIncludeInDownload($data->{'includeInDownload'});
        }
        if (property_exists($data, 'matchBoxes')) {
            $values_1 = [];
            foreach ($data->{'matchBoxes'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Surex\\DocuSign\\Generated\\Model\\MatchBox', 'json', $context);
            }
            $object->setMatchBoxes($values_1);
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
        if (property_exists($data, 'password')) {
            $object->setPassword($data->{'password'});
        }
        if (property_exists($data, 'remoteUrl')) {
            $object->setRemoteUrl($data->{'remoteUrl'});
        }
        if (property_exists($data, 'signerMustAcknowledge')) {
            $object->setSignerMustAcknowledge($data->{'signerMustAcknowledge'});
        }
        if (property_exists($data, 'templateLocked')) {
            $object->setTemplateLocked($data->{'templateLocked'});
        }
        if (property_exists($data, 'templateRequired')) {
            $object->setTemplateRequired($data->{'templateRequired'});
        }
        if (property_exists($data, 'transformPdfFields')) {
            $object->setTransformPdfFields($data->{'transformPdfFields'});
        }
        if (property_exists($data, 'uri')) {
            $object->setUri($data->{'uri'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getApplyAnchorTabs()) {
            $data->{'applyAnchorTabs'} = $object->getApplyAnchorTabs();
        }
        if (null !== $object->getDisplay()) {
            $data->{'display'} = $object->getDisplay();
        }
        if (null !== $object->getDocumentBase64()) {
            $data->{'documentBase64'} = $object->getDocumentBase64();
        }
        if (null !== $object->getDocumentFields()) {
            $values = [];
            foreach ($object->getDocumentFields() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'documentFields'} = $values;
        }
        if (null !== $object->getDocumentGroup()) {
            $data->{'documentGroup'} = $object->getDocumentGroup();
        }
        if (null !== $object->getDocumentId()) {
            $data->{'documentId'} = $object->getDocumentId();
        }
        if (null !== $object->getEncryptedWithKeyManager()) {
            $data->{'encryptedWithKeyManager'} = $object->getEncryptedWithKeyManager();
        }
        if (null !== $object->getFileExtension()) {
            $data->{'fileExtension'} = $object->getFileExtension();
        }
        if (null !== $object->getFileFormatHint()) {
            $data->{'fileFormatHint'} = $object->getFileFormatHint();
        }
        if (null !== $object->getIncludeInDownload()) {
            $data->{'includeInDownload'} = $object->getIncludeInDownload();
        }
        if (null !== $object->getMatchBoxes()) {
            $values_1 = [];
            foreach ($object->getMatchBoxes() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'matchBoxes'} = $values_1;
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
        if (null !== $object->getPassword()) {
            $data->{'password'} = $object->getPassword();
        }
        if (null !== $object->getRemoteUrl()) {
            $data->{'remoteUrl'} = $object->getRemoteUrl();
        }
        if (null !== $object->getSignerMustAcknowledge()) {
            $data->{'signerMustAcknowledge'} = $object->getSignerMustAcknowledge();
        }
        if (null !== $object->getTemplateLocked()) {
            $data->{'templateLocked'} = $object->getTemplateLocked();
        }
        if (null !== $object->getTemplateRequired()) {
            $data->{'templateRequired'} = $object->getTemplateRequired();
        }
        if (null !== $object->getTransformPdfFields()) {
            $data->{'transformPdfFields'} = $object->getTransformPdfFields();
        }
        if (null !== $object->getUri()) {
            $data->{'uri'} = $object->getUri();
        }

        return $data;
    }
}
