<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class ApiRequestLog
{
    /**
     * Indicates the date and time the item was created.
     *
     * @var string
     */
    protected $createdDateTime;
    /**
     * A sender-defined description of the line item.
     *
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $requestLogId;
    /**
     * Indicates the envelope status. Valid values are:.

     * sent - The envelope is sent to the recipients.
     * created - The envelope is saved as a draft and can be modified and sent later.
     *
     * @var string
     */
    protected $status;

    /**
     * Indicates the date and time the item was created.
     *
     * @return string
     */
    public function getCreatedDateTime(): ?string
    {
        return $this->createdDateTime;
    }

    /**
     * Indicates the date and time the item was created.
     *
     * @param string $createdDateTime
     *
     * @return self
     */
    public function setCreatedDateTime(?string $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;

        return $this;
    }

    /**
     * A sender-defined description of the line item.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * A sender-defined description of the line item.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getRequestLogId(): ?string
    {
        return $this->requestLogId;
    }

    /**
     * @param string $requestLogId
     *
     * @return self
     */
    public function setRequestLogId(?string $requestLogId): self
    {
        $this->requestLogId = $requestLogId;

        return $this;
    }

    /**
     * Indicates the envelope status. Valid values are:.

     * sent - The envelope is sent to the recipients.
     * created - The envelope is saved as a draft and can be modified and sent later.
     *
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Indicates the envelope status. Valid values are:.

     * sent - The envelope is sent to the recipients.
     * created - The envelope is saved as a draft and can be modified and sent later.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
