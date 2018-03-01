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

class AccountSignatureProviderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\AccountSignatureProvider' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\AccountSignatureProvider;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\AccountSignatureProvider();
        if (property_exists($data, 'isRequired')) {
            $object->setIsRequired($data->{'isRequired'});
        }
        if (property_exists($data, 'priority')) {
            $object->setPriority($data->{'priority'});
        }
        if (property_exists($data, 'signatureProviderDisplayName')) {
            $object->setSignatureProviderDisplayName($data->{'signatureProviderDisplayName'});
        }
        if (property_exists($data, 'signatureProviderId')) {
            $object->setSignatureProviderId($data->{'signatureProviderId'});
        }
        if (property_exists($data, 'signatureProviderName')) {
            $object->setSignatureProviderName($data->{'signatureProviderName'});
        }
        if (property_exists($data, 'signatureProviderOptionsMetadata')) {
            $values = [];
            foreach ($data->{'signatureProviderOptionsMetadata'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Generated\\Model\\AccountSignatureProviderOption', 'json', $context);
            }
            $object->setSignatureProviderOptionsMetadata($values);
        }
        if (property_exists($data, 'signatureProviderRequiredOptions')) {
            $values_1 = [];
            foreach ($data->{'signatureProviderRequiredOptions'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Surex\\DocuSign\\Generated\\Model\\SignatureProviderRequiredOption', 'json', $context);
            }
            $object->setSignatureProviderRequiredOptions($values_1);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getIsRequired()) {
            $data->{'isRequired'} = $object->getIsRequired();
        }
        if (null !== $object->getPriority()) {
            $data->{'priority'} = $object->getPriority();
        }
        if (null !== $object->getSignatureProviderDisplayName()) {
            $data->{'signatureProviderDisplayName'} = $object->getSignatureProviderDisplayName();
        }
        if (null !== $object->getSignatureProviderId()) {
            $data->{'signatureProviderId'} = $object->getSignatureProviderId();
        }
        if (null !== $object->getSignatureProviderName()) {
            $data->{'signatureProviderName'} = $object->getSignatureProviderName();
        }
        if (null !== $object->getSignatureProviderOptionsMetadata()) {
            $values = [];
            foreach ($object->getSignatureProviderOptionsMetadata() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'signatureProviderOptionsMetadata'} = $values;
        }
        if (null !== $object->getSignatureProviderRequiredOptions()) {
            $values_1 = [];
            foreach ($object->getSignatureProviderRequiredOptions() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'signatureProviderRequiredOptions'} = $values_1;
        }

        return $data;
    }
}
