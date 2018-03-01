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

class FolderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\Folder' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\Folder;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\Folder();
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->denormalizer->denormalize($data->{'errorDetails'}, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json', $context));
        }
        if (property_exists($data, 'filter')) {
            $object->setFilter($this->denormalizer->denormalize($data->{'filter'}, 'Surex\\DocuSign\\Generated\\Model\\Filter', 'json', $context));
        }
        if (property_exists($data, 'folderId')) {
            $object->setFolderId($data->{'folderId'});
        }
        if (property_exists($data, 'folders')) {
            $values = [];
            foreach ($data->{'folders'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Generated\\Model\\Folder', 'json', $context);
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
            $data->{'errorDetails'} = $this->normalizer->normalize($object->getErrorDetails(), 'json', $context);
        }
        if (null !== $object->getFilter()) {
            $data->{'filter'} = $this->normalizer->normalize($object->getFilter(), 'json', $context);
        }
        if (null !== $object->getFolderId()) {
            $data->{'folderId'} = $object->getFolderId();
        }
        if (null !== $object->getFolders()) {
            $values = [];
            foreach ($object->getFolders() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
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
