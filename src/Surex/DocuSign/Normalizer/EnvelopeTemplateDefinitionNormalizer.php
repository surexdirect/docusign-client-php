<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class EnvelopeTemplateDefinitionNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\EnvelopeTemplateDefinition' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\EnvelopeTemplateDefinition) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\EnvelopeTemplateDefinition();
        if (property_exists($data, 'description')) {
            $object->setDescription($data->{'description'});
        }
        if (property_exists($data, 'folderId')) {
            $object->setFolderId($data->{'folderId'});
        }
        if (property_exists($data, 'folderName')) {
            $object->setFolderName($data->{'folderName'});
        }
        if (property_exists($data, 'folderUri')) {
            $object->setFolderUri($data->{'folderUri'});
        }
        if (property_exists($data, 'lastModified')) {
            $object->setLastModified($data->{'lastModified'});
        }
        if (property_exists($data, 'lastModifiedBy')) {
            $object->setLastModifiedBy($this->serializer->deserialize($data->{'lastModifiedBy'}, 'Surex\\DocuSign\\Model\\UserInfo', 'raw', $context));
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'newPassword')) {
            $object->setNewPassword($data->{'newPassword'});
        }
        if (property_exists($data, 'owner')) {
            $object->setOwner($this->serializer->deserialize($data->{'owner'}, 'Surex\\DocuSign\\Model\\UserInfo', 'raw', $context));
        }
        if (property_exists($data, 'pageCount')) {
            $object->setPageCount($data->{'pageCount'});
        }
        if (property_exists($data, 'parentFolderUri')) {
            $object->setParentFolderUri($data->{'parentFolderUri'});
        }
        if (property_exists($data, 'password')) {
            $object->setPassword($data->{'password'});
        }
        if (property_exists($data, 'shared')) {
            $object->setShared($data->{'shared'});
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
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        }
        if (null !== $object->getFolderId()) {
            $data->{'folderId'} = $object->getFolderId();
        }
        if (null !== $object->getFolderName()) {
            $data->{'folderName'} = $object->getFolderName();
        }
        if (null !== $object->getFolderUri()) {
            $data->{'folderUri'} = $object->getFolderUri();
        }
        if (null !== $object->getLastModified()) {
            $data->{'lastModified'} = $object->getLastModified();
        }
        if (null !== $object->getLastModifiedBy()) {
            $data->{'lastModifiedBy'} = $this->serializer->serialize($object->getLastModifiedBy(), 'raw', $context);
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getNewPassword()) {
            $data->{'newPassword'} = $object->getNewPassword();
        }
        if (null !== $object->getOwner()) {
            $data->{'owner'} = $this->serializer->serialize($object->getOwner(), 'raw', $context);
        }
        if (null !== $object->getPageCount()) {
            $data->{'pageCount'} = $object->getPageCount();
        }
        if (null !== $object->getParentFolderUri()) {
            $data->{'parentFolderUri'} = $object->getParentFolderUri();
        }
        if (null !== $object->getPassword()) {
            $data->{'password'} = $object->getPassword();
        }
        if (null !== $object->getShared()) {
            $data->{'shared'} = $object->getShared();
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
