<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class ContactUpdateResponse
{
    /**
     * @var Contacts[]
     */
    protected $contacts;

    /**
     * @return Contacts[]
     */
    public function getContacts(): ?array
    {
        return $this->contacts;
    }

    /**
     * @param Contacts[] $contacts
     *
     * @return self
     */
    public function setContacts(?array $contacts): self
    {
        $this->contacts = $contacts;

        return $this;
    }
}
