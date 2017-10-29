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
    public function getDocumentEndPage()
    {
        return $this->documentEndPage;
    }

    /**
     * @param string $documentEndPage
     *
     * @return self
     */
    public function setDocumentEndPage($documentEndPage = null)
    {
        $this->documentEndPage = $documentEndPage;

        return $this;
    }

    /**
     * @return string
     */
    public function getDocumentStartPage()
    {
        return $this->documentStartPage;
    }

    /**
     * @param string $documentStartPage
     *
     * @return self
     */
    public function setDocumentStartPage($documentStartPage = null)
    {
        $this->documentStartPage = $documentStartPage;

        return $this;
    }

    /**
     * @return string
     */
    public function getMatchPercentage()
    {
        return $this->matchPercentage;
    }

    /**
     * @param string $matchPercentage
     *
     * @return self
     */
    public function setMatchPercentage($matchPercentage = null)
    {
        $this->matchPercentage = $matchPercentage;

        return $this;
    }
}
