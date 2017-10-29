<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class ForgottenPasswordInformation
{
    /**
     * @var string
     */
    protected $forgottenPasswordAnswer1;
    /**
     * @var string
     */
    protected $forgottenPasswordAnswer2;
    /**
     * @var string
     */
    protected $forgottenPasswordAnswer3;
    /**
     * @var string
     */
    protected $forgottenPasswordAnswer4;
    /**
     * @var string
     */
    protected $forgottenPasswordQuestion1;
    /**
     * @var string
     */
    protected $forgottenPasswordQuestion2;
    /**
     * @var string
     */
    protected $forgottenPasswordQuestion3;
    /**
     * @var string
     */
    protected $forgottenPasswordQuestion4;

    /**
     * @return string
     */
    public function getForgottenPasswordAnswer1()
    {
        return $this->forgottenPasswordAnswer1;
    }

    /**
     * @param string $forgottenPasswordAnswer1
     *
     * @return self
     */
    public function setForgottenPasswordAnswer1($forgottenPasswordAnswer1 = null)
    {
        $this->forgottenPasswordAnswer1 = $forgottenPasswordAnswer1;

        return $this;
    }

    /**
     * @return string
     */
    public function getForgottenPasswordAnswer2()
    {
        return $this->forgottenPasswordAnswer2;
    }

    /**
     * @param string $forgottenPasswordAnswer2
     *
     * @return self
     */
    public function setForgottenPasswordAnswer2($forgottenPasswordAnswer2 = null)
    {
        $this->forgottenPasswordAnswer2 = $forgottenPasswordAnswer2;

        return $this;
    }

    /**
     * @return string
     */
    public function getForgottenPasswordAnswer3()
    {
        return $this->forgottenPasswordAnswer3;
    }

    /**
     * @param string $forgottenPasswordAnswer3
     *
     * @return self
     */
    public function setForgottenPasswordAnswer3($forgottenPasswordAnswer3 = null)
    {
        $this->forgottenPasswordAnswer3 = $forgottenPasswordAnswer3;

        return $this;
    }

    /**
     * @return string
     */
    public function getForgottenPasswordAnswer4()
    {
        return $this->forgottenPasswordAnswer4;
    }

    /**
     * @param string $forgottenPasswordAnswer4
     *
     * @return self
     */
    public function setForgottenPasswordAnswer4($forgottenPasswordAnswer4 = null)
    {
        $this->forgottenPasswordAnswer4 = $forgottenPasswordAnswer4;

        return $this;
    }

    /**
     * @return string
     */
    public function getForgottenPasswordQuestion1()
    {
        return $this->forgottenPasswordQuestion1;
    }

    /**
     * @param string $forgottenPasswordQuestion1
     *
     * @return self
     */
    public function setForgottenPasswordQuestion1($forgottenPasswordQuestion1 = null)
    {
        $this->forgottenPasswordQuestion1 = $forgottenPasswordQuestion1;

        return $this;
    }

    /**
     * @return string
     */
    public function getForgottenPasswordQuestion2()
    {
        return $this->forgottenPasswordQuestion2;
    }

    /**
     * @param string $forgottenPasswordQuestion2
     *
     * @return self
     */
    public function setForgottenPasswordQuestion2($forgottenPasswordQuestion2 = null)
    {
        $this->forgottenPasswordQuestion2 = $forgottenPasswordQuestion2;

        return $this;
    }

    /**
     * @return string
     */
    public function getForgottenPasswordQuestion3()
    {
        return $this->forgottenPasswordQuestion3;
    }

    /**
     * @param string $forgottenPasswordQuestion3
     *
     * @return self
     */
    public function setForgottenPasswordQuestion3($forgottenPasswordQuestion3 = null)
    {
        $this->forgottenPasswordQuestion3 = $forgottenPasswordQuestion3;

        return $this;
    }

    /**
     * @return string
     */
    public function getForgottenPasswordQuestion4()
    {
        return $this->forgottenPasswordQuestion4;
    }

    /**
     * @param string $forgottenPasswordQuestion4
     *
     * @return self
     */
    public function setForgottenPasswordQuestion4($forgottenPasswordQuestion4 = null)
    {
        $this->forgottenPasswordQuestion4 = $forgottenPasswordQuestion4;

        return $this;
    }
}
