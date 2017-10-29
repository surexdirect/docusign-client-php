<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class AccountPasswordStrengthTypeOption
{
    /**
     * @var string
     */
    protected $minimumLength;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $passwordIncludeDigit;
    /**
     * @var string
     */
    protected $passwordIncludeDigitOrSpecialCharacter;
    /**
     * @var string
     */
    protected $passwordIncludeLowerCase;
    /**
     * @var string
     */
    protected $passwordIncludeSpecialCharacter;
    /**
     * @var string
     */
    protected $passwordIncludeUpperCase;

    /**
     * @return string
     */
    public function getMinimumLength()
    {
        return $this->minimumLength;
    }

    /**
     * @param string $minimumLength
     *
     * @return self
     */
    public function setMinimumLength($minimumLength = null)
    {
        $this->minimumLength = $minimumLength;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getPasswordIncludeDigit()
    {
        return $this->passwordIncludeDigit;
    }

    /**
     * @param string $passwordIncludeDigit
     *
     * @return self
     */
    public function setPasswordIncludeDigit($passwordIncludeDigit = null)
    {
        $this->passwordIncludeDigit = $passwordIncludeDigit;

        return $this;
    }

    /**
     * @return string
     */
    public function getPasswordIncludeDigitOrSpecialCharacter()
    {
        return $this->passwordIncludeDigitOrSpecialCharacter;
    }

    /**
     * @param string $passwordIncludeDigitOrSpecialCharacter
     *
     * @return self
     */
    public function setPasswordIncludeDigitOrSpecialCharacter($passwordIncludeDigitOrSpecialCharacter = null)
    {
        $this->passwordIncludeDigitOrSpecialCharacter = $passwordIncludeDigitOrSpecialCharacter;

        return $this;
    }

    /**
     * @return string
     */
    public function getPasswordIncludeLowerCase()
    {
        return $this->passwordIncludeLowerCase;
    }

    /**
     * @param string $passwordIncludeLowerCase
     *
     * @return self
     */
    public function setPasswordIncludeLowerCase($passwordIncludeLowerCase = null)
    {
        $this->passwordIncludeLowerCase = $passwordIncludeLowerCase;

        return $this;
    }

    /**
     * @return string
     */
    public function getPasswordIncludeSpecialCharacter()
    {
        return $this->passwordIncludeSpecialCharacter;
    }

    /**
     * @param string $passwordIncludeSpecialCharacter
     *
     * @return self
     */
    public function setPasswordIncludeSpecialCharacter($passwordIncludeSpecialCharacter = null)
    {
        $this->passwordIncludeSpecialCharacter = $passwordIncludeSpecialCharacter;

        return $this;
    }

    /**
     * @return string
     */
    public function getPasswordIncludeUpperCase()
    {
        return $this->passwordIncludeUpperCase;
    }

    /**
     * @param string $passwordIncludeUpperCase
     *
     * @return self
     */
    public function setPasswordIncludeUpperCase($passwordIncludeUpperCase = null)
    {
        $this->passwordIncludeUpperCase = $passwordIncludeUpperCase;

        return $this;
    }
}
