<?php


namespace GoogleMaps\MatrixApi\RequestResponse\ResponseParser;


interface GoogleApiResponseParserInterface
{
    public function parseResults($content);

    public function parseQueries($content);

    public function parseError($content);

    public function parseSearchInformation($content);

}