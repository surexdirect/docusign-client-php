<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class CompositeTemplateNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\CompositeTemplate' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\CompositeTemplate) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\CompositeTemplate();
        if (property_exists($data, 'compositeTemplateId')) {
            $object->setCompositeTemplateId($data->{'compositeTemplateId'});
        }
        if (property_exists($data, 'document')) {
            $object->setDocument($this->serializer->deserialize($data->{'document'}, 'Surex\\DocuSign\\Model\\Document', 'raw', $context));
        }
        if (property_exists($data, 'inlineTemplates')) {
            $values = [];
            foreach ($data->{'inlineTemplates'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\InlineTemplate', 'raw', $context);
            }
            $object->setInlineTemplates($values);
        }
        if (property_exists($data, 'pdfMetaDataTemplateSequence')) {
            $object->setPdfMetaDataTemplateSequence($data->{'pdfMetaDataTemplateSequence'});
        }
        if (property_exists($data, 'serverTemplates')) {
            $values_1 = [];
            foreach ($data->{'serverTemplates'} as $value_1) {
                $values_1[] = $this->serializer->deserialize($value_1, 'Surex\\DocuSign\\Model\\ServerTemplate', 'raw', $context);
            }
            $object->setServerTemplates($values_1);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCompositeTemplateId()) {
            $data->{'compositeTemplateId'} = $object->getCompositeTemplateId();
        }
        if (null !== $object->getDocument()) {
            $data->{'document'} = $this->serializer->serialize($object->getDocument(), 'raw', $context);
        }
        if (null !== $object->getInlineTemplates()) {
            $values = [];
            foreach ($object->getInlineTemplates() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'inlineTemplates'} = $values;
        }
        if (null !== $object->getPdfMetaDataTemplateSequence()) {
            $data->{'pdfMetaDataTemplateSequence'} = $object->getPdfMetaDataTemplateSequence();
        }
        if (null !== $object->getServerTemplates()) {
            $values_1 = [];
            foreach ($object->getServerTemplates() as $value_1) {
                $values_1[] = $this->serializer->serialize($value_1, 'raw', $context);
            }
            $data->{'serverTemplates'} = $values_1;
        }

        return $data;
    }
}
