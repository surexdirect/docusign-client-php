<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class WorkspaceUserAuthorizationNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\WorkspaceUserAuthorization' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\WorkspaceUserAuthorization) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\WorkspaceUserAuthorization();
        if (property_exists($data, 'canDelete')) {
            $object->setCanDelete($data->{'canDelete'});
        }
        if (property_exists($data, 'canMove')) {
            $object->setCanMove($data->{'canMove'});
        }
        if (property_exists($data, 'canTransact')) {
            $object->setCanTransact($data->{'canTransact'});
        }
        if (property_exists($data, 'canView')) {
            $object->setCanView($data->{'canView'});
        }
        if (property_exists($data, 'created')) {
            $object->setCreated($data->{'created'});
        }
        if (property_exists($data, 'createdById')) {
            $object->setCreatedById($data->{'createdById'});
        }
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->serializer->deserialize($data->{'errorDetails'}, 'Surex\\DocuSign\\Model\\ErrorDetails', 'raw', $context));
        }
        if (property_exists($data, 'modified')) {
            $object->setModified($data->{'modified'});
        }
        if (property_exists($data, 'modifiedById')) {
            $object->setModifiedById($data->{'modifiedById'});
        }
        if (property_exists($data, 'workspaceUserId')) {
            $object->setWorkspaceUserId($data->{'workspaceUserId'});
        }
        if (property_exists($data, 'workspaceUserInformation')) {
            $object->setWorkspaceUserInformation($this->serializer->deserialize($data->{'workspaceUserInformation'}, 'Surex\\DocuSign\\Model\\WorkspaceUser', 'raw', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCanDelete()) {
            $data->{'canDelete'} = $object->getCanDelete();
        }
        if (null !== $object->getCanMove()) {
            $data->{'canMove'} = $object->getCanMove();
        }
        if (null !== $object->getCanTransact()) {
            $data->{'canTransact'} = $object->getCanTransact();
        }
        if (null !== $object->getCanView()) {
            $data->{'canView'} = $object->getCanView();
        }
        if (null !== $object->getCreated()) {
            $data->{'created'} = $object->getCreated();
        }
        if (null !== $object->getCreatedById()) {
            $data->{'createdById'} = $object->getCreatedById();
        }
        if (null !== $object->getErrorDetails()) {
            $data->{'errorDetails'} = $this->serializer->serialize($object->getErrorDetails(), 'raw', $context);
        }
        if (null !== $object->getModified()) {
            $data->{'modified'} = $object->getModified();
        }
        if (null !== $object->getModifiedById()) {
            $data->{'modifiedById'} = $object->getModifiedById();
        }
        if (null !== $object->getWorkspaceUserId()) {
            $data->{'workspaceUserId'} = $object->getWorkspaceUserId();
        }
        if (null !== $object->getWorkspaceUserInformation()) {
            $data->{'workspaceUserInformation'} = $this->serializer->serialize($object->getWorkspaceUserInformation(), 'raw', $context);
        }

        return $data;
    }
}
