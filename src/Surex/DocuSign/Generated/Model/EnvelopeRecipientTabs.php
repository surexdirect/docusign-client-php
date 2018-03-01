<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class EnvelopeRecipientTabs
{
    /**
     * A tab that allows the recipient to approve documents.
     without placing a signature or initials on the
     document. If the recipient clicks the Approve tab during the signing
     process, the recipient is considered to have signed the document. No
     information is shown on the document for the approval, but it is
     recorded as a signature in the envelope history.

     *
     * @var Approve[]
     */
    protected $approveTabs;
    /**
     * Specifies a tag on the document in a location where the recipient can select an option.
     *
     * @var Checkbox[]
     */
    protected $checkboxTabs;
    /**
     * Specifies a tag on the document where you want the recipient's company name to appear.

     When getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
     *
     * @var Company[]
     */
    protected $companyTabs;
    /**
     * Specifies a tab on the document where the date the document was signed will automatically appear.
     *
     * @var DateSigned[]
     */
    protected $dateSignedTabs;
    /**
     * Specifies a tab on the document where you want the recipient to enter a date. Date tabs are single-line fields that allow date information to be entered in any format. The tooltip for this tab recommends entering the date as MM/DD/YYYY, but this is not enforced. The format entered by the signer is retained.

     If you need a particular date format enforced, DocuSign recommends using a Text tab with a Validation Pattern and Validation Message to enforce the format.
     *
     * @var Date[]
     */
    protected $dateTabs;
    /**
     * Specifies a tag on the document where you want to give the recipient the option of declining an envelope. If the recipient clicks the Decline tag during the signing process, the envelope is voided.
     *
     * @var Decline[]
     */
    protected $declineTabs;
    /**
     * Specifies a location on the document where you want where you want the recipient's email, as entered in the recipient information, to display.
     *
     * @var EmailAddress[]
     */
    protected $emailAddressTabs;
    /**
     * Specifies a tag on the document where you want the recipient to enter an email. Email tags are single-line fields that accept any characters. The system checks that a valid email format (i.e. xxx@yyy.zzz) is entered in the tag. It uses the same parameters as a Text tab, with the validation message and pattern set for email information.

     When getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
     *
     * @var Email[]
     */
    protected $emailTabs;
    /**
     * Specifies a tag on the document where you want the envelope ID for to appear. Recipients cannot enter or change the information in this tab, it is for informational purposes only.
     *
     * @var EnvelopeId[]
     */
    protected $envelopeIdTabs;
    /**
     * Specifies tag on a document where you want the recipient's first name to appear. This tag takes the recipient's name, as entered in the recipient information, splits it into sections based on spaces and uses the first section as the first name.
     *
     * @var FirstName[]
     */
    protected $firstNameTabs;
    /**
     * A list of formula tabs.

     The value of a formula tab is calculated
     from the values of other
     number or date tabs in the document.
     When the recipient completes the underlying fields,
     the formula tab calculates and displays the result.

     The `formula` property of the tab
     contains the references
     to the underlying tabs.
     See [Calculated Fields][calculatedfields]
     in the DocuSign Support Center
     to learn more about formulas.

     If a formula tab contains
     a `paymentDetails` property,
     the tab is considered a payment item.
     See [Requesting Payments Along with Signatures][paymentguide]
     in the DocuSign Support Center
     to learn more about payments.

     [calculatedfields]: https://support.docusign.com/en/guides/ndse-user-guide-calculated-fields
     [paymentguide]:     https://support.docusign.com/en/guides/requesting-payments-along-with-signatures

     *
     * @var FormulaTab[]
     */
    protected $formulaTabs;
    /**
     * Specifies a tag on the document where you want the recipient's name to appear.
     *
     * @var FullName[]
     */
    protected $fullNameTabs;
    /**
     * Specifies a tag location in the document at which a recipient will place their initials. The `optional` parameter specifies whether the initials are required or optional.
     *
     * @var InitialHere[]
     */
    protected $initialHereTabs;
    /**
     * Specifies a tag on a document where you want the recipient's last name to appear. This tag takes the recipient's name, as entered in the recipient information, splits it into sections based on spaces and uses the last section as the last name.
     *
     * @var LastName[]
     */
    protected $lastNameTabs;
    /**
     * Specify this tag to give your recipient a list of options, presented as a drop-down list, from which they can select.
     *
     * @var _List[]
     */
    protected $listTabs;
    /**
     * Specifies a location on the document where you want to place additional information, in the form of a note, for a recipient.
     *
     * @var Note[]
     */
    protected $noteTabs;
    /**
     * Specifies a tag on the document where you want the recipient to enter a number. It uses the same parameters as a Text tab, with the validation message and pattern set for number information.

     When getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
     *
     * @var Number[]
     */
    protected $numberTabs;
    /**
     * Specifies a tag on the document in a location where the recipient can select one option from a group of options using a radio button. The radio buttons do not have to be on the same page in a document.
     *
     * @var RadioGroup[]
     */
    protected $radioGroupTabs;
    /**
     * Specifies a tag on the document when you want the recipient to add supporting documents to an envelope.
     *
     * @var SignerAttachment[]
     */
    protected $signerAttachmentTabs;
    /**
     * A complex type the contains information about the tag that specifies where the recipient places their signature in the document. The "optional" parameter sets if the signature is required or optional.
     *
     * @var SignHere[]
     */
    protected $signHereTabs;
    /**
     * Specifies a tag on the document where you want the recipient to enter a Social Security Number (SSN). A SSN can be typed with or without dashes. It uses the same parameters as a Text tab, with the validation message and pattern set for SSN information.

     When getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
     *
     * @var Ssn[]
     */
    protected $ssnTabs;
    /**
     * Specifies a that that is an adaptable field that allows the recipient to enter different text information.

     When getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
     *
     * @var Text[]
     */
    protected $textTabs;
    /**
     * Specifies a tag on the document where you want the recipient's title to appear.

     When getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
     *
     * @var Title[]
     */
    protected $titleTabs;
    /**
     * @var View[]
     */
    protected $viewTabs;
    /**
     * Specifies a tag on the document where you want the recipient to enter a ZIP code. The ZIP code can be a five numbers or the ZIP+4 format with nine numbers. The zip code can be typed with or without dashes. It uses the same parameters as a Text tab, with the validation message and pattern set for ZIP code information.

     When getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
     *
     * @var Zip[]
     */
    protected $zipTabs;

    /**
     * A tab that allows the recipient to approve documents.
     without placing a signature or initials on the
     document. If the recipient clicks the Approve tab during the signing
     process, the recipient is considered to have signed the document. No
     information is shown on the document for the approval, but it is
     recorded as a signature in the envelope history.

     *
     * @return Approve[]
     */
    public function getApproveTabs(): ?array
    {
        return $this->approveTabs;
    }

    /**
     * A tab that allows the recipient to approve documents.
     without placing a signature or initials on the
     document. If the recipient clicks the Approve tab during the signing
     process, the recipient is considered to have signed the document. No
     information is shown on the document for the approval, but it is
     recorded as a signature in the envelope history.

     *
     * @param Approve[] $approveTabs
     *
     * @return self
     */
    public function setApproveTabs(?array $approveTabs): self
    {
        $this->approveTabs = $approveTabs;

        return $this;
    }

    /**
     * Specifies a tag on the document in a location where the recipient can select an option.
     *
     * @return Checkbox[]
     */
    public function getCheckboxTabs(): ?array
    {
        return $this->checkboxTabs;
    }

    /**
     * Specifies a tag on the document in a location where the recipient can select an option.
     *
     * @param Checkbox[] $checkboxTabs
     *
     * @return self
     */
    public function setCheckboxTabs(?array $checkboxTabs): self
    {
        $this->checkboxTabs = $checkboxTabs;

        return $this;
    }

    /**
     * Specifies a tag on the document where you want the recipient's company name to appear.

     When getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
     *
     * @return Company[]
     */
    public function getCompanyTabs(): ?array
    {
        return $this->companyTabs;
    }

    /**
     * Specifies a tag on the document where you want the recipient's company name to appear.

     When getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
     *
     * @param Company[] $companyTabs
     *
     * @return self
     */
    public function setCompanyTabs(?array $companyTabs): self
    {
        $this->companyTabs = $companyTabs;

        return $this;
    }

    /**
     * Specifies a tab on the document where the date the document was signed will automatically appear.
     *
     * @return DateSigned[]
     */
    public function getDateSignedTabs(): ?array
    {
        return $this->dateSignedTabs;
    }

    /**
     * Specifies a tab on the document where the date the document was signed will automatically appear.
     *
     * @param DateSigned[] $dateSignedTabs
     *
     * @return self
     */
    public function setDateSignedTabs(?array $dateSignedTabs): self
    {
        $this->dateSignedTabs = $dateSignedTabs;

        return $this;
    }

    /**
     * Specifies a tab on the document where you want the recipient to enter a date. Date tabs are single-line fields that allow date information to be entered in any format. The tooltip for this tab recommends entering the date as MM/DD/YYYY, but this is not enforced. The format entered by the signer is retained.

     If you need a particular date format enforced, DocuSign recommends using a Text tab with a Validation Pattern and Validation Message to enforce the format.
     *
     * @return Date[]
     */
    public function getDateTabs(): ?array
    {
        return $this->dateTabs;
    }

    /**
     * Specifies a tab on the document where you want the recipient to enter a date. Date tabs are single-line fields that allow date information to be entered in any format. The tooltip for this tab recommends entering the date as MM/DD/YYYY, but this is not enforced. The format entered by the signer is retained.

     If you need a particular date format enforced, DocuSign recommends using a Text tab with a Validation Pattern and Validation Message to enforce the format.
     *
     * @param Date[] $dateTabs
     *
     * @return self
     */
    public function setDateTabs(?array $dateTabs): self
    {
        $this->dateTabs = $dateTabs;

        return $this;
    }

    /**
     * Specifies a tag on the document where you want to give the recipient the option of declining an envelope. If the recipient clicks the Decline tag during the signing process, the envelope is voided.
     *
     * @return Decline[]
     */
    public function getDeclineTabs(): ?array
    {
        return $this->declineTabs;
    }

    /**
     * Specifies a tag on the document where you want to give the recipient the option of declining an envelope. If the recipient clicks the Decline tag during the signing process, the envelope is voided.
     *
     * @param Decline[] $declineTabs
     *
     * @return self
     */
    public function setDeclineTabs(?array $declineTabs): self
    {
        $this->declineTabs = $declineTabs;

        return $this;
    }

    /**
     * Specifies a location on the document where you want where you want the recipient's email, as entered in the recipient information, to display.
     *
     * @return EmailAddress[]
     */
    public function getEmailAddressTabs(): ?array
    {
        return $this->emailAddressTabs;
    }

    /**
     * Specifies a location on the document where you want where you want the recipient's email, as entered in the recipient information, to display.
     *
     * @param EmailAddress[] $emailAddressTabs
     *
     * @return self
     */
    public function setEmailAddressTabs(?array $emailAddressTabs): self
    {
        $this->emailAddressTabs = $emailAddressTabs;

        return $this;
    }

    /**
     * Specifies a tag on the document where you want the recipient to enter an email. Email tags are single-line fields that accept any characters. The system checks that a valid email format (i.e. xxx@yyy.zzz) is entered in the tag. It uses the same parameters as a Text tab, with the validation message and pattern set for email information.

     When getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
     *
     * @return Email[]
     */
    public function getEmailTabs(): ?array
    {
        return $this->emailTabs;
    }

    /**
     * Specifies a tag on the document where you want the recipient to enter an email. Email tags are single-line fields that accept any characters. The system checks that a valid email format (i.e. xxx@yyy.zzz) is entered in the tag. It uses the same parameters as a Text tab, with the validation message and pattern set for email information.

     When getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
     *
     * @param Email[] $emailTabs
     *
     * @return self
     */
    public function setEmailTabs(?array $emailTabs): self
    {
        $this->emailTabs = $emailTabs;

        return $this;
    }

    /**
     * Specifies a tag on the document where you want the envelope ID for to appear. Recipients cannot enter or change the information in this tab, it is for informational purposes only.
     *
     * @return EnvelopeId[]
     */
    public function getEnvelopeIdTabs(): ?array
    {
        return $this->envelopeIdTabs;
    }

    /**
     * Specifies a tag on the document where you want the envelope ID for to appear. Recipients cannot enter or change the information in this tab, it is for informational purposes only.
     *
     * @param EnvelopeId[] $envelopeIdTabs
     *
     * @return self
     */
    public function setEnvelopeIdTabs(?array $envelopeIdTabs): self
    {
        $this->envelopeIdTabs = $envelopeIdTabs;

        return $this;
    }

    /**
     * Specifies tag on a document where you want the recipient's first name to appear. This tag takes the recipient's name, as entered in the recipient information, splits it into sections based on spaces and uses the first section as the first name.
     *
     * @return FirstName[]
     */
    public function getFirstNameTabs(): ?array
    {
        return $this->firstNameTabs;
    }

    /**
     * Specifies tag on a document where you want the recipient's first name to appear. This tag takes the recipient's name, as entered in the recipient information, splits it into sections based on spaces and uses the first section as the first name.
     *
     * @param FirstName[] $firstNameTabs
     *
     * @return self
     */
    public function setFirstNameTabs(?array $firstNameTabs): self
    {
        $this->firstNameTabs = $firstNameTabs;

        return $this;
    }

    /**
     * A list of formula tabs.

     The value of a formula tab is calculated
     from the values of other
     number or date tabs in the document.
     When the recipient completes the underlying fields,
     the formula tab calculates and displays the result.

     The `formula` property of the tab
     contains the references
     to the underlying tabs.
     See [Calculated Fields][calculatedfields]
     in the DocuSign Support Center
     to learn more about formulas.

     If a formula tab contains
     a `paymentDetails` property,
     the tab is considered a payment item.
     See [Requesting Payments Along with Signatures][paymentguide]
     in the DocuSign Support Center
     to learn more about payments.

     [calculatedfields]: https://support.docusign.com/en/guides/ndse-user-guide-calculated-fields
     [paymentguide]:     https://support.docusign.com/en/guides/requesting-payments-along-with-signatures

     *
     * @return FormulaTab[]
     */
    public function getFormulaTabs(): ?array
    {
        return $this->formulaTabs;
    }

    /**
     * A list of formula tabs.

     The value of a formula tab is calculated
     from the values of other
     number or date tabs in the document.
     When the recipient completes the underlying fields,
     the formula tab calculates and displays the result.

     The `formula` property of the tab
     contains the references
     to the underlying tabs.
     See [Calculated Fields][calculatedfields]
     in the DocuSign Support Center
     to learn more about formulas.

     If a formula tab contains
     a `paymentDetails` property,
     the tab is considered a payment item.
     See [Requesting Payments Along with Signatures][paymentguide]
     in the DocuSign Support Center
     to learn more about payments.

     [calculatedfields]: https://support.docusign.com/en/guides/ndse-user-guide-calculated-fields
     [paymentguide]:     https://support.docusign.com/en/guides/requesting-payments-along-with-signatures

     *
     * @param FormulaTab[] $formulaTabs
     *
     * @return self
     */
    public function setFormulaTabs(?array $formulaTabs): self
    {
        $this->formulaTabs = $formulaTabs;

        return $this;
    }

    /**
     * Specifies a tag on the document where you want the recipient's name to appear.
     *
     * @return FullName[]
     */
    public function getFullNameTabs(): ?array
    {
        return $this->fullNameTabs;
    }

    /**
     * Specifies a tag on the document where you want the recipient's name to appear.
     *
     * @param FullName[] $fullNameTabs
     *
     * @return self
     */
    public function setFullNameTabs(?array $fullNameTabs): self
    {
        $this->fullNameTabs = $fullNameTabs;

        return $this;
    }

    /**
     * Specifies a tag location in the document at which a recipient will place their initials. The `optional` parameter specifies whether the initials are required or optional.
     *
     * @return InitialHere[]
     */
    public function getInitialHereTabs(): ?array
    {
        return $this->initialHereTabs;
    }

    /**
     * Specifies a tag location in the document at which a recipient will place their initials. The `optional` parameter specifies whether the initials are required or optional.
     *
     * @param InitialHere[] $initialHereTabs
     *
     * @return self
     */
    public function setInitialHereTabs(?array $initialHereTabs): self
    {
        $this->initialHereTabs = $initialHereTabs;

        return $this;
    }

    /**
     * Specifies a tag on a document where you want the recipient's last name to appear. This tag takes the recipient's name, as entered in the recipient information, splits it into sections based on spaces and uses the last section as the last name.
     *
     * @return LastName[]
     */
    public function getLastNameTabs(): ?array
    {
        return $this->lastNameTabs;
    }

    /**
     * Specifies a tag on a document where you want the recipient's last name to appear. This tag takes the recipient's name, as entered in the recipient information, splits it into sections based on spaces and uses the last section as the last name.
     *
     * @param LastName[] $lastNameTabs
     *
     * @return self
     */
    public function setLastNameTabs(?array $lastNameTabs): self
    {
        $this->lastNameTabs = $lastNameTabs;

        return $this;
    }

    /**
     * Specify this tag to give your recipient a list of options, presented as a drop-down list, from which they can select.
     *
     * @return _List[]
     */
    public function getListTabs(): ?array
    {
        return $this->listTabs;
    }

    /**
     * Specify this tag to give your recipient a list of options, presented as a drop-down list, from which they can select.
     *
     * @param _List[] $listTabs
     *
     * @return self
     */
    public function setListTabs(?array $listTabs): self
    {
        $this->listTabs = $listTabs;

        return $this;
    }

    /**
     * Specifies a location on the document where you want to place additional information, in the form of a note, for a recipient.
     *
     * @return Note[]
     */
    public function getNoteTabs(): ?array
    {
        return $this->noteTabs;
    }

    /**
     * Specifies a location on the document where you want to place additional information, in the form of a note, for a recipient.
     *
     * @param Note[] $noteTabs
     *
     * @return self
     */
    public function setNoteTabs(?array $noteTabs): self
    {
        $this->noteTabs = $noteTabs;

        return $this;
    }

    /**
     * Specifies a tag on the document where you want the recipient to enter a number. It uses the same parameters as a Text tab, with the validation message and pattern set for number information.

     When getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
     *
     * @return Number[]
     */
    public function getNumberTabs(): ?array
    {
        return $this->numberTabs;
    }

    /**
     * Specifies a tag on the document where you want the recipient to enter a number. It uses the same parameters as a Text tab, with the validation message and pattern set for number information.

     When getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
     *
     * @param Number[] $numberTabs
     *
     * @return self
     */
    public function setNumberTabs(?array $numberTabs): self
    {
        $this->numberTabs = $numberTabs;

        return $this;
    }

    /**
     * Specifies a tag on the document in a location where the recipient can select one option from a group of options using a radio button. The radio buttons do not have to be on the same page in a document.
     *
     * @return RadioGroup[]
     */
    public function getRadioGroupTabs(): ?array
    {
        return $this->radioGroupTabs;
    }

    /**
     * Specifies a tag on the document in a location where the recipient can select one option from a group of options using a radio button. The radio buttons do not have to be on the same page in a document.
     *
     * @param RadioGroup[] $radioGroupTabs
     *
     * @return self
     */
    public function setRadioGroupTabs(?array $radioGroupTabs): self
    {
        $this->radioGroupTabs = $radioGroupTabs;

        return $this;
    }

    /**
     * Specifies a tag on the document when you want the recipient to add supporting documents to an envelope.
     *
     * @return SignerAttachment[]
     */
    public function getSignerAttachmentTabs(): ?array
    {
        return $this->signerAttachmentTabs;
    }

    /**
     * Specifies a tag on the document when you want the recipient to add supporting documents to an envelope.
     *
     * @param SignerAttachment[] $signerAttachmentTabs
     *
     * @return self
     */
    public function setSignerAttachmentTabs(?array $signerAttachmentTabs): self
    {
        $this->signerAttachmentTabs = $signerAttachmentTabs;

        return $this;
    }

    /**
     * A complex type the contains information about the tag that specifies where the recipient places their signature in the document. The "optional" parameter sets if the signature is required or optional.
     *
     * @return SignHere[]
     */
    public function getSignHereTabs(): ?array
    {
        return $this->signHereTabs;
    }

    /**
     * A complex type the contains information about the tag that specifies where the recipient places their signature in the document. The "optional" parameter sets if the signature is required or optional.
     *
     * @param SignHere[] $signHereTabs
     *
     * @return self
     */
    public function setSignHereTabs(?array $signHereTabs): self
    {
        $this->signHereTabs = $signHereTabs;

        return $this;
    }

    /**
     * Specifies a tag on the document where you want the recipient to enter a Social Security Number (SSN). A SSN can be typed with or without dashes. It uses the same parameters as a Text tab, with the validation message and pattern set for SSN information.

     When getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
     *
     * @return Ssn[]
     */
    public function getSsnTabs(): ?array
    {
        return $this->ssnTabs;
    }

    /**
     * Specifies a tag on the document where you want the recipient to enter a Social Security Number (SSN). A SSN can be typed with or without dashes. It uses the same parameters as a Text tab, with the validation message and pattern set for SSN information.

     When getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
     *
     * @param Ssn[] $ssnTabs
     *
     * @return self
     */
    public function setSsnTabs(?array $ssnTabs): self
    {
        $this->ssnTabs = $ssnTabs;

        return $this;
    }

    /**
     * Specifies a that that is an adaptable field that allows the recipient to enter different text information.

     When getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
     *
     * @return Text[]
     */
    public function getTextTabs(): ?array
    {
        return $this->textTabs;
    }

    /**
     * Specifies a that that is an adaptable field that allows the recipient to enter different text information.

     When getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
     *
     * @param Text[] $textTabs
     *
     * @return self
     */
    public function setTextTabs(?array $textTabs): self
    {
        $this->textTabs = $textTabs;

        return $this;
    }

    /**
     * Specifies a tag on the document where you want the recipient's title to appear.

     When getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
     *
     * @return Title[]
     */
    public function getTitleTabs(): ?array
    {
        return $this->titleTabs;
    }

    /**
     * Specifies a tag on the document where you want the recipient's title to appear.

     When getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
     *
     * @param Title[] $titleTabs
     *
     * @return self
     */
    public function setTitleTabs(?array $titleTabs): self
    {
        $this->titleTabs = $titleTabs;

        return $this;
    }

    /**
     * @return View[]
     */
    public function getViewTabs(): ?array
    {
        return $this->viewTabs;
    }

    /**
     * @param View[] $viewTabs
     *
     * @return self
     */
    public function setViewTabs(?array $viewTabs): self
    {
        $this->viewTabs = $viewTabs;

        return $this;
    }

    /**
     * Specifies a tag on the document where you want the recipient to enter a ZIP code. The ZIP code can be a five numbers or the ZIP+4 format with nine numbers. The zip code can be typed with or without dashes. It uses the same parameters as a Text tab, with the validation message and pattern set for ZIP code information.

     When getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
     *
     * @return Zip[]
     */
    public function getZipTabs(): ?array
    {
        return $this->zipTabs;
    }

    /**
     * Specifies a tag on the document where you want the recipient to enter a ZIP code. The ZIP code can be a five numbers or the ZIP+4 format with nine numbers. The zip code can be typed with or without dashes. It uses the same parameters as a Text tab, with the validation message and pattern set for ZIP code information.

     When getting information that includes this tab type, the original value of the tab when the associated envelope was sent is included in the response.
     *
     * @param Zip[] $zipTabs
     *
     * @return self
     */
    public function setZipTabs(?array $zipTabs): self
    {
        $this->zipTabs = $zipTabs;

        return $this;
    }
}
