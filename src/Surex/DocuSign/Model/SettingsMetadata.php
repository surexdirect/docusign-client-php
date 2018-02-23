<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class SettingsMetadata
{
    /**
     * When set to **true**, indicates that this module is enabled on the account.
     *
     * @var string
     */
    protected $is21CFRPart11;
    /**
     * @var string[]
     */
    protected $options;
    /**
     * @var string
     */
    protected $rights;
    /**
     * @var string
     */
    protected $uiHint;
    /**
     * @var string
     */
    protected $uiOrder;
    /**
     * @var string
     */
    protected $uiType;

    /**
     * When set to **true**, indicates that this module is enabled on the account.
     *
     * @return string
     */
    public function getIs21CFRPart11(): ?string
    {
        return $this->is21CFRPart11;
    }

    /**
     * When set to **true**, indicates that this module is enabled on the account.
     *
     * @param string $is21CFRPart11
     *
     * @return self
     */
    public function setIs21CFRPart11(?string $is21CFRPart11): self
    {
        $this->is21CFRPart11 = $is21CFRPart11;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getOptions(): ?array
    {
        return $this->options;
    }

    /**
     * @param string[] $options
     *
     * @return self
     */
    public function setOptions(?array $options): self
    {
        $this->options = $options;

        return $this;
    }

    /**
     * @return string
     */
    public function getRights(): ?string
    {
        return $this->rights;
    }

    /**
     * @param string $rights
     *
     * @return self
     */
    public function setRights(?string $rights): self
    {
        $this->rights = $rights;

        return $this;
    }

    /**
     * @return string
     */
    public function getUiHint(): ?string
    {
        return $this->uiHint;
    }

    /**
     * @param string $uiHint
     *
     * @return self
     */
    public function setUiHint(?string $uiHint): self
    {
        $this->uiHint = $uiHint;

        return $this;
    }

    /**
     * @return string
     */
    public function getUiOrder(): ?string
    {
        return $this->uiOrder;
    }

    /**
     * @param string $uiOrder
     *
     * @return self
     */
    public function setUiOrder(?string $uiOrder): self
    {
        $this->uiOrder = $uiOrder;

        return $this;
    }

    /**
     * @return string
     */
    public function getUiType(): ?string
    {
        return $this->uiType;
    }

    /**
     * @param string $uiType
     *
     * @return self
     */
    public function setUiType(?string $uiType): self
    {
        $this->uiType = $uiType;

        return $this;
    }
}
