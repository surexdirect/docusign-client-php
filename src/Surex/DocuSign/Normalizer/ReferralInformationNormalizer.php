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

class ReferralInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\ReferralInformation' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\ReferralInformation;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\ReferralInformation();
        if (property_exists($data, 'advertisementId')) {
            $object->setAdvertisementId($data->{'advertisementId'});
        }
        if (property_exists($data, 'enableSupport')) {
            $object->setEnableSupport($data->{'enableSupport'});
        }
        if (property_exists($data, 'externalOrgId')) {
            $object->setExternalOrgId($data->{'externalOrgId'});
        }
        if (property_exists($data, 'groupMemberId')) {
            $object->setGroupMemberId($data->{'groupMemberId'});
        }
        if (property_exists($data, 'idType')) {
            $object->setIdType($data->{'idType'});
        }
        if (property_exists($data, 'includedSeats')) {
            $object->setIncludedSeats($data->{'includedSeats'});
        }
        if (property_exists($data, 'industry')) {
            $object->setIndustry($data->{'industry'});
        }
        if (property_exists($data, 'planStartMonth')) {
            $object->setPlanStartMonth($data->{'planStartMonth'});
        }
        if (property_exists($data, 'promoCode')) {
            $object->setPromoCode($data->{'promoCode'});
        }
        if (property_exists($data, 'publisherId')) {
            $object->setPublisherId($data->{'publisherId'});
        }
        if (property_exists($data, 'referralCode')) {
            $object->setReferralCode($data->{'referralCode'});
        }
        if (property_exists($data, 'referrerName')) {
            $object->setReferrerName($data->{'referrerName'});
        }
        if (property_exists($data, 'saleDiscountAmount')) {
            $object->setSaleDiscountAmount($data->{'saleDiscountAmount'});
        }
        if (property_exists($data, 'saleDiscountFixedAmount')) {
            $object->setSaleDiscountFixedAmount($data->{'saleDiscountFixedAmount'});
        }
        if (property_exists($data, 'saleDiscountPercent')) {
            $object->setSaleDiscountPercent($data->{'saleDiscountPercent'});
        }
        if (property_exists($data, 'saleDiscountPeriods')) {
            $object->setSaleDiscountPeriods($data->{'saleDiscountPeriods'});
        }
        if (property_exists($data, 'saleDiscountSeatPriceOverride')) {
            $object->setSaleDiscountSeatPriceOverride($data->{'saleDiscountSeatPriceOverride'});
        }
        if (property_exists($data, 'shopperId')) {
            $object->setShopperId($data->{'shopperId'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAdvertisementId()) {
            $data->{'advertisementId'} = $object->getAdvertisementId();
        }
        if (null !== $object->getEnableSupport()) {
            $data->{'enableSupport'} = $object->getEnableSupport();
        }
        if (null !== $object->getExternalOrgId()) {
            $data->{'externalOrgId'} = $object->getExternalOrgId();
        }
        if (null !== $object->getGroupMemberId()) {
            $data->{'groupMemberId'} = $object->getGroupMemberId();
        }
        if (null !== $object->getIdType()) {
            $data->{'idType'} = $object->getIdType();
        }
        if (null !== $object->getIncludedSeats()) {
            $data->{'includedSeats'} = $object->getIncludedSeats();
        }
        if (null !== $object->getIndustry()) {
            $data->{'industry'} = $object->getIndustry();
        }
        if (null !== $object->getPlanStartMonth()) {
            $data->{'planStartMonth'} = $object->getPlanStartMonth();
        }
        if (null !== $object->getPromoCode()) {
            $data->{'promoCode'} = $object->getPromoCode();
        }
        if (null !== $object->getPublisherId()) {
            $data->{'publisherId'} = $object->getPublisherId();
        }
        if (null !== $object->getReferralCode()) {
            $data->{'referralCode'} = $object->getReferralCode();
        }
        if (null !== $object->getReferrerName()) {
            $data->{'referrerName'} = $object->getReferrerName();
        }
        if (null !== $object->getSaleDiscountAmount()) {
            $data->{'saleDiscountAmount'} = $object->getSaleDiscountAmount();
        }
        if (null !== $object->getSaleDiscountFixedAmount()) {
            $data->{'saleDiscountFixedAmount'} = $object->getSaleDiscountFixedAmount();
        }
        if (null !== $object->getSaleDiscountPercent()) {
            $data->{'saleDiscountPercent'} = $object->getSaleDiscountPercent();
        }
        if (null !== $object->getSaleDiscountPeriods()) {
            $data->{'saleDiscountPeriods'} = $object->getSaleDiscountPeriods();
        }
        if (null !== $object->getSaleDiscountSeatPriceOverride()) {
            $data->{'saleDiscountSeatPriceOverride'} = $object->getSaleDiscountSeatPriceOverride();
        }
        if (null !== $object->getShopperId()) {
            $data->{'shopperId'} = $object->getShopperId();
        }

        return $data;
    }
}
