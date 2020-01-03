<?php


namespace GoogleMaps\MatrixApi\RequestResponse\ResponseParser;


class GoogleMapsMatrixApiResponseParser implements GoogleApiResponseParserInterface
{
    public function parseResults($content)
    {
        $decodedContents = json_decode($content, true);

        $resultItems = [];
        foreach ($decodedContents['rows'] as $decodedContent){
            foreach ($decodedContent['elements'] as $row){
                if(array_key_exists('distance',$row) && array_key_exists('duration',$row)){
                    $distanceKm = floor($row['distance']['value'] / 1000);
                    $minutes = floor(($row['duration']['value'] / 60) % 60);

                    $resultItems= [
                        'distanceKm'=> $distanceKm,
                        'minutes'=> $minutes
                    ];
                }

            }
        }

        return $resultItems;
    }

    public function parseQueries($content)
    {
        // TODO: Implement parseQueries() method.
    }

    public function parseError($content)
    {
        // TODO: Implement parseError() method.
    }

    public function parseSearchInformation($content)
    {
        // TODO: Implement parseSearchInformation() method.
    }


}