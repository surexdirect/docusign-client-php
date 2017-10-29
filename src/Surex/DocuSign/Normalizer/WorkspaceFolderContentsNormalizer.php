<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class WorkspaceFolderContentsNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\WorkspaceFolderContents' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\WorkspaceFolderContents) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\WorkspaceFolderContents();
        if (property_exists($data, 'endPosition')) {
            $object->setEndPosition($data->{'endPosition'});
        }
        if (property_exists($data, 'folder')) {
            $object->setFolder($this->serializer->deserialize($data->{'folder'}, 'Surex\\DocuSign\\Model\\WorkspaceItems', 'raw', $context));
        }
        if (property_exists($data, 'items')) {
            $values = [];
            foreach ($data->{'items'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\WorkspaceItems', 'raw', $context);
            }
            $object->setItems($values);
        }
        if (property_exists($data, 'parentFolders')) {
            $values_1 = [];
            foreach ($data->{'parentFolders'} as $value_1) {
                $values_1[] = $this->serializer->deserialize($value_1, 'Surex\\DocuSign\\Model\\WorkspaceItems', 'raw', $context);
            }
            $object->setParentFolders($values_1);
        }
        if (property_exists($data, 'resultSetSize')) {
            $object->setResultSetSize($data->{'resultSetSize'});
        }
        if (property_exists($data, 'startPosition')) {
            $object->setStartPosition($data->{'startPosition'});
        }
        if (property_exists($data, 'totalSetSize')) {
            $object->setTotalSetSize($data->{'totalSetSize'});
        }
        if (property_exists($data, 'workspaceId')) {
            $object->setWorkspaceId($data->{'workspaceId'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getEndPosition()) {
            $data->{'endPosition'} = $object->getEndPosition();
        }
        if (null !== $object->getFolder()) {
            $data->{'folder'} = $this->serializer->serialize($object->getFolder(), 'raw', $context);
        }
        if (null !== $object->getItems()) {
            $values = [];
            foreach ($object->getItems() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'items'} = $values;
        }
        if (null !== $object->getParentFolders()) {
            $values_1 = [];
            foreach ($object->getParentFolders() as $value_1) {
                $values_1[] = $this->serializer->serialize($value_1, 'raw', $context);
            }
            $data->{'parentFolders'} = $values_1;
        }
        if (null !== $object->getResultSetSize()) {
            $data->{'resultSetSize'} = $object->getResultSetSize();
        }
        if (null !== $object->getStartPosition()) {
            $data->{'startPosition'} = $object->getStartPosition();
        }
        if (null !== $object->getTotalSetSize()) {
            $data->{'totalSetSize'} = $object->getTotalSetSize();
        }
        if (null !== $object->getWorkspaceId()) {
            $data->{'workspaceId'} = $object->getWorkspaceId();
        }

        return $data;
    }
}
