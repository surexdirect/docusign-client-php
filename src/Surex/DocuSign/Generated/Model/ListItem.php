<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class ListItem
{
    /**
     * When set to **true**, indicates that this item is the default selection shown to a signer.

     Only one selection can be set as the default.
     *
     * @var string
     */
    protected $selected;
    /**
     * Specifies the text that is shown in the dropdown list.
     *
     * @var string
     */
    protected $text;
    /**
     * Specifies the value that is used when the list item is selected.
     *
     * @var string
     */
    protected $value;

    /**
     * When set to **true**, indicates that this item is the default selection shown to a signer.

     Only one selection can be set as the default.
     *
     * @return string
     */
    public function getSelected(): ?string
    {
        return $this->selected;
    }

    /**
     * When set to **true**, indicates that this item is the default selection shown to a signer.

     Only one selection can be set as the default.
     *
     * @param string $selected
     *
     * @return self
     */
    public function setSelected(?string $selected): self
    {
        $this->selected = $selected;

        return $this;
    }

    /**
     * Specifies the text that is shown in the dropdown list.
     *
     * @return string
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * Specifies the text that is shown in the dropdown list.
     *
     * @param string $text
     *
     * @return self
     */
    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Specifies the value that is used when the list item is selected.
     *
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Specifies the value that is used when the list item is selected.
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
