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

class AccountsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\Accounts' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\Accounts;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\Accounts();
        if (property_exists($data, 'accountIdGuid')) {
            $object->setAccountIdGuid($data->{'accountIdGuid'});
        }
        if (property_exists($data, 'accountName')) {
            $object->setAccountName($data->{'accountName'});
        }
        if (property_exists($data, 'allowTransactionRooms')) {
            $object->setAllowTransactionRooms($data->{'allowTransactionRooms'});
        }
        if (property_exists($data, 'billingPeriodDaysRemaining')) {
            $object->setBillingPeriodDaysRemaining($data->{'billingPeriodDaysRemaining'});
        }
        if (property_exists($data, 'billingPeriodEndDate')) {
            $object->setBillingPeriodEndDate($data->{'billingPeriodEndDate'});
        }
        if (property_exists($data, 'billingPeriodEnvelopesAllowed')) {
            $object->setBillingPeriodEnvelopesAllowed($data->{'billingPeriodEnvelopesAllowed'});
        }
        if (property_exists($data, 'billingPeriodEnvelopesSent')) {
            $object->setBillingPeriodEnvelopesSent($data->{'billingPeriodEnvelopesSent'});
        }
        if (property_exists($data, 'billingPeriodStartDate')) {
            $object->setBillingPeriodStartDate($data->{'billingPeriodStartDate'});
        }
        if (property_exists($data, 'billingProfile')) {
            $object->setBillingProfile($data->{'billingProfile'});
        }
        if (property_exists($data, 'canCancelRenewal')) {
            $object->setCanCancelRenewal($data->{'canCancelRenewal'});
        }
        if (property_exists($data, 'canUpgrade')) {
            $object->setCanUpgrade($data->{'canUpgrade'});
        }
        if (property_exists($data, 'connectPermission')) {
            $object->setConnectPermission($data->{'connectPermission'});
        }
        if (property_exists($data, 'createdDate')) {
            $object->setCreatedDate($data->{'createdDate'});
        }
        if (property_exists($data, 'currencyCode')) {
            $object->setCurrencyCode($data->{'currencyCode'});
        }
        if (property_exists($data, 'currentPlanId')) {
            $object->setCurrentPlanId($data->{'currentPlanId'});
        }
        if (property_exists($data, 'distributorCode')) {
            $object->setDistributorCode($data->{'distributorCode'});
        }
        if (property_exists($data, 'docuSignLandingUrl')) {
            $object->setDocuSignLandingUrl($data->{'docuSignLandingUrl'});
        }
        if (property_exists($data, 'envelopeSendingBlocked')) {
            $object->setEnvelopeSendingBlocked($data->{'envelopeSendingBlocked'});
        }
        if (property_exists($data, 'envelopeUnitPrice')) {
            $object->setEnvelopeUnitPrice($data->{'envelopeUnitPrice'});
        }
        if (property_exists($data, 'forgottenPasswordQuestionsCount')) {
            $object->setForgottenPasswordQuestionsCount($data->{'forgottenPasswordQuestionsCount'});
        }
        if (property_exists($data, 'isDowngrade')) {
            $object->setIsDowngrade($data->{'isDowngrade'});
        }
        if (property_exists($data, 'paymentMethod')) {
            $object->setPaymentMethod($data->{'paymentMethod'});
        }
        if (property_exists($data, 'planClassification')) {
            $object->setPlanClassification($data->{'planClassification'});
        }
        if (property_exists($data, 'planEndDate')) {
            $object->setPlanEndDate($data->{'planEndDate'});
        }
        if (property_exists($data, 'planName')) {
            $object->setPlanName($data->{'planName'});
        }
        if (property_exists($data, 'planStartDate')) {
            $object->setPlanStartDate($data->{'planStartDate'});
        }
        if (property_exists($data, 'seatsAllowed')) {
            $object->setSeatsAllowed($data->{'seatsAllowed'});
        }
        if (property_exists($data, 'seatsInUse')) {
            $object->setSeatsInUse($data->{'seatsInUse'});
        }
        if (property_exists($data, 'status21CFRPart11')) {
            $object->setStatus21CFRPart11($data->{'status21CFRPart11'});
        }
        if (property_exists($data, 'suspensionDate')) {
            $object->setSuspensionDate($data->{'suspensionDate'});
        }
        if (property_exists($data, 'suspensionStatus')) {
            $object->setSuspensionStatus($data->{'suspensionStatus'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAccountIdGuid()) {
            $data->{'accountIdGuid'} = $object->getAccountIdGuid();
        }
        if (null !== $object->getAccountName()) {
            $data->{'accountName'} = $object->getAccountName();
        }
        if (null !== $object->getAllowTransactionRooms()) {
            $data->{'allowTransactionRooms'} = $object->getAllowTransactionRooms();
        }
        if (null !== $object->getBillingPeriodDaysRemaining()) {
            $data->{'billingPeriodDaysRemaining'} = $object->getBillingPeriodDaysRemaining();
        }
        if (null !== $object->getBillingPeriodEndDate()) {
            $data->{'billingPeriodEndDate'} = $object->getBillingPeriodEndDate();
        }
        if (null !== $object->getBillingPeriodEnvelopesAllowed()) {
            $data->{'billingPeriodEnvelopesAllowed'} = $object->getBillingPeriodEnvelopesAllowed();
        }
        if (null !== $object->getBillingPeriodEnvelopesSent()) {
            $data->{'billingPeriodEnvelopesSent'} = $object->getBillingPeriodEnvelopesSent();
        }
        if (null !== $object->getBillingPeriodStartDate()) {
            $data->{'billingPeriodStartDate'} = $object->getBillingPeriodStartDate();
        }
        if (null !== $object->getBillingProfile()) {
            $data->{'billingProfile'} = $object->getBillingProfile();
        }
        if (null !== $object->getCanCancelRenewal()) {
            $data->{'canCancelRenewal'} = $object->getCanCancelRenewal();
        }
        if (null !== $object->getCanUpgrade()) {
            $data->{'canUpgrade'} = $object->getCanUpgrade();
        }
        if (null !== $object->getConnectPermission()) {
            $data->{'connectPermission'} = $object->getConnectPermission();
        }
        if (null !== $object->getCreatedDate()) {
            $data->{'createdDate'} = $object->getCreatedDate();
        }
        if (null !== $object->getCurrencyCode()) {
            $data->{'currencyCode'} = $object->getCurrencyCode();
        }
        if (null !== $object->getCurrentPlanId()) {
            $data->{'currentPlanId'} = $object->getCurrentPlanId();
        }
        if (null !== $object->getDistributorCode()) {
            $data->{'distributorCode'} = $object->getDistributorCode();
        }
        if (null !== $object->getDocuSignLandingUrl()) {
            $data->{'docuSignLandingUrl'} = $object->getDocuSignLandingUrl();
        }
        if (null !== $object->getEnvelopeSendingBlocked()) {
            $data->{'envelopeSendingBlocked'} = $object->getEnvelopeSendingBlocked();
        }
        if (null !== $object->getEnvelopeUnitPrice()) {
            $data->{'envelopeUnitPrice'} = $object->getEnvelopeUnitPrice();
        }
        if (null !== $object->getForgottenPasswordQuestionsCount()) {
            $data->{'forgottenPasswordQuestionsCount'} = $object->getForgottenPasswordQuestionsCount();
        }
        if (null !== $object->getIsDowngrade()) {
            $data->{'isDowngrade'} = $object->getIsDowngrade();
        }
        if (null !== $object->getPaymentMethod()) {
            $data->{'paymentMethod'} = $object->getPaymentMethod();
        }
        if (null !== $object->getPlanClassification()) {
            $data->{'planClassification'} = $object->getPlanClassification();
        }
        if (null !== $object->getPlanEndDate()) {
            $data->{'planEndDate'} = $object->getPlanEndDate();
        }
        if (null !== $object->getPlanName()) {
            $data->{'planName'} = $object->getPlanName();
        }
        if (null !== $object->getPlanStartDate()) {
            $data->{'planStartDate'} = $object->getPlanStartDate();
        }
        if (null !== $object->getSeatsAllowed()) {
            $data->{'seatsAllowed'} = $object->getSeatsAllowed();
        }
        if (null !== $object->getSeatsInUse()) {
            $data->{'seatsInUse'} = $object->getSeatsInUse();
        }
        if (null !== $object->getStatus21CFRPart11()) {
            $data->{'status21CFRPart11'} = $object->getStatus21CFRPart11();
        }
        if (null !== $object->getSuspensionDate()) {
            $data->{'suspensionDate'} = $object->getSuspensionDate();
        }
        if (null !== $object->getSuspensionStatus()) {
            $data->{'suspensionStatus'} = $object->getSuspensionStatus();
        }

        return $data;
    }
}
