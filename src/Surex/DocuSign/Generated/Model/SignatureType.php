<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class SignatureType
{
    /**
     * @var string
     */
    protected $isDefault;
    /**
     * Type of the user. Valid values: type_owner, type_participant.
     *
     * @var string
     */
    protected $type;

    /**
     * @return string
     */
    public function getIsDefault(): ?string
    {
        return $this->isDefault;
    }

    /**
     * @param string $isDefault
     *
     * @return self
     */
    public function setIsDefault(?string $isDefault): self
    {
        $this->isDefault = $isDefault;

        return $this;
    }

    /**
     * Type of the user. Valid values: type_owner, type_participant.
     *
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Type of the user. Valid values: type_owner, type_participant.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
