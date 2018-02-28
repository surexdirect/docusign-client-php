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

class WorkspacesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\Workspaces' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\Workspaces;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\Workspaces();
        if (property_exists($data, 'billableAccountId')) {
            $object->setBillableAccountId($data->{'billableAccountId'});
        }
        if (property_exists($data, 'created')) {
            $object->setCreated($data->{'created'});
        }
        if (property_exists($data, 'createdByInformation')) {
            $object->setCreatedByInformation($this->denormalizer->denormalize($data->{'createdByInformation'}, 'Surex\\DocuSign\\Model\\WorkspaceUser', 'json', $context));
        }
        if (property_exists($data, 'lastModified')) {
            $object->setLastModified($data->{'lastModified'});
        }
        if (property_exists($data, 'lastModifiedByInformation')) {
            $object->setLastModifiedByInformation($this->denormalizer->denormalize($data->{'lastModifiedByInformation'}, 'Surex\\DocuSign\\Model\\WorkspaceUser', 'json', $context));
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
            $data->{'createdByInformation'} = $this->normalizer->normalize($object->getCreatedByInformation(), 'json', $context);
        }
        if (null !== $object->getLastModified()) {
            $data->{'lastModified'} = $object->getLastModified();
        }
        if (null !== $object->getLastModifiedByInformation()) {
            $data->{'lastModifiedByInformation'} = $this->normalizer->normalize($object->getLastModifiedByInformation(), 'json', $context);
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
