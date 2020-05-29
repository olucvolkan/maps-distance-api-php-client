<?php


namespace GoogleMaps\MatrixApi\RequestResponse\ResponseParser;


use GoogleMaps\MatrixApi\Models\Result;

interface GoogleApiResponseParserInterface
{
    public function parseResults($content):Result;

    public function parseError($content);

}