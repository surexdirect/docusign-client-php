<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class AccountPasswordQuestionsRequired
{
    /**
     * @var string
     */
    protected $maximumQuestions;
    /**
     * @var string
     */
    protected $minimumQuestions;

    /**
     * @return string
     */
    public function getMaximumQuestions(): ?string
    {
        return $this->maximumQuestions;
    }

    /**
     * @param string $maximumQuestions
     *
     * @return self
     */
    public function setMaximumQuestions(?string $maximumQuestions): self
    {
        $this->maximumQuestions = $maximumQuestions;

        return $this;
    }

    /**
     * @return string
     */
    public function getMinimumQuestions(): ?string
    {
        return $this->minimumQuestions;
    }

    /**
     * @param string $minimumQuestions
     *
     * @return self
     */
    public function setMinimumQuestions(?string $minimumQuestions): self
    {
        $this->minimumQuestions = $minimumQuestions;

        return $this;
    }
}
