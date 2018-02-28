<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class TemplateDocumentFields
{
    /**
     * The array of name/value custom data strings to be added to a document. Custom document field information is returned in the status, but otherwise is not used by DocuSign. The array contains the elements:.

     * name - A string that can be a maximum of 50 characters.
     * value - A string that can be a maximum of 200 characters.

     *IMPORTANT*: If you are using xml, the name/value pair is contained in a nameValue element.

     *
     * @var NameValue[]
     */
    protected $documentFields;

    /**
     * The array of name/value custom data strings to be added to a document. Custom document field information is returned in the status, but otherwise is not used by DocuSign. The array contains the elements:.

     * name - A string that can be a maximum of 50 characters.
     * value - A string that can be a maximum of 200 characters.

     *IMPORTANT*: If you are using xml, the name/value pair is contained in a nameValue element.

     *
     * @return NameValue[]
     */
    public function getDocumentFields(): ?array
    {
        return $this->documentFields;
    }

    /**
     * The array of name/value custom data strings to be added to a document. Custom document field information is returned in the status, but otherwise is not used by DocuSign. The array contains the elements:.

     * name - A string that can be a maximum of 50 characters.
     * value - A string that can be a maximum of 200 characters.

     *IMPORTANT*: If you are using xml, the name/value pair is contained in a nameValue element.

     *
     * @param NameValue[] $documentFields
     *
     * @return self
     */
    public function setDocumentFields(?array $documentFields): self
    {
        $this->documentFields = $documentFields;

        return $this;
    }
}
