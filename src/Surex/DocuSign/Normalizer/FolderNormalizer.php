<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class FolderNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\Folder' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\Folder) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\Folder();
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->serializer->deserialize($data->{'errorDetails'}, 'Surex\\DocuSign\\Model\\ErrorDetails', 'raw', $context));
        }
        if (property_exists($data, 'filter')) {
            $object->setFilter($this->serializer->deserialize($data->{'filter'}, 'Surex\\DocuSign\\Model\\Filter', 'raw', $context));
        }
        if (property_exists($data, 'folderId')) {
            $object->setFolderId($data->{'folderId'});
        }
        if (property_exists($data, 'folders')) {
            $values = [];
            foreach ($data->{'folders'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\Folder', 'raw', $context);
            }
            $object->setFolders($values);
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'ownerEmail')) {
            $object->setOwnerEmail($data->{'ownerEmail'});
        }
        if (property_exists($data, 'ownerUserId')) {
            $object->setOwnerUserId($data->{'ownerUserId'});
        }
        if (property_exists($data, 'ownerUserName')) {
            $object->setOwnerUserName($data->{'ownerUserName'});
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
        if (null !== $object->getErrorDetails()) {
            $data->{'errorDetails'} = $this->serializer->serialize($object->getErrorDetails(), 'raw', $context);
        }
        if (null !== $object->getFilter()) {
            $data->{'filter'} = $this->serializer->serialize($object->getFilter(), 'raw', $context);
        }
        if (null !== $object->getFolderId()) {
            $data->{'folderId'} = $object->getFolderId();
        }
        if (null !== $object->getFolders()) {
            $values = [];
            foreach ($object->getFolders() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'folders'} = $values;
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getOwnerEmail()) {
            $data->{'ownerEmail'} = $object->getOwnerEmail();
        }
        if (null !== $object->getOwnerUserId()) {
            $data->{'ownerUserId'} = $object->getOwnerUserId();
        }
        if (null !== $object->getOwnerUserName()) {
            $data->{'ownerUserName'} = $object->getOwnerUserName();
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
