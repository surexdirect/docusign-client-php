<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class ListItem
{
    /**
     * @var string
     */
    protected $selected;
    /**
     * @var string
     */
    protected $text;
    /**
     * @var string
     */
    protected $value;

    /**
     * @return string
     */
    public function getSelected()
    {
        return $this->selected;
    }

    /**
     * @param string $selected
     *
     * @return self
     */
    public function setSelected($selected = null)
    {
        $this->selected = $selected;

        return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     *
     * @return self
     */
    public function setText($text = null)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     *
     * @return self
     */
    public function setValue($value = null)
    {
        $this->value = $value;

        return $this;
    }
}
