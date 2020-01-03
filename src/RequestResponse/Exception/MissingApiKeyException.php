<?php


namespace GoogleMaps\MatrixApi\RequestResponse\Exception;


use RuntimeException;

class MissingApiKeyException extends RuntimeException
{
    public function __construct($message = 'Missing api key', \Exception $previous = null)
    {
        parent::__construct($message, 500, $previous);
    }
}