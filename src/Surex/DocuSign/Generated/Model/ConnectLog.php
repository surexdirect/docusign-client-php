<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class ConnectLog
{
    /**
     * The account ID associated with the envelope.
     *
     * @var string
     */
    protected $accountId;
    /**
     * The web address of the listener or Retrieving Service end point for Connect.
     *
     * @var string
     */
    protected $configUrl;
    /**
     * A complex element containing information about the Connect configuration, error details, date/time, description and payload.

     This is only included in the response if the query additional_info=true is used.
     *
     * @var ConnectDebugLog[]
     */
    protected $connectDebugLog;
    /**
     * The identifier for the Connect configuration that failed. If an account has multiple Connect configurations, this value is used to look up the Connect configuration for the failed post.
     *
     * @var string
     */
    protected $connectId;
    /**
     * The date and time the entry was created.
     *
     * @var string
     */
    protected $created;
    /**
     * The email that sent the envelope.
     *
     * @var string
     */
    protected $email;
    /**
     * The envelope ID of the envelope status that failed to post.
     *
     * @var string
     */
    protected $envelopeId;
    /**
     * The error that caused the Connect post to fail.
     *
     * @var string
     */
    protected $error;
    /**
     * The failure log ID for the failure.
     *
     * @var string
     */
    protected $failureId;
    /**
     * The URI for the failure.
     *
     * @var string
     */
    protected $failureUri;
    /**
     * The date and time the last attempt to post.
     *
     * @var string
     */
    protected $lastTry;
    /**
     * The Connect log ID for the entry.
     *
     * @var string
     */
    protected $logId;
    /**
     * The URI for the log item.
     *
     * @var string
     */
    protected $logUri;
    /**
     * The number of times the Connect post has been retried.
     *
     * @var string
     */
    protected $retryCount;
    /**
     * The UEI to retry to publish the Connect failure.
     *
     * @var string
     */
    protected $retryUri;
    /**
     * The new envelope status for the failed Connect post. The possible values are: Any, Voided, Created, Deleted, Sent, Delivered, Signed, Completed, Declined, TimedOut, Template, or Processing.
     *
     * @var string
     */
    protected $status;
    /**
     * The envelope subject.
     *
     * @var string
     */
    protected $subject;
    /**
     * The name of the envelope sender.
     *
     * @var string
     */
    protected $userName;

    /**
     * The account ID associated with the envelope.
     *
     * @return string
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    /**
     * The account ID associated with the envelope.
     *
     * @param string $accountId
     *
     * @return self
     */
    public function setAccountId(?string $accountId): self
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * The web address of the listener or Retrieving Service end point for Connect.
     *
     * @return string
     */
    public function getConfigUrl(): ?string
    {
        return $this->configUrl;
    }

    /**
     * The web address of the listener or Retrieving Service end point for Connect.
     *
     * @param string $configUrl
     *
     * @return self
     */
    public function setConfigUrl(?string $configUrl): self
    {
        $this->configUrl = $configUrl;

        return $this;
    }

    /**
     * A complex element containing information about the Connect configuration, error details, date/time, description and payload.

     This is only included in the response if the query additional_info=true is used.
     *
     * @return ConnectDebugLog[]
     */
    public function getConnectDebugLog(): ?array
    {
        return $this->connectDebugLog;
    }

    /**
     * A complex element containing information about the Connect configuration, error details, date/time, description and payload.

     This is only included in the response if the query additional_info=true is used.
     *
     * @param ConnectDebugLog[] $connectDebugLog
     *
     * @return self
     */
    public function setConnectDebugLog(?array $connectDebugLog): self
    {
        $this->connectDebugLog = $connectDebugLog;

        return $this;
    }

    /**
     * The identifier for the Connect configuration that failed. If an account has multiple Connect configurations, this value is used to look up the Connect configuration for the failed post.
     *
     * @return string
     */
    public function getConnectId(): ?string
    {
        return $this->connectId;
    }

    /**
     * The identifier for the Connect configuration that failed. If an account has multiple Connect configurations, this value is used to look up the Connect configuration for the failed post.
     *
     * @param string $connectId
     *
     * @return self
     */
    public function setConnectId(?string $connectId): self
    {
        $this->connectId = $connectId;

        return $this;
    }

    /**
     * The date and time the entry was created.
     *
     * @return string
     */
    public function getCreated(): ?string
    {
        return $this->created;
    }

    /**
     * The date and time the entry was created.
     *
     * @param string $created
     *
     * @return self
     */
    public function setCreated(?string $created): self
    {
        $this->created = $created;

        return $this;
    }

    /**
     * The email that sent the envelope.
     *
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * The email that sent the envelope.
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * The envelope ID of the envelope status that failed to post.
     *
     * @return string
     */
    public function getEnvelopeId(): ?string
    {
        return $this->envelopeId;
    }

    /**
     * The envelope ID of the envelope status that failed to post.
     *
     * @param string $envelopeId
     *
     * @return self
     */
    public function setEnvelopeId(?string $envelopeId): self
    {
        $this->envelopeId = $envelopeId;

        return $this;
    }

    /**
     * The error that caused the Connect post to fail.
     *
     * @return string
     */
    public function getError(): ?string
    {
        return $this->error;
    }

    /**
     * The error that caused the Connect post to fail.
     *
     * @param string $error
     *
     * @return self
     */
    public function setError(?string $error): self
    {
        $this->error = $error;

        return $this;
    }

    /**
     * The failure log ID for the failure.
     *
     * @return string
     */
    public function getFailureId(): ?string
    {
        return $this->failureId;
    }

    /**
     * The failure log ID for the failure.
     *
     * @param string $failureId
     *
     * @return self
     */
    public function setFailureId(?string $failureId): self
    {
        $this->failureId = $failureId;

        return $this;
    }

    /**
     * The URI for the failure.
     *
     * @return string
     */
    public function getFailureUri(): ?string
    {
        return $this->failureUri;
    }

    /**
     * The URI for the failure.
     *
     * @param string $failureUri
     *
     * @return self
     */
    public function setFailureUri(?string $failureUri): self
    {
        $this->failureUri = $failureUri;

        return $this;
    }

    /**
     * The date and time the last attempt to post.
     *
     * @return string
     */
    public function getLastTry(): ?string
    {
        return $this->lastTry;
    }

    /**
     * The date and time the last attempt to post.
     *
     * @param string $lastTry
     *
     * @return self
     */
    public function setLastTry(?string $lastTry): self
    {
        $this->lastTry = $lastTry;

        return $this;
    }

    /**
     * The Connect log ID for the entry.
     *
     * @return string
     */
    public function getLogId(): ?string
    {
        return $this->logId;
    }

    /**
     * The Connect log ID for the entry.
     *
     * @param string $logId
     *
     * @return self
     */
    public function setLogId(?string $logId): self
    {
        $this->logId = $logId;

        return $this;
    }

    /**
     * The URI for the log item.
     *
     * @return string
     */
    public function getLogUri(): ?string
    {
        return $this->logUri;
    }

    /**
     * The URI for the log item.
     *
     * @param string $logUri
     *
     * @return self
     */
    public function setLogUri(?string $logUri): self
    {
        $this->logUri = $logUri;

        return $this;
    }

    /**
     * The number of times the Connect post has been retried.
     *
     * @return string
     */
    public function getRetryCount(): ?string
    {
        return $this->retryCount;
    }

    /**
     * The number of times the Connect post has been retried.
     *
     * @param string $retryCount
     *
     * @return self
     */
    public function setRetryCount(?string $retryCount): self
    {
        $this->retryCount = $retryCount;

        return $this;
    }

    /**
     * The UEI to retry to publish the Connect failure.
     *
     * @return string
     */
    public function getRetryUri(): ?string
    {
        return $this->retryUri;
    }

    /**
     * The UEI to retry to publish the Connect failure.
     *
     * @param string $retryUri
     *
     * @return self
     */
    public function setRetryUri(?string $retryUri): self
    {
        $this->retryUri = $retryUri;

        return $this;
    }

    /**
     * The new envelope status for the failed Connect post. The possible values are: Any, Voided, Created, Deleted, Sent, Delivered, Signed, Completed, Declined, TimedOut, Template, or Processing.
     *
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * The new envelope status for the failed Connect post. The possible values are: Any, Voided, Created, Deleted, Sent, Delivered, Signed, Completed, Declined, TimedOut, Template, or Processing.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * The envelope subject.
     *
     * @return string
     */
    public function getSubject(): ?string
    {
        return $this->subject;
    }

    /**
     * The envelope subject.
     *
     * @param string $subject
     *
     * @return self
     */
    public function setSubject(?string $subject): self
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * The name of the envelope sender.
     *
     * @return string
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }

    /**
     * The name of the envelope sender.
     *
     * @param string $userName
     *
     * @return self
     */
    public function setUserName(?string $userName): self
    {
        $this->userName = $userName;

        return $this;
    }
}
