<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class EnvelopeAuditEvent
{
    /**
     * @var NameValue[]
     */
    protected $eventFields;

    /**
     * @return NameValue[]
     */
    public function getEventFields(): ?array
    {
        return $this->eventFields;
    }

    /**
     * @param NameValue[] $eventFields
     *
     * @return self
     */
    public function setEventFields(?array $eventFields): self
    {
        $this->eventFields = $eventFields;

        return $this;
    }
}
