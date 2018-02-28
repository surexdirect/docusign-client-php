<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class CustomFieldsEnvelope
{
    /**
     * An array of list custom fields.
     *
     * @var ListCustomField[]
     */
    protected $listCustomFields;
    /**
     * An array of text custom fields.
     *
     * @var TextCustomField[]
     */
    protected $textCustomFields;

    /**
     * An array of list custom fields.
     *
     * @return ListCustomField[]
     */
    public function getListCustomFields(): ?array
    {
        return $this->listCustomFields;
    }

    /**
     * An array of list custom fields.
     *
     * @param ListCustomField[] $listCustomFields
     *
     * @return self
     */
    public function setListCustomFields(?array $listCustomFields): self
    {
        $this->listCustomFields = $listCustomFields;

        return $this;
    }

    /**
     * An array of text custom fields.
     *
     * @return TextCustomField[]
     */
    public function getTextCustomFields(): ?array
    {
        return $this->textCustomFields;
    }

    /**
     * An array of text custom fields.
     *
     * @param TextCustomField[] $textCustomFields
     *
     * @return self
     */
    public function setTextCustomFields(?array $textCustomFields): self
    {
        $this->textCustomFields = $textCustomFields;

        return $this;
    }
}
