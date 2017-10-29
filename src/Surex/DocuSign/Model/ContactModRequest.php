<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class ContactModRequest
{
    /**
     * @var Contacts[]
     */
    protected $contacts;

    /**
     * @return Contacts[]
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * @param Contacts[] $contacts
     *
     * @return self
     */
    public function setContacts(array $contacts = null)
    {
        $this->contacts = $contacts;

        return $this;
    }
}
