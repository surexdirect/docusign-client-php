<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class BulkRecipient
{
    /**
     * If a value is provided, the recipient must enter the value as the access code to view and sign the envelope.

     Maximum Length: 50 characters and it must conform to the account's access code format setting.

     If blank, but the signer `accessCode` property is set in the envelope, then that value is used.

     If blank and the signer `accessCode` property is not set, then the access code is not required.
     *
     * @var string
     */
    protected $accessCode;
    /**
     * Specifies the recipient's email address.

     Maximum length: 100 characters.
     *
     * @var string
     */
    protected $email;
    /**
     * Array or errors.
     *
     * @var ErrorDetails[]
     */
    protected $errorDetails;
    /**
     * Specifies the authentication check used for the signer. If blank then no authentication check is required for the signer. Only one value can be used in this field.

     The acceptable values are:

     * KBA: Enables the normal ID check authentication set up for your account.
     * Phone: Enables phone authentication.
     * SMS: Enables SMS authentication.
     *
     * @var string
     */
    protected $identification;
    /**
     * Specifies the recipient's name.

     Maximum length: 50 characters.
     *
     * @var string
     */
    protected $name;
    /**
     * A note sent to the recipient in the signing email.
     This note is unique to this recipient.
     In the user interface,
     it appears near the upper left corner
     of the document
     on the signing screen.

     Maximum Length: 1000 characters.

     *
     * @var string
     */
    protected $note;
    /**
     * This is only used if the Identification field value is Phone or SMS. The value for this field can be a valid telephone number or, if Phone, usersupplied (SMS authentication cannot use a user supplied number). Parenthesis and dashes can be used in the telephone number.

     If `usersupplied` is used, the signer supplies his or her own telephone number.
     *
     * @var string
     */
    protected $phoneNumber;
    /**
     * @var BulkRecipientSignatureProvider[]
     */
    protected $recipientSignatureProviderInfo;
    /**
     * @var string
     */
    protected $rowNumber;
    /**
     * Specifies values used to populate recipient tabs with information. This allows each bulk recipient signer to have different values for their associated tabs. Any number of `tabLabel` columns can be added to the bulk recipient file.

     The information used in the bulk recipient file header must be the same as the `tabLabel` for the tab.

     The values entered in this column are automatically inserted into the corresponding tab for the recipient in the same row.

     Note that this option cannot be used for tabs that do not have data or that are automatically populated data such as Signature, Full Name, Email Address, Company, Title, and Date Signed tabs.
     *
     * @var BulkRecipientTabLabel[]
     */
    protected $tabLabels;

    /**
     * If a value is provided, the recipient must enter the value as the access code to view and sign the envelope.

     Maximum Length: 50 characters and it must conform to the account's access code format setting.

     If blank, but the signer `accessCode` property is set in the envelope, then that value is used.

     If blank and the signer `accessCode` property is not set, then the access code is not required.
     *
     * @return string
     */
    public function getAccessCode(): ?string
    {
        return $this->accessCode;
    }

    /**
     * If a value is provided, the recipient must enter the value as the access code to view and sign the envelope.

     Maximum Length: 50 characters and it must conform to the account's access code format setting.

     If blank, but the signer `accessCode` property is set in the envelope, then that value is used.

     If blank and the signer `accessCode` property is not set, then the access code is not required.
     *
     * @param string $accessCode
     *
     * @return self
     */
    public function setAccessCode(?string $accessCode): self
    {
        $this->accessCode = $accessCode;

        return $this;
    }

    /**
     * Specifies the recipient's email address.

     Maximum length: 100 characters.
     *
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Specifies the recipient's email address.

     Maximum length: 100 characters.
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

    /**
     * Array or errors.
     *
     * @return ErrorDetails[]
     */
    public function getErrorDetails(): ?array
    {
        return $this->errorDetails;
    }

    /**
     * Array or errors.
     *
     * @param ErrorDetails[] $errorDetails
     *
     * @return self
     */
    public function setErrorDetails(?array $errorDetails): self
    {
        $this->errorDetails = $errorDetails;

        return $this;
    }

    /**
     * Specifies the authentication check used for the signer. If blank then no authentication check is required for the signer. Only one value can be used in this field.

     The acceptable values are:

     * KBA: Enables the normal ID check authentication set up for your account.
     * Phone: Enables phone authentication.
     * SMS: Enables SMS authentication.
     *
     * @return string
     */
    public function getIdentification(): ?string
    {
        return $this->identification;
    }

    /**
     * Specifies the authentication check used for the signer. If blank then no authentication check is required for the signer. Only one value can be used in this field.

     The acceptable values are:

     * KBA: Enables the normal ID check authentication set up for your account.
     * Phone: Enables phone authentication.
     * SMS: Enables SMS authentication.
     *
     * @param string $identification
     *
     * @return self
     */
    public function setIdentification(?string $identification): self
    {
        $this->identification = $identification;

        return $this;
    }

    /**
     * Specifies the recipient's name.

     Maximum length: 50 characters.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Specifies the recipient's name.

     Maximum length: 50 characters.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * A note sent to the recipient in the signing email.
     This note is unique to this recipient.
     In the user interface,
     it appears near the upper left corner
     of the document
     on the signing screen.

     Maximum Length: 1000 characters.

     *
     * @return string
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * A note sent to the recipient in the signing email.
     This note is unique to this recipient.
     In the user interface,
     it appears near the upper left corner
     of the document
     on the signing screen.

     Maximum Length: 1000 characters.

     *
     * @param string $note
     *
     * @return self
     */
    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }

    /**
     * This is only used if the Identification field value is Phone or SMS. The value for this field can be a valid telephone number or, if Phone, usersupplied (SMS authentication cannot use a user supplied number). Parenthesis and dashes can be used in the telephone number.

     If `usersupplied` is used, the signer supplies his or her own telephone number.
     *
     * @return string
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    /**
     * This is only used if the Identification field value is Phone or SMS. The value for this field can be a valid telephone number or, if Phone, usersupplied (SMS authentication cannot use a user supplied number). Parenthesis and dashes can be used in the telephone number.

     If `usersupplied` is used, the signer supplies his or her own telephone number.
     *
     * @param string $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber(?string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * @return BulkRecipientSignatureProvider[]
     */
    public function getRecipientSignatureProviderInfo(): ?array
    {
        return $this->recipientSignatureProviderInfo;
    }

    /**
     * @param BulkRecipientSignatureProvider[] $recipientSignatureProviderInfo
     *
     * @return self
     */
    public function setRecipientSignatureProviderInfo(?array $recipientSignatureProviderInfo): self
    {
        $this->recipientSignatureProviderInfo = $recipientSignatureProviderInfo;

        return $this;
    }

    /**
     * @return string
     */
    public function getRowNumber(): ?string
    {
        return $this->rowNumber;
    }

    /**
     * @param string $rowNumber
     *
     * @return self
     */
    public function setRowNumber(?string $rowNumber): self
    {
        $this->rowNumber = $rowNumber;

        return $this;
    }

    /**
     * Specifies values used to populate recipient tabs with information. This allows each bulk recipient signer to have different values for their associated tabs. Any number of `tabLabel` columns can be added to the bulk recipient file.

     The information used in the bulk recipient file header must be the same as the `tabLabel` for the tab.

     The values entered in this column are automatically inserted into the corresponding tab for the recipient in the same row.

     Note that this option cannot be used for tabs that do not have data or that are automatically populated data such as Signature, Full Name, Email Address, Company, Title, and Date Signed tabs.
     *
     * @return BulkRecipientTabLabel[]
     */
    public function getTabLabels(): ?array
    {
        return $this->tabLabels;
    }

    /**
     * Specifies values used to populate recipient tabs with information. This allows each bulk recipient signer to have different values for their associated tabs. Any number of `tabLabel` columns can be added to the bulk recipient file.

     The information used in the bulk recipient file header must be the same as the `tabLabel` for the tab.

     The values entered in this column are automatically inserted into the corresponding tab for the recipient in the same row.

     Note that this option cannot be used for tabs that do not have data or that are automatically populated data such as Signature, Full Name, Email Address, Company, Title, and Date Signed tabs.
     *
     * @param BulkRecipientTabLabel[] $tabLabels
     *
     * @return self
     */
    public function setTabLabels(?array $tabLabels): self
    {
        $this->tabLabels = $tabLabels;

        return $this;
    }
}
