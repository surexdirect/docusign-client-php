<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class EnvelopeAuditEventResponse
{
    /**
     * Reserved: TBD.
     *
     * @var EnvelopeAuditEvent[]
     */
    protected $auditEvents;

    /**
     * Reserved: TBD.
     *
     * @return EnvelopeAuditEvent[]
     */
    public function getAuditEvents(): ?array
    {
        return $this->auditEvents;
    }

    /**
     * Reserved: TBD.
     *
     * @param EnvelopeAuditEvent[] $auditEvents
     *
     * @return self
     */
    public function setAuditEvents(?array $auditEvents): self
    {
        $this->auditEvents = $auditEvents;

        return $this;
    }
}
