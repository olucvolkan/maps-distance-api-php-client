<?php


namespace GoogleMaps\MatrixApi\RequestResponse;




use GoogleMaps\MatrixApi\RequestResponse\ResponseParser\GoogleApiResponseParserInterface;

class ApiResponse implements ApiResponseInterface
{
    private $content;

    private $parser;

    public function __construct($content, GoogleApiResponseParserInterface $parser)
    {
        $this->content = $content;
        $this->parser = $parser;
    }

    /**
     * @return array
     */
    public function getResults()
    {
        return $this->parser->parseResults($this->content);
    }

    public function getSearchInformation()
    {
        return $this->parser->parseSearchInformation($this->content);
    }


    public function getQueries()
    {
        return $this->parser->parseQueries($this->content);
    }

    public function getErrors()
    {
        return $this->parser->parseError($this->content);
    }
}