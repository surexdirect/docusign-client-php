<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class DocumentTemplateListNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\DocumentTemplateList' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\DocumentTemplateList) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\DocumentTemplateList();
        if (property_exists($data, 'documentTemplates')) {
            $values = [];
            foreach ($data->{'documentTemplates'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\DocumentTemplate', 'raw', $context);
            }
            $object->setDocumentTemplates($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDocumentTemplates()) {
            $values = [];
            foreach ($object->getDocumentTemplates() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'documentTemplates'} = $values;
        }

        return $data;
    }
}
