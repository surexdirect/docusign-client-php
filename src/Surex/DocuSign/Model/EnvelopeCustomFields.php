<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class EnvelopeCustomFields
{
    /**
     * @var ListCustomField[]
     */
    protected $listCustomFields;
    /**
     * @var TextCustomField[]
     */
    protected $textCustomFields;

    /**
     * @return ListCustomField[]
     */
    public function getListCustomFields()
    {
        return $this->listCustomFields;
    }

    /**
     * @param ListCustomField[] $listCustomFields
     *
     * @return self
     */
    public function setListCustomFields(array $listCustomFields = null)
    {
        $this->listCustomFields = $listCustomFields;

        return $this;
    }

    /**
     * @return TextCustomField[]
     */
    public function getTextCustomFields()
    {
        return $this->textCustomFields;
    }

    /**
     * @param TextCustomField[] $textCustomFields
     *
     * @return self
     */
    public function setTextCustomFields(array $textCustomFields = null)
    {
        $this->textCustomFields = $textCustomFields;

        return $this;
    }
}
