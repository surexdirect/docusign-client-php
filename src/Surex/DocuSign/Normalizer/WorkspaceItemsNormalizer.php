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

class WorkspaceItemsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\WorkspaceItems' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\WorkspaceItems;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\WorkspaceItems();
        if (property_exists($data, 'callerAuthorization')) {
            $object->setCallerAuthorization($this->denormalizer->denormalize($data->{'callerAuthorization'}, 'Surex\\DocuSign\\Model\\WorkspaceUserAuthorization', 'json', $context));
        }
        if (property_exists($data, 'contentType')) {
            $object->setContentType($data->{'contentType'});
        }
        if (property_exists($data, 'created')) {
            $object->setCreated($data->{'created'});
        }
        if (property_exists($data, 'createdById')) {
            $object->setCreatedById($data->{'createdById'});
        }
        if (property_exists($data, 'createdByInformation')) {
            $object->setCreatedByInformation($this->denormalizer->denormalize($data->{'createdByInformation'}, 'Surex\\DocuSign\\Model\\WorkspaceUser', 'json', $context));
        }
        if (property_exists($data, 'extension')) {
            $object->setExtension($data->{'extension'});
        }
        if (property_exists($data, 'fileSize')) {
            $object->setFileSize($data->{'fileSize'});
        }
        if (property_exists($data, 'fileUri')) {
            $object->setFileUri($data->{'fileUri'});
        }
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'isPublic')) {
            $object->setIsPublic($data->{'isPublic'});
        }
        if (property_exists($data, 'lastModified')) {
            $object->setLastModified($data->{'lastModified'});
        }
        if (property_exists($data, 'lastModifiedById')) {
            $object->setLastModifiedById($data->{'lastModifiedById'});
        }
        if (property_exists($data, 'lastModifiedByInformation')) {
            $object->setLastModifiedByInformation($this->denormalizer->denormalize($data->{'lastModifiedByInformation'}, 'Surex\\DocuSign\\Model\\WorkspaceUser', 'json', $context));
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'pageCount')) {
            $object->setPageCount($data->{'pageCount'});
        }
        if (property_exists($data, 'parentFolderId')) {
            $object->setParentFolderId($data->{'parentFolderId'});
        }
        if (property_exists($data, 'parentFolderUri')) {
            $object->setParentFolderUri($data->{'parentFolderUri'});
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
        if (null !== $object->getCallerAuthorization()) {
            $data->{'callerAuthorization'} = $this->normalizer->normalize($object->getCallerAuthorization(), 'json', $context);
        }
        if (null !== $object->getContentType()) {
            $data->{'contentType'} = $object->getContentType();
        }
        if (null !== $object->getCreated()) {
            $data->{'created'} = $object->getCreated();
        }
        if (null !== $object->getCreatedById()) {
            $data->{'createdById'} = $object->getCreatedById();
        }
        if (null !== $object->getCreatedByInformation()) {
            $data->{'createdByInformation'} = $this->normalizer->normalize($object->getCreatedByInformation(), 'json', $context);
        }
        if (null !== $object->getExtension()) {
            $data->{'extension'} = $object->getExtension();
        }
        if (null !== $object->getFileSize()) {
            $data->{'fileSize'} = $object->getFileSize();
        }
        if (null !== $object->getFileUri()) {
            $data->{'fileUri'} = $object->getFileUri();
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getIsPublic()) {
            $data->{'isPublic'} = $object->getIsPublic();
        }
        if (null !== $object->getLastModified()) {
            $data->{'lastModified'} = $object->getLastModified();
        }
        if (null !== $object->getLastModifiedById()) {
            $data->{'lastModifiedById'} = $object->getLastModifiedById();
        }
        if (null !== $object->getLastModifiedByInformation()) {
            $data->{'lastModifiedByInformation'} = $this->normalizer->normalize($object->getLastModifiedByInformation(), 'json', $context);
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getPageCount()) {
            $data->{'pageCount'} = $object->getPageCount();
        }
        if (null !== $object->getParentFolderId()) {
            $data->{'parentFolderId'} = $object->getParentFolderId();
        }
        if (null !== $object->getParentFolderUri()) {
            $data->{'parentFolderUri'} = $object->getParentFolderUri();
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
