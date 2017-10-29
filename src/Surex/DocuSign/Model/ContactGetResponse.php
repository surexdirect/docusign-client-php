<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class ContactGetResponse
{
    /**
     * @var Contacts[]
     */
    protected $contacts;
    /**
     * @var string
     */
    protected $endPosition;
    /**
     * @var string
     */
    protected $nextUri;
    /**
     * @var string
     */
    protected $previousUri;
    /**
     * @var string
     */
    protected $resultSetSize;
    /**
     * @var string
     */
    protected $startPosition;
    /**
     * @var string
     */
    protected $totalSetSize;

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

    /**
     * @return string
     */
    public function getEndPosition()
    {
        return $this->endPosition;
    }

    /**
     * @param string $endPosition
     *
     * @return self
     */
    public function setEndPosition($endPosition = null)
    {
        $this->endPosition = $endPosition;

        return $this;
    }

    /**
     * @return string
     */
    public function getNextUri()
    {
        return $this->nextUri;
    }

    /**
     * @param string $nextUri
     *
     * @return self
     */
    public function setNextUri($nextUri = null)
    {
        $this->nextUri = $nextUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getPreviousUri()
    {
        return $this->previousUri;
    }

    /**
     * @param string $previousUri
     *
     * @return self
     */
    public function setPreviousUri($previousUri = null)
    {
        $this->previousUri = $previousUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getResultSetSize()
    {
        return $this->resultSetSize;
    }

    /**
     * @param string $resultSetSize
     *
     * @return self
     */
    public function setResultSetSize($resultSetSize = null)
    {
        $this->resultSetSize = $resultSetSize;

        return $this;
    }

    /**
     * @return string
     */
    public function getStartPosition()
    {
        return $this->startPosition;
    }

    /**
     * @param string $startPosition
     *
     * @return self
     */
    public function setStartPosition($startPosition = null)
    {
        $this->startPosition = $startPosition;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotalSetSize()
    {
        return $this->totalSetSize;
    }

    /**
     * @param string $totalSetSize
     *
     * @return self
     */
    public function setTotalSetSize($totalSetSize = null)
    {
        $this->totalSetSize = $totalSetSize;

        return $this;
    }
}
