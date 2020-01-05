<?php


namespace GoogleMaps\MatrixApi\RequestResponse\Exception;


use RuntimeException;

class MissingOriginsException extends RuntimeException
{
    public function __construct($message = 'Missing origins', \Exception $previous = null)
    {
        parent::__construct($message, 500, $previous);
    }
}