<?php


namespace GoogleMaps\MatrixApi\Client;

use GoogleMaps\MatrixApi\RequestResponse\ApiQuery;
use GoogleMaps\MatrixApi\RequestResponse\ApiRequest;
use GoogleMaps\MatrixApi\RequestResponse\ApiResponse;
use GoogleMaps\MatrixApi\RequestResponse\ResponseParser\GoogleMapsMatrixApiResponseParser;

class GoogleMapsMatrixApiClient
{
    /**
     * @var string
     */
    protected $apiKey;

    /**
     * @var string
     */
    protected $url = 'https://maps.googleapis.com/maps/api/distancematrix/json';


    /**
     * GoogleMapsMatrixApiClient constructor.
     * @param string $apiKey
     */
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @param array $requestQueryParameters
     * @return ApiResponse
     */
    public function getResponse(array $requestQueryParameters): ApiResponse
    {
        $defaultSearchQuery = [
            'key' => $this->apiKey
        ];
        $searchQuery = array_merge($defaultSearchQuery, $requestQueryParameters);
        $apiQuery = new ApiQuery($searchQuery);
        $apiResponseParser = new GoogleMapsMatrixApiResponseParser();
        $url = $this->url;

        $apiRequest = new ApiRequest($url, $apiQuery, $apiResponseParser);

        return $apiRequest->getResponse();
    }

}