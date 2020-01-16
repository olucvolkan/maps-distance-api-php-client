<?php


use GoogleMaps\MatrixApi\Client\GoogleMapsMatrixApiClient;
use GoogleMaps\MatrixApi\Models\Unit;
use GoogleMaps\MatrixApi\RequestResponse\DistanceMatrix;

class ClientTest extends PHPUnit\Framework\TestCase
{

    private const API_KEY = '';

    public function testClient()
    {

        $distanceMatrix = new DistanceMatrix();

        $distanceMatrix->setOrigins('36.85773400000000,31.03660900000000')
            ->setDestinations('36.89928000000000,30.80135000000000')
            ->setUnits(Unit::IMPERIAL);

        $matrixClient = new GoogleMapsMatrixApiClient(self::API_KEY);
        $result = $matrixClient->request($distanceMatrix)->getResults();
        $this->assertArrayHasKey('distanceKm', $result);


    }

}