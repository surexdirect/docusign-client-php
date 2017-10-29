<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class EnvelopeAuditEvent
{
    /**
     * @var NameValue[]
     */
    protected $eventFields;

    /**
     * @return NameValue[]
     */
    public function getEventFields()
    {
        return $this->eventFields;
    }

    /**
     * @param NameValue[] $eventFields
     *
     * @return self
     */
    public function setEventFields(array $eventFields = null)
    {
        $this->eventFields = $eventFields;

        return $this;
    }
}
