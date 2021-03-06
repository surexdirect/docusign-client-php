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

class RadioNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\Radio' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\Radio;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\Radio();
        if (property_exists($data, 'anchorCaseSensitive')) {
            $object->setAnchorCaseSensitive($data->{'anchorCaseSensitive'});
        }
        if (property_exists($data, 'anchorHorizontalAlignment')) {
            $object->setAnchorHorizontalAlignment($data->{'anchorHorizontalAlignment'});
        }
        if (property_exists($data, 'anchorIgnoreIfNotPresent')) {
            $object->setAnchorIgnoreIfNotPresent($data->{'anchorIgnoreIfNotPresent'});
        }
        if (property_exists($data, 'anchorMatchWholeWord')) {
            $object->setAnchorMatchWholeWord($data->{'anchorMatchWholeWord'});
        }
        if (property_exists($data, 'anchorString')) {
            $object->setAnchorString($data->{'anchorString'});
        }
        if (property_exists($data, 'anchorUnits')) {
            $object->setAnchorUnits($data->{'anchorUnits'});
        }
        if (property_exists($data, 'anchorXOffset')) {
            $object->setAnchorXOffset($data->{'anchorXOffset'});
        }
        if (property_exists($data, 'anchorYOffset')) {
            $object->setAnchorYOffset($data->{'anchorYOffset'});
        }
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->denormalizer->denormalize($data->{'errorDetails'}, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json', $context));
        }
        if (property_exists($data, 'locked')) {
            $object->setLocked($data->{'locked'});
        }
        if (property_exists($data, 'pageNumber')) {
            $object->setPageNumber($data->{'pageNumber'});
        }
        if (property_exists($data, 'required')) {
            $object->setRequired($data->{'required'});
        }
        if (property_exists($data, 'selected')) {
            $object->setSelected($data->{'selected'});
        }
        if (property_exists($data, 'tabId')) {
            $object->setTabId($data->{'tabId'});
        }
        if (property_exists($data, 'tabOrder')) {
            $object->setTabOrder($data->{'tabOrder'});
        }
        if (property_exists($data, 'value')) {
            $object->setValue($data->{'value'});
        }
        if (property_exists($data, 'xPosition')) {
            $object->setXPosition($data->{'xPosition'});
        }
        if (property_exists($data, 'yPosition')) {
            $object->setYPosition($data->{'yPosition'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAnchorCaseSensitive()) {
            $data->{'anchorCaseSensitive'} = $object->getAnchorCaseSensitive();
        }
        if (null !== $object->getAnchorHorizontalAlignment()) {
            $data->{'anchorHorizontalAlignment'} = $object->getAnchorHorizontalAlignment();
        }
        if (null !== $object->getAnchorIgnoreIfNotPresent()) {
            $data->{'anchorIgnoreIfNotPresent'} = $object->getAnchorIgnoreIfNotPresent();
        }
        if (null !== $object->getAnchorMatchWholeWord()) {
            $data->{'anchorMatchWholeWord'} = $object->getAnchorMatchWholeWord();
        }
        if (null !== $object->getAnchorString()) {
            $data->{'anchorString'} = $object->getAnchorString();
        }
        if (null !== $object->getAnchorUnits()) {
            $data->{'anchorUnits'} = $object->getAnchorUnits();
        }
        if (null !== $object->getAnchorXOffset()) {
            $data->{'anchorXOffset'} = $object->getAnchorXOffset();
        }
        if (null !== $object->getAnchorYOffset()) {
            $data->{'anchorYOffset'} = $object->getAnchorYOffset();
        }
        if (null !== $object->getErrorDetails()) {
            $data->{'errorDetails'} = $this->normalizer->normalize($object->getErrorDetails(), 'json', $context);
        }
        if (null !== $object->getLocked()) {
            $data->{'locked'} = $object->getLocked();
        }
        if (null !== $object->getPageNumber()) {
            $data->{'pageNumber'} = $object->getPageNumber();
        }
        if (null !== $object->getRequired()) {
            $data->{'required'} = $object->getRequired();
        }
        if (null !== $object->getSelected()) {
            $data->{'selected'} = $object->getSelected();
        }
        if (null !== $object->getTabId()) {
            $data->{'tabId'} = $object->getTabId();
        }
        if (null !== $object->getTabOrder()) {
            $data->{'tabOrder'} = $object->getTabOrder();
        }
        if (null !== $object->getValue()) {
            $data->{'value'} = $object->getValue();
        }
        if (null !== $object->getXPosition()) {
            $data->{'xPosition'} = $object->getXPosition();
        }
        if (null !== $object->getYPosition()) {
            $data->{'yPosition'} = $object->getYPosition();
        }

        return $data;
    }
}
