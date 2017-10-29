<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class EnvelopeConsumerDisclosuresNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Surex\\DocuSign\\Model\\EnvelopeConsumerDisclosures' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Surex\DocuSign\Model\EnvelopeConsumerDisclosures) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Surex\DocuSign\Model\EnvelopeConsumerDisclosures();
        if (property_exists($data, 'accountEsignId')) {
            $object->setAccountEsignId($data->{'accountEsignId'});
        }
        if (property_exists($data, 'allowCDWithdraw')) {
            $object->setAllowCDWithdraw($data->{'allowCDWithdraw'});
        }
        if (property_exists($data, 'allowCDWithdrawMetadata')) {
            $object->setAllowCDWithdrawMetadata($this->serializer->deserialize($data->{'allowCDWithdrawMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'changeEmail')) {
            $object->setChangeEmail($data->{'changeEmail'});
        }
        if (property_exists($data, 'changeEmailOther')) {
            $object->setChangeEmailOther($data->{'changeEmailOther'});
        }
        if (property_exists($data, 'companyName')) {
            $object->setCompanyName($data->{'companyName'});
        }
        if (property_exists($data, 'companyPhone')) {
            $object->setCompanyPhone($data->{'companyPhone'});
        }
        if (property_exists($data, 'copyCostPerPage')) {
            $object->setCopyCostPerPage($data->{'copyCostPerPage'});
        }
        if (property_exists($data, 'copyFeeCollectionMethod')) {
            $object->setCopyFeeCollectionMethod($data->{'copyFeeCollectionMethod'});
        }
        if (property_exists($data, 'copyRequestEmail')) {
            $object->setCopyRequestEmail($data->{'copyRequestEmail'});
        }
        if (property_exists($data, 'custom')) {
            $object->setCustom($data->{'custom'});
        }
        if (property_exists($data, 'enableEsign')) {
            $object->setEnableEsign($data->{'enableEsign'});
        }
        if (property_exists($data, 'esignAgreement')) {
            $object->setEsignAgreement($data->{'esignAgreement'});
        }
        if (property_exists($data, 'esignText')) {
            $object->setEsignText($data->{'esignText'});
        }
        if (property_exists($data, 'languageCode')) {
            $object->setLanguageCode($data->{'languageCode'});
        }
        if (property_exists($data, 'mustAgreeToEsign')) {
            $object->setMustAgreeToEsign($data->{'mustAgreeToEsign'});
        }
        if (property_exists($data, 'pdfId')) {
            $object->setPdfId($data->{'pdfId'});
        }
        if (property_exists($data, 'useBrand')) {
            $object->setUseBrand($data->{'useBrand'});
        }
        if (property_exists($data, 'useConsumerDisclosureWithinAccount')) {
            $object->setUseConsumerDisclosureWithinAccount($data->{'useConsumerDisclosureWithinAccount'});
        }
        if (property_exists($data, 'useConsumerDisclosureWithinAccountMetadata')) {
            $object->setUseConsumerDisclosureWithinAccountMetadata($this->serializer->deserialize($data->{'useConsumerDisclosureWithinAccountMetadata'}, 'Surex\\DocuSign\\Model\\SettingsMetadata', 'raw', $context));
        }
        if (property_exists($data, 'withdrawAddressLine1')) {
            $object->setWithdrawAddressLine1($data->{'withdrawAddressLine1'});
        }
        if (property_exists($data, 'withdrawAddressLine2')) {
            $object->setWithdrawAddressLine2($data->{'withdrawAddressLine2'});
        }
        if (property_exists($data, 'withdrawByEmail')) {
            $object->setWithdrawByEmail($data->{'withdrawByEmail'});
        }
        if (property_exists($data, 'withdrawByMail')) {
            $object->setWithdrawByMail($data->{'withdrawByMail'});
        }
        if (property_exists($data, 'withdrawByPhone')) {
            $object->setWithdrawByPhone($data->{'withdrawByPhone'});
        }
        if (property_exists($data, 'withdrawCity')) {
            $object->setWithdrawCity($data->{'withdrawCity'});
        }
        if (property_exists($data, 'withdrawConsequences')) {
            $object->setWithdrawConsequences($data->{'withdrawConsequences'});
        }
        if (property_exists($data, 'withdrawEmail')) {
            $object->setWithdrawEmail($data->{'withdrawEmail'});
        }
        if (property_exists($data, 'withdrawOther')) {
            $object->setWithdrawOther($data->{'withdrawOther'});
        }
        if (property_exists($data, 'withdrawPhone')) {
            $object->setWithdrawPhone($data->{'withdrawPhone'});
        }
        if (property_exists($data, 'withdrawPostalCode')) {
            $object->setWithdrawPostalCode($data->{'withdrawPostalCode'});
        }
        if (property_exists($data, 'withdrawState')) {
            $object->setWithdrawState($data->{'withdrawState'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAccountEsignId()) {
            $data->{'accountEsignId'} = $object->getAccountEsignId();
        }
        if (null !== $object->getAllowCDWithdraw()) {
            $data->{'allowCDWithdraw'} = $object->getAllowCDWithdraw();
        }
        if (null !== $object->getAllowCDWithdrawMetadata()) {
            $data->{'allowCDWithdrawMetadata'} = $this->serializer->serialize($object->getAllowCDWithdrawMetadata(), 'raw', $context);
        }
        if (null !== $object->getChangeEmail()) {
            $data->{'changeEmail'} = $object->getChangeEmail();
        }
        if (null !== $object->getChangeEmailOther()) {
            $data->{'changeEmailOther'} = $object->getChangeEmailOther();
        }
        if (null !== $object->getCompanyName()) {
            $data->{'companyName'} = $object->getCompanyName();
        }
        if (null !== $object->getCompanyPhone()) {
            $data->{'companyPhone'} = $object->getCompanyPhone();
        }
        if (null !== $object->getCopyCostPerPage()) {
            $data->{'copyCostPerPage'} = $object->getCopyCostPerPage();
        }
        if (null !== $object->getCopyFeeCollectionMethod()) {
            $data->{'copyFeeCollectionMethod'} = $object->getCopyFeeCollectionMethod();
        }
        if (null !== $object->getCopyRequestEmail()) {
            $data->{'copyRequestEmail'} = $object->getCopyRequestEmail();
        }
        if (null !== $object->getCustom()) {
            $data->{'custom'} = $object->getCustom();
        }
        if (null !== $object->getEnableEsign()) {
            $data->{'enableEsign'} = $object->getEnableEsign();
        }
        if (null !== $object->getEsignAgreement()) {
            $data->{'esignAgreement'} = $object->getEsignAgreement();
        }
        if (null !== $object->getEsignText()) {
            $data->{'esignText'} = $object->getEsignText();
        }
        if (null !== $object->getLanguageCode()) {
            $data->{'languageCode'} = $object->getLanguageCode();
        }
        if (null !== $object->getMustAgreeToEsign()) {
            $data->{'mustAgreeToEsign'} = $object->getMustAgreeToEsign();
        }
        if (null !== $object->getPdfId()) {
            $data->{'pdfId'} = $object->getPdfId();
        }
        if (null !== $object->getUseBrand()) {
            $data->{'useBrand'} = $object->getUseBrand();
        }
        if (null !== $object->getUseConsumerDisclosureWithinAccount()) {
            $data->{'useConsumerDisclosureWithinAccount'} = $object->getUseConsumerDisclosureWithinAccount();
        }
        if (null !== $object->getUseConsumerDisclosureWithinAccountMetadata()) {
            $data->{'useConsumerDisclosureWithinAccountMetadata'} = $this->serializer->serialize($object->getUseConsumerDisclosureWithinAccountMetadata(), 'raw', $context);
        }
        if (null !== $object->getWithdrawAddressLine1()) {
            $data->{'withdrawAddressLine1'} = $object->getWithdrawAddressLine1();
        }
        if (null !== $object->getWithdrawAddressLine2()) {
            $data->{'withdrawAddressLine2'} = $object->getWithdrawAddressLine2();
        }
        if (null !== $object->getWithdrawByEmail()) {
            $data->{'withdrawByEmail'} = $object->getWithdrawByEmail();
        }
        if (null !== $object->getWithdrawByMail()) {
            $data->{'withdrawByMail'} = $object->getWithdrawByMail();
        }
        if (null !== $object->getWithdrawByPhone()) {
            $data->{'withdrawByPhone'} = $object->getWithdrawByPhone();
        }
        if (null !== $object->getWithdrawCity()) {
            $data->{'withdrawCity'} = $object->getWithdrawCity();
        }
        if (null !== $object->getWithdrawConsequences()) {
            $data->{'withdrawConsequences'} = $object->getWithdrawConsequences();
        }
        if (null !== $object->getWithdrawEmail()) {
            $data->{'withdrawEmail'} = $object->getWithdrawEmail();
        }
        if (null !== $object->getWithdrawOther()) {
            $data->{'withdrawOther'} = $object->getWithdrawOther();
        }
        if (null !== $object->getWithdrawPhone()) {
            $data->{'withdrawPhone'} = $object->getWithdrawPhone();
        }
        if (null !== $object->getWithdrawPostalCode()) {
            $data->{'withdrawPostalCode'} = $object->getWithdrawPostalCode();
        }
        if (null !== $object->getWithdrawState()) {
            $data->{'withdrawState'} = $object->getWithdrawState();
        }

        return $data;
    }
}
