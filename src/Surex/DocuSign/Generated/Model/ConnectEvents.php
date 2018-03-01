<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class ConnectEvents
{
    /**
     * An array of containing failure information from the Connect failure log.
     *
     * @var ConnectLog[]
     */
    protected $failures;
    /**
     * A complex type containing Connect log information. It is divided into two sections, one for regular logs and one for Connect failures.
     *
     * @var ConnectLog[]
     */
    protected $logs;
    /**
     * Record count.
     *
     * @var string
     */
    protected $totalRecords;
    /**
     * Type of the user. Valid values: type_owner, type_participant.
     *
     * @var string
     */
    protected $type;

    /**
     * An array of containing failure information from the Connect failure log.
     *
     * @return ConnectLog[]
     */
    public function getFailures(): ?array
    {
        return $this->failures;
    }

    /**
     * An array of containing failure information from the Connect failure log.
     *
     * @param ConnectLog[] $failures
     *
     * @return self
     */
    public function setFailures(?array $failures): self
    {
        $this->failures = $failures;

        return $this;
    }

    /**
     * A complex type containing Connect log information. It is divided into two sections, one for regular logs and one for Connect failures.
     *
     * @return ConnectLog[]
     */
    public function getLogs(): ?array
    {
        return $this->logs;
    }

    /**
     * A complex type containing Connect log information. It is divided into two sections, one for regular logs and one for Connect failures.
     *
     * @param ConnectLog[] $logs
     *
     * @return self
     */
    public function setLogs(?array $logs): self
    {
        $this->logs = $logs;

        return $this;
    }

    /**
     * Record count.
     *
     * @return string
     */
    public function getTotalRecords(): ?string
    {
        return $this->totalRecords;
    }

    /**
     * Record count.
     *
     * @param string $totalRecords
     *
     * @return self
     */
    public function setTotalRecords(?string $totalRecords): self
    {
        $this->totalRecords = $totalRecords;

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
