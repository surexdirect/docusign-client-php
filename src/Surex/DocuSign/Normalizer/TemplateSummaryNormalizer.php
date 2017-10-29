<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class TemplateSummaryNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\TemplateSummary' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\TemplateSummary) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\TemplateSummary();
        if (property_exists($data, 'applied')) {
            $object->setApplied($data->{'applied'});
        }
        if (property_exists($data, 'documentId')) {
            $object->setDocumentId($data->{'documentId'});
        }
        if (property_exists($data, 'documentName')) {
            $object->setDocumentName($data->{'documentName'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'templateId')) {
            $object->setTemplateId($data->{'templateId'});
        }
        if (property_exists($data, 'templateMatch')) {
            $object->setTemplateMatch($this->serializer->deserialize($data->{'templateMatch'}, 'Surex\\DocuSign\\Model\\TemplateMatch', 'raw', $context));
        }
        if (property_exists($data, 'uri')) {
            $object->setUri($data->{'uri'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getApplied()) {
            $data->{'applied'} = $object->getApplied();
        }
        if (null !== $object->getDocumentId()) {
            $data->{'documentId'} = $object->getDocumentId();
        }
        if (null !== $object->getDocumentName()) {
            $data->{'documentName'} = $object->getDocumentName();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getTemplateId()) {
            $data->{'templateId'} = $object->getTemplateId();
        }
        if (null !== $object->getTemplateMatch()) {
            $data->{'templateMatch'} = $this->serializer->serialize($object->getTemplateMatch(), 'raw', $context);
        }
        if (null !== $object->getUri()) {
            $data->{'uri'} = $object->getUri();
        }

        return $data;
    }
}
