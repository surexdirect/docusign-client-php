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
    public function getEnvelopes()
    {
        return $this->envelopes;
    }

    /**
     * @param SharedItem[] $envelopes
     *
     * @return self
     */
    public function setEnvelopes(array $envelopes = null)
    {
        $this->envelopes = $envelopes;

        return $this;
    }

    /**
     * @return ErrorDetails
     */
    public function getErrorDetails()
    {
        return $this->errorDetails;
    }

    /**
     * @param ErrorDetails $errorDetails
     *
     * @return self
     */
    public function setErrorDetails(ErrorDetails $errorDetails = null)
    {
        $this->errorDetails = $errorDetails;

        return $this;
    }

    /**
     * @return TemplateSharedItem[]
     */
    public function getTemplates()
    {
        return $this->templates;
    }

    /**
     * @param TemplateSharedItem[] $templates
     *
     * @return self
     */
    public function setTemplates(array $templates = null)
    {
        $this->templates = $templates;

        return $this;
    }

    /**
     * @return UserInfo
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param UserInfo $user
     *
     * @return self
     */
    public function setUser(UserInfo $user = null)
    {
        $this->user = $user;

        return $this;
    }
}
