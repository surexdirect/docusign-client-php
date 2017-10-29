<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class AccountSignatureProviderNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\AccountSignatureProvider' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\AccountSignatureProvider) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\AccountSignatureProvider();
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
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\AccountSignatureProviderOption', 'raw', $context);
            }
            $object->setSignatureProviderOptionsMetadata($values);
        }
        if (property_exists($data, 'signatureProviderRequiredOptions')) {
            $values_1 = [];
            foreach ($data->{'signatureProviderRequiredOptions'} as $value_1) {
                $values_1[] = $this->serializer->deserialize($value_1, 'Surex\\DocuSign\\Model\\SignatureProviderRequiredOption', 'raw', $context);
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
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'signatureProviderOptionsMetadata'} = $values;
        }
        if (null !== $object->getSignatureProviderRequiredOptions()) {
            $values_1 = [];
            foreach ($object->getSignatureProviderRequiredOptions() as $value_1) {
                $values_1[] = $this->serializer->serialize($value_1, 'raw', $context);
            }
            $data->{'signatureProviderRequiredOptions'} = $values_1;
        }

        return $data;
    }
}
