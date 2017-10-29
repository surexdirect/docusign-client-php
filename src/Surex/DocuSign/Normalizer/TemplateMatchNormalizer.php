<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class TemplateMatchNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\TemplateMatch' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\TemplateMatch) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\TemplateMatch();
        if (property_exists($data, 'documentEndPage')) {
            $object->setDocumentEndPage($data->{'documentEndPage'});
        }
        if (property_exists($data, 'documentStartPage')) {
            $object->setDocumentStartPage($data->{'documentStartPage'});
        }
        if (property_exists($data, 'matchPercentage')) {
            $object->setMatchPercentage($data->{'matchPercentage'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDocumentEndPage()) {
            $data->{'documentEndPage'} = $object->getDocumentEndPage();
        }
        if (null !== $object->getDocumentStartPage()) {
            $data->{'documentStartPage'} = $object->getDocumentStartPage();
        }
        if (null !== $object->getMatchPercentage()) {
            $data->{'matchPercentage'} = $object->getMatchPercentage();
        }

        return $data;
    }
}
