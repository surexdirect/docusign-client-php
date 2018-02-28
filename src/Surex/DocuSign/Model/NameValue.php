<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class NameValue
{
    /**
     * This object describes errors that occur. It is only valid for responses, and ignored in requests.
     *
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * The name or key of a name/value pair.
     *
     * @var string
     */
    protected $name;
    /**
     * The initial value of the tab when it was sent to the recipient.
     *
     * @var string
     */
    protected $originalValue;
    /**
     * The value field of a name/value pair.
     *
     * @var string
     */
    protected $value;

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
     * The name or key of a name/value pair.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The name or key of a name/value pair.
     *
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
     * The initial value of the tab when it was sent to the recipient.
     *
     * @return string
     */
    public function getOriginalValue(): ?string
    {
        return $this->originalValue;
    }

    /**
     * The initial value of the tab when it was sent to the recipient.
     *
     * @param string $originalValue
     *
     * @return self
     */
    public function setOriginalValue(?string $originalValue): self
    {
        $this->originalValue = $originalValue;

        return $this;
    }

    /**
     * The value field of a name/value pair.
     *
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * The value field of a name/value pair.
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }
}
