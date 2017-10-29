<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class RecipientsUpdateSummary
{
    /**
     * @var RecipientUpdateResponse[]
     */
    protected $recipientUpdateResults;

    /**
     * @return RecipientUpdateResponse[]
     */
    public function getRecipientUpdateResults()
    {
        return $this->recipientUpdateResults;
    }

    /**
     * @param RecipientUpdateResponse[] $recipientUpdateResults
     *
     * @return self
     */
    public function setRecipientUpdateResults(array $recipientUpdateResults = null)
    {
        $this->recipientUpdateResults = $recipientUpdateResults;

        return $this;
    }
}
