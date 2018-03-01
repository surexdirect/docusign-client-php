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

class UserSignaturesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\UserSignatures' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\UserSignatures;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\UserSignatures();
        if (property_exists($data, 'adoptedDateTime')) {
            $object->setAdoptedDateTime($data->{'adoptedDateTime'});
        }
        if (property_exists($data, 'createdDateTime')) {
            $object->setCreatedDateTime($data->{'createdDateTime'});
        }
        if (property_exists($data, 'dateStampProperties')) {
            $object->setDateStampProperties($this->denormalizer->denormalize($data->{'dateStampProperties'}, 'Surex\\DocuSign\\Generated\\Model\\DateStampProperties', 'json', $context));
        }
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->denormalizer->denormalize($data->{'errorDetails'}, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json', $context));
        }
        if (property_exists($data, 'externalID')) {
            $object->setExternalID($data->{'externalID'});
        }
        if (property_exists($data, 'imageType')) {
            $object->setImageType($data->{'imageType'});
        }
        if (property_exists($data, 'initials150ImageId')) {
            $object->setInitials150ImageId($data->{'initials150ImageId'});
        }
        if (property_exists($data, 'initialsImageUri')) {
            $object->setInitialsImageUri($data->{'initialsImageUri'});
        }
        if (property_exists($data, 'isDefault')) {
            $object->setIsDefault($data->{'isDefault'});
        }
        if (property_exists($data, 'phoneticName')) {
            $object->setPhoneticName($data->{'phoneticName'});
        }
        if (property_exists($data, 'signature150ImageId')) {
            $object->setSignature150ImageId($data->{'signature150ImageId'});
        }
        if (property_exists($data, 'signatureFont')) {
            $object->setSignatureFont($data->{'signatureFont'});
        }
        if (property_exists($data, 'signatureId')) {
            $object->setSignatureId($data->{'signatureId'});
        }
        if (property_exists($data, 'signatureImageUri')) {
            $object->setSignatureImageUri($data->{'signatureImageUri'});
        }
        if (property_exists($data, 'signatureInitials')) {
            $object->setSignatureInitials($data->{'signatureInitials'});
        }
        if (property_exists($data, 'signatureName')) {
            $object->setSignatureName($data->{'signatureName'});
        }
        if (property_exists($data, 'signatureType')) {
            $object->setSignatureType($data->{'signatureType'});
        }
        if (property_exists($data, 'stampFormat')) {
            $object->setStampFormat($data->{'stampFormat'});
        }
        if (property_exists($data, 'stampImageUri')) {
            $object->setStampImageUri($data->{'stampImageUri'});
        }
        if (property_exists($data, 'stampSizeMM')) {
            $object->setStampSizeMM($data->{'stampSizeMM'});
        }
        if (property_exists($data, 'stampType')) {
            $object->setStampType($data->{'stampType'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAdoptedDateTime()) {
            $data->{'adoptedDateTime'} = $object->getAdoptedDateTime();
        }
        if (null !== $object->getCreatedDateTime()) {
            $data->{'createdDateTime'} = $object->getCreatedDateTime();
        }
        if (null !== $object->getDateStampProperties()) {
            $data->{'dateStampProperties'} = $this->normalizer->normalize($object->getDateStampProperties(), 'json', $context);
        }
        if (null !== $object->getErrorDetails()) {
            $data->{'errorDetails'} = $this->normalizer->normalize($object->getErrorDetails(), 'json', $context);
        }
        if (null !== $object->getExternalID()) {
            $data->{'externalID'} = $object->getExternalID();
        }
        if (null !== $object->getImageType()) {
            $data->{'imageType'} = $object->getImageType();
        }
        if (null !== $object->getInitials150ImageId()) {
            $data->{'initials150ImageId'} = $object->getInitials150ImageId();
        }
        if (null !== $object->getInitialsImageUri()) {
            $data->{'initialsImageUri'} = $object->getInitialsImageUri();
        }
        if (null !== $object->getIsDefault()) {
            $data->{'isDefault'} = $object->getIsDefault();
        }
        if (null !== $object->getPhoneticName()) {
            $data->{'phoneticName'} = $object->getPhoneticName();
        }
        if (null !== $object->getSignature150ImageId()) {
            $data->{'signature150ImageId'} = $object->getSignature150ImageId();
        }
        if (null !== $object->getSignatureFont()) {
            $data->{'signatureFont'} = $object->getSignatureFont();
        }
        if (null !== $object->getSignatureId()) {
            $data->{'signatureId'} = $object->getSignatureId();
        }
        if (null !== $object->getSignatureImageUri()) {
            $data->{'signatureImageUri'} = $object->getSignatureImageUri();
        }
        if (null !== $object->getSignatureInitials()) {
            $data->{'signatureInitials'} = $object->getSignatureInitials();
        }
        if (null !== $object->getSignatureName()) {
            $data->{'signatureName'} = $object->getSignatureName();
        }
        if (null !== $object->getSignatureType()) {
            $data->{'signatureType'} = $object->getSignatureType();
        }
        if (null !== $object->getStampFormat()) {
            $data->{'stampFormat'} = $object->getStampFormat();
        }
        if (null !== $object->getStampImageUri()) {
            $data->{'stampImageUri'} = $object->getStampImageUri();
        }
        if (null !== $object->getStampSizeMM()) {
            $data->{'stampSizeMM'} = $object->getStampSizeMM();
        }
        if (null !== $object->getStampType()) {
            $data->{'stampType'} = $object->getStampType();
        }

        return $data;
    }
}
