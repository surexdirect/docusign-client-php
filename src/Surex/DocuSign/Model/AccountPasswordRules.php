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
    public function getExpirePassword(): ?string
    {
        return $this->expirePassword;
    }

    /**
     * @param string $expirePassword
     *
     * @return self
     */
    public function setExpirePassword(?string $expirePassword): self
    {
        $this->expirePassword = $expirePassword;

        return $this;
    }

    /**
     * @return string
     */
    public function getExpirePasswordDays(): ?string
    {
        return $this->expirePasswordDays;
    }

    /**
     * @param string $expirePasswordDays
     *
     * @return self
     */
    public function setExpirePasswordDays(?string $expirePasswordDays): self
    {
        $this->expirePasswordDays = $expirePasswordDays;

        return $this;
    }

    /**
     * @return AccountPasswordExpirePasswordDays
     */
    public function getExpirePasswordDaysMetadata(): ?AccountPasswordExpirePasswordDays
    {
        return $this->expirePasswordDaysMetadata;
    }

    /**
     * @param AccountPasswordExpirePasswordDays $expirePasswordDaysMetadata
     *
     * @return self
     */
    public function setExpirePasswordDaysMetadata(?AccountPasswordExpirePasswordDays $expirePasswordDaysMetadata): self
    {
        $this->expirePasswordDaysMetadata = $expirePasswordDaysMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getLockoutDurationMinutes(): ?string
    {
        return $this->lockoutDurationMinutes;
    }

    /**
     * @param string $lockoutDurationMinutes
     *
     * @return self
     */
    public function setLockoutDurationMinutes(?string $lockoutDurationMinutes): self
    {
        $this->lockoutDurationMinutes = $lockoutDurationMinutes;

        return $this;
    }

    /**
     * @return AccountPasswordLockoutDurationMinutes
     */
    public function getLockoutDurationMinutesMetadata(): ?AccountPasswordLockoutDurationMinutes
    {
        return $this->lockoutDurationMinutesMetadata;
    }

    /**
     * @param AccountPasswordLockoutDurationMinutes $lockoutDurationMinutesMetadata
     *
     * @return self
     */
    public function setLockoutDurationMinutesMetadata(?AccountPasswordLockoutDurationMinutes $lockoutDurationMinutesMetadata): self
    {
        $this->lockoutDurationMinutesMetadata = $lockoutDurationMinutesMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getLockoutDurationType(): ?string
    {
        return $this->lockoutDurationType;
    }

    /**
     * @param string $lockoutDurationType
     *
     * @return self
     */
    public function setLockoutDurationType(?string $lockoutDurationType): self
    {
        $this->lockoutDurationType = $lockoutDurationType;

        return $this;
    }

    /**
     * @return AccountPasswordLockoutDurationType
     */
    public function getLockoutDurationTypeMetadata(): ?AccountPasswordLockoutDurationType
    {
        return $this->lockoutDurationTypeMetadata;
    }

    /**
     * @param AccountPasswordLockoutDurationType $lockoutDurationTypeMetadata
     *
     * @return self
     */
    public function setLockoutDurationTypeMetadata(?AccountPasswordLockoutDurationType $lockoutDurationTypeMetadata): self
    {
        $this->lockoutDurationTypeMetadata = $lockoutDurationTypeMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getMinimumPasswordAgeDays(): ?string
    {
        return $this->minimumPasswordAgeDays;
    }

    /**
     * @param string $minimumPasswordAgeDays
     *
     * @return self
     */
    public function setMinimumPasswordAgeDays(?string $minimumPasswordAgeDays): self
    {
        $this->minimumPasswordAgeDays = $minimumPasswordAgeDays;

        return $this;
    }

    /**
     * @return AccountPasswordMinimumPasswordAgeDays
     */
    public function getMinimumPasswordAgeDaysMetadata(): ?AccountPasswordMinimumPasswordAgeDays
    {
        return $this->minimumPasswordAgeDaysMetadata;
    }

    /**
     * @param AccountPasswordMinimumPasswordAgeDays $minimumPasswordAgeDaysMetadata
     *
     * @return self
     */
    public function setMinimumPasswordAgeDaysMetadata(?AccountPasswordMinimumPasswordAgeDays $minimumPasswordAgeDaysMetadata): self
    {
        $this->minimumPasswordAgeDaysMetadata = $minimumPasswordAgeDaysMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getMinimumPasswordLength(): ?string
    {
        return $this->minimumPasswordLength;
    }

    /**
     * @param string $minimumPasswordLength
     *
     * @return self
     */
    public function setMinimumPasswordLength(?string $minimumPasswordLength): self
    {
        $this->minimumPasswordLength = $minimumPasswordLength;

        return $this;
    }

    /**
     * @return AccountMinimumPasswordLength
     */
    public function getMinimumPasswordLengthMetadata(): ?AccountMinimumPasswordLength
    {
        return $this->minimumPasswordLengthMetadata;
    }

    /**
     * @param AccountMinimumPasswordLength $minimumPasswordLengthMetadata
     *
     * @return self
     */
    public function setMinimumPasswordLengthMetadata(?AccountMinimumPasswordLength $minimumPasswordLengthMetadata): self
    {
        $this->minimumPasswordLengthMetadata = $minimumPasswordLengthMetadata;

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

    /**
     * @return string
     */
    public function getPasswordStrengthType(): ?string
    {
        return $this->passwordStrengthType;
    }

    /**
     * @param string $passwordStrengthType
     *
     * @return self
     */
    public function setPasswordStrengthType(?string $passwordStrengthType): self
    {
        $this->passwordStrengthType = $passwordStrengthType;

        return $this;
    }

    /**
     * @return AccountPasswordStrengthType
     */
    public function getPasswordStrengthTypeMetadata(): ?AccountPasswordStrengthType
    {
        return $this->passwordStrengthTypeMetadata;
    }

    /**
     * @param AccountPasswordStrengthType $passwordStrengthTypeMetadata
     *
     * @return self
     */
    public function setPasswordStrengthTypeMetadata(?AccountPasswordStrengthType $passwordStrengthTypeMetadata): self
    {
        $this->passwordStrengthTypeMetadata = $passwordStrengthTypeMetadata;

        return $this;
    }

    /**
     * @return string
     */
    public function getQuestionsRequired(): ?string
    {
        return $this->questionsRequired;
    }

    /**
     * @param string $questionsRequired
     *
     * @return self
     */
    public function setQuestionsRequired(?string $questionsRequired): self
    {
        $this->questionsRequired = $questionsRequired;

        return $this;
    }

    /**
     * @return AccountPasswordQuestionsRequired
     */
    public function getQuestionsRequiredMetadata(): ?AccountPasswordQuestionsRequired
    {
        return $this->questionsRequiredMetadata;
    }

    /**
     * @param AccountPasswordQuestionsRequired $questionsRequiredMetadata
     *
     * @return self
     */
    public function setQuestionsRequiredMetadata(?AccountPasswordQuestionsRequired $questionsRequiredMetadata): self
    {
        $this->questionsRequiredMetadata = $questionsRequiredMetadata;

        return $this;
    }
}
