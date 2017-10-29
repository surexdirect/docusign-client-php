<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class WorkspaceUserNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\WorkspaceUser' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\WorkspaceUser) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\WorkspaceUser();
        if (property_exists($data, 'accountId')) {
            $object->setAccountId($data->{'accountId'});
        }
        if (property_exists($data, 'accountName')) {
            $object->setAccountName($data->{'accountName'});
        }
        if (property_exists($data, 'activeSince')) {
            $object->setActiveSince($data->{'activeSince'});
        }
        if (property_exists($data, 'created')) {
            $object->setCreated($data->{'created'});
        }
        if (property_exists($data, 'createdById')) {
            $object->setCreatedById($data->{'createdById'});
        }
        if (property_exists($data, 'email')) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->serializer->deserialize($data->{'errorDetails'}, 'Surex\\DocuSign\\Model\\ErrorDetails', 'raw', $context));
        }
        if (property_exists($data, 'lastModified')) {
            $object->setLastModified($data->{'lastModified'});
        }
        if (property_exists($data, 'lastModifiedById')) {
            $object->setLastModifiedById($data->{'lastModifiedById'});
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'userId')) {
            $object->setUserId($data->{'userId'});
        }
        if (property_exists($data, 'userName')) {
            $object->setUserName($data->{'userName'});
        }
        if (property_exists($data, 'workspaceId')) {
            $object->setWorkspaceId($data->{'workspaceId'});
        }
        if (property_exists($data, 'workspaceUserBaseUrl')) {
            $object->setWorkspaceUserBaseUrl($data->{'workspaceUserBaseUrl'});
        }
        if (property_exists($data, 'workspaceUserId')) {
            $object->setWorkspaceUserId($data->{'workspaceUserId'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAccountId()) {
            $data->{'accountId'} = $object->getAccountId();
        }
        if (null !== $object->getAccountName()) {
            $data->{'accountName'} = $object->getAccountName();
        }
        if (null !== $object->getActiveSince()) {
            $data->{'activeSince'} = $object->getActiveSince();
        }
        if (null !== $object->getCreated()) {
            $data->{'created'} = $object->getCreated();
        }
        if (null !== $object->getCreatedById()) {
            $data->{'createdById'} = $object->getCreatedById();
        }
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }
        if (null !== $object->getErrorDetails()) {
            $data->{'errorDetails'} = $this->serializer->serialize($object->getErrorDetails(), 'raw', $context);
        }
        if (null !== $object->getLastModified()) {
            $data->{'lastModified'} = $object->getLastModified();
        }
        if (null !== $object->getLastModifiedById()) {
            $data->{'lastModifiedById'} = $object->getLastModifiedById();
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getUserId()) {
            $data->{'userId'} = $object->getUserId();
        }
        if (null !== $object->getUserName()) {
            $data->{'userName'} = $object->getUserName();
        }
        if (null !== $object->getWorkspaceId()) {
            $data->{'workspaceId'} = $object->getWorkspaceId();
        }
        if (null !== $object->getWorkspaceUserBaseUrl()) {
            $data->{'workspaceUserBaseUrl'} = $object->getWorkspaceUserBaseUrl();
        }
        if (null !== $object->getWorkspaceUserId()) {
            $data->{'workspaceUserId'} = $object->getWorkspaceUserId();
        }

        return $data;
    }
}
