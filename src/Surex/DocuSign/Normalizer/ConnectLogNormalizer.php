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

class ConnectLogNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Surex\\DocuSign\\Model\\ConnectLog' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Surex\DocuSign\Model\ConnectLog;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Surex\DocuSign\Model\ConnectLog();
        if (property_exists($data, 'accountId')) {
            $object->setAccountId($data->{'accountId'});
        }
        if (property_exists($data, 'configUrl')) {
            $object->setConfigUrl($data->{'configUrl'});
        }
        if (property_exists($data, 'connectDebugLog')) {
            $values = [];
            foreach ($data->{'connectDebugLog'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Surex\\DocuSign\\Model\\ConnectDebugLog', 'json', $context);
            }
            $object->setConnectDebugLog($values);
        }
        if (property_exists($data, 'connectId')) {
            $object->setConnectId($data->{'connectId'});
        }
        if (property_exists($data, 'created')) {
            $object->setCreated($data->{'created'});
        }
        if (property_exists($data, 'email')) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'envelopeId')) {
            $object->setEnvelopeId($data->{'envelopeId'});
        }
        if (property_exists($data, 'error')) {
            $object->setError($data->{'error'});
        }
        if (property_exists($data, 'failureId')) {
            $object->setFailureId($data->{'failureId'});
        }
        if (property_exists($data, 'failureUri')) {
            $object->setFailureUri($data->{'failureUri'});
        }
        if (property_exists($data, 'lastTry')) {
            $object->setLastTry($data->{'lastTry'});
        }
        if (property_exists($data, 'logId')) {
            $object->setLogId($data->{'logId'});
        }
        if (property_exists($data, 'logUri')) {
            $object->setLogUri($data->{'logUri'});
        }
        if (property_exists($data, 'retryCount')) {
            $object->setRetryCount($data->{'retryCount'});
        }
        if (property_exists($data, 'retryUri')) {
            $object->setRetryUri($data->{'retryUri'});
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'subject')) {
            $object->setSubject($data->{'subject'});
        }
        if (property_exists($data, 'userName')) {
            $object->setUserName($data->{'userName'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAccountId()) {
            $data->{'accountId'} = $object->getAccountId();
        }
        if (null !== $object->getConfigUrl()) {
            $data->{'configUrl'} = $object->getConfigUrl();
        }
        if (null !== $object->getConnectDebugLog()) {
            $values = [];
            foreach ($object->getConnectDebugLog() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'connectDebugLog'} = $values;
        }
        if (null !== $object->getConnectId()) {
            $data->{'connectId'} = $object->getConnectId();
        }
        if (null !== $object->getCreated()) {
            $data->{'created'} = $object->getCreated();
        }
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }
        if (null !== $object->getEnvelopeId()) {
            $data->{'envelopeId'} = $object->getEnvelopeId();
        }
        if (null !== $object->getError()) {
            $data->{'error'} = $object->getError();
        }
        if (null !== $object->getFailureId()) {
            $data->{'failureId'} = $object->getFailureId();
        }
        if (null !== $object->getFailureUri()) {
            $data->{'failureUri'} = $object->getFailureUri();
        }
        if (null !== $object->getLastTry()) {
            $data->{'lastTry'} = $object->getLastTry();
        }
        if (null !== $object->getLogId()) {
            $data->{'logId'} = $object->getLogId();
        }
        if (null !== $object->getLogUri()) {
            $data->{'logUri'} = $object->getLogUri();
        }
        if (null !== $object->getRetryCount()) {
            $data->{'retryCount'} = $object->getRetryCount();
        }
        if (null !== $object->getRetryUri()) {
            $data->{'retryUri'} = $object->getRetryUri();
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getSubject()) {
            $data->{'subject'} = $object->getSubject();
        }
        if (null !== $object->getUserName()) {
            $data->{'userName'} = $object->getUserName();
        }

        return $data;
    }
}
