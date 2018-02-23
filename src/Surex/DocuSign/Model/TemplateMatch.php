<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class TemplateMatch
{
    /**
     * @var string
     */
    protected $documentEndPage;
    /**
     * @var string
     */
    protected $documentStartPage;
    /**
     * @var string
     */
    protected $matchPercentage;

    /**
     * @return string
     */
    public function getDocumentEndPage(): ?string
    {
        return $this->documentEndPage;
    }

    /**
     * @param string $documentEndPage
     *
     * @return self
     */
    public function setDocumentEndPage(?string $documentEndPage): self
    {
        $this->documentEndPage = $documentEndPage;

        return $this;
    }

    /**
     * @return string
     */
    public function getDocumentStartPage(): ?string
    {
        return $this->documentStartPage;
    }

    /**
     * @param string $documentStartPage
     *
     * @return self
     */
    public function setDocumentStartPage(?string $documentStartPage): self
    {
        $this->documentStartPage = $documentStartPage;

        return $this;
    }

    /**
     * @return string
     */
    public function getMatchPercentage(): ?string
    {
        return $this->matchPercentage;
    }

    /**
     * @param string $matchPercentage
     *
     * @return self
     */
    public function setMatchPercentage(?string $matchPercentage): self
    {
        $this->matchPercentage = $matchPercentage;

        return $this;
    }
}
