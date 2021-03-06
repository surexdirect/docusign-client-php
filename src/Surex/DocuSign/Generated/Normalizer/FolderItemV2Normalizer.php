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

class FolderItemV2Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\FolderItemV2' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\FolderItemV2;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\FolderItemV2();
        if (property_exists($data, 'completedDateTime')) {
            $object->setCompletedDateTime($data->{'completedDateTime'});
        }
        if (property_exists($data, 'createdDateTime')) {
            $object->setCreatedDateTime($data->{'createdDateTime'});
        }
        if (property_exists($data, 'envelopeId')) {
            $object->setEnvelopeId($data->{'envelopeId'});
        }
        if (property_exists($data, 'envelopeUri')) {
            $object->setEnvelopeUri($data->{'envelopeUri'});
        }
        if (property_exists($data, 'expireDateTime')) {
            $object->setExpireDateTime($data->{'expireDateTime'});
        }
        if (property_exists($data, 'folderId')) {
            $object->setFolderId($data->{'folderId'});
        }
        if (property_exists($data, 'folderUri')) {
            $object->setFolderUri($data->{'folderUri'});
        }
        if (property_exists($data, 'is21CFRPart11')) {
            $object->setIs21CFRPart11($data->{'is21CFRPart11'});
        }
        if (property_exists($data, 'isSignatureProviderEnvelope')) {
            $object->setIsSignatureProviderEnvelope($data->{'isSignatureProviderEnvelope'});
        }
        if (property_exists($data, 'lastModifiedDateTime')) {
            $object->setLastModifiedDateTime($data->{'lastModifiedDateTime'});
        }
        if (property_exists($data, 'ownerName')) {
            $object->setOwnerName($data->{'ownerName'});
        }
        if (property_exists($data, 'recipients')) {
            $object->setRecipients($this->denormalizer->denormalize($data->{'recipients'}, 'Surex\\DocuSign\\Generated\\Model\\EnvelopeRecipients', 'json', $context));
        }
        if (property_exists($data, 'recipientsUri')) {
            $object->setRecipientsUri($data->{'recipientsUri'});
        }
        if (property_exists($data, 'senderCompany')) {
            $object->setSenderCompany($data->{'senderCompany'});
        }
        if (property_exists($data, 'senderEmail')) {
            $object->setSenderEmail($data->{'senderEmail'});
        }
        if (property_exists($data, 'senderName')) {
            $object->setSenderName($data->{'senderName'});
        }
        if (property_exists($data, 'senderUserId')) {
            $object->setSenderUserId($data->{'senderUserId'});
        }
        if (property_exists($data, 'sentDateTime')) {
            $object->setSentDateTime($data->{'sentDateTime'});
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'subject')) {
            $object->setSubject($data->{'subject'});
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
        if (null !== $object->getEnvelopeId()) {
            $data->{'envelopeId'} = $object->getEnvelopeId();
        }
        if (null !== $object->getEnvelopeUri()) {
            $data->{'envelopeUri'} = $object->getEnvelopeUri();
        }
        if (null !== $object->getExpireDateTime()) {
            $data->{'expireDateTime'} = $object->getExpireDateTime();
        }
        if (null !== $object->getFolderId()) {
            $data->{'folderId'} = $object->getFolderId();
        }
        if (null !== $object->getFolderUri()) {
            $data->{'folderUri'} = $object->getFolderUri();
        }
        if (null !== $object->getIs21CFRPart11()) {
            $data->{'is21CFRPart11'} = $object->getIs21CFRPart11();
        }
        if (null !== $object->getIsSignatureProviderEnvelope()) {
            $data->{'isSignatureProviderEnvelope'} = $object->getIsSignatureProviderEnvelope();
        }
        if (null !== $object->getLastModifiedDateTime()) {
            $data->{'lastModifiedDateTime'} = $object->getLastModifiedDateTime();
        }
        if (null !== $object->getOwnerName()) {
            $data->{'ownerName'} = $object->getOwnerName();
        }
        if (null !== $object->getRecipients()) {
            $data->{'recipients'} = $this->normalizer->normalize($object->getRecipients(), 'json', $context);
        }
        if (null !== $object->getRecipientsUri()) {
            $data->{'recipientsUri'} = $object->getRecipientsUri();
        }
        if (null !== $object->getSenderCompany()) {
            $data->{'senderCompany'} = $object->getSenderCompany();
        }
        if (null !== $object->getSenderEmail()) {
            $data->{'senderEmail'} = $object->getSenderEmail();
        }
        if (null !== $object->getSenderName()) {
            $data->{'senderName'} = $object->getSenderName();
        }
        if (null !== $object->getSenderUserId()) {
            $data->{'senderUserId'} = $object->getSenderUserId();
        }
        if (null !== $object->getSentDateTime()) {
            $data->{'sentDateTime'} = $object->getSentDateTime();
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getSubject()) {
            $data->{'subject'} = $object->getSubject();
        }

        return $data;
    }
}
