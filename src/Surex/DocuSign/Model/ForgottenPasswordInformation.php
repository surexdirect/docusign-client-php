<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class ForgottenPasswordInformation
{
    /**
     * The answer to the first forgotten password challenge question.
     *
     * @var string
     */
    protected $forgottenPasswordAnswer1;
    /**
     * The answer to the second forgotten password challenge question.
     *
     * @var string
     */
    protected $forgottenPasswordAnswer2;
    /**
     * The answer to the third forgotten password challenge question.
     *
     * @var string
     */
    protected $forgottenPasswordAnswer3;
    /**
     * The answer to the fourth forgotten password challenge question.
     *
     * @var string
     */
    protected $forgottenPasswordAnswer4;
    /**
     * The first challenge question presented to a user who has forgotten their password.
     *
     * @var string
     */
    protected $forgottenPasswordQuestion1;
    /**
     * The second challenge question presented to a user who has forgotten their password.
     *
     * @var string
     */
    protected $forgottenPasswordQuestion2;
    /**
     * The third challenge question presented to a user who has forgotten their password.
     *
     * @var string
     */
    protected $forgottenPasswordQuestion3;
    /**
     * The fourth challenge question presented to a user who has forgotten their password.
     *
     * @var string
     */
    protected $forgottenPasswordQuestion4;

    /**
     * The answer to the first forgotten password challenge question.
     *
     * @return string
     */
    public function getForgottenPasswordAnswer1(): ?string
    {
        return $this->forgottenPasswordAnswer1;
    }

    /**
     * The answer to the first forgotten password challenge question.
     *
     * @param string $forgottenPasswordAnswer1
     *
     * @return self
     */
    public function setForgottenPasswordAnswer1(?string $forgottenPasswordAnswer1): self
    {
        $this->forgottenPasswordAnswer1 = $forgottenPasswordAnswer1;

        return $this;
    }

    /**
     * The answer to the second forgotten password challenge question.
     *
     * @return string
     */
    public function getForgottenPasswordAnswer2(): ?string
    {
        return $this->forgottenPasswordAnswer2;
    }

    /**
     * The answer to the second forgotten password challenge question.
     *
     * @param string $forgottenPasswordAnswer2
     *
     * @return self
     */
    public function setForgottenPasswordAnswer2(?string $forgottenPasswordAnswer2): self
    {
        $this->forgottenPasswordAnswer2 = $forgottenPasswordAnswer2;

        return $this;
    }

    /**
     * The answer to the third forgotten password challenge question.
     *
     * @return string
     */
    public function getForgottenPasswordAnswer3(): ?string
    {
        return $this->forgottenPasswordAnswer3;
    }

    /**
     * The answer to the third forgotten password challenge question.
     *
     * @param string $forgottenPasswordAnswer3
     *
     * @return self
     */
    public function setForgottenPasswordAnswer3(?string $forgottenPasswordAnswer3): self
    {
        $this->forgottenPasswordAnswer3 = $forgottenPasswordAnswer3;

        return $this;
    }

    /**
     * The answer to the fourth forgotten password challenge question.
     *
     * @return string
     */
    public function getForgottenPasswordAnswer4(): ?string
    {
        return $this->forgottenPasswordAnswer4;
    }

    /**
     * The answer to the fourth forgotten password challenge question.
     *
     * @param string $forgottenPasswordAnswer4
     *
     * @return self
     */
    public function setForgottenPasswordAnswer4(?string $forgottenPasswordAnswer4): self
    {
        $this->forgottenPasswordAnswer4 = $forgottenPasswordAnswer4;

        return $this;
    }

    /**
     * The first challenge question presented to a user who has forgotten their password.
     *
     * @return string
     */
    public function getForgottenPasswordQuestion1(): ?string
    {
        return $this->forgottenPasswordQuestion1;
    }

    /**
     * The first challenge question presented to a user who has forgotten their password.
     *
     * @param string $forgottenPasswordQuestion1
     *
     * @return self
     */
    public function setForgottenPasswordQuestion1(?string $forgottenPasswordQuestion1): self
    {
        $this->forgottenPasswordQuestion1 = $forgottenPasswordQuestion1;

        return $this;
    }

    /**
     * The second challenge question presented to a user who has forgotten their password.
     *
     * @return string
     */
    public function getForgottenPasswordQuestion2(): ?string
    {
        return $this->forgottenPasswordQuestion2;
    }

    /**
     * The second challenge question presented to a user who has forgotten their password.
     *
     * @param string $forgottenPasswordQuestion2
     *
     * @return self
     */
    public function setForgottenPasswordQuestion2(?string $forgottenPasswordQuestion2): self
    {
        $this->forgottenPasswordQuestion2 = $forgottenPasswordQuestion2;

        return $this;
    }

    /**
     * The third challenge question presented to a user who has forgotten their password.
     *
     * @return string
     */
    public function getForgottenPasswordQuestion3(): ?string
    {
        return $this->forgottenPasswordQuestion3;
    }

    /**
     * The third challenge question presented to a user who has forgotten their password.
     *
     * @param string $forgottenPasswordQuestion3
     *
     * @return self
     */
    public function setForgottenPasswordQuestion3(?string $forgottenPasswordQuestion3): self
    {
        $this->forgottenPasswordQuestion3 = $forgottenPasswordQuestion3;

        return $this;
    }

    /**
     * The fourth challenge question presented to a user who has forgotten their password.
     *
     * @return string
     */
    public function getForgottenPasswordQuestion4(): ?string
    {
        return $this->forgottenPasswordQuestion4;
    }

    /**
     * The fourth challenge question presented to a user who has forgotten their password.
     *
     * @param string $forgottenPasswordQuestion4
     *
     * @return self
     */
    public function setForgottenPasswordQuestion4(?string $forgottenPasswordQuestion4): self
    {
        $this->forgottenPasswordQuestion4 = $forgottenPasswordQuestion4;

        return $this;
    }
}
