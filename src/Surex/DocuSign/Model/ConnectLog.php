<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class ConnectLog
{
    /**
     * @var string
     */
    protected $accountId;
    /**
     * @var string
     */
    protected $configUrl;
    /**
     * @var ConnectDebugLog[]
     */
    protected $connectDebugLog;
    /**
     * @var string
     */
    protected $connectId;
    /**
     * @var string
     */
    protected $created;
    /**
     * @var string
     */
    protected $email;
    /**
     * @var string
     */
    protected $envelopeId;
    /**
     * @var string
     */
    protected $error;
    /**
     * @var string
     */
    protected $failureId;
    /**
     * @var string
     */
    protected $failureUri;
    /**
     * @var string
     */
    protected $lastTry;
    /**
     * @var string
     */
    protected $logId;
    /**
     * @var string
     */
    protected $logUri;
    /**
     * @var string
     */
    protected $retryCount;
    /**
     * @var string
     */
    protected $retryUri;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $subject;
    /**
     * @var string
     */
    protected $userName;

    /**
     * @return string
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param string $accountId
     *
     * @return self
     */
    public function setAccountId($accountId = null)
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * @return string
     */
    public function getConfigUrl()
    {
        return $this->configUrl;
    }

    /**
     * @param string $configUrl
     *
     * @return self
     */
    public function setConfigUrl($configUrl = null)
    {
        $this->configUrl = $configUrl;

        return $this;
    }

    /**
     * @return ConnectDebugLog[]
     */
    public function getConnectDebugLog()
    {
        return $this->connectDebugLog;
    }

    /**
     * @param ConnectDebugLog[] $connectDebugLog
     *
     * @return self
     */
    public function setConnectDebugLog(array $connectDebugLog = null)
    {
        $this->connectDebugLog = $connectDebugLog;

        return $this;
    }

    /**
     * @return string
     */
    public function getConnectId()
    {
        return $this->connectId;
    }

    /**
     * @param string $connectId
     *
     * @return self
     */
    public function setConnectId($connectId = null)
    {
        $this->connectId = $connectId;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param string $created
     *
     * @return self
     */
    public function setCreated($created = null)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return self
     */
    public function setEmail($email = null)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnvelopeId()
    {
        return $this->envelopeId;
    }

    /**
     * @param string $envelopeId
     *
     * @return self
     */
    public function setEnvelopeId($envelopeId = null)
    {
        $this->envelopeId = $envelopeId;

        return $this;
    }

    /**
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param string $error
     *
     * @return self
     */
    public function setError($error = null)
    {
        $this->error = $error;

        return $this;
    }

    /**
     * @return string
     */
    public function getFailureId()
    {
        return $this->failureId;
    }

    /**
     * @param string $failureId
     *
     * @return self
     */
    public function setFailureId($failureId = null)
    {
        $this->failureId = $failureId;

        return $this;
    }

    /**
     * @return string
     */
    public function getFailureUri()
    {
        return $this->failureUri;
    }

    /**
     * @param string $failureUri
     *
     * @return self
     */
    public function setFailureUri($failureUri = null)
    {
        $this->failureUri = $failureUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastTry()
    {
        return $this->lastTry;
    }

    /**
     * @param string $lastTry
     *
     * @return self
     */
    public function setLastTry($lastTry = null)
    {
        $this->lastTry = $lastTry;

        return $this;
    }

    /**
     * @return string
     */
    public function getLogId()
    {
        return $this->logId;
    }

    /**
     * @param string $logId
     *
     * @return self
     */
    public function setLogId($logId = null)
    {
        $this->logId = $logId;

        return $this;
    }

    /**
     * @return string
     */
    public function getLogUri()
    {
        return $this->logUri;
    }

    /**
     * @param string $logUri
     *
     * @return self
     */
    public function setLogUri($logUri = null)
    {
        $this->logUri = $logUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getRetryCount()
    {
        return $this->retryCount;
    }

    /**
     * @param string $retryCount
     *
     * @return self
     */
    public function setRetryCount($retryCount = null)
    {
        $this->retryCount = $retryCount;

        return $this;
    }

    /**
     * @return string
     */
    public function getRetryUri()
    {
        return $this->retryUri;
    }

    /**
     * @param string $retryUri
     *
     * @return self
     */
    public function setRetryUri($retryUri = null)
    {
        $this->retryUri = $retryUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus($status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     *
     * @return self
     */
    public function setSubject($subject = null)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     *
     * @return self
     */
    public function setUserName($userName = null)
    {
        $this->userName = $userName;

        return $this;
    }
}
