<?php


namespace GoogleMaps\MatrixApi\RequestResponse\ResponseParser;


use GoogleMaps\MatrixApi\Models\Distance;
use GoogleMaps\MatrixApi\Models\Duration;
use GoogleMaps\MatrixApi\Models\Item;
use GoogleMaps\MatrixApi\Models\Result;

class GoogleMapsMatrixApiResponseParser implements GoogleApiResponseParserInterface
{
    public function parseResults($content): Result
    {
        $decodedContents = json_decode($content, true);

        $resultItems = [];
        foreach ($decodedContents['rows']  as $i => $decodedContent) {
            foreach ($decodedContent['elements'] as  $destinationCount =>  $row) {
                if (array_key_exists('distance', $row) && array_key_exists('duration', $row)) {
                    $originAddress = $decodedContents['origin_addresses'][$i];
                    $destinationAddress = $decodedContents['destination_addresses'][$destinationCount];
                    $distance = (new Distance())
                        ->setValue($row['distance']['value'])
                        ->setUnitValue($row['distance']['text']);

                    $duration = (new Duration())
                        ->setValue($row['duration']['value'])
                        ->setUnitValue($row['duration']['text']);

                    $item = new Item();

                    $item->setDistance($distance)
                        ->setDuration($duration)
                        ->setStatus($row['status'])
                        ->setDestinationAddress($destinationAddress)
                        ->setOriginAddress($originAddress);

                    $resultItems[] = $item;
                }

            }
        }
        return (new Result())
            ->setStatus($decodedContents['status'])
            ->setOriginAddresses($decodedContents['origin_addresses'])
            ->setDestinationAddresses($decodedContents['destination_addresses'])
            ->setItems($resultItems);

    }

    public function parseError($content)
    {
        // TODO: Implement parseError() method.
    }



}