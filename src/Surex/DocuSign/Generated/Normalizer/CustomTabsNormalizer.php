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

class CustomTabsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\CustomTabs' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\CustomTabs;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\CustomTabs();
        if (property_exists($data, 'anchor')) {
            $object->setAnchor($data->{'anchor'});
        }
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
        if (property_exists($data, 'anchorUnits')) {
            $object->setAnchorUnits($data->{'anchorUnits'});
        }
        if (property_exists($data, 'anchorXOffset')) {
            $object->setAnchorXOffset($data->{'anchorXOffset'});
        }
        if (property_exists($data, 'anchorYOffset')) {
            $object->setAnchorYOffset($data->{'anchorYOffset'});
        }
        if (property_exists($data, 'bold')) {
            $object->setBold($data->{'bold'});
        }
        if (property_exists($data, 'concealValueOnDocument')) {
            $object->setConcealValueOnDocument($data->{'concealValueOnDocument'});
        }
        if (property_exists($data, 'createdByDisplayName')) {
            $object->setCreatedByDisplayName($data->{'createdByDisplayName'});
        }
        if (property_exists($data, 'createdByUserId')) {
            $object->setCreatedByUserId($data->{'createdByUserId'});
        }
        if (property_exists($data, 'customTabId')) {
            $object->setCustomTabId($data->{'customTabId'});
        }
        if (property_exists($data, 'disableAutoSize')) {
            $object->setDisableAutoSize($data->{'disableAutoSize'});
        }
        if (property_exists($data, 'editable')) {
            $object->setEditable($data->{'editable'});
        }
        if (property_exists($data, 'font')) {
            $object->setFont($data->{'font'});
        }
        if (property_exists($data, 'fontColor')) {
            $object->setFontColor($data->{'fontColor'});
        }
        if (property_exists($data, 'fontSize')) {
            $object->setFontSize($data->{'fontSize'});
        }
        if (property_exists($data, 'height')) {
            $object->setHeight($data->{'height'});
        }
        if (property_exists($data, 'includedInEmail')) {
            $object->setIncludedInEmail($data->{'includedInEmail'});
        }
        if (property_exists($data, 'initialValue')) {
            $object->setInitialValue($data->{'initialValue'});
        }
        if (property_exists($data, 'italic')) {
            $object->setItalic($data->{'italic'});
        }
        if (property_exists($data, 'items')) {
            $values = [];
            foreach ($data->{'items'} as $value) {
                $values[] = $value;
            }
            $object->setItems($values);
        }
        if (property_exists($data, 'lastModified')) {
            $object->setLastModified($data->{'lastModified'});
        }
        if (property_exists($data, 'lastModifiedByDisplayName')) {
            $object->setLastModifiedByDisplayName($data->{'lastModifiedByDisplayName'});
        }
        if (property_exists($data, 'lastModifiedByUserId')) {
            $object->setLastModifiedByUserId($data->{'lastModifiedByUserId'});
        }
        if (property_exists($data, 'locked')) {
            $object->setLocked($data->{'locked'});
        }
        if (property_exists($data, 'maximumLength')) {
            $object->setMaximumLength($data->{'maximumLength'});
        }
        if (property_exists($data, 'mergeField')) {
            $object->setMergeField($this->denormalizer->denormalize($data->{'mergeField'}, 'Surex\\DocuSign\\Generated\\Model\\MergeField', 'json', $context));
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'required')) {
            $object->setRequired($data->{'required'});
        }
        if (property_exists($data, 'scaleValue')) {
            $object->setScaleValue($data->{'scaleValue'});
        }
        if (property_exists($data, 'shared')) {
            $object->setShared($data->{'shared'});
        }
        if (property_exists($data, 'stampType')) {
            $object->setStampType($data->{'stampType'});
        }
        if (property_exists($data, 'stampTypeMetadata')) {
            $object->setStampTypeMetadata($this->denormalizer->denormalize($data->{'stampTypeMetadata'}, 'Surex\\DocuSign\\Generated\\Model\\PropertyMetadata', 'json', $context));
        }
        if (property_exists($data, 'tabLabel')) {
            $object->setTabLabel($data->{'tabLabel'});
        }
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'underline')) {
            $object->setUnderline($data->{'underline'});
        }
        if (property_exists($data, 'validationMessage')) {
            $object->setValidationMessage($data->{'validationMessage'});
        }
        if (property_exists($data, 'validationPattern')) {
            $object->setValidationPattern($data->{'validationPattern'});
        }
        if (property_exists($data, 'width')) {
            $object->setWidth($data->{'width'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAnchor()) {
            $data->{'anchor'} = $object->getAnchor();
        }
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
        if (null !== $object->getAnchorUnits()) {
            $data->{'anchorUnits'} = $object->getAnchorUnits();
        }
        if (null !== $object->getAnchorXOffset()) {
            $data->{'anchorXOffset'} = $object->getAnchorXOffset();
        }
        if (null !== $object->getAnchorYOffset()) {
            $data->{'anchorYOffset'} = $object->getAnchorYOffset();
        }
        if (null !== $object->getBold()) {
            $data->{'bold'} = $object->getBold();
        }
        if (null !== $object->getConcealValueOnDocument()) {
            $data->{'concealValueOnDocument'} = $object->getConcealValueOnDocument();
        }
        if (null !== $object->getCreatedByDisplayName()) {
            $data->{'createdByDisplayName'} = $object->getCreatedByDisplayName();
        }
        if (null !== $object->getCreatedByUserId()) {
            $data->{'createdByUserId'} = $object->getCreatedByUserId();
        }
        if (null !== $object->getCustomTabId()) {
            $data->{'customTabId'} = $object->getCustomTabId();
        }
        if (null !== $object->getDisableAutoSize()) {
            $data->{'disableAutoSize'} = $object->getDisableAutoSize();
        }
        if (null !== $object->getEditable()) {
            $data->{'editable'} = $object->getEditable();
        }
        if (null !== $object->getFont()) {
            $data->{'font'} = $object->getFont();
        }
        if (null !== $object->getFontColor()) {
            $data->{'fontColor'} = $object->getFontColor();
        }
        if (null !== $object->getFontSize()) {
            $data->{'fontSize'} = $object->getFontSize();
        }
        if (null !== $object->getHeight()) {
            $data->{'height'} = $object->getHeight();
        }
        if (null !== $object->getIncludedInEmail()) {
            $data->{'includedInEmail'} = $object->getIncludedInEmail();
        }
        if (null !== $object->getInitialValue()) {
            $data->{'initialValue'} = $object->getInitialValue();
        }
        if (null !== $object->getItalic()) {
            $data->{'italic'} = $object->getItalic();
        }
        if (null !== $object->getItems()) {
            $values = [];
            foreach ($object->getItems() as $value) {
                $values[] = $value;
            }
            $data->{'items'} = $values;
        }
        if (null !== $object->getLastModified()) {
            $data->{'lastModified'} = $object->getLastModified();
        }
        if (null !== $object->getLastModifiedByDisplayName()) {
            $data->{'lastModifiedByDisplayName'} = $object->getLastModifiedByDisplayName();
        }
        if (null !== $object->getLastModifiedByUserId()) {
            $data->{'lastModifiedByUserId'} = $object->getLastModifiedByUserId();
        }
        if (null !== $object->getLocked()) {
            $data->{'locked'} = $object->getLocked();
        }
        if (null !== $object->getMaximumLength()) {
            $data->{'maximumLength'} = $object->getMaximumLength();
        }
        if (null !== $object->getMergeField()) {
            $data->{'mergeField'} = $this->normalizer->normalize($object->getMergeField(), 'json', $context);
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getRequired()) {
            $data->{'required'} = $object->getRequired();
        }
        if (null !== $object->getScaleValue()) {
            $data->{'scaleValue'} = $object->getScaleValue();
        }
        if (null !== $object->getShared()) {
            $data->{'shared'} = $object->getShared();
        }
        if (null !== $object->getStampType()) {
            $data->{'stampType'} = $object->getStampType();
        }
        if (null !== $object->getStampTypeMetadata()) {
            $data->{'stampTypeMetadata'} = $this->normalizer->normalize($object->getStampTypeMetadata(), 'json', $context);
        }
        if (null !== $object->getTabLabel()) {
            $data->{'tabLabel'} = $object->getTabLabel();
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getUnderline()) {
            $data->{'underline'} = $object->getUnderline();
        }
        if (null !== $object->getValidationMessage()) {
            $data->{'validationMessage'} = $object->getValidationMessage();
        }
        if (null !== $object->getValidationPattern()) {
            $data->{'validationPattern'} = $object->getValidationPattern();
        }
        if (null !== $object->getWidth()) {
            $data->{'width'} = $object->getWidth();
        }

        return $data;
    }
}
