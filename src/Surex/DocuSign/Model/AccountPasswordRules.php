<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class AccountPasswordRules
{
    /**
     * @var string
     */
    protected $expirePassword;
    /**
     * @var string
     */
    protected $expirePasswordDays;
    /**
     * @var AccountPasswordExpirePasswordDays
     */
    protected $expirePasswordDaysMetadata;
    /**
     * @var string
     */
    protected $lockoutDurationMinutes;
    /**
     * @var AccountPasswordLockoutDurationMinutes
     */
    protected $lockoutDurationMinutesMetadata;
    /**
     * @var string
     */
    protected $lockoutDurationType;
    /**
     * @var AccountPasswordLockoutDurationType
     */
    protected $lockoutDurationTypeMetadata;
    /**
     * @var string
     */
    protected $minimumPasswordAgeDays;
    /**
     * @var AccountPasswordMinimumPasswordAgeDays
     */
    protected $minimumPasswordAgeDaysMetadata;
    /**
     * @var string
     */
    protected $minimumPasswordLength;
    /**
     * @var AccountMinimumPasswordLength
     */
    protected $minimumPasswordLengthMetadata;
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
     * @var string
     */
    protected $passwordStrengthType;
    /**
     * @var AccountPasswordStrengthType
     */
    protected $passwordStrengthTypeMetadata;
    /**
     * @var string
     */
    protected $questionsRequired;
    /**
     * @var AccountPasswordQuestionsRequired
     */
    protected $questionsRequiredMetadata;

    /**
     * @return string
     */
    public function getExpirePassword()
    {
        return $this->expirePassword;
    }

    /**
     * @param string $expirePassword
     *
     * @return self
     */
    public function setExpirePassword($expirePassword = null)
    {
        $this->expirePassword = $expirePassword;

        return $this;
    }

    /**
     * @return string
     */
    public function getExpirePasswordDays()
    {
        return $this->expirePasswordDays;
    }

    /**
     * @param string $expirePasswordDays
     *
     * @return self
     */
    public function setExpirePasswordDays($expirePasswordDays = null)
    {
        $this->expirePasswordDays = $expirePasswordDays;

        return $this;
    }

    /**
     * @return AccountPasswordExpirePasswordDays
     */
    public function getExpirePasswordDaysMetadata()
    {
        return $this->expirePasswordDaysMetadata;
    }

    /**
     * @param AccountPasswordExpirePasswordDays $expirePasswordDaysMetadata
     *
     * @return self
     */
    public function setExpirePasswordDaysMetadata(AccountPasswordExpirePasswordDays $expirePasswordDaysMetadata = null)
    {
        $this->expirePasswordDaysMetadata = $expirePasswordDaysMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getLockoutDurationMinutes()
    {
        return $this->lockoutDurationMinutes;
    }

    /**
     * @param string $lockoutDurationMinutes
     *
     * @return self
     */
    public function setLockoutDurationMinutes($lockoutDurationMinutes = null)
    {
        $this->lockoutDurationMinutes = $lockoutDurationMinutes;

        return $this;
    }

    /**
     * @return AccountPasswordLockoutDurationMinutes
     */
    public function getLockoutDurationMinutesMetadata()
    {
        return $this->lockoutDurationMinutesMetadata;
    }

    /**
     * @param AccountPasswordLockoutDurationMinutes $lockoutDurationMinutesMetadata
     *
     * @return self
     */
    public function setLockoutDurationMinutesMetadata(AccountPasswordLockoutDurationMinutes $lockoutDurationMinutesMetadata = null)
    {
        $this->lockoutDurationMinutesMetadata = $lockoutDurationMinutesMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getLockoutDurationType()
    {
        return $this->lockoutDurationType;
    }

    /**
     * @param string $lockoutDurationType
     *
     * @return self
     */
    public function setLockoutDurationType($lockoutDurationType = null)
    {
        $this->lockoutDurationType = $lockoutDurationType;

        return $this;
    }

    /**
     * @return AccountPasswordLockoutDurationType
     */
    public function getLockoutDurationTypeMetadata()
    {
        return $this->lockoutDurationTypeMetadata;
    }

    /**
     * @param AccountPasswordLockoutDurationType $lockoutDurationTypeMetadata
     *
     * @return self
     */
    public function setLockoutDurationTypeMetadata(AccountPasswordLockoutDurationType $lockoutDurationTypeMetadata = null)
    {
        $this->lockoutDurationTypeMetadata = $lockoutDurationTypeMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getMinimumPasswordAgeDays()
    {
        return $this->minimumPasswordAgeDays;
    }

    /**
     * @param string $minimumPasswordAgeDays
     *
     * @return self
     */
    public function setMinimumPasswordAgeDays($minimumPasswordAgeDays = null)
    {
        $this->minimumPasswordAgeDays = $minimumPasswordAgeDays;

        return $this;
    }

    /**
     * @return AccountPasswordMinimumPasswordAgeDays
     */
    public function getMinimumPasswordAgeDaysMetadata()
    {
        return $this->minimumPasswordAgeDaysMetadata;
    }

    /**
     * @param AccountPasswordMinimumPasswordAgeDays $minimumPasswordAgeDaysMetadata
     *
     * @return self
     */
    public function setMinimumPasswordAgeDaysMetadata(AccountPasswordMinimumPasswordAgeDays $minimumPasswordAgeDaysMetadata = null)
    {
        $this->minimumPasswordAgeDaysMetadata = $minimumPasswordAgeDaysMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getMinimumPasswordLength()
    {
        return $this->minimumPasswordLength;
    }

    /**
     * @param string $minimumPasswordLength
     *
     * @return self
     */
    public function setMinimumPasswordLength($minimumPasswordLength = null)
    {
        $this->minimumPasswordLength = $minimumPasswordLength;

        return $this;
    }

    /**
     * @return AccountMinimumPasswordLength
     */
    public function getMinimumPasswordLengthMetadata()
    {
        return $this->minimumPasswordLengthMetadata;
    }

    /**
     * @param AccountMinimumPasswordLength $minimumPasswordLengthMetadata
     *
     * @return self
     */
    public function setMinimumPasswordLengthMetadata(AccountMinimumPasswordLength $minimumPasswordLengthMetadata = null)
    {
        $this->minimumPasswordLengthMetadata = $minimumPasswordLengthMetadata;

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

    /**
     * @return string
     */
    public function getPasswordStrengthType()
    {
        return $this->passwordStrengthType;
    }

    /**
     * @param string $passwordStrengthType
     *
     * @return self
     */
    public function setPasswordStrengthType($passwordStrengthType = null)
    {
        $this->passwordStrengthType = $passwordStrengthType;

        return $this;
    }

    /**
     * @return AccountPasswordStrengthType
     */
    public function getPasswordStrengthTypeMetadata()
    {
        return $this->passwordStrengthTypeMetadata;
    }

    /**
     * @param AccountPasswordStrengthType $passwordStrengthTypeMetadata
     *
     * @return self
     */
    public function setPasswordStrengthTypeMetadata(AccountPasswordStrengthType $passwordStrengthTypeMetadata = null)
    {
        $this->passwordStrengthTypeMetadata = $passwordStrengthTypeMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getQuestionsRequired()
    {
        return $this->questionsRequired;
    }

    /**
     * @param string $questionsRequired
     *
     * @return self
     */
    public function setQuestionsRequired($questionsRequired = null)
    {
        $this->questionsRequired = $questionsRequired;

        return $this;
    }

    /**
     * @return AccountPasswordQuestionsRequired
     */
    public function getQuestionsRequiredMetadata()
    {
        return $this->questionsRequiredMetadata;
    }

    /**
     * @param AccountPasswordQuestionsRequired $questionsRequiredMetadata
     *
     * @return self
     */
    public function setQuestionsRequiredMetadata(AccountPasswordQuestionsRequired $questionsRequiredMetadata = null)
    {
        $this->questionsRequiredMetadata = $questionsRequiredMetadata;

        return $this;
    }
}
