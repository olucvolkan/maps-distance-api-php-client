<?php


use GoogleMaps\MatrixApi\Client\GoogleMapsMatrixApiClient;
use GoogleMaps\MatrixApi\Models\Result;
use GoogleMaps\MatrixApi\Models\Unit;
use GoogleMaps\MatrixApi\RequestResponse\DistanceMatrix;

use PHPUnit\Framework\TestCase;
class ClientTest extends TestCase
{

    private const API_KEY = '';

    public function testClient(): void
    {

        $distanceMatrix = new DistanceMatrix();

        $distanceMatrix->setOrigins('Vancouver, BC, Canada | Seattle, État de Washington, États-Unis')
            ->setDestinations('San Francisco, Californie | États-Unis,Victoria, BC, Canada')
            ->setUnits(Unit::IMPERIAL);

        $matrixClient = new GoogleMapsMatrixApiClient(self::API_KEY);
        $result = $matrixClient->request($distanceMatrix)->getResults();

        $this->assertInstanceOf(Result::class,$result);
        $resultArray = $result->jsonSerialize();

        $this->assertArrayHasKey('status',$resultArray);
        $this->assertArrayHasKey('originAddressses',$resultArray);
        $this->assertArrayHasKey('destinationsAddresses',$resultArray);
        $this->assertArrayHasKey('items',$resultArray);

    }

}