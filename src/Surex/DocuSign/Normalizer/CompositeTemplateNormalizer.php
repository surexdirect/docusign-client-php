<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CompositeTemplateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\CompositeTemplate' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\CompositeTemplate;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\CompositeTemplate();
        if (property_exists($data, 'compositeTemplateId')) {
            $object->setCompositeTemplateId($data->{'compositeTemplateId'});
        }
        if (property_exists($data, 'document')) {
            $object->setDocument($this->denormalizer->denormalize($data->{'document'}, 'Surex\\DocuSign\\Model\\Document', 'json', $context));
        }
        if (property_exists($data, 'inlineTemplates')) {
            $values = [];
            foreach ($data->{'inlineTemplates'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Model\\InlineTemplate', 'json', $context);
            }
            $object->setInlineTemplates($values);
        }
        if (property_exists($data, 'pdfMetaDataTemplateSequence')) {
            $object->setPdfMetaDataTemplateSequence($data->{'pdfMetaDataTemplateSequence'});
        }
        if (property_exists($data, 'serverTemplates')) {
            $values_1 = [];
            foreach ($data->{'serverTemplates'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Surex\\DocuSign\\Model\\ServerTemplate', 'json', $context);
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
            $data->{'document'} = $this->normalizer->normalize($object->getDocument(), 'json', $context);
        }
        if (null !== $object->getInlineTemplates()) {
            $values = [];
            foreach ($object->getInlineTemplates() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'inlineTemplates'} = $values;
        }
        if (null !== $object->getPdfMetaDataTemplateSequence()) {
            $data->{'pdfMetaDataTemplateSequence'} = $object->getPdfMetaDataTemplateSequence();
        }
        if (null !== $object->getServerTemplates()) {
            $values_1 = [];
            foreach ($object->getServerTemplates() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'serverTemplates'} = $values_1;
        }

        return $data;
    }
}
