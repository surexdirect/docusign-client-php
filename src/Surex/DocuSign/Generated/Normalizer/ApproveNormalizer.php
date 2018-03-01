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

class ApproveNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Generated\\Model\\Approve' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Generated\Model\Approve;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Generated\Model\Approve();
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
        if (property_exists($data, 'bold')) {
            $object->setBold($data->{'bold'});
        }
        if (property_exists($data, 'buttonText')) {
            $object->setButtonText($data->{'buttonText'});
        }
        if (property_exists($data, 'conditionalParentLabel')) {
            $object->setConditionalParentLabel($data->{'conditionalParentLabel'});
        }
        if (property_exists($data, 'conditionalParentValue')) {
            $object->setConditionalParentValue($data->{'conditionalParentValue'});
        }
        if (property_exists($data, 'customTabId')) {
            $object->setCustomTabId($data->{'customTabId'});
        }
        if (property_exists($data, 'documentId')) {
            $object->setDocumentId($data->{'documentId'});
        }
        if (property_exists($data, 'errorDetails')) {
            $object->setErrorDetails($this->denormalizer->denormalize($data->{'errorDetails'}, 'Surex\\DocuSign\\Generated\\Model\\ErrorDetails', 'json', $context));
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
        if (property_exists($data, 'italic')) {
            $object->setItalic($data->{'italic'});
        }
        if (property_exists($data, 'mergeField')) {
            $object->setMergeField($this->denormalizer->denormalize($data->{'mergeField'}, 'Surex\\DocuSign\\Generated\\Model\\MergeField', 'json', $context));
        }
        if (property_exists($data, 'pageNumber')) {
            $object->setPageNumber($data->{'pageNumber'});
        }
        if (property_exists($data, 'recipientId')) {
            $object->setRecipientId($data->{'recipientId'});
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'tabId')) {
            $object->setTabId($data->{'tabId'});
        }
        if (property_exists($data, 'tabLabel')) {
            $object->setTabLabel($data->{'tabLabel'});
        }
        if (property_exists($data, 'tabOrder')) {
            $object->setTabOrder($data->{'tabOrder'});
        }
        if (property_exists($data, 'templateLocked')) {
            $object->setTemplateLocked($data->{'templateLocked'});
        }
        if (property_exists($data, 'templateRequired')) {
            $object->setTemplateRequired($data->{'templateRequired'});
        }
        if (property_exists($data, 'underline')) {
            $object->setUnderline($data->{'underline'});
        }
        if (property_exists($data, 'width')) {
            $object->setWidth($data->{'width'});
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
        if (null !== $object->getBold()) {
            $data->{'bold'} = $object->getBold();
        }
        if (null !== $object->getButtonText()) {
            $data->{'buttonText'} = $object->getButtonText();
        }
        if (null !== $object->getConditionalParentLabel()) {
            $data->{'conditionalParentLabel'} = $object->getConditionalParentLabel();
        }
        if (null !== $object->getConditionalParentValue()) {
            $data->{'conditionalParentValue'} = $object->getConditionalParentValue();
        }
        if (null !== $object->getCustomTabId()) {
            $data->{'customTabId'} = $object->getCustomTabId();
        }
        if (null !== $object->getDocumentId()) {
            $data->{'documentId'} = $object->getDocumentId();
        }
        if (null !== $object->getErrorDetails()) {
            $data->{'errorDetails'} = $this->normalizer->normalize($object->getErrorDetails(), 'json', $context);
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
        if (null !== $object->getItalic()) {
            $data->{'italic'} = $object->getItalic();
        }
        if (null !== $object->getMergeField()) {
            $data->{'mergeField'} = $this->normalizer->normalize($object->getMergeField(), 'json', $context);
        }
        if (null !== $object->getPageNumber()) {
            $data->{'pageNumber'} = $object->getPageNumber();
        }
        if (null !== $object->getRecipientId()) {
            $data->{'recipientId'} = $object->getRecipientId();
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getTabId()) {
            $data->{'tabId'} = $object->getTabId();
        }
        if (null !== $object->getTabLabel()) {
            $data->{'tabLabel'} = $object->getTabLabel();
        }
        if (null !== $object->getTabOrder()) {
            $data->{'tabOrder'} = $object->getTabOrder();
        }
        if (null !== $object->getTemplateLocked()) {
            $data->{'templateLocked'} = $object->getTemplateLocked();
        }
        if (null !== $object->getTemplateRequired()) {
            $data->{'templateRequired'} = $object->getTemplateRequired();
        }
        if (null !== $object->getUnderline()) {
            $data->{'underline'} = $object->getUnderline();
        }
        if (null !== $object->getWidth()) {
            $data->{'width'} = $object->getWidth();
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
