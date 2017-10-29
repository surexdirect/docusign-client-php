<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class WorkspacesNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\Workspaces' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\Workspaces) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\Workspaces();
        if (property_exists($data, 'billableAccountId')) {
            $object->setBillableAccountId($data->{'billableAccountId'});
        }
        if (property_exists($data, 'created')) {
            $object->setCreated($data->{'created'});
        }
        if (property_exists($data, 'createdByInformation')) {
            $object->setCreatedByInformation($this->serializer->deserialize($data->{'createdByInformation'}, 'Surex\\DocuSign\\Model\\WorkspaceUser', 'raw', $context));
        }
        if (property_exists($data, 'lastModified')) {
            $object->setLastModified($data->{'lastModified'});
        }
        if (property_exists($data, 'lastModifiedByInformation')) {
            $object->setLastModifiedByInformation($this->serializer->deserialize($data->{'lastModifiedByInformation'}, 'Surex\\DocuSign\\Model\\WorkspaceUser', 'raw', $context));
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'workspaceBaseUrl')) {
            $object->setWorkspaceBaseUrl($data->{'workspaceBaseUrl'});
        }
        if (property_exists($data, 'workspaceDescription')) {
            $object->setWorkspaceDescription($data->{'workspaceDescription'});
        }
        if (property_exists($data, 'workspaceId')) {
            $object->setWorkspaceId($data->{'workspaceId'});
        }
        if (property_exists($data, 'workspaceName')) {
            $object->setWorkspaceName($data->{'workspaceName'});
        }
        if (property_exists($data, 'workspaceUri')) {
            $object->setWorkspaceUri($data->{'workspaceUri'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBillableAccountId()) {
            $data->{'billableAccountId'} = $object->getBillableAccountId();
        }
        if (null !== $object->getCreated()) {
            $data->{'created'} = $object->getCreated();
        }
        if (null !== $object->getCreatedByInformation()) {
            $data->{'createdByInformation'} = $this->serializer->serialize($object->getCreatedByInformation(), 'raw', $context);
        }
        if (null !== $object->getLastModified()) {
            $data->{'lastModified'} = $object->getLastModified();
        }
        if (null !== $object->getLastModifiedByInformation()) {
            $data->{'lastModifiedByInformation'} = $this->serializer->serialize($object->getLastModifiedByInformation(), 'raw', $context);
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getWorkspaceBaseUrl()) {
            $data->{'workspaceBaseUrl'} = $object->getWorkspaceBaseUrl();
        }
        if (null !== $object->getWorkspaceDescription()) {
            $data->{'workspaceDescription'} = $object->getWorkspaceDescription();
        }
        if (null !== $object->getWorkspaceId()) {
            $data->{'workspaceId'} = $object->getWorkspaceId();
        }
        if (null !== $object->getWorkspaceName()) {
            $data->{'workspaceName'} = $object->getWorkspaceName();
        }
        if (null !== $object->getWorkspaceUri()) {
            $data->{'workspaceUri'} = $object->getWorkspaceUri();
        }

        return $data;
    }
}
