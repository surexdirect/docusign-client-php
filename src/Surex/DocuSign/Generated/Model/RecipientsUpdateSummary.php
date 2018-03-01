<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class RecipientsUpdateSummary
{
    /**
     * @var RecipientUpdateResponse[]
     */
    protected $recipientUpdateResults;

    /**
     * @return RecipientUpdateResponse[]
     */
    public function getRecipientUpdateResults(): ?array
    {
        return $this->recipientUpdateResults;
    }

    /**
     * @param RecipientUpdateResponse[] $recipientUpdateResults
     *
     * @return self
     */
    public function setRecipientUpdateResults(?array $recipientUpdateResults): self
    {
        $this->recipientUpdateResults = $recipientUpdateResults;

        return $this;
    }
}
