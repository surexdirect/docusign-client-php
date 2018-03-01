<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class BccEmailAddress
{
    /**
     * Only users with canManageAccount setting can use this option. An array of up to 5 email addresses the envelope is sent to as a BCC email.

     Example: If your account has BCC for Email Archive set up for the email address 'archive@mycompany.com' and you send an envelope using the BCC Email Override to send a BCC email to 'salesarchive@mycompany.com', then a copy of the envelope is only sent to the 'salesarchive@mycompany.com' email address.
     *
     * @var string
     */
    protected $bccEmailAddressId;
    /**
     * Specifies the BCC email address. DocuSign verifies that the email format is correct, but does not verify that the email is active.Using this overrides the BCC for Email Archive information setting for this envelope.

     Maximum of length: 100 characters.
     *
     * @var string
     */
    protected $email;

    /**
     * Only users with canManageAccount setting can use this option. An array of up to 5 email addresses the envelope is sent to as a BCC email.

     Example: If your account has BCC for Email Archive set up for the email address 'archive@mycompany.com' and you send an envelope using the BCC Email Override to send a BCC email to 'salesarchive@mycompany.com', then a copy of the envelope is only sent to the 'salesarchive@mycompany.com' email address.
     *
     * @return string
     */
    public function getBccEmailAddressId(): ?string
    {
        return $this->bccEmailAddressId;
    }

    /**
     * Only users with canManageAccount setting can use this option. An array of up to 5 email addresses the envelope is sent to as a BCC email.

     Example: If your account has BCC for Email Archive set up for the email address 'archive@mycompany.com' and you send an envelope using the BCC Email Override to send a BCC email to 'salesarchive@mycompany.com', then a copy of the envelope is only sent to the 'salesarchive@mycompany.com' email address.
     *
     * @param string $bccEmailAddressId
     *
     * @return self
     */
    public function setBccEmailAddressId(?string $bccEmailAddressId): self
    {
        $this->bccEmailAddressId = $bccEmailAddressId;

        return $this;
    }

    /**
     * Specifies the BCC email address. DocuSign verifies that the email format is correct, but does not verify that the email is active.Using this overrides the BCC for Email Archive information setting for this envelope.

     Maximum of length: 100 characters.
     *
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Specifies the BCC email address. DocuSign verifies that the email format is correct, but does not verify that the email is active.Using this overrides the BCC for Email Archive information setting for this envelope.

     Maximum of length: 100 characters.
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }
}
