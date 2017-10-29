<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
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
    public function getMaximumQuestions()
    {
        return $this->maximumQuestions;
    }

    /**
     * @param string $maximumQuestions
     *
     * @return self
     */
    public function setMaximumQuestions($maximumQuestions = null)
    {
        $this->maximumQuestions = $maximumQuestions;

        return $this;
    }

    /**
     * @return string
     */
    public function getMinimumQuestions()
    {
        return $this->minimumQuestions;
    }

    /**
     * @param string $minimumQuestions
     *
     * @return self
     */
    public function setMinimumQuestions($minimumQuestions = null)
    {
        $this->minimumQuestions = $minimumQuestions;

        return $this;
    }
}
