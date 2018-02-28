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

class FolderItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\FolderItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\FolderItem;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\FolderItem();
        if (property_exists($data, 'completedDateTime')) {
            $object->setCompletedDateTime($data->{'completedDateTime'});
        }
        if (property_exists($data, 'createdDateTime')) {
            $object->setCreatedDateTime($data->{'createdDateTime'});
        }
        if (property_exists($data, 'customFields')) {
            $values = [];
            foreach ($data->{'customFields'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Model\\CustomFieldV2', 'json', $context);
            }
            $object->setCustomFields($values);
        }
        if (property_exists($data, 'description')) {
            $object->setDescription($data->{'description'});
        }
        if (property_exists($data, 'envelopeId')) {
            $object->setEnvelopeId($data->{'envelopeId'});
        }
        if (property_exists($data, 'envelopeUri')) {
            $object->setEnvelopeUri($data->{'envelopeUri'});
        }
        if (property_exists($data, 'is21CFRPart11')) {
            $object->setIs21CFRPart11($data->{'is21CFRPart11'});
        }
        if (property_exists($data, 'isSignatureProviderEnvelope')) {
            $object->setIsSignatureProviderEnvelope($data->{'isSignatureProviderEnvelope'});
        }
        if (property_exists($data, 'lastModified')) {
            $object->setLastModified($data->{'lastModified'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'ownerName')) {
            $object->setOwnerName($data->{'ownerName'});
        }
        if (property_exists($data, 'pageCount')) {
            $object->setPageCount($data->{'pageCount'});
        }
        if (property_exists($data, 'password')) {
            $object->setPassword($data->{'password'});
        }
        if (property_exists($data, 'senderEmail')) {
            $object->setSenderEmail($data->{'senderEmail'});
        }
        if (property_exists($data, 'senderName')) {
            $object->setSenderName($data->{'senderName'});
        }
        if (property_exists($data, 'sentDateTime')) {
            $object->setSentDateTime($data->{'sentDateTime'});
        }
        if (property_exists($data, 'shared')) {
            $object->setShared($data->{'shared'});
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'subject')) {
            $object->setSubject($data->{'subject'});
        }
        if (property_exists($data, 'templateId')) {
            $object->setTemplateId($data->{'templateId'});
        }
        if (property_exists($data, 'uri')) {
            $object->setUri($data->{'uri'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCompletedDateTime()) {
            $data->{'completedDateTime'} = $object->getCompletedDateTime();
        }
        if (null !== $object->getCreatedDateTime()) {
            $data->{'createdDateTime'} = $object->getCreatedDateTime();
        }
        if (null !== $object->getCustomFields()) {
            $values = [];
            foreach ($object->getCustomFields() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'customFields'} = $values;
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        }
        if (null !== $object->getEnvelopeId()) {
            $data->{'envelopeId'} = $object->getEnvelopeId();
        }
        if (null !== $object->getEnvelopeUri()) {
            $data->{'envelopeUri'} = $object->getEnvelopeUri();
        }
        if (null !== $object->getIs21CFRPart11()) {
            $data->{'is21CFRPart11'} = $object->getIs21CFRPart11();
        }
        if (null !== $object->getIsSignatureProviderEnvelope()) {
            $data->{'isSignatureProviderEnvelope'} = $object->getIsSignatureProviderEnvelope();
        }
        if (null !== $object->getLastModified()) {
            $data->{'lastModified'} = $object->getLastModified();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getOwnerName()) {
            $data->{'ownerName'} = $object->getOwnerName();
        }
        if (null !== $object->getPageCount()) {
            $data->{'pageCount'} = $object->getPageCount();
        }
        if (null !== $object->getPassword()) {
            $data->{'password'} = $object->getPassword();
        }
        if (null !== $object->getSenderEmail()) {
            $data->{'senderEmail'} = $object->getSenderEmail();
        }
        if (null !== $object->getSenderName()) {
            $data->{'senderName'} = $object->getSenderName();
        }
        if (null !== $object->getSentDateTime()) {
            $data->{'sentDateTime'} = $object->getSentDateTime();
        }
        if (null !== $object->getShared()) {
            $data->{'shared'} = $object->getShared();
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getSubject()) {
            $data->{'subject'} = $object->getSubject();
        }
        if (null !== $object->getTemplateId()) {
            $data->{'templateId'} = $object->getTemplateId();
        }
        if (null !== $object->getUri()) {
            $data->{'uri'} = $object->getUri();
        }

        return $data;
    }
}
