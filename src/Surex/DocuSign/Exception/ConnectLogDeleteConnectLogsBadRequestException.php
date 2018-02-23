<?php

namespace Surex\DocuSign\Exception;

class ConnectLogDeleteConnectLogsBadRequestException extends \RuntimeException implements ClientException
{
    private $errorDetails;
    function __construct(\Surex\DocuSign\Model\ErrorDetails $errorDetails)
    {
        parent::__construct('Error encountered.', 400);
        $this->errorDetails = $errorDetails;
    }
    function getErrorDetails()
    {
        return $this->errorDetails;
    }
}