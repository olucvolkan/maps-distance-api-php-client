<?php


use GoogleMaps\MatrixApi\Client\GoogleMapsMatrixApiClient;

class ClientTest extends PHPUnit\Framework\TestCase
{

    private const API_KEY = '';

    public function testClient()
    {

        $requestParameters = [
            'units' => 'imperial',
            'origins' => '36.85773400000000,31.03660900000000',
            'destinations' => '36.89928000000000,30.80135000000000',
        ];

        $matrixClient = new GoogleMapsMatrixApiClient(self::API_KEY);
        $result = $matrixClient->getResponse($requestParameters)->getResults();
        $this->assertArrayHasKey('distanceKm', $result);


    }

}