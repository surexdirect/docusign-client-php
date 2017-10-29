<?php

/*
 * Copyright (c) 2017, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class DocumentVisibility
{
    /**
     * @var string
     */
    protected $documentId;
    /**
     * @var ErrorDetails
     */
    protected $errorDetails;
    /**
     * @var string
     */
    protected $recipientId;
    /**
     * @var string
     */
    protected $rights;
    /**
     * @var string
     */
    protected $visible;

    /**
     * @return string
     */
    public function getDocumentId()
    {
        return $this->documentId;
    }

    /**
     * @param string $documentId
     *
     * @return self
     */
    public function setDocumentId($documentId = null)
    {
        $this->documentId = $documentId;

        return $this;
    }

    /**
     * @return ErrorDetails
     */
    public function getErrorDetails()
    {
        return $this->errorDetails;
    }

    /**
     * @param ErrorDetails $errorDetails
     *
     * @return self
     */
    public function setErrorDetails(ErrorDetails $errorDetails = null)
    {
        $this->errorDetails = $errorDetails;

        return $this;
    }

    /**
     * @return string
     */
    public function getRecipientId()
    {
        return $this->recipientId;
    }

    /**
     * @param string $recipientId
     *
     * @return self
     */
    public function setRecipientId($recipientId = null)
    {
        $this->recipientId = $recipientId;

        return $this;
    }

    /**
     * @return string
     */
    public function getRights()
    {
        return $this->rights;
    }

    /**
     * @param string $rights
     *
     * @return self
     */
    public function setRights($rights = null)
    {
        $this->rights = $rights;

        return $this;
    }

    /**
     * @return string
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * @param string $visible
     *
     * @return self
     */
    public function setVisible($visible = null)
    {
        $this->visible = $visible;

        return $this;
    }
}
