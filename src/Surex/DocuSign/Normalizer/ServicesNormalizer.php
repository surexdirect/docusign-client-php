<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class ServicesNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\Services' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\Services) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\Services();
        if (property_exists($data, 'buildBranch')) {
            $object->setBuildBranch($data->{'buildBranch'});
        }
        if (property_exists($data, 'buildBranchDeployedDateTime')) {
            $object->setBuildBranchDeployedDateTime($data->{'buildBranchDeployedDateTime'});
        }
        if (property_exists($data, 'buildSHA')) {
            $object->setBuildSHA($data->{'buildSHA'});
        }
        if (property_exists($data, 'buildVersion')) {
            $object->setBuildVersion($data->{'buildVersion'});
        }
        if (property_exists($data, 'linkedSites')) {
            $values = [];
            foreach ($data->{'linkedSites'} as $value) {
                $values[] = $value;
            }
            $object->setLinkedSites($values);
        }
        if (property_exists($data, 'serviceVersions')) {
            $values_1 = [];
            foreach ($data->{'serviceVersions'} as $value_1) {
                $values_1[] = $this->serializer->deserialize($value_1, 'Surex\\DocuSign\\Model\\ServiceVersion', 'raw', $context);
            }
            $object->setServiceVersions($values_1);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBuildBranch()) {
            $data->{'buildBranch'} = $object->getBuildBranch();
        }
        if (null !== $object->getBuildBranchDeployedDateTime()) {
            $data->{'buildBranchDeployedDateTime'} = $object->getBuildBranchDeployedDateTime();
        }
        if (null !== $object->getBuildSHA()) {
            $data->{'buildSHA'} = $object->getBuildSHA();
        }
        if (null !== $object->getBuildVersion()) {
            $data->{'buildVersion'} = $object->getBuildVersion();
        }
        if (null !== $object->getLinkedSites()) {
            $values = [];
            foreach ($object->getLinkedSites() as $value) {
                $values[] = $value;
            }
            $data->{'linkedSites'} = $values;
        }
        if (null !== $object->getServiceVersions()) {
            $values_1 = [];
            foreach ($object->getServiceVersions() as $value_1) {
                $values_1[] = $this->serializer->serialize($value_1, 'raw', $context);
            }
            $data->{'serviceVersions'} = $values_1;
        }

        return $data;
    }
}
