<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class RecipientsUpdateSummaryNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\RecipientsUpdateSummary' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\RecipientsUpdateSummary) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\RecipientsUpdateSummary();
        if (property_exists($data, 'recipientUpdateResults')) {
            $values = [];
            foreach ($data->{'recipientUpdateResults'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Surex\\DocuSign\\Model\\RecipientUpdateResponse', 'raw', $context);
            }
            $object->setRecipientUpdateResults($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getRecipientUpdateResults()) {
            $values = [];
            foreach ($object->getRecipientUpdateResults() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'recipientUpdateResults'} = $values;
        }

        return $data;
    }
}
