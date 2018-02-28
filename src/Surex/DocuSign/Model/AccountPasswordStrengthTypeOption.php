<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
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
    public function getMinimumLength(): ?string
    {
        return $this->minimumLength;
    }

    /**
     * @param string $minimumLength
     *
     * @return self
     */
    public function setMinimumLength(?string $minimumLength): self
    {
        $this->minimumLength = $minimumLength;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getPasswordIncludeDigit(): ?string
    {
        return $this->passwordIncludeDigit;
    }

    /**
     * @param string $passwordIncludeDigit
     *
     * @return self
     */
    public function setPasswordIncludeDigit(?string $passwordIncludeDigit): self
    {
        $this->passwordIncludeDigit = $passwordIncludeDigit;

        return $this;
    }

    /**
     * @return string
     */
    public function getPasswordIncludeDigitOrSpecialCharacter(): ?string
    {
        return $this->passwordIncludeDigitOrSpecialCharacter;
    }

    /**
     * @param string $passwordIncludeDigitOrSpecialCharacter
     *
     * @return self
     */
    public function setPasswordIncludeDigitOrSpecialCharacter(?string $passwordIncludeDigitOrSpecialCharacter): self
    {
        $this->passwordIncludeDigitOrSpecialCharacter = $passwordIncludeDigitOrSpecialCharacter;

        return $this;
    }

    /**
     * @return string
     */
    public function getPasswordIncludeLowerCase(): ?string
    {
        return $this->passwordIncludeLowerCase;
    }

    /**
     * @param string $passwordIncludeLowerCase
     *
     * @return self
     */
    public function setPasswordIncludeLowerCase(?string $passwordIncludeLowerCase): self
    {
        $this->passwordIncludeLowerCase = $passwordIncludeLowerCase;

        return $this;
    }

    /**
     * @return string
     */
    public function getPasswordIncludeSpecialCharacter(): ?string
    {
        return $this->passwordIncludeSpecialCharacter;
    }

    /**
     * @param string $passwordIncludeSpecialCharacter
     *
     * @return self
     */
    public function setPasswordIncludeSpecialCharacter(?string $passwordIncludeSpecialCharacter): self
    {
        $this->passwordIncludeSpecialCharacter = $passwordIncludeSpecialCharacter;

        return $this;
    }

    /**
     * @return string
     */
    public function getPasswordIncludeUpperCase(): ?string
    {
        return $this->passwordIncludeUpperCase;
    }

    /**
     * @param string $passwordIncludeUpperCase
     *
     * @return self
     */
    public function setPasswordIncludeUpperCase(?string $passwordIncludeUpperCase): self
    {
        $this->passwordIncludeUpperCase = $passwordIncludeUpperCase;

        return $this;
    }
}
