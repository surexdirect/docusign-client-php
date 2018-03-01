<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class IntegratedUserInfoList
{
    /**
     * @var string
     */
    protected $allUsersSelected;
    /**
     * The last position in the result set.
     *
     * @var string
     */
    protected $endPosition;
    /**
     * The URI for the next chunk of records based on the search request. It is `null` if this is the last set of results for the search.
     *
     * @var string
     */
    protected $nextUri;
    /**
     * The URI for the prior chunk of records based on the search request. It is `null` if this is the first set of results for the search.
     *
     * @var string
     */
    protected $previousUri;
    /**
     * The number of results returned in this response.
     *
     * @var string
     */
    protected $resultSetSize;
    /**
     * Starting position of the current result set.
     *
     * @var string
     */
    protected $startPosition;
    /**
     * The total number of items in the search's result set. It will always be greater than or equal to the value of the `resultSetSize` field.
     *
     * @var string
     */
    protected $totalSetSize;
    /**
     * @var UserInfo[]
     */
    protected $users;

    /**
     * @return string
     */
    public function getAllUsersSelected(): ?string
    {
        return $this->allUsersSelected;
    }

    /**
     * @param string $allUsersSelected
     *
     * @return self
     */
    public function setAllUsersSelected(?string $allUsersSelected): self
    {
        $this->allUsersSelected = $allUsersSelected;

        return $this;
    }

    /**
     * The last position in the result set.
     *
     * @return string
     */
    public function getEndPosition(): ?string
    {
        return $this->endPosition;
    }

    /**
     * The last position in the result set.
     *
     * @param string $endPosition
     *
     * @return self
     */
    public function setEndPosition(?string $endPosition): self
    {
        $this->endPosition = $endPosition;

        return $this;
    }

    /**
     * The URI for the next chunk of records based on the search request. It is `null` if this is the last set of results for the search.
     *
     * @return string
     */
    public function getNextUri(): ?string
    {
        return $this->nextUri;
    }

    /**
     * The URI for the next chunk of records based on the search request. It is `null` if this is the last set of results for the search.
     *
     * @param string $nextUri
     *
     * @return self
     */
    public function setNextUri(?string $nextUri): self
    {
        $this->nextUri = $nextUri;

        return $this;
    }

    /**
     * The URI for the prior chunk of records based on the search request. It is `null` if this is the first set of results for the search.
     *
     * @return string
     */
    public function getPreviousUri(): ?string
    {
        return $this->previousUri;
    }

    /**
     * The URI for the prior chunk of records based on the search request. It is `null` if this is the first set of results for the search.
     *
     * @param string $previousUri
     *
     * @return self
     */
    public function setPreviousUri(?string $previousUri): self
    {
        $this->previousUri = $previousUri;

        return $this;
    }

    /**
     * The number of results returned in this response.
     *
     * @return string
     */
    public function getResultSetSize(): ?string
    {
        return $this->resultSetSize;
    }

    /**
     * The number of results returned in this response.
     *
     * @param string $resultSetSize
     *
     * @return self
     */
    public function setResultSetSize(?string $resultSetSize): self
    {
        $this->resultSetSize = $resultSetSize;

        return $this;
    }

    /**
     * Starting position of the current result set.
     *
     * @return string
     */
    public function getStartPosition(): ?string
    {
        return $this->startPosition;
    }

    /**
     * Starting position of the current result set.
     *
     * @param string $startPosition
     *
     * @return self
     */
    public function setStartPosition(?string $startPosition): self
    {
        $this->startPosition = $startPosition;

        return $this;
    }

    /**
     * The total number of items in the search's result set. It will always be greater than or equal to the value of the `resultSetSize` field.
     *
     * @return string
     */
    public function getTotalSetSize(): ?string
    {
        return $this->totalSetSize;
    }

    /**
     * The total number of items in the search's result set. It will always be greater than or equal to the value of the `resultSetSize` field.
     *
     * @param string $totalSetSize
     *
     * @return self
     */
    public function setTotalSetSize(?string $totalSetSize): self
    {
        $this->totalSetSize = $totalSetSize;

        return $this;
    }

    /**
     * @return UserInfo[]
     */
    public function getUsers(): ?array
    {
        return $this->users;
    }

    /**
     * @param UserInfo[] $users
     *
     * @return self
     */
    public function setUsers(?array $users): self
    {
        $this->users = $users;

        return $this;
    }
}