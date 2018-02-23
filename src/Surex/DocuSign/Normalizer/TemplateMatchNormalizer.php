<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TemplateMatchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\TemplateMatch' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\TemplateMatch;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
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
