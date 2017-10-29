<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class EnvelopeAuditEventResponse
{
    /**
     * @var EnvelopeAuditEvent[]
     */
    protected $auditEvents;

    /**
     * @return EnvelopeAuditEvent[]
     */
    public function getAuditEvents()
    {
        return $this->auditEvents;
    }

    /**
     * @param EnvelopeAuditEvent[] $auditEvents
     *
     * @return self
     */
    public function setAuditEvents(array $auditEvents = null)
    {
        $this->auditEvents = $auditEvents;

        return $this;
    }
}
