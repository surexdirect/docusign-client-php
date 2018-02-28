<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Exception;

class PowerFormsGetPowerFormsSendersBadRequestException extends \RuntimeException implements ClientException
{
    private $errorDetails;

    public function __construct(\Surex\DocuSign\Model\ErrorDetails $errorDetails)
    {
        parent::__construct('Error encountered.', 400);
        $this->errorDetails = $errorDetails;
    }

    public function getErrorDetails()
    {
        return $this->errorDetails;
    }
}
