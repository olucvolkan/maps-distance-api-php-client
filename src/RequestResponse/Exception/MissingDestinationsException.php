<?php


namespace GoogleMaps\MatrixApi\RequestResponse\Exception;


use RuntimeException;

class MissingDestinationsException extends RuntimeException
{
    public function __construct($message = 'Missing destinations', \Exception $previous = null)
    {
        parent::__construct($message, 500, $previous);
    }
}