<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class MemberSharedItems
{
    /**
     * @var SharedItem[]
     */
    protected $envelopes;
    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * @var TemplateSharedItem[]
     */
    protected $templates;
    /**
     * @var UserInfo
     */
    protected $user;

    /**
     * @return SharedItem[]
     */
    public function getEnvelopes(): ?array
    {
        return $this->envelopes;
    }

    /**
     * @param SharedItem[] $envelopes
     *
     * @return self
     */
    public function setEnvelopes(?array $envelopes): self
    {
        $this->envelopes = $envelopes;

        return $this;
    }

    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @return ErrorDetails
     */
    public function getErrorDetails(): ?ErrorDetails
    {
        return $this->errorDetails;
    }

    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @param ErrorDetails $errorDetails
     *
     * @return self
     */
    public function setErrorDetails(?ErrorDetails $errorDetails): self
    {
        $this->errorDetails = $errorDetails;

        return $this;
    }

    /**
     * @return TemplateSharedItem[]
     */
    public function getTemplates(): ?array
    {
        return $this->templates;
    }

    /**
     * @param TemplateSharedItem[] $templates
     *
     * @return self
     */
    public function setTemplates(?array $templates): self
    {
        $this->templates = $templates;

        return $this;
    }

    /**
     * @return UserInfo
     */
    public function getUser(): ?UserInfo
    {
        return $this->user;
    }

    /**
     * @param UserInfo $user
     *
     * @return self
     */
    public function setUser(?UserInfo $user): self
    {
        $this->user = $user;

        return $this;
    }
}
